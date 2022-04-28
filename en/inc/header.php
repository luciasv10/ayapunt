<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Ayapunt Specialist in School Uniforms">
        <meta name="author" content="Ayapunt">

        <title>Ayapunt || Specialist in School Uniforms</title>

		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

        <!-- Elegant Font Icons CSS -->
        <link rel="stylesheet" href="css/elegant-font-icons.css">
        <!-- Elegant Line Icons CSS -->
        <link rel="stylesheet" href="css/elegant-line-icons.css">
        <!-- Themify Icon CSS -->
        <link rel="stylesheet" href="css/themify-icons.css">
        <!-- Barber Icons CSS -->
        <link rel="stylesheet" href="css/barber-icons.css">
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- animate CSS -->
        <link rel="stylesheet" href="css/animate.min.css">
		<!-- Venobox CSS -->
        <link rel="stylesheet" href="css/venobox/venobox.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="css/nice-select.css">
		<!-- OWL-Carousel CSS -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <!-- Slick Nav CSS -->
        <link rel="stylesheet" href="css/slicknav.min.css">
		<!-- Main CSS -->
        <link rel="stylesheet" href="css/main.css">
		<!-- Responsive CSS -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- Tuseef CSS -->
        <link rel="stylesheet" href="css/tuseef.css">
        <!-- custom CSS -->
        <link rel="stylesheet" href="css/custom.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div id='preloader' >
            <div class='loader' >
                <!-- <img src="img/loading.gif" width="80" alt=""> -->
                <img src="img/logo.png" width="80" alt="">
            </div>
        </div><!-- Preloader -->
        
        <header id="header" class="header-section">
            <div class="container">
                <nav class="navbar ">
                    <a href="index.php" class="navbar-brand"><img src="img/logo.png" alt="Barbershop"></a>
                    <div class="d-flex menu-wrap align-items-center">
                       <div id="mainmenu" class="mainmenu">

                        <?php $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1); ?>

                           <ul class="nav">
                               <li><a data-scroll href="index.php" <?php if($curPageName == "index.php") { ?> class="nav-link active"  <?php } ?>> Home <span class="sr-only">(current)</span></a>
                                </li>

                                <li><a href="about.php" <?php if($curPageName == "about.php") { ?> class="nav-link active"  <?php } ?>> About </a>
                                </li>

                                <li><a href="services.php" <?php if($curPageName == "services.php") { ?> class="nav-link active"  <?php } ?> >Services</a></li>

                                <li><a href="policy.php" <?php if($curPageName == "policy.php") { ?> class="nav-link active"  <?php } ?>> Policy</a></li>

                                <li><a href="gallery.php" <?php if($curPageName == "gallery.php") { ?> class="nav-link active"  <?php } ?> >Gallery</a></li>

                            </ul>

                       </div>
                       <div class="header-btn">
                            <a href="tel:+34 959 470 018" class="call-us">
                                <i class="icon_phone"></i>
                            </a>

                            <?php

                            $segments = explode('/', trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));

                            ?>
                            <select  name="formal" id="language_dropdown">
                                <option value="en" <?php if($segments[1] == 'en') { ?> selected <?php } ?> data-content='<span class="flag-icon flag-icon-us"></span> English'>English</option>
                              <option  value="es" <?php if($segments[1] !== 'en') { ?> selected <?php } ?> data-content='<span class="flag-icon flag-icon-mx"></span> Español'>Español</option>
                            </select>
                           <!-- <a href="#" class="menu-btn">Make Appointment</a> -->
                       </div>
                    </div>
                </nav>
            </div>
		</header> <!--.header-section -->