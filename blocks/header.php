<?php
$metadataFile = 'metadata.json';
if (file_exists($metadataFile)) {
    $metadata = json_decode(file_get_contents($metadataFile), true);
} else {
    $metadata = [];
}
// Get the current file name without extension
$current_page = pathinfo(basename($_SERVER['PHP_SELF']), PATHINFO_FILENAME);
// Fetch meta tags from JSON based on the current file name
$metaTitle = $metadata['metaTags'][$current_page]['title'] ?? "Yava Tech - Leading IT Solutions Provider";
$metaDescription = $metadata['metaTags'][$current_page]['description'] ?? "Yava Tech delivers global IT solutions with integrity, quality, and responsiveness.";
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo htmlspecialchars($metaTitle); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($metaDescription); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/tg-flaticon.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/default.css">
    <link rel="stylesheet" href="assets/css/default-icons.css">
    <link rel="stylesheet" href="assets/css/odometer.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/tg-cursor.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body class="theme-gray-two">

    <!-- preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll__top scroll-to-target" data-target="html">
        <i class="fas fa-chevron-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    <header class="transparent-header">
        <div id="header-fixed-height"></div>
        <div id="sticky-header" class="tg-header__area tg-header__area-three">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tgmenu__wrap">
                            <nav class="tgmenu__nav">
                                <div class="logo">
                                    <a href="index"><img src="assets/img/logo.png" alt="Logo"></a>
                                </div>
                                <div class="tgmenu__navbar-wrap tgmenu__main-menu d-none d-lg-flex">
                                    <ul class="navigation">
                                        <li class="<?php echo ($current_page == 'index') ? 'active' : ''; ?>"><a href="index">Home</a>
                                            
                                        </li>
                                        <li class=" <?php echo ($current_page == 'about') ? 'active' : ''; ?>"><a href="about">About Us</a>
                                            
                                        </li>
                                        <li class="menu-item-has-children  <?php echo ($current_page == 'teachers-traning' ||  $current_page == 'teachers-consultancy' || $current_page == 'academic-support' || $current_page == 'educational-development-advisory' ) ? 'active' : ''; ?>"><a href="#">Our Courses</a>
                                            <ul class="sub-menu">
                                                <li class=" <?php echo ($current_page == 'teachers-traning') ? 'active' : ''; ?>"><a href="teachers-traning">Teachers Training</a></li>
                                                <li class=" <?php echo ($current_page == 'teachers-consultancy') ? 'active' : ''; ?>"><a href="teachers-consultancy">Teachers Consultancy</a></li>
                                                <li class=" <?php echo ($current_page == 'academic-support') ? 'active' : ''; ?>"><a href="academic-support">Academic support for students</a></li>
                                                <li class=" <?php echo ($current_page == 'educational-development-advisory') ? 'active' : ''; ?>"><a href="educational-development-advisory">Educational development advisory</a></li>
                                            </ul>
                                        </li>
                                        
                                        <li class=" <?php echo ($current_page == 'contact') ? 'active' : ''; ?>"><a href="contact">Contact</a></li>
                                    </ul>
                                </div>
                                <div class="tgmenu__action tgmenu__action-three">
                                    <ul class="list-wrap">
                                        <li class="header-contact">
                                            <a href="tel:+917815899695" class="header-contact-info"><i class="flaticon-telephone"></i>+91 78158 99695                                            </a>
                                        </li>
                                        <li class="header-btn header-btn-two">
                                            <a href="contact" class="tg-btn">Get a quote</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mobile-nav-toggler"><i class="tg-flaticon-menu"></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Mobile Menu  -->
        <div class="tgmobile__menu">
            <nav class="tgmobile__menu-box">
                <div class="close-btn"><i class="tg-flaticon-close-1"></i></div>
                <div class="nav-logo">
                    <a href="index"><img src="assets/img/logo.png" alt="Logo"></a>
                </div>
                
                <div class="tgmobile__menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
                <div class="social-links">
                    <ul class="list-wrap">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="tgmobile__menu-backdrop"></div>
        <!-- End Mobile Menu -->

    </header>
    <!-- header-area-end -->



    <!-- main-area -->
    <main class="main-area fix">