/*
 *  Document   : op_auth_signup.js
 *  Author     : pixelcave
 *  Description: Custom JS code used in Sign Up Page
 */

var OpAuthSignUp = function() {
    // Init Sign Up Form Validation, for more examples you can check out https://github.com/jzaefferer/jquery-validation
    var initValidationSignUp = function(){
        jQuery('.js-validation-signup').validate({
            errorClass: 'invalid-feedback animated fadeInDown',
            errorElement: 'div',
            errorPlacement: function(error, e) {
                jQuery(e).parents('.form-group > div').append(error);
            },
            highlight: function(e) {
                jQuery(e).closest('.form-group').removeClass('is-invalid').addClass('is-invalid');
            },
            success: function(e) {
                jQuery(e).closest('.form-group').removeClass('is-invalid');
                jQuery(e).remove();
            },
            rules: {
                'firstname': {
                    required: true,
                    minlength: 3
                },
                'lastname': {
                    required: true,
                    minlength: 3
                },
                'email': {
                    required: true,
                    email: true
                },
                'password': {
                    required: true,
                    minlength: 5
                },
                'password-confirm': {
                    required: true,
                    equalTo: '#password'
                },
                'phone': {
                    required: true,
                    minlength: 11,
                    maxlength: 14,
                    number: true
                }
            },
            messages: {
                'firstname': {
                    required: 'Please enter a first name',
                    minlength: 'Your first name must consist of at least 3 characters'
                },
                'lastname': {
                    required: 'Please enter a last name',
                    minlength: 'Your last name must consist of at least 3 characters'
                },
                'email': 'Please enter a valid email address',
                'password': {
                    required: 'Please provide a password',
                    minlength: 'Your password must be at least 5 characters long'
                },
                'password-confirm': {
                    required: 'Please provide a password',
                    minlength: 'Your password must be at least 5 characters long',
                    equalTo: 'Please enter the same password as above'
                },
                'phone': {
                    required: 'Please provide a phone number',
                    minlength: 'Phone number must be at least 11 digits',
                    maxlength: 'Phone number must not exceed 14 digits',
                    number: 'Numbers only'
                }

            }
        });
    };

    return {
        init: function () {
            // Init SignUp Form Validation
            initValidationSignUp();
        }
    };
}();

// Initialize when page loads
jQuery(function(){ OpAuthSignUp.init(); });