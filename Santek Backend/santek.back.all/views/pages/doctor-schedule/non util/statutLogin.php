
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
$listeEvent=$eventC->ajouterParticipant($id_event);


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





<!-----------------------------------------CODE DE  AJOUTER PARTICCIAPNT------------------------------------->
<form name="e" method="POST" action="ajouterParticipant.php">

<div class="col-md-3">
							<div class="side">

							<div class="fh5co-staff">
								<a href="statutEvent.php"></a>
								<h3>Statut evenement</h3>
								
								<p>Veuillez cliquer pour vous inscrire pour participer à un évenement</p>
                                
                                
                            </div>
                            <div class="ms-panel-body">
                                <form class="needs-validation" novalidate>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="prenom_par">Prénom<?PHP echo $row['prenom_par']; ?></label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="prenom_par" placeholder="Entrez votre prénom"  required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="nom_par">Nom<?PHP echo $row['nom_par']; ?></label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="nom_par" placeholder="Entrez votre Nom" required>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="login_par">Adresse Electronique<?PHP echo $row['login_par']; ?></label>
                                            <div class="input-group">
                                                <input type="email" class="form-control" id="login_par" placeholder="Entrez votre e-mail" required>

                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="pwd_par">Créer Un Mot De Passe<?PHP echo $row['pwd_par']; ?></label>
                                            <div class="input-group">
                                                <input type="password" class="form-control" id="pwd_par" placeholder="Entrer le mot de passe" required>

                                            </div>
                                        </div>
                                    </div>                          
                                        <div class="col-md-6 mb-3">
                                            <label for="grp_sang">Groupe Sanguin<?PHP echo $row['grp_sang']; ?></label>
                                            <div class="input-group">
                                                <select class="form-control" id="grp_sang" required>
                                                    <option value="">A+</option>
                                                    <option value="">A-</option>
                                                    <option value="">B+</option>
                                                    <option value="">B-</option>
                                                    <option value="">AB+</option>
                                                    <option value="">AB-</option>
                                                    <option value="">O+</option>
                                                    <option value="">O-</option>
                                                </select>

                                            </div>
                                        </div>
         <div>
		 <a href='statutLogin.php'><input class="btn btn-primary" type="submit" name="participer" value="Participer" ></a>
							<input type="hidden" value="<?PHP echo $row['id_par']; ?>" name="id_par">
        </div>
</form>  
<!---------------------------------------------------------------------------------->



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

