var SnippetLogin = function () {
    var e = $("#m_login"),
            i = function (e, i, a) {
              
                var l = $('<div class="m-alert m-alert--outline alert alert-' + i + ' alert-dismissible" role="alert"><span></span><button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>\t\t\t<span>'+a+' </span>\t\t</div>');
                e.find(".alert").remove(), l.prependTo(e)
            },
            a = function () {
                e.removeClass("m-login--forget-password"), e.removeClass("m-login--signup"), e.addClass("m-login--signin"), mUtil.animateClass(e.find(".m-login__signin")[0], "flipInX animated")
            },
            l = function () {
                $("#m_login_forget_password").click(function (i) {
                    i.preventDefault(), e.removeClass("m-login--signin"), e.removeClass("m-login--signup"), e.addClass("m-login--forget-password"), mUtil.animateClass(e.find(".m-login__forget-password")[0], "flipInX animated")
                }), $("#m_login_forget_password_cancel").click(function (e) {
                    e.preventDefault(), a()
                }), $("#m_login_signup").click(function (i) {
                    i.preventDefault(), e.removeClass("m-login--forget-password"), e.removeClass("m-login--signin"), e.addClass("m-login--signup"), mUtil.animateClass(e.find(".m-login__signup")[0], "flipInX animated")
                }), $("#m_login_signup_cancel").click(function (e) {
                    e.preventDefault(), a()
                })
            };
    return {
        init: function () {
            l(), $("#m_login_signin_submit").click(function (e) {
                e.preventDefault();
                var a = $(this),
                        l = $(this).closest("form");
                l.validate({
                    rules: {
                        email: {
                            required: !0,
                            email: !0
                        },
                        password: {
                            required: !0
                        }
                    }
                }), l.valid() && (a.addClass("m-loader m-loader--right m-loader--light").attr("disabled", !0), l.ajaxSubmit({
                    url: url + "adminlogin/auth",
                    success: function (data) {
                            a.removeClass("m-loader m-loader--right m-loader--light").attr("disabled", !1);
                         var result = $.parseJSON(data);   
                     
                        if (result.result === 1) {
                            i(l, "success", result.view);                            

                            window.location = result.url;

                        } else {

                            i(l, "danger", result.view);

                            $('.alert', $('.login-form')).show();


                        }
                    }
                }))
            }), $("#m_login_signup_submit").click(function (l) {
                l.preventDefault();
                var t = $(this),
                        r = $(this).closest("form");
                r.validate({
                    rules: {
                        fullname: {
                            required: !0
                        },
                        email: {
                            required: !0,
                            email: !0
                        },
                        password: {
                            required: !0
                        },
                        rpassword: {
                            required: !0
                        },
                        agree: {
                            required: !0
                        }
                    }
                }), r.valid() && (t.addClass("m-loader m-loader--right m-loader--light").attr("disabled", !0), r.ajaxSubmit({
                    url: "",
                    success: function (l, s, n, o) {
                        setTimeout(function () {
                            t.removeClass("m-loader m-loader--right m-loader--light").attr("disabled", !1), r.clearForm(), r.validate().resetForm(), a();
                            var l = e.find(".m-login__signin form");
                            l.clearForm(), l.validate().resetForm(), i(l, "success", "Thank you. To complete your registration please check your email.")
                        }, 2e3)
                    }
                }))
            }), $("#m_login_forget_password_submit").click(function (l) {
                l.preventDefault();
                var t = $(this),
                        r = $(this).closest("form");
                r.validate({
                    rules: {
                        email: {
                            required: !0,
                            email: !0
                        }
                    }
                }), r.valid() && (t.addClass("m-loader m-loader--right m-loader--light").attr("disabled", !0), r.ajaxSubmit({
                    url: "",
                    success: function (l, s, n, o) {
                        setTimeout(function () {
                            t.removeClass("m-loader m-loader--right m-loader--light").attr("disabled", !1), r.clearForm(), r.validate().resetForm(), a();
                            var l = e.find(".m-login__signin form");
                            l.clearForm(), l.validate().resetForm(), i(l, "success", "Cool! Password recovery instruction has been sent to your email.")
                        }, 2e3)
                    }
                }))
            })
        }
    }
}();
jQuery(document).ready(function () {
    SnippetLogin.init()
});