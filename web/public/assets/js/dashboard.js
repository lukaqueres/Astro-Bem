function addNewUserMenu() {
    let table = document.getElementById('users-details-table');
    var form = document.createElement('form');
    var name = document.createElement('input');
    name.type = "text";
    name.name = "name";
    name.id = "name";
    name.placeholder = "Insert user's name";

    var email = document.createElement('input');
    email.type = "email";
    email.name = "email";
    email.id = "email";
    email.placeholder = "Insert email";

    var password = document.createElement('input');
    password.type = "password";
    password.name = "password";
    password.id = "password";
    password.placeholder = "Insert password";

    var submit = document.createElement('button');
    submit.type = "submit";
    submit.innerText = "Add User";

    form.appendChild(name);
    form.appendChild(email);
    form.appendChild(password);
    form.appendChild(submit);

    let tr = document.createElement('tr');
    let td = tr.appendChild(document.createElement('td'));
    td.colSpan = "4";
    td.appendChild(form);

    table.tBodies[0].appendChild(tr);
}
