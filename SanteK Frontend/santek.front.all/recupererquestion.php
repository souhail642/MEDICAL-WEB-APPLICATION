<?php

include  "../Model/Question.php";
include  "../Controller/questionC.php";
include  "../Model/Article.php";
include  "../Controller/ArticleC.php";
$id=$_POST['idquest'];
$idq=$_POST['id'];


 
	$quest= new Question($_POST['question']


);








$questionC= new questionC();
$quest->setId($id);




	$questionC->updatequestion($quest); 
	
	
header('Location:http://localhost/Projet-Web-main/Mes%20Sites%20Web/SanteK%20Frontend/www.smartpixel.tech/smartmed/news-single.php?id='.$idq);


  


	

?>
