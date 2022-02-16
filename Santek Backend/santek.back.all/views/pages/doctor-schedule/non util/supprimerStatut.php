<?PHP
include "../../../controller/eventC.php";
include "../../../config.php";
$eventC=new EventC();
if (isset($_POST["id_event"])){
	$eventC->supprimerEvents($_POST["id_event"]);
	header('Location: statutEvent.php');
}	
?>



