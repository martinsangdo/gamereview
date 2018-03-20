<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Danh sách banner
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
            <li class="active">Danh sách banner</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <a href="<?= base_url('_admin/banner/add_banner') ?>">
                            <button type="button" class="btn btn-info pull-left">
                                Thêm mới
                            </button>
                        </a>
                    </div>
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Tên</th>
                                <th>Từ khóa dịch thuật</th>
                                <th>Thứ tự hiển thị</th>
                                <th>Hình ảnh</th>
                                <!--                                <th>Đường dẫn liên kết</th>-->
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

<script type="text/javascript" src="<?php echo public_url('admin'); ?>/console/banner/list.js"></script>