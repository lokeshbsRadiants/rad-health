
var block_ele = document;
var message = "";
function page_loader()
{
    message = '<div class="ft-refresh-cw icon-spin font-medium-2"><i class="fas fa-2x fa-sync"></i></div>';
    $.blockUI({
        message: message,
        overlayCSS: {
            backgroundColor: '#FFF',
            opacity: 0.8,
            cursor: 'wait'
        },
        css: {
            color: '#333',
            border: 0,
            padding: 0,
            backgroundColor: 'transparent'
        }
    });
}
function section_loader(section_class, block_ele_class)
{
    message = '<div class="ft-refresh-cw icon-spin font-medium-2"><i class="fas fa-2x fa-sync"></i></div>';
    block_ele = $(section_class).closest(block_ele_class);
    $(block_ele).block({
        message: message,
        overlayCSS: {
            backgroundColor: '#fff',
            opacity: 0.8,
            cursor: 'wait'
        },
        css: {
            // width: 200,
            border: 0,
            padding: 0,
            backgroundColor: 'transparent'
        },
        onBlock: function () {
            clearTimeout();
        }
    });
}
function close_section_loader()
{
    $(block_ele).unblock();
}
function close_loader()
{
    $.unblockUI();
}

function show_message(alert_type, msg) {
    swal({
        position: 'top-right',
        type: alert_type,
        title: msg,
        showConfirmButton: false,
        timer: 2500
    });
}

var timeline = function () {
    $(".add-edit-timeline").on("click", function () {
        section_loader(".add-edit-timeline", ".m-portlet");
        var js = {
            "id": $(this).attr("data-id")
        };
        $.post("admintimeline/add_edit_timeline", js, function (data) {
            if (data.str !== "") {
                $("#timeline").html(data.str);
                save_category();
            }
            close_section_loader();
        }, "json");
    });

    $(document).on("click", ".delete-timeline", function () {
        var id = $(this).attr("data-id");
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this later!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        },
        function () {
            section_loader(".add-edit-timeline", ".m-portlet");
            var js = {
                id: id
            };
            $.post(url + "admintimeline/del_timeline", js, function (data) {
                if (data.result === 0) {
                    show_message("Danger", "Sorry Cant Delete");
                } else {
                    window.location.reload();
                }
            }, "json")
                    .fail(function (response) {
                    })
                    .always(function () {
                        close_section_loader();
                    });
        });
    });
    save_category();
    function save_category() {
        $("[name=status]").val($("[name=status]").attr("data-s"));
        $(".cancel").on("click", function () {
            window.location.reload();
        });
        $(".submit").on("click", function () {
            var form1 = $('#timeline_form');
            form1.validate({
                invalidHandler: function (event, validator) {
                    var alert = $('#m_form_1_msg');
                    alert.removeClass('m--hide').show();
                    mApp.scrollTo(alert, -200);
                },
                rules: {
                    date: {
                        required: true,
                        remote: {
                            url: "admintimeline/check_timeline_exist",
                            type: "post",
                            data: {
                                'id': $('input[name=timeline_id]').val()
                            }
                        }
                    },
                    description: {
                        required: true
                    },
                    status: {
                        required: true
                    }
                },
                messages: {
                    date: {
                        name: "Please Enter Timeline Year",
                        remote: "Timeline Year Exist Already!!"
                    },
                    description: {
                        name: "Please Enter Description"
                    }
                },
                submitHandler: function (form) {
                    section_loader(".submit", "#timeline_form");
                    var data = form1.serializeArray();
                    $.post("admintimeline/save", data, function (data) {
                        close_section_loader();
                        if (data.result > 0) {
                            show_message("success", "Course saved successfully");
                            window.location.reload();
                        } else {
                            show_message("error", "Error occured");
                        }
                    }, "json");
                }
            });
        });
    }
    return {
        init: function () {
        }
    };
}();

