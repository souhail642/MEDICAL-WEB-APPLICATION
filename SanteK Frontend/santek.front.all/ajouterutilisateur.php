<?php
include  "../Model/utilisateur.php";
include  "../Controller/utilisateurC.php";

$utilisateur= new Utilisateur($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['login'],$_POST['mdp'],$_POST['image'],$_POST['role']);
$UtilisateurC= new  UtilisateurC();
$UtilisateurC->ajouterutilisateur($utilisateur);

	


	
		//header('Location:login.php');

?>