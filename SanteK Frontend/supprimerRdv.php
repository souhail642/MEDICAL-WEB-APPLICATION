 <?php
	include_once "../Controller/function.php";
    $function = new consul();
	if(isset($_GET['id']))
	{
		if(!empty($_GET['id']))
		{
			$rows = $function->supprimerRdv((int)$_GET['id']);
			header("Location: showRdv.php");
		}
		else 
			header("Location: showRdv.php");
	}
	else 
		header("Location: showRdv.php");
?>