var certifications = function () {
    var add_edit_gallery = function () {
        $(".submit").on("click", function () {
            var form1 = $('#certification_form');
            form1.validate({
                rules: {
                    certification_images: {
                        required: true
                    }
                },
                messages: {
                    certification_images: {
                        required: 'Please upload Certification Images!!!'
                    }
                },
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                errorPlacement: function (error, element) {
                    if (element.is(':checkbox')) {
                        error.insertAfter(element.closest(".md-checkbox-list, .md-checkbox-inline, .checkbox-list, .checkbox-inline"));
                    } else if (element.is(':radio')) {
                        error.insertAfter(element.closest(".md-radio-list, .md-radio-inline, .radio-list,.radio-inline"));
                    } else {
                        error.insertAfter(element); // for other inputs, just perform default behavior
                    }
                },
                highlight: function (element) { // hightlight error inputs
                    $(element).closest('.form-group').addClass('has-error'); // set error class to the control group
                },
                unhighlight: function (element) { // revert the change done by hightlight
                    $(element).closest('.form-group').removeClass('has-error'); // set error class to the control group
                },
                success: function (label) {
                    label.closest('.form-group').removeClass('has-error'); // set success class to the control group
                },
                submitHandler: function (form) {
                    section_loader(".submit", ".m-content");
                    var data = form1.serializeArray();
                    $.post(url + "admincertifications/save", data, function (data) {
                        close_section_loader();
                        if (data.result > 0) {
                            show_message("success", "Certifications Updated successfully");
                            window.location.reload();
                        } else {
                            show_message("error", "Error occured");
                        }
                    }, "json");
                }
            });
        });
//            
    }
    return {
        init: function () {
            add_edit_gallery();
        }
    };
}();

var clients = function () {
    $(".add-edit-client").on("click", function () {
        section_loader(".add-edit-client", ".m-portlet");
        var js = {
            "id": $(this).attr("data-id")
        };
        $.post("adminclients/add_edit_clients", js, function (data) {
            if (data.str !== "") {
                $("#clients").html(data.str);
                save_category();
            }
            close_section_loader();
        }, "json");
    });

    $(document).on("click", ".delete-client", function () {
        var id = $(this).attr("data-id");
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this later!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        },
        function () {
            section_loader(".add-edit-client", ".m-portlet");
            var js = {
                id: id
            };
            $.post(url + "adminclients/del_client", js, function (data) {
                if (data.result === 0) {
                    show_message("Danger", "Sorry Cant Delete");
                } else {
                    window.location.reload();
                }
            }, "json")
                    .fail(function (response) {
                    })
                    .always(function () {
                        close_section_loader();
                    });
        });
    });
    save_category();
    function save_category() {
        $("[name=status]").val($("[name=status]").attr("data-s"));
        $(".cancel").on("click", function () {
            window.location.reload();
        });
        $(".submit").on("click", function () {
            var form1 = $('#client_form');
            form1.validate({
                invalidHandler: function (event, validator) {
                    var alert = $('#m_form_1_msg');
                    alert.removeClass('m--hide').show();
                    mApp.scrollTo(alert, -200);
                },
                rules: {
                    client_type_id: {
                        required: true,
                        remote: {
                            url: "adminclients/check_type_exist",
                            type: "post",
                            data: {
                                'id': $('input[name=client_id]').val()
                            }
                        }
                    },
                    client_images: {
                        required: true
                    },
                    status: {
                        required: true
                    }
                },
                messages: {
                    client_type_id: {
                        required: "Please Select Client Type",
                        remote: "Client Type Exist Already!!please go and edit"
                    },
                    client_images: {
                        required: "Please upload client images"
                    }
                },
                submitHandler: function (form) {
                    section_loader(".submit", "#client_form");
                    var data = form1.serializeArray();
                    $.post("adminclients/save", data, function (data) {
                        close_section_loader();
                        if (data.result > 0) {
                            show_message("success", "Client Details saved successfully");
                            window.location.reload();
                        } else {
                            show_message("error", "Error occured");
                        }
                    }, "json");
                }
            });
        });
    }
    return {
        init: function () {
        }
    };
}();

