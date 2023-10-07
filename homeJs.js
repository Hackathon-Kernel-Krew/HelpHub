function like(id) {

    var f = new FormData();
    f.append("pid", id);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "liked") {
                window.location.reload();
            } else if (t == "disliked") {
                window.location.reload();
            } else {
                alert(t);
            }
        }
    }

    r.open("POST", "homeVoteProcess.php", true);
    r.send(f);


}

function sendComment(id) {

    var comment = document.getElementById("commentText");

    var f = new FormData();
    f.append("comment", comment.value);
    f.append("pid", id);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "inserted") {
                window.location.reload();
            } else {
                showToast(t);
            }
        }
    }
    r.open("POST", "sendCommentProcess.php", true);
    r.send(f);

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

function loadUserProfile() {
    window.location = "userProfile.php";
}

function signout() {

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "success") {
                window.location = "index.php";
            }
        }
    };

    r.open("GET", "signoutProcess.php", true);
    r.send();

}