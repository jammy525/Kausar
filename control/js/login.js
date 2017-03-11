/* 
 * Content Menu
 *01. Login Validation
 *02. Show Request
 *03. Show Response
 *
 */

/*
 * 01. Login Validation
 ************************************************************/
$(document).ready(function () {
    $('#login').validate({
        rules: {
            username: {
                required: true
            },
            password: {
                required: true
            }

        },
        message: {
            username: {
                required: 'username cant be empty'
            },
            password: {
                required: 'Password cant be empty'
            }
        },
        highlight: function (element) {
            var id_attr = "#" + $(element).attr("id") + "1";
            $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
            $(id_attr).removeClass('glyphicon-ok').addClass('glyphicon-remove');
        },
        unhighlight: function (element) {
            var id_attr = "#" + $(element).attr("id") + "1";
            $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
            $(id_attr).removeClass('glyphicon-remove').addClass('glyphicon-ok');
        },
        submitHandler: function (form) {
            $.ajax({
                url: form.action,
                type: form.method,
                dataType: 'json',
                data: $(form).serialize(),
                beforeSend: showRequest,
                success: showResponse
            });
        }
    });

});

/*
 * 02. Show Request
 ************************************************************/
function showRequest(formData, jqForm, options) {
    $("button").prop('disabled', true);
    openWaitDialog('Please Wait');
}
/*
 * 03. Show Response
 ************************************************************/
function showResponse(response, statusText, xhr, $form) {
    closeDialog();
    if (xhr.status == 200) {
        if (response.status) {
            $("button").remove();
            if (typeof (response.redirect) != 'undefined') {
                if (response.dialogMsg != 'undefined') {
                    openWaitDialog(response.message);
                }

                location.href = response.redirect;
            }
        } else {
            $(".msg").html(
                    '<div class="alert alert-danger fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>OOPS! </strong> ' + response.message + '</div>');
            $("button").prop('disabled', false);
        }
    } else {
        $(".msg").html('<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>OOPS! </strong> Server respond with an error.</div>');
        $("button").prop('disabled', false);
        $("#submitFormLoader").hide();
    }
}