var office_location = function () {
    $(".add-edit-office_location").on("click", function () {
        section_loader(".add-edit-office_location", ".m-portlet");
        var js = {
            "id": $(this).attr("data-id")
        };
        $.post("adminofficelocation/add_edit_office_location", js, function (data) {
            if (data.str !== "") {
                $("#office_location").html(data.str);
                save_category();
            }
            close_section_loader();
        }, "json");
    });

    $(document).on("click", ".delete-office_location", function () {
        var id = $(this).attr("data-id");
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this later!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        },
        function () {
            section_loader(".add-edit-office_location", ".m-portlet");
            var js = {
                id: id
            };
            $.post(url + "adminofficelocation/del_office_location", js, function (data) {
                if (data.result === 0) {
                    show_message("Danger", "Sorry Cant Delete");
                } else {
                    window.location.reload();
                }
            }, "json")
                    .fail(function (response) {
                    })
                    .always(function () {
                        close_section_loader();
                    });
        });
    });
    save_category();
    function save_category() {
        $("[name=status]").val($("[name=status]").attr("data-s"));
        $(".cancel").on("click", function () {
            window.location.reload();
        });
        $(".submit").on("click", function () {
            var form1 = $('#location_form');
            form1.validate({
                invalidHandler: function (event, validator) {
                    var alert = $('#m_form_1_msg');
                    alert.removeClass('m--hide').show();
                    mApp.scrollTo(alert, -200);
                },
                rules: {
                    office_name: {
                        required: true
                    },
                    location: {
                        required: true
                    },
                    address: {
                        required: true
                    },
                },
                messages: {
                    office_name: {
                        required: "Please Enter Office Name"
                    },
                    location: {
                        required: "Please enter Location!!!"
                    },
                    address: {
                        required: "Please Enter Address"
                    }
                },
                submitHandler: function (form) {
                    section_loader(".submit", "#location_form");
                    var data = form1.serializeArray();
                    $.post("adminofficelocation/save", data, function (data) {
                        close_section_loader();
                        if (data.result > 0) {
                            show_message("success", "Location saved successfully");
                            window.location.reload();
                        } else {
                            show_message("error", "Error occured");
                        }
                    }, "json");
                }
            });
        });
    }
    return {
        init: function () {
        }
    };
}();

var solution = function () {
    $(".add-edit-solution").on("click", function () {
        section_loader(".add-edit-solution", ".m-portlet");
        var js = {
            "id": $(this).attr("data-id")
        };
        $.post("adminsolution/add_edit_solution", js, function (data) {
            if (data.str !== "") {
                $("#solution").html(data.str);
                save_category();
            }
            close_section_loader();
        }, "json");
    });

    $(document).on("click", ".delete-solution", function () {
        var id = $(this).attr("data-id");
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this later!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        },
        function () {
            section_loader(".add-edit-solution", ".m-portlet");
            var js = {
                id: id
            };
            $.post(url + "adminsolution/del_solution", js, function (data) {
                if (data.result === 0) {
                    show_message("Danger", "Sorry Cant Delete");
                } else {
                    window.location.reload();
                }
            }, "json")
                    .fail(function (response) {
                    })
                    .always(function () {
                        close_section_loader();
                    });
        });
    });
    save_category();
    function save_category() {
        $("[name=status]").val($("[name=status]").attr("data-s"));
        $(".cancel").on("click", function () {
            window.location.reload();
        });
        $(".submit").on("click", function () {
            var form1 = $('#solution_form');
            form1.validate({
                invalidHandler: function (event, validator) {
                    var alert = $('#m_form_1_msg');
                    alert.removeClass('m--hide').show();
                    mApp.scrollTo(alert, -200);
                },
                rules: {
                    name: {
                        required: true,
                        remote: {
                            url: "adminsolution/check_solution_exist",
                            type: "post",
                            data: {
                                'id': $('input[name=solution_id]').val()
                            }
                        }
                    },
                    title: {
                        required: true
                    },
                    image: {
                        required: true
                    }, icon_image: {
                        required: true
                    }, description: {
                        required: true
                    }, description_image: {
                        required: true
                    }, feature: {
                        required: true
                    }, feature_image: {
                        required: true
                    }, benefits: {
                        required: true
                    }, why_radgov: {
                        required: true
                    },
                },
                messages: {
                    name: {
                        required: "Please Enter Solution Name",
                        remote: "Solution Name Exist Already!!"
                    },
                    title: {
                        required: "Please enter Title!!!"
                    },
                    image: {
                        required: "Please Enter Solution Image"
                    }
                },
                submitHandler: function (form) {
                    section_loader(".submit", "#solution_form");
                    var data = form1.serializeArray();
                    $.post("adminsolution/save", data, function (data) {
                        close_section_loader();
                        if (data.result > 0) {
                            show_message("success", "Solution saved successfully");
                            window.location.reload();
                        } else {
                            show_message("error", "Error occured");
                        }
                    }, "json");
                }
            });
        });
    }
    return {
        init: function () {
        }
    };
}();

