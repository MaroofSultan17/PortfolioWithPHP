<?php
include ("./library/variables.php");
$pageIndex = 'blog';
?>


<!Doctype html>
<html class="no-js" lang="en">



<head>
    <title>Blog |
        <?php echo constant('siteTitle'); ?>
    </title>
    <!-- Meta Info -->
    <?php require ("./component/metainfo.php"); ?>

    <!-- CSS Files -->
    <?php require ("./component/css.php"); ?>
</head>

<body>

    <div class="page-wrapper home-3" data-background="assets/img/bg/page-bg-1.jpg">

        <!-- PRELOADER -->
        <div id="preloader">
            <div class="loader_line"></div>
        </div>
        <!-- /PRELOADER -->

        <!-- header-start -->
        <?php require ("./component/header.php"); ?>

        <!-- header-end -->


        <div class="container z-index-3">
            <div class="row">

                <!-- parsonal-info-start -->
                <?php require ("./component/personalinfo.php"); ?>

                <!-- personal-info-end -->

                <!-- about-page-start -->
                <div class="col-xxl-8 col-xl-8 col-lg-8">

                    <!-- main-menu-start -->
                    <!-- <div class="text-right">
                        <div class="bostami-main-menu-wrap">
                            <nav class="bastami-main-menu main_menu_3">
                                <ul>
                                    <li>
                                        <a href="index.php">
                                            <span>
                                                <i class="fa-light fa-address-card"></i>
                                            </span>
                                            about
                                        </a>
                                    </li>
                                    <li>
                                        <a href="resume.php">
                                            <span>
                                                <i class="fa-light fa-file-user"></i>
                                            </span>
                                            Resume
                                        </a>
                                    </li>
                                    <li>
                                        <a href="portfolio.php">
                                            <span>
                                                <i class="fa-light fa-briefcase"></i>
                                            </span>
                                            Works
                                        </a>
                                    </li>
                                    <li class="active">
                                        <a href="blog.php">
                                            <span>
                                                <i class="fa-light fa-newspaper"></i>
                                            </span>
                                            Blogs
                                        </a>
                                    </li>
                                    <li>
                                        <a href="contact.php">
                                            <span>
                                                <i class="fa-light fa-address-book"></i>
                                            </span>
                                            contact
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div> -->
                    <?php require ('./component/navbar.php'); ?>
                    <!-- main-menu-end -->

                    <div class="bostami-page-content-wrap">

                        <!-- page title -->
                        <div class="section-wrapper pl-60 pr-60 pt-60">
                            <div class="bostami-page-title-wrap mb-15">
                                <h2 class="page-title">blogs</h2>
                            </div>
                        </div>


                        <div class="section-wrapper pr-60 pl-60 mb-60">

                            <!-- blog slider -->
                            <div class="blog-slider-wrap">
                                <div class="swiper-container blog-slider-active">
                                    <div class="swiper-wrapper">

                                        <!-- single slider -->
                                        <div class="swiper-slide">
                                            <div class="row">

                                                <!-- single blog -->
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="blog-slider-single bg-prink">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#h1-blog-1"
                                                            class="img">
                                                            <img src="assets/img/blog/blog-img-1.png" alt="">
                                                        </a>
                                                        <div class="blog-meta">
                                                            <span class="blog-date">27 April</span>
                                                            <span class="blog-cetagory">Inspiration</span>
                                                        </div>
                                                        <h6 class="blog-title">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#h1-blog-1">How to Own Your Audience by
                                                                Creating an Email List.</a>
                                                        </h6>
                                                    </div>
                                                </div>

                                                <!-- single blog -->
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="blog-slider-single bg-catkrill">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#h1-blog-1"
                                                            class="img">
                                                            <img src="assets/img/blog/blog-img-2.png" alt="">
                                                        </a>
                                                        <div class="blog-meta">
                                                            <span class="blog-date">06 october</span>
                                                            <span class="blog-cetagory">web design</span>
                                                        </div>
                                                        <h6 class="blog-title">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#h1-blog-1">the window know to
                                                                say beside you</a>
                                                        </h6>
                                                    </div>
                                                </div>

                                                <!-- single blog -->
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="blog-slider-single bg-catkrill">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#h1-blog-1"
                                                            class="img">
                                                            <img src="assets/img/blog/blog-img-3.png" alt="">
                                                        </a>
                                                        <div class="blog-meta">
                                                            <span class="blog-date">12 March</span>
                                                            <span class="blog-cetagory">Travel Landing</span>
                                                        </div>
                                                        <h6 class="blog-title">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#h1-blog-1">Everything You Need to Know
                                                                About Web Accessibility.</a>
                                                        </h6>
                                                    </div>
                                                </div>

                                                <!-- single blog -->
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="blog-slider-single bg-prink">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#h1-blog-1"
                                                            class="img">
                                                            <img src="assets/img/blog/blog-img-4.png" alt="">
                                                        </a>
                                                        <div class="blog-meta">
                                                            <span class="blog-date">15 november</span>
                                                            <span class="blog-cetagory">webdesign</span>
                                                        </div>
                                                        <h6 class="blog-title">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#h1-blog-1">Top 10 Toolkits for Deep
                                                                Learning
                                                                in 2021.</a>
                                                        </h6>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                        <!-- single slider -->
                                        <div class="swiper-slide">
                                            <div class="row">

                                                <!-- single blog -->
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="blog-slider-single bg-prink">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#h1-blog-1"
                                                            class="img">
                                                            <img src="assets/img/blog/blog-img-1.png" alt="">
                                                        </a>
                                                        <div class="blog-meta">
                                                            <span class="blog-date">27 April</span>
                                                            <span class="blog-cetagory">Inspiration</span>
                                                        </div>
                                                        <h6 class="blog-title">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#h1-blog-1">How to Own Your Audience by
                                                                Creating an Email List.</a>
                                                        </h6>
                                                    </div>
                                                </div>

                                                <!-- single blog -->
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="blog-slider-single bg-catkrill">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#h1-blog-1"
                                                            class="img">
                                                            <img src="assets/img/blog/blog-img-2.png" alt="">
                                                        </a>
                                                        <div class="blog-meta">
                                                            <span class="blog-date">06 october</span>
                                                            <span class="blog-cetagory">web design</span>
                                                        </div>
                                                        <h6 class="blog-title">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#h1-blog-1">the window know to
                                                                say beside you</a>
                                                        </h6>
                                                    </div>
                                                </div>

                                                <!-- single blog -->
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="blog-slider-single bg-catkrill">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#h1-blog-1"
                                                            class="img">
                                                            <img src="assets/img/blog/blog-img-3.png" alt="">
                                                        </a>
                                                        <div class="blog-meta">
                                                            <span class="blog-date">12 March</span>
                                                            <span class="blog-cetagory">Travel Landing</span>
                                                        </div>
                                                        <h6 class="blog-title">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#h1-blog-1">Everything You Need to Know
                                                                About Web Accessibility.</a>
                                                        </h6>
                                                    </div>
                                                </div>

                                                <!-- single blog -->
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="blog-slider-single bg-prink">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#h1-blog-1"
                                                            class="img">
                                                            <img src="assets/img/blog/blog-img-4.png" alt="">
                                                        </a>
                                                        <div class="blog-meta">
                                                            <span class="blog-date">15 november</span>
                                                            <span class="blog-cetagory">webdesign</span>
                                                        </div>
                                                        <h6 class="blog-title">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#h1-blog-1">Top 10 Toolkits for Deep
                                                                Learning
                                                                in 2021.</a>
                                                        </h6>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                        <!-- single slider -->
                                        <div class="swiper-slide">
                                            <div class="row">

                                                <!-- single blog -->
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="blog-slider-single bg-prink">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#h1-blog-1"
                                                            class="img">
                                                            <img src="assets/img/blog/blog-img-1.png" alt="">
                                                        </a>
                                                        <div class="blog-meta">
                                                            <span class="blog-date">27 April</span>
                                                            <span class="blog-cetagory">Inspiration</span>
                                                        </div>
                                                        <h6 class="blog-title">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#h1-blog-1">How to Own Your Audience by
                                                                Creating an Email List.</a>
                                                        </h6>
                                                    </div>
                                                </div>

                                                <!-- single blog -->
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="blog-slider-single bg-catkrill">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#h1-blog-1"
                                                            class="img">
                                                            <img src="assets/img/blog/blog-img-2.png" alt="">
                                                        </a>
                                                        <div class="blog-meta">
                                                            <span class="blog-date">06 october</span>
                                                            <span class="blog-cetagory">web design</span>
                                                        </div>
                                                        <h6 class="blog-title">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#h1-blog-1">the window know to
                                                                say beside you</a>
                                                        </h6>
                                                    </div>
                                                </div>

                                                <!-- single blog -->
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="blog-slider-single bg-catkrill">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#h1-blog-1"
                                                            class="img">
                                                            <img src="assets/img/blog/blog-img-3.png" alt="">
                                                        </a>
                                                        <div class="blog-meta">
                                                            <span class="blog-date">12 March</span>
                                                            <span class="blog-cetagory">Travel Landing</span>
                                                        </div>
                                                        <h6 class="blog-title">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#h1-blog-1">Everything You Need to Know
                                                                About Web Accessibility.</a>
                                                        </h6>
                                                    </div>
                                                </div>

                                                <!-- single blog -->
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="blog-slider-single bg-prink">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#h1-blog-1"
                                                            class="img">
                                                            <img src="assets/img/blog/blog-img-4.png" alt="">
                                                        </a>
                                                        <div class="blog-meta">
                                                            <span class="blog-date">15 november</span>
                                                            <span class="blog-cetagory">webdesign</span>
                                                        </div>
                                                        <h6 class="blog-title">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#h1-blog-1">Top 10 Toolkits for Deep
                                                                Learning
                                                                in 2021.</a>
                                                        </h6>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="blog-progation"></div>
                                </div>
                            </div>

                        </div>

                        <!-- footer copyright -->
                        <?php require ("./component/footer.php"); ?>

                    </div>


                </div>
                <!-- about-page-end -->

            </div>


        </div>


        <!-- blog-modal-start -->

        <div class="modal h1-modal-box fade" id="h1-blog-1" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal">
                            <i class="far fa-times"></i>
                        </button>
                    </div>

                    <div class="modal-body">

                        <div class="h1-modal-img">
                            <img src="assets/img/blog/modal-img-1.jpg" alt="">
                        </div>

                        <div class="blog-meta">
                            <span class="blog-date">27 April</span>
                            <span class="blog-cetagory">Inspiration</span>
                        </div>

                        <h6 class="blog-title">
                            How to Own Your Audience by
                            Creating an Email List.
                        </h6>

                        <div class="h1-modal-paragraph">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga consequatur delectus porro
                                sapiente molestias, magni quasi sed, enim corporis omnis doloremque soluta inventore
                                dolorum conseqr quo obcaecati rerum sit non. Lorem ipsum dolor, sit amet consectetur
                                adipisicing elit. Fuga consequatur delectus porro sapiente molestias, magni quasi sed,
                                enim corporis omnis doloremque soluta inventore dolorum consequuntur quo obcaecati rerum
                                sit non.</p>

                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga consequatur delectus porro
                                sapiente molestias, magni quasi sed, enim corporis omnis doloremque soluta inventore
                                dolorum consetur quo obcaecati rerum sit non. Lorem ipsum dolor, sit amet consectetur
                                adipisicing elit. Fuga consequatur delectus porro sapiente molestias, magni quasi sed,
                                sit amet consectetur adipisicing elit. Fuga consequatur delectus porro sapiente
                                molestias, magni quasi sed, enim corporis omnis doloremque soluta inventore dolorum
                                consequuntur.</p>

                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga consequatur delectus porro
                                sapiente molestias, magni quasi sed, enim corporis omnis doloremque soluta inventore
                                dolorum consequuntur quo obcaecati rerum sit non.</p>
                        </div>

                        <div class="h1-modal-comment-item">
                            <div class="img">
                                <img src="assets/img/parsonal-info/parson-img-2.png" alt="">
                            </div>
                            <div class="content">
                                <div class="name-date">
                                    <h5 class="name">Rafia Ana</h5>
                                    <span class="date">15 min ago</span>
                                </div>
                                <p class="comment-text">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi nam ad, unde vel aut
                                    soluta atque consequatur. Omnis, debitis nihil?
                                </p>
                                <a class="reply-btn" href="#">Reply</a>
                            </div>
                        </div>

                        <div class="h1-modal-comment-box">
                            <h2 class="title">Leave a Reply</h2>
                            <textarea cols="30" rows="10" placeholder="write comment"></textarea>
                            <button>comment</button>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <!-- blog-modal-end -->


    </div>

    <?php include ("./component/jsscript.php"); ?>

</body>



</html>