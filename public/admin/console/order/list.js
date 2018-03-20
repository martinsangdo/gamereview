


if ($("#example1").length) {
    var table = $('#example1').DataTable({
        "language": {
            "sEmptyTable": "Không tìm thấy dữ liệu",
            "sSearch": "Tìm kiếm:",
            "sZeroRecords": "Không tìm thấy dữ liệu này",
            "sLengthMenu": "Xem _MENU_ dòng / trang",
            "sInfo": "Đang xem từ _START_ đến _END_ trong tổng số _TOTAL_ dòng",
            "sInfoEmpty": "Hiển thị từ 0 đến 0 của 0 dòng",
            "sInfoFiltered": "(Lọc từ tổng _MAX_ dòng)",
            "oPaginate": {
                "sFirst": "Trang đầu",
                "sPrevious": "Trang trước",
                "sNext": "Trang tiếp",
                "sLast": "Trang cuối"
            }
        },
        "processing": true,
        "serverSide": true,
        "searching": true,
        "lengthChange": false,
        "ajax": {
            url : CONSTANT.API.GET_ORDER_LIST,
            type : "post",
            data: {}
        },
        "columns": [
            {
                "class":          "details-control",
                "orderable":      false,
                "data":           null,
                "defaultContent": ""
            },
            { "data": null},
            { "data": "ref"},
            { "data": null,
                "render": function (data, type, row, meta) {
                    return '<div class="btn-group open">' +
                        '<select class="select2">' +
                        '<option value="order">Vừa đặt</option>' +
                        '<option value="order_confirm">KH đã xác nhận</option>' +
                        '<option value="order_purchased">KH đã thanh toán</option>' +
                        '</select>' +
                        '</div>';
                }
            },
            { "data": "name" },
            { "data": "phone" },
            { "data": "email" },
            { "data": "number_item" },
            {
                "data": null,
                "render": function ( data, type, row, meta ) {
                    return number_format(row.total_price, 0, ',', '.');
                }
            },
            { "data": "fee_ship" },
            { "data": "voucher_id" },
            { "data": "create_time" },
            { "data": "update_time" },
            {
                "data": null,
                "render": function (data, type, row, meta) {
                    return '<div class="btn-group"><a href="'+ baseURL +'_admin/order/edit_order/' + row._id + '" class="btn btn-success"><i class="fa fa-fw fa-pencil-square-o"></i></a><a href="javascript:void(0)" class="btn btn-danger delete-item"><i class="fa fa-fw fa-trash-o"></i></a></div>';
                }
            },
        ], //end columns
        "createdRow": function ( row, data, index ) {
            $('td', row).eq(1).html(index + 1);
            for(var i = 0; i <= index; i++) {
                $('td', row).eq(i).parent().addClass('tr_data').attr('data-id', data._id).attr('data-src', JSON.stringify(data));
            }
        }
    });

    // Add event listener for change is_active
    $('#example1 tbody').on('change', '.is-active-item', function () {
        var $this = $(this);
        var $tr = $this.closest('tr');
        var $id = $tr.attr('data-id');
        var $is_active = 0;
        if ($this.is(':checked')) {
            $is_active = 1;
        }

        var $url = '/_api/admin/order/order_toggle_is_active/' + $id;

        $.ajax({
            url: $url,
            type: 'PUT',
            cache: false,
            dataType: "json",
            data: {id: $id, is_active: $is_active},
            success: function (res) {
                if (res.message == CONSTANT.OK_CODE) {
                }
                else {
                    alert(res.message);
                }
            },
            error: function () {
                alert('Vui lòng thử lại !');
            }
        });
    });

    // Add event listener for opening and closing details
    $('#example1 tbody').on('click', 'td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = table.row(tr);

        // console.log(tr.attr('data-src'));
        var $data = $.parseJSON(tr.attr('data-src'));

        if (row.child.isShown()) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        }
        else {
            // Open this row
            row.child(format($data)).show();
            tr.addClass('shown');
        }
    });

    // Add event listener for change is_active
    $('#example1 tbody').on('click', '.delete-item', function () {

        if (!confirm('Bạn có chắc muốn xóa?')) {
            return false;
        }

        var $this = $(this);
        var $tr = $this.closest('tr');
        var $id = $tr.attr('data-id');

        var $url = '/_api/admin/order/delete_order/' + $id;

        $.ajax({
            url: $url,
            type: 'PUT',
            cache: false,
            dataType: "json",
            data: {id: $id, is_delete: 1},
            success: function (res) {
                if (res.message == CONSTANT.OK_CODE) {
                    $tr.remove();
                    table.row($tr)
                        .remove()
                        .draw();
                }
                else {
                    alert(res.message);
                }
            },
            error: function () {
                alert('Vui lòng thử lại !');
            }
        });
    });

    // Add event listener for changing order status
    $('#example1 tbody').on('change', '.select-deliver.ajax', function () {
        var $this = $(this);
        var $tr = $this.closest('tr');
        var $id = $tr.attr('id');
        var $order_id = $this.val();

        // console.log($id);
        // console.log($deliver_id);

        var $html = '';
        var cond = {
            _id: $id
        };

        var $url = '/_api/admin/order/order_toggle_status/' + $id;

        $.ajax({
            url: $url,
            type: 'PUT',
            cache: false,
            dataType: "json",
            data: {_id: $id, order_id: $order_id},
            success: function (res) {
                // console.log(res);
                if(res.data.status == 'assigned'){
                    var $label = 'bg-navy btn-flat';
                    var $text = 'Vừa đặt';
                    $tr.find('.status-item button').attr('class', 'btn ' + $label).html($text + ' <span class="caret"></span>');
                }
            },
            error: function () {
                console.log('error');
            }
        });
    });

}


/*
 *  upload excel file
 */
function upload_excel_file(){
    if (submitting){
        return;
    }
    var formData = new FormData($("#frm_upload")[0]);
    // Use Ajax to submit form data
    var url ='/_api/admin/record/import_excel';
    submitting = true;
    $('#txt_upload_status').text('Vui lòng chờ...').removeClass('hide');
    $.ajax({
        url: url,
        type: 'POST',
        data: formData,
        async: false,
        success: function (res) {
            submitting = false;
            if (res.status == CONSTANT.HTTP.SUCCESS){
                $('#txt_upload_status').text('Tải lên thành công...').removeClass('hide');
                //refresh the page
                location.reload();
            } else {
                $('#txt_upload_status').text(res.message).removeClass('hide');
            }
        },
        error: function (e) {
            $('#txt_upload_status').text('Vui lòng thử lại').removeClass('hide');
            console.log('err', e);
            submitting = false;
        },
        cache: false,
        contentType: false,
        processData: false
    });
}

/*
 *  display frm upload show/hide
 */
function toggle_frm_upload(){
    var $frm = $('#upload_container');
    if($frm.hasClass('hide')){
        $frm.removeClass('hide');
    }
    else{
        $frm.addClass('hide');
    }
}

function format ( d ) {
    // `d` is the original data object for the row
    console.log(d);


    return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
        '<tr>'+
        '<td><strong>Thông tin khác</strong></td>'+
        '</tr>'+
        '<tr>'+
        '<td>Ghi chú: </td>'+
        '<td>'+ d.note +'</td>'+
        '</tr>'+
        '<tr>'+
        '<td>Nơi giao hàng: </td>'+
        '<td>'+ d.order_location +'</td>'+
        '</tr>'+
        '</table>';
}