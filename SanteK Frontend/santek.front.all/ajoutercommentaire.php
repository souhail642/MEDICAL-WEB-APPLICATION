<?php 
include  "../Model/commentaire.php";
include  "../Controller/commentaireC.php"; 

session_start();
echo $_POST['comm'];
$id=$_POST['id'];
$ida=$_POST['idart'];

echo $id;
//if(isset($_POST['titre'])&& isset($_POST['image'])&& isset($_POST['description'])&& isset($_POST['specialite']))
 //{if(!empty($_POST['titre'])&&  !empty($_POST['image'])&&  !empty($_POST['description'])&&  !empty($_POST['specialite']))
	 
	 
	//{
		$commentaire= new commentaire(

$_POST['comm']);
$commentaire->setIdquestion($id);
$commentaire->setIduser($_SESSION['id']);
$commentairec= new commentaireC;
$commentairec->ajoutercommentaire($commentaire);



header('Location:http://localhost/Projet-Web-main/Mes%20Sites%20Web/SanteK%20Frontend/www.smartpixel.tech/smartmed/news-single.php?id='.$ida);
// }
 //}
 ?>