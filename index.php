<?php include ('./library/variables.php');
$pageIndex = 'home';
?>

<!Doctype html>
<html class="no-js" lang="en">


<head>
    <title>Home |
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
                    <?php require ('./component/navbar.php'); ?>
                    <!-- main-menu-end -->

                    <div class="bostami-page-content-wrap">

                        <!-- page title -->
                        <div class="section-wrapper pl-60 pr-60 pt-60">
                            <div class="bostami-page-title-wrap mb-15">
                                <h2 class="page-title">about</h2>
                                <p style="text-align: justify;">As a web developer deeply rooted in Python and currently
                                    pursuing a Bachelor of
                                    Science in <b>Computer Science at COMSATS
                                        University</b>, I thrive on the dynamic
                                    intersection of technology and creativity. With expertise in both front-end and
                                    back-end development, particularly in PHP and Laravel for backend solutions, I
                                    continuously expand my knowledge through coursework and hands-on projects. Beyond
                                    academia, I remain committed to exploring emerging technologies and contributing to
                                    open-source initiatives, driven by a passion for innovation and a desire to make a
                                    meaningful impact in the digital sphere.
                                </p>
                            </div>
                        </div>

                        <!-- what-do -->
                        <div class="section-wrapper pl-60 pr-60">

                            <div class="bostami-section-title-wrap mt-30 mb-20">
                                <h3 class="section-title">What I do!</h3>
                            </div>

                            <div class="bostami-what-do-wrap mb-30">
                                <div class="row">
                                    <!-- single item -->
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="bostami-what-do-item bg-prink bg-blue">
                                            <div class="icon">
                                                <i class="fa-regular fa-code"></i>
                                            </div>
                                            <div class="text">
                                                <h4 class="title">Web Development</h4>
                                                <p style="text-align: justify;">From front-end design to back-end
                                                    development, I bring a passion for
                                                    innovation and attention to detail to every project, ensuring
                                                    high-quality results that exceed expectations.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- single item -->
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="bostami-what-do-item bg-catkrill">
                                            <div class="icon">
                                                <i class="fa-regular fa-grid-2"></i>
                                            </div>
                                            <div class="text">
                                                <h4 class="title">App Development</h4>
                                                <p style="text-align: justify;">Though a budding app developer, I
                                                    approach each project with
                                                    dedication and a thirst for learning, striving to deliver polished,
                                                    user-friendly mobile experiences.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single item -->
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="bostami-what-do-item  bg-catkrill">
                                            <div class="icon">
                                                <i class="fa-regular fa-camera-retro"></i>
                                            </div>
                                            <div class="text">
                                                <h4 class="title">Photography</h4>
                                                <p style="text-align: justify;">Embracing photography as a passionate
                                                    hobby, I capture moments with creativity and attention to detail,
                                                    constantly seeking to refine my skills and deliver captivating
                                                    visual stories.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single item -->
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="bostami-what-do-item bg-prink">
                                            <div class="icon">
                                                <i class="fa-light fa-swatchbook"></i>
                                            </div>
                                            <div class="text">
                                                <h4 class="title">MS Office</h4>
                                                <p style="text-align: justify;">As a certified Microsoft Office
                                                    professional, I leverage my expertise
                                                    to create comprehensive documentation with precision and clarity,
                                                    ensuring high-quality results that meet and exceed industry
                                                    standards.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <!-- client
                        <div class="section-wrapper bg-light-white-2 pt-45 pb-60 pl-60 pr-60">

                            <div class="bostami-section-title-wrap text-center mb-50">
                                <h3 class="section-title">clinet</h3>
                            </div>

                            <div class="bostami-client-slider">
                                <div class="swiper-container client_slide_active">
                                    <div class="swiper-wrapper">

                                        single item
                                        <div class="swiper-slide">
                                            <img class="bostami-client-slider-logo"
                                                src="assets/img/client/client-logo-1.png" alt="">
                                        </div> 

                                         single item
                                        <div class="swiper-slide">
                                            <img class="bostami-client-slider-logo"
                                                src="assets/img/client/client-logo-2.png" alt="">
                                        </div> 

                                         single item
                                        <div class="swiper-slide">
                                            <img class="bostami-client-slider-logo"
                                                src="assets/img/client/client-logo-3.png" alt="">
                                        </div> 

                                         single item
                                        <div class="swiper-slide">
                                            <img class="bostami-client-slider-logo"
                                                src="assets/img/client/client-logo-4.png" alt="">
                                        </div> 

                                    </div>
                                </div>
                            </div>

                        </div> -->

                        <!-- footer copyright -->
                        <?php require ("./component/footer.php"); ?>

                    </div>
                </div>
                <!-- about-page-end -->

            </div>


        </div>


    </div>

    <?php include ("./component/jsscript.php"); ?>

</body>


</html>