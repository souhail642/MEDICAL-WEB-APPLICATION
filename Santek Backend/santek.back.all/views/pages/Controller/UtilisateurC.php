<?php 
require_once "../config.php";
class UtilisateurC{
public function connexionUser($email,$password){
			$sql="SELECT * From Utilisateur where email='".$email."' and password='".$password."'";
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

public function ajouterutilisateur($utilisateur){
			$sql="insert into utilisateur(nom,prenom,email,login,password,role,image) values(:nom,:prenom,:email,:login,:password,:role,:image)";
			$db=config::getConnexion();
			try{
			$req=$db->prepare($sql);
			$image=$utilisateur->getImage();
			$nom=$utilisateur->getNom();
			$prenom=$utilisateur->getPrenom();
			$email=$utilisateur->getEmail();
			$login=$utilisateur->getLogin();
			$password=$utilisateur->getpassword();
			$role=$utilisateur->getRole();
			$req->bindValue(':image',$image);
			$req->bindValue(':nom',$nom);
			$req->bindValue(':prenom',$prenom);
			$req->bindValue(':email',$email);
			$req->bindValue(':login',$login);
			$req->bindValue(':password',$password);
			$req->bindValue(':role',$role);
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