/* 
 * CONTENT MENU
 * 01. Default reqest and response
 * 02. Default Option
 * 03. Add Main Category
 * 04. Sub Cat Modal
 * 05. Sub Cat Add
 * 06. Sub cat by main cat id
 * 
 * 
 * 
 * 
 * 
 * 04. Group Status
 * 05. Add Package
 * 06 Link Package to Group
 * 07. Remove Group From A Package
 * 08. Add Days
 * 09. Update Day
 * 10. Add Services
 * 11. Delete Services
 * 12. Delete Package
 */

/*
 * 01. Default reqest and response 
 ***********************************************************************/
function showRequest(formData, jqForm, options) {
    $('.overlay').removeClass('hidden');
    openWaitDialog('Please Wait');
}
function showResponse(response, statusText, xhr, $form) {
	//alert(response.redirect);
    if (xhr.status == 200) {
        closeDialog();
        if (response.status) {
            $('.overlay').addClass('hidden');
            if (typeof (response.redirect) != 'undefined') {
                openWaitDialog(response.dialogMsg);
                location.href = response.redirect;
            }
        } else {
            $(".msg").html('<div class="alert alert-danger fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>OOPS! </strong> ' + response.message + '</div>');
            $('.overlay').addClass('hidden');
        }
    } else {
        $(".msg").html('<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>OOPS! </strong> Server respond with an error.</div>');
        $('.overlay').addClass('hidden');
    }
}

/*
 * 02. Default Option
 ***********************************************************************/
var options = {
    beforeSubmit: showRequest, // pre-submit callback 
    success: showResponse,
    type: 'POST',
    dataType: 'json',
    error: function (xhr) {
        messageDialog({
            msg: ':( Server out of reach. Please try again later',
            error: true,
            closeBtnText: 'Close'
        });
        $("button").prop('disabled', false);
        $('.overlay').addClass('hidden');


    }
}

/*
 * 03. Add-Group Submit
 ***********************************************************************/

$("#addMainCat").ajaxForm(options);

/*
 * 04. Sub Cat Modal
 ***********************************************************************/

function opensubCate(id, name) {
    $('#subCategorytitle').html(name);
    $('#mainCatId').val(id);
    $.ajax({
        url: ajex_lab + 'admin/category/subCatDetail',
        type: 'post',
        data: {'id': id},
        dataType: 'json',
        beforeSend: subCatAddReqest,
        success: subCatAddResponse,
        error: function (xhr) {
            messageDialog({
                msg: ':( Server out of reach. Please try again later',
                error: true,
                closeBtnText: 'Close'
            });
            $('.overlay').addClass('hidden');


        }
    });

}


function subCatAddReqest() {
    $('.overlay').removeClass('hidden');
}
function subCatAddResponse(response, statusText, xhr, $form) {
    if (xhr.status == 200) {
        $('#subcategoryBox').modal({
            show: 'false'
        });

        var data = response.message;
        $("#subcatDetail").html('');
        if (data.length === 0) {
            $(".msg").html('No SubCategory Added Please Add Sub Category');
        } else {
            var count = 1;
            var trHTML = '';
            $.each(data, function (i, val) {
                trHTML += '<tr><td>' + count++ + '</td><td>' + data[i].name + '</td><td><button type="button" class="btn btn-danger btn-xs" onclick=categoryStatus(' + data[i].id + ')><i class="fa fa-lock" aria-hidden="true"></i> Delete</button></td></tr>';

            });
            $("#subcatDetail").html(trHTML);
        }
        $('.overlay').addClass('hidden');
    } else {
        alert('something wend wrong please try later');
    }
}

//sub cat add
$("#subCatAdd").validate({
    rules: {
        name: {required: true, maxlength: 45},
    },
    submitHandler: function (form) {
        console.log(form);
        var data = $('#subCatAdd').serializeArray();
        $.ajax({
            url: form.action,
            type: form.method,
            dataType: 'json',
            data: data,
            success: function (resp) {
                if (resp.status) {
                    $('input[name=name]').val('');
                    $('#subCatMsg').html('');
                    $("#subcatDetail").append('<tr><td>New</td><td>' + resp.message.name + '</td><td><button type="button" class="btn btn-danger btn-xs" onclick=categoryStatus(' + resp.message.id + ')><i class="fa fa-lock" aria-hidden="true"></i> Delete</button></td></tr>');
                }
            },
            error: function (xhr) {
                messageDialog({
                    msg: ':( Server out of reach. Please try again later',
                    error: true,
                    closeBtnText: 'Close'
                });
                $('.overlay').addClass('hidden');


            }
        });
    }
});





