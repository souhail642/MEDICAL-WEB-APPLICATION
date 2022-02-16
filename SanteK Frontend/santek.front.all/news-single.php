<?php
include  "../Model/commentaire.php";
include  "../Controller/commentaireC.php";
include  "../Model/Question.php";
include  "../Controller/questionC.php";
include  "../Model/Article.php";
include  "../Controller/ArticleC.php";
include_once '../Model/Utilisateur.php';
include_once '../Controller/UtilisateurC.php';
include  "../Model/noter.php";
include  "../Controller/noterC.php";

include  "../model/jaime.php";
include  "../controller/likedislikeC.php";
session_start();
$id=$_GET['id'];
$iduser=$_SESSION['id'];


	$articleC= new articleC();
	$article=$articleC->recupererarticle($id);
	
	
$questionC= new questionC();
$liste=$questionC->afficherquestion($id);

$userC = new UtilisateurC();
  
 $noteC= new noteC();
 $total=$noteC->countt($id);
 
	 
	 

?>
<!doctype html>
<html>


<!-- Mirrored from www.smartpixel.tech/smartmed/news-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Nov 2020 13:39:05 GMT -->
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

    <!-- FONT AWESOME lel icons -->
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
	
	
	<link rel="stylesheet" href="yass/plugins/bootstrap/css/bootstrap.min.css" />


