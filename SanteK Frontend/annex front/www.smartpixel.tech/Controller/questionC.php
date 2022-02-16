<?php 
require_once "../config.php";
class questionC{
public function afficherquestion($idarticle){
			$sql="SELECT * From qestion where idarticle=".$idarticle."";
			$db=config::getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste;
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
}

public function ajouterquestion($question){
			$sql="insert into qestion(idarticle,iduser,question) values(:idarticle,:iduser,:question)";
			$db=config::getConnexion();
			try{
			$req=$db->prepare($sql);
			 $idarticle=$question->getIdarticle();	
			  $iduser=$question->getIduser();
			$question=$question->getQuestion();
			$req->bindValue(':iduser',$iduser);
					$req->bindValue(':idarticle',$idarticle);
				$req->bindValue(':question',$question);
			

			$req->execute();
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
			
}


public function updatenbcomm($idarticle , $nb)
			{
			$sql="UPDATE article SET nbcomment=".$nb." where id=".$idarticle."";
			$db=config::getConnexion();
			try{
			$req=$db->prepare($sql);
		
			$req->execute();
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
		
}


public function spprimerquestion($id){
			$sql="DELETE FROM qestion where id=:id";
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

public function updatequestion($question)
			{
			$sql="UPDATE qestion SET question=:question where id=:id ";
			$db=config::getConnexion();
			try{
			$req=$db->prepare($sql);
			$id=$question->getId();
			$question=$question->getQuestion();
			$req->bindValue(':id',$id);
			$req->bindValue(':question',$question);
			
			$req->execute();
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
		
}

public function recupererquestion($id){
			$sql="SELECT * From qestion where id=".$id."";
			$db=config::getConnexion();
			try{
				
			$liste=$db->query($sql);
			return $liste;
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
			
}





}
?>