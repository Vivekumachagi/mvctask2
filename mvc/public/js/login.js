function checkLogin() {
    let email = document.forms["logInForm"]["email"].value;
    let password = document.forms["logInForm"]["password"].value;

    if (email == "") {
        alert("Please enter email properly.");
        return false;

    }
    if (password == "") {
        alert("Please enter password properly.");
        return false;
    }
    else {
        return true;
    }


}