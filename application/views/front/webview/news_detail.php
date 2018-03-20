<?php $this->load->view('front/block/header_webview') ?>

<div id="content" class="container content-without-banner">
    <!-- PAGE CONTENT -->


    <article>
        <div class="boxtag">
            <h1 class="titlearticle">Nâng niu người phụ nữ của bạn</h1>
        </div>
        <div class="writer">
            <div>
                <label><i class="fa fa-edit"></i> Admin</label>
                <label style="border-left: 1px solid #c0c0c0; padding-left: 5px"><i class="fa fa-calendar"></i> 4 tháng</label>
                <!--<label style="border-left: 1px solid #c0c0c0; padding-left: 5px"><i class="fa fa-eye"></i> 3</label>-->
            </div>
        </div>
        <div class="boxcontent">
            <p><strong>Nâng niu người phụ nữ của bạn</strong></p>

            <p style="text-align: center;"><strong><img alt="" src="<?=base_url().$news->img_src ?>" style="height:180px; width:320px"></strong></p>

            <?=$news->_description?>

        </div>
    </article>



</div>

<?php $this->load->view('front/block/footer_webview') ?>
