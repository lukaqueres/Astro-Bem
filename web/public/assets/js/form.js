class Form {
    form;
    #errorContainer;
    constructor(form, errorContainerId = 'form-error') {
        if (!(form instanceof HTMLFormElement )) { // - Check if value within `form` variable is a DOM element and is a form -
            return console.log(`${form} is not a valid DOM ( family ) & FORM element`)
        }

        let errorContainer = document.getElementById(errorContainerId) || false;
        if (!errorContainer) {
            errorContainer = document.getElementById('form-error') || false;
            if (!errorContainer) {
                return console.log(`Object of id '${errorContainerId}' not found `);
            }
            console.log(`Object of id '${errorContainerId}' not found, using default 'form-error' `);
        }
        this.form = form; // - Assign form ( element ) as a form ( class ) field -
        this.#errorContainer = errorContainer;
    }

    get inputs() {
        return this.form.querySelectorAll('input');
    }

    validate(params) {
        /*
        if (params instanceof Object && !(params instanceof Array || params instanceof Date)) { // - Check if params is a dictionary like object -
            console.log(`${params} is not a dict-type object`);
            return true;
        }
        */
        for (const [name, checks] of Object.entries(params)) {
            let input = undefined;
            for (const element of this.inputs) { 
                if (element.getAttribute("name") == name) {
                    input = element;
                    break;
                }
            }
            if (!input) {
                console.log(`${name} field not found`);
                continue;
            }
            if (!checks instanceof Array) {
                console.log(`${value} is not an array`);
                return true;
            }
            for (const check of checks) {
                let Validating = new Validator(input, check);
                let isValid;
                let message;
                [isValid, message] = Validating.check();
                if (isValid) {
                    continue;
                } else {
                    this.#raiseError(message);
                    this.#focus(input);
                    return false;
                }
            }
        }
        return true;
    }

    #raiseError(text) {
        let alerts = this.#errorContainer.getElementsByClassName("alert");
        for (let i = 0; i < alerts.length; i++) {
            alerts[i].remove();
        }
        const alert = document.createElement("div");
        const content = document.createTextNode(text);
        alert.appendChild(content);
        alert.classList.add("alert");
        this.#errorContainer.appendChild(alert);
        return true;
    }

    #focus(field) {
        field.focus();
        field.select();
    }
}

class Validator {
    #input;
    #name;
    #check;
    #message;
    #isValid;
    #checkArgs;
    #checkAdvName;
    constructor(input, check) {
        this.#input = input;
        this.#name = input.getAttribute('name'); 
        this.#message = '';
        this.#isValid = false;
        if (check.includes(':')) {
            let waste;
            [this.#check, this.#checkArgs] = check.split(':', 2);
            [this.#checkAdvName, this.#checkArgs] = this.#checkArgs.split('(', 2);
            [this.#checkArgs, waste] = this.#checkArgs.split(')', 2);
            this.#checkArgs = this.#checkArgs.split(',');
        } else {
            this.#check = check;
        }
    }

    check() {
        switch (this.#check) {
            case 'trim': {
                this.#trimValue();
                this.#isValid = true;
                break;
            }
            case 'required': {
                if (this.#isValidRequired()) {
                    this.#isValid = true;
                } else {
                    this.#message = this.#messages('required');
                }
                break;
            }
            case 'email': {
                if (this.#isValidEmail()) {
                    this.#isValid = true;
                } else {
                    this.#message = this.#messages('email');
                }
                break;
            }
            case 'length': {
                if (this.#checkAdvName == 'between') {
                    this.#isValid = this.#isBetweenExclusive();
                    if (!this.#isValid) {
                        this.#message = this.#messages('length.between');
                    }
                } else if (this.#checkAdvName == 'greaterThan') {
                    this.#isValid = this.#isGreaterThan();
                    if (!this.#isValid) {
                        this.#message = this.#messages('length.greaterThan');
                    }
                } else if (this.#checkAdvName == 'lessThan') {
                    this.#isValid = this.#isLessThan();
                    if (!this.#isValid) {
                        this.#message = this.#messages('length.isLessThan');
                    }
                }
                break;
            }
            default: {
                console.log(`Check ${check} for ${ name } not found`);
            }
        }

        return [this.#isValid, this.#message];
    }

    #messages(message) {
        const messages = { // - Patterns for RegExp testing of values -
            required: `The ${this.#name} field is required`,
            email: `The ${this.#name} must be a valid email address`,
            length: {
                between: `The ${this.#name} length must be between ${this.#checkArgs[0]} and ${this.#checkArgs[1]}`,
                lessThan: `The ${this.#name} must be shorter than ${this.#checkArgs[0]} caracters`,
                greaterThan: `The ${this.#name} length must longer than ${this.#checkArgs[0]} caracters`,
            },
        };
        return messages[message];
    }

    #patterns(name) {
        const pattern = { // - Patterns for RegExp testing of values -
            email: /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/, // - Pattern from mozilla docs, read more here https://github.com/lukaqueres/Astro-Bem/issues/1#issuecomment-1264682760 -
            required: /\S/, // - Required is only tested if it is made from white spaces only -
        };
        return pattern[name];
    }

    // ->
    // - Here are declarations of methods to call for value validation ->
    // ->

    #trimValue() {
        this.#input.value = this.#input.value.trim();
        return true;
    }

    #isValidEmail() {
        let value = this.#input.value.trim();
        return this.#patterns('email').test(value);
    }

    #isValidRequired() {
        let value = this.#input.value.trim();
        return this.#patterns('required').test(value);
    }

    #isBetweenExclusive() {
        let isrule;
        if (this.#input.value > this.#checkArgs[0] && this.#input.value < this.#checkArgs[1]) {
            isrule = true;
        } else {
            isrule = false;
        }
        return isrule;
    }

    #isGreaterThan() {
        let isrule;
        if (this.#input.value > this.#checkArgs[0]) {
            isrule = true;
        } else {
            isrule = false;
        }
        return isrule;
    }

    #isLessThan() {
        let isrule;
        if (this.#input.value < this.#checkArgs[0]) {
            isrule = true;
        } else {
            isrule = false;
        }
        return isrule;
    }
}
