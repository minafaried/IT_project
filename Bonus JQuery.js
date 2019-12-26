
$(function(){  /// To the button sign up and log in and skip
    $("button").mouseenter(function(){
        $(this).css("color", "blue");
    });
});
$(function(){ 
    $("button").mouseleave(function(){
        $(this).css("color", "black");
    });
});

$(function(){  // Just To Show the JQuery Effects...
    $("h1").fadeIn(6000);
    $("button").fadeIn(3000);
})

function gotosignup() {
    $(function () {
        window.location.replace("Sign-up.html");
    }, 0)
}

function gotologin() {
    $(function () {
        window.location.replace("Login.html");
    }, 0)
}

function gotoHome() {

    $(function () {
        window.location.replace("Home/Home.html");
    }, 0)
}