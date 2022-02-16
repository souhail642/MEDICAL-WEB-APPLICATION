 <?php
	include_once "../../../controller/function.php";
    $fct = new consul();
	if(isset($_GET['id']))
	{
		if(!empty($_GET['id']))
		{
			$rows = $fct->supprimerDossier((int)$_GET['id']);
			header("Location: showDossier.php");
		}
		else 
			header("Location: showDossier.php");
	}
	else 
		header("Location: showDossier.php");
?>