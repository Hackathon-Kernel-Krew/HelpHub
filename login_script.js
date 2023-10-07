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

function switchFrame() {
    document.getElementById("signin-section").classList.toggle("d-none");
    document.getElementById("signup-section").classList.toggle("d-none");
}

function switchFrame1() {
    document.getElementById("signin-section").classList.toggle("d-none");
    document.getElementById("forgot-section").classList.toggle("d-none");
}

function userSignUp() {
    var mobile = document.getElementById("mobile");
    var fname = document.getElementById("fname");
    var lname = document.getElementById("lname");
    var email = document.getElementById("email1");
    var password = document.getElementById("password2");
    var re_password = document.getElementById("password3");
    var gender = document.getElementById("gender");

    // alert(mobile);
    // alert(fname);
    // alert(lname);
    // alert(email.value);
    // alert(password);
    // alert(re_password);

    var f = new FormData();
    f.append("mobile", mobile.value);
    f.append("fname", fname.value);
    f.append("lname", lname.value);
    f.append("email", email.value);
    f.append("username", username.value);
    f.append("password", password.value);
    f.append("re_password", re_password.value);
    f.append("gender", gender.value);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            // alert(t);
            if (t == "success") {
                window.location.reload();
            } else if (t == "Please Enter Your mobile number") {
                document.getElementById("s_mobile").style = "color: red;";
                document.getElementById("s_mobile").innerHTML = t;
            } else if (t == "Invalid Mobile Number!") {
                document.getElementById("s_mobile").style = "color: red;";
                document.getElementById("s_mobile").innerHTML = t;
            } else if (t == "Please Enter Your Firs Name") {
                document.getElementById("s_fname").style = "color: red;";
                document.getElementById("s_fname").innerHTML = t;
            } else if (t == "First Name must have LESS THAN 50 characters!") {
                document.getElementById("s_fname").style = "color: red;";
                document.getElementById("s_fname").innerHTML = t;
            } else if (t == "Please Enter Your lname Name") {
                document.getElementById("s_lname").style = "color: red;";
                document.getElementById("s_lname").innerHTML = t;
            } else if (t == "Last Name must have LESS THAN 50 characters!") {
                document.getElementById("s_lname").style = "color: red;";
                document.getElementById("s_lname").innerHTML = t;
            } else if (t == "Please enter your Email address!") {
                document.getElementById("s_email").style = "color: red;";
                document.getElementById("s_email").innerHTML = t;
            } else if (t == "Email must have LESS THAN 100 characters!") {
                document.getElementById("s_email").style = "color: red;";
                document.getElementById("s_email").innerHTML = t;
            } else if (t == "Invalid Email address!") {
                document.getElementById("s_email").style = "color: red;";
                document.getElementById("s_email").innerHTML = t;
            } else if (t == "Please Enter Your Username") {
                document.getElementById("s_username").style = "color: red;";
                document.getElementById("s_username").innerHTML = t;
            } else if (t == "Please enter your Password!") {
                document.getElementById("s_password").style = "color: red;";
                document.getElementById("s_password").innerHTML = t;
            } else if (t == "Password length must be between 5 and 20!") {
                document.getElementById("s_password").style = "color: red;";
                document.getElementById("s_password").innerHTML = t;
            } else if (t == "re Please enter your Password!") {
                document.getElementById("s_repassword").style = "color: red;";
                document.getElementById("s_repassword").innerHTML = t;
            } else if (t == "re Password length must be between 5 and 20!") {
                document.getElementById("s_repassword").style = "color: red;";
                document.getElementById("s_repassword").innerHTML = t;
            } else if (t == "Passwords not matching") {
                document.getElementById("s_repassword").style = "color: red;";
                document.getElementById("s_repassword").innerHTML = t;
            } else if (t == "Plece select Gender") {
                document.getElementById("spangender").style = "color: red;";
                document.getElementById("spangender").innerHTML = t;
            }
        }

    };

    r.open("POST", "sigUpProcess.php", true);
    r.send(f);

}

