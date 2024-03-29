<div class="text-right">
    <div class="bostami-main-menu-wrap">
        <nav class="bastami-main-menu main_menu_3">
            <ul>
                <li class="<?php if ($pageIndex == 'home') {
                    echo 'active';
                } else {
                    '';
                } ?>">
                    <a href="index.php">
                        <span>
                            <i class="fa-light fa-address-card"></i>
                        </span>
                        about
                    </a>
                </li>
                <li class="<?php if ($pageIndex == 'resume') {
                    echo 'active';
                } else {
                    '';
                } ?>">
                    <a href="resume.php">
                        <span>
                            <i class="fa-light fa-file-user"></i>
                        </span>
                        Resume
                    </a>
                </li>
                <li class="<?php if ($pageIndex == 'portfolio') {
                    echo 'active';
                } else {
                    '';
                } ?>">
                    <a href="portfolio.php">
                        <span>
                            <i class="fa-light fa-briefcase"></i>
                        </span>
                        Works
                    </a>
                </li>
                <!-- <li class="<?php if ($pageIndex == 'blog') {
                    echo 'active';
                } else {
                    '';
                } ?>">
                    <a href="blog.php">
                        <span>
                            <i class="fa-light fa-newspaper"></i>
                        </span>
                        Blogs
                    </a>
                </li> -->
                <li class="<?php if ($pageIndex == 'contact') {
                    echo 'active';
                } else {
                    '';
                } ?>">
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
</div>