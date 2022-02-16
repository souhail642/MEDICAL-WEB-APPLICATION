 <?php
	include_once "../../../controller/function.php";
    $function = new consul();
	if(isset($_GET['id']))
	{
		if(!empty($_GET['id']))
		{
			$rows = $function->supprimerRdv((int)$_GET['id']);
			header("Location: appointment-list.php");
		}
		else 
			header("Location: appointment-list.php");
	}
	else 
		header("Location: appointment-list.php");
?>