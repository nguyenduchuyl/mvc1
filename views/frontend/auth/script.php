<script>
    // function registerForm(formId){
    //     var form = $('#'+formId);

    //     // tổng hợp dữ liệu từ form
    //     var dataSend = {
    //         'username' : form.find('.username').first().val()
    //     };

    //     // gửi ajax
    //     $.ajax({
    //         url: "<?php echo Route::name('auth.register');?>",
    //         type: "POST",
    //         data: dataSend,
    //         success: function (data) {
    //             var data = $.parseJSON(data);
    //             console.log(data);
    //             console.log(data.username);
    //         },
    //         error: function () {

    //         }
    //     });
    // }

    function validateRegisterForm(){

        var datepicker = $('#register-form').find('.date-of-birth').first();
        initDatepicker(datepicker);

        $('#register-form').bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                username: {
                    container: '.username-validate',
                    validators: {
                        notEmpty: {
                            message: 'User name cannot be blank.'
                        },
                        stringLength: {
                            min: 6,
                            max: 30,
                            message: 'Account name must be between 6-30 characters'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z0-9_\.]+$/,
                            message: 'Username cannot contain special characters'
                        },
                        different: {
                            field: 'password',
                            message: 'Username cannot be the same as password'
                        },
                        //remote: {
                        //    message: "That username is already in use",
                        //    url: "<?php //echo Route::name('auth.check-duplicate-username')?>//",
                        //    data: {
                        //        username: 'username'
                        //    },
                        //    type: 'POST',
                        //    delay: 2000     // Send Ajax request every 2 seconds
                        //}

                    }
                },
                email: {
                    container: '.email-validate',
                    validators: {
                        notEmpty: {
                            message: 'Email cannot be blank.'
                        },
                        emailAddress: {
                            message: 'You must re-enter the correct password'
                        }
                    }
                },
                password: {
                    container: '.password-validate',
                    validators: {
                        notEmpty: {
                            message: 'The Password cannot be blank'
                        },
                        identical: {
                            field: 'password',
                            message: "You must re-enter the correct password",
                        }
                    }
                },

                re_password: {
                    container: '.re-password-validate',
                    validators: {
                        notEmpty: {
                            message: 'You should enter Password again !'
                        },
                        identical: {
                            field: 'password',
                            message: "You must re-enter the correct password",
                        }
                    }
                },

                fullname: {
                    container: '.fullname-validate',
                    validators: {
                        notEmpty: {
                            message: 'Name cannot be blank. '
                        }
                    }
                },
                phone_number: {
                    container: '.phone-validate',
                    validators: {
                        notEmpty: {
                            message: 'Phone number cannot be blank. '
                        }
                    }
                },
                address: {
                    container: '.address-validate',
                    validators: {
                        notEmpty: {
                            message: 'You should enter your address. '
                        }
                    }
                },
                date_of_birth: {
                    container: '.date-of-birth-validate',
                    validators: {
                        notEmpty: {
                            message: 'You must be enter your birth day. '
                        }
                    }
                },

            },
            callback: {
                callback: function(value, validator, $field) {
                    console.log(value, validator,$field);
                }
            }
        });
    }
    function validateLoginForm(){

        $('#login-form').bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                username: {
                    container: '.login-username-validate',
                    validators: {
                        notEmpty: {
                            message: 'You must enter Username'
                        },
                        stringLength: {
                            min: 6,
                            max: 30,
                            message: 'Account name must be between 6-30 characters'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z0-9_\.]+$/,
                            message: 'Username cannot contain special characters'
                        },
                        different: {
                            field: 'password',
                            message: 'Username cannot be the same as password'
                        }
                    }
                },

                password: {
                    container: '.login-password-validate',
                    validators: {
                        notEmpty: {
                            message: 'You must enter Password'
                        }
                    }
                }
            }
        });
    }
</script>