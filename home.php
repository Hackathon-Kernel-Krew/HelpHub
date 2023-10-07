<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="homeStyle.css" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="sendstyle.css" />
    <link rel="stylesheet" href="advancestyle.css" />

    <link rel="icon" href="resources/images/source_images/helphubIcon.jpeg" />

    <title>HelpHub</title>
</head>

<?php

session_start();

if (isset($_SESSION["user"])) {
    echo $_SESSION["user"]["email"];

?>

    <body class="bg-gray postion-relative">
        <div class="bg-white d-flex align-items-center fixed-top shadow header-gradient" style="min-height: 56px; z-index: 5">
            <div class="container-fluid row ">

                <?php include "header.php"; ?>


            </div>
        </div>

        <div class="col-12 ps-5 pe-5 pt-5 pb-5">
            <div class="row d-flex flex-row justify-content-between pt-5 pt-md-5 pt-lg-4">
                <div class="col-12 col-md-8 col-lg-8">
                    <div class="d-flex flex-column justify-content-center w-100">

                        <div class="bg-white p-3 mt-3 rounded border shadow">
                            <div class="d-flex" type="button">
                                <div class="p-1">
                                    <img src="./resources/images/profile_images/<?php echo $_SESSION["user"]["email"]; ?>.png" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                                </div>
                                <input type="text" onkeypress="showmodelAdvancedSearch('exampleModal9');" class="form-control rounded-pill border-0 bg-gray pointer" placeholder="What's on your mind, <?php echo $_SESSION["user"]["first_name"]; ?>?" data-bs-toggle="modal" data-bs-target="createModal" />
                            </div>


                            <!-- Create Post Modal -->

                            <!-- Modal1 -->
                            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content border shadow-lg" style="border-radius: 10px;">
                                        <div class="modal-header border-0">
                                            <h1 class="modal-title  fs-5 h" id="exampleModalLabel">Message</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row" id="chat-loader">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Model1 -->

                            <!-- Modal2 -->
                            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content border shadow-lg" style="border-radius: 10px;">
                                        <div class="modal-header border-0">
                                            <h1 class="modal-title text-center fs-5 h" id="exampleModalLabel">Private Chat</h1>
                                            <button type="button" class="btn-close" onclick="loadChats('<?php echo ($_SESSION['user']['email']); ?>');" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="col-12" style="overflow-x: hidden;overflow-y: scroll;height: 400px;">
                                                <div class="row d-flex flex-column gap-0 ps-3 pe-3" id="private-chat-loader">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row pt-4 g-2">
                                                    <div class="col-10">
                                                        <input type="text" class="form-control rounded-pill border-0 bg-gray d-grid" placeholder="Your reply..." id="sender-message" />
                                                    </div>
                                                    <div class="col-2">
                                                        <button class="text-center form-control rounded-pill border-0 bg-gray" onclick="savePrivateMessage();"><i class="fas fa-thumbs-up fs-5 pointer" style="color: #f5683d;"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Model2 -->


                            <!-- Create Post Modal -->


                            <hr />
                            <div class="d-flex flex-column flex-lg-row mt-3">

                                <div onclick="showmodelAdvancedSearch('exampleModal9');" class="
                    dropdown-item
                    rounded
                    d-flex
                    align-items-center
                    justify-content-center
                  " type="button">
                                    <i class="fas fa-photo-video me-2 text-success"></i>
                                    <p class="m-0 text-muted">Photo/Video</p>
                                </div>
                            </div>
                        </div>



                        <?php
                        require "connection.php";

                        $posts_rs = Database::search("SELECT * FROM `posts`");

                        $posts_num = $posts_rs->num_rows;

                        for ($q = 0; $q < $posts_num; $q++) {
                            $posts_data = $posts_rs->fetch_assoc();
                        ?>
                            <!-- Posts -->
                            <div class="bg-white p-4 rounded shadow mt-3">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex">

                                        <?php

                                        $Postimage_rs = Database::search("SELECT * FROM `posts_has_post_images` WHERE `posts_id`='" . $posts_data["id"] . "'");
                                        $Postimage_data = $Postimage_rs->fetch_assoc();

                                        $image_rs = Database::search("SELECT * FROM `post_images` WHERE `id`='" . $Postimage_data["post_images_id"] . "'");
                                        $image_data = $image_rs->fetch_assoc();

                                        $publisher_rs = Database::search("SELECT * FROM `user` WHERE `email`='" . $posts_data["user_email"] . "'");
                                        $publisher_data = $publisher_rs->fetch_assoc();

                                        ?>

                                        <img src="./resources/images/profile_images/<?php echo $publisher_data["email"]; ?>.png" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                                        <div>

                                            <p class="m-0 fw-bold"><?php echo $publisher_data["first_name"] . " " . $publisher_data["last_name"]; ?></p>
                                            <span class="text-muted fs-7"><?php echo $posts_data["date_time"]; ?></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3">

                                    <div>
                                        <h3><?php echo $posts_data["title"]; ?></h3>
                                        <p>
                                            <?php echo $posts_data["content"]; ?>
                                        </p>
                                        <img src="<?php echo $image_data["path"]; ?>" alt="post image" class="img-fluid rounded" />
                                    </div>

                                    <div class="post__comment mt-3 position-relative">



                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item border-0">

                                                <?php
                                                $commentsCount_rs = Database::search("SELECT COUNT(`id`) FROM `comments` WHERE `posts_id`='" . $posts_data["id"] . "'");
                                                $commentsCount_data = $commentsCount_rs->fetch_assoc();
                                                ?>

                                                <h2 class="accordion-header" id="headingTwo">
                                                    <div class="
                            accordion-button
                            collapsed
                            pointer
                            d-flex
                            justify-content-end
                          " data-bs-toggle="collapse" data-bs-target="#collapsePost1" aria-expanded="false" aria-controls="collapsePost1">
                                                        <p class="m-0"><?php echo $commentsCount_data["COUNT(`id`)"]; ?> Comments</p>
                                                    </div>
                                                </h2>
                                                <hr />
                                                <!-- comment & like bar -->
                                                <div class="d-flex justify-content-around">

                                                    <?php

                                                    $vote_rs = Database::search("SELECT * FROM `vote` WHERE `user_email`='" . $_SESSION["user"]["email"] . "' AND `posts_id`='" . $posts_data["id"] . "'");
                                                    $vote_data = $vote_rs->fetch_assoc();
                                                    $vote_num = $vote_rs->num_rows;


                                                    if ($vote_num == 0) {
                                                    ?>

                                                        <div onclick="like('<?php echo $posts_data['id'] ?>');" class="
                            dropdown-item
                            rounded
                            d-flex
                            justify-content-center
                            align-items-center
                            pointer
                            text-muted
                            p-1
                          ">
                                                            <i class="fas fa-thumbs-up me-3 " id="likeIcon"></i>
                                                            <p class="m-0" id="likeText">Like</p>
                                                        </div>

                                                    <?php
                                                    } else if ($vote_data['count'] == 1) {
                                                    ?>

                                                        <div onclick="like('<?php echo $posts_data['id'] ?>');" class="
                            dropdown-item
                            rounded
                            d-flex
                            justify-content-center
                            align-items-center
                            pointer
                            text-muted
                            p-1
                          ">
                                                            <i class="fas fa-thumbs-up me-3 " id="likeIcon" style="color: blue;"></i>
                                                            <p class="m-0" id="likeText">Liked</p>
                                                        </div>


                                                    <?php
                                                    }
                                                    ?>



                                                    <div class="
                            dropdown-item
                            rounded
                            d-flex
                            justify-content-center
                            align-items-center
                            pointer
                            text-muted
                            p-1
                            " data-bs-toggle="collapse" data-bs-target="#collapsePost1" aria-expanded="false" aria-controls="collapsePost1">
                                                        <i class="fas fa-comment-alt me-3"></i>
                                                        <p class="m-0">Comment</p>
                                                    </div>
                                                </div>









                                                <div id="collapsePost1" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <hr />
                                                    <div class="accordion-body">

                                                        <?php

                                                        $comments_rs = Database::search("SELECT * FROM `comments` WHERE `posts_id`='" . $posts_data["id"] . "'");
                                                        $comments_num = $comments_rs->num_rows;

                                                        for ($z = 0; $z < $comments_num; $z++) {
                                                            $comments_data = $comments_rs->fetch_assoc();

                                                            $commentor_rs = Database::search("SELECT * FROM `user` WHERE `email`='" . $comments_data["user_email"] . "'");
                                                            $commentor_data = $commentor_rs->fetch_assoc();
                                                        ?>

                                                            <div class="d-flex align-items-center my-1">

                                                                <img src="./resources/images/profile_images/<?php echo $commentor_data['email']; ?>.png" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />

                                                                <div class="p-1 rounded comment__input w-100">

                                                                    <p class="fw-bold m-0"><?php echo $commentor_data["first_name"] . " " . $commentor_data["last_name"]; ?></p>
                                                                    <p class="m-0 fs-7 bg-gray p-2 rounded">
                                                                        <?php echo $comments_data['comment'] ?>
                                                                    </p>
                                                                </div>
                                                            </div>

                                                        <?php
                                                        }
                                                        ?>


                                                        <form class="d-flex mt-3">

                                                            <div>
                                                                <img src="./resources/images/profile_images/<?php echo $_SESSION["user"]["email"]; ?>.png" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                                                            </div>
                                                            <div style="width: 100%;" class="row ps-3 pe-3 ">
                                                                <div class="form-control border rounded-pill bg-gray d-flex flew-row ">
                                                                    <input class="bg-transparent border-0" style="width: 80%; outline: none;" type="text" placeholder="Write a comment" id="commentText" />
                                                                    <i onclick="sendComment('<?php echo $posts_data['id'] ?>');" style=" color: #f5683d; " class="p-1 fa fa-lg fa-paper-plane" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php
                        }

                        ?>

                    </div>
                </div>

                <!-- side category -->
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="row">
                        <!-- category card -->
                        <div class="bg-white p-4 rounded shadow mt-3">
                            <div class="row">
                                <div class="col-12 border-bottom">
                                    <h3>Categories</h3>
                                </div>
                                <div class="col-12 pt-2">
                                    <?php
                                    $categoryResultset = Database::search("SELECT * FROM category");
                                    $categoryRownumber = $categoryResultset->num_rows;


                                    if ($categoryRownumber > 0) {

                                        $isMatching = false;

                                        for ($y = 0; $y < $categoryRownumber; $y++) {
                                            $categoryData = $categoryResultset->fetch_assoc();

                                            $userCategoryResultset = Database::search("SELECT * FROM user_has_category WHERE user_email='" . $_SESSION["user"]["email"] . "'");
                                            $userCategoryRownumber = $userCategoryResultset->num_rows;

                                            for ($z = 0; $z < $userCategoryRownumber; $z++) {
                                                $userCategoryData = $userCategoryResultset->fetch_assoc();

                                                if ($categoryData["id"] == $userCategoryData["category_id"]) {
                                                    $isMatching = true;
                                                    break;
                                                } else {
                                                    $isMatching = false;
                                                }
                                            }
                                            if ($isMatching) {
                                    ?>
                                                <button class="btn button1 pt-1 pb-1 m-1 shadow-sm text-white fs-7" id="category<?php echo ($y); ?>-btn" onclick="updateFollowingCategory('<?php echo ($categoryData['id']); ?>', '<?php echo ($y); ?>');"><?php echo ($categoryData["c_name"]); ?></button>
                                            <?php
                                            } else {
                                            ?>
                                                <button class="btn button1 button1-modify pt-1 pb-1 m-1 shadow-sm text-white fs-7" id="category<?php echo ($y); ?>-btn" onclick="updateFollowingCategory('<?php echo ($categoryData['id']); ?>', '<?php echo ($y); ?>');"><?php echo ($categoryData["c_name"]); ?></button>
                                    <?php
                                            }
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!-- category card -->
                    </div>
                </div>
                <!-- side category -->

            </div>
        </div>

        </div>
        </div>

        <div class="fixed-bottom right-100 p-3" style="z-index: 6; left: initial" type="button" data-bs-toggle="modal" data-bs-target="#newChat">
            <i class="fas fa-edit bg-white rounded-circle p-3 shadow"></i>
        </div>

        <script src="bootstrap.js"></script>
        <script src="homeJs.js"></script>
        <script src="sendmodel.js"></script>
        <script src="bootstrap.bundle.js"></script>
        <script src="userCategory.js"></script>
        <script src="advance_script.js"></script>
        <script src="modalScript.js"></script>


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

        <!-- Modal -->
        <div class="col-12">
            <div class="row">

                <div class="modal" id="exampleModal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 h" id="exampleModalLabel">CONTACT US </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <div class="col-12">
                                    <div class="row  ms-3 me-3">

                                        <div class="col-12">
                                            <div class="row d-flex flex-row align-items-start">

                                                <div class="inputBox mt-4 col-lg-6" onkeypress="type();">
                                                    <input type="text" required="required" id="full_name">
                                                    <span id="s_full_name">Full Name</span>
                                                    <i class="i"></i>
                                                </div>

                                                <div class="inputBox mt-4" onkeypress="type();">
                                                    <input type="text" required="required" id="email">
                                                    <span id="m_email">Email</span>
                                                    <i class="i"></i>
                                                </div>

                                                <!-- <div class="col-12">
                                                    <div class="inputBox mt-4">
                                                        <input type="text" required="required" id="mobile">
                                                        <span id="fname" class="mb-4">Mobile</span>
                                                        <i class="i"></i>
                                                    </div>
                                                </div> -->

                                                <div class="inputBox mt-4" onkeypress="type();">
                                                    <textarea id="massage" rows="3"></textarea>
                                                    <span id="s_massage">Message</span>
                                                    <i class="i"></i>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="col-12">
                                            <div class="row">
                                                <div class="d-grid mt-4 mb-4">
                                                    <button class="btn " style="background-color: #f5683d;" type="button" onclick="sendnow();">SEND NOW</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!-- Modal -->


        <!-- Modal -->
        <div class="modal fade modal-lg" id="exampleModalt" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title  fs-5 h" id="exampleModalLabel">Advanced Search</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">

                        <div class="col-12">
                            <div class="row">

                                <div class="col-12">
                                    <div class="row">


                                        <div class="d-grid input-group d-md-flex justify-content-md-center mt-2 mb-2">
                                            <input type="text" class="form-control  border-danger" placeholder="Type Keyword to search....." id="basic_search_txt">
                                            <span class="input-group-text border-danger" style="cursor: pointer;" id="basic-addon1"><i class="bi bi-search " style="color: gray;"></i></span>
                                        </div>

                                        <div class="d-grid mt-4 mb-3">
                                            <select class="form-select border-danger" aria-label="Default select example" id="basic_search_select">
                                                <option value="0" selected>Select Category</option>
                                                <?php

                                                $category_rs = Database::search("SELECT * FROM `category`");
                                                $category_num = $category_rs->num_rows;

                                                for ($a = 0; $a < $category_num; $a++) {
                                                    $category_data = $category_rs->fetch_assoc();

                                                ?>

                                                    <option value="<?php echo $category_data["id"]; ?>"><?php echo $category_data["c_name"]; ?></option>

                                                <?php

                                                }

                                                ?>
                                            </select>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="row">
                                        <div class="d-grid mt-4 mb-4">
                                            <button class="btn text-light fw-bold" style="background-color: #f5683d;" type="button" onclick="advanceSearch(0);">Search</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <hr class="border border-3 border-danger" />
                                </div>

                                <div class="col-12" id="advanceSearchResult">
                                    <div class="row">
                                        <div class="row ">

                                            <div class="col-12 text-center">
                                                <div class="row" id="view_area">
                                                    <div class="offset-5 col-2 mt-5">
                                                        <span class="fw-bold text-black-50"><i class="bi bi-search" style="font-size: 100px;"></i></span>
                                                    </div>
                                                    <div class="offset-3 col-6 mt-3 mb-5">
                                                        <span class="h4 text-black-50 fw-bold">No Items Searched Yet...</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>



                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!--Modal-->


        <!--Add Post Modal -->
        <div class="modal fade " id="exampleModal9" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title  fs-5 h" id="exampleModalLabel">Create Post</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="col-12">
                            <div class="row">

                                <div class="col-12">
                                    <div class="row d-flex flex-row align-items-start">

                                        <div class="col-2">
                                            <div class="row">
                                                <img onclick="loadUserProfile();" src="./resources/images/profile_images/<?php echo $_SESSION["user"]["email"]; ?>.png" onclick="window.location='userprofile.php'" ; class="img p-2  bg-white ">
                                            </div>
                                        </div>

                                        <div class="col-10">
                                            <div class="row">
                                                <span class="mt-2 fs-5">Sahan Kaushalya</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="row">
                                        <input class="form-control mt-3  txt " placeholder="What's on Your mind? Sahan" type="text" id="text">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="row">
                                        <div class="row ">
                                            <div class="card pe-1 ps-1 pt-4 pb-4 mt-2  border border-0 " style="border-radius:30px;">
                                                <img src="resources/images/source_images/photo.png" class="card-img-top " id="i0">
                                                <div class="card-body">
                                                    <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-2 mb-2">
                                                        <input type="text" class="form-control c" placeholder="Add to your post">
                                                        <div>
                                                            <input type="file" class="d-none" id="imageuploader" />
                                                            <label for="imageuploader" class="btn btn-light button mt-3 d-flex flex-row align-items-center justify-content-center" onclick="changeProductImage();"><i class="bi bi-images fs-2" style="color: green;"></i></label>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-12">
                            <div class="row">

                                <div class="col-12 ">
                                    <div class="row">

                                        <div class="d-grid d-md-flex justify-content-md-center mt-2 mb-2">
                                            <select class="form-select text-center" id="Category">
                                                <option value="0">Select Category</option>

                                                <?php

                                                $category_rs = Database::search("SELECT * FROM `category`");
                                                $category_num = $category_rs->num_rows;

                                                for ($z = 0; $z < $category_num; $z++) {
                                                    $category_data = $category_rs->fetch_assoc();

                                                ?>

                                                    <option value="<?php echo $category_data["id"]; ?>"><?php echo $category_data["c_name"]; ?></option>

                                                <?php

                                                }

                                                ?>

                                            </select>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-12 ">
                                    <div class="row">

                                        <div class="d-grid d-md-flex justify-content-md-center mt-2 mb-2">
                                            <select class="form-select text-center" id="tag">
                                                <option value="0">Select Tag</option>

                                                <?php

                                                $tag_rs = Database::search("SELECT * FROM `tage`");
                                                $tag_num = $tag_rs->num_rows;

                                                for ($z = 0; $z < $tag_num; $z++) {
                                                    $tag_data = $tag_rs->fetch_assoc();

                                                ?>

                                                    <option value="<?php echo $tag_data["id"]; ?>"><?php echo $tag_data["t_name"]; ?></option>

                                                <?php

                                                }

                                                ?>

                                            </select>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="row">
                                        <div class="d-grid mt-4 mb-4">
                                            <button class="btn " style="background-color: #f5683d;" onclick="addProduct();" type="button">POST</button>

                                        </div>
                                    </div>
                                </div>




                            </div>
                        </div>



                    </div>
                </div>

            </div>
        </div>

        <!--Add Post Modal -->


    </body>

<?php

} else {
?>

    <h1 style="align-items: center; text-align: center;">
        <b style="color: blue;">You are Not a Valid User</b>
    </h1>


<?php

}

?>

</html>