function type() {
    if (document.getElementById("cu_email").textContent == "Please enter your email") {
        document.getElementById("cu_email").style = "color: #151515;";
        document.getElementById("cu_email").innerHTML = "Email";
    } else if (document.getElementById("cu_email").textContent == "Email address must <50 characters") {
        document.getElementById("cu_email").style = "color: #151515;";
        document.getElementById("cu_email").innerHTML = "Email";
    } else if (document.getElementById("cu_email").textContent == "Email not matching") {
        document.getElementById("cu_email").style = "color: #151515;";
        document.getElementById("cu_email").innerHTML = "Email";
    } else if (document.getElementById("cu_email").textContent == "Something went wrong") {
        document.getElementById("cu_email").style = "color: #151515;";
        document.getElementById("cu_email").innerHTML = "Email";

    } else if (document.getElementById("cu_email").textContent == "Invalied email") {
        document.getElementById("cu_email").style = "color: #151515;";
        document.getElementById("cu_email").innerHTML = "Email";
    } else if (document.getElementById("cu_password").textContent == "PLease enter you password!") {
        document.getElementById("cu_password").style = "color: #151515;";
        document.getElementById("cu_password").innerHTML = "password";
    } else if (document.getElementById("cu_password").textContent == "Password must have 8-16 characters") {
        document.getElementById("cu_password").style = "color: #151515;";
        document.getElementById("cu_password").innerHTML = "password";
    } else if ((document.getElementById("cu_password").textContent || document.getElementById("cu_email").textContent) == "Invlied username or password") {
        document.getElementById("cu_password").style = "color: #151515;";
        document.getElementById("cu_password").innerHTML = "password";
        document.getElementById("cu_email").style = "color: #151515;";
        document.getElementById("cu_email").innerHTML = "Email";
    } else if (document.getElementById("s_mobile").textContent == "Please Enter Your mobile number") {
        document.getElementById("s_mobile").style = "color: #151515;";
        document.getElementById("s_mobile").innerHTML = "Mobile";
    } else if (document.getElementById("s_mobile").textContent == "Invalid Mobile Number!") {
        document.getElementById("s_mobile").style = "color: #151515;";
        document.getElementById("s_mobile").innerHTML = "Mobile";
    } else if (document.getElementById("s_fname").textContent == "Please Enter Your Firs Name") {
        document.getElementById("s_fname").style = "color: #151515;";
        document.getElementById("s_fname").innerHTML = "First Name";
    } else if (document.getElementById("s_fname").textContent == "First Name must have LESS THAN 50 characters!") {
        document.getElementById("s_fname").style = "color: #151515;";
        document.getElementById("s_fname").innerHTML = "First Name";
    } else if (document.getElementById("s_lname").textContent == "Please Enter Your lname Name") {
        document.getElementById("s_lname").style = "color: #151515;";
        document.getElementById("s_lname").innerHTML = "Last Name";
    } else if (document.getElementById("s_lname").textContent == "Last Name must have LESS THAN 50 characters!") {
        document.getElementById("s_lname").style = "color: #151515;";
        document.getElementById("s_lname").innerHTML = "Last Name";
    } else if (document.getElementById("s_email").textContent == "Please enter your Email address!") {
        document.getElementById("s_email").style = "color: #151515;";
        document.getElementById("s_email").innerHTML = "Email";
    } else if (document.getElementById("s_email").textContent == "Email must have LESS THAN 100 characters!") {
        document.getElementById("s_email").style = "color: #151515;";
        document.getElementById("s_email").innerHTML = "Email";
    } else if (document.getElementById("s_email").textContent == "Invalid Email address!") {
        document.getElementById("s_email").style = "color: #151515;";
        document.getElementById("s_email").innerHTML = "Email";
    } else if (document.getElementById("s_username").textContent == "Please Enter Your Username") { //
        document.getElementById("s_username").style = "color: #151515;";
        document.getElementById("s_username").innerHTML = "Email";
    } else if (document.getElementById("s_password").textContent == "Please enter your Password!") {
        document.getElementById("s_password").style = "color: #151515;";
        document.getElementById("s_password").innerHTML = "Password";
    } else if (document.getElementById("s_password").textContent == "Password length must be between 5 and 20!") {
        document.getElementById("s_password").style = "color: #151515;";
        document.getElementById("s_password").innerHTML = "Password";
    } else if (document.getElementById("s_repassword").textContent == "re Please enter your Password!") {
        document.getElementById("s_repassword").style = "color: #151515;";
        document.getElementById("s_repassword").innerHTML = "Re Password";
    } else if (document.getElementById("s_repassword").textContent == "re Password length must be between 5 and 20!") {
        document.getElementById("s_repassword").style = "color: #151515;";
        document.getElementById("s_repassword").innerHTML = "Re Password";
    } else if (document.getElementById("s_repassword").textContent == "Passwords not matching") {
        document.getElementById("s_repassword").style = "color: #151515;";
        document.getElementById("s_repassword").innerHTML = "Re Password";
    } else if (document.getElementById("erress").textContent == "User with the same Email or Mobile already exists.") {
        document.getElementById("s_mobile").style = "color: #151515;";
        document.getElementById("s_mobile").innerHTML = "Mobile";
    } else if (document.getElementById("spangender").textContent == "Plece select Gender") {
        document.getElementById("spangender").style = "color: #151515;";
        document.getElementById("spangender").innerHTML = "Select Gender";
    }
}

