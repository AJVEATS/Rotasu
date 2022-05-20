function openLoginForm() {
    document.getElementById("loginPopupForm").style.display = "block";
    // document.getElementById("create-account-link").onclick = "#";
}

function closeLoginForm() {
    document.getElementById("loginPopupForm").style.display = "none";
    // document.getElementById("create-account-link").onclick = "openCreateAccountForm()";
}

function openCreateAccountForm() {
    document.getElementById("createAccountPopupForm").style.display = "block";
    // document.getElementById("login-link").onclick = "#";
}

function closeCreateAccountForm() {
    document.getElementById("createAccountPopupForm").style.display = "none";
    // document.getElementById("login-link").onclick = "openLoginForm()";
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