//getSubcat
function getSubcat(id) {
    $.ajax({
        url: ajex_lab + 'admin/subCat',
        type: 'post',
        data: {id: id},
        dataType: 'json',
        success: function (resp) {

            var data = resp.message;


            if (data.length === 0) {
                var trHTML = "<option>This Category dont have any sub category</option>";
            } else if (data === 'resp.message') {
                var trHTML = "<option>Please select your category</option>";
            } else {
                var trHTML = '';
                $.each(data, function (i, val) {
                    trHTML += '<option value="' + data[i].id + '">' + data[i].name + '</option>';

                });
            }

            $('#subCategory').html(trHTML);
        },
        error: function (xhr) {
            messageDialog({
                msg: ':( Server out of reach. Please try again later',
                error: true,
                closeBtnText: 'Close'
            });
            $('.overlay').addClass('hidden');


        }
    });
}


function categoryStatus(id) {
    $.ajax({
        url: ajex_lab + 'admin/category/deleteCat',
        type: 'post',
        data: {'id': id},
        dataType: 'json',
        success: function (resp) {
            location.reload();
        },
        error: function (xhr) {
            messageDialog({
                msg: ':( Server out of reach. Please try again later',
                error: true,
                closeBtnText: 'Close'
            });
        }
    });
}





/*$('#subCatAdd').submit(function () {
 var data = $('#subCatAdd').serializeArray();
 $.ajax({
 url: ajex_lab + 'admin/category/subCatAdd',
 type: 'post',
 data: data,
 dataType: 'json',
 success: function (resp) {
 console.log(resp);
 },
 error: function (xhr) {
 messageDialog({
 msg: ':( Server out of reach. Please try again later',
 error: true,
 closeBtnText: 'Close'
 });
 $('.overlay').addClass('hidden');
 
 
 }
 });
 });
 */



/*
 * 03. Add-Group Submit
 ***********************************************************************/
function groupStatus(cId) {

    var $row = $('#c' + cId);
    var action = $row.attr('data-block') == 'true' ? 'Block' : 'Active';
    console.log(action);

    confirmDialog({
        msg: 'Confirm ' + action + ' <b>' + 'category name (' + $row.find('td:nth-child(2)').text() + ')</b> ?',
        yesBtnText: 'Sure! ' + action + ' It',
        yesAction: function () {
            $.post(ajex_lab + 'admin/category/status',
                    {
                        method: 'status', cId: cId, action: action
                    },
                    function (json) {
                        if (json.status) {
                            if (action == 'Active') {
                                $('#b' + cId).html('Active');
                                $('#b' + cId).removeClass('label-danger');
                                $('#b' + cId).addClass('label-success');
                                $('#ab' + cId).removeClass('btn-success');
                                $('#ab' + cId).addClass('btn-danger');
                                $('#ab' + cId).html('<i class="fa fa-lock" aria-hidden="true"></i> Block');
                                $('#c' + cId).attr('data-block', true);
                                $('#b' + cId).attr('id', 'a' + cId);
                                $('#ab' + cId).attr('id', 'bb' + cId);

                            } else {
                                $('#a' + cId).html('Block');
                                $('#a' + cId).removeClass('label-success');
                                $('#a' + cId).addClass('label-danger');
                                $('#bb' + cId).removeClass('btn-danger');
                                $('#bb' + cId).addClass('btn-success');
                                $('#bb' + cId).html('<i class="fa fa-unlock" aria-hidden="true"></i> Active');
                                $('#c' + cId).attr('data-block', false);
                                $('#a' + cId).attr('id', 'b' + cId);
                                $('#bb' + cId).attr('id', 'ab' + cId);
                            }
                        }

                    }, 'json'

                    )
                    .error(function () {
                        messageDialog({
                            msg: 'Something went wrong. Please try later',
                            error: true
                        })
                    });
        },
        noBtnText: 'Nope',
        dataType: 'json',
        noAction: function () {},
        type: action == 'Block' ? 'danger' : 'success'
    });
}

/*
 * 05. Add Package
 ***********************************************************************/
$("#add-package").ajaxForm(options);

/*
 * 06 Link Package to Group
 ***********************************************************************/
function linkPackageToGroup(id, value) {
    $.ajax({
        url: holiday_url + 'admin/linkPackageToGroup',
        type: 'post',
        data: {'id': id, 'value': value},
        dataType: 'json',
        beforeSend: linkPackageRequest,
        success: linkPackageResponse,
        error: function (xhr) {
            messageDialog({
                msg: ':( Server out of reach. Please try again later',
                error: true,
                closeBtnText: 'Close'
            });
            $('.overlay').addClass('hidden');


        }
    });

}

