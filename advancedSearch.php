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
                    Advanced search
                </button>

                <!-- Modal -->
                <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                    <input type="text" class="form-control  border-danger" placeholder="Type Keyword to search.....">
                                                    <span class="input-group-text border-danger" style="cursor: pointer;" id="basic-addon1"><i class="bi bi-search " style="color: gray;"></i></span>
                                                </div>

                                                <div class="d-grid mt-4 mb-3">
                                                    <select class="form-select border-danger" aria-label="Default select example">
                                                        <option selected>Select Category</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="row">
                                                <div class="d-grid mt-4 mb-4">
                                                    <button class="btn " style="background-color: #f5683d;" type="button">Search</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <hr class="border border-3 border-danger" />
                                        </div>

                                        <div class="col-12">
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
            </div>
        </div>

    </div>
    </div>

    <script src="bootstrap.bundle.js"></script>
    <script src="bootstrap.js"></script>
    <script src="script.js"></script>
</body>