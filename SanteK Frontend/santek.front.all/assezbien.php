<?php
include  "../Model/noter.php";
include  "../Controller/noterC.php";
session_start();
$noteC= new noteC();

$iduser=$_SESSION['id'];
$idarticle=$_GET['idarticle'];
echo $idarticle;

	


	$noteC->ajouternote3($iduser ,$idarticle);


header('Location:http://localhost/Projet-Web-main/Mes%20Sites%20Web/SanteK%20Frontend/www.smartpixel.tech/smartmed/news-single.php?id='.$idarticle);

?>