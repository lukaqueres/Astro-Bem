function showNewUserMenu() {
    let form = document.getElementById('add-new-user-form');
    form.classList.remove("hidden");
    let button = document.getElementById('add-new-user-reveal');
    button.classList.add('hidden');
}

function focusField(field) { // - Move cursor to given field. Additionally select its content -
    field.focus();
    field.select();
}

function newUserError(text, status = false) { // - Deletes all exisiting alerts and creates new from provided text. Returns status after creation -
    let alerts = document.getElementsByClassName("new-user-error");
    for (i = 0; i < alerts.length; i++) {
        alerts[i].remove();
    }
    let container = document.getElementById("add-new-user-form");
    const alertDiv = document.createElement("div");
    const p = document.createElement("");
    const content = document.createTextNode(text);
    p.appendChild(content);
    alertDiv.appendChild(p);
    alertDiv.classList.add("new-user-error");
    container.appendChild(alertDiv);
    return status;
}

function validateNewUserForm(e) {
    let name = e.target.querySelector('#name')
    name.value = name.value.trim();
    let email = e.target.querySelector('#email')
    email.value = email.value.trim();
    let password = e.target.querySelector('#password')
    const lengths = {
        name: 25,
        email: 30,
        password: 18,
    };
    const pattern = { // - Patterns for RegExp testing of password and email -
        name: /\S/,
        email: /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/, // - Pattern from mozilla docs, read more here https://github.com/lukaqueres/Astro-Bem/issues/1#issuecomment-1264682760 -
        password: /\S/, // - Email is only tested if it is made from white spaces only -
    };

    if (email.value == "") { // - Checking if both email or password values are empty - 
        focusField(email);
        return newUserError("The email field cannot be empty.");
    } else if (password.value == "") {
        focusField(password);
        return newUserError("Please input password.");
    } else if (name.value == "") {
        focusField(name);
        return newUserError("Please input user name.");
    }

    if (name.value > lengths.name) {
        return newUserError('Name can be maximum ' + lengths.name + ' caracters long.');
    }
    if (email.value > lengths.email) {
        return newUserError('Email cannot be more than ' + lengths.email + ' caracters long.');
    }
    if (password.value > lengths.password) {
        return newUserError('Password cannot be more than ' + lengths.password + ' caracters long.');
    }
    if (password.value < 3) {
        return newUserError('Password must have more than 3 caracters.');
    }
    if (!pattern.name.test(name.value)) { // - Testing patterns -
        focusField(email);
        return newAlert("The name cannot be made only with white caracters.");
    }
    if (!pattern.email.test(email.value)) {
        focusField(email);
        return newAlert("Invalid email syntax, please check and correct.");
    }
    if (!pattern.password.test(password.value)) {
        focusField(password);
        return newAlert("The password cannot contain only spaces.");
    }
    return true;
}
