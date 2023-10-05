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
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Launch demo modal
                </button>

                <!-- Modal -->
                <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                <input class="form-control mt-3  txt " placeholder="What's on Your mind? Sahan" type="text">
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
                                                                <div >
                                                                    <input type="file" class="d-none" id="imageuploader"  />
                                                                    <label for="imageuploader" class="btn btn-light button d-flex flex-row align-items-center justify-content-center" onclick="changeProductImage();"><i class="bi bi-images fs-2" style="color: green;"></i></label>
                                                                </div>
                                                                <button class="btn btn-light me-md-2 button d-flex flex-row align-items-center justify-content-center" type="button"><i class="bi bi-tags-fill fs-2" style="color: blue;"></i></button>
                                                                <button class="btn btn-light me-md-2 button d-flex flex-row align-items-center justify-content-center" type="button"><i class="bi bi-grid fs-2" style="color: red;"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="row">
                                                <div class="d-grid mt-4 mb-4">
                                                    <button class="btn " style="background-color: #f5683d;" type="button">POST</button>

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
    </div>

    <script src="bootstrap.bundle.js"></script>
    <script src="bootstrap.js"></script>
    <script src="script.js"></script>
</body>