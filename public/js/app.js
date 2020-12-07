function showHome() {
    document.getElementById("home").style.display = "block";
    document.getElementById("friends").style.display = "none";
    document.getElementById("editprofile").style.display = "none";
    document.getElementById("request").style.display = "none";
}

function showFriends() {
    document.getElementById("friends").style.display = "block";
    document.getElementById("home").style.display = "none";
    document.getElementById("editprofile").style.display = "none";
    document.getElementById("request").style.display = "none";
}

function showEditProfile() {
    document.getElementById("editprofile").style.display = "block";
    document.getElementById("home").style.display = "none";
    document.getElementById("friends").style.display = "none";
    document.getElementById("request").style.display = "none";
}

function showRequest() {
    document.getElementById("request").style.display = "block";
    document.getElementById("editprofile").style.display = "none";
    document.getElementById("home").style.display = "none";
    document.getElementById("friends").style.display = "none";
}


var password = document.getElementById("password"),
    confirm_password = document.getElementById("confirm_password");

function validatePassword() {
    if (password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Passwords Don't Match");
    } else {
        confirm_password.setCustomValidity('');
    }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;