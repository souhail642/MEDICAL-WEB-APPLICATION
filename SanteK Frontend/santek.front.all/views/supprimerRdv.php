 <?php
	include_once "../../../controller/function.php";
    $function = new consul();
	if(isset($_GET['id_rdv']))
	{
		if(!empty($_GET['id_rdv']))
		{
			$rows = $function->supprimerRdv((int)$_GET['id_rdv']);
			header("Location: showRdv.php");
		}
		else 
			header("Location: showRdv.php");
	}
	else 
		header("Location: showRdv.php");
?>