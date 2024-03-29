<?php
include ("./library/variables.php");
$pageIndex = 'contact';
?>

<!Doctype html>
<html class="no-js" lang="en">


<head>
    <title>Contact |
        <?php echo constant('siteTitle'); ?>
    </title>
    <!-- Meta Info -->
    <?php require ("./component/metainfo.php"); ?>

    <!-- CSS Files -->
    <?php require ("./component/css.php"); ?>


    <script>
        function submt() {
            alert('Thanks For Contacting..');
        }
    </script>
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
                                    <li>
                                        <a href="blog.php">
                                            <span>
                                                <i class="fa-light fa-newspaper"></i>
                                            </span>
                                            Blogs
                                        </a>
                                    </li>
                                    <li class="active">
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
                                <h2 class="page-title">contact</h2>
                            </div>
                        </div>

                        <!-- contact form -->
                        <div class="section-wrapper pr-60 pl-60 mb-60">
                            <div class="contact-area bg-light-white-2">
                                <h5 class="contact-title">I'm always open to discussing produuct</h5>
                                <h5 class="contact-title-b">design work or partnerships.</h5>
                                <form class="contact-form" action="#" method="post">
                                    <div class="form-input-item mb-60">
                                        <label class="input-lebel name">name *</label>
                                        <input name="name" class="input-box name" type="text" required>
                                    </div>
                                    <div class="form-input-item mb-60">
                                        <label class="input-lebel gmail">Email *</label>
                                        <input name="email" class="input-box gmail" type="Email" required>
                                    </div>
                                    <div class="form-input-item mb-40">
                                        <label class="input-lebel message">Message *</label>
                                        <textarea name="message" class="input-box message" style="Color: white;"
                                            cols="30" rows="10" required></textarea>
                                    </div>
                                    <div class="form-btn-wrap">
                                        <button type="submit" value="Send" class="form-btn"
                                            onclick="submt()">submit</button>
                                    </div>
                                </form>
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