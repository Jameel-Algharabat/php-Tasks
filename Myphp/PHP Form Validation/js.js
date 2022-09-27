
/* start of register script */
function registerSubmit() {
    // const form = document.getElementById("sign-up");
    const emailField = document.getElementById("email");
    const phoneField = document.getElementById("phone");
    const passField = document.getElementById("pass");
    const nameField = document.getElementById("name");



    if (nameField.value == null) {
        document.getElementById("name-error").textContent =
            "The name is required.";
            console.log('name field is null')
        return false;
    }
    if (emailField.value == null || emailField.value == "") {
        document.getElementById("email-error").textContent =
            "The email field is required.";
            console.log('email is null')
    } else if (
        !emailField.value.match(
            /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
        )
        
    ) {
        document.getElementById("email-error").textContent =
            "The email must be a valid email address.";
            console.log('name field is not gmail')
        return false;
    } else {
        document.getElementById("email-error").textContent = "";
        
    }
    if (phoneField.value == "" || phoneField.value == null) {
        document.getElementById("tel-error").textContent =
            "The Mobile field is required.";
            console.log('phone field is empty')
        return false;
    } else if (phoneField.value.length < 10) {
        document.getElementById("tel-error").textContent =
            "The mobile must be 10 characters.";
            console.log('phone field is < 10')
        return false;
    } else {
        document.getElementById("tel-error").textContent = "";
    }

    if (passField.value == "" || passField.value == null) {
        document.getElementById("pass-error").textContent =
            "The password field is required.";
            console.log('The password field is required.')
        return false;
    } else if (passField.value.length < 6) {
        document.getElementById("pass-error").textContent =
            "The password must be at least 6 characters.";
            console.log('The password must be at least 6 characters.')
        return false;
    } else if (passField.value.length > 18) {
        document.getElementById("pass-error").textContent =
            "The password may not be greater than 18 characters.";
            console.log('The password may not be greater than 18 characters.')
        return false;
    } else {
        document.getElementById("pass-error").textContent = "";
    }
    console.log('formdata start')
    // let formData = JSON.parse(localStorage.getItem("formData")) || [];
    // formData.push({
    //     name: nameField.value,
    //     email: emailField.value,
    //     password: passField.value,
    //     phone: phoneField.value,
    // });
    // localStorage.setItem("formData", JSON.stringify(formData));
    // console.log('formdata end')
 

}
/* end of register page*/

/* start of login page */
function loginfunction() {
    const signInForm = document.getElementById("log-in");
    const loginemailField = document.getElementById("login-email");

    const loginpassField = document.getElementById("login-pass");

    if (loginemailField.value == null || loginemailField.value == "") {
        document.getElementById("email-error").textContent =
            "The email field is required.";
    } else if (
        !loginemailField.value.match(
            /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
        )
    ) {
        document.getElementById("email-error").textContent =
            "The email must be a valid email address.";
        return false;
    } else {
        document.getElementById("email-error").textContent = "";
    }

    if (loginpassField.value == "" || loginpassField.value == null) {
        document.getElementById("pass-error").textContent =
            "The password field is required.";
        return false;
    } else if (loginpassField.value.length < 6) {
        document.getElementById("pass-error").textContent =
            "The password must be at least 6 characters.";
        return false;
    } else if (loginpassField.value.length > 18) {
        document.getElementById("pass-error").textContent =
            "The password may not be greater than 18 characters.";
        return false;
    } else {
        document.getElementById("pass-error").textContent = "";
    }
    // let found = false;
    // let userIndex = null;
    // let formData = JSON.parse(localStorage.getItem("formData")) || [];
    // formData.forEach((element, arrayIndex) => {
    //     if (element.email == loginemailField.value) {
    //         found = true;
    //         userIndex = arrayIndex;
    //     }
    // });

    // if (found && formData[userIndex].password == loginpassField.value) {
    //     document.getElementById("message").innerHTML =
    //         "logged in successfuly ";

    //     sessionStorage.email = formData[userIndex].email;
    //     sessionStorage.pass = formData[userIndex].password;
    //     sessionStorage.name = formData[userIndex].name;

    //     window.open('evaluation.html', '_blank');

       

    //     return false;
    // } else if (found && formData[userIndex].password !== loginpassField.value) {
    //     document.getElementById("message").innerHTML = "Wrong password";
    //     return false;
    // } else if (!found) {
    //     document.getElementById("message").innerHTML = "account not found";
    //     return false;
    // } else {
    //     document.getElementById("message").innerHTML = "";
    // }
    // window.open('./pages/log in.html', '_blank');
    // return false;
    
}


/* end of login page*/