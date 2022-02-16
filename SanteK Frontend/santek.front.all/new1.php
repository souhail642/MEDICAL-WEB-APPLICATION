<?php 
include  "../model/Article.php";
include  "../controller/ArticleC.php"; 
echo $_POST['titre'];
echo $_POST['image'];
echo $_POST['desc'];

//if(isset($_POST['titre'])&& isset($_POST['image'])&& isset($_POST['description'])&& isset($_POST['specialite']))
 //{if(!empty($_POST['titre'])&&  !empty($_POST['image'])&&  !empty($_POST['description'])&&  !empty($_POST['specialite']))
	 
	 
	//{
		$article= new Article(
$_POST['titre'],
$_POST['image'],
$_POST['desc'],$_POST['spec']);

$articlec= new articleC();
$articlec->ajouterarticle($article);

//header('Location:ajouterarticle.php');
// }
 //}
 ?>