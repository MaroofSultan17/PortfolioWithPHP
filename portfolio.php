<?php include ('./library/variables.php');
$pageIndex = 'portfolio';
?>
<!Doctype html>
<html class="no-js" lang="en">


<head>
    <title>Works |
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
                    <?php include ('./component/navbar.php'); ?>
                    <!-- main-menu-end -->

                    <div class="bostami-page-content-wrap">

                        <!-- page title -->
                        <div class="section-wrapper pl-60 pr-60 pt-60">
                            <div class="bostami-page-title-wrap mb-15">
                                <h2 class="page-title">Work</h2>
                            </div>
                        </div>


                        <div class="section-wrapper pr-60 pl-60 mb-60">
                            <div class="row">

                                <div class="col-12">
                                    <ul class="fillter-btn-wrap buttonGroup isotop-menu-wrapper mb-30">
                                        <!-- <li class="fillter-btn is-checked " data-filter="*">All</li>
                                        <li class="fillter-btn" data-filter=".mockup">Mockup</li>
                                        <li class="fillter-btn" data-filter=".design"> Graphic Design</li>
                                        <li class="fillter-btn" data-filter=".logo"> logo</li> -->
                                    </ul>
                                </div>

                                <div class="col-12">
                                    <div class="swiper-slide ">
                                        <div class="row">
                                            <!-- signle item -->
                                            <div class=" isotop-item mockup logo">
                                                <div class="fillter-item bg-prink">
                                                    <a class="img" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#portfolio-1">
                                                        <img src="assets/img/work/WEB.jpg" alt="">
                                                    </a>
                                                    <span class="item-subtitle">Ecomerace , WEB Development </span>
                                                    <h6 class="item-title">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#portfolio-1">Evani</a>
                                                    </h6>
                                                </div>
                                            </div>
                                            <!-- signle item -->
                                            <div class=" isotop-item design mockup">
                                                <div class="fillter-item bg-catkrill">
                                                    <a class="img" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#portfolio-2">
                                                        <img src="assets/img/work/WEB1.jpg" alt="">
                                                    </a>
                                                    <span class="item-subtitle">Personal Portfolio , WEB Development
                                                    </span>
                                                    <h6 class="item-title">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#portfolio-2">Maroof Sultan</a>
                                                    </h6>
                                                </div>
                                            </div>

                                            <!-- signle item -->
                                            <!-- <div class=" isotop-item logo mockup">
                                                <div class="fillter-item bg-catkrill ">
                                                    <a class="img" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#portfolio-1">
                                                        <img src="assets/img/work/work-img-3.png" alt="">
                                                    </a>
                                                    <span class="item-subtitle">Travel Landing , UX/UI </span>
                                                    <h6 class="item-title">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#portfolio-1">T-Shirt Design</a>
                                                    </h6>
                                                </div>
                                            </div> -->

                                            <!-- signle item -->
                                            <!-- <div class=" isotop-item mockup">
                                                <div class="fillter-item bg-prink">
                                                    <a class="img" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#portfolio-1">
                                                        <img src="assets/img/work/work-img-4.png" alt="">
                                                    </a>
                                                    <span class="item-subtitle">Travel Landing , UX/UI </span>
                                                    <h6 class="item-title">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#portfolio-1">Packaging Box</a>
                                                    </h6>
                                                </div>
                                            </div> -->

                                            <!-- signle item -->
                                            <!-- <div class="isotop-item design logo">
                                                <div class="fillter-item bg-prink">
                                                    <a class="img" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#portfolio-1">
                                                        <img src="assets/img/work/work-img-5.png" alt="">
                                                    </a>
                                                    <span class="item-subtitle">Travel Landing , UX/UI </span>
                                                    <h6 class="item-title">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#portfolio-1">Modern Bag Design</a>
                                                    </h6>
                                                </div>
                                            </div> -->

                                            <!-- signle item -->
                                            <!-- <div class="isotop-item mockup design">
                                                <div class="fillter-item bg-catkrill">
                                                    <a class="img" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#portfolio-1">
                                                        <img src="assets/img/work/work-img-6.png" alt="">
                                                    </a>
                                                    <span class="item-subtitle">Travel Landing , UX/UI </span>
                                                    <h6 class="item-title">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#portfolio-1">Chul
                                                            urina</a>
                                                    </h6>
                                                </div>
                                            </div> -->
                                        </div>
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

        <!-- portfolio-modal-start -->

        <div class="modal portfolio-modal-box fade" id="portfolio-1" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal">
                            <i class="far fa-times"></i>
                        </button>
                    </div>

                    <div class="modal-body">

                        <h6 class="blog-title">
                            Evani
                        </h6>

                        <div class="portfolio-modal-table">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="portfolio-modal-table-text">
                                        <i class="fa-regular fa-file-lines"></i>
                                        Project : <span>Website</span>
                                    </h3>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="portfolio-modal-table-text">
                                        <i class="fa-regular fa-user "></i>
                                        Client : <span>Self Project</span>
                                    </h3>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="portfolio-modal-table-text">
                                        <i class="fa-solid fa-code"></i>
                                        Langages : <span> HTML, CSS, PHP</span>
                                    </h3>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="portfolio-modal-table-text">
                                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                        Preview : <a href="https://maroofsultan.me/?i=1">maroofsultan.me</a>
                                    </h3>
                                </div>
                            </div>
                        </div>

                        <div class="h1-modal-paragraph">
                            <p style="text-align: justify;">Introducing EVANI, your premier destination for online
                                shopping. At EVANI, we offer a
                                diverse range of products spanning various categories to cater to your every need.
                                Whether you're in search of cutting-edge electronics, stylish fashion pieces, practical
                                home essentials, luxurious beauty products, or reliable sports gear, EVANI has something
                                for everyone. Our featured products include the latest in smartwatch technology,
                                fashionable clothing items, high-quality kitchenware, skincare solutions, outdoor
                                camping equipment, bestselling fiction novels, and educational toys. Explore our top
                                brands, including EVANI Electronics, EVANI Fashion, EVANI Home Essentials, EVANI Beauty,
                                EVANI Sports Gear, and EVANI Books. Take advantage of our special offers, such as buy 2
                                get 1 free deals on selected electronics, flat discounts on seasonal fashion
                                collections, and clearance sales on sports equipment. Join our satisfied customers who
                                rave about our products and exceptional service. Shop with confidence at EVANI, where
                                quality, affordability, and customer satisfaction are our top priorities. Experience the
                                convenience of online shopping with EVANI today.
                            </p>

                        </div>
                        <div class="h1-modal-img">
                            <img src="assets/img/work/WEB.jpg" alt="">
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div class="modal portfolio-modal-box fade" id="portfolio-2" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal">
                            <i class="far fa-times"></i>
                        </button>
                    </div>

                    <div class="modal-body">

                        <h6 class="blog-title">
                            Maroof Sultan
                        </h6>

                        <div class="portfolio-modal-table">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="portfolio-modal-table-text">
                                        <i class="fa-regular fa-file-lines"></i>
                                        Project : <span>Website (Portfolio)</span>
                                    </h3>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="portfolio-modal-table-text">
                                        <i class="fa-regular fa-user "></i>
                                        Client : <span>Self Project</span>
                                    </h3>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="portfolio-modal-table-text">
                                        <i class="fa-solid fa-code"></i>
                                        Langages : <span> HTML, CSS, PHP</span>
                                    </h3>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="portfolio-modal-table-text">
                                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                        Preview : <a
                                            href="https://profile.maroofsultan.me/?i=1">profile.maroofsultan.me</a>
                                    </h3>
                                </div>
                            </div>
                        </div>

                        <div class="h1-modal-paragraph">
                            <p style="text-align: justify;">Crafting my personal portfolio, I proudly showcase my skills
                                in HTML, CSS, Bootstrap, and PHP. With a solid foundation in these technologies, I have
                                the ability to design and develop responsive and visually appealing websites. Proficient
                                in HTML for structuring web content, CSS for styling and layout, and Bootstrap for rapid
                                prototyping and front-end development, I ensure user-friendly interfaces and seamless
                                user experiences. Additionally, my expertise extends to back-end development using PHP,
                                allowing me to create dynamic and interactive web applications. With these skills, I am
                                equipped to bring ideas to life and deliver high-quality projects that exceed
                                expectations.
                            </p>

                        </div>
                        <div class="h1-modal-img">
                            <img src="assets/img/work/WEB1.jpg" alt="Image Not Found">
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <!-- portfolio-modal-end -->

    </div>

    <?php include ("./component/jsscript.php"); ?>

</body>


</html>