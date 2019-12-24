function validatelogin() {
    var pass = document.forms["loginform"]["password"].value;
    var email = document.forms["loginform"]["email"].value;

    var passerror = document.getElementById("passerror");
    var emailerror = document.getElementById("emailerror");
    var mytext = new RegExp();
    mytext = /[a-z0-9_\.\-]+@+[a-z0-9_\.\-]+\.+(com|net|org)/i; //mony_faried68@yahoo.com 
    emailerror.innerText = "";
    passerror.innerText = "";
    if (!mytext.test(email)) {
        emailerror.innerText = "invalid email";
        return false;
    } else if (pass == "") {
        // alert("password is empty");
        passerror.innerText = "the password is empty";
        return false;
    } else {
        emailerror.innerText = "";
        passerror.innerText = "";
        return true;
    }
}