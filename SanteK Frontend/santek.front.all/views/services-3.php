<?PHP
include "../controllers/eventC.php";
include "../model/event.php";
include "../config.php";

$event1C=new eventC();
$listeEvent=$event1C->afficherEvents();
$listeEvent=$event1C->trierEvents();

//var_dump($listeEmployes->fetchAll());
?>
<!doctype html>
<html>


<!-- Mirrored from www.smartpixel.tech/smartmed/news.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Nov 2020 13:38:37 GMT -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, shrink-to-fit=no">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>SanteK</title>

    <!-- FAVICON AND APPLE TOUCH -->
    <link rel="shortcut icon" href="favicon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-180x180.png">
    <meta name="msapplication-TileImage" content="mstile.png">
    <meta name="msapplication-TileColor" content="#02a9ff">
    <meta name="theme-color" content="#02a9ff">

    <!-- FONTS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic">

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css">

    <!-- JUSTICE ICONS -->
    <link rel="stylesheet" href="assets/fonts/smartmed-icons/css/smartmed-icons.min.css">

    <!-- FANCYBOX -->
    <link rel="stylesheet" href="assets/plugins/fancybox/jquery.fancybox.min.css">

    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="assets/plugins/owl-carousel/owl.carousel.min.css">

    <!-- YOUTUBE PLAYER -->
    <link rel="stylesheet" href="assets/plugins/ytplayer/css/jquery.mb.ytplayer.min.html">

    <!-- ANIMATIONS -->
    <link rel="stylesheet" href="assets/plugins/animations/animate.min.css">

    <!-- CUSTOM & PAGES STYLE -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/pages-style.css">

    <!-- THEME OPTIONS -->
    <link rel="stylesheet" href="assets/plugins/theme-options/theme-options.css">

    <!-- ALTERNATIVE STYLES -->
    <link rel="stylesheet" href="#" data-style="styles">
    <style>

.col-md-5{
    background-color: #ccc;
  padding: 20px;
  display: inline;
  font-size: 50px;
}
.col-md-5:hover {
    background: PaleTurquoise;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.5), 0 6px 20px 0 rgba(0,0,0,0.20);
    font-size: 80px;
}

h1 {
    text-align: center;
    color: #02a9ff;
}
h3 {
    text-align: center;
    color: aqua;
}

.archive{
    text-align: center;
}
</style>
<!-------------------------------------head recherche----------------------------------------------------->

<style>

#button5{
	background-color: #555555;
	height: 50px;
	width: 150px;
} </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  
  <script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script>

  <link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="../../lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="../../css/style.css" rel="stylesheet">
  <link href="../../css/style-responsive.css" rel="stylesheet">
  <link href="../../css/stylePromos.css" rel="stylesheet">
  <!---Animated Icons---->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.css"/>
<!------------------------------------------------------------------------------------------------------------------------------>
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
                                <img src="assets/images/logo.png" alt="">
                            </a>
                        </div><!-- LOGO -->

                    </div><!-- col -->
                    <div class="col-md-9">

                        <!-- MENU -->
                        <nav>

                            <a class="mobile-menu-button" href="#"><i class="fa fa-bars"></i></a>

                            <ul class="menu clearfix" id="menu">
                                <li class="dropdown">
                                    <a href="index-2.html">Acceuil</a>
                                    <ul>
                                        <li><a class="waves" href="index-2.html">Acceuil 1</a></li>
                                        <li><a class="waves" href="index-3.html">Acceuil 2</a></li>
                                        <li><a class="waves" href="index-4.html">Acceuil 3</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="about.html">A propos</a>
                                    <ul>
                                        <li><a class="waves" href="about.html">A propos 1</a></li>
                                        <li><a class="waves" href="about-2.html">A propos 2</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown active">
                                    <a href="services.php">Evenements</a>
                                    <ul>
                                    <li><a class="waves" href="services.php">Participer</a></li>
                                        <li><a class="waves" href="services-3.php">Nos evenements</a></li>
                                        <li><a class="waves" href="services-2.php">Action de don</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="team.html">Produits</a>
                                    <ul>
                                        <li><a class="waves" href="team.html">Chris Martin</a></li>
                                        <li><a class="waves" href="team.html">Marisa Carter</a></li>
                                        <li><a class="waves" href="team.html">John William</a></li>
                                        <li><a class="waves" href="team.html">Martha Davis</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="news.html">Articles</a>
                                    <ul>
                                        <li><a class="waves" href="news.html">News right sidebar</a></li>
                                        <li><a class="waves" href="news-2.html">News left sidebar</a></li>
                                        <li><a class="waves" href="news-3.html">News no sidebar</a></li>
                                        <li><a class="waves" href="news-single.html">News single</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="contact.html">Contactez-nous</a>
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

