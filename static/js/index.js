function openLoginForm() {
    document.getElementById("loginPopupForm").style.display = "block";
    document.getElementById("body").style.overflow = "hidden";
}

function closeLoginForm() {
    document.getElementById("loginPopupForm").style.display = "none";
    document.getElementById("body").style.overflow = "visible";
}

function openCreateAccountForm() {
    document.getElementById("createAccountPopupForm").style.display = "block";
    document.getElementById("body").style.overflow = "hidden";
}

function closeCreateAccountForm() {
    document.getElementById("createAccountPopupForm").style.display = "none";
    document.getElementById("body").style.overflow = "visible";
}

function showPassword() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}