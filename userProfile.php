<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Profile</title>
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="user-profile.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <link rel="icon" href="resources/images/source_images/helphubIcon.jpeg" />

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-10 col-md-6 col-lg-4 offset-1 offset-md-2 offset-lg-4 mt-4 mb-4 border shadow overflow-hidden position-relative" style="border-radius: 10px;">
                <div class="row">

                    <?php

                    require "connection.php";
                    session_start();
                    if (isset($_SESSION["user"])) {

                        $email = $_SESSION["user"]["email"];

                        $details_rs = Database::search("SELECT * FROM `user` INNER JOIN `gender` ON 
                        gender.id=user.gender_id WHERE `email`='" . $email . "'");
                        $userData = $details_rs->fetch_assoc();

                    ?>




                        <!-- main header -->
                        <div class="col-12 d-flex flex-column flex-md-column flex-lg-row align-items-center align-items-md-center justify-content-lg-start p-4 border-bottom">
                            <div class="d-flex flex-column">
                            <img onclick="loadUserProfile();" src="./resources/images/profile_images/<?php echo $userData["email"]; ?>.png"  class="p-2 profile border bg-white shadow-sm" alt="profile-image" id="main-profile-image" />
                                <input type="file" id="profile-image-uploader" class="d-none" />
                                <button class="profile-edite-btn mx-5 border-4 shadow" onclick="changeProfileImage();"><label for="profile-image-uploader"><i class="bi bi-pencil-square text-white"></i></label></button>
                            </div>
                            <div class="d-flex flex-column align-items-center align-items-md-center align-items-lg-start ps-0 ps-md-0 ps-lg-3 mt-3 mt-md-3 mt-lg-0">
                                <span class="main-header"><?php echo $userData["first_name"] . " " . $userData["last_name"]; ?></span>
                                <span class="fs-5 text-muted">@<?php echo $userData["username"]; ?></span>
                            </div>
                        </div>
                        <!-- main header -->
                        <!-- info section -->
                        <div class="col-12 p-4">
                            <div class="row">
                                <div class="col-12">
                                    <h3>User Details</h3>
                                </div>
                                <div class="col-12 col-md-12 col-lg-6">
                                    <div class="inputBox mt-4">
                                        <input type="text" required="required" value="<?php echo $userData["first_name"]; ?>" id="first_name">
                                        <span id="fname">First Name</span>
                                        <i class="i"></i>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12 col-lg-6">
                                    <div class="inputBox mt-4">
                                        <input type="text" required="required" value="<?php echo $userData["last_name"]; ?>" id="last_name">
                                        <span id="fname">Last Name</span>
                                        <i class="i"></i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="inputBox mt-4">
                                        <input type="text" required="required" value="<?php echo $userData["username"]; ?>" id="username">
                                        <span id="fname">Username</span>
                                        <i class="i"></i>
                                    </div>
                                </div>
                                <!-- <div class="col-12">
                                    <div class="inputBox mt-4">
                                        <input readonly type="text"required="required" value="<?php echo $userData["email"]; ?>" id="email">
                                        <span id="fname">Email</span>
                                        <i class="i"></i>
                                    </div>
                                </div> -->
                                <div class="col-12">
                                    <div class="inputBox mt-4">
                                        <input type="text" required="required" value="<?php echo $userData["mobile"]; ?>" id="mobile">
                                        <span id="fname">Mobile</span>
                                        <i class="i"></i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="inputBox mt-4">
                                        <input type="password" class="password" value="<?php echo $userData["password"]; ?>" required="required" id="password1">
                                        <span id="spanpassword">password</span>
                                        <div id="password-hide-btn1" onclick="shiftwPasswordHide('1');">
                                            <i class='bx bx-hide eye-icon'></i>
                                        </div>
                                        <i class="i"></i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="inputBox mt-4">
                                        <textarea type="text" value="<?php echo $userData["bio"]; ?>" required="required" id="bio"><?php echo $userData["bio"]; ?></textarea>
                                        <span id="fname">Bio</span>
                                        <i class="i"></i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="inputBox mt-4">
                                        <span id="fname">Gender</span>
                                    </div>
                                </div>
                                <div class="col-12 d-flex flex-row mt-4">
                                    <div class="checkbox d-flex flex-row my-auto">
                                        <input type="radio" disabled checked name="gender" />
                                        <label class="ms-2"><?php echo $userData["g_name"]?></label>
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <div class="field button-field mt-4">
                                        <a style="color: #fff;" class="button1 pt-2 pb-2 fs-5" onclick="userProfileUpdate();">Update Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- info section -->
                </div>
            </div>
        </div>
    </div>



<?php } else {

                        header("Location:index.php");
                        exit();
                    } ?>


<!-- Message toast | small and medium screen -->
<div class="toast-container position-fixed top-0 start-50 translate-middle-x pt-3 d-block d-md-block d-lg-none">
    <div id="liveToast-sm-md" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-body border-0 shadow" style="background-color: #f5683d27;border-radius: 10px;">
            <div class="row p-2">
                <div class="col-10">
                    <span class="def-header" id="toast-msg-sm-md"></span>
                </div>
                <div class="col-2 d-flex flex-row justify-content-center align-items-center">
                    <button type="button" class="btn-close border-1 bg-white" data-bs-dismiss="toast" aria-label="Close" style="border-radius: 100%;background-color: #f5683d;"></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Message toast | small and medium screen -->
<!-- Message toast | large screen -->
<div class="toast-container position-fixed bottom-0 end-0 pb-3 pe-3 d-none d-md-none d-lg-block">
    <div id="liveToast-lg" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-body border shadow" style="background-color: #f5683d27;border-radius: 10px;">
            <div class="row p-2">
                <div class="col-10">
                    <span class="def-header" id="toast-msg-lg"></span>
                </div>
                <div class="col-2 d-flex flex-row justify-content-center align-items-center">
                    <button type="button" class="btn-close border-1" data-bs-dismiss="toast" aria-label="Close" style="border-radius: 100%;background-color: #f5683d;"></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Message toast | large screen -->

<script src="bootstrap.bundle.js"></script>
<script src="userProfile.js"></script>
</body>

</html>