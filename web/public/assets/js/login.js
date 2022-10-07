import Form from 'form'; 
//const Form = require('./assets/js/form') 

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
        'email': ['required', 'email'],
        'password': ['required'],
    });
    return valid;
    /*
    let email = document.getElementById("email");
    email.value = email.value.trim(); 
    let password = document.getElementById("password");
    if (email.value == "") { // - Checking if both email or password values are empty - 
        focusField(email);
        return newAlert("The email field cannot be empty.");
    } else if (password.value == "") {
        focusField(password);
        return newAlert("Please input your password.");
    }
    const pattern = { // - Patterns for RegExp testing of password and email -
        email: /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/, // - Pattern from mozilla docs, read more here https://github.com/lukaqueres/Astro-Bem/issues/1#issuecomment-1264682760 -
        password: /\S/, // - Email is only tested if it is made from white spaces only -
    };
    if (!pattern.email.test(email.value)) { // - Testing patterns -
        focusField(email);
        return newAlert("Invalid email syntax, please check and correct.");
    } else if (!pattern.password.test(password.value)) {
        focusField(password);
        return newAlert("The password cannot contain only spaces.");
    }
    return true; // - If everything passed request is validated -
    */
}
