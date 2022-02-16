<?php 
require_once "../config.php";
class LikeDislikeC{

public function existe($idarticle,$iduser){
			$sql="SELECT COUNT(*) AS nb_likes FROM jaime WHERE idarticle=".$idarticle." and iduser=".$iduser."";
			$db=config::getConnexion();
			try{
			$query = $db->prepare($sql);
$query->execute();
$result = $query->fetch();
$like = (int) $result['nb_likes'];
			return $like;
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
}


public function sommedislike($idarticle){
			$sql="SELECT SUM(dislike) AS nb_dislikes FROM jaime WHERE idarticle=".$idarticle." ";
			$db=config::getConnexion();
			try{
			$query = $db->prepare($sql);
$query->execute();
$result = $query->fetch();
$nbdislike = (int) $result['nb_dislikes'];
			return $nbdislike;
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
}

public function sommelike($idarticle){
			$sql="SELECT SUM(likes) AS nb_likes FROM jaime WHERE idarticle=".$idarticle." ";
			$db=config::getConnexion();
			try{
			$query = $db->prepare($sql);
$query->execute();
$result = $query->fetch();
$nblike = (int) $result['nb_likes'];
			return $nblike;
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
}

public function ajouterlike($iduser ,$idarticle){
			$sql="INSERT INTO `jaime`( `idarticle`, `iduser`, `likes`, `dislike`) VALUES (".$idarticle.",".$iduser.",1,0)";
			$db=config::getConnexion();
			try{
			$req=$db->prepare($sql);	
			$req->execute();
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
			
}


public function updatenblike($idarticle , $nb)
			{
			$sql="UPDATE article SET nblike=".$nb." where id=".$idarticle."";
			$db=config::getConnexion();
			try{
			$req=$db->prepare($sql);
		
			$req->execute();
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
		
}


public function ajouterDislike($iduser ,$idarticle){
			$sql="insert into jaime(idarticle,iduser,likes,dislike) values(:idarticle,:iduser,0,1)";
			$db=config::getConnexion();
			try{
			$req=$db->prepare($sql);	
			$req->bindValue(':iduser',$iduser);
					$req->bindValue(':idarticle',$idarticle);
				
		
			$req->execute();
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
			
}


public function updatedislike($iduser , $idarticle)
			{
			$sql="UPDATE jaime SET likes=0 , dislike=1 where iduser= ".$iduser." and idarticle=".$idarticle."";
			$db=config::getConnexion();
			try{
			$req=$db->prepare($sql);
			$req->execute();
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
		
}


public function updatelike($iduser , $idarticle)
			{
			$sql="UPDATE `jaime` SET `likes`=1,`dislike`=0 WHERE idarticle=".$idarticle." AND iduser=".$iduser."";
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