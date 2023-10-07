<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hearder</title>

    <!-- css link -->
    <link rel="stylesheet" href="header_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="homeStyle.css" />
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>


<body onload="headerNotificationchecker();">


    <!-- header start -->
    <header>

        <div class="header-main">

            <div class="container">

                <a href="home.php" class="header-logo">
                    <img src="resources/images/source_images/helphub.jpeg" alt="HelpHub" width="150" height="60">
                </a>

                <div class="header-user-actions">

                    <div class="
                    action-btn
                rounded-circle
                p-1
                bg-gray
                d-flex
                align-items-center
                justify-content-center
              " style="width: 38px; height: 38px" type="button" id="chatMenu" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">

                        <img onclick="loadUserProfile();" src="./resources/images/profile_images/<?php echo $_SESSION["user"]["email"]; ?>.png" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                    </div>
                    <button class="action-btn" onclick="loadChats('<?php echo ($_SESSION['user']['email']); ?>');">
                        <i class="fas fa-comments fa-sm"></i>
                        <span id="chat-count-loader" class="count d-none"></span>
                    </button>

                    <button class="action-btn" onclick="showmodel();">
                        <i class="fas fa-bell fa-sm"></i>
                        <span class="count d-none"></span>
                    </button>

                    <button class="action-btn" onclick="showmodelAdvancedSearch('exampleModalt');">
                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                    </button>

                    <div class="dropdown rounded-circle
                p-1
                bg-gray
                d-flex
                align-items-center
                justify-content-center
                mx-2" style="width: 38px; height: 38px" type="button">
                        <a id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-caret-down"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#" onclick="showmodel();">
                                <li class="p-1 rounded d-flex align-items-center" type="button">
                                    <i class="fas fa-exclamation-circle bg-gray p-2 rounded-circle"></i>
                                    <div class="ms-3">
                                        <p class="m-0">Cordinate Help</p>
                                        <p class="m-0 text-muted fs-7">
                                            Help us improve
                                        </p>
                                    </div>
                                </li>
                            </a>
                            <hr />
                            <a onclick="signout();" class="dropdown-item d-flex text-decoration-none text-dark" href="#">

                                <i class="fas fa-cog bg-gray p-2 rounded-circle"></i>
                                <div class="
                          ms-3
                          d-flex
                          justify-content-between
                          align-items-center
                          w-100
                        ">
                                    <p class="m-0">Log Out</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- secondary menu dd -->
                    <ul class="dropdown-menu border-0 shadow p-3" aria-labelledby="secondMenu" style="width: 23em">
                        <!-- avatar -->
                        <!-- <li class="dropdown-item p-1 rounded d-flex" type="button">
                            <img src="https://source.unsplash.com/collection/happy-people" alt="avatar" class="rounded-circle me-2" style="width: 45px; height: 45px; object-fit: cover" />
                            <div>
                                <p class="m-0">John</p>
                                <p class="m-0 text-muted">See your profile</p>
                            </div>
                        </li>
                        <hr /> -->
                        <!-- feedback -->
                        <!-- <li class="dropdown-item p-1 rounded d-flex align-items-center" type="button">
                            <i class="fas fa-exclamation-circle bg-gray p-2 rounded-circle"></i>
                            <div class="ms-3">
                                <p class="m-0">Give Feedback</p>
                                <p class="m-0 text-muted fs-7">
                                    Help us improve the new Flexbook.
                                </p>
                            </div>
                        </li>
                        <hr />
                        <li class="dropdown-item p-1 my-3 rounded" type="button">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="index.php" class="d-flex text-decoration-none text-dark">
                                        <i class="fas fa-cog bg-gray p-2 rounded-circle"></i>
                                        <div class="
                          ms-3
                          d-flex
                          justify-content-between
                          align-items-center
                          w-100
                        ">
                                            <p class="m-0">Log Out</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul> -->


                </div>

            </div>

        </div>

        <div class="mobile-bottom-navigation">

        <div class="
                    action-btn
                rounded-circle
                p-1
                bg-gray
                d-flex
                align-items-center
                justify-content-center
              " style="width: 38px; height: 38px" type="button" id="chatMenu" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">

                        <img onclick="loadUserProfile();" src="./resources/images/profile_images/<?php echo $_SESSION["user"]["email"]; ?>.png" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                    </div>

            <button class="action-btn" onclick="loadChats('<?php echo ($_SESSION['user']['email']); ?>');">
                <i class="fas fa-comments fa-sm"></i>
                <span id="chat-count-loader1" class="count d-none"></span>
            </button>

            <button class="action-btn" onclick="showmodel();">
                <i class="fas fa-bell fa-sm"></i>
                <span class="count d-none"></span>
            </button>

            <div class="dropup rounded-circle
                p-1
                bg-gray
                d-flex
                align-items-center
                justify-content-center
                mx-2" style="width: 38px; height: 38px" type="button">
                <a id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-caret-up"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">
                        <li class="p-1 rounded d-flex align-items-center" type="button">
                            <i class="fas fa-exclamation-circle bg-gray p-2 rounded-circle"></i>
                            <div class="ms-3">
                                <p class="m-0">Cordinate Help</p>
                                <p class="m-0 text-muted fs-7">
                                    Help us improve
                                </p>
                            </div>
                        </li>
                    </a>
                    <hr />
                    <a onclick="signout();" class="dropdown-item d-flex text-decoration-none text-dark" href="#">

                        <i class="fas fa-cog bg-gray p-2 rounded-circle"></i>
                        <div class="
                          ms-3
                          d-flex
                          justify-content-between
                          align-items-center
                          w-100
                        ">
                            <p class="m-0">Log Out</p>
                        </div>
                    </a>
                </div>
            </div>


        </div>



    </header>

    <script src="homeJs.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="modelHanddle.js"></script>
    <script src="notificationChecker.js"></script>


</body>

</html>