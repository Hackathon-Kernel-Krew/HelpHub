<!DOCTYPE html>
<html>

<head>
    <title>User SignIn</title>
    <link rel="stylesheet" href="./login_style.css" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<body class="main-background">
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mt-4">
                    <div class="col-10 col-md-10 col-lg-4 offset-1 offset-md-1 offset-lg-4 def-card1 p-5">
                        <div class="row">
                            <!-- signin section -->
                            <div class="col-12" id="signin-section">
                                <div class="col-12 mt-1 mb-1 text-center">
                                    <span class="def-header1">Sign In</span>
                                </div>
                                <div class="row">
                                    <div class="inputBox" onclick="type();">
                                        <input type="text" required="required" id="email">
                                        <span id="cu_email">Email</span>
                                        <i class="i"></i>
                                    </div>
                                    <div class="inputBox mt-5" onclick="type();">
                                        <input type="password" class="password" required="required" id="password1">
                                        <span id="cu_password">password</span>
                                        <div id="password-hide-btn1" onclick="shiftwPasswordHide('1');">
                                            <i class='bx bx-hide eye-icon'></i>
                                        </div>
                                        <i class="i"></i>
                                    </div>

                                    <div class="link mt-3" >
                                        <a href="#" class="forgot-pass" onclick="forgotPassword();" id="forgot_text">Forgot password</a>
                                        <div class="spinner-border spinner-border-sm mt-1 text-danger d-none" id="forgot_loding" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <div class="checkbox">
                                            <input type="checkbox" id="rememberme">
                                            <label>Remember me</label>
                                        </div>
                                    </div>

                                    <div class="field button-field mt-2">
                                        <a style="color: #fff;" class="button1" onclick="userlogin();">Login</a>
                                    </div>

                                    <div class="form-link mt-3">
                                        <span>Don't have an account? <a onclick="switchFrame();" class="links signup-link">Signup</a></span>
                                    </div>

                                    <!-- <div class="form-link">
                                    <span>Don't have an account? <a href="#" class="links signup-link">Signup</a></span>
                                </div> -->
                                </div>
                            </div>
                            <!-- signin section -->
                            <!-- signup section -->
                            <div class="col-12 d-none" id="signup-section">
                                <div class="col-12 mt-1 mb-1 text-center">
                                    <span class="def-header1">Sign Up</span>
                                </div>
                                <div class="row">
                                    <div class="inputBox" onkeypress="type();">
                                        <input type="number" required="required" id="mobile">
                                        <span id="s_mobile">Mobile</span>
                                        <i class="i"></i>
                                    </div>
                                    <div class="inputBox mt-4 col-lg-6" onkeypress="type();">
                                        <input type="text" required="required" id="fname">
                                        <span id="s_fname">First Name</span>
                                        <i class="i"></i>
                                    </div>
                                    <div class="inputBox mt-4 col-lg-6" onkeypress="type();">
                                        <input type="text" required="required" id="lname">
                                        <span id="s_lname">Last Name</span>
                                        <i class="i"></i>
                                    </div>
                                    <div class="inputBox mt-4" onkeypress="type();">
                                        <input type="text" required="required" id="email1">
                                        <span id="s_email">Email</span>
                                        <i class="i"></i>
                                    </div>
                                    <div class="inputBox mt-4" onkeypress="type();">
                                        <input type="text" required="required" id="username">
                                        <span id="s_username">Username</span>
                                        <i class="i"></i>
                                    </div>

                                    <div class="inputBox mt-4" onkeypress="type();">
                                        <input type="password" class="password" required="required" id="password2">
                                        <span id="s_password">password</span>
                                        <div id="password-hide-btn2" onclick="shiftwPasswordHide('2');">
                                            <i class='bx bx-hide eye-icon'></i>
                                        </div>
                                        <i class="i"></i>
                                    </div>
                                    <div class="inputBox mt-4" onkeypress="type();">
                                        <input type="password" class="password" required="required" id="password3">
                                        <span id="s_repassword">Re password</span>
                                        <div id="password-hide-btn3" onclick="shiftwPasswordHide('3');">
                                            <i class='bx bx-hide eye-icon'></i>
                                        </div>
                                        <i class="i"></i>
                                    </div>

                                    <div class="inputBox mt-4" onchange="type();">
                                        <select id="gender">
                                            <option value="0">Select Gender</option>
                                            <?php
                                            require "./connection.php";

                                            $gender_rs = Database::search("SELECT * FROM `gender`");
                                            $gender_num = $gender_rs->num_rows;

                                            for ($x = 0; $x < $gender_num; $x++) {
                                                $gender_data = $gender_rs->fetch_assoc();

                                            ?>
                                                <option value="<?php echo $gender_data["id"]; ?>"><?php echo $gender_data["g_name"]; ?></option>
                                            <?php
                                            }

                                            ?>
                                        </select>
                                        <span id="spangender">Select Gender</span>
                                        <i class="i"></i>
                                    </div>

                                    <div class="field button-field mt-4">
                                        <a style="color: #fff;" class="button1" onclick="userSignUp();">Sign Up</a>
                                    </div>

                                    <div class="form-link mt-3">
                                        <span>Don't have an account? <a onclick="switchFrame();" class="links signup-link">SignIn</a></span>
                                    </div>
                                </div>
                            </div>
                            <!-- signup section -->
                            <!-- password reset -->
                            <div class="col-12 d-none" id="forgot-section">
                                <div class="col-12 mt-1 mb-1 text-center">
                                    <span class="def-header1">Reset Password</span>
                                </div>
                                <div class="row">

                                    <div class="inputBox mt-4" onclick="type1();">
                                        <input type="text" required="required" id="Verification">
                                        <span id="s_Verification">Verification Code</span>
                                        <i class="i"></i>
                                    </div>
                                    <div class="inputBox mt-4" onclick="type1();">
                                        <input type="text" required="required" id="v_ename">
                                        <span id="s_v_email">Email</span>
                                        <i class="i"></i>
                                    </div>
                                    <div class="inputBox mt-4" onclick="type1();">
                                        <input type="password" class="password" required="required" id="password4">
                                        <span id="s_n_password">New Password</span>
                                        <div id="password-hide-btn4" onclick="shiftwPasswordHide('4');">
                                            <i class='bx bx-hide eye-icon'></i>
                                        </div>
                                        <i class="i"></i>
                                    </div>
                                    <div class="inputBox mt-4" onclick="type1();">
                                        <input type="password" class="password" required="required" id="password5">
                                        <span id="s_n_repassword">new Re Password</span>
                                        <div id="password-hide-btn5" onclick="shiftwPasswordHide('5');">
                                            <i class='bx bx-hide eye-icon'></i>
                                        </div>
                                        <i class="i"></i>
                                    </div>

                                    <div class="field button-field mt-4">
                                        <a style="color: #fff;" class="button1" onclick="passwordChange();">Change Password</a>
                                    </div>
                                    <div class="field button-field mt-4">
                                        <a style="color: #fff;" class="button1" onclick="switchFrame1();">Change Password</a>
                                    </div>
                                </div>
                            </div>
                            <!-- password reset -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="bootstrap.bundle.js"></script>
    <script src="login_script.js"></script>
</body>

</html>