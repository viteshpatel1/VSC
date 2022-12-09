<!DOCTYPE html>
<html>

<head>
    <!-- Site made with Mobirise Website Builder v5.2.0, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v5.2.0, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/20210211-105546-156x156.png" type="image/x-icon">
    <meta name="description" content="">


    <title>Product</title>
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">




</head>

<body>

    <section class="menu menu2 cid-soGfOwy22p" once="menu" id="menu2-n">

        <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
            <div class="container-fluid">
                <div class="navbar-brand">
                    <span class="navbar-logo">

                        <img src="assets/images/20210211-105546-156x156.png" alt="Mobirise" style="height: 6rem;">

                    </span>
                    <span class="navbar-caption-wrap"><a class="navbar-caption text-primary display-7"
                            href="index.php">Veterinary Services Centre</a></span>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                        <li class="nav-item"><a class="nav-link link text-secondary display-4" href="index.php">Home</a>
                        </li>
                        <li class="nav-item"><a class="nav-link link text-secondary display-4" href="aboutus.php">
                                About us</a></li>
                        <li class="nav-item dropdown"><a class="nav-link link dropdown-toggle text-secondary display-4"
                                href="#" data-toggle="dropdown-submenu" aria-expanded="false">
                                Services</a>
                            <div class="dropdown-menu"><a class="dropdown-item text-secondary text-primary display-4"
                                    href="diet.php">Diet &amp; Nutrition</a><a
                                    class="dropdown-item text-secondary text-primary display-4"
                                    href="disease.php">Disease &amp; Symptoms</a></div>
                        </li>
                        <li class="nav-item"><a class="nav-link link text-secondary display-4"
                                href="product.php">Products</a>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link link dropdown-toggle text-secondary display-4"
                                href="#" data-toggle="dropdown-submenu" aria-expanded="false">
                                Login</a>
                            <div class="dropdown-menu"><a class="dropdown-item text-secondary text-primary display-4"
                                    href="login/login.php">User Login</a><a
                                    class="dropdown-item text-secondary text-primary display-4"
                                    href="login/admin_login.php">Admin
                                    Login</a></div>
                        </li>
                    </ul>


                </div>
            </div>
        </nav>
    </section>

    <section class="header3 cid-soGlNsFmYm" id="header3-p">



        <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(53, 53, 53);"></div>

        <div class="align-center container-fluid">
            <div class="row justify-content-end">
                <div class="col-12 col-lg-6">
                    <h1 class="mbr-section-title mbr-fonts-style mb-3 display-1"><strong>Products</strong></h1>

                    <p class="mbr-text mbr-fonts-style display-5"><strong>Nutritional &amp; Medicinal products</strong>
                    </p>

                </div>
            </div>
        </div>
    </section>

    <section class="features8 cid-spflOdQpsz" xmlns="http://www.w3.org/1999/html" id="features9-11">
        <?php

        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "vscdb";
        $mysqli = new mysqli($host, $user, $pass, $db);

        if ($mysqli->connect_error) {
            die('Connect Error (' .
                $mysqli->connect_errno . ') ' .
                $mysqli->connect_error);
        }



        $sql = "SELECT * FROM product_tbl ";
        $result = $mysqli->query($sql);
        $mysqli->close();
        ?>




        <div class="container-fluid">
            <?php while ($rows = $result->fetch_assoc()) { ?>

            <div class="card">
                <div class="card-wrapper">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-3">
                            <div class="image-wrapper">
                                <img src="admin/assets/images/<?php echo $rows['p_img']; ?>" alt="Mobirise">
                            </div>
                        </div>
                        <div class="col-12 col-md">
                            <div class="card-box">
                                <div class="row">
                                    <div class="col-md">
                                        <h6 class="card-title mbr-fonts-style display-5">
                                            <strong><?php echo $rows['p_name']; ?></strong>
                                        </h6>
                                        <p class="mbr-text mbr-fonts-style display-7">
                                            <?php echo $rows['p_des']; ?>
                                        </p>

                                    </div>
                                    <div class="col-md-auto">
                                        <p class="price mbr-fonts-style display-2">₹<?php echo $rows['p_price']; ?></p>
                                        <div class="mbr-section-btn"><a
                                                href="admin/order.php?p_id=<?php echo $rows['p_id']; ?>"
                                                class="btn btn-primary display-4">
                                                Buy Now
                                            </a></div>
                                    </div>
                                    <div class="col-lg-2 d-none d-lg-block"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="col-lg-2 d-none d-lg-block"></div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </section>

    <section class="footer3 cid-sp3vJon9sE" once="footers" id="footer3-y">





        <div class="container">
            <div class="media-container-row align-center mbr-white">
                <div class="row row-links">
                    <ul class="foot-menu">





                        <li class="foot-menu-item mbr-fonts-style display-7">
                            <p><a href="index.php" class="text-primary">Home</a>&nbsp;</p>
                        </li>
                        <li class="foot-menu-item mbr-fonts-style display-7">
                            <p><a href="aboutus.php" class="text-primary">About us</a>&nbsp;</p>
                        </li>
                        <li class="foot-menu-item mbr-fonts-style display-7">
                            <p><a href="product.php" class="text-primary">Products&nbsp;</a></p>
                        </li>
                    </ul>
                </div>
                <div class="row social-row">
                    <div class="social-list align-right pb-2">






                        <div class="soc-item">

                            <span class="mbr-iconfont mbr-iconfont-social socicon-twitter socicon"
                                style="color: rgb(34, 165, 229); fill: rgb(34, 165, 229);"></span>

                        </div>
                        <div class="soc-item">

                            <span class="mbr-iconfont mbr-iconfont-social socicon-facebook socicon"
                                style="color: rgb(68, 121, 217); fill: rgb(68, 121, 217);"></span>

                        </div>
                        <div class="soc-item">

                            <span class="mbr-iconfont mbr-iconfont-social socicon-youtube socicon"
                                style="color: rgb(228, 63, 63); fill: rgb(228, 63, 63);"></span>

                        </div>
                        <div class="soc-item">

                            <span class="mbr-iconfont mbr-iconfont-social socicon-instagram socicon"
                                style="color: rgb(255, 102, 102); fill: rgb(255, 102, 102);"></span>

                        </div>
                    </div>
                </div>
                <div class="row row-copirayt">
                    <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">
                        © Copyright 2022 VSC. All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section
        style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: flex;">
        <a href="https://mobirise.site/l" style="flex: 1 1; height: 3rem; padding-left: 1rem;"></a>
       
    </section>
    <script src="assets/web/assets/jquery/jquery.min.js"></script>
    <script src="assets/popper/popper.min.js"></script>
    <script src="assets/tether/tether.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/smoothscroll/smooth-scroll.js"></script>
    <script src="assets/dropdown/js/nav-dropdown.js"></script>
    <script src="assets/dropdown/js/navbar-dropdown.js"></script>
    <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
    <script src="assets/theme/js/script.js"></script>


    <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i
                class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
</body>

</html>