function advanceSearch(x) {
    // alert("ok");
    var txt = document.getElementById("basic_search_txt");
    var select = document.getElementById("basic_search_select");

    var f = new FormData();
    f.append("t", txt.value);
    f.append("s", select.value);
    f.append("page", x);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            // alert(t);
            document.getElementById("advanceSearchResult").innerHTML = t;
        }
    }

    r.open("POST", "advanceSearchProcess.php", true);
    r.send(f);

}

function showmodelAdvancedSearch(id) {
    var modal = document.getElementById(id);
    newModal1 = new bootstrap.Modal(modal);
    newModal1.show();
}