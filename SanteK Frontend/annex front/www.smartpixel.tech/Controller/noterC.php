<?php 
require_once "../config.php";
class noteC{


public function existe($idarticle,$iduser){
			$sql="SELECT COUNT(*) AS nb_note FROM noter WHERE idarticle=".$idarticle." and iduser=".$iduser."";
			$db=config::getConnexion();
			try{
			$query = $db->prepare($sql);
$query->execute();
$result = $query->fetch();
$note = (int) $result['nb_note'];
			return $note;
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
}

public function sommefaible($idarticle){
			$sql="SELECT SUM(note) AS nb_note FROM noter WHERE idarticle=".$idarticle." and note=1 ";
			$db=config::getConnexion();
			try{
			$query = $db->prepare($sql);
$query->execute();
$result = $query->fetch();
$nbnote = (int) $result['nb_note'];
			return $nbnote;
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
}
public function sommebien($idarticle){
			$sql="SELECT SUM(note) AS nb_note FROM noter WHERE idarticle=".$idarticle." and note=4 ";
			$db=config::getConnexion();
			try{
			$query = $db->prepare($sql);
$query->execute();
$result = $query->fetch();
$nbnote = (int) $result['nb_note'];
			return $nbnote;
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
}
public function sommeab($idarticle){
			$sql="SELECT SUM(note) AS nb_note FROM noter WHERE idarticle=".$idarticle." and note=3 ";
			$db=config::getConnexion();
			try{
			$query = $db->prepare($sql);
$query->execute();
$result = $query->fetch();
$nbnote = (int) $result['nb_note'];
			return $nbnote;
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
}
public function sommeexcellent($idarticle){
			$sql="SELECT SUM(note) AS nb_note FROM noter WHERE idarticle=".$idarticle." and note=5 ";
			$db=config::getConnexion();
			try{
			$query = $db->prepare($sql);
$query->execute();
$result = $query->fetch();
$nbnote = (int) $result['nb_note'];
			return $nbnote;
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
}
public function sommemoyenne($idarticle){
			$sql="SELECT SUM(note) AS nb_note FROM noter WHERE idarticle=".$idarticle." and note=2 ";
			$db=config::getConnexion();
			try{
			$query = $db->prepare($sql);
$query->execute();
$result = $query->fetch();
$nbnote = (int) $result['nb_note'];
			return $nbnote;
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
}
public function countt($idarticle){
			$sql="SELECT COUNT(*) AS nb_note FROM noter where idarticle=".$idarticle."";
			$db=config::getConnexion();
			try{
			$query = $db->prepare($sql);
$query->execute();
$result = $query->fetch();
$nb_note = (int) $result['nb_note'];
			return $nb_note;
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
}
public function count1($idarticle){
			$sql="SELECT COUNT(*) AS nb_note FROM noter where idarticle=".$idarticle." and note=1";
			$db=config::getConnexion();
			try{
			$query = $db->prepare($sql);
$query->execute();
$result = $query->fetch();
$nb_note = (int) $result['nb_note'];
			return $nb_note;
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
}
public function count2($idarticle){
			$sql="SELECT COUNT(*) AS nb_note FROM noter where idarticle=".$idarticle." and note=2";
			$db=config::getConnexion();
			try{
			$query = $db->prepare($sql);
$query->execute();
$result = $query->fetch();
$nb_note = (int) $result['nb_note'];
			return $nb_note;
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
}
public function count3($idarticle){
			$sql="SELECT COUNT(*) AS nb_note FROM noter where idarticle=".$idarticle." and note=3";
			$db=config::getConnexion();
			try{
			$query = $db->prepare($sql);
$query->execute();
$result = $query->fetch();
$nb_note = (int) $result['nb_note'];
			return $nb_note;
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
}
public function ajouternote1($iduser ,$idarticle){
			$sql="INSERT INTO `noter`( `idarticle`, `iduser`,  `note`) VALUES (".$idarticle.",".$iduser.",1)";
			$db=config::getConnexion();
			try{
			$req=$db->prepare($sql);	
			$req->execute();
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
			
}


public function ajouternote3($iduser ,$idarticle){
			$sql="INSERT INTO `noter`( `idarticle`, `iduser`,  `note`) VALUES (".$idarticle.",".$iduser.",3)";
			$db=config::getConnexion();
			try{
			$req=$db->prepare($sql);	
			$req->execute();
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
			
}


public function ajouternote2($iduser ,$idarticle){
			$sql="INSERT INTO `noter`( `idarticle`, `iduser`,  `note`) VALUES (".$idarticle.",".$iduser.",2)";
			$db=config::getConnexion();
			try{
			$req=$db->prepare($sql);	
			$req->execute();
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
			
}













}
?>