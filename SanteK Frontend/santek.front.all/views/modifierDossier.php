<?php
	include_once "../Controller/function.php";

    // create an instance of the controller     
    $fct = new consul();
	$rows = [];
	if(isset($_GET['id']))
	{
		if(!empty($_GET['id']))
		{
			$rows = $fct->consulterDossier((int)$_GET['id']);
		}
		else 
			header("Location: showDossier.php");
	}
	else 
		header("Location: showDossier.php");
	
	if (
        isset($_POST["nom_patient"]) &&       
        isset($_POST["date_n"]) &&
        isset($_POST["adresses"]) && 
		isset($_POST["faxe"]) &&
        isset($_POST["type_rap"]) && 
        isset($_POST["periode"]) 
    ) {
        if (
            !empty($_POST["nom_patient"]) && 
            !empty($_POST["date_n"]) && 
            !empty($_POST["adresses"]) && 
			!empty($_POST["faxe"]) && 
            !empty($_POST["type_rap"]) && 
            !empty($_POST["periode"]) 
        ) {
            $fct= new dossier(           
                $_POST['nom_patient'],
                $_POST['date_n'], 
                $_POST['adresses'],
				$_POST['faxe'], 
                $_POST['type_rap'],
                $_POST['periode']
            );
            $fct->modifierDossier((int) $_POST['nom_patient'], $dossier);
            header('Location:showDossier.php');
        }
        else
            $error = "Missing information";
    }
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Information</title>
</head>
    <body>
        <button><a href="showDossier.php">Retour à la liste</a></button>
        <hr>
        
        <form action="" method="POST">
            <table border="1" align="center">

                <tr>
					<td>
                        <label for="id">Patient Name:
                        </label>
                    </td>
					<td><input readonly type="text" name="id" id="id" maxlength="20" value="<?php echo $rows['nom_patient']; ?>"></td>
				</tr>
				<tr>
                    <td>
                        <label for="nom">Date Of Birth:
                        </label>
                    </td>
                    <td><input type="date" name="date_n" id="date_n" maxlength="20" value="<?php echo $rows['date_n']; ?>"></td>
                </tr>
                <tr>
                    <td>
                        <label for="adresses">Adresses:
                        </label>
                    </td>
                    <td><input type="text" name="adresses" id="adresses" maxlength="20" value="<?php echo $rows['adresses']; ?>"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="phone">Faxe:
                        </label>
                    </td>
                    <td>
                        <input type="number" name="faxe" id="faxe" value="<?php echo $rows['faxe']; ?>">
                    </td>
                </tr>
                <tr>
              
                    <td>
                        <label for="date">Report Date:
                        </label>
                    </td>
                    <td>
                        <input type="date" name="periode" id="periode" value="<?php echo $rows['periode']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="type_rap">Report Type:
                        </label>
                    </td>
                    <td>
                        <p>
                                    <textarea class="col-12" id="type_rap" name="type_rap" rows="5" value ="<?php echo $rows['type_rap']; ?>" cols="25" placeholder="" required></textarea>
                                    <span></span>
                        </p>
                    </td>
                </tr>
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>	