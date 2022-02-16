<?php
    include_once "../../../model/class.php";
    include_once "../../../controller/function.php";

    //$error = "non :/"; 
    $function = new consul();
    if (
        isset($_POST["first_name"]) &&       
        isset($_POST["last_name"]) &&
		isset($_POST["email"]) &&       
        isset($_POST["phone"]) &&
		isset($_POST["speciality"]) &&       
		isset($_POST["date1"]) &&       
        isset($_POST["hours"]) &&
        isset($_POST["description"]) 
    ) {

            $rdv = new rdv(           
                $_POST['first_name'],
                $_POST['last_name'], 
				$_POST['email'],
                $_POST['phone'], 
				$_POST['speciality'], 
                $_POST['date1'], 
                $_POST['hours'],
				$_POST['description']
            );
            $function->ajouterRdv($rdv);
            header('Location:appointment-list.php');
        }
        else
            $error = "Missing information";
    

    
?>

