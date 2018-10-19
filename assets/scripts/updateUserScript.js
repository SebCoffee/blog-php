function usernameCallBack(response) {
    console.log("usernameCallBack received response ="+response);
    if (response === 'taken') {
        username_state = false;
        $('#username').parent().removeClass();
        $('#username').parent().addClass("form_error");
        $('#username').siblings("span").text('Sorry... Username already taken');
    } else if (response === 'not_taken') {
        username_state = true;
        $('#username').parent().removeClass();
        $('#username').parent().addClass("form_success");
        $('#username').siblings("span").text('Username available');
    }
}

function emailCallBack(response) {
    console.log("emailCallBack received response = "+response);
    if (response === 'taken') {
        email_state = false;
        $('#email').parent().removeClass();
        $('#email').parent().addClass("form_error");
        $('#email').siblings("span").text('Sorry... Email already taken');
    } else if (response === 'not_taken') {
        email_state = true;
        $('#email').parent().removeClass();
        $('#email').parent().addClass("form_success");
        $('#email').siblings("span").text('Email available');
    }
}

function usernameCheck(usernameCallBack) {
    var id= new URLSearchParams(window.location.search).get('id');
    var username = $('#username').val();
    if (username == '') {
        username_state = false;
        return;
    }
    $.ajax({
        url: 'submitUserEdition.php',
        type: 'post',
        data: {
            'username_check': 1,
            'username': username,
            'id': id,
        },
        success: function (response) {
            usernameCallBack(response);
        }
    });
}

function emailCheck(emailCallBack){
    var id= new URLSearchParams(window.location.search).get('id');
    var email = $('#email').val();
    if (email === '') {
        email_state = false;
        return;
    }
    $.ajax({
        url: 'submitUserEdition.php',
        type: 'post',
        data: {
            'email_check' : 1,
            'email' : email,
            'id': id,
    },
    success: function(response){
        emailCallBack(response);
    }
    });
}

function submitForm() {
    console.log("username state = " + username_state);
    console.log("email state = " + email_state);
    var id= new URLSearchParams(window.location.search).get('id');
    var username = $('#username').val();
    var email = $('#email').val();
    var password = $('#password').val();
    if (username_state === false || email_state === false) {
        $('#error_msg').text('Fix the errors in the form first');
    } else {
        // proceed with form submission
        $.ajax({
            url: 'submitUserEdition.php',
            type: 'post',
            data: {
                'save': 1,
                'id': id,
                'email': email,
                'username': username,
                'password': password,
            },
            success: function () {
                alert('user saved');
                location.replace(document.referrer);

            }
        });
    }
}
$(document).ready(function () {
     username_state = false;
     email_state = false;
    usernameCheck(usernameCallBack);
    emailCheck(emailCallBack);
});



