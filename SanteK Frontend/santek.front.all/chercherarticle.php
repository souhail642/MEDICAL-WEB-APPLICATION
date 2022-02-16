<?php

include  "../Model/Article.php";
include  "../Controller/ArticleC.php";
	$search=$_GET['search'];

	
	$articleC= new articleC();
	
	
	






		
	if(strcmp($search, "all") == 0 )
	{
	
	


if(isset($_GET['page']) && !empty($_GET['page'])){
    $currentPage = (int) strip_tags($_GET['page']);
}else{
    $currentPage = 1;
}
$parPage=4;
$premier = ($currentPage * $parPage) - $parPage;
$article=$articleC->pagination($premier , $parPage);
$nbArticles=$articleC->countt();



$pages = ceil($nbArticles / $parPage);





	}
	else if (strcmp($search, "tri") == 0) {
		
		
if(isset($_GET['page']) && !empty($_GET['page'])){
    $currentPage = (int) strip_tags($_GET['page']);
}else{
    $currentPage = 1;
}
$parPage=2;
$premier = ($currentPage * $parPage) - $parPage;
$article=$articleC->paginationtri($premier , $parPage );



$nbArticles=$articleC->countt();
$pages = ceil($nbArticles / $parPage);
	}
	
	
	
	else
	{
		
		
		
		
		
		
if(isset($_GET['page']) && !empty($_GET['page'])){
    $currentPage = (int) strip_tags($_GET['page']);
}else{
    $currentPage = 1;
}
$parPage=2;
$premier = ($currentPage * $parPage) - $parPage;
$article=$articleC->paginationcategorie($premier , $parPage , $search);
$nbArticles=$articleC->counts($search);



$pages = ceil($nbArticles / $parPage);

}
	
	



	
	
	
	?>

<!doctype html>

<html>


<!-- Mirrored from www.smartpixel.tech/smartmed/news-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Nov 2020 13:39:05 GMT -->
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

	<link rel="stylesheet"
	href="../resources/assets/plugins/bootstrap/css/bootstrap.min.css" />
	
	<link rel="stylesheet" href="../resources/assets/css/main.css"/>
<link rel="stylesheet" href="../resources/assets/css/theme2.css"/>

</head>

<body >

    <div id="main-container">

        <!-- HEADER -->
        <header id="header">

            <div class="container">
                <div class="row">
                    <div class="col-md-3">

                        <!-- LOGO -->
                        <div id="logo">
                            <a href="index-2.html">
                                <img src="assets/images/logo.png" width="100" height="100" alt="">
                            </a>
                        </div><!-- LOGO -->
