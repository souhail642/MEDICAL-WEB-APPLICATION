<?php
include  "../model/Article.php";
include  "../controller/ArticleC.php";

$idarticle=$_GET['id'];
echo $_GET['id'];
$articlec= new articleC();
$articlec->spprimerarticle($idarticle);


	header('Location:ajouterarticle.php');

?>