<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> HelpHub</title>

    <link rel="stylesheet" href="./bootstrap.css" />
    <link rel="stylesheet" href="./sendstyle.css" />
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

                <!-- Modal -->
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

    </div>
    </div>

    <script src="sendmodel.js"></script>
    <script src="bootstrap.bundle.js"></script>
    <script src="bootstrap.js"></script>
</body>