<!-- Core css -->
<link rel="stylesheet" href="yass/css/main.css"/>
<link rel="stylesheet" href="yass/css/theme2.css"/>


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
                                    
                                </li>
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

			
			
			
			                       
			
			
			
			
			
			
			
			
			
                        
						

            <div class="container"  >
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
					
					<?php foreach($article as $row){ 
					$doc=$userC->recupererusers($row['idmed']);
					?>
                       
					   <?php $i++; ?>
					   
					   
                        <div onmouseover='okk("<?php echo "mois".$i ?>","<?php echo "jour".$i ?>","<?php echo "annee".$i ?>","<?php echo $row['datepub']?>")' class="blog-article">
		
					<script>
						function okk(jour,mois,annee,date) {
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
			document.getElementById(mois).textContent="Nov"
		
		else if (m==12)	
			document.getElementById(mois).textContent="Dec"
			
	
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
                            <?php 
							echo"<img src='", $row['image'], "' height='1000' width='1000' alt=''></a> " ;
							?>
							
							<br><br>
			
							              <div class="blog-article-details">
										  <?php foreach($doc as $users){ ?>
                              <a class="author" style="color:#26C4EC">Dr:<?php echo $users['nom'] ?> <?php echo $users['prenom'] ?> </a>  <?php } ?>
                                <a class="category" style="color:#26C4EC"><?php echo $row['specialite'] ?></a>
								<a class="category" style="color:#26C4EC" ><?php echo $row['nbcomment'] ?> commentaires </a>
                               <?php  
								$likedislikeC= new likedislikeC();
								?>
								<a href="like.php?idarticle=<?= $id ?>" >  <?php
								echo $likedislikeC->sommelike($id);
								?>  <i class="fa fa-thumbs-o-up" data-toggle="tooltip" title="J'aime"></i></a>
								
								

 
 <a href="dislike.php?idarticle=<?= $id ?>" >  <?php echo  $likedislikeC->sommedislike($id);
								
                                           
								?> <i class="fa fa-thumbs-o-down" data-toggle="tooltip" title="Je n'aime pas"></i> </a>
 
 
 
 
                            </div><!-- blog-article-details -->
                            </div><!-- blog-article-thumbnail -->

                            <h4 class="blog-article-title"><a > <?php echo $row['titre'] ?> </a></h4>

              <br>

                            <div  >

                                <h6 class="blog-article-title" ><?php echo $row['description'] ?></h6>
                              
                            </div><!-- blog-article-content -->
				
							
							
							
                        </div><!-- blog-article -->
					
				
						
						
						

						
						
						    <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Performance</h3>
                                <div class="card-options">
														
						<?php 


$exist=$noteC->existe($id,$iduser);
 if($exist==0)
 {          
								echo " <a href='excellent.php?idarticle=" , $row['id'] , "' > <li class='icons-list-item'><i class='fa fa-star' data-toggle='tooltip' title='exellent'></i></li></a>";
                                   
                                   echo " <a href='moyenne.php?idarticle=" , $row['id'] , "'>  <li class='icons-list-item'><i class='fa fa-star-half-empty' data-toggle='tooltip' title='moyenne'></i></li></a>";
                                    
                             echo " <a href='faible.php?idarticle=" , $row['id'] , "'> <li class='icons-list-item'><i class='fa fa-star-o' data-toggle='tooltip' title='faible'></i></li></a>"; }
else
 echo "tu as déja noté" ;	?>
                                   <!-- <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                    <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
                                    <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>-->
                                    <div class="item-action dropdown ml-2">
                                        <!--<a href="javascript:void(0)" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>-->
                                        <div class="dropdown-menu dropdown-menu-right">
										
										
										
										
										
										
										
										
										
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a>                                            
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy to</a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-folder"></i> Move to</a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i> Rename</a>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
							 <?php if ($total!=0) { ?>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div id="chart_donut"></div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-vcenter text-nowrap card-table table_custom">
                                                <tr>
                                                    <td>
                                                        <div class="clearfix">
														
																	
									<?php $excellent=($noteC->count3($id)/$noteC->countt($id))*100; ?>
                                                            <div class="float-left"><strong><?php echo $excellent; ?> %</strong></div>
                                                            <div class="float-right"><small class="text-muted">Excellent</small></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-azure" role="progressbar" style="width: <?php echo $excellent; ?>% " aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="clearfix">
														<?php $moyenne=($noteC->count2($id)/$noteC->countt($id))*100; ?>
                                                            <div class="float-left"><strong><?php echo $moyenne; ?>%</strong></div>
                                                            <div class="float-right"><small class="text-muted">Moyenne</small></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-green" role="progressbar" style="width: <?php echo $moyenne; ?>%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>                                            
                                                <tr>
                                                    <td>
                                                        <div class="clearfix">
									
										<?php $faible=($noteC->count1($id)/$noteC->countt($id))*100; ?>
                                                            <div class="float-left"><strong><?php echo $faible; ?> %</strong></div>
                                                            <div class="float-right"><small class="text-muted">Faible</small></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-orange" role="progressbar" style="width: <?php echo $faible; ?>%" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                               
                                                
                                            </table>
                                        </div>
                                    </div>
                                </div>
                           </div>
					<?php }
					else {
						?>
					
					
					  <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div id="chart_donut"></div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-vcenter text-nowrap card-table table_custom">
                                                <tr>
                                                    <td>
                                                        <div class="clearfix">
														
																	
									
                                                            <div class="float-left"><strong>0 %</strong></div>
                                                            <div class="float-right"><small class="text-muted">Excellent</small></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-azure" role="progressbar" style="width:0% " aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="clearfix">
														
                                                            <div class="float-left"><strong>0%</strong></div>
                                                            <div class="float-right"><small class="text-muted">Moyenne</small></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-green" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>                                            
                                                <tr>
                                                    <td>
                                                        <div class="clearfix">
									
										
                                                            <div class="float-left"><strong>0%</strong></div>
                                                            <div class="float-right"><small class="text-muted">Faible</small></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-orange" role="progressbar" style="width:0%" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                               
                                                
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<?php } ?>
                        </div>
						
						
						
						
						
						
						
						
						
						
						<?php } ?>
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
			
						
											 
<script >
						 
						  
						function ok(y,x) {
							
   document.getElementById(y).hidden = false;
   
   document.getElementById(x).hidden = true; 
}	
							
							
						  
 
						  
						  </script>	
	
		    				
		<?php   $i=0; ?>
		
<?php foreach($liste as $row){


$user=$userC->recupererusers($row['iduser']);

	?>
         
			  <div class="blog-article-author">
  <?php foreach($user as $users){ ?>
                            <img  src="<?php echo $users['image'] ?>"   width="50" height="50" alt="">
                         &nbsp&nbsp&nbsp <a class="fn"  > <?php echo $users['nom'] ?> <?php echo $users['prenom'] ?></a>
			  <?php } ?>  
                            <div class="blog-article-author-details">
					
                            <?php   $i++;
							?>
							
							
					 
						
                 <form action="recupererquestion.php" method="post" >
			
								
								
								
								<div id="<?php echo "qest".$i ?>" hidden> 
								 
								<input class="form-control" type="text" id="question" name="question" value="<?php echo $row['question']?>">
								<input type="text" name="idquest" value="<?php echo  $row['id']?>" hidden>
								<input type="text" name="id" value=" <?php echo $_GET['id']; ?>" hidden  >
								 <br>
								 <input  class="btn btn-outline-primary"  type="submit" value="Sauvgarder"  >
								
								</div>
								
								<div id="<?php echo "aff".$i ?>">
								
								
						 <div class="row">
				
				<div class="col-md-9">
								
				<label  class="form-label"><?php echo $row['question']?></label>	 <br>			
                   
				   
				   
				
				</div>
                    <div class="col-md-3">
					
						
						
						
						
						
			   <?php  if($iduser==$row['iduser']) { 
			   echo "  <a class='btn btn-icon js-sweetalert' href='supprimerquestion.php?id=" , $row['id'] , "&idq=",$_GET['id'],"' title='Delete' data-type='confirm'><i class='fa fa-trash-o text-danger'></i></a>";
			 // echo "<a  class='comment-reply-link' href='supprimerquestion.php?id=" , $row['id'] , "&idq=",$_GET['id'],"'>  supprimer  </a>"; 
                 ?>			  
				 
				 <button type="button" class="btn btn-icon" onclick='ok("<?php echo "qest".$i ?>","<?php echo "aff".$i ?>")'  title="Edit"><i class="fa fa-edit"></i></button>
				 

<?php } ?>
				
					






					</div>
						</div>			
		
			  </div>
				 
				 
</form>

<!-- commentaire -->


                            <?php   
							
							
$commentaireC= new commentaireC();
$listecomm=$commentaireC->affichercommentaire($row['id']);
							
						$idq=$row['id'];	?>
							
			<?php foreach($listecomm as $row){ 	 
				 
				 
		$User=$userC->recupererusers($row['iduser']);		 
				 ?>
				 
				 
				 
				 
				 
				 
				 
     
                        <ul class="commentlist">
                            <li class="comment depth-1">
                                <div class="comment-body">

                                    <div class="comment-meta">

                                        <div class="comment-author">
 <?php foreach($User as $users){ ?>
                                            <img class="avatar" src="<?php echo $users['image'] ?>" width="50" height="50" alt="">
                                       <a class="fn" ><?php echo $users['nom'] ?> <?php echo $users['prenom'] ?></a>
 <?php } ?>
										
                                        </div><!-- comment-author -->
<label>  <?php echo $row['commentaire']?></label>
										  

                                    </div><!-- comment-meta -->

                                   <?php if($iduser==$row['iduser']) {  ?>

                                   <div class="reply">
								   
                                        <?php   echo "<a  class='comment-reply-link' href='supprimercommentaire.php?id=" , $row['id'] , "&idq=",$_GET['id'],"'>  supprimer  </a>"; ?>
									  
                                    </div><!-- reply -->
								   <?php  }?>
                                </div><!-- comment-body -->
   
						   </li>
							

   </ul>
<?php } ?>
                        
<form action="ajoutercommentaire.php" method="post" > 
<table border="0">
<tr>

<td>

      <textarea class="form-control" id="comm" name="comm" rows="0" cols="0" required  ></textarea>
						
					</td><td>	
						<input type="text" name="id" value=" <?php echo ($idq);?>" hidden  >
				<input type="text" name="idart" value=" <?php echo $_GET['id']; ?>" hidden  >
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp			
				</td>
                      <td>  <input class="btn btn-outline-primary" type="submit" value="Repondre"  ></td>
						</tr>
						</table>
</form>
	 

                            </div><!-- blog-article-author-details -->

                        </div><!-- blog-article-author -->
						 
		

<script>						
											
											
											function saisirquestion() {
        //Regex for Valid Characters i.e.  Numbers.
        var regex = /^[0-9]+$/
		 
		
        //Validate TextBox value against the Regex.
        var isValid = regex.test(document.getElementById("ques").value);
		 
		ok=true;
		
		
        if (isValid) {
          
		   document.getElementById("val").textContent="La question ne doit pas contenir seulement des lettres alphanumériques.";
		   ok=false;
        }
		
		
		
		
		
		
 
        return ok ;
    }		
						 
	</script>					 
<?php }

					 
				?>		 
						 
													 
					<!-- Bloc Ajouter -->	 
						 <div class="form-group">
						 
			  <div class="blog-article-author">

                            

                            <div class="blog-article-author-details">
					
                           
				 
						<form  onsubmit="return saisirquestion()" action="ajouterquestion.php" method="post" >
						
						<input type="text" name="id" value=" <?php echo $_GET['id']; ?>" hidden  >
						<label class="fn" >Commentaire</label>
						 <textarea class="form-control" id="ques" name="ques" rows="0" cols="0" required  ></textarea>
						
						<p id="val" style="color:red" > </p>
                       
						
						<input type="text" name="i" hidden value=" <?php echo $i ; ?>"   >
						
						
						<center ><input  class="btn btn-outline-primary"  type="submit" value="   publier    "  ></center>
						
						
						</form>
						
				 
				 
                            </div><!-- blog-article-author-details -->

                        </div><!-- blog-article-author -->
						 
			
						 
					</div>
						
                   
                       
                  <!--  Fin Bloc Ajouter -->          
                     
 
        </div><!-- PAGE CONTENT -->
</div>
</div>







        <!-- FOOTER -->
        <footer id="footer-container">

            <div id="footer">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="widget widget-text">

                                <div class="text-center">

                                    <p><img src="assets/images/logo-white.png" alt=""></p>
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
                                        <a href="mailto:info@smart-pixel.xyz">info@santek-pixel.xyz</a>
                                    </li>
                                </ul>

                            </div><!-- widget-contact -->

                            <div class="widget widget-pages">

                                <ul class="inline">
                                    <li><a href="#">Acceuil</a></li>
                                    <li><a href="#">A propos</a></li>
                                    <li><a href="#">Evennement</a></li>
                                    <li><a href="#">Produits</a></li>
                                    <li><a href="#">Articles</a></li>
                                    <li><a href="#">Contactez nous</a></li>
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


	
	
	
<script src="yass/bundles/lib.vendor.bundle.js"></script>

<script src="yass/bundles/apexcharts.bundle.js"></script>

<script src="yass/bundles/jvectormap1.bundle.js"></script>
<script src="yass/bundles/c3.bundle.js"></script>
<script src="yass/bundles/knobjs.bundle.js"></script>
<script src="yass/bundles/morris.bundle.js"></script>
		
						<script>
$(document).ready(function() {
    var options = {
        chart: {
            height: 250,
            type: 'radialBar',
        },
        colors: [ '#e8769f', '#6c7989', '#9aa2ac'],
        plotOptions: {
            radialBar: {
                dataLabels: {
                    name: {
                        fontSize: '22px',
                    },
                    value: {
                        fontSize: '16px',
                    },
                    total: {
                        show: true,
                        label: 'Total',
                        formatter: function (w) {
                            // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
                            return <?php  echo $noteC->countt($id)?>
                        }
                    }
                }
            }
        },
        series: [ <?php echo $excellent; ?>, <?php echo $moyenne; ?>, <?php echo $faible; ?>],
        labels: ['excellent', 'moyenne', 'faible'],        
    }
    var chart = new ApexCharts(
        document.querySelector("#chart_donut"),
        options
    );    
    chart.render();
});


 </script>
<script src="yass/js/core.js"></script>

	
	
	
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


<!-- Mirrored from www.smartpixel.tech/smartmed/news-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Nov 2020 13:39:08 GMT -->
</html>