<div id="page-header" class="parallax" data-stellar-background-ratio="0.3" style="background-image: url(images/backgrounds/page-header-2.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="headline text-center">

                            <h6>Nos évenements</h6>
                            <h2 style="color:white">Les Types D'évenements</h2>

                        </div><!-- headline -->

                    </div><!-- col -->
                </div><!-- row -->
            
        </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4">

                        <div class="service-box style-1 wow fadeInUp">

                            <i class="smartmed-icon-dumbbell"></i>

                            <div class="service-box-content">

                                <h4 style="color:aqua">Des marathons</h4>

                                <p>Le marathon est une épreuve sportive individuelle de course à pied qui se dispute 
                                    généralement sur route sur une distance de 42 à 195 kilomètres.</p>

                            </div><!-- service-box-content -->

                        </div><!-- service-box -->

                    </div><!-- col -->
                    <div class="col-md-6 col-lg-4">

                        <div class="service-box style-1 wow fadeInUp" data-wow-delay="0.1s">

                            <i class="smartmed-icon-helicopter"></i>

                            <div class="service-box-content">

                                <h4 style="color:aqua">don d'organes</h4>

                                <p>Le don d'organes est le prélèvement d'organes et de tissus (on parle dans ce cas de don de tissus) d'un corps humain
                                     (appelé donneur) pour traiter des patients (appelés receveurs) dont les organes essentiels sont gravement atteints.
                                    </p>

                            </div><!-- service-box-content -->

                        </div><!-- service-box -->

                    </div><!-- col -->
                    <div class="col-md-6 col-lg-4">

                        <div class="service-box style-1 wow fadeInUp" data-wow-delay="0.2s">

                            <i class="smartmed-icon-hospital-bed-1"></i>

                            <div class="service-box-content">

                                <h4 style="color:aqua">traitement</h4>

                                <p>En médecine, un traitement, appelé aussi traitement médical, traitement thérapeutique,
                                     thérapie ou plus généralement thérapeutique, est un ensemble de mesures appliquées par un
                                      professionnel de la santé (ou thérapeute) à une personne vis-à-vis d'une maladie, afin de l'aider à en guérir</p>

                            </div><!-- service-box-content -->

                        </div><!-- service-box -->

                    </div><!-- col -->
                    <div class="col-md-6 col-lg-4">

                        <div class="service-box style-1 wow fadeInUp">

                            <i class="smartmed-icon-blood-donation"></i>

                            <div class="service-box-content">

                                <h4 style="color:aqua">Don de sang</h4>

                                <p>Un don de sang est un processus par lequel un donneur de sang est volontaire pour se voir prélever du sang qui sera gardé dans une banque du sang avant de transfuser une personne malade lors d'une transfusion sanguine.</p>

                            </div><!-- service-box-content -->

                        </div><!-- service-box -->

                    </div><!-- col -->
                    <div class="col-md-6 col-lg-4">

                        <div class="service-box style-1 wow fadeInUp" data-wow-delay="0.1s">

                            <i class="smartmed-icon-first-aid-kit-5"></i>

                            <div class="service-box-content">

                                <h4 style="color:aqua">tentes médicaux</h4>

                                <p>Actions visent à une approche globale de la santé,
                                    considérée dans ses dimensions physiques, mais aussi psychiques et sociales et une approche intégrant le
                                    curatif, préventif et la promotion de la santé</p>

                            </div><!-- service-box-content -->

                        </div><!-- service-box -->

                    </div><!-- col -->
                    <div class="col-md-6 col-lg-4">

                        <div class="service-box style-1 wow fadeInUp" data-wow-delay="0.2s">

                            <i class="smartmed-icon-patch-1"></i>

                            <div class="service-box-content">

                                <h4 style="color:aqua">collecte d'aides</h4>

                                <p>Collecte d'aide humanitaire en matériel médical et en médicaments et 
                                    envoi pour plusieurs hôpitaux ainsi que des vêtements pour les 
                                    personnes temporairement déplacés.</p>

                            </div><!-- service-box-content -->

                        </div><!-- service-box -->

                    </div><!-- col -->
                </div><!-- row -->
                </div><!-- container -->

</div>

    <!----------------------------------------CHERCHER EVENT---------------------------------------------------------->            <div class="container box">
    <br >
  <h8><small> 
    <table id="customer_data" style="width:100%">
     <thead>
      <tr >

       <th><b>nom event</b></th>
       <th><b>lieu event</b></th>
       <th><b>date début</b></th>
       <th><b>date fin</b></th>

      </tr>
     </thead>
    </table>
  <br />
  <br />

</small>
</h8>


<script type="text/javascript" language="javascript" >
 $(document).ready(function(){

  $('#customer_data').DataTable({
   "processing" : true,
   "serverSide" : true,
   "ajax" : {
    url:"fetch.php",
    type:"POST"
   },
   dom: 'lBfrtip',
   buttons: [
    'copy','excel','print'
   ],
   "lengthMenu": [ [1, -1], [1, "All"] ]
  });
  
 });
 
