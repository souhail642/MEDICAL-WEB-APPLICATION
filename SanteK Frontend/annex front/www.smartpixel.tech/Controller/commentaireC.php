<?php 
require_once "../config.php";
class commentaireC{
public function affichercommentaire($idquestion){
			$sql="SELECT * From commentaire where idquestion=".$idquestion."";
			$db=config::getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste;
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
}

public function ajoutercommentaire($commentaire){
			$sql="insert into commentaire(idquestion,iduser,commentaire) values(:idquestion,:iduser,:commentaire)";
			$db=config::getConnexion();
			try{
			$req=$db->prepare($sql);
			 $idquestion=$commentaire->getIdquestion();	
			  $iduser=$commentaire->getIduser();
			$commentaire=$commentaire->getCommentaire();
			$req->bindValue(':iduser',$iduser);
					$req->bindValue(':idquestion',$idquestion);
				$req->bindValue(':commentaire',$commentaire);
			

			$req->execute();
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
			
}




public function spprimercommentaire($id){
			$sql="DELETE FROM commentaire where id=:id";
			$db=config::getConnexion();
			try{
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
			$req->execute();
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
			
			
	
}
}
?>