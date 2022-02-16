
<?php
include  "../model/jaime.php";
include  "../controller/likedislikeC.php";
session_start();
$likedislikeC= new likedislikeC();
$iduser=$_SESSION['id'];
$idarticle=$_GET['idarticle'];
echo $idarticle;

$exist=$likedislikeC->existe($idarticle,$iduser);
echo $exist;
if ($exist!=0)
{
	echo "bonjour";
	$likedislikeC->updatedislike($iduser , $idarticle);
}
else
{echo "insert";
	$likedislikeC->ajouterdislike($iduser ,$idarticle);
}


header('Location:http://localhost/Projet-Web-main/Mes%20Sites%20Web/SanteK%20Frontend/www.smartpixel.tech/smartmed/news-single.php?id='.$idarticle);
?>