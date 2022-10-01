function addAlert(text) {
    let alerts = document.getElementsByClassName("alert");
    for (i = 0; i < alerts.length; i++) {
        alerts[i].remove();
    }
    let form = document.getElementById("container").getElementsByTagName("form")[0];
    const alertDiv = document.createElement("div");
    const content = document.createTextNode(text);
    alertDiv.appendChild(content);
    form.appendChild()
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
