
<?PHP
include "../model/part.php";
include "../controllers/participantC.php";
include "../config.php";



if (isset($_POST['nom_par']) and isset($_POST['prenom_par']) and isset($_POST['login_par']) and isset($_POST['pwd_par']) and isset($_POST['grp_sang'])){
	$participant1=new participant($_POST["nom_par"],$_POST["prenom_par"],$_POST["login_par"],$_POST["pwd_par"],$_POST["grp_sang"]);
	
	$participant1C=new participantC();
	$participant1C->ajouterParticipant($participant1);
	header('location: services-3.php');
}	
else{
	echo "vérifier les champs";
}
?>