function linkPackageRequest() {
    $('.overlay').removeClass('hidden');
}
function linkPackageResponse(response, statusText, xhr, $form) {
    if (xhr.status == 200) {
        var id = response.label;
        var groupName = response.groupName;
        $('#pl' + id).append('<span class="label label-success">' + groupName + ' <a href="" class="glyphicon glyphicon-remove" style="color: red" aria-hidden="true"></a></span>');
        $('.overlay').addClass('hidden');
    } else {
        alert('something wend wrong please try later');
    }
}

/*
 * 07. Remove Group From A Package
 ***********************************************************************/
function removeGroup(id) {
    $.ajax({
        url: holiday_url + 'admin/removeGroup',
        type: 'post',
        data: {'id': id},
        dataType: 'json',
        beforeSend: removeGroupRequest,
        success: removeGroupResponse,
        error: function (xhr) {
            messageDialog({
                msg: ':( Server out of reach. Please try again later',
                error: true,
                closeBtnText: 'Close'
            });
            $('.overlay').addClass('hidden');


        }
    });
}
function removeGroupRequest() {
    $('.overlay').removeClass('hidden');
}

function removeGroupResponse(response, statusText, xhr, $form) {
    if (xhr.status == 200) {
        var id = response.response;
        $('#rl' + id).remove();
        $('.overlay').addClass('hidden');
    } else {
        alert('something went wrong please try later');
    }
}

/*
 * 08. Add Days
 ***********************************************************************/
$("#add-days").ajaxForm(options);

/*
 * 09. Update Day
 ***********************************************************************/
$("#update-days").ajaxForm(options);

/*
 * 10. Add Services
 ***********************************************************************/

$('#add-service').ajaxForm(options);

/*
 * 11. Delete Services
 ***********************************************************************/


function deleteServices(cId) {
    var $row = $('#c' + cId);
    var action = 'Delete';
    console.log(action);

    confirmDialog({
        msg: 'Confirm ' + action + ' <b>' + 'service name (' + $row.find('td:nth-child(2)').text() + ')</b> ?',
        yesBtnText: 'Sure! ' + action + ' It',
        yesAction: function () {
            $.post(holiday_url + 'admin/deleteService',
                    {
                        method: 'status', cId: cId, action: action
                    },
                    function (json) {
                        if (json.status) {
                            $('#c' + cId).remove();
                        }

                    }, 'json'

                    )
                    .error(function () {
                        messageDialog({
                            msg: 'Something went wrong. Please try later',
                            error: true
                        })
                    });
        },
        noBtnText: 'Nope',
        dataType: 'json',
        noAction: function () {},
        type: 'danger'
    });
}

/*
 * 11. Delete Package
 ***********************************************************************/


function deletePackage(cId) {
    var $row = $('#c' + cId);
    var action = 'Delete';
    console.log(action);

    confirmDialog({
        msg: 'Confirm ' + action + ' <b>' + 'product name (' + $row.find('td:nth-child(2)').text() + ')</b> ?',
        yesBtnText: 'Sure! ' + action + ' It',
        yesAction: function () {
            $.post(ajex_lab + 'admin/product/delete',
                    {
                        method: 'status', cId: cId, action: action
                    },
                    function (json) {
                        if (json.status) {
                            $('#c' + cId).remove();
                        }

                    }, 'json'

                    )
                    .error(function () {
                        messageDialog({
                            msg: 'Something went wrong. Please try later',
                            error: true
                        })
                    });
        },
        noBtnText: 'Nope',
        dataType: 'json',
        noAction: function () {},
        type: 'danger'
    });
}



//delete about 
function deleteabout(cId) {
    var $row = $('#c' + cId);
    var action = 'Delete';
    console.log(action);

    confirmDialog({
        msg: 'Confirm ' + action + ' <b>' + 'about name (' + $row.find('td:nth-child(2)').text() + ')</b> ?',
        yesBtnText: 'Sure! ' + action + ' It',
        yesAction: function () {
            $.post(ajex_lab + 'admin/about/delete',
                    {
                        method: 'status', cId: cId, action: action
                    },
                    function (json) {
                        if (json.status) {
                            $('#c' + cId).remove();
                        }

                    }, 'json'

                    )
                    .error(function () {
                        messageDialog({
                            msg: 'Something went wrong. Please try later',
                            error: true
                        })
                    });
        },
        noBtnText: 'Nope',
        dataType: 'json',
        noAction: function () {},
        type: 'danger'
    });
}