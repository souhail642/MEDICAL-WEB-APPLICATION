
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Santek</title>


	</head>
	<body>
		
	
	
	<div id="page">

<?PHP

include "../../../controller/eventC.php";
//include "header.php";
include "../../../config.php";

$event1C=new EventC();
$listeEvent=$event1C->afficherEvents();


?>
    <?PHP
foreach($listeEvent as $row){
	?>

	<div id="fh5co-blog">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-12 col-md-offset-0 text-center fh5co-heading">
					<h2><span>Les Evenements</span></h2>
				</div>
			</div>




					<div class="col-md-3">
							<div class="side">

							<div class="fh5co-staff">
								<a href="statutEvent.php"><img src="images/user-2.jpg" alt="Free HTML5 Templates by FreeHTML5.co"></a>
								<h3>Statut evenement</h3>
								
								<p>Veuillez cliquer pour vous inscrire pour participer à un évenement</p>
								<div class="controls">
              <label class="control-label">votre nom</label>
              <input class=" form-control" style="width: 45%" id="nom_par" type="text" name="nom_par"><?PHP echo $row['nom_event']; ?></span>
			  <div class="error-message"></div>
			  
			  <label class="control-label">votre prénom</label>
              <input class=" form-control" style="width: 45%" id="prenom_par" type="text" name="prenom_par">
              <div class="error-message"></div>
								<ul class="fh5co-social-icons">

							
								</ul>

							</div>
						</div>
					</div>


			<div class="row">
				<div class="col-md-4">
					<div class="fh5co-blog ">
						<div class="title text-center">
							<span class="category"><?PHP echo $row['nom_event']; ?></span>
						</div>
						
						<div class="blog-text text-center">
							<p>Lieu: <?PHP echo $row['lieu_event']; ?></p>
							<p>Date de debut de l'évenement: <?PHP echo $row['date_debut']; ?></p>
							<p>Date de fin de l'évenement: <?PHP echo $row['date_fin']; ?></p>
							
							<form method="POST" action="ajouterParticipant.php">
							<a href='statutLogin.php'><input class="btn btn-primary" type="submit" name="participer" value="Participer" ></a>
							<input type="hidden" value="<?PHP echo $row['id_par']; ?>" name="id_par">
	</form>	
								
								
							</ul>
						</div> 
					</div>
				</div>

			</div>
		</div>
	</div>

	<?php
}
?>


	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

