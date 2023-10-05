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
    <link rel="stylesheet" href="homeStyle.css" />
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>


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
                        <i class="fa fa-user-circle fa-sm" aria-hidden="true"></i>
                    </div>

                    <!-- <ul class="dropdown-menu border-0 shadow p-3 overflow-auto" aria-labelledby="chatMenu" style="width: 23em; max-height: 600px">
                        <li class="p-1">
                            <div class="d-flex justify-content-between">
                                <h2>Message</h2>
                            </div>
                        </li> -->


                        <!-- Message Search -->
                        <!-- <li class="p-1">
                            <div class="input-group-text bg-gray border-0 rounded-pill" style="min-height: 40px; min-width: 230px">
                                <i class="fas fa-search me-2 text-muted"></i>
                                <input type="text" class="form-control rounded-pill border-0 bg-gray" placeholder="Search Messenger" />
                            </div>
                        </li> -->
                        <!-- Message Search -->



                        <!-- Message Content -->
                        <!-- <li class="my-2 p-1" type="button" data-bs-toggle="modal" data-bs-target="#singleChat1">
                            <div class="d-flex align-items-center justify-content-between"> -->

                                <!-- Sender -->
                                <!-- <div class="d-flex align-items-center justify-content-evenly"> -->
                                    <!-- Sender Profile Picture -->
                                    <!-- <div class="p-2">
                                        <img src="https://source.unsplash.com/random/1" alt="avatar" class="rounded-circle" style="width: 58px; height: 58px; object-fit: cover" />
                                    </div> -->
                                    <!-- Sender Profile Picture -->

                                    <!-- Received Message -->
                                    <!-- <div>
                                        <p class="fs-7 m-0">Mike</p>
                                        <span class="fs-7 text-muted">Lorem ipsum &#8226; 7d</span>
                                    </div> -->
                                    <!-- Received Message -->
                                <!-- </div> -->
                                <!-- Sender -->


                                <!-- Message Status (Viewed or Not) -->
                                <!-- <div class="p-2">
                                    <img src="https://source.unsplash.com/random/1" alt="avatar" class="rounded-circle" style="width: 15px; height: 15px; object-fit: cover" />
                                </div> -->
                                <!-- Message Status (Viewed or Not) -->

                            <!-- </div>
                        </li> -->
                        <!-- Message Content -->

<!-- 
                    </ul> -->

                    <button class="action-btn">
                        <i class="fas fa-comments fa-sm"></i>
                        <span class="count">0</span>
                    </button>

                    <button class="action-btn">
                        <i class="fas fa-bell fa-sm"></i>
                        <span class="count">0</span>
                    </button>

                    <div class="rounded-circle p-1 bg-gray d-flex align-items-center justify-content-center mx-2"
                    style="width: 38px; height: 38px" type="button" id="secondMenu" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                        <i class="fas fa-caret-down"></i>
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

            <button class="action-btn">
                <i class="fa fa-user-circle" aria-hidden="true"></i>
            </button>

            <button class="action-btn">
                <i class="fas fa-comments"></i>
                <span class="count">0</span>
            </button>

            <button class="action-btn">
                <i class="fas fa-bell"></i>
                <span class="count">0</span>
            </button>

        </div>



    </header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>



</body>

</html>