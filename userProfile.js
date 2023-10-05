function shiftwPasswordHide(id) {
    var password = document.getElementById("password" + id);

    if (password.type == "password") {
        document.getElementById("password-hide-btn" + id).innerHTML = '<i class="bx bx-show eye-icon"></i>';
        password.type = "text";
    } else if (password.type == "text") {
        document.getElementById("password-hide-btn" + id).innerHTML = '<i class="bx bx-hide eye-icon"></i>';
        password.type = "password";
    }
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

function changeProfileImage() {
    var imageUploader = document.getElementById("profile-image-uploader");

    imageUploader.onchange = function() {
        var fileCount = imageUploader.files.length;
        if (fileCount <= 1) {
            for (var x = 0; x < fileCount; x++) {
                var file = this.files[x];
                var url = window.URL.createObjectURL(file);

                document.getElementById("main-profile-image").src = url;
            }
        } else {
            alert("Please select only 1 image");
        }
    };
}

function userProfileUpdate() {
    var firstName = document.getElementById("first_name");
    var lastName = document.getElementById("last_name");
    var username = document.getElementById("username");
    var mobile = document.getElementById("mobile");
    var password = document.getElementById("password1");
    var bio = document.getElementById("bio");
    var image = document.getElementById("profile-image-uploader");

    var form = new FormData();

    form.append("firstName", firstName.value);
    form.append("lastName", lastName.value);
    form.append("username", username.value);
    form.append("mobile", mobile.value);
    form.append("password", password.value);
    form.append("bio", bio.value);

    var imageCount = image.files.length;

    for (var x = 0; x < imageCount; x++) {
        form.append("image", image.files[x]);
    }

    var request = new XMLHttpRequest();

    request.onreadystatechange = function() {
        if (request.readyState == 4) {
            var text = request.responseText;

            if (text == "success") {
                window.location.reload();
            } else {
                showToast(text);
            }
        }
    };

    request.open("POST", "userProfileUpdateProcess.php", true);
    request.send(form);
}