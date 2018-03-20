//BootstrapValidator

$(function () {

    $('.daterange').daterangepicker(
        {
            ranges: {
//                'Today': [moment(), moment()],
//                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
//                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
//                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
//                'This Month': [moment().startOf('month'), moment().endOf('month')],
//                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            startDate: moment().subtract(29, 'days'),
            endDate: moment(),
            "locale": {
                "format": "MM/DD/YYYY",
                "separator": " - ",
                "applyLabel": "Thiết lập",
                "cancelLabel": "Hủy",
                "fromLabel": "Từ",
                "toLabel": "Đến",
                "customRangeLabel": "Tùy chỉnh",
                "daysOfWeek": [
                    "CN",
                    "T2",
                    "T3",
                    "T4",
                    "T5",
                    "T6",
                    "T7"
                ],
                "monthNames": [
                    "Tháng 1",
                    "Tháng 2",
                    "Tháng 3",
                    "Tháng 4",
                    "Tháng 5",
                    "Tháng 6",
                    "Tháng 7",
                    "Tháng 8",
                    "Tháng 9",
                    "Tháng 10",
                    "Tháng 11",
                    "Tháng 12",
                ],
                "firstDay": 1
            }
        },
        function (start, end) {
            // alert("You chose: " + start.format('DD/MM/YYYY') + ' - ' + end.format('DD/MM/YYYY'));

            $("#time_start").val(start.format('MM/DD/YYYY'));
            $("#time_end").val(end.format('MM/DD/YYYY'));
        });

    //form validation
    $("#frm_add").bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            name: {
                validators: {
                    notEmpty: {
                        message: 'Tên mã khuyến mãi không được để trống!'
                    },
                    stringLength: {
                        min: 6,
                        max: 200,
                        message: 'Tên mã khuyến mãi phải nhiều hơn 6 ký tự và không lớn hơn 200 ký tự!'
                    }
                }
            },
            _value: {
                validators: {
                    notEmpty: {
                        message: 'Giá trị giảm không được để trống!'
                    }
                }
            }
        }
    }).on('success.form.bv', function(e) {
        // Prevent form submission
        e.preventDefault();

        $('#btn_add').button('loading');
        // Get the form instance
        var $form = $(e.target);
        var formData = new FormData($("#frm_add")[0]);
        formData = new FormData($(this)[0]);
        // Get the BootstrapValidator instance
        var bv = $form.data('bootstrapValidator');
        // Use Ajax to submit form data
        var url = '/_api/admin/voucher/add_new_voucher';
        // formData.append('content_product', CKEDITOR.instances['write_content'].getData());
        $.ajax({
            url: url,
            type: 'POST',
            data: formData,
            async: false,
            success: function (res) {
                if(res.message == CONSTANT.OK_CODE){
                    alert("Thêm mới thành công!");
                    window.location = '/_admin/voucher/listing';
                }
                else{
                    alert(res.message);
                }
                $('#btn_add').button('reset');
            },
            error: function () {
                alert('Vui lòng thử lại !');
                $('#btn_add').button('reset');
            },
            cache: false,
            contentType: false,
            processData: false
        });
    }); //end bootstrapValidator

    $('#btn_add').click(function() {
        $('#frm_add').bootstrapValidator('validate');
    });

    function loadImage(input) {
        /*
         * Todo: check file size when upload
         */
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                var img = '<img width="100px" src="' + e.target.result + '" />';
                $('#img_preview').html(img);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#img_src").change(function() {
        loadImage(this);
    });
});