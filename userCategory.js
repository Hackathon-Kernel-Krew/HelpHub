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

function updateFollowingCategory(id, btnId) {
    var request = new XMLHttpRequest();

    request.onreadystatechange = function() {
        if (request.readyState == 4 && request.status == 200) {
            var text = request.responseText;

            if (text == "category removed") {
                document.getElementById("category" + btnId + "-btn").classList.add("button1-modify");
                showToast(text);
            } else if (text == "category added") {
                document.getElementById("category" + btnId + "-btn").classList.remove("button1-modify");
                showToast(text)
            }
        }
    };

    request.open("GET", "updateFollowingCategoryProcess.php?ctgryId=" + id, true);
    request.send();
}