// js for validation



$("#register-button").click(function (e) {

    e.preventDefault();
    var validated = true;

    var firstName = $("#first-name-input").val()
    var lastName = $("#last-name-input").val()
    var password = $("#password-input").val()
    var password2 = $("#password2-input").val()
    var email = $("#email-input").val()


    if (firstName == "" || firstName.length <= 1) {
        $("#first-name-check").val("Please enter valid name")
        $("#first-name-input").css("border", "solid red")
        validated = false
    }
    else {
        $("#first-name-check").val(" ")
        $("#first-name").css("border", "solid green")
    }

    if (lastName == "" || lastName.length <= 1) {
        $("#last-name-check").val("Please enter valid last name")
        $("#last-name-input").css("border", "solid red")
        validated = false
    }
    else {
        $("#last-name-check").val(" ")
        $("#last-name-input").css("border", "solid green")
    }

    if (password == "" || password.length <= 3) {
        $("#password-check").val("Password should contain 4 symbols")
        $("#password-input").css("border", "solid red")
        validated = false
    }
    else {
        $("#password-check").val(" ")
        $("#password-input").css("border", "solid green")

    }

    if (password2 == "" || password != password2) {
        $("#password-confirm-check").val("Passwords do not match")
        $("#password2-input").css("border", "solid red")
        validated = false
    }
    else {
        $("#password-confirm-check").val(" ")
        $("#password2-input").css("border", "solid green")
    }

    if (email == "" || email.length <= 1) {
        $("#email-check").val("Please valid email")
        $("#email-input").css("border", "solid red")
        validated = false
    }
    else {
        $("#email-check").val(" ")
        $("#email-input").css("border", "solid green")
    }

    if (validated) {
        $("#registration-form").submit()
    }
});


// js for chat
$("#btn-chat").click(chat);
$("#btn-input").keydown(function (e) {
    if (e.keyCode == 13) {
        chat();
    }
})

function chat() {
    var newInput = $("#btn-input").val();
    var newName = $("#btn-input-name").val();
    var d = new Date();
    var datestring = d.getDate() + "-" + (d.getMonth() + 1) + "-" + d.getFullYear() + " " +
        d.getHours() + ":" + d.getMinutes() + ":" +
        d.getSeconds();
    if (newInput != "" && newName != "") {
        var newMsg = $("<li>").html(newInput);
        var span = $("<span>").html(datestring + " user " + "<b>"
            + newName + "</b>" + " wrote:");
        $(".msg-receive ul:last-child").append(span);
        $(".msg-receive ul").append(newMsg);
        $("#btn-input").val("");
        setTimeout(catTalk, 1000);
    }
}

function catTalk() {
    var d = new Date();
    var datestring = d.getDate() + "-" + (d.getMonth() + 1) + "-" + d.getFullYear() + " " +
        d.getHours() + ":" + d.getMinutes() + ":" +
        d.getSeconds();
    var span = $("<span>").html(datestring + " user <b>kitty</b>" + " wrote:");
    var rand = Math.floor((Math.random() * 10) + 1);
    var newInput = "";
    var meow = " meow";
    for (var i = 0; i <= rand; i++) {
        newInput += meow;
    }
    var newMsg = $("<li>").html(newInput).css("background", "#b3e0ff");
    $(".msg-receive ul:last-child").append(span);
    $(".msg-receive ul").append(newMsg);
}
