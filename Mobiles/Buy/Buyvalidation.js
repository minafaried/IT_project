function validatebuy() {
    var credit = document.forms["buyform"]["Credit"].value;
    var phone = document.forms["buyform"]["phone"].value;

    var phoneError = document.getElementById("phoneError");
    var CreditError = document.getElementById("CreditError");
    var mytext = new RegExp();
    mytext = /[^0-9]/;
    CreditError.innerText = "";
    phoneError.innerText = "";
    if (mytext.test(credit) || credit.length == 0) {
        CreditError.innerText = "invalid Credit card number";
        return false;
    } else if (mytext.test(phone) || phone.length != 11) {
        // alert("password is empty");
        phoneError.innerText = "invalid phone numper(11 digit)";
        return false;
    } else {
        emailerror.innerText = "";
        passerror.innerText = "";
        return true;
    }
}