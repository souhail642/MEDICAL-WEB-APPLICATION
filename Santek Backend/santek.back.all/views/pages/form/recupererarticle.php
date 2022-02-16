<?php	
include  "../model/article.php";
include  "../controller/articleC.php"; 
	$id=$_POST['id'];
	$article= new Article($_POST['titre'],
$_POST['image'],$_POST['desc'],$_POST['specialite']

);








$articlec= new articleC();
$article->setId($id);




	$articlec->updatearticle($article);
	
	
	header('Location:ajouterarticle.php');
	
	?>