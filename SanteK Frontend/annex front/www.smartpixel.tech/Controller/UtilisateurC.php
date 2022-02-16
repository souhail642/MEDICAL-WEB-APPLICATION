<?php 
require_once "../config.php";
class UtilisateurC{
public function connexionUser($email,$password){
			$sql="SELECT * From Utilisateur where email='".$email."' and password='".$password."'  ";
						$db=config::getConnexion();
			try{
			$query=$db->prepare($sql);
			$query->execute();
			$count=$query->rowCount();
			if($count==0){
			$message="pseudo ou le mot de passe est incorrect";}
			else{$x=$query->fetch();
			$message=$x['email'];
			
			}
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
			return $message;
}
	public function afficherdocteur(){
			$sql="SELECT * From utilisateur where  role='docteur' ";
			$db=config::getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste;
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
			
}
public function ajouterutilisateur($utilisateur){
			$sql="insert into utilisateur(nom,prenom,email,login,password,image,role) values(:nom,:prenom,:email,:login,:password,:image,:role)";
			$db=config::getConnexion();
			try{
			$req=$db->prepare($sql);
		
			$nom=$utilisateur->getNom();
			$prenom=$utilisateur->getPrenom();
			$email=$utilisateur->getEmail();
			$login=$utilisateur->getLogin();
			$password=$utilisateur->getpassword();
			$role=$utilisateur->getRole();
				$image=$utilisateur->getImage();
			
			$req->bindValue(':nom',$nom);
			$req->bindValue(':prenom',$prenom);
			$req->bindValue(':email',$email);
			$req->bindValue(':login',$login);
			$req->bindValue(':password',$password);
			$req->bindValue(':role',$role);
			$req->bindValue(':image',$image);
			$req->execute();
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
			
}
public function recuperuser($email,$password){
			$sql="SELECT * From Utilisateur where email='".$email."' and password='".$password."'";
			$db=config::getConnexion();
			try{
			$liste=$db->query($sql);
			
			return $liste;
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
}
public function recupererusers($id){
			$sql="SELECT * From Utilisateur where id=".$id."";
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