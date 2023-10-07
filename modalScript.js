function changeProductImage() {
    alert("ok");

    var image = document.getElementById("imageuploader");

    image.onchange = function () {

        var file_count = image.files.length;

        if (file_count <= 1) {

            alert(file_count);
            for (var x = 0; x < file_count; x++) {
                var file = this.files[x];
                var url = window.URL.createObjectURL(file);

                document.getElementById("i" + x).src = url;
            }

        } else {
            alert("please select an image");
        }

    }

}

function addProduct() {
    // alert("ok");

    var category = document.getElementById("category");
    // alert (category);
    var tag = document.getElementById("tag");
    var image = document.getElementById("imageuploader");
    var txt = document.getElementById("text");

    var f = new FormData();
    f.append("ca", category.value);
    f.append("t", tag.value);
    f.append("txt",txt.value);
    f.append("image", image[0]);


    var file_count = image.files.length;

    for (var x = 0; x < file_count; x++) {
        f.append("image" + x, image.files[x]);
    }

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
            alert(t);
            if (t == "Product image saved successfully") {
                window.location.reload();
            } else {
                alert(t);
            }
        }
    }

    r.open("POST", "addProductProcess.php", true);
    r.send(f);

}

var bm;

function showmodel(){
    var m = document.getElementById("exampleModal");
    bm = new bootstrap.Modal(m);
    bm.show();
}
