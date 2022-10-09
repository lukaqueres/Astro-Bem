//import Form from 'form'; 
//const Form = require('./assets/js/form')  // - TODO: Fix imports -

function newAlert(text, status = false) { // - Deletes all exisiting alerts and creates new from provided text. Returns status after creation -
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
    return status;
}

function focusField(field) { // - Move cursor to given field. Additionally select its content -
    field.focus();
    field.select();
}

function loginValidate(e) { // - This function validates login form. Must return `true` to send request -
    let form = new Form(e.target, 'error');
    let valid = form.validate({
        'email': ['trim', 'required', 'email'],
        'password': ['required'],
    });
    return valid;
}
