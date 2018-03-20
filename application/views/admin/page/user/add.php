<style>
    .select2-container{
        width: 50% !important;
    }
</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Thêm user mới
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('_admin/user/listing') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Thêm user mới</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <form class="form-validate form-horizontal" action="" id="frm_add" method="POST" enctype="multipart/form-data">
                <!-- main form -->
                <div class="col-md-12">
                    <!-- general form elements disabled -->
                    <div class="box box-warning">
                        <div class="box-header with-border">
                            <h3 class="box-title">Thông tin user</h3>
                        </div><!-- /.box-header -->

                        <div class="box-body">
                            <div class="panel-body">
                                <div class="col-xs-12">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#login">Đăng nhập</a></li>
                                        <li><a data-toggle="tab" href="#info">Thông tin</a></li>
                                    </ul>

                                    <div class="tab-content">
                                        <div id="login" class="tab-pane fade in active">
                                            <br/>
                                            <div class="form-group ">
                                                <label for="code" class="control-label col-lg-2">Username<span class="required">*</span></label>
                                                <div class="col-lg-5">
                                                    <input class="form-control" id="username" name="username" type="text" value="" required />
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label for="code" class="control-label col-lg-2">Mật khẩu<span class="required">*</span></label>
                                                <div class="col-lg-5">
                                                    <input class="form-control" id="password" name="password" type="password" value="" required />
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label for="code" class="control-label col-lg-2">Xác nhận mật khẩu<span class="required">*</span></label>
                                                <div class="col-lg-5">
                                                    <input class="form-control" id="re_password" name="re_password" type="password" value="" required />
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label for="title" class="control-label col-lg-2">Email</label>
                                                <div class="col-lg-5">
                                                    <input class="form-control" id="email" name="email" type="text" required />
                                                </div>
                                            </div>

                                            <!-- Checkbox group -->
                                            <div class="form-group ">
                                                <label for="show_product" class="control-label col-lg-2">Hiện</label>
                                                <div class="col-lg-2">
                                                    <input type="checkbox" name="is_active" id="show_user" checked>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="info" class="tab-pane">
                                            <br/>
                                            <div class="form-group ">
                                                <label for="sale_price" class="control-label col-lg-2">Họ và tên<span class="required">*</span></label>
                                                <div class="col-lg-5">
                                                    <input class="form-control" id="fullname" name="fullname" type="text" />
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label for="description" class="control-label col-lg-2">Giới tính</label>
                                                <div class="col-lg-5">
                                                    <select class="form-control select2" name="gender" id="gender" _autocheck="true" >
                                                        <option value="male">Nam</option>
                                                        <option value="female">Nữ</option>
                                                        <option value="other">Khác</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label for="product_img" class="control-label col-lg-2">Số điện thoại</label>
                                                <div class="col-lg-5">
                                                    <input class="form-control format_number" id="phone" name="phone" onKeyPress="return isNumberKey(event)" type="text" />
                                                </div>
                                                <span id="img_preview"></span>
                                            </div>
                                            <div class="form-group ">
                                                <label for="ava_img" class="control-label col-lg-2">Ảnh đại diện</label>
                                                <div class="col-lg-5">
                                                    <input class="form-control" id="img_src" name="img_src" type="file" accept="image/*" />
                                                </div>
                                                <span id="img_preview"></span>
                                            </div>
                                            <div class="form-group ">
                                                <label for="birthday" class="control-label col-lg-2">Ngày sinh</label>
                                                <div class="col-lg-5">
                                                    <input class="form-control" id="birthday" name="birthday" type="date" />
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label for="address" class="control-label col-lg-2">Địa chỉ</label>
                                                <div class="col-lg-5">
                                                    <input class="form-control" id="address" name="address" type="text" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12">
                                    <div class="form-group text-right">
                                        <button id="btn_add" name="btn_add" type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Thêm</button> &nbsp;&nbsp;
                                        <button type="button" class="btn btn-danger" onclick="return window.history.back();"><i class="fa fa-rotate-left"></i> Quay lại DS</button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!--/.col (right) -->
            </form>
        </div>   <!-- /.row -->
    </section><!-- /.content -->
    <!-- / Main content -->
</div><!-- /.row -->

<!-- Add new product JS -->
<script type="text/javascript" src="<?php echo public_url('admin'); ?>/console/user/add.js"></script>