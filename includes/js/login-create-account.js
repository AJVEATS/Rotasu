function showPassword() {
    var password = document.getElementById("password");

    var createAccountPassword = document.getElementById("create-account-password");
    
    if (password.type === "password") {
        password.type = "text";
    } else {
        password.type = "password";
    }

    if (createAccountPassword.type === "password") {
        createAccountPassword.type = "text";
    } else {
        createAccountPassword.type = "password";
    }
}
