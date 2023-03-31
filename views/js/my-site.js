$(document).on('click', '#edit-btn', function () {
    // debugger;
    var id = $(this).data('id');
    var TenSP = $(this).data('TenSP');
    var MoTa = $(this).data('MoTa');
    // alert ("Nhận button");
    // fill vào form
    $('input[name="TenSP"]').val(TenSP);
    $('input[name="MoTa"]').val(MoTa);
    $('input[name="id"]').val(id);
});
$(document).on('click', '.btn-save', function () {
    debugger;
    var TenSP = $('input[name = "TenSP"]').val();
    var MoTa = $('input[name = "MoTa"]').val();
    var id = $('input[name = "id"]').val();


    $.ajax({
        type: 'POST',
        url: '?route=edit',
        data: { id: id, MoTa: MoTa, TenSP: TenSP },
        success: function (response) {
            var data = JSON.parse(response);
            if (data.success) {

                $('#msg').html("cap nhat thanh cong!");
                $('table tr#' + id).find("td:eq(0)").html(id);
                $('table tr#' + id).find("td:eq(1)").html(TenSP);
                $('table tr#' + id).find("td:eq(2)").html(MoTa);
            } else {
                $('#msg').html("cap nhat khong thanh cong!");
            }
        },
        error: function (xhr) {
            $('#msg').html(xhr.response);
        }
    });
});
// $(document).on('click', '.btn-delete', function () {
//     var id = $('input[name="id"]').val();
    
//     $.ajax({
//         type: 'POST',
//         url: '?route=delete-student',
//         data: { no: id },
//         success: function (response) {
//             var data = JSON.parse(response);
//             if (data.success) {
//                 $('#msg').html("Xóa sinh viên thành công!");
//                 $('table tr#' + id).remove();
//             } else {
//                 $('#msg').html("Xóa sinh viên không thành công!");
//             }
//         },
//         error: function (xhr) {
//             $('#msg').html(xhr.response);
//         }
//     });
// });