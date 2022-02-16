<?php 
require_once "../config.php";
class articleC{
public function afficherarticle(){
			$sql="SELECT * From article";
			$db=config::getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste;
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
}
public function afficherarticlemed($iduser){
			$sql="SELECT * From article where idmed=".$iduser."";
			$db=config::getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste;
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
}
public function ajouterarticle($article){
			$sql="insert into article(titre,image,description,specialite,idmed) values(:titre,:image,:description,:specialite,:idmed)";
			$db=config::getConnexion();
			try{
			$req=$db->prepare($sql);
			
			$titre=$article->getTitre();
		
			$image=$article->getImage();
				
			$description=$article->getDescription();
			
			$specialite=$article->getSpecialite();
			$idmed=$article->getIdmed();
			
			$req->bindValue(':titre',$titre);
			
			$req->bindValue(':image',$image);
					
				$req->bindValue(':description',$description);
				$req->bindValue(':specialite',$specialite);
					$req->bindValue(':idmed',$idmed);
				
			$req->execute();
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
			
}



public function spprimerarticle($id){
			$sql="DELETE FROM  article where id=:id";
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

public function updatearticle($article)
			{
			$sql="UPDATE article SET titre=:titre,description=:description ,specialite=:specialite where id=:id ";
			$db=config::getConnexion();
			try{
			$req=$db->prepare($sql);
			$id=$article->getId();
			$titre=$article->getTitre();
		
		$description=$article->getDescription();
				$specialite=$article->getSpecialite();
			
			
			$req->bindValue(':id',$id);
			$req->bindValue(':titre',$titre);
			

					
				$req->bindValue(':description',$description);
				$req->bindValue(':specialite',$specialite);
			$req->execute();
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
		
}
public function recupererarticle($id){
			$sql="SELECT * From article where id=".$id."";
			$db=config::getConnexion();
			try{
				
			$liste=$db->query($sql);
			return $liste;
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
			
}



public function chercherarticle($specialite){
			$sql="SELECT * From article where specialite='".$specialite."'";
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