function validate(form) {
    var result = true;

    if((form.firstName.value == "") || (form.firstName.value == null)) {
        document.getElementById("firstNameError").innerHTML = "Wrong input!!";
        form.firstName.style.background = "red";
        result = false;
    } else {
        document.getElementById("firstNameError").innerHTML = "";
        form.firstName.style.background = "white";
    }

    if((form.lastName.value == "") || (form.lastName.value == null)) {
        document.getElementById("lastNameError").innerHTML = "Wrong input!!";
        form.lastName.style.background = "red";
        result = false;
    } else {
        document.getElementById("lastNameError").innerHTML = "";
        form.lastName.style.background = "white";
    }

    if((form.username.value == "") || (form.username.value == null)) {
        document.getElementById("usernameError").innerHTML = "Wrong input!!";
        form.username.style.background = "red";
        result = false;
    } else {
        document.getElementById("usernameError").innerHTML = "";
        form.username.style.background = "white";
    }

    if((form.password.value == "") || (form.password.value == null)) {
        document.getElementById("passwordError").innerHTML = "Wrong input!!";
        form.password.style.background = "red";
        result = false;
    } else {
        document.getElementById("passwordError").innerHTML = "";
        form.password.style.background = "white";
    }

    if((form.email.value == "") || (form.email.value == null)) {
        document.getElementById("emailError").innerHTML = "Wrong input!!";
        form.email.style.background = "red";
        result = false;
    } else {
        document.getElementById("emailError").innerHTML = "";
        form.email.style.background = "white";
    }



    return result;
}