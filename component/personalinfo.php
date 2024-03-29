<div class="col-xxl-4 col-xl-4 col-lg-4">
    <div class="bostami-parsonal-info-area">
        <div class="bostami-parsonal-info-wrap">

            <!-- img -->
            <div class="bostami-parsonal-info-img">
                <img src="assets/img/parsonal-info/profile.png" alt="avatar">
            </div>

            <!-- name -->
            <h4 class="bostami-parsonal-info-name">
                <a href="#">
                    <?php echo constant("Name"); ?>
                </a>
            </h4>
            <span class="bostami-parsonal-info-bio mb-15">
                <?php echo constant("Role"); ?>
            </span>

            <!-- socail link -->
            <ul class="bostami-parsonal-info-social-link mb-30">
                <li>
                    <a href="<?php echo constant("Facebook"); ?>" class="facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo constant("Github"); ?>" class="twitter">
                        <i class="fa-brands fa-github"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo constant("Instagram"); ?>" class="instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo constant("Linkedin"); ?>" class="linkedin">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </li>
            </ul>

            <!-- contact -->
            <div class="bostami-parsonal-info-contact mb-30">
                <div class="bostami-parsonal-info-contact-item phone">
                    <div class="icon">
                        <i class="fa-solid fa-mobile-screen-button"></i>
                    </div>
                    <div class="text">
                        <span>Phone</span>
                        <p>
                            <?php echo constant("Phone"); ?>
                        </p>
                    </div>
                </div>


                <div class="bostami-parsonal-info-contact-item email">
                    <div class="icon">
                        <i class="fa-regular fa-envelope-open-text"></i>
                    </div>
                    <div class="text">
                        <span>Email</span>
                        <p>
                            <?php echo constant("Email"); ?>
                        </p>
                    </div>
                </div>

                <div class="bostami-parsonal-info-contact-item location">
                    <div class="icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="text">
                        <span>Location</span>
                        <p>
                            <?php echo constant("Location"); ?>
                        </p>
                    </div>
                </div>

                <div class="bostami-parsonal-info-contact-item calendar">
                    <div class="icon">
                        <i class="fa-light fa-calendar-days"></i>
                    </div>
                    <div class="text">
                        <span>Birthday</span>
                        <p>
                            <?php echo constant("Birthday"); ?>
                        </p>
                    </div>
                </div>
            </div>

            <!-- cv button -->
            <div class="bostami-parsonal-info-btn">
                <a class="btn-2 circle" href="#">
                    <span class="icon">
                        <i class="fa-regular fa-download"></i>
                    </span>
                    download cv
                </a>
            </div>

        </div>
    </div>
</div>