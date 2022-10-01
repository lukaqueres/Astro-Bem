function addAlert(text) {
    alerts = document.getElementsByClassName("alert");
    return false;
}

function loginValidate() {
    let email = document.getElementById("email").value.trim();
    let password = document.getElementById("password").value;
    if ( email == "" ) {
        return addAlert("Email field can not be empty");
    } else if ( password == "" ){
        return addAlert("Password field can not be empty. Please type your password here");
    }
    const pattern = { email: /^(\w|\W)*@(\w|\W)*$/i, password: /[^\s]/i };
    if (!pattern.email.test(email)) {
        return addAlert("Invalid email syntax, please check and correct.");
    } else if (!pattern.password.test(password)) {
        return addAlert("Password can not contain only white spaces.");
    }
    return True;
}
