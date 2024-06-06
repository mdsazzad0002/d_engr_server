document.addEventListener('DOMContentLoaded', function () {
    $('.success_loading').hide();
    $('.success_alert').hide();
    $('.failed_alert').hide();
}, false);

function reply(id) {

    var message = $('.message' + id).html();
    var email = $('.email_reply' + id).val();
    var reply = $('.descrip_reply' + id).val();
    $('.success_loading' + id).show();
    $('.failed_alert' + id).hide();
    $('.success_alert' + id).hide();
    $.ajax({
        type: 'GET',
        url: '../mail/reply.php',
        data: {
            'id': id,
            'message': reply,

        }, success: function (data) {
            $('.success_loading' + id).hide();
            if (data == 'success') {
                $('.success_alert' + id).show();
                $('.failed_alert' + id).hide();
            } else {
                $('.failed_alert' + id).show();
                $('.success_alert' + id).hide();
            }



        }
    })
}


// delete message
function delete_message(thi, id) {
    let xhttp = new XMLHttpRequest;
    let formdata = new FormData();
    formdata.append('message_id', id);
    xhttp.onload = function () {
        let data = JSON.parse(this.responseText);
        swal({
            'icon': data.i_icon,
            'title': data.i_title,
        })
        if (data.i_icon == 'success') {
            $(thi).parents('tr').hide();
        }

    }
    xhttp.open("POST", "message_delete.php");
    xhttp.send(formdata);
}