<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Danh sách sản phẩm
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('admin/home') ?>"><i class="fa fa-dashboard"></i>Trang chủ</a></li>
            <li class="active">Sản phẩm</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">

                    <div class="hide" id="upload_container">
                        <div>
                            File mẫu <a download href="#"><?=strtolower(RECORD_ALIAS_EN) ?>_sample.xlsx</a>
                        </div>
                        <div>
                            <strong>Tải lên file danh sách <?=strtolower(RECORD_ALIAS) ?> (Excel):</strong>
                        </div>
                        <form id="frm_upload" method="post" action="" enctype="multipart/form-data">
                            <input type="file" name="file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel"/>
                        </form><br/>
                        <button type="button" class="btn btn-primary" onclick="upload_excel_file();">Tải lên</button>
                        <span class="hide" id="txt_upload_status"></span>
                        <hr/>
                    </div> <!-- .upload-container -->

                    <div class="box-header">
                        <a href="<?= base_url('_admin/record/add_record') ?>">
                            <button type="button" class="btn btn-info pull-left">
                                Thêm mới
                            </button>
                        </a>
                        <button onclick="toggle_frm_upload();" style="margin-left: 10px" type="button" class="btn btn-info pull-left">
                            Tải lên file excel
                        </button>
                    </div>
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th></th>
                                <th>#</th>
                                <th>Tên sản phẩm</th>
                                <th>Ảnh sản phẩm</th>
                                <th>Từ khóa dịch thuật</th>
                                <th>Thứ thự hiển thị</th>
                                <th>Giá bán</th>
                                <th>Bán chạy</th>
                                <th>Hiện</th>
                                <th>Ngày tạo</th>
                                <th>Ngày chỉnh sửa</th>
                                <th>Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.section -->
</div><!-- /.content -->

<script type="text/javascript" src="<?php echo public_url('admin'); ?>/console/record/list.js"></script>