function validatesignup() {
    var pass = document.forms["sign-up"]["password"].value;
    var email = document.forms["sign-up"]["email"].value;
    var name = document.forms["sign-up"]["username"].value;
    var phone = document.forms["sign-up"]["phone"].value;

    var passerror = document.getElementById("passerror");
    var emailerror = document.getElementById("emailerror");
    var nameerror = document.getElementById("usernameerror");
    var phoneerror = document.getElementById("phoneerror");

    var emailreg = new RegExp();
    emailreg = /[a-z0-9_\.\-]+@+[a-z0-9_\.\-]+\.+(com|net|org)/i; //mony_faried68@yahoo.com 
    var phonereg = new RegExp();
    phonereg = /[^0-9]/;
    emailerror.innerText = "";
    passerror.innerText = "";
    nameerror.innerHTML = "";
    phoneerror.innerHTML = "";
    if (name == "") {
        nameerror.innerText = "name must not be embty";
        return false;
    } else if (!emailreg.test(email)) {
        emailerror.innerText = "invalid email";
        return false;
    } else if (pass.length < 10) {
        // alert("password is empty");
        passerror.innerText = "the password must be more than 10 charcter";
        return false;
    } else if (phonereg.test(phone) || phone.length != 11) {
        phoneerror.innerText = "invalid phone numper(11 digit)";
        return false;
    } else {
        emailerror.innerText = "";
        passerror.innerText = "";
        nameerror.innerHTML = "";
        phoneerror.innerHTML = "";
        return true;
    }
}
