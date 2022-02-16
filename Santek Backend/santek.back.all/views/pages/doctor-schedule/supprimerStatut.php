<?PHP
include "../../../controller/eventC.php";
include "../../../config.php";
$eventC=new EventC();
if (isset($_POST["nom_event"])){
	$eventC->supprimerEvents($_POST["nom_event"]);
	header('Location: statutEvent.php');
}	
?>