var about_us = function () {
    var add_edit_gallery = function () {
        $(".submit").on("click", function () {
            var form1 = $('#about_form');
            form1.validate({
                rules: {
                    company_profile1: {
                        required: true
                    },
                    company_image1: {
                        required: true
                    },
                    company_profile2: {
                        required: true
                    },
                    company_image2: {
                        required: true
                    }, vision: {
                        required: true
                    }, vision_image: {
                        required: true
                    }, mission: {
                        required: true
                    }, mission_image: {
                        required: true
                    }, value: {
                        required: true
                    }, value_image: {
                        required: true
                    }
                },
                messages: {
                    company_profile1: {
                        required: 'Please enter company profile!!!'
                    },
                    company_image1: {
                        required: 'Please upload profile Images!!!'
                    }
                },
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                errorPlacement: function (error, element) {
                    if (element.is(':checkbox')) {
                        error.insertAfter(element.closest(".md-checkbox-list, .md-checkbox-inline, .checkbox-list, .checkbox-inline"));
                    } else if (element.is(':radio')) {
                        error.insertAfter(element.closest(".md-radio-list, .md-radio-inline, .radio-list,.radio-inline"));
                    } else {
                        error.insertAfter(element); // for other inputs, just perform default behavior
                    }
                },
                highlight: function (element) { // hightlight error inputs
                    $(element).closest('.form-group').addClass('has-error'); // set error class to the control group
                },
                unhighlight: function (element) { // revert the change done by hightlight
                    $(element).closest('.form-group').removeClass('has-error'); // set error class to the control group
                },
                success: function (label) {
                    label.closest('.form-group').removeClass('has-error'); // set success class to the control group
                },
                submitHandler: function (form) {
                    section_loader(".submit", ".m-content");
                    var data = form1.serializeArray();
                    $.post(url + "adminaboutus/save", data, function (data) {
                        close_section_loader();
                        if (data.result > 0) {
                            show_message("success", "Content Updated successfully");
                            window.location.reload();
                        } else {
                            show_message("error", "Error occured");
                        }
                    }, "json");
                }
            });
        });
//            
    }
    return {
        init: function () {
            add_edit_gallery();
        }
    };
}();

var contract_vehicle = function () {
    $(".add-edit-vehicle").on("click", function () {
        section_loader(".add-edit-vehicle", ".m-portlet");
        var js = {
            "id": $(this).attr("data-id")
        };
        $.post("admincontractvehicles/add_edit_contract_vehicle", js, function (data) {
            if (data.str !== "") {
                $("#contract_vehicle").html(data.str);
                save_category();
            }
            close_section_loader();
        }, "json");
    });

    $(document).on("click", ".delete-vehicle", function () {
        var id = $(this).attr("data-id");
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this later!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        },
        function () {
            section_loader(".add-edit-vehicle", ".m-portlet");
            var js = {
                id: id
            };
            $.post(url + "admincontractvehicles/del_contract_vehicle", js, function (data) {
                if (data.result === 0) {
                    show_message("Danger", "Sorry Cant Delete");
                } else {
                    window.location.reload();
                }
            }, "json")
                    .fail(function (response) {
                    })
                    .always(function () {
                        close_section_loader();
                    });
        });
    });
    save_category();
    function save_category() {
        $("[name=status]").val($("[name=status]").attr("data-s"));
        $(".cancel").on("click", function () {
            window.location.reload();
        });
        $(".submit").on("click", function () {
            var form1 = $('#contract_form');
            form1.validate({
                invalidHandler: function (event, validator) {
                    var alert = $('#m_form_1_msg');
                    alert.removeClass('m--hide').show();
                    mApp.scrollTo(alert, -200);
                },
                rules: {
                    contract_name: {
                        required: true,
                        remote: {
                            url: "admincontractvehicles/check_contract_vehicle_exist",
                            type: "post",
                            data: {
                                'id': $('input[name=contract_id]').val()
                            }
                        }
                    },
                    contract_type: {
                        required: true
                    },
                    image: {
                        required: true
                    }, status: {
                        required: true
                    }
                },
                messages: {
                    contract_name: {
                        required: "Please Enter Contract Vehicle Name",
                        remote: "Contract Vehicle Name Exist Already!!"
                    },
                    contract_type: {
                        required: "Please select Contract Type!!!"
                    },
                    image: {
                        required: "Please Enter Image"
                    }, contract_description: {
                        required: "Please Enter Description"
                    }
                },
                submitHandler: function (form) {
                    section_loader(".submit", "#contract_form");
                    var data = form1.serializeArray();
                    $.post("admincontractvehicles/save", data, function (data) {
                        close_section_loader();
                        if (data.result > 0) {
                            show_message("success", "Solution saved successfully");
                            window.location.reload();
                        } else {
                            show_message("error", "Error occured");
                        }
                    }, "json");
                }
            });
        });
    }
    return {
        init: function () {
        }
    };
}();