function type1() {
    if (document.getElementById("s_Verification").textContent == "PLease enter verification code") {
        document.getElementById("s_Verification").style = "color: #151515;";
        document.getElementById("s_Verification").innerHTML = "Verification Code";
    } else if (document.getElementById("s_Verification").textContent == "Verification code must have 6 characters") {
        document.getElementById("s_Verification").style = "color: #151515;";
        document.getElementById("s_Verification").innerHTML = "Verification Code";
    } else if (document.getElementById("s_v_email").textContent == "Please enter your email") {
        document.getElementById("s_v_email").style = "color: #151515;";
        document.getElementById("s_v_email").innerHTML = "Email";
    } else if (document.getElementById("s_v_email").textContent == "Email address must <50 characters") {
        document.getElementById("s_v_email").style = "color: #151515;";
        document.getElementById("s_v_email").innerHTML = "Email";
    } else if (document.getElementById("s_v_email").textContent == "Invalied email") {
        document.getElementById("s_v_email").style = "color: #151515;";
        document.getElementById("s_v_email").innerHTML = "Email";
    } else if (document.getElementById("s_n_password").textContent == "PLease enter new password") {
        document.getElementById("s_n_password").style = "color: #151515;";
        document.getElementById("s_n_password").innerHTML = "New Password";
    } else if (document.getElementById("s_n_password").textContent == "Password must have 8-16 characters") {
        document.getElementById("s_n_password").style = "color: #151515;";
        document.getElementById("s_n_password").innerHTML = "New Password";
    } else if (document.getElementById("s_n_repassword").textContent == "Please enter confirm password") {
        document.getElementById("s_n_repassword").style = "color: #151515;";
        document.getElementById("s_n_repassword").innerHTML = "new Re Password";
    } else if (ddocument.getElementById("s_n_repassword").textContent == "Passwords not matching") {
        document.getElementById("s_n_repassword").style = "color: #151515;";
        document.getElementById("s_n_repassword").innerHTML = "new Re Password";
    } else if (document.getElementById("s_Verification").textContent == "Invlied verification code") {
        document.getElementById("s_Verification").style = "color: #151515;";
        document.getElementById("s_Verification").innerHTML = "Verification Code";
    }
}

function userlogin() {
    var email = document.getElementById("email");
    var password = document.getElementById("password1");
    var rememberme = document.getElementById("rememberme");

    var form = new FormData();
    form.append("email", email.value);
    form.append("password", password.value);
    form.append("rememberme", rememberme.checked);

    var request = new XMLHttpRequest();

    request.onreadystatechange = function() {
        if (request.readyState == 4 && request.status == 200) {
            var t = request.responseText;
            if (t == "success") {
                // alert(t);
                window.location = "home.php";
            } else if (t == "Please enter your email") {
                document.getElementById("cu_email").style = "color: red;";
                document.getElementById("cu_email").innerHTML = t;
            } else if (t == "Email address must <50 characters") {
                document.getElementById("cu_email").style = "color: red;";
                document.getElementById("cu_email").innerHTML = t;
            } else if (t == "Invalied email") {
                document.getElementById("cu_email").style = "color: red;";
                document.getElementById("cu_email").innerHTML = t;
            } else if (t == "PLease enter you password!") {
                document.getElementById("cu_password").style = "color: red;";
                document.getElementById("cu_password").innerHTML = t;
            } else if (t == "Password must have 8-16 characters") {
                document.getElementById("cu_password").style = "color: red;";
                document.getElementById("cu_password").innerHTML = t;
            } else if (t == "Invlied username or password") {
                document.getElementById("cu_email").style = "color: red;";
                document.getElementById("cu_email").innerHTML = t;
                document.getElementById("cu_password").style = "color: red;";
                document.getElementById("cu_password").innerHTML = t;
            }
        }

    }

    request.open("POST", "signInProcess.php", true);
    request.send(form);
}

