<?php
include  "../Model/Question.php";
include  "../Controller/questionC.php"; 

$idqes=$_GET['id'];
echo $_GET['id'];

$nbcommentaire=$_GET['i']-1;
$idq=$_GET['idq'];
echo $idq;
$questionc= new questionC();
$questionc->spprimerquestion($idqes);

$questionc->updatenbcomm($idq,$nbcommentaire)	;
header('Location:http://localhost/Projet-Web-main/Mes%20Sites%20Web/SanteK%20Frontend/www.smartpixel.tech/smartmed/news-single.php?id='.$idq);





?>