var client_sub_module = function () {
    $(".add-edit-sub_module").on("click", function () {
        section_loader(".add-edit-sub_module", ".m-portlet");
        var js = {
            "id": $(this).attr("data-id")
        };
        $.post("adminclientmodule/add_edit_client_sub_module", js, function (data) {
            if (data.str !== "") {
                $("#client_sub_module").html(data.str);
                save_category();
            }
            close_section_loader();
        }, "json");
    });

    $(document).on("click", ".delete-sub_module", function () {
        var id = $(this).attr("data-id");
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this later!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        },
        function () {
            section_loader(".add-edit-sub_module", ".m-portlet");
            var js = {
                id: id
            };
            $.post(url + "adminclientmodule/del_client_sub_module", js, function (data) {
                if (data.result === 0) {
                    show_message("Danger", "Sorry Cant Delete");
                } else {
                    window.location.reload();
                }
            }, "json")
                    .fail(function (response) {
                    })
                    .always(function () {
                        close_section_loader();
                    });
        });
    });
    save_category();
    function save_category() {
        $("[name=status]").val($("[name=status]").attr("data-s"));
        $(".cancel").on("click", function () {
            window.location.reload();
        });
        $(".submit").on("click", function () {
            var form1 = $('#client_sub_module_form');
            form1.validate({
                invalidHandler: function (event, validator) {
                    var alert = $('#m_form_1_msg');
                    alert.removeClass('m--hide').show();
                    mApp.scrollTo(alert, -200);
                },
                rules: {
                    sub_module_name: {
                        required: true,
                        remote: {
                            url: "adminclientmodule/check_client_sub_module_exist",
                            type: "post",
                            data: {
                                'id': $('input[name=client_sub_module_id]').val()
                            }
                        }
                    },
                    client_module_id: {
                        required: true
                    },
                    banner_image: {
                        required: true
                    }, description: {
                        required: true
                    }, description_image: {
                        required: true
                    }
                },
                messages: {
                    sub_module_name: {
                        required: "Please Enter  Name",
                        remote: "Name Exist Already!!"
                    },
                    client_module_id: {
                        required: "Please enter Module!!!"
                    },
                    banner_image: {
                        required: "Please Enter Image"
                    }, description: {
                        required: "Please Enter Description"
                    }
                },
                submitHandler: function (form) {
                    section_loader(".submit", "#client_sub_module_form");
                    var data = form1.serializeArray();
                    $.post("adminclientmodule/save", data, function (data) {
                        close_section_loader();
                        if (data.result > 0) {
                            show_message("success", "Client saved successfully");
                            window.location.reload();
                        } else {
                            show_message("error", "Error occured");
                        }
                    }, "json");
                }
            });
        });
    }
    return {
        init: function () {
        }
    };
}();