<br>
<br>
                    </div><!-- col -->
                    <div class="col-md-9">

                        <!-- MENU -->
                        <nav>

                            <a class="mobile-menu-button" href="#"><i class="fa fa-bars"></i></a>

                            <ul class="menu clearfix" id="menu">
                                <li class="dropdown">
                                    <a href="index-2.html">Acceuil</a>
                                 
                                </li>
                                <li class="dropdown">
                                    <a href="about.html">A propos</a>
                                    
                                </li>
                                <li class="dropdown">
                                    <a href="services.html">Evennement</a>
                                    
                                </li>
                                <li class="dropdown">
                                    <a href="team.html">Produit</a>
                                   
                                </li>
                                <li class="dropdown active">
                                   <a href="news-3.php">Article</a>
                                    
                                <li class="dropdown">
                                    <a href="contact.html">Contactez nous</a>
                                   
                                </li>
                            </ul>

                        </nav>

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->

        </header><!-- HEADER -->

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

        <!-- PAGE CONTENT -->
        <div id="page-content">

            <div id="page-header" class="parallax" data-stellar-background-ratio="0.3"
                 style="background-image: url(images/backgrounds/page-header-4.jpg);">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <h1>Article</h1>

                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->

            </div><!-- page-header -->
			
			
			
                        
						

            <div class="container">
                <div class="row">
				
				<div class="col-md-2">
				</div>
                    <div class="col-md-8">
					
					

                        <div class="widget widget-search">

                            <form name="search" novalidate method="get" action="chercherarticle.php">
							
                                <fieldset>
                                     <!--<input id="s" type="search" name="search" placeholder="" required>-->
									  <div class="form-group">
									 <select  class="custom-select" id="speciality" name="search" required >
                                                
													<option value="all" >Afficher tout</option>
												<option value="tri" >afficher par nb likes</option>
                                                    <option value="Cardiologie ">Cardiologie</option>
                                                <option value="Neurologie">Neurologie</option>
                                                <option value="Surgerie" >Surgerie</option>
                                                <option value="Gynaecologie">Gynaecologie</option>
                                                <option value="Ophthalmologie">Ophthalmologie</option>
                                                <option value="Stomatologie">Stomatologie</option>
                                            </select>
                                     
									 </div>
                                    <span></span>
                                   <input  type="submit" name="submit" value="">
                                </fieldset>
                            </form>

                        </div><!-- widget-search -->
					
					
					<?php $i=0;?>
					
					<?php foreach($article as $row){ ?>
                       
					   <?php $i++; ?>
					   
					   
                        <div onmouseover='ok("<?php echo "mois".$i ?>","<?php echo "jour".$i ?>","<?php echo "annee".$i ?>","<?php echo $row['datepub']  ?>","<?php echo "desc".$i ?>", "<?php echo $row['description']  ?>")' class="blog-article">
		
					<script>

	
						function ok(jour,mois,annee,date,desc,text) {
		console.log(annee);
		 
		 
		document.getElementById(jour).textContent=date.substring(8,10);
		m=date.substring(5,7);
		// alert(m);
	
		// alert(j);
		document.getElementById(annee).textContent=date.substring(0,4);
		if(m==01)
				document.getElementById(mois).textContent="Jan"
		else if (m==02)	
			document.getElementById(mois).textContent="Fev"
		else if (m==03)	
			document.getElementById(mois).textContent="Mar"
		else if (m==04)	
			document.getElementById(mois).textContent="Avr"
		else if (m==05)	
			document.getElementById(mois).textContent="Mai"
		else if (m==06)	
			document.getElementById(mois).textContent="Jun"
		else if (m==07)	
			document.getElementById(mois).textContent="Jui"
		else if (m==08)	
			document.getElementById(mois).textContent="Aou"
		else if (m==09)	
			document.getElementById(mois).textContent="Sep"
		else if (m==10)	
			document.getElementById(mois).textContent="Oct"
		else if (m==11)	
			document.getElementById(mois).textContent="Nou"
		
		else if (m==12)	
			document.getElementById(mois).textContent="Dec"
			
		document.getElementById(desc).textContent=text.substring(0,(text.length/3))+"...";
	}
	
	
					
					</script>
                            <div   class="blog-article-thumbnail" >
<div >
                                <a class="date" >
								<small id="<?php echo "mois".$i ?>"></small>
                                  <span id="<?php echo "jour".$i ?>"></span>
								
								
                                    <small id="<?php echo "annee".$i ?>"></small>
                                </a>
							</div>	
                            <?php  echo  "<a href='news-single.php'>";
							echo"<img src='", $row['image'], "' width='1000' height='1000' alt=''></a> " ;
							?>

                            </div><!-- blog-article-thumbnail -->

                            <h4 class="blog-article-title"><a href="news-single.php"> <?php echo $row['titre'] ?> </a></h4>

                            <div class="blog-article-details">
                              <a class="author" style="color:#26C4EC">Mr:Admin</a>
                                <a class="category" style="color:#26C4EC"><?php echo $row['specialite'] ?></a>
                                <a class="likes" style="color:#26C4EC" ><?php echo $row['nblike'] ?></a>
                            </div><!-- blog-article-details -->

                            <div  onmouseover='description("<?php echo "desc".$i ?>")'  class="blog-article-content">

                                <p id="<?php echo "desc".$i ?>"></p>

                               <?php echo  "<a href='news-single.php?id=", $row['id'] , " '>voir plus</a>";?>


                            </div><!-- blog-article-content -->
                        </div><!-- blog-article -->
					<?php } ?>
						
						
								 <nav>
                    <ul class="pagination">
                       		<?php if ($currentPage == 1) {		} 
							else 
								{?>
									
								 <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>">
            <a href="chercherarticle.php?page=<?= $currentPage - 1 ?>" ><</a>
        </li>
								
							<?php	} ?>
	  
                        <?php for($page = 1; $page <= $pages; $page++): ?>
		
                          <!-- Lien vers chacune des pages (activé si on se trouve sur la page correspondante) -->
                          <li class="page-item <?= ($currentPage == $page) ? "active" : "" ?>">
                                <a href="chercherarticle.php?page=<?= $page  ?>&& search=<?=$_GET['search']?>" ><?= $page ?></a>
                            </li>
                        <?php endfor ?>
						
						
						<?php if ($currentPage == $pages) {		} 
							else {?>
                  <li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
            <a href="chercherarticle.php?page=<?= $currentPage + 1 ?>" >></a>
        </li>
		<?php	}
							?>
                    </ul>
                </nav>
						
						
					
					
	           </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->

        </div><!-- PAGE CONTENT -->
						
						
						
						
						
						 <!-- FOOTER -->
        <footer id="footer-container">

            <div id="footer">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="widget widget-text">

                                <div class="text-center">

                                    <p><img src="assets/images/logo.png" alt=""></p>
                                    <p class="text-uppercase">Santek Pour La Gestion Sanitaire & Communitaire</p>

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
                                        <a href="mailto:info@smart-pixel.xyz">info@santek-pixel.xyz</a>
                                    </li>
                                </ul>

                            </div><!-- widget-contact -->

                            <div class="widget widget-pages">

                                <ul class="inline">
                                    <li><a href="#">Acceuil</a></li>
                                    <li><a href="#">A propos</a></li>
                                    <li><a href="#">Evennement</a></li>
                                    <li><a href="#">Produit</a></li>
                                    <li><a href="#">Article</a></li>
                                    <li><a href="#">Contactez nous</a></li>
                                </ul>

                            </div><!-- widget-pages -->

                            <div class="widget widget-text">

                                <div>

                                    <p class="copyright">
                                        <small>Template by <a href="#">WebONPixel</a> &copy; All rights reserved</small>
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
    <script src="assets/plugins/jquery/jquery-2.2.4.min.js"></script>

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


<!-- Mirrored from www.smartpixel.tech/smartmed/news-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Nov 2020 13:39:05 GMT -->
</html>
