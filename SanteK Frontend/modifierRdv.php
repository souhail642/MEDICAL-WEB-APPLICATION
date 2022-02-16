<?php
	include_once "../Controller/function.php";

    // create an instance of the controller     
    $function = new consul();
	$rows = [];
	if(isset($_GET['id']))
	{
		if(!empty($_GET['id']))
		{
			$rows = $function->consulterRdv((int)$_GET['id']);
		}
		else 
			header("Location: showRdv.php");
	}
	else 
		header("Location: showRdv.php");
	
	if (
        isset($_POST["id_rdv"]) &&       
        isset($_POST["id_medecin"]) &&
        isset($_POST["date_rdv"]) && 
		isset($_POST["noms"]) &&
        isset($_POST["prenoms"]) && 
        isset($_POST["description"]) 
    ) {
        if (
            !empty($_POST["id_rdv"]) && 
            !empty($_POST["id_medecin"]) && 
            !empty($_POST["date_rdv"]) && 
			!empty($_POST["noms"]) && 
            !empty($_POST["prenoms"]) && 
            !empty($_POST["description"]) 
        ) {
            $rdv= new fucntion(           
                $_POST['id_rdv'],
                $_POST['id_medecin'], 
                $_POST['date_rdv'],
				$_POST['noms'], 
                $_POST['prenoms'],
                $_POST['description']
            );
            $function->modifierRdv((int) $_POST['rdv'], $rdv);
            header('Location:showRdv.php');
        }
        else
            $error = "Missing information";
    }
	
?>