var client_agency = function () {
    $(".add-edit-agency").on("click", function () {
        section_loader(".add-edit-agency", ".m-portlet");
        var js = {
            "id": $(this).attr("data-id")
        };
        $.post("adminclientagencies/add_edit_client_agency", js, function (data) {
            if (data.str !== "") {
                $("#client_agency").html(data.str);
                save_category();
            }
            close_section_loader();
        }, "json");
    });

    $(document).on("click", ".delete-agency", function () {
        var id = $(this).attr("data-id");
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this later!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        },
        function () {
            section_loader(".add-edit-agency", ".m-portlet");
            var js = {
                id: id
            };
            $.post(url + "adminclientagencies/del_client_agency", js, function (data) {
                if (data.result === 0) {
                    show_message("Danger", "Sorry Cant Delete");
                } else {
                    window.location.reload();
                }
            }, "json")
                    .fail(function (response) {
                    })
                    .always(function () {
                        close_section_loader();
                    });
        });
    });
    save_category();
    function save_category() {
        $("[name=status]").val($("[name=status]").attr("data-s"));
        $(".cancel").on("click", function () {
            window.location.reload();
        });
        $(".submit").on("click", function () {
            var form1 = $('#client_agency_form');
            form1.validate({
                invalidHandler: function (event, validator) {
                    var alert = $('#m_form_1_msg');
                    alert.removeClass('m--hide').show();
                    mApp.scrollTo(alert, -200);
                },
                rules: {
                    agency_name: {
                        required: true,
//                        remote: {
//                            url: "adminclientagencies/check_client_agency_exist",
//                            type: "post",
//                            data: {
//                                'id': $('input[name=agency_id]').val()
//                            }
//                        }
                    },
                    client_sub_module_id: {
                        required: true
                    }, image: {
                        required: true
                    }, title: {
                        required: true
                    },
//                    agency_type: {
//                        required: true
//                    }
                },
                messages: {
                    agency_name: {
                        required: "Please Enter  Name",
                        remote: "Name Exist Already!!"
                    },
                    client_sub_module_id: {
                        required: "Please select Module!!!"
                    }, image: {
                        required: "Please Enter Image"
                    }, title: {
                        required: "Please Enter Title"
                    }
                },
                submitHandler: function (form) {
                    section_loader(".submit", "#client_agency_form");
                    var data = form1.serializeArray();
                    $.post("adminclientagencies/save", data, function (data) {
                        close_section_loader();
                        if (data.result > 0) {
                            show_message("success", "Client saved successfully");
                            window.location.reload();
                        } else {
                            show_message("error", "Error occured");
                        }
                    }, "json");
                }
            });
        });
    }
    return {
        init: function () {
        }
    };
}();

var service = function () {
    $(".add-edit-service").on("click", function () {
        section_loader(".add-edit-service", ".m-portlet");
        var js = {
            "id": $(this).attr("data-id")
        };
        $.post("adminservice/add_edit_service", js, function (data) {
            if (data.str !== "") {
                $("#service").html(data.str);
                save_category();
            }
            close_section_loader();
        }, "json");
    });

    $(document).on("click", ".delete-service", function () {
        var id = $(this).attr("data-id");
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this later!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        },
        function () {
            section_loader(".add-edit-service", ".m-portlet");
            var js = {
                id: id
            };
            $.post(url + "adminservice/del_service", js, function (data) {
                if (data.result === 0) {
                    show_message("Danger", "Sorry Cant Delete");
                } else {
                    window.location.reload();
                }
            }, "json")
                    .fail(function (response) {
                    })
                    .always(function () {
                        close_section_loader();
                    });
        });
    });
    save_category();
    function save_category() {
        $("[name=status]").val($("[name=status]").attr("data-s"));
        $(".cancel").on("click", function () {
            window.location.reload();
        });
        $(".submit").on("click", function () {
            var form1 = $('#service_form');
            form1.validate({
                invalidHandler: function (event, validator) {
                    var alert = $('#m_form_1_msg');
                    alert.removeClass('m--hide').show();
                    mApp.scrollTo(alert, -200);
                },
                rules: {
                    name: {
                        required: true,
                        remote: {
                            url: "adminservice/check_service_exist",
                            type: "post",
                            data: {
                                'id': $('input[name=service_id]').val()
                            }
                        }
                    }, layout: {
                        required: true
                    }
                },
                messages: {
                    name: {
                        required: "Please Enter  Name",
                        remote: "Name Exist Already!!"
                    }, layout: {
                        required: "Please Select Layout"
                    }
                },
                submitHandler: function (form) {
                    section_loader(".submit", "#service_form");
                    var data = form1.serializeArray();
                    $.post("adminservice/save", data, function (data) {
                        close_section_loader();
                        if (data.result > 0) {
                            show_message("success", "Service saved successfully");
                            window.location.reload();
                        } else {
                            show_message("error", "Error occured");
                        }
                    }, "json");
                }
            });
        });
    }
    return {
        init: function () {
        }
    };
}();