function forgotPassword() {

    document.getElementById("forgot_loding").classList.toggle("d-none");
    document.getElementById("forgot_text").classList.toggle("text_disabel");

    var email = document.getElementById("email");

    var form = new FormData();
    form.append("email", email.value);

    var request = new XMLHttpRequest();

    request.onreadystatechange = function() {
        if (request.readyState == 4 && request.status == 200) {
            var t = request.responseText;
            // alert(t);
            if (t == "success") {
                switchFrame1();
                document.getElementById("forgot_loding").classList.toggle("d-none");
                document.getElementById("forgot_text").classList.toggle("text_disabel");
            } else if (t == "Please enter your email") {
                document.getElementById("cu_email").style = "color: red;";
                document.getElementById("cu_email").innerHTML = t;
                document.getElementById("forgot_loding").classList.toggle("d-none");
                document.getElementById("forgot_text").classList.toggle("text_disabel");
            } else if (t == "Email not matching") {
                document.getElementById("cu_email").style = "color: red;";
                document.getElementById("cu_email").innerHTML = t;
            } else if (t == "Something went wrong") {
                document.getElementById("cu_email").style = "color: red;";
                document.getElementById("cu_email").innerHTML = t;
            }
        }
    }

    request.open("POST", "forgotPasswordProcess.php", true);
    request.send(form);
}

function passwordChange() {
    var verificationCode = document.getElementById("Verification");
    var password1 = document.getElementById("password4");
    var password2 = document.getElementById("password5");
    var email = document.getElementById("v_ename");

    var form = new FormData();
    form.append("code", verificationCode.value);
    form.append("password1", password1.value);
    form.append("password2", password2.value);
    form.append("email", email.value);

    var request = new XMLHttpRequest();

    request.onreadystatechange = function() {
        if (request.readyState == 4 && request.status == 200) {
            var t = request.responseText;
            if (t == "success") {
                // alert(t);
                switchFrame1();
            } else if (t == "PLease enter verification code") {
                document.getElementById("s_Verification").style = "color: red;";
                document.getElementById("s_Verification").innerHTML = t;
            } else if (t == "Verification code must have 6 characters") {
                document.getElementById("s_Verification").style = "color: red;";
                document.getElementById("s_Verification").innerHTML = t;
            } else if (t == "Please enter your email") {
                document.getElementById("s_v_email").style = "color: red;";
                document.getElementById("s_v_email").innerHTML = t;
            } else if (t == "Email address must <50 characters") {
                document.getElementById("s_v_email").style = "color: red;";
                document.getElementById("s_v_email").innerHTML = t;
            } else if (t == "Invalied email") {
                document.getElementById("s_v_email").style = "color: red;";
                document.getElementById("s_v_email").innerHTML = t;
            } else if (t == "PLease enter new password") {
                document.getElementById("s_n_password").style = "color: red;";
                document.getElementById("s_n_password").innerHTML = t;
            } else if (t == "Password must have 8-16 characters") {
                document.getElementById("s_n_password").style = "color: red;";
                document.getElementById("s_n_password").innerHTML = t;
            } else if (t == "Please enter confirm password") {
                document.getElementById("s_n_repassword").style = "color: red;";
                document.getElementById("s_n_repassword").innerHTML = t;
            } else if (t == "Passwords not matching") {
                document.getElementById("s_n_repassword").style = "color: red;";
                document.getElementById("s_n_repassword").innerHTML = t;
            } else if (t == "Invlied verification code") {
                document.getElementById("s_Verification").style = "color: red;";
                document.getElementById("s_Verification").innerHTML = t;
            }
        }
    };
    request.open("POST", "passwordChangeProcess.php", true);
    request.send(form);
}