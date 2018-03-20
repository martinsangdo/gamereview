<?php defined('BASEPATH') OR exit('No direct script access allowed');

require (APPPATH.'/libraries/REST_Controller.php');

Class User_api extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('account_model');
        $this->load->model('account_info_model');
        $this->load->model('account_jwt_model');
        $this->load->model('push_token_model');
        $this->load->model('account_language_setting_model');
    }

    /*
     * function index
     * method:
     * params:
     */
    public function index_get()
    {
        $res = RestSuccess('user_api');
        $this->response($res, SUCCESS_CODE);
    }

    /*
     * function register
     * method: post
     * params: username, password, fullname, captcha
     */
    function register_post()
    {
        /*user info*/
        $username = $this->post('username');
        $password = $this->post('password');
        $email = $this->post('email');
        $gender = !empty($this->post('gender')) ? strtolower($this->post('gender')) : GENDER_DEFAULT;
        $phone = $this->post('phone');
        $birthday = !empty($this->post('birthday')) ? date('Y-m-d', strtotime($this->post('birthday'))) : null;
        $last_name = $this->post('last_name');
        $first_name = $this->post('first_name');
        $fullname = $this->post('fullname');
        $address = $this->post('address');

        /*device info*/
        $device_id = $this->post('device_id');
        $device_name = $this->post('device_name');
        $device_version = $this->post('device_version');
        $app_id = $this->post('app_id');
        $app_name = $this->post('app_name');
        $app_version = $this->post('app_version');

        /*push token*/
        $apple_token = $this->post('apple_token');
        $firebase_token = $this->post('firebase_token');
        $timezone = $this->post('timezone');

        $captcha = $this->post('captcha');

        $check_verify_params = checkVerifyParams([
            $username,
            $password,
            $app_id,
            $device_id,
            $captcha
        ]);
        if(!empty($check_verify_params)){
            $this->response(RestBadRequest(MISMATCH_PARAMS_MSG), BAD_REQUEST_CODE);
        }

        if(!$this->checkCaptcha($captcha)){
//            $this->writeLog(current_url(), $captcha);
//            $this->writeLog(current_url(), $this->session->userdata('CAPTCHA_CODE'));
//            $this->writeLog(current_url(), $this->session->userdata('CAPTCHA_EXPIRE_TIME'));
            $this->response(RestBadRequest(WRONG_CAPTCHA_MSG), BAD_REQUEST_CODE);
        }
        //delete captcha session
        $session_userdata = [
            'CAPTCHA_EXPIRE_TIME' => '',
            'CAPTCHA_CODE' => ''
        ];
        $this->session->set_userdata($session_userdata);


        //check user exists
        $where = "
            username like '$username' 
            or (email like '$email' and email is not null)
        ";
        $user_exists = $this->user_model->get_first_row($where);
        if(!empty($user_exists)){
            $this->response(RestBadRequest(USER_EXISTED_MSG), BAD_REQUEST_CODE);
        }

        //insert account tb
        $this->account_model->create(array(
            'first_name' => $first_name,
            'last_name' => $last_name,
            'fullname' => $fullname,
            'plain_name' => skipVN($fullname, true),
            'create_time_mi' => CURRENT_MILLISECONDS,
            'app_id' => $app_id,
            'app_name' => $app_name,
            'app_version' => $app_version,
            'device_id' => $device_id,
            'create_time' => CURRENT_TIME,
            'update_time' => CURRENT_TIME,
        ));

        $account_id = $this->db->insert_id();

        //insert account_info tb
        $this->account_info_model->create([
            'address' => $address,
            'phone' => $phone,
            'birthday' => $birthday,
            'gender' => $gender,
            'account_id' => $account_id
        ]);

        //insert user tb
        $this->user_model->create([
           'username' => $username,
            'password' => $password,
            'email' => $email,
            'last_login' => CURRENT_TIME,
            'account_id' => $account_id,
        ]);

        //insert account_jwt
        $jwt_generator = new JWT();
        $jwt = $jwt_generator::encode([
            'account_id' => $account_id,
            'app_id' => $app_id,
            'device_id' => $device_id,
            'time_mi' => CURRENT_MILLISECONDS,
        ], SERVER_KEY);

        $this->account_jwt_model->create([
            'jwt' => $jwt,
            'expire_time' => JWT_EXPIRE_TIME, // 7 days
        ]);

        //upsert push_token
        $data_push_token = [
            'account_id' => $account_id,
            'apple_token' => $apple_token,
            'firebase_token' => $firebase_token,
            'device_id' => $device_id,
            'device_name' => $device_name,
            'device_version' => $device_version,
            'timezone' => $timezone
        ];
        $this->upsertPushToken($data_push_token);

        $res = [
            '_id' => $account_id,
            'username' => $username,
            'email' => $email,
            'fullname' => $fullname,
            'phone' => $phone,
            'birthday' => !empty($birthday) ? date('d-m-Y', strtotime($birthday)) : '',
            'gender' => $gender,
            'language_code' => LANGUAGE_DEFAULT,
            'social_type' => SOCIAL_TYPE_DEFAULT,
            'jwt' => $jwt,
        ];

        //store user session
        $session_userdata = [
            'ACCOUNT_ID' => $account_id,
            'ACCOUNT_DATA' => json_encode($res, JSON_UNESCAPED_UNICODE)
        ];
        $this->session->set_userdata($session_userdata);

        $res = removeNullOfObject($res);
        $this->response(RestSuccess($res), SUCCESS_CODE);

    }

    /*
     * function login
     * method: post
     * params: username, password
     */
    function login_post()
    {
        $username = $this->post('username');
        $password = $this->post('password');

        /*device info*/
        $device_id = $this->post('device_id');
        $device_name = $this->post('device_name');
        $device_version = $this->post('device_version');
        $app_id = $this->post('app_id');
        $app_name = $this->post('app_name');
        $app_version = $this->post('app_version');

        /*push token*/
        $apple_token = $this->post('apple_token');
        $firebase_token = $this->post('firebase_token');
        $timezone = $this->post('timezone');

        $check_verify_params = checkVerifyParams([
            $username,
            $password,
            $app_id,
            $device_id,
        ]);
        if(!empty($check_verify_params)){
            $this->response(RestBadRequest(MISMATCH_PARAMS_MSG), BAD_REQUEST_CODE);
        }

        //check user exists
//        $where = [
//            'username' => $username,
//            'password' => $password
//        ];
        $where = "
            username like '$username' 
            and (password like '$password' or (password_reset like '$password' and password_reset is not null))
        ";
        $select = array(
            'user._id',
            'user.account_id',
            'user.email',
            'user.social_type',
            'account.fullname',
            'account.crop_img_src',
            'account.img_src',
            'account_info.address',
            'account_info.phone',
            'account_info.birthday',
            'account_info.gender',
            'account.status',
            'account.is_active',
            'account.is_delete',
        );
        $user = $this->user_model->findOne($where, $select);
        if(empty($user)){
            $this->response(RestBadRequest(INVALID_USERNAME_OR_PASSWORD_MSG), BAD_REQUEST_CODE);
        }
        else{
            if($user->status == NOT_ACTIVATED){
                $this->response(RestBadRequest(USER_IS_NOT_ACTIVATED_MSG), BAD_REQUEST_CODE);
            }
            else if($user->status == BANNED){
                $this->response(RestBadRequest(USER_IS_BANNED_MSG), BAD_REQUEST_CODE);
            }
            if($user->is_delete == true){
                $this->response(RestBadRequest(USER_IS_NOT_EXISTED_MSG), BAD_REQUEST_CODE);
            }
        }

        //update user
        $this->user_model->update_by_condition([
           '_id' => $user->_id
        ], [
            'last_login' => CURRENT_TIME
        ]);
        //update account
        $this->account_model->update_by_condition([
           '_id' => $user->account_id
        ], [
            'app_id' => $app_id,
            'app_name' => $app_name,
            'app_version' => $app_version,
            'device_id' => $device_id,
            'update_time' => CURRENT_TIME,
        ]);

        //insert account_jwt
        $jwt_generator = new JWT();
        $jwt = $jwt_generator::encode([
            'account_id' => $user->account_id,
            'app_id' => $app_id,
            'device_id' => $device_id,
            'time_mi' => CURRENT_MILLISECONDS,
        ], SERVER_KEY);

        $this->account_jwt_model->create([
            'jwt' => $jwt,
            'expire_time' => JWT_EXPIRE_TIME, // 7 days
        ]);

        //get account_language_setting
        $account_language_setting = $this->account_language_setting_model->findOne([
            'account_language_setting.account_id' => $user->account_id,
        ], [
            'language._id',
            'language.code',
            'language.name'
        ]);

        //upsert push_token
        $data_push_token = [
            'account_id' => $user->account_id,
            'apple_token' => $apple_token,
            'firebase_token' => $firebase_token,
            'device_id' => $device_id,
            'device_name' => $device_name,
            'device_version' => $device_version,
            'timezone' => $timezone
        ];
        $this->upsertPushToken($data_push_token);

        $res = [
            '_id' => $user->account_id,
            'email' => $user->email,
            'fullname' => $user->fullname,
            'phone' => $user->phone,
            'birthday' => !empty($user->birthday) ? date('d-m-Y', strtotime($user->birthday)) : '',
            'gender' => $user->gender,
            'crop_img_src' => $user->crop_img_src,
            'img_src' => $user->img_src,
            'language_code' => !empty($account_language_setting) ? $account_language_setting->code : LANGUAGE_DEFAULT,
            'social_type' => !empty($user->social_type) ? $user->social_type : SOCIAL_TYPE_DEFAULT,
            'jwt' => $jwt,
        ];

        //store user session
        $session_userdata = [
            'ACCOUNT_ID' => $user->account_id,
            'ACCOUNT_DATA' => json_encode($res, JSON_UNESCAPED_UNICODE)
        ];
        $this->session->set_userdata($session_userdata);

        $res = removeNullOfObject($res);
        $this->response(RestSuccess($res), SUCCESS_CODE);
    }

    /*
     * function register & login via social (fb, gg, zalo, ...)
     * method: post
     * params: fb_id, gg_id
     */
    function login_social_post()
    {
        $social_type = strtolower($this->post('social_type'));
        $social_id = $this->post('social_id');
        $social_token = $this->post('social_token');
        $social_img_src = $this->post('social_img_src');
        $email = $this->post('email');
        $gender = !empty($this->post('gender')) ? strtolower($this->post('gender')) : GENDER_DEFAULT;
        $phone = $this->post('phone');
        $birthday = !empty($this->post('birthday')) ? date('Y-m-d', strtotime($this->post('birthday'))) : null;
        $last_name = $this->post('last_name');
        $first_name = $this->post('first_name');
        $fullname = !empty($this->post('fullname')) ? $this->post('fullname') : $social_id;
        $address = $this->post('address');

        /*device info*/
        $device_id = $this->post('device_id');
        $device_name = $this->post('device_name');
        $device_version = $this->post('device_version');
        $app_id = $this->post('app_id');
        $app_name = $this->post('app_name');
        $app_version = $this->post('app_version');

        /*push token*/
        $apple_token = $this->post('apple_token');
        $firebase_token = $this->post('firebase_token');
        $timezone = $this->post('timezone');

        $check_verify_params = checkVerifyParams([
            $social_type,
            $social_id,
            $app_id,
            $device_id,
        ]);
        if(!empty($check_verify_params)){
            $this->response(RestBadRequest(MISMATCH_PARAMS_MSG), BAD_REQUEST_CODE);
        }

        //check email exists
        $where = "
            (email like '$email' and email is not null)
            and social_id not like '$social_id'
        ";
        $email_exists = $this->user_model->get_first_row($where);
        if(!empty($email_exists)){
            $this->response(RestBadRequest(EMAIL_IS_EXISTED_MSG), BAD_REQUEST_CODE);
        }

        //check user exists
        $where = [
            'social_id' => $social_id,
        ];
        $select = array(
            'user._id',
            'user.account_id',
            'user.username',
            'user.email',
            'account.fullname',
            'account.crop_img_src',
            'account.img_src',
            'account.social_img_src',
            'account_info.address',
            'account_info.phone',
            'account_info.birthday',
            'account_info.gender',
            'account.status',
            'account.is_active',
            'account.is_delete',
            'account.is_update_profile',
        );
        $user = $this->user_model->findOne($where, $select);
        if(empty($user)){ //insert new
            //insert account tb
            $this->account_model->create([
                'first_name' => $first_name,
                'last_name' => $last_name,
                'fullname' => $fullname,
                'plain_name' => skipVN($fullname, true),
                'create_time_mi' => CURRENT_MILLISECONDS,
                'app_id' => $app_id,
                'app_name' => $app_name,
                'app_version' => $app_version,
                'device_id' => $device_id,
                'social_img_src' => $social_img_src,
                'create_time' => CURRENT_TIME,
                'update_time' => CURRENT_TIME,
            ]);

            $account_id = $this->db->insert_id();

            //insert account_info tb
            $this->account_info_model->create([
                'address' => $address,
                'phone' => $phone,
                'birthday' => $birthday,
                'gender' => $gender,
                'social_token' => $social_token,
                'account_id' => $account_id
            ]);

            //insert user tb
            $this->user_model->create([
                'social_type' => $social_type,
                'social_id' => $social_id,
                'username' => $social_id,
                'email' => $email,
                'last_login' => CURRENT_TIME,
                'account_id' => $account_id,
            ]);
        }
        else{ // user exists => update

            if($user->is_update_profile) {

                $account_id = $user->account_id;
                $crop_img_src = $user->crop_img_src;
                $img_src = $user->img_src;

                if ($user->status == NOT_ACTIVATED) {
                    $this->response(RestBadRequest(USER_IS_NOT_ACTIVATED_MSG), BAD_REQUEST_CODE);
                } else if ($user->status == BANNED) {
                    $this->response(RestBadRequest(USER_IS_BANNED_MSG), BAD_REQUEST_CODE);
                }
                if ($user->is_delete == true) {
                    $this->response(RestBadRequest(USER_IS_NOT_EXISTED_MSG), BAD_REQUEST_CODE);
                }

                //update user
                $this->user_model->update_by_condition([
                    '_id' => $user->_id
                ], [
                    'last_login' => CURRENT_TIME
                ]);
                //update account
                $this->account_model->update_by_condition([
                    '_id' => $user->account_id
                ], [
                    'first_name' => $first_name,
                    'last_name' => $last_name,
                    'fullname' => $fullname,
                    'plain_name' => skipVN($fullname, true),
                    'app_id' => $app_id,
                    'app_name' => $app_name,
                    'app_version' => $app_version,
                    'device_id' => $device_id,
                    'social_img_src' => $social_img_src,
                    'update_time' => CURRENT_TIME,
                ]);
                //update account_info
                $this->account_info_model->update_by_condition([
                    'account_id' => $user->account_id
                ], [
                    'address' => $address,
                    'phone' => $phone,
                    'birthday' => $birthday,
                    'gender' => $gender,
                    'social_token' => $social_token,
                ]);
            }/*$user->is_update_profile*/
        }


        //insert account_jwt
        $jwt_generator = new JWT();
        $jwt = $jwt_generator::encode([
            'account_id' => $account_id,
            'app_id' => $app_id,
            'device_id' => $device_id,
            'time_mi' => CURRENT_MILLISECONDS,
        ], SERVER_KEY);

        $this->account_jwt_model->create([
            'jwt' => $jwt,
            'expire_time' => JWT_EXPIRE_TIME, // 7 days
        ]);

        //get account_language_setting
        $account_language_setting = $this->account_language_setting_model->findOne([
            'account_language_setting.account_id' => $account_id,
        ], [
            'language._id',
            'language.code',
            'language.name'
        ]);

        //upsert push_token
        $data_push_token = [
            'account_id' => $account_id,
            'apple_token' => $apple_token,
            'firebase_token' => $firebase_token,
            'device_id' => $device_id,
            'device_name' => $device_name,
            'device_version' => $device_version,
            'timezone' => $timezone
        ];
        $this->upsertPushToken($data_push_token);

        $res = [
            '_id' => $account_id,
            'username' => $social_id,
            'email' => $email,
            'fullname' => $fullname,
            'phone' => $phone,
            'birthday' => !empty($birthday) ? date('d-m-Y', strtotime($birthday)) : '',
            'gender' => $gender,
            'crop_img_src' => !empty($crop_img_src) ? $crop_img_src : '',
            'img_src' => !empty($img_src) ? $img_src : '',
            'social_img_src' => $social_img_src,
            'language_code' => !empty($account_language_setting) ? $account_language_setting->code : LANGUAGE_DEFAULT,
            'social_type' => !empty($social_type) ? $social_type : SOCIAL_TYPE_DEFAULT,
            'jwt' => $jwt,
        ];

        //store user session
        $session_userdata = [
            'ACCOUNT_ID' => $account_id,
            'ACCOUNT_DATA' => json_encode($res, JSON_UNESCAPED_UNICODE)
        ];
        $this->session->set_userdata($session_userdata);

        $res = removeNullOfObject($res);
        $this->response(RestSuccess($res), SUCCESS_CODE);
    }

    /*
     * function check login
     * method: post
     * params: jwt
     */
    function check_login_post()
    {
        $jwt = $this->input->request_headers()['Authorization'];
        /* use for CI */
        if (!(strpos($jwt, 'Bearer') !== false)) {
            $this->response(RestForbidden(INVALID_TOKEN_MSG), FORBIDDEN_CODE);
        }
        /* end use for CI */
        $jwt = str_replace('Bearer ', '', $jwt);
        /*device info*/
        $device_id = $this->post('device_id');
        $device_name = $this->post('device_name');
        $device_version = $this->post('device_version');
        $app_id = $this->post('app_id');
        $app_name = $this->post('app_name');
        $app_version = $this->post('app_version');
        /*push token*/
        $apple_token = $this->post('apple_token');
        $firebase_token = $this->post('firebase_token');
        $timezone = $this->post('timezone');

        //check token
        $where = [
            'jwt' => $jwt
        ];
        $account_jwt = $this->account_jwt_model->findOne($where);
        if(empty($account_jwt)){
            $this->response(RestForbidden(INVALID_TOKEN_MSG), FORBIDDEN_CODE);
        }


        if($account_jwt->expire_time < time()){ //extension expire_time
            $this->account_jwt_model->update_by_condition([
                'jwt' => $jwt
            ], [
                'expire_time' => JWT_EXPIRE_TIME
            ]);
        }

        $jwt_generator = new JWT();
        $jwt_decode = $jwt_generator::decode($jwt, SERVER_KEY);

        $where = [
            'user.account_id' => $jwt_decode->account_id,
            'account.is_delete' => false,
        ];
        $select = array(
            'user.account_id',
            'user.username',
            'user.email',
            'user.social_type',
            'account.fullname',
            'account.crop_img_src',
            'account.img_src',
            'account.social_img_src',
            'account_info.address',
            'account_info.phone',
            'account_info.birthday',
            'account_info.gender',
            'account.status',
            'account.is_active',
            'account.is_delete',
        );
        $user = $this->user_model->findOne($where, $select);
        if(empty($user)){
            $this->response(RestBadRequest(USER_IS_NOT_EXISTED_MSG), BAD_REQUEST_CODE);
        }
        else{
            if($user->status == NOT_ACTIVATED){
                $this->response(RestBadRequest(USER_IS_NOT_ACTIVATED_MSG), BAD_REQUEST_CODE);
            }
            else if($user->status == BANNED){
                $this->response(RestBadRequest(USER_IS_BANNED_MSG), BAD_REQUEST_CODE);
            }
        }

        //get account_language_setting
        $account_language_setting = $this->account_language_setting_model->findOne([
            'account_language_setting.account_id' => $user->account_id,
        ], [
            'language._id',
            'language.code',
            'language.name'
        ]);

        //upsert push_token
        $data_push_token = [
            'account_id' => $user->account_id,
            'apple_token' => $apple_token,
            'firebase_token' => $firebase_token,
            'device_id' => $device_id,
            'device_name' => $device_name,
            'device_version' => $device_version,
            'timezone' => $timezone
        ];
        $this->upsertPushToken($data_push_token);

        $res = [
            '_id' => $user->account_id,
            'username' => $user->username,
            'email' => $user->email,
            'fullname' => $user->fullname,
            'phone' => $user->phone,
            'birthday' => !empty($user->birthday) ? date('d-m-Y', strtotime($user->birthday)) : '',
            'gender' => $user->gender,
            'crop_img_src' => $user->crop_img_src,
            'img_src' => $user->img_src,
            'social_img_src' => $user->social_img_src,
            'language_code' => !empty($account_language_setting) ? $account_language_setting->code : LANGUAGE_DEFAULT,
            'social_type' => !empty($user->social_type) ? $user->social_type : SOCIAL_TYPE_DEFAULT,
            'jwt' => $jwt
        ];

        //store user session
        $session_userdata = [
            'ACCOUNT_ID' => $user->account_id,
            'ACCOUNT_DATA' => json_encode($res, JSON_UNESCAPED_UNICODE)
        ];
        $this->session->set_userdata($session_userdata);

        $res = removeNullOfObject($res);
        $this->response(RestSuccess($res), SUCCESS_CODE);
    }

    /*
     * function logout
     * method: post
     * params:
     */
    function logout_post()
    {
        /*check session & jwt*/
        $account_id = $this->session->userdata('ACCOUNT_ID');
        if(empty($account_id)){
            $this->response(RestForbidden(NOT_LOGIN_MSG), FORBIDDEN_CODE);
        }
        $jwt = $this->input->request_headers()['Authorization'];
        if(!$this->checkVerifyJWT($jwt, $account_id)){
            $this->response(RestForbidden(INVALID_TOKEN_MSG), FORBIDDEN_CODE);
        }
        /*end check session & jwt*/

        /*push token*/
        $apple_token = $this->post('apple_token');
        $firebase_token = $this->post('firebase_token');

        //delete account_jwt
        $where = array(
            'jwt' => str_replace('Bearer ', '', $jwt)
        );
        $this->account_jwt_model->delete_by_condition($where);

        //delete push_token
        $where = "
            (apple_token like '$apple_token' and apple_token is not null)
            or (firebase_token like '$firebase_token' and firebase_token is not null)
        ";
        $this->push_token_model->delete_by_condition($where);


        //delete user session
        $session_userdata = [
            'ACCOUNT_ID' => '',
            'ACCOUNT_DATA' => ''
        ];
        $this->session->set_userdata($session_userdata);

        $this->response(RestSuccess(), SUCCESS_CODE);

    }

    /*
     * function get captcha base64 image
     * method: get
     * params:
     */
    function get_captcha_get(){
        $res = $this->generateCaptchaBase64();
        $this->response(RestSuccess($res), SUCCESS_CODE);
    }

    /*
     * function update profile
     * method: put
     * params: fullname, phone, address, ...
     */
    function update_profile_put()
    {
        /*check session & jwt*/
        $account_id = $this->session->userdata('ACCOUNT_ID');
        if (empty($account_id)) {
            $this->response(RestForbidden(NOT_LOGIN_MSG), FORBIDDEN_CODE);
        }
        $jwt = $this->input->request_headers()['Authorization'];
        if (!$this->checkVerifyJWT($jwt, $account_id)) {
            $this->response(RestForbidden(INVALID_TOKEN_MSG), FORBIDDEN_CODE);
        }
        /*end check session & jwt*/

        $email = $this->put('email');
        $gender = strtolower($this->put('gender'));
        $phone = $this->put('phone');
        $birthday = !empty($this->put('birthday')) ? date('Y-m-d', strtotime($this->put('birthday'))) : null;
        $last_name = $this->put('last_name');
        $first_name = $this->put('first_name');
        $fullname = $this->put('fullname');
        $address = $this->put('address');

        //check email exists
        $where = "
            (email like '$email' and email is not null)
            and account_id <> $account_id
        ";
        $email_exists = $this->user_model->get_first_row($where);
        if(!empty($email_exists)){
            $this->response(RestBadRequest(EMAIL_IS_EXISTED_MSG), BAD_REQUEST_CODE);
        }

        //update account tb
        $this->account_model->update_by_condition(array(
            '_id' => $account_id,
        ), array(
            'first_name' => $first_name,
            'last_name' => $last_name,
            'fullname' => $fullname,
            'plain_name' => skipVN($fullname, true),
            'update_time' => CURRENT_TIME,
        ));

        //update account_info tb
        $data_update = array(
            'address' => $address,
            'phone' => $phone,
            'birthday' => $birthday,
            'account_id' => $account_id
        );
        if(!empty($gender)){
            $data_update['gender'] = $gender;
        }

        $this->account_info_model->update_by_condition(array(
            'account_id' => $account_id,
        ), $data_update);

        //update user tb
        $this->user_model->update_by_condition(array(
            'account_id' => $account_id,
        ), array(
            'email' => $email,
        ));

        $where = [
            'account._id' => $account_id
        ];
        $select = array(
            'account.*',
            'account_info.address',
            'account_info.phone',
            'account_info.birthday',
            'account_info.gender',
            'user.username',
        );
        $account = $this->account_model->findOne($where, $select);

        $res = array(
            '_id' => $account_id,
            'username' => $account->username,
            'email' => $email,
            'fullname' => $fullname,
            'phone' => $phone,
            'birthday' => !empty($birthday) ? date('d-m-Y', strtotime($birthday)) : '',
            'gender' => !empty($gender) ? $gender : $account->gender,
            'language_code' => LANGUAGE_DEFAULT
        );

        $res = removeNullOfObject($res);
        $this->response(RestSuccess($res), SUCCESS_CODE);
    }

    /*
     * function upload tmp avatar
     * method: post
     * params: file
     */