var sub_service = function () {
    $(".add-edit-sub_service").on("click", function () {
        section_loader(".add-edit-sub_service", ".m-portlet");
        var js = {
            "id": $(this).attr("data-id")
        };
        $.post("adminsubservice/add_edit_sub_service", js, function (data) {
            if (data.str !== "") {
                $("#sub_service").html(data.str);
                save_category();
            }
            close_section_loader();
        }, "json");
    });

    $(document).on("click", ".delete-sub_service", function () {
        var id = $(this).attr("data-id");
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this later!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        },
        function () {
            section_loader(".add-edit-sub_service", ".m-portlet");
            var js = {
                id: id
            };
            $.post(url + "adminsubservice/del_sub_service", js, function (data) {
                if (data.result === 0) {
                    show_message("Danger", "Sorry Cant Delete");
                } else {
                    window.location.reload();
                }
            }, "json")
                    .fail(function (response) {
                    })
                    .always(function () {
                        close_section_loader();
                    });
        });
    });
    save_category();
    function save_category() {
        $("[name=status]").val($("[name=status]").attr("data-s"));
        $(".cancel").on("click", function () {
            window.location.reload();
        });
        $(".submit").on("click", function () {
            var form1 = $('#sub_service_form');
            form1.validate({
                invalidHandler: function (event, validator) {
                    var alert = $('#m_form_1_msg');
                    alert.removeClass('m--hide').show();
                    mApp.scrollTo(alert, -200);
                },
                rules: {
                    sub_service_name: {
                        required: true,
                        remote: {
                            url: "adminsubservice/check_sub_service_exist",
                            type: "post",
                            data: {
                                'id': $('input[name=sub_service_id]').val()
                            }
                        }
                    }, service_id: {
                        required: true
                    }, is_more_service: {
                        required: true
                    }, image: {
                        required: function (element) {
                            return $("select[name=is_more_service]").val() === "Yes";
                        }
                    }, banner_image: {
                        required: function (element) {
                            return $("select[name=is_more_service]").val() === "Yes";
                        }
                    }, description: {
                        required: function (element) {
                            return $("select[name=is_more_service]").val() === "Yes";
                        }
                    }
                },
                messages: {
                    sub_service_name: {
                        required: "Please Enter  Name",
                        remote: "Name Exist Already!!"
                    }, service_id: {
                        required: "Please Select Service"
                    }, is_more_service: {
                        required: "Please Select"
                    }, image: {
                        required: "Please Upload Image!!"
                    }, banner_image: {
                        required: "Please Upload Image!!"
                    }, description: {
                        required: "Please Enter Description"
                    }
                },
                submitHandler: function (form) {
                    section_loader(".submit", "#sub_service_form");
                    var data = form1.serializeArray();
                    $.post("adminsubservice/save", data, function (data) {
                        close_section_loader();
                        if (data.result > 0) {
                            show_message("success", "sub service saved successfully");
                            window.location.reload();
                        } else {
                            show_message("error", "Error occured");
                        }
                    }, "json");
                }
            });
        });
    }
    return {
        init: function () {
        }
    };
}();

