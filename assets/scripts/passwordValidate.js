$(document).ready(function(){

    //from : https://codepen.io/diegoleme/pen/surIK

    var password = document.getElementById("password"), confirm_password = document.getElementById("confirm_password");

    function validatePassword(){
        if(password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Les mots de passe ne correspondent pas");
        } else {
            confirm_password.setCustomValidity('');
        }
    }
});