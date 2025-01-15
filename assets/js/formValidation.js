// JavaScript Document

// Helper function to validate general text fields like first and last name
function checkTextField(minLength, inputGroup, inputStatus, inputEl) {
    var elStatus = document.getElementById(inputStatus);
    var elGroup = document.getElementById(inputGroup);
    var elInput = document.getElementById(inputEl);
    var regex = /^[A-Za-z'-]{2,}$/; // Allows alphabet characters, hyphens, and apostrophes

    if (!regex.test(elInput.value) || elInput.value.length < minLength) {
        elStatus.innerHTML = inputEl.charAt(0).toUpperCase() + inputEl.slice(1) + ' must be at least ' + minLength + ' characters, letters only';
        elGroup.classList.add('has-error');
        elGroup.classList.remove('has-success');
    } else {
        elStatus.innerHTML = '';
        elGroup.classList.remove('has-error');
        elGroup.classList.add('has-success');
    }
}

// Email validation function
function validateEmail() {
    var elEmail = document.getElementById('email');
    var elStatus = document.getElementById('emailStatus');
    var elGroup = document.getElementById('emailGroup');
    var validRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if (validRegex.test(elEmail.value)) {
        elStatus.innerHTML = '';
        elGroup.classList.remove('has-error');
        elGroup.classList.add('has-success');
    } else {
        elStatus.innerHTML = 'Invalid email format';
        elGroup.classList.add('has-error');
        elGroup.classList.remove('has-success');
    }
}

// Phone validation function (exactly 10 digits, no special characters)
function validatePhone() {
    var elPhone = document.getElementById('phone');
    var elStatus = document.getElementById('phoneStatus');
    var elGroup = document.getElementById('phoneGroup');
    var regex = /^\d{10}$/; // Only 10 digits allowed

    if (regex.test(elPhone.value)) {
        elStatus.innerHTML = '';
        elGroup.classList.remove('has-error');
        elGroup.classList.add('has-success');
    } else {
        elStatus.innerHTML = 'Phone number must be exactly 10 digits';
        elGroup.classList.add('has-error');
        elGroup.classList.remove('has-success');
    }
}

// Username and password validation function
function validateUserPass(minLength, inputGroup, inputStatus, inputEl) {
    var elStatus = document.getElementById(inputStatus);
    var elGroup = document.getElementById(inputGroup);
    var elInput = document.getElementById(inputEl);

    if (elInput.value.length >= minLength) {
        elStatus.innerHTML = '';
        elGroup.classList.remove('has-error');
        elGroup.classList.add('has-success');
    } else {
        elStatus.innerHTML = inputEl.charAt(0).toUpperCase() + inputEl.slice(1) + ' must be at least ' + minLength + ' characters';
        elGroup.classList.add('has-error');
        elGroup.classList.remove('has-success');
    }
}

// Comments validation function (non-empty)
function validateComments() {
    var elComments = document.getElementById('comments');
    var elStatus = document.getElementById('commentsStatus');
    var elGroup = document.getElementById('commentsGroup');

    if (elComments.value.trim() !== '') {
        elStatus.innerHTML = '';
        elGroup.classList.remove('has-error');
        elGroup.classList.add('has-success');
    } else {
        elStatus.innerHTML = 'Comments cannot be empty';
        elGroup.classList.add('has-error');
        elGroup.classList.remove('has-success');
    }
}

// Event Listeners
document.getElementById('firstName').addEventListener('blur', function() {
    checkTextField(2, 'firstNameGroup', 'firstNameStatus', 'firstName');
}, false);

document.getElementById('lastName').addEventListener('blur', function() {
    checkTextField(2, 'lastNameGroup', 'lastNameStatus', 'lastName');
}, false);

document.getElementById('email').addEventListener('blur', validateEmail, false);

document.getElementById('phone').addEventListener('blur', validatePhone, false);

document.getElementById('username').addEventListener('blur', function() {
    validateUserPass(6, 'usernameGroup', 'usernameStatus', 'username');
}, false);

document.getElementById('password').addEventListener('blur', function() {
    validateUserPass(6, 'passwordGroup', 'passwordStatus', 'password');
}, false);

document.getElementById('comments').addEventListener('blur', validateComments, false);