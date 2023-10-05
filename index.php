<?php
require "connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tech Crush blog posts about programming & development</title>
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="icon" href="resources/images/icon.png" />
</head>

<body class="m-0 p-0">
    <div class="container-fluid p-0 m-0 main">
        <div class="row d-flex flex-row justify-content-center p-0 m-0 full-wrapper">
            <!-- Main header -->
            <section class="col-12 pb-5 position-relative overflow-hidden">
                <div class="row ps-1 ps-md-2 ps-lg-5 pe-1 pe-md-2 pe-lg-5 pt-3 pb-3">
                    <div class="col-12 d-flex flex-row justify-content-between pt-3" style="z-index: 2;">
                        <button class="bg-transparent border-0" onclick="window.location='index.php';">
                            <div class="d-flex flex-row">
                                <img src="resources/images/icon.png" class="my-auto" style="height: 60px;" />
                                <h1 class="header-sec1 my-auto ms-3">Tech</h1><span class="fs-1 header-sec2 my-auto">&nbsp;C</span><span class="fs-1 my-auto header-sec3">rush</span>
                            </div>
                        </button>
                        <div class="my-auto d-flex flex-row">
                            <nav class="navbar">
                                <ul class="list-group list-unstyled list-group-horizontal border-0">
                                    <a href="https://twitter.com/DulanjayaBhanu" class="list-group-item fs-5 border-0 bg-transparent text-decoration-none def-link d-none d-md-block d-lg-block">Twitter</a>
                                    <a href="#" class="fs-5 bg-transparent text-decoration-none def-btn def-btn-green my-auto ps-3 pe-3 pt-2 pb-2">Subscribe</a>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12 mt-5 mb-5" style="z-index: 2;">
                        <div class="row">
                            <div class="col-12 pt-2 d-flex flex-row">
                                <span class="header-sec3 fs-1"><i class="bi bi-caret-right-fill header-sec3 fs-2"></i>Your <span class="header-sec2 fs-1">mind</span> is programmable - if you're <span class="header-sec2 fs-1">not</span> programming <br />your mind, else will program it <span class="header-sec1 fs-1 text-animation">for you</span><span class="fs-1 header-sec3 ">.</span></span>
                            </div>
                            <div class="col-12 mt-3 mb-5">
                                <span class="fs-4 nr-text">If you like what you see in this blog, buy me a coffee!</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-cover">
                    <img src="resources/images/4.png" class="header-img" alt="" />
                </div>
            </section>
            <!-- Main header -->
            <!-- Section -->
            <section class="col-12 d-none d-md-block d-lg-block">
                <div class="row ps-1 ps-md-2 ps-lg-5 pe-1 pe-md-2 pe-lg-5 pt-5 pb-3">
                    <div class="col-12">
                        <h3 class="header-sec4">Top Articles</h3>
                    </div>
                    <div class="col-12 mt-1">
                        <div class="row">
                            <!-- Top-artical-card -->
                            <div class="col-12 col-md-6 col-lg-3 pt-3 ps-2 pe-2">
                                <div class="def-card p-3" onclick="window.location='post.php?pstId=2'" ;>
                                    <div class="row g-3">
                                        <div class="col-md-4 d-flex flex-row justify-content-center align-items-start">
                                            <img src="resources/images/artical_images/4.jpg" class="img-fluid" style="border-radius: 24px;height: 70px;" />
                                        </div>
                                        <div class="col-md-8 d-flex flex-row align-items-start">
                                            <div class="card-body d-flex flex-column">
                                                <div style="height: 48px;word-wrap: break-word;overflow: hidden;text-overflow: ellipsis;">
                                                    <h6 class="card-title header-sec4">8 Ways To Supercharge Your Alt Text SEO Strategy</h6>
                                                </div>
                                                <div class="col-12 mt-1">
                                                    <span class="header-sec2 text-decoration-none"><i class="bi bi-eye header-sec2"></i> Read Artical</span>
                                                </div>
                                                <p class="card-text"><small class="text-muted">Published on July 19, 2023</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Top-artical-card -->
                            <!-- Top-artical-card -->
                            <div class="col-12 col-md-6 col-lg-3 pt-3 ps-2 pe-2">
                                <div class="def-card p-3" onclick="window.location='post.php?pstId=3';">
                                    <div class="row g-3">
                                        <div class="col-md-4 d-flex flex-row justify-content-center align-items-start">
                                            <img src="resources/images/artical_images/5.jpg" class="img-fluid" style="border-radius: 24px;height: 70px;" />
                                        </div>
                                        <div class="col-md-8 d-flex flex-row align-items-start">
                                            <div class="card-body d-flex flex-column">
                                                <div style="height: 48px;word-wrap: break-word;overflow: hidden;text-overflow: ellipsis;">
                                                    <h6 class="card-title header-sec4">AJAX (Asynchronous JavaScript And XML)</h6>
                                                </div>
                                                <div class="col-12 mt-1">
                                                    <span class="header-sec2 text-decoration-none"><i class="bi bi-eye header-sec2"></i> Read Artical</span>
                                                </div>
                                                <p class="card-text"><small class="text-muted">Published on July 20, 2023</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Top-artical-card -->
                            <!-- Top-artical-card -->
                            <div class="col-12 col-md-6 col-lg-3 pt-3 ps-2 pe-2">
                                <div class="def-card p-3" onclick="window.location='post.php?pstId=1'" ;>
                                    <div class="row g-3">
                                        <div class="col-md-4 d-flex flex-row justify-content-center align-items-start">
                                            <img src="resources/images/artical_images/2.jpg" class="img-fluid" style="border-radius: 24px;height: 70px;" />
                                        </div>
                                        <div class="col-md-8 d-flex flex-row align-items-start">
                                            <div class="card-body d-flex flex-column">
                                                <div style="height: 48px;word-wrap: break-word;overflow: hidden;text-overflow: ellipsis;">
                                                    <h6 class="card-title header-sec4">Introduction of HTML (Hypertext Markup Language)</h6>
                                                </div>
                                                <div class="col-12 mt-1">
                                                    <span class="header-sec2 text-decoration-none"><i class="bi bi-eye header-sec2"></i> Read Artical</span>
                                                </div>
                                                <p class="card-text"><small class="text-muted">Published on July 19, 2023</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Top-artical-card -->
                            <!-- Top-artical-card -->
                            <div class="col-12 col-md-6 col-lg-3 pt-3 ps-2 pe-2">
                                <div class="def-card p-3" onclick="window.location='post.php?pstId=3';">
                                    <div class="row g-3">
                                        <div class="col-md-4 d-flex flex-row justify-content-center align-items-start">
                                            <img src="resources/images/artical_images/7.jpg" class="img-fluid" style="border-radius: 24px;height: 70px;" />
                                        </div>
                                        <div class="col-md-8 d-flex flex-row align-items-start">
                                            <div class="card-body d-flex flex-column">
                                                <div style="height: 48px;word-wrap: break-word;overflow: hidden;text-overflow: ellipsis;">
                                                    <h6 class="card-title header-sec4">These Are The Best Frameworks For Full-stack Developers In 2023</h6>
                                                </div>
                                                <div class="col-12 mt-1">
                                                    <span class="header-sec2 text-decoration-none"><i class="bi bi-eye header-sec2"></i> Read Artical</span>
                                                </div>
                                                <p class="card-text"><small class="text-muted">Published on July 20, 2023</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Top-artical-card -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section -->
            <!-- Section -->
            <section class="col-12 mt-5">
                <div class="row ps-1 ps-md-2 ps-lg-5 pe-1 pe-md-2 pe-lg-5 pt-3 pb-3">
                    <div class="col-12 col-md-12 col-lg-6">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="header-sec4">Categories</h3>
                            </div>
                            <div class="col-12 text-center text-md-start text-lg-start mt-1 pe-3">
                                <button class="def-category-btn ps-3 pe-3 pt-2 pb-2 mt-2">HTML</button>
                                <button class="def-category-btn ps-3 pe-3 pt-2 pb-2 mt-2">CSS</button>
                                <button class="def-category-btn ps-3 pe-3 pt-2 pb-2 mt-2">JavaScript</button>
                                <button class="def-category-btn ps-3 pe-3 pt-2 pb-2 mt-2">PHP</button>
                                <button class="def-category-btn ps-3 pe-3 pt-2 pb-2 mt-2">MySQL</button>
                                <button class="def-category-btn ps-3 pe-3 pt-2 pb-2 mt-2">React Native</button>
                                <button class="def-category-btn ps-3 pe-3 pt-2 pb-2 mt-2">API</button>
                                <button class="def-category-btn ps-3 pe-3 pt-2 pb-2 mt-2">Tech Industry</button>
                                <button class="def-category-btn ps-3 pe-3 pt-2 pb-2 mt-2">Tools</button>
                                <button class="def-category-btn ps-3 pe-3 pt-2 pb-2 mt-2">AJAX</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6 mt-5 mt-md-5 mt-lg-0">
                        <div class="col-12">
                            <h3 class="header-sec4">Recomended Blogs</h3>
                        </div>
                        <div class="col-12 pt-3">
                            <div class="row">
                                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner" style="border-radius: 24px;">
                                        <!-- Blog card -->
                                        <div class="carousel-item active" data-bs-interval="5000">
                                            <div class="def-card3 card-animation p-4" onclick="window.location='https://www.bytesizedpieces.com/';">
                                                <div class="col-12">
                                                    <div class="row">
                                                        <div class="col-4 col-md-5 col-lg-4 d-flex flex-row justify-content-center align-items-start">
                                                            <img src="resources/images/rec_blog_images/1.svg" class="img-fluid w-100 bgsucces" style="border-radius: 24px;height: 150px;" />
                                                        </div>
                                                        <div class="col-8 col-md-7 col-lg-8">
                                                            <h5 class="header-sec4">ByteSizedPieces</h5>
                                                            <div class="card-body d-flex flex-column mt-4">
                                                                <div>
                                                                    <p>Get the inside scoop on web development, interview preparation, career development, SEO, and best tools!</p>
                                                                </div>
                                                                <div class="d-flex flex-column gap-2">
                                                                    <div>
                                                                        <span class="header-sec4 my-auto">Owner : </span><span class="def-category-btn3 ps-3 pe-3 pt-1 pb-1 my-auto">Stefana Gloginic</span>
                                                                    </div>
                                                                    <div>
                                                                        <button class="def-category-btn4 ps-3 pe-3 pt-1 pb-1"><i class="bi bi-person header-sec4"></i> Senior Software Engineer</button>
                                                                    </div>
                                                                </div>
                                                                <span class="card-text mt-2"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Blog card -->
                                        <!-- Blog card -->
                                        <div class="carousel-item" data-bs-interval="5000">
                                            <div class="def-card3 card-animation p-4" onclick="window.location='https://www.bytesizedpieces.com/';">
                                                <div class="col-12">
                                                    <div class="row">
                                                        <div class="col-4 col-md-5 col-lg-4 d-flex flex-row justify-content-center align-items-start">
                                                            <img src="resources/images/rec_blog_images/1.svg" class="img-fluid w-100 bgsucces" style="border-radius: 24px;height: 150px;" />
                                                        </div>
                                                        <div class="col-8 col-md-7 col-lg-8">
                                                            <h5 class="header-sec4">ByteSizedPieces</h5>
                                                            <div class="card-body d-flex flex-column mt-4">
                                                                <div>
                                                                    <p>Get the inside scoop on web development, interview preparation, career development, SEO, and best tools!</p>
                                                                </div>
                                                                <div class="d-flex flex-column gap-2">
                                                                    <div>
                                                                        <span class="header-sec4 my-auto">Owner : </span><span class="def-category-btn3 ps-3 pe-3 pt-1 pb-1 my-auto">Stefana Gloginic</span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="def-category-btn4 ps-3 pe-3 pt-1 pb-1"><i class="bi bi-person header-sec4"></i> Senior Software Engineer</span>
                                                                    </div>
                                                                </div>
                                                                <span class="card-text mt-2"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Blog card -->
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                                        <div class="def-btn def-btn-orange d-flex flex-row justify-content-center align-items-center p-2">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        </div>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                                        <div class="def-btn def-btn-orange d-flex flex-row justify-content-center align-items-center p-2">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section -->
            <!-- Section -->
            <section class="col-12 mt-5 mb-3">
                <div class="row ps-1 ps-md-2 ps-lg-5 pe-1 pe-md-2 pe-lg-5 pt-3 pb-3">
                    <!-- Artical-card -->
                    <div class="col-12 col-md-6 col-lg-6 p-3">
                        <div class="def-card2 p-4" onclick="window.location='post.php?pstId=2'" ;>
                            <div class="row g-3">
                                <div class="col-md-12 d-flex flex-row justify-content-center align-items-center">
                                    <img src="resources/images/artical_images/4.jpg" class="img-fluid w-100 bgsucces" style="border-radius: 24px;height: 300px;" />
                                </div>
                                <div class="col-md-12 d-flex flex-row align-items-center">
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="header-sec4">8 Ways To Supercharge Your Alt Text SEO Strategy</h5>
                                        <p class="card-text"><small class="text-muted">Published on July 19, 2023</small></p>
                                        <div class="d-flex flex-row gap-2">
                                            <span class="category-btn-mod def-category-btn ps-3 pe-3 pt-1 pb-1">SEO</span>
                                            <span class="category-btn-mod def-category-btn2 ps-3 pe-3 pt-1 pb-1"><i class="bi bi-person header-sec3"></i> Dulanjaya Bhanu</span>
                                        </div>
                                        <span class="card-text mt-2">Alt text. You know it&apos;s important for SEO. In fact, Google has stated that alt text is a ranking factor. And with the increasing rise of visual search, describing your images for web crawlers has taken on even more importance. But beyond a short sentence describing the image, how do you make your alt text even better? Truth is, alt text is like any other part of SEO - it benefits from strategy. This should be a strategy that not only makes your alt text more effective but also makes creating alt....<span class="btn border-0 header-sec2 text-decoration-none p-0 m-0">&nbsp;<i class="bi bi-eye header-sec2"></i> Read Artical</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Artical-card -->
                    <!-- Artical-card -->
                    <div class="col-12 col-md-6 col-lg-6 p-3">
                        <div class="def-card2 p-4" onclick="window.location='post.php?pstId=3';">
                            <div class="row g-3">
                                <div class="col-md-12 d-flex flex-row justify-content-center align-items-center">
                                    <img src="resources/images/artical_images/5.jpg" class="img-fluid w-100 bgsucces" style="border-radius: 24px;height: 300px;" />
                                </div>
                                <div class="col-md-12 d-flex flex-row align-items-center">
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="header-sec4">AJAX (Asynchronous JavaScript And XML)</h5>
                                        <p class="card-text"><small class="text-muted">Published on July 20, 2023</small></p>
                                        <div class="d-flex flex-row gap-2">
                                            <span class="category-btn-mod def-category-btn ps-3 pe-3 pt-1 pb-1">AJAX</span>
                                            <span class="category-btn-mod def-category-btn2 ps-3 pe-3 pt-1 pb-1"><i class="bi bi-person header-sec3"></i> Dulanjaya Bhanu</span>
                                        </div>
                                        <span class="card-text mt-2">The AJAX method uses a combination of technologies that allow the content on webpages to update immediately based on a user's action, which may be a click on a page or even a simple mouse movement. Just one or a few parts of the page may be refreshed, instead of reloading or refreshing the entire page. This differentiates AJAX from an HTTP request, during which users must wait for a whole new page to load. AJAX can also access data from external sources even after a webpage has loaded completely....<span class="btn border-0 header-sec2 text-decoration-none p-0 m-0">&nbsp;<i class="bi bi-eye header-sec2"></i> Read Artical</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Artical-card -->
                    <!-- Artical-card -->
                    <div class="col-12 col-md-6 col-lg-6 p-3">
                        <div class="def-card2 p-4" onclick="window.location='post.php?pstId=4';">
                            <div class="row g-3">
                                <div class="col-md-12 d-flex flex-row justify-content-center align-items-center">
                                    <img src="resources/images/artical_images/7.jpg" class="img-fluid w-100 bgsucces" style="border-radius: 24px;height: 300px;" />
                                </div>
                                <div class="col-md-12 d-flex flex-row align-items-center">
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="header-sec4">These Are The Best Frameworks For Full-stack Developers In 2023</h5>
                                        <p class="card-text"><small class="text-muted">Published on July 20, 2023</small></p>
                                        <div class="d-flex flex-row gap-2">
                                            <span class="category-btn-mod def-category-btn ps-3 pe-3 pt-1 pb-1">Tech Industry</span>
                                            <span class="category-btn-mod def-category-btn2 ps-3 pe-3 pt-1 pb-1"><i class="bi bi-person header-sec3"></i> Dulanjaya Bhanu</span>
                                        </div>
                                        <span class="card-text mt-2">This article was originally published on .Cult by Luis Minvielle. .Cult is a Berlin-based community platform for developers. We write about all things career-related, make original documentaries, and share heaps of other untold developer stories from around the world.

                                            Remember when you first saw a Hollywood-imagined IRL developer, furiously typing lines of code while ominous music played in the background? Little did you know that one day you’d become a full-stack developer....<span class="btn border-0 header-sec2 text-decoration-none p-0 m-0">&nbsp;<i class="bi bi-eye header-sec2"></i> Read Artical</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Artical-card -->
                    <!-- Artical-card -->
                    <div class="col-12 col-md-6 col-lg-6 p-3">
                        <div class="def-card2 p-4" onclick="window.location='post.php?pstId=1'" ;>
                            <div class="row g-3">
                                <div class="col-md-12 d-flex flex-row justify-content-center align-items-center">
                                    <img src="resources/images/artical_images/2.jpg" class="img-fluid w-100 bgsucces" style="border-radius: 24px;height: 300px;" />
                                </div>
                                <div class="col-md-12 d-flex flex-row align-items-center">
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="header-sec4">Introduction of HTML (Hypertext Markup Language)</h5>
                                        <p class="card-text"><small class="text-muted">Published on July 19, 2023</small></p>
                                        <div class="d-flex flex-row gap-2">
                                            <span class="category-btn-mod def-category-btn ps-3 pe-3 pt-1 pb-1">HTML</span>
                                            <span class="category-btn-mod def-category-btn2 ps-3 pe-3 pt-1 pb-1"><i class="bi bi-person header-sec3"></i> Dulanjaya Bhanu</span>
                                        </div>
                                        <span class="card-text mt-2">HTML (Hypertext Markup Language) is a text-based approach to describing how content contained within an HTML file is structured. This markup tells a web browser how to display text, images and other forms of multimedia on a webpage.HTML is a formal recommendation by the World Wide Web Consortium (W3C) and is generally adhered to by all major web browsers, including both desktop and mobile web browsers. HTML5 is the latest version of the specification...<span class="btn border-0 header-sec2 text-decoration-none p-0 m-0">&nbsp;<i class="bi bi-eye header-sec2"></i> Read Artical</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Artical-card -->
                </div>
            </section>
            <!-- Section -->
            <!-- Section -->
            <section class="col-12 mb-3">
                <div class="row ps-1 ps-md-2 ps-lg-5 pe-1 pe-md-2 pe-lg-5 pt-3 pb-3">
                    <div class="col-12 text-center pt-5">
                        <h1>Join our newsletter to read delightful </br><span class="fs-1 header-sec1 my-auto">Tech</span><span class="fs-1 header-sec2 my-auto">&nbsp;C</span><span class="fs-1 my-auto header-sec4">rush</span> every SunDay!</h1>
                    </div>
                    <div class="col-12 text-center mt-3">
                        <span class="text-muted">This newsletter will keep you up to date with <span class="header-sec2">Tech Cruch</span> releases. Get the inside scoop on <br />web development, interview preparation, career development, SEO, and best tools!</span>
                    </div>
                    <div class="col-12 d-flex flex-row justify-content-center mt-5">
                        <div class="row col-12 col-md-10 col-lg-8 d-flex flex-row justify-content-center g-3">
                            <div class="col-12 col-md-4 col-lg-4">
                                <input type="text" class="def-input w-100 ps-4 pe-4 pt-3 pb-3" placeholder="Name" />
                            </div>
                            <div class="col-12 col-md-4 col-lg-4">
                                <input type="text" class="def-input def-input2 w-100 ps-4 pe-4 pt-3 pb-3" placeholder="Email" />
                            </div>
                            <div class="col-12 col-md-4 col-lg-4 text-center d-flex flex-row justify-content-start">
                                <button class="d-grid def-btn def-btn-green w-100 my-auto ps-4 pe-4 pt-3 pb-3">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section -->
            <!-- Main footer -->
            <footer class="col-12 mt-5 pb-4 position-relative overflow-hidden">
                <div class="row ps-1 ps-md-2 ps-lg-5 pe-1 pe-md-2 pe-lg-5 pt-3">
                    <div class="col-12 mt-5" style="z-index: 2;">
                        <div class="row">
                            <button class="bg-transparent border-0" onclick="window.location='index.php';">
                                <div class="d-flex flex-row">
                                    <img src="resources/images/icon.png" class="my-auto" style="height: 60px;" />
                                    <h1 class="header-sec1 my-auto ms-3">Tech</h1><span class="fs-1 header-sec2 my-auto">&nbsp;C</span><span class="fs-1 my-auto header-sec3">rush</span>
                                </div>
                            </button>
                            <div class="col-12 mt-5">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-6 mb-5 mb-md-0 mb-lg-0">
                                        <div class="d-flex flex-row gap-5">
                                            <div>
                                                <h4 class="nr-text">Categories</h4>
                                                <div class="col-12 d-flex flex-row gap-3 pt-3">
                                                    <ul class="list-group list-unstyled">
                                                        <li class="list-item"><a href="#" class="text-decoration-none def-link def-link2">HTML</a></li>
                                                        <li class="list-item"><a href="#" class="text-decoration-none def-link def-link2">CSS</a></li>
                                                        <li class="list-item"><a href="#" class="text-decoration-none def-link def-link2">JavaScript</a></li>
                                                        <li class="list-item"><a href="#" class="text-decoration-none def-link def-link2">PHP</a></li>
                                                        <li class="list-item"><a href="#" class="text-decoration-none def-link def-link2">MySQL</a></li>
                                                        <li class="list-item"><a href="#" class="text-decoration-none def-link def-link2">React Native</a></li>
                                                        <li class="list-item"><a href="#" class="text-decoration-none def-link def-link2">MySQL</a></li>
                                                    </ul>
                                                    <ul class="list-group list-unstyled">
                                                        <li class="list-item"><a href="#" class="text-decoration-none def-link def-link2">API</a></li>
                                                        <li class="list-item"><a href="#" class="text-decoration-none def-link def-link2">Tech Industry</a></li>
                                                        <li class="list-item"><a href="#" class="text-decoration-none def-link def-link2">Tools</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div>
                                                <h4 class="nr-text">Links</h4>
                                                <div class="col-12 d-flex flex-row gap-3 pt-3">
                                                    <ul class="list-group list-unstyled">
                                                        <li class="list-item"><a href="https://twitter.com/DulanjayaBhanu" class="text-decoration-none def-link def-link2">Twitter</a></li>
                                                        <li class="list-item"><a href="#" class="text-decoration-none def-link def-link2">FaceBook</a></li>
                                                        <li class="list-item"><a href="#" class="text-decoration-none def-link def-link2">LinkedIn</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-6 d-flex flex-row justify-content-center justify-content-md-end justify-content-lg-end align-items-end">
                                        <span class="nr-text">&copy; <?php echo (date("Y")); ?>-Tech Crush. All Rights Reserved.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-cover2"></div>
            </footer>
            <!-- Main footer -->
        </div>
    </div>
    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
</body>

</html>