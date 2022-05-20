function openLoginForm() {
    document.getElementById("loginPopupForm").style.display = "block";
    // document.getElementById("body").style.overflow = "hidden";
}

function closeLoginForm() {
    document.getElementById("loginPopupForm").style.display = "none";
    // document.getElementById("body").style.overflow = "visible";
}

function openCreateAccountForm() {
    document.getElementById("createAccountPopupForm").style.display = "block";
    // document.getElementById("body").style.overflow = "hidden";
}

function closeCreateAccountForm() {
    document.getElementById("createAccountPopupForm").style.display = "none";
    // document.getElementById("body").style.overflow = "visible";
}

function showLoginPassword() {
    var loginPassword = document.getElementById("login-password");

    if (loginPassword.type === "password") {
        loginPassword.type = "text";
    } else {
        loginPassword.type = "password";
    }
}

function showCreateAccountPassword() {
    var createAccountPassword = document.getElementById("create-account-password");
    
    if (createAccountPassword.type === "password") {
        createAccountPassword.type = "text";
    } else {
        createAccountPassword.type = "password";
    }
}