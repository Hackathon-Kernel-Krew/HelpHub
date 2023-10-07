function headerNotificationchecker() {
    var request = new XMLHttpRequest();

    request.onreadystatechange = function() {
        if (request.readyState == 4 && request.status == 200) {
            var text = request.responseText;
            if (parseInt(text) > 0) {
                var notifyText = document.getElementById("chat-count-loader");
                notifyText.classList.toggle("d-none");

                var notifyText1 = document.getElementById("chat-count-loader1");
                notifyText1.classList.toggle("d-none");

                if (parseInt(text) < 10) {
                    notifyText.innerHTML = "0" + text;
                    notifyText1.innerHTML = "0" + text;
                } else {
                    notifyText.innerHTML = text;
                    notifyText1.innerHTML = text;
                }
            }
        }
    };

    request.open("GET", "headerNotificationcheckProcess.php", true);
    request.send();
}

function headerNotificationcheckerStart() {
    setInterval(headerNotificationchecker, 3000);
}