//    function upload_tmp_avatar_post()
//    {
//        /*check session & jwt*/
//        $account_id = $this->session->userdata('ACCOUNT_ID');
//        if (empty($account_id)) {
//            $this->response(RestForbidden(NOT_LOGIN_MSG), FORBIDDEN_CODE);
//        }
//        $jwt = $this->input->request_headers()['Authorization'];
//        if (!$this->checkVerifyJWT($jwt, $account_id)) {
//            $this->response(RestForbidden(INVALID_TOKEN_MSG), FORBIDDEN_CODE);
//        }
//        /*end check session & jwt*/
//
//        $check_verify_params = checkVerifyParams([
//            $_FILES['crop_file']['name'],
//            $_FILES['file']['name'],
//        ]);
//        if(!empty($check_verify_params)){
//            $this->response(RestBadRequest(MISMATCH_PARAMS_MSG), BAD_REQUEST_CODE);
//        }
//
//        //upload crop_img_src
//        $img_path = $_FILES['crop_file']['name'];
//        $img_path_ext = pathinfo($img_path, PATHINFO_EXTENSION);
//        $img_name = cleanFileName(str_replace($img_path_ext, '', $img_path));
//        if (!is_dir(TMP_FOLDER_AVATAR)) {
//            mkdir('./' . TMP_FOLDER_AVATAR, 0777, TRUE);
//        }
//        $config['upload_path'] = './'. TMP_FOLDER_AVATAR;
//        $config['allowed_types'] = 'jpg|jpeg|png';
//        $file_name = strtolower('cr_'.strtotime('now') .'_'. $img_name .'.'. $img_path_ext);
//        $config['file_name'] = $file_name;
//
//        //Load upload library and initialize configuration
//        $this->load->library('upload', $config);
//        $this->upload->initialize($config);
//
//        $res = array();
//        if ($this->upload->do_upload('crop_file')) {
//            $res['crop_img_src'] = TMP_FOLDER_AVATAR .'/'. $config['file_name'];
//        }
//        else{
//            $this->response(RestServerError(), SERVER_ERROR_CODE);
//        }
//
//        //upload img_src
//        $img_path = $_FILES['file']['name'];
//        $img_path_ext = pathinfo($img_path, PATHINFO_EXTENSION);
//        $img_name = cleanFileName(str_replace($img_path_ext, '', $img_path));
//        if (!is_dir(TMP_FOLDER_AVATAR)) {
//            mkdir('./' . TMP_FOLDER_AVATAR, 0777, TRUE);
//        }
//        $config['upload_path'] = './'. TMP_FOLDER_AVATAR;
//        $config['allowed_types'] = 'jpg|jpeg|png';
//        $file_name = strtolower(strtotime('now') .'_'. $img_name .'.'. $img_path_ext);
//        $config['file_name'] = $file_name;
//
//        //Load upload library and initialize configuration
//        $this->load->library('upload', $config);
//        $this->upload->initialize($config);
//
//        if ($this->upload->do_upload('file')) {
//            $res['img_src'] = TMP_FOLDER_AVATAR .'/'. $config['file_name'];
//        }
//        else{
//            $this->response(RestServerError(), SERVER_ERROR_CODE);
//        }
//
//        $this->response(RestSuccess($res), SUCCESS_CODE);
//    }
//
//    /*
//     * function update avatar
//     * method: put
//     * params:
//     */
//    function upload_avatar_put()
//    {
//        /*check session & jwt*/
//        $account_id = $this->session->userdata('ACCOUNT_ID');
//        if (empty($account_id)) {
//            $this->response(RestForbidden(NOT_LOGIN_MSG), FORBIDDEN_CODE);
//        }
//        $jwt = $this->input->request_headers()['Authorization'];
//        if (!$this->checkVerifyJWT($jwt, $account_id)) {
//            $this->response(RestForbidden(INVALID_TOKEN_MSG), FORBIDDEN_CODE);
//        }
//        /*end check session & jwt*/
//
//        $crop_img_src = $this->put('crop_img_src');
//        $img_src = $this->put('img_src');
//
//        $check_verify_params = checkVerifyParams([
//            $crop_img_src,
//            $img_src,
//        ]);
//        if(!empty($check_verify_params)){
//            $this->response(RestBadRequest(MISMATCH_PARAMS_MSG), BAD_REQUEST_CODE);
//        }
//
//        $where = array(
//            'account._id' => $account_id,
//        );
//        $account = $this->account_model->findOne($where, '*');
//
//        if(!file_exists(UPLOAD_PATH. $crop_img_src) || !file_exists(UPLOAD_PATH. $img_src)) {
//            $this->response(RestBadRequest(FILE_IS_NOT_EXISTED_MSG), BAD_REQUEST_CODE);
//        }
//
//        //delete old avatar
//        if(file_exists(UPLOAD_PATH. $account->crop_img_src)) {
//            unlink(UPLOAD_PATH . $account->crop_img_src);
//        }
//        if(file_exists(UPLOAD_PATH. $account->img_src)) {
//            unlink(UPLOAD_PATH . $account->img_src);
//        }
//
//        /*crop_img_src*/
//        $arr_img_src = explode('/', $crop_img_src);
//        $file_name = $arr_img_src[count($arr_img_src) - 1];
//
//        //move img_src from tmp to real folder
//        $new_dir = FOLDER_IMG_UPLOAD .'/user/'. hash256($account_id). '/avatar';
//        if (!is_dir($new_dir)) {
//            mkdir('./' . $new_dir, 0777, TRUE);
//        }
//        $new_crop_img_src = $new_dir. '/'. $file_name;
//        $new_crop_img_path = UPLOAD_PATH . $new_crop_img_src;
//        rename(UPLOAD_PATH. $img_src, $new_crop_img_path);
//        /*end crop_img_src*/
//
//        /*img_src*/
//        $arr_img_src = explode('/', $img_src);
//        $file_name = $arr_img_src[count($arr_img_src) - 1];
//
//        //move img_src from tmp to real folder
//        $new_dir = FOLDER_IMG_UPLOAD .'/user/'. hash256($account_id). '/avatar';
//        if (!is_dir($new_dir)) {
//            mkdir('./' . $new_dir, 0777, TRUE);
//        }
//        $new_img_src = $new_dir. '/'. $file_name;
//        $new_img_path = UPLOAD_PATH . $new_img_src;
//        rename(UPLOAD_PATH. $img_src, $new_img_path);
//        /*end img_src*/
//
//        //update account tb
//        $this->account_model->update_by_condition(array(
//            '_id' => $account_id,
//        ), array(
//            'crop_img_src' => $new_crop_img_src,
//            'img_src' => $new_img_src,
//        ));
//
//        $res = array(
//            'crop_img_src' => $new_crop_img_src,
//            'img_src' => $new_img_src,
//        );
//        $this->response(RestSuccess($res), SUCCESS_CODE);
//    }

    /*
     * function update avatar
     * method: post
     * params:
     */
    function upload_avatar_post()
    {
        /*check session & jwt*/
        $account_id = $this->session->userdata('ACCOUNT_ID');
        if (empty($account_id)) {
            $this->response(RestForbidden(NOT_LOGIN_MSG), FORBIDDEN_CODE);
        }
        $jwt = $this->input->request_headers()['Authorization'];
        if (!$this->checkVerifyJWT($jwt, $account_id)) {
            $this->response(RestForbidden(INVALID_TOKEN_MSG), FORBIDDEN_CODE);
        }
        /*end check session & jwt*/

        $check_verify_params = checkVerifyParams([
            $_FILES['crop_file']['name'],
            $_FILES['file']['name'],
        ]);
        if(!empty($check_verify_params)){
            $this->response(RestBadRequest(MISMATCH_PARAMS_MSG), BAD_REQUEST_CODE);
        }

        $upload_dir = FOLDER_IMG_UPLOAD .'/user/'. hash256($account_id). '/avatar';
        if (!is_dir($upload_dir)) {
            mkdir('./' . $upload_dir, 0777, TRUE);
        }

        //upload crop_img_src
        $img_path = $_FILES['crop_file']['name'];
        $img_path_ext = pathinfo($img_path, PATHINFO_EXTENSION);
        $img_name = cleanFileName(str_replace($img_path_ext, '', $img_path));
        $config['upload_path'] = './'. $upload_dir;
        $config['allowed_types'] = 'jpg|jpeg|png';
        $file_name = strtolower('cr_'.strtotime('now') .'_'. $img_name .'.'. $img_path_ext);
        $config['file_name'] = $file_name;

        //Load upload library and initialize configuration
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        $res = array();
        if ($this->upload->do_upload('crop_file')) {
            $crop_img_src = $upload_dir .'/'. $config['file_name'];
        }
        else{
            $this->response(RestServerError(), SERVER_ERROR_CODE);
        }

        //upload img_src
        $img_path = $_FILES['file']['name'];
        $img_path_ext = pathinfo($img_path, PATHINFO_EXTENSION);
        $img_name = cleanFileName(str_replace($img_path_ext, '', $img_path));
        $config['upload_path'] = './'. $upload_dir;
        $config['allowed_types'] = 'jpg|jpeg|png';
        $file_name = strtolower(strtotime('now') .'_'. $img_name .'.'. $img_path_ext);
        $config['file_name'] = $file_name;

        //Load upload library and initialize configuration
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ($this->upload->do_upload('file')) {
            $img_src = $upload_dir .'/'. $config['file_name'];
        }
        else{
            $this->response(RestServerError(), SERVER_ERROR_CODE);
        }

        $where = array(
            'account._id' => $account_id,
        );
        $account = $this->account_model->findOne($where, '*');

        //delete old avatar
        if(file_exists(UPLOAD_PATH. $account->crop_img_src)) {
            unlink(UPLOAD_PATH . $account->crop_img_src);
        }
        if(file_exists(UPLOAD_PATH. $account->img_src)) {
            unlink(UPLOAD_PATH . $account->img_src);
        }

        //update account tb
        $this->account_model->update_by_condition(array(
            '_id' => $account_id,
        ), array(
            'crop_img_src' => $crop_img_src,
            'img_src' => $img_src,
        ));

        $res = array(
            'crop_img_src' => $crop_img_src,
            'img_src' => $img_src,
        );

        $this->response(RestSuccess($res), SUCCESS_CODE);
    }

    /*
     * function change password
     * method: put
     * params:
     */
    function change_password_put()
    {
        /*check session & jwt*/
        $account_id = $this->session->userdata('ACCOUNT_ID');
        if (empty($account_id)) {
            $this->response(RestForbidden(NOT_LOGIN_MSG), FORBIDDEN_CODE);
        }
        $jwt = $this->input->request_headers()['Authorization'];
        if (!$this->checkVerifyJWT($jwt, $account_id)) {
            $this->response(RestForbidden(INVALID_TOKEN_MSG), FORBIDDEN_CODE);
        }
        /*end check session & jwt*/

        $current_password = $this->put('current_password');
        $new_password = $this->put('new_password');

        $check_verify_params = checkVerifyParams([
            $current_password,
            $new_password,
        ]);
        if(!empty($check_verify_params)){
            $this->response(RestBadRequest(MISMATCH_PARAMS_MSG), BAD_REQUEST_CODE);
        }

        $where = array(
            'user.account_id' => $account_id,
            'password' => $current_password
        );
        $user = $this->user_model->findOne($where, 'user.*');
        if(empty($user)){
            $this->response(RestBadRequest(INVALID_CURRENT_PASSWORD_MSG), BAD_REQUEST_CODE);
        }

        $this->user_model->update_by_condition(array(
            '_id' => $user->_id
        ), array(
            'password' => $new_password
        ));

        $this->response(RestSuccess(), SUCCESS_CODE);
    }

    /*
     * function forgot password
     * method: post
     * params: email
     */
    function forgot_password_post()
    {
        $email = $this->post('email');
        $check_verify_params = checkVerifyParams([
            $email,
        ]);
        if(!empty($check_verify_params)){
            $this->response(RestBadRequest(MISMATCH_PARAMS_MSG), BAD_REQUEST_CODE);
        }

        $where = array(
            'user.email' => $email,
            'account.status not like' => BANNED,
        );
        $select = array(
            'user.*',
            'account.fullname'
        );
        $user = $this->user_model->findOne($where, $select);
        if(empty($user)){
            $this->response(RestBadRequest(USER_IS_NOT_EXISTED_MSG), BAD_REQUEST_CODE);
        }

        //generate new_password
        $new_password = strtolower(generateReferenceCode(0, 6));
        $this->user_model->update_by_condition(array(
            'email' => $email
        ), array(
            'password_reset' => hash256($new_password),
        ));

        //send email
        $data = array(
            'user' => $user,
            'new_password' => $new_password
        );
        $subject = '['. APP_TITLE_SHORT .'] Reset password';
        $message = $this->load->view('front/template/email/forgot_password', $data,  TRUE);
//        $this->sendEmail(FROM_EMAIL, TO_EMAIL, $subject, $message);
        $this->sendEmail(FROM_EMAIL, $email, $subject, $message);

        $this->response(RestSuccess(), SUCCESS_CODE);
    }
}