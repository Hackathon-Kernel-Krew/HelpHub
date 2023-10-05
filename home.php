<html lang="en">

<head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="homeStyle.css" />
    <link rel="icon" href="resources/images/source_images/helphubIcon.jpeg" />

    <title>HelpHub</title>
</head>

<?php

session_start();

if (isset($_SESSION["user"])) {
    echo $_SESSION["user"]["email"] ;

?>

<body class="bg-gray postion-relative">
    <div class="bg-white d-flex align-items-center fixed-top shadow header-gradient" style="min-height: 56px; z-index: 5">
        <div class="container-fluid row ">

            <?php include "header.php"; ?>

        </div>
    </div>

    <div style="height: 20px;"></div>
    <div style="height: 50px;" class=" d-lg-none d-sm-none d-xl-none"></div>

    <div class="col-12 col-lg-8 pb-5">
        <div class="d-flex flex-column justify-content-center w-100 mx-auto" style="padding-top: 56px; max-width: 680px">

            <div class="bg-white p-3 mt-3 rounded border shadow">
                <div class="d-flex" type="button">
                    <div class="p-1">
                        <img src="https://source.unsplash.com/collection/happy-people" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                    </div>
                    <input type="text" class="form-control rounded-pill border-0 bg-gray pointer" disabled placeholder="What's on your mind, John?" data-bs-toggle="modal" data-bs-target="createModal" />
                </div>


                <!-- Create Post Modal -->



                <!-- Create Post Modal -->


                <hr />
                <div class="d-flex flex-column flex-lg-row mt-3">

                    <div class="
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

            for ($z = 0; $z < $posts_num; $z++) {
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
                        <i class="fas fa-ellipsis-h" type="button" id="post1Menu" data-bs-toggle="dropdown" aria-expanded="false"></i>

                        <ul class="dropdown-menu border-0 shadow" aria-labelledby="post1Menu">
                            <li class="d-flex align-items-center">
                                <a class="
                        dropdown-item
                        d-flex
                        justify-content-around
                        align-items-center
                        fs-7
                      " href="#">
                                    Edit Post</a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a class="
                        dropdown-item
                        d-flex
                        justify-content-around
                        align-items-center
                        fs-7
                      " href="#">
                                    Delete Post</a>
                            </li>
                        </ul>
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
                                        <div class="
                            dropdown-item
                            rounded
                            d-flex
                            justify-content-center
                            align-items-center
                            pointer
                            text-muted
                            p-1
                          ">
                                            <i class="fas fa-thumbs-up me-3"></i>
                                            <p class="m-0">Like</p>
                                        </div>
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


                                    <?php
                                    $comments_rs = Database::search("SELECT * FROM `comments` WHERE `posts_id`='" . $posts_data["id"] . "'");
                                    $comments_data = $comments_rs->fetch_assoc();

                                    ?>

                                    <div id="collapsePost1" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <hr />
                                        <div class="accordion-body">
                                            <!-- comment 1 -->
                                            <div class="d-flex align-items-center my-1">
                                                <!-- avatar -->
                                                <img src="https://source.unsplash.com/collection/happy-people" alt="avatar" class="rounded-circle me-2" style="
                                width: 38px;
                                height: 38px;
                                object-fit: cover;
                              " />
                                                <!-- comment text -->
                                                <div class="p-3 rounded comment__input w-100">
                                                    <!-- comment menu of author -->
                                                    <div class="d-flex justify-content-end">
                                                        <!-- icon -->
                                                        <i class="fas fa-ellipsis-h text-blue pointer" id="post1CommentMenuButton" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                                        <!-- menu -->
                                                        <ul class="dropdown-menu border-0 shadow" aria-labelledby="post1CommentMenuButton">
                                                            <li class="d-flex align-items-center">
                                                                <a class="
                                        dropdown-item
                                        d-flex
                                        justify-content-around
                                        align-items-center
                                        fs-7
                                      " href="#">
                                                                    Edit Comment</a>
                                                            </li>
                                                            <li class="d-flex align-items-center">
                                                                <a class="
                                        dropdown-item
                                        d-flex
                                        justify-content-around
                                        align-items-center
                                        fs-7
                                      " href="#">
                                                                    Delete Comment</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <p class="fw-bold m-0">John</p>
                                                    <p class="m-0 fs-7 bg-gray p-2 rounded">
                                                        Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit.
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- comment 2 -->
                                            <div class="d-flex align-items-center my-1">
                                                <!-- avatar -->
                                                <img src="https://source.unsplash.com/random/2" alt="avatar" class="rounded-circle me-2" style="
                                width: 38px;
                                height: 38px;
                                object-fit: cover;
                              " />
                                                <!-- comment text -->
                                                <div class="p-3 rounded comment__input w-100">
                                                    <p class="fw-bold m-0">Jerry</p>
                                                    <p class="m-0 fs-7 bg-gray p-2 rounded">
                                                        Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit.
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- create comment -->
                                            <form class="d-flex my-1">
                                                <!-- avatar -->
                                                <div>
                                                    <img src="https://source.unsplash.com/collection/happy-people" alt="avatar" class="rounded-circle me-2" style="
                                  width: 38px;
                                  height: 38px;
                                  object-fit: cover;
                                " />
                                                </div>
                                                <!-- input -->
                                                <input type="text" class="form-control border-0 rounded-pill bg-gray" placeholder="Write a comment" />
                                            </form>
                                            <!-- end -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end -->
                        </div>
                    </div>
                </div>
                <!-- Posts -->

            <?php
            }

            ?>


        </div>
    </div>

    </div>
    </div>

    <div class="fixed-bottom right-100 p-3" style="z-index: 6; left: initial" type="button" data-bs-toggle="modal" data-bs-target="#newChat">
        <i class="fas fa-edit bg-white rounded-circle p-3 shadow"></i>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="./main.js"></script>
</body>

<?php

} else {
    ?>

    <h1 style="align-items: center; text-align: center;">
    <b style="color: blue;">You are Not a Valid User</b>
    </h1>
    
    
    <?php

    echo $_SESSION["user"]["email"] ;

}

?>

</html>