</script>  

        <!-- SCRIPTS -->
        <!-- Global Required Scripts Start -->

    <!---------------------------------------- END CHERCHER EVENT---------------------------------------------------------->        
  <!----------------------------------AFFICHER EVENTS------------------------------------------>

              <?PHP
            foreach($listeEvent as $row){
            
                ?>
                
                 <h1> <p><?PHP echo $row['nom_event']; ?><br>
                <h3> à <?PHP echo $row['lieu_event']; ?></h3><p><h1>
                <center>  
                <form method="POST" action="addPart.php"><input type="submit" name="participer" value="participer">

                      
                          <div id="font"><input type="hidden" value="<?PHP echo $row['nom_event']; ?>" name="nom_event"><br></div>
                         </form></center>           

            <div class="container mb-5">
                <div class="row">
                    <div class="col-md-12">

                        <div class="timeline">
                            <div class="row align-items-start">
                                
                                <div class="col-md-5 mr-auto timeline-item wow fadeInUp">

                                    <h4>
                                                    <small> Lancement </small><br></h4>
                                                   <sup><?PHP echo $row['date_debut']; ?></sup>
                                                    <br>
                                    
                                </div><!-- col -->
                                <div class="col-md-5 ml-auto timeline-item wow fadeInUp">

                                    <h4>
                                    
                                        <small> Cloture</small><br></h4>
                                        <sup><?PHP echo $row['date_fin']; ?></sup>
                                    
                                                    
                                        
                                    
                                </div><!-- col -->
                                
                            </div><!-- timline -->

                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->
<h6>Nombre de participants |<?PHP echo $row['nb_par']; ?></h6>
             <!-- row -->
             </div>

             <?PHP
                }
                ?>
           
           </div>
           
  <!----------------------------------END AFFICHER EVENTS------------------------------------------>

    <!-- FOOTER -->
        <footer id="footer-container">

            <div id="footer">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="widget widget-text">

                                <div class="text-center">

                                    <p><img src="assets/images/logo.png" alt=""></p>
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
                                    <li><a href="#">Acceuil</a></li>
                                    <li><a href="#">A propos</a></li>
                                    <li><a href="#">Evenements</a></li>
                                    <li><a href="#">Produits</a></li>
                                    <li><a href="#">Articles</a></li>
                                    <li><a href="#">Contactez-nous</a></li>
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
   

    <!-- BOOTSTRAP JS -->
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- VIEWPORT -->
    <script src="assets/plugins/viewport/jquery.viewport.min.js"></script>

    <!-- MENU -->
    <script src="assets/plugins/menu/hoverintent.min.js"></script>
    <script src="assets/plugins/menu/superfish.min.js"></script>

    <!-- FANCYBOX -->
    <script src="assets/plugins/fancybox/jquery.fancybox.min.js"></script>

    <!-- OWL CAROUSEL -->
    <script src="assets/plugins/owl-carousel/owl.carousel.min.js"></script>

    <!-- PARALLAX -->
    <script src="assets/plugins/parallax/jquery.stellar.min.js"></script>

    <!-- ISOTOPE -->
    <script src="assets/plugins/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="assets/plugins/isotope/isotope.pkgd.min.js"></script>

    <!-- CONTACT FORM VALIDATE & SUBMIT -->
    <script src="assets/plugins/validate/jquery.validate.min.js"></script>
    <script src="assets/plugins/submit/jquery.form.min.js"></script>

    <!-- GOOGLE MAPS -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwJB5U3ZU5nnV3ta4t1VSz92zQi_3Xmmo"></script>
    <script src="assets/plugins/googlemaps/gmap3.min.js"></script>

    <!-- CHARTS -->
    <script src="assets/plugins/charts/jquery.easypiechart.min.js"></script>

    <!-- COUNTER -->
    <script src="assets/plugins/counter/jquery.simplecounter.min.js"></script>

    <!-- INSTAFEED -->
    <script src="assets/plugins/instafeed/instafeed.min.js"></script>

    <!-- TWITTER -->
    <script src="assets/plugins/twitter/twitterfetcher.min.js"></script>

    <!-- YOUTUBE PLAYER -->
    <script src="assets/plugins/ytplayer/jquery.mb.ytplayer.min.html"></script>

    <!-- COUNTDOWN -->
    <script src="assets/plugins/countdown/jquery.countdown.min.js"></script>

    <!-- ANIMATIONS -->
    <script src="assets/plugins/animations/wow.min.js"></script>

    <!-- THEME OPTIONS -->
    <script src="assets/plugins/theme-options/jquery.cookie.min.js"></script>
    <script src="assets/plugins/theme-options/theme-options.js"></script>

    <!-- CUSTOM JS -->
    <script src="assets/js/custom.js"></script>

</body>


<!-- Mirrored from www.smartpixel.tech/smartmed/news.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Nov 2020 13:39:05 GMT -->
</html>