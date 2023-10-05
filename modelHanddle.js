function showModal(id) {
    var modal = document.getElementById(id);
    newModal1 = new bootstrap.Modal(modal);
    newModal1.show();
}

function showToast(msg) {
    var toast1 = document.getElementById("liveToast-sm-md");
    var toast2 = document.getElementById("liveToast-lg");
    toast1 = new bootstrap.Toast(toast1);
    toast2 = new bootstrap.Toast(toast2);

    document.getElementById("toast-msg-sm-md").innerHTML = msg;
    document.getElementById("toast-msg-lg").innerHTML = msg;

    toast1.show();
    toast2.show();
}

function loadChats(email) {
    var form = new FormData();
    form.append("email", email);

    var request = new XMLHttpRequest();

    request.onreadystatechange = function() {
        if (request.readyState == 4 && request.status == 200) {
            var text = request.responseText;
            document.getElementById("chat-loader").innerHTML = text
            showModal("exampleModal1");
        }
    };

    request.open("POST", "loadChatsProcess.php", true);
    request.send(form);
}

function loadPrivateChats(toEmail) {
    var form = new FormData();
    form.append("toEmail", toEmail);

    var request = new XMLHttpRequest();

    request.onreadystatechange = function() {
        if (request.readyState == 4 && request.status == 200) {
            var text = request.responseText;
            document.getElementById("private-chat-loader").innerHTML = text;
            showModal("exampleModal2");
        }
    };

    request.open("POST", "loadPrivateChatsProcess.php", true);
    request.send(form);
}

function savePrivateMessage() {
    var message = document.getElementById("sender-message");
    var receiver = document.getElementById("receiver-email");

    var form = new FormData();
    form.append("message", message.value);
    form.append("receiver", receiver.value);

    var request = new XMLHttpRequest();

    request.onreadystatechange = function() {
        if (request.readyState == 4 && request.status == 200) {
            var text = request.responseText;
            if (text == "success") {
                message.value = "";
                loadUpdatedPrivateChats(receiver.value);
            }
        }
    };

    request.open("POST", "savePrivateMessageProcess.php", true);
    request.send(form);
}

function loadUpdatedPrivateChats(toEmail) {
    var form = new FormData();
    form.append("toEmail", toEmail);

    var request = new XMLHttpRequest();

    request.onreadystatechange = function() {
        if (request.readyState == 4 && request.status == 200) {
            var text = request.responseText;
            document.getElementById("private-chat-loader").innerHTML = text;
        }
    };

    request.open("POST", "loadPrivateChatsProcess.php", true);
    request.send(form);
}