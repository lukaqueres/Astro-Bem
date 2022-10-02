function newAlert(text) {
    let alerts = document.getElementsByClassName("alert");
    for (i = 0; i < alerts.length; i++) {
        alerts[i].remove();
    }
    let container = document.getElementById("container");
    const alertDiv = document.createElement("div");
    const content = document.createTextNode(text);
    alertDiv.appendChild(content);
    alertDiv.classList.add("alert");
    container.appendChild(alertDiv);
    return false;
}

function focusField(field) {
    field.focus();
    field.select();
}

function loginValidate() {
    let email = document.getElementById("email");
    email.value = email.value.trim();
    let password = document.getElementById("password");
    if (email.value == "") {
        focusField(email);
        return newAlert("The email field cannot be empty.");
    } else if (password.value == "") {
        focusField(password);
        return newAlert("Please input your password.");
    }
    const pattern = {
        email: /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/, password: /^[^\s*]$/i }; // - Previous email: /^(\w|\W)*@(\w|\W)*$/i -
    if (!pattern.email.test(email.value)) {
        focusField(email);
        return newAlert("Invalid email syntax, please check and correct.");
    } else if (!pattern.password.test(password.value)) {
        focusField(password);
        return newAlert("The password cannot contain only spaces.");
    }
    return true;
}
