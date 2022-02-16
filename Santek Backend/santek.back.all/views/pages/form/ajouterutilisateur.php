<?php
include  "../Model/utilisateur.php";
include  "../Controller/utilisateurC.php";

$utilisateur= new Utilisateur($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['login'],$_POST['mdp'],$_POST['role'],
$_POST['image']);
echo $_POST['image'];
var_dump($utilisateur);
$UtilisateurC= new  UtilisateurC();
$UtilisateurC->ajouterutilisateur($utilisateur);

	


	
		//header('Location:login.php');

?>