<?php include ('./library/variables.php');
$pageIndex = 'resume';
?>
<!Doctype html>
<html class="no-js" lang="en">


<head>
    <title>Resume |
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

                <!-- resume-page-start -->
                <div class="col-xxl-8 col-xl-8 col-lg-8">

                    <!-- main-menu-start -->
                    <?php require ('./component/navbar.php'); ?>
                    <!-- main-menu-end -->

                    <div class="bostami-page-content-wrap">

                        <!-- page title -->
                        <div class="section-wrapper pl-60 pr-60 pt-60">
                            <div class="bostami-page-title-wrap mb-15">
                                <h2 class="page-title">resume</h2>
                            </div>
                        </div>

                        <div class="section-wrapper pl-60 pr-60 mb-60">
                            <div class="row">

                                <!-- education -->
                                <div class="col-xl-6 col-lg-7">
                                    <div class="bostami-section-title-wrap mb-20">
                                        <h4 class="section-title"><i class="fa-light fa-school"></i>Education</h4>
                                    </div>

                                    <div class="bostami-card-wrap">
                                        <div class="bostami-card-item bg-prink mb-20">
                                            <span class="card-subtitle">2021-2025</span>
                                            <h6 class="card-title">Bachelors in Computer Science <span>COMSATS
                                                    University Islamabad,</span></h6>
                                            <p class="card-text">sahiwal campus Punjab, Pakistan.</p>
                                        </div>

                                        <div class="bostami-card-item bg-catkrill mb-20">
                                            <span class="card-subtitle">2018-2021</span>
                                            <h6 class="card-title">Associate Engineer in CIT <span><br>Govt. College of
                                                    Technology,</span></h6>
                                            <p class="card-text">Kamalila Punjab, Pakistan</p>
                                        </div>

                                        <!-- <div class="bostami-card-item bg-prink">
                                            <span class="card-subtitle">2015-2017</span>
                                            <h6 class="card-title">Graphic Designer <span>- Web Graphy,</span></h6>
                                            <p class="card-text">Los Angeles, CA</p>
                                        </div> -->
                                    </div>



                                </div>

                                <!-- education -->
                                <div class="col-xl-6 col-lg-5">
                                    <div class="bostami-section-title-wrap mb-20">
                                        <h4 class="section-title"><i class="fa-light fa-briefcase"></i>experience</h4>
                                    </div>

                                    <div class="bostami-card-item bg-catkrill  mb-20">
                                        <span class="card-subtitle">Present</span>
                                        <h6 class="card-title">Fresher</h6>
                                        <p class="card-text">Looking Internship in WEB Development.</p>
                                    </div>

                                    <!-- <div class="bostami-card-item bg-prink mb-20">
                                        <span class="card-subtitle">2015-2017</span>
                                        <h6 class="card-title">Cr. Web Developer</h6>
                                        <p class="card-text">elite-themes24 ltd.</p>
                                    </div>

                                    <div class="bostami-card-item bg-catkrill ">
                                        <span class="card-subtitle">2014 - 2015</span>
                                        <h6 class="card-title">Jr. Web Developer</h6>
                                        <p class="card-text">Creative Gigs.</p>
                                    </div> -->

                                </div>

                            </div>
                        </div>

                        <div class="section-wrapper bg-light-white-2 pt-70 pb-60 pl-60 pr-60">
                            <div class="row">

                                <!-- skill -->
                                <div class="col-xl-6 col-lg-7">
                                    <div class="bostami-section-title-wrap mb-20">
                                        <h4 class="section-title">Working Skills</h4>
                                    </div>

                                    <div class="skill-bar-wrap">

                                        <div class="skill-bar-item mb-30">
                                            <div class="title-wrap">
                                                <h5 class="title">Web Development</h5>
                                                <span class="count">85%</span>
                                            </div>
                                            <div class="progress-bar-wrap">
                                                <div class="progress-line progress-bg-1" style="width: 85%;">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="skill-bar-item">
                                            <div class="title-wrap">
                                                <h5 class="title">Microsoft Office</h5>
                                                <span class="count">90%</span>
                                            </div>
                                            <div class="progress-bar-wrap">
                                                <div class="progress-line progress-bg-4" style="width: 90%;">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="skill-bar-item mb-30">
                                            <div class="title-wrap">
                                                <h5 class="title">Canva</h5>
                                                <span class="count">70%</span>
                                            </div>
                                            <div class="progress-bar-wrap">
                                                <div class="progress-line progress-bg-3" style="width: 70%;">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="skill-bar-item mb-30">
                                            <div class="title-wrap">
                                                <h5 class="title">Mobile App</h5>
                                                <span class="count">55%</span>
                                            </div>
                                            <div class="progress-bar-wrap">
                                                <div class="progress-line progress-bg-2" style="width: 55%;">
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <!-- gk -->
                                <div class="col-xl-6 col-lg-5">
                                    <div class="bostami-section-title-wrap mb-20">
                                        <h4 class="section-title">Knowledges</h4>
                                    </div>

                                    <div class="knowledeges-item-wrap">
                                        <span class="gk-item">Digital Design</span>
                                        <span class="gk-item">Marketing</span>
                                        <span class="gk-item">Communication</span>
                                        <span class="gk-item">Social Media</span>
                                        <span class="gk-item">Time Management</span>
                                        <span class="gk-item">Flexibility</span>
                                        <span class="gk-item">Print</span>
                                    </div>

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


    </div>

    <?php include ("./component/jsscript.php"); ?>
</body>


</html>