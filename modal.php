<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> HelpHub</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>

<body>

    <div class="col-12">
        <div class="row">

            <div class="col-12">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" onclick="showmodel();">
                    Launch demo modal
                </button>

                <?php
                require "./connection.php";
                ?>

                <!-- Modal -->

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
                                                        <img src="resources/images/post_images/photo.jpeg" onclick="window.location='userprofile.php'" ; class="img p-2  bg-white ">
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
                                                        <img src="resources/images/post_images/add_image.png" class="card-img-top " id="i0">
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

                <script src="bootstrap.bundle.js"></script>
                <script src="bootstrap.js"></script>
                <script src="script.js"></script>
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>