function checkPasswordMatch() {
    if (document.getElementById("psw1").value == document.getElementById("psw2").value) {
        document.getElementById("confirmation").innerHTML = "Passwords match";
    } else {
        document.getElementById("confirmation").innerHTML = "Passwords don't match";
    }
}

function showLogin() {
    document.getElementById("login_form").style.display = "block";
    document.getElementById("register_form").style.display = "none";
    document.getElementById("loginBtn").classList.add("activeBtn");
    document.getElementById("registerBtn").classList.remove("activeBtn");
}

function showRegister() {
    document.getElementById("login_form").style.display = "none";
    document.getElementById("register_form").style.display = "block";
    document.getElementById("loginBtn").classList.remove("activeBtn");
    document.getElementById("registerBtn").classList.add("activeBtn");
}