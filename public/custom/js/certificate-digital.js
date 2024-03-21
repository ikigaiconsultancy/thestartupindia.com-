$(document).ready(function () {
   
   
    /*Faq*/
    if ($(".faqqustn").length > 0) {
        $('.faqqustn>ul>li>a').click(function () {
            if ($(this).attr('href')) {
                if ($(this).attr('href').substr(0, 1) == '#') {
                    var hgoto = $(this).attr('href');
                    if (hgoto != "") {
                        var findid = hgoto.substring(1, hgoto.length);
                        if ($('#' + findid).find(".faqlist").is(":hidden")) {
                            $('#' + findid).find(".faqlist").show();
                            $('#' + findid).find(".faqico").html('').html('<i class="fa fa-minus-square">&nbsp</i>');
                        }
                        var pos = $('#' + findid).offset();
                        $("html, body").animate({ scrollTop: pos.top }, 1000);
                    }
                }
            }
        });
    }
    if ($(".faqheader").length > 0) {
        $(".faqheader").click(function () {
            if ($(this).next(".faqlist").is(":hidden")) {
                $(this).next(".faqlist").show();
                $(this).find(".faqico").html('').html('<i class="fa fa-minus-square">&nbsp</i>');
            } else {
                $(this).next(".faqlist").hide();
                $(this).find(".faqico").html('').html('<i class="fa fa-plus-square">&nbsp</i>');
            }
        });
    }
    if ($(".faqlist").length > 0) {
        $(".faqlist>ul>li .faqhead>span").click(function () {
            if ($(this).parent(".faqhead").next(".faqdesc").is(":hidden")) {
                $(this).parent(".faqhead").next(".faqdesc").show();
            } else {
                $(this).parent(".faqhead").next(".faqdesc").hide();
            }
        });
    }
    /*Faq*/
    
    $(document).on('keyup keypress', 'form input[type="text"],input[type="password"]', function (e) {
        if (e.keyCode === 13) {
            e.preventDefault();
            return false;
        }
    });
    if ($(".date2").length > 0) {
        $(".date2").datepicker({
            dateFormat: 'dd-M-yy', changeMonth: true, changeYear: true
        });
    }
    $(".dobdate,.date2").change(function () {
        if ($(this).val() != "" && $(this).val() != null) {
            $(this).closest(".form-group").removeClass('has-error').addClass('has-success').find(".help-block").hide();
            $(this).closest(".form-group").find(".glyphicon").remove();
        }
    });
    /*
    *Help
    */
    if ($(".col-lg-5>input[type='text'],.col-lg-5>select,.col-lg-5>textarea").length > 0) {
        $(".col-lg-5>input[type='text'],.col-lg-5>select,.col-lg-5>textarea").each(function () {
            if ($(this).val() == "") {
                $(this).closest(".form-group").find(".help").css('display', 'inline-block');
            }
        });
    }
    /*show and hide help*/
    $(document).on('focusin', ".col-lg-5>input[type='text'],.col-lg-5>select,.col-lg-5>textarea", function () {
        $(this).parent().next().find('.help').fadeIn('slow');
        $(this).parent().addClass('act');
    });
   
    /**Bootstrap Validator*/
    if ($(".results").length > 0) {
        $('.results').bootstrapValidator({
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-exclamation-sign',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                required: {
                    validators: {
                        notEmpty: {
                            message: 'missing'
                        }
                    }
                },
                email: {
                    validators: {
                        emailAddress: {
                            message: 'The input is not a valid email address'
                        }
                    }
                },
                requiredemail: {
                    validators: {
                        notEmpty: {
                            message: 'missing'
                        },
                        emailAddress: {
                            message: 'Invalid email address'
                        }
                    }
                },
                url: {
                    validators: {
                        uri: {
                            message: 'The URL is not valid'
                        }
                    }
                },
                requiredurl: {
                    validators: {
                        notEmpty: {
                            message: 'Url is required and cannot be empty'
                        },
                        uri: {
                            message: 'The URL is not valid'
                        }
                    }
                },
                number: {
                    validators: {
                        regexp: {
                            regexp: /^[0-9\ ]+$/,
                            message: 'Contain Only 0-9 Numbers'
                        }
                    }
                },
                requirednumber: {
                    validators: {
                        notEmpty: {
                            message: 'missing'
                        },
                        regexp: {
                            regexp: /^[0-9\ ]+$/,
                            message: 'Contain Only 0-9 Numbers '
                        },
                    }
                },
                decimal: {
                    validators: {
                        regexp: {
                            regexp: /^(?:[1-9]\d*|0)?(?:\.\d+)?$/,
                            message: 'Contain Only Decimal or Numbers '
                        }
                    }
                },
                requireddecimal: {
                    validators: {
                        notEmpty: {
                            message: 'missing'
                        },
                        regexp: {
                            regexp: /^(?:[1-9]\d*|0)?(?:\.\d+)?$/,
                            message: 'Contain Only Decimal or Numbers '
                        },
                    }
                },
                phone: {
                    validators: {
                        notEmpty: {
                            message: 'missing'
                        },
                        regexp: {
                            regexp: /^((\+[0-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/,
                            message: 'Ex: 989**00**0'
                        }
                    }
                },
                requiredphone: {
                    validators: {
                        notEmpty: {
                            message: 'missing'
                        },
                        regexp: {
                            regexp: /^((\+[0-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/,
                            message: 'Ex: +91 9******* or 011-4*******  '
                        },
                    }
                },
            }
        });
    }
    
    $(document).on("click", ".alertbx .close", function () {
        $(".alertbx").remove();
    });
    
});
var kyc_cmd = "";
var kyc_kycid = "";
var kyc_pin = "";
var kyc_kyctype = "";
var kyc_source = "";
/*  start Open popup  */
function openpopuphtml(html, height, width, title) {
    $('.modal').remove();
    var modelboxhtml = "<div class='modal overlay' id='myModal'></div><div class='modal inndrmodel'><div class='modal-dialog' style='width:" + width + ";'><div class='modal-content' style='height:" + height + ";'><div class='modal-header' style='background-color: #33699D;color: #fff;'><span>" + title + "</span><button type='button' class='close' title='Close' onclick='removemodel();'>x</button></div><div class='modal-body'><div class='innerbx'><div id='htmldata'></div></div></div></div></div></div>";
    $('body').append(modelboxhtml);
    $('#htmldata').html(html);
    $('.modal').show();
    /* $(".modal-dialog").draggable(); */
    if ($('#htmldata').find('input').length > 0) {
        $('#htmldata').find('input:first-child').focus();
    }
    
};
function removemodel() {
    $('.modal').fadeOut('slow');
    setTimeout(function () {
        $('.modal').remove();
    }, 500)
}
/*  end Open popup  */
/*  start OpenWindow  */
function OpenWindow(url, h, w, title) {
    /* Fixes dual-screen position Most browsers Firefox */
    var dualScreenLeft = window.screenLeft !== undefined ? window.screenLeft : screen.left;
    var dualScreenTop = window.screenTop !== undefined ? window.screenTop : screen.top;
    width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
    height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;
    var left = ((width / 2) - (w / 2)) + dualScreenLeft;
    var top = ((height / 2) - (h / 2)) + dualScreenTop;
    var newWindow = window.open(url, title, 'scrollbars=yes, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);
    /*  Puts focus on the newWindow */
    if (window.focus) {
        newWindow.focus();
    }
    /*
    //var left = (screen.width / 2) - (w / 2);
    //var top = (screen.height / 2) - (h / 2);
    //window.open(url, "", "width=" + w + ",height=" + h + ",top=" + top + ",left=" + left + ",scrollbars=yes");
    */
}
/*  end OpenWindow  */
/*Captcha*/
function createcanvas(txt) {
    $(document).find('canvas').remove();
    $(".captchabox").append('<canvas id="mycaptcha" height="40" width="125"></canvas>');
    var c = document.getElementById('mycaptcha');
    var ctx = c.getContext("2d");
    ctx.font = "25px Verdana";
    ctx.fillStyle = "Black";
    var background = document.getElementById('cptchabg');
    ctx.drawImage(background, 0, 0);
    ctx.fillText(txt, 5, 30);
}
function capchaval() {
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };
    var captha = [randomNumber(1, 80), '+', randomNumber(0, 10), '='].join(' ');
    return captha;
}
function randomString(n) {
    var r = "";
    while (n--) r += String.fromCharCode((r = Math.random() * 62 | 0, r += r > 9 ? (r < 36 ? 55 : 61) : 48));
    return r.toUpperCase();
}
/*Captcha*/
function ValidateEmail(email) {
    var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    return expr.test(email);
}
function validateonlynumbers(number) {
    number = number.replace("+", "").replace(" ", "");
    var expr = /^[0-9]+$/;
    return expr.test(number);
}
function ValidateSpecialChar(text) {
    var regex = /^[A-Za-z0-9 ]+$/;
    return regex.test(text);
}
function Trim(strValue) {
   
    if (strValue != undefined || strValue != "") {
        var j = strValue.length - 1; i = 0;
        while (strValue.charAt(i++) == ' ');
        while (strValue.charAt(j--) == ' ');
        return strValue.substr(--i, ++j - i + 1);
    }
}
/*  start SafeString  */
function SafeString(str) {
    var regex1 = new RegExp('"', 'g');
    var regex2 = new RegExp("'", 'g');
    var text = str;
    if (str != undefined && str != null) {
        text = text.replace(regex1, '#d');
        text = text.replace(regex2, '#s');
        text = text.replace(new RegExp(/\\/g), "#fslas");
    }
    return text;
}
/*  start SafeString  */
/*Loader*/
function ShowLoader() {
    $('body').find(".loaderbox").remove();
    $('body').append('<div class="loaderbox"><span class="loader"></span></div>');
}
function RemoveLoader() {
    $('body').find(".loaderbox").fadeOut('slow');
    setTimeout(function () {
        $('body').find(".loaderbox").remove();
    }, 500);
}
/*Loader*/
/*Message*/
function message(status, message, show) {
    $('body').find('.alertbx').remove();
    $('body').append('<div class="alertbx"></div>');
    var donthide = "";
    if (show != "" && show != undefined) {
        donthide = "nohide";
    }
    var getstatus = status;
    if (getstatus == true) {
        $('.alertbx').empty().append("<div class='innalert'><div class='altbx nmbtm alert alert-success alert-dismissable " + donthide + "'><a href='javascript:void(0);' title='Close' class='close'><span class='pl-2'> x </span></a> <span class='alert-link'>" + message + "</span></div></div>");
    } else if (getstatus == false) {
        $('.alertbx').empty().append("<div class='innalert'><div class='altbx nmbtm alert alert-danger alert-dismissable " + donthide + "'><a href='javascript:void(0);'  title='Close' class='close'><span class='pl-2'> x </span> </a>" + message + "</div></div>");
    }
    autohidebox();
}
function QuickHideAlertMessage() {
    if ($('.alert-dismissable').length > 0) {
        if ($('.alert-dismissable').hasClass("nohide")) {
            return false;
        }
        else {
            $('.alert-dismissable').fadeOut('slow');
        }
    }
}
function autohidebox() {
    setTimeout(function () {
        if ($('.alert-dismissable').length > 0) {
            if ($('.alert-dismissable').hasClass("nohide")) {
                return false;
            }
            else {
                $('.alert-dismissable').fadeOut('slow');
            }
        }
    }, 15000);
}
/*Message*/
/*Import*/
var links = [];
var status = "OK";
function Import(url, area) {
    if (status == "OK") {
        ShowLoader();
        $.post(url, function (data) {
            $(area).html(data);
            if (data.length > 10) {
                $(area).slideDown();
            }
            RemoveLoader();
            status = "OK";
            var temp = links;
            links = [];
            for (var i = 0; i < temp.length; i++) {
                if (temp[i].area != area) {
                    var a = {};
                    a.url = temp[i].uri;
                    a.area = temp[i].area;
                    links.push(a);
                }
            }
            if (links.length > 0) {
                Import(links[0].url, links[0].area);
            }
        }).fail(function (xhr, textStatus, errorThrown) {
            $(area).html("<div class='pinfo'>Error: Refresh page and try again<div>Technical error:" + textStatus + "</div> </div>");
        });
    }
    else {
        if (url != undefined) {
            var a = {};
            a.url = url;
            a.area = area;
            links.push(a);
        }
    }
}
/*Import*/
/* start function to get Query string */
function GetParameterValues(param) {
    var url = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for (var i = 0; i < url.length; i++) {
        var urlparam = url[i].split('=');
        if (urlparam[0] == param) {
            return urlparam[1];
        }
    }
}
$.urlParam = function (name) {
    var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
    if (results == null) {
        return null;
    }
    else {
        return results[1] || 0;
    }
}
/*function showloader() {
    $("body span.showloader").remove();
    $("body").append("<span class='showloader'><i class='fa fa-refresh fa-spin'></i></span>");
}
function removeloader() {
    $("body span.showloader").remove();
}
*/
function DisplayMessage(msg) {
    var arr = msg.split(':');
    RemoveLoader();
    if (arr[0].toString().toLowerCase() == "true") {
        message(true, arr[1]);
    }
    else if (arr[0].toString().toLowerCase() == "false") {
        message(false, arr[1]);
    }
    else  {
        message(false, msg);
    }
}
function enc(data) {
    var a = data.split("").reverse().join("");
    var res = makeid(10);
    res += $.base64.btoa(a) + makeid(10);
    res = res.replace(new RegExp('==', 'g'), '@@@@@');
    return res;
}
function makeid(length) {
    var result = '';
    var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var charactersLength = characters.length;
    for (var i = 0; i < length; i++) {
        result += characters.charAt(Math.floor(Math.random() * charactersLength));
    }
    return result;
}
function progressHandlingFunction(e) {
    if (e.lengthComputable) {
        $('progress').attr({ value: e.loaded, max: e.total });
    }
}