<?php
    include_once "../model/class.php";
    include_once "../controller/function.php";

    $error = "";

    // create album

    // create an instance of the controller    
    $function = new consul();
    if (
        isset($_POST["first_name"]) &&       
        isset($_POST["last_name"]) &&
		isset($_POST["email"]) &&       
        isset($_POST["phone"]) &&
		isset($_POST["speciality"]) &&       
		isset($_POST["date1"]) &&       
        isset($_POST["hours"]) &&
        isset($_POST["description"]) 
    ) {
        if (
            !empty($_POST["first_name"]) && 
            !empty($_POST["last_name"]) && 
			!empty($_POST["email"]) && 
            !empty($_POST["phone"]) && 
			!empty($_POST["speciality"]) &&  
			!empty($_POST["date1"]) && 
            !empty($_POST["hours"]) && 
            !empty($_POST["description"]) 
        ) {
            $rdv = new rdv(           
                $_POST['first_name'],
                $_POST['last_name'], 
				$_POST['email'],
                $_POST['phone'], 
				$_POST['speciality'], 
                $_POST['date1'], 
                $_POST['hours'],
				$_POST['description']
            );
            $function->ajouterRdv($rdv);
            header('Location:showRdv.php');
        }
        else
            $error = "Missing information";
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, shrink-to-fit=no">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>SmartMed - Health &amp; Medical Clinic HTML5 &amp; CSS3 Template</title>

    <!-- FAVICON AND APPLE TOUCH -->
    <link rel="shortcut icon" href="favicon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-180x180.png">
    <meta name="msapplication-TileImage" content="mstile.png">
    <meta name="msapplication-TileColor" content="#02a9ff">
    <meta name="theme-color" content="#02a9ff">

    <!-- FONTS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic">

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="../assets/fonts/fontawesome/css/font-awesome.min.css">

    <!-- JUSTICE ICONS -->
    <link rel="stylesheet" href="../assets/fonts/smartmed-icons/css/smartmed-icons.min.css">

    <!-- FANCYBOX -->
    <link rel="stylesheet" href="../assets/plugins/fancybox/jquery.fancybox.min.css">

    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="../assets/plugins/owl-carousel/owl.carousel.min.css">

    <!-- YOUTUBE PLAYER -->
    <link rel="stylesheet" href="../assets/plugins/ytplayer/css/jquery.mb.ytplayer.min.html">

    <!-- ANIMATIONS -->
    <link rel="stylesheet" href="../assets/plugins/animations/animate.min.css">

    <!-- CUSTOM & PAGES STYLE -->
    <link rel="stylesheet" href="../assets/css/custom.css">
    <link rel="stylesheet" href="../assets/css/pages-style.css">

    <!-- THEME OPTIONS -->
    <link rel="stylesheet" href="../assets/plugins/theme-options/theme-options.css">

    <!-- ALTERNATIVE STYLES -->
    <link rel="stylesheet" href="#" data-style="styles">


</head>

<body class="sticky-header header-classic footer-parallax">

    <div id="main-container">

        <!-- HEADER -->
        <header id="header">

            <div class="container">
                <div class="row">
                    <div class="col-md-3">

                        <!-- LOGO -->
                        <div id="logo">
                            <a href="index-2.html">
                                <img src="../assets/images/logo.png" alt="">
                            </a>
                        </div><!-- LOGO -->

                    </div><!-- col -->
                    <div class="col-md-9">

                        <!-- MENU -->
                        <nav>

                            <a class="mobile-menu-button" href="#"><i class="fa fa-bars"></i></a>

                            <ul class="menu clearfix" id="menu">
                                <li class="dropdown">
                                    <a href="index-2.html">Home</a>
                                    <ul>
                                        <li><a class="waves" href="index-2.html">Home 1</a></li>
                                        <li><a class="waves" href="index-3.html">Home 2</a></li>
                                        <li><a class="waves" href="index-4.html">Home 3</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="about.html">About</a>
                                    <ul>
                                        <li><a class="waves" href="about.html">About 1</a></li>
                                        <li><a class="waves" href="about-2.html">About 2</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
<<<<<<< HEAD:SanteK Frontend/santek.front.all/views/ajouterRdv.php
                                    <a href="services.html">Services</a>
                                    <ul>
                                        <li><a class="waves" href="services.html">Services 1</a></li>
                                        <li><a class="waves" href="services-2.html">Services 2</a></li>
=======
                                    <a href="services.php">Evenements</a>
                                    <ul>
                                        <li><a class="waves" href="services.php">Participer</a></li>
                                        <li><a class="waves" href="services-2.php">Action de don</a></li>
                                        <li><a class="waves" href="services-3.php">Nos evenements</a></li>
>>>>>>> 4ecf84758bd905c40109806f555a39b9e49d5b94:SanteK Frontend/santek.front.all/views/appointment.html
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="team.html">Team</a>
                                    <ul>
                                        <li><a class="waves" href="team.html">Chris Martin</a></li>
                                        <li><a class="waves" href="team.html">Marisa Carter</a></li>
                                        <li><a class="waves" href="team.html">John William</a></li>
                                        <li><a class="waves" href="team.html">Martha Davis</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="news.html">News</a>
                                    <ul>
                                        <li><a class="waves" href="news.html">News right sidebar</a></li>
                                        <li><a class="waves" href="news-2.html">News left sidebar</a></li>
                                        <li><a class="waves" href="news-3.html">News no sidebar</a></li>
                                        <li><a class="waves" href="news-single.html">News single</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="contact.html">Contact</a>
                                    <ul>
                                        <li><a class="waves" href="contact.html">Contact 1</a></li>
                                        <li><a class="waves" href="contact-2.html">Contact 2</a></li>
                                    </ul>
                                </li>
                            </ul>

                        </nav>

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->

        </header><!-- HEADER -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultation En Ligne</title>
</head>
    <body>
        
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
         <!-- PAGE CONTENT -->
        <div id="page-content">
			<div id="page-header" class="parallax" data-stellar-background-ratio="0.3">
        <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <h1>Appointment</h1>

                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->

            </div><!-- page-header -->

            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="headline text-center">

                            <h6>Best medical solutions</h6>
                            <h2>Make an appointment</h2>

                        </div><!-- headline -->

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->

            <div class="container mb-5">
                <div class="row">
                    <div class="col-md-12">

                        <form id="contact-form" name="appointment-form" method="post" action="ajouterRdv.php">
                            <fieldset>

                                <div class="row">
                                    <div class="col-md-6 col-lg-3">

                                        <p>
                                            <input class="col-12" id="first_name" type="text" name="first_name" placeholder="" required>
                                            <span></span>
                                            <label for="first_name">First Name</label>
                                        </p>

                                    </div><!-- col -->
                                    <div class="col-md-6 col-lg-3">

                                        <p>
                                            <input class="col-12" id="last_name" type="text" name="last_name" placeholder="" required>
                                            <span></span>
                                            <label for="last_name">Last Name</label>
                                        </p>

                                    </div><!-- col -->
                                    <div class="col-md-6 col-lg-3">

                                        <p>
                                            <input class="col-12" id="email" type="text" name="email" placeholder="" required>
                                            <span></span>
                                            <label for="email">E-mail</label>
                                        </p>

                                    </div><!-- col -->
                                    <div class="col-md-6 col-lg-3">

                                        <p>
                                            <input class="col-12" id="phone" type="number" name="phone" placeholder="" required>
                                            <span></span>
                                            <label for="phone">Phone</label>
                                        </p>

                                    </div><!-- col -->
                                    <div class="col-md-6 col-lg-3">

                                        <p>
                                            <select class="col-12" id="speciality" name="speciality" type="text">
                                                <option value="-1" disabled selected>Choose a speciality</option>
                                                <option value="1">Cardiology</option>
                                                <option value="2">Neurology</option>
                                                <option value="3">Surgery</option>
                                                <option value="4">Gynaecology</option>
                                                <option value="5">Ophthalmology</option>
                                                <option value="6">Stomatology</option>
                                            </select>
                                            <span></span>
                                            <i class="fa fa-angle-down"></i>
                                            <label for="speciality">Speciality</label>
                                        </p>

                                    </div><!-- col -->
                                    <div class="col-md-6 col-lg-3">

                                        <p>
                                            <input class="col-12" id="date1" type="date" name="date1" required>
                                            <span></span>
                                            <label for="date">Date</label>
                                        </p>

                                    </div><!-- col -->
                                    <div class="col-md-6 col-lg-3">

                                        <p>
                                            <input class="col-12" id="hours" type="time" name="hours" required>
                                            <span></span>
                                            <label for="hours">Hours</label>
                                        </p>

                                    </div><!-- col -->
                                </div><!-- row -->

                                <p>
                                    <textarea class="col-12" id="description" name="description" rows="5" cols="25" placeholder="" required></textarea>
                                    <span></span>
                                    <label for="observations">Observations</label>
                                </p>

                                <button class="btn btn-default waves" id="submit" type="submit" name="submit" value="">Make appointment</button>

                            </fieldset>
                        </form>

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->

        </div><!-- PAGE CONTENT -->
		<footer id="footer-container">

            <div id="footer">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="widget widget-text">

                                <div class="text-center">

                                    <p><img src="../assets/images/logo" alt=""></p>
                                    <p class="text-uppercase">Best medical solutions</p>

                                </div>

                            </div><!-- widget-text -->

                            <div class="widget widget-contact">

                                <ul class="inline">
                                    <li>
                                        <i class="fa fa-map-marker"></i>
                                        4453 Meadow Lane, San Jose, CA 95134
                                    </li>
                                    <li>
                                        <i class="fa fa-phone"></i>
                                        315-411-8716
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope-o"></i>
                                        <a href="mailto:info@smart-pixel.xyz">info@smart-pixel.xyz</a>
                                    </li>
                                </ul>

                            </div><!-- widget-contact -->

                            <div class="widget widget-pages">

                                <ul class="inline">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Team</a></li>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>

                            </div><!-- widget-pages -->

                            <div class="widget widget-text">

                                <div>

                                    <p class="copyright">
                                        <small>Template by <a href="#">SmartPixel</a> &copy; All rights reserved</small>
                                    </p>

                                </div>

                            </div><!-- widget-text -->

                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->

            </div><!-- footer -->

        </footer><!-- FOOTER -->

    </div><!-- MAIN CONTAINER -->


    <!-- SCROLL UP -->
    <a id="scroll-up" class="waves"><i class="fa fa-angle-up"></i></a>


    <!-- THEME OPTIONS -->
    <div id="theme-options"></div>


    <!-- jQUERY -->
    <script src="../assets/plugins/jquery/jquery-2.2.4.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="../assets/bootstrap/js/popper.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- VIEWPORT -->
    <script src="../assets/plugins/viewport/jquery.viewport.min.js"></script>

    <!-- MENU -->
    <script src="../assets/plugins/menu/hoverintent.min.js"></script>
    <script src="../assets/plugins/menu/superfish.min.js"></script>

    <!-- FANCYBOX -->
    <script src="../assets/plugins/fancybox/jquery.fancybox.min.js"></script>

    <!-- OWL CAROUSEL -->
    <script src="../assets/plugins/owl-carousel/owl.carousel.min.js"></script>

    <!-- PARALLAX -->
    <script src="../assets/plugins/parallax/jquery.stellar.min.js"></script>

    <!-- ISOTOPE -->
    <script src="../assets/plugins/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="../assets/plugins/isotope/isotope.pkgd.min.js"></script>

    <!-- CONTACT FORM VALIDATE & SUBMIT -->
    <script src="../assets/plugins/validate/jquery.validate.min.js"></script>
    <script src="../assets/plugins/submit/jquery.form.min.js"></script>

    <!-- GOOGLE MAPS -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwJB5U3ZU5nnV3ta4t1VSz92zQi_3Xmmo"></script>
    <script src="../assets/plugins/googlemaps/gmap3.min.js"></script>

    <!-- CHARTS -->
    <script src="../assets/plugins/charts/jquery.easypiechart.min.js"></script>

    <!-- COUNTER -->
    <script src="../assets/plugins/counter/jquery.simplecounter.min.js"></script>

    <!-- INSTAFEED -->
    <script src="../assets/plugins/instafeed/instafeed.min.js"></script>

    <!-- TWITTER -->
    <script src="../assets/plugins/twitter/twitterfetcher.min.js"></script>

    <!-- YOUTUBE PLAYER -->
    <script src="../assets/plugins/ytplayer/jquery.mb.ytplayer.min.html"></script>

    <!-- COUNTDOWN -->
    <script src="../assets/plugins/countdown/jquery.countdown.min.js"></script>

    <!-- ANIMATIONS -->
    <script src="../assets/plugins/animations/wow.min.js"></script>

    <!-- THEME OPTIONS -->
    <script src="../assets/plugins/theme-options/jquery.cookie.min.js"></script>
    <script src="../assets/plugins/theme-options/theme-options.js"></script>

    <!-- CUSTOM JS -->
    <script src="../assets/js/custom.js"></script>
    </body>
</html>