<?PHP
include "../../../controller/participantC.php";
include "../../../config.php";
$participantC=new ParticipantC();
if (isset($_POST["id_event"])){
	$participantC->supprimerPrticipants($_POST["id_event"]);
	header('Location: statutEvent.php');
}	
?>



