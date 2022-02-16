<?php
include  "../Model/commentaire.php";
include  "../Controller/commentaireC.php"; 

$idcomm=$_GET['id'];
echo $_GET['id'];

$idq=$_GET['idq'];
echo $idq;
$commentairec= new commentaireC();
$commentairec->spprimercommentaire($idcomm);


header('Location:http://localhost/Projet-Web-main/Mes%20Sites%20Web/SanteK%20Frontend/www.smartpixel.tech/smartmed/news-single.php?id='.$idq);





?>