var service_detail = function () {
    $(".add-edit-service_detail").on("click", function () {
        section_loader(".add-edit-service_detail", ".m-portlet");
        var js = {
            "id": $(this).attr("data-id")
        };
        $.post("adminservicedetail/add_edit_service_detail", js, function (data) {
            if (data.str !== "") {
                $("#service_detail").html(data.str);
                save_category();
            }
            close_section_loader();
        }, "json");
    });

    $(document).on("click", ".delete-service_detail", function () {
        var id = $(this).attr("data-id");
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this later!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        },
        function () {
            section_loader(".add-edit-service_detail", ".m-portlet");
            var js = {
                id: id
            };
            $.post(url + "adminservicedetail/del_service_detail", js, function (data) {
                if (data.result === 0) {
                    show_message("Danger", "Sorry Cant Delete");
                } else {
                    window.location.reload();
                }
            }, "json")
                    .fail(function (response) {
                    })
                    .always(function () {
                        close_section_loader();
                    });
        });
    });

    $(document).on("click", '.mt-repeater-feature-add', function () {
        var obj = $("[data-repeater-item]:last");
        var clone = obj.clone();
        $("[data-repeater-item]:last").after(clone);
        obj = $("[data-repeater-item]:last");
        var totAttr = $('input[name=total_features]').val();
        var newAttr = parseInt(totAttr) + parseInt(1);
        $('input[name=total_features]').val(newAttr);
        obj.find(".key_features").attr('name', 'key_features[' + newAttr + ']');
        obj.find(".key_icons").attr('name', 'key_icons[' + newAttr + ']');
        obj.find(":input").val("");
        obj.find(".data-repeater-question-delete").css('display', "inline-block");
        obj.find(".data-repeater-question-delete").attr("data-id", "");
    });
    $(document).on('click', '.data-repeater-feature-delete', function () {
        var id = $(this).attr("data-id");
        if ($(".ingredient").length > 1) {
            $(this).closest('.ingredient').remove();
            $(this).slideUp();
        } else {
            alert("Minimum one Attribute required");
        }
    });

    save_category();
    function save_category() {
        $("[name=status]").val($("[name=status]").attr("data-s"));
        $(".cancel").on("click", function () {
            window.location.reload();
        });
        $(".submit").on("click", function () {
            var form1 = $('#service_detail_form');
            $("input.key_features").each(function () {
                if ($(this).val() === "") {
                    $(this).addClass('error');
                } else {
                    $(this).removeClass('error');
                }
            });
            $("input.key_icons").each(function () {
                if ($(this).val() === "") {
                    $(this).addClass('error');
                } else {
                    $(this).removeClass('error');
                }
            });

            form1.validate({
                invalidHandler: function (event, validator) {
                    var alert = $('#m_form_1_msg');
                    alert.removeClass('m--hide').show();
                    mApp.scrollTo(alert, -200);
                },
                rules: {
                    sub_service_id: {
                        required: true
                    }, service_detail_name: {
                        required: true,
                        remote: {
                            url: "adminservicedetail/check_service_detail_exist",
                            type: "post",
                            data: {
                                'id': $('input[name=service_detail_id]').val()
                            }
                        }
                    }, description: {
                        required: true
                    }, icon_image: {
                        required: true
                    }, banner_image: {
                        required: true
                    }, benefits: {
                        required: true
                    }, benefits_image: {
                        required: true
                    }, why_radgov: {
                        required: true
                    },
                },
                messages: {
                    sub_service_id: {
                        required: "Please Select Service!!"
                    }, service_detail_name: {
                        required: "Please Enter  Name",
                        remote: "Name Exist Already!!"
                    }, description: {
                        required: "Please Enter  Description"
                    }, icon_image: {
                        required: "Please Upload Image!!"
                    }, banner_image: {
                        required: "Please Upload Image!!"
                    },
                },
                submitHandler: function (form) {
                    section_loader(".submit", "#service_detail_form");
                    var data = form1.serializeArray();
                    $.post("adminservicedetail/save", data, function (data) {
                        close_section_loader();
                        if (data.result > 0) {
                            show_message("success", "Service Details saved successfully");
                            window.location.reload();
                        } else {
                            show_message("error", "Error occured");
                        }
                    }, "json");
                }
            });
        });
    }
    return {
        init: function () {
        }
    };
}();


jQuery(document).ready(function () {
    $('#myTable').DataTable();
    var pageId = $(".m-content").attr("id");
    switch (pageId) {
        case "timeline":
            timeline.init();
            break;
        case "certifications":
            certifications.init();
            break;
        case "clients":
            clients.init();
            break;
        case "office_location":
            office_location.init();
            break;
        case "solution":
            solution.init();
            break;
        case "about_us":
            about_us.init();
            break;
        case "contract_vehicle":
            contract_vehicle.init();
            break;
        case "client_sub_module":
            client_sub_module.init();
            break;
        case "client_agency":
            client_agency.init();
            break;
        case "service":
            service.init();
            break;
        case "sub_service":
            sub_service.init();
            break;
        case "service_detail":
            service_detail.init();
            break;
    }
});
