/*
* onContactSubmit validates contact form inputs
* Returns true if all input elements are valid
*/
function onContactSubmit() {
    if (!validateName()) {
        displayFormErrors("name");
        return false
    } else if (!validateEmail()) {
        displayFormErrors("email");
        return false
    } else if (!validateTelephone()) {
        displayFormErrors("telephone");
        return false
    } else if (!validateMessage()) {
        displayFormErrors("message");
        return false
    }
    return true
}


function validateName() {
    var e = document.getElementById("name").value;
    if (e.length < 2 || e.length > 30) {
        return false
    } else {
        return true
    }
}

function validateMessage() {
    var e = document.getElementById("message").value;
    if (e.length < 10) {
        return false
    } else {
        return true
    }
}

function validateTelephone() {
    var e = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
    var t = document.getElementById("telephone").value;
    if (t.match(e)) {
        return true
    } else {
        return false
    }
}

function validateEmail() {
    var e = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/;
    var t = document.getElementById("email").value;
    if (t.match(e)) {
        return true
    } else {
        return false
    }
}


function isNumber(e) {
    return !isNaN(parseFloat(e)) && isFinite(e)
}

function displayFormErrors(e) {
    var t = document.getElementById("error-message");
    switch (e) {
        case "name":
            t.innerHTML = "Name must be between 2 - 30 characters.";
            break;
        case "email":
            t.innerHTML = "Please provide a valid e-mail address.";
            break;
        case "telephone":
            t.innerHTML = "Please provide a valid telephone number.";
            break;
        case "message":
            t.innerHTML = "Your message is a little short...<br>Please provide more info!";
            break;
        default:
            t.innerHTML = "";
            break
    }
}