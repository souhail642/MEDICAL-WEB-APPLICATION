<?php
     include '../core/MembresController.php';

		  	$membreC =  new MembresC();
		  
        	 if (isset($_POST['username']) && isset($_POST['mdp'])){
              $membreC->connexionMembreC($_POST['username'],$_POST['mdp']);
            //header('Location:accueil.php');
        }

?>