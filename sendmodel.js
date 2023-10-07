var bm;

function showmodel(){
    var m = document.getElementById("exampleModal");
    bm = new bootstrap.Modal(m);
    bm.show();
}

function sendnow() {
    var name = document.getElementById("full_name");
    var email = document.getElementById("email");
    var massage = document.getElementById("massage");

    //    alert (email.value);
    //    alert (name.value);
    //    alert (masage.value);

    var form = new FormData();
    form.append("name", name.value);
    form.append("email", email.value);
    form.append("massage", massage.value);

    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {
            var t = request.responseText;
            // alert(t);
            if (t == "success") {
                bm.hide();
            } else if (t == "Please enter your Full name") {
                document.getElementById("s_full_name").style = "color: red;";
                document.getElementById("s_full_name").innerHTML = t;
                // alert("ok");
            } else if (t == "Please enter your email") {
                document.getElementById("m_email").style = "color: red;";
                document.getElementById("m_email").innerHTML = t;
            } else if (t == "Email address must <50 characters") {
                document.getElementById("m_email").style = "color: red;";
                document.getElementById("m_email").innerHTML = t;
            } else if (t == "Invalied email") {
                document.getElementById("m_email").style = "color: red;";
                document.getElementById("m_email").innerHTML = t;
            } else if (t == "PLease enter you massage !") {
                
                document.getElementById("s_massage").style = "color: red;";
                document.getElementById("s_massage").innerHTML = t;
            }else if (t == "There is no Emil like this") {
                document.getElementById("m_email").style = "color: red;";
                document.getElementById("m_email").innerHTML = t;
            }
            
        }
    }

    request.open("POST", "sendMassageProcess.php", true);
    request.send(form);
}

function type() {
    if (document.getElementById("s_full_name").textContent == "Please enter your Full name") {
        document.getElementById("s_full_name").style = "color: #151515;";
        document.getElementById("s_full_name").innerHTML = "Verification Code";
    } else if (document.getElementById("m_email").textContent == "Please enter your email") {
        document.getElementById("m_email").style = "color: #151515;";
        document.getElementById("m_email").innerHTML = "Verification Code";
    } else if (document.getElementById("m_email").textContent == "Email address must <50 characters") {
        document.getElementById("m_email").style = "color: #151515;";
        document.getElementById("m_email").innerHTML = "Email";
    } else if (document.getElementById("m_email").textContent == "Invalied email") {
        document.getElementById("m_email").style = "color: #151515;";
        document.getElementById("m_email").innerHTML = "Email";
    } else if (document.getElementById("s_massage").textContent == "PLease enter you massage !") {
        document.getElementById("s_massage").style = "color: #151515;";
        document.getElementById("s_massage").innerHTML = "Email";
    }else if (document.getElementById("m_email").textContent == "There is no Emil like this") {
        document.getElementById("m_email").style = "color: #151515;";
        document.getElementById("m_email").innerHTML = "Email";
    }
}