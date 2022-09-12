
function scearch() {

    let fname = document.forms["editForm"]["fname"].value;
    let lname = document.forms["editForm"]["lname"].value;
    let Phone = document.forms["editForm"]["phone"].value;
    let pattern1 = /^[a-zA-Z\s]+$/;
    let number = /^[0-9\s]+$/;


    if (fname == "") {
        alert("Please enter your first name properly.");
        return false;

    }
    else if (!pattern1.test(fname)) {
        alert("Please enter valid first name.");
        return false;
    }

    else if (lname == "") {
        alert("Please last last name properly.");
        return false;
    }
    else if (!pattern1.test(lname)) {
        alert("Please enter valid last name.");
        return false;
    }
    else if (Phone.toString().length !== 10) {
        alert("Please enter valid phone number.");
        return false;
    }
    else if (!number.test(Phone)) {
        alert("charactor in phone property.");
        return false;
    }
   
    else {
        return true;
    }


}







