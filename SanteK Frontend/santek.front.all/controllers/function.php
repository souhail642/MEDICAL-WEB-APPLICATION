<?php
		include "../config.php";

	class consul {
		
		function afficherRdv(){
			
			$sql="SELECT * FROM rdv";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		function afficherDossier(){
			
			$sql="SELECT * FROM dossier";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		

		
		public function ajouterRdv($rdv){
			$sql="INSERT INTO rdv (first_name,last_name,email,phone,speciality,date1,hours,description) 
			VALUES (:first_name,:last_name,:email,:phone,:speciality,:date1,:hours,:description)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'first_name' => $rdv->getfirst_name(),
					'last_name' => $rdv->getlast_name(),
					'email' => $rdv->getemail(),
					'phone' => $rdv->getphone(),
					'speciality' => $rdv->getspeciality(),
					'date1' => $rdv->getdate1(),
					'hours' => $rdv->gethours(),
					'description' => $rdv->getdescription()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		public function ajouterDossier($dossier){
			$sql="INSERT INTO dossier (nom_patient,date_n,adresses,faxe,type_rap,periode) 
			VALUES (:nom_patient,:date_n,:adresses,:faxe,:type_rap,:periode)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'nom_patient' => $dossier->getnomp(),
					'date_n' => $dossier->getdaten(),
					'adresses' => $dossier->getadresses(),
					'faxe' => $dossier->getfaxe(),
					'type_rap' => $dossier->gettype_rap(),
					'periode' => $dossier->getperiode()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function modifierRdv($id_rdv,$rdv){
			$sql="UPDATE rdv SET first_name=:first_name,last_name=:last_name,email=:email,phone=:phone,speciality=:speciality,date1=:date1,hours=:hours,description= :description where id_rdv= :id_rdv";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'first_name' => $rdv->getfirst_name(),
					'last_name' => $rdv->getlast_name(),
					'email' => $rdv->getemail(),
					'phone' => $rdv->getphone(),
					'speciality' => $rdv->getspeciality(),
					'date1' => $rdv->getdate1(),
					'hours' => $rdv->gethours(),
					'description' => $rdv->getdescription(),
					'id_rdv' => $id_rdv
				]);	
				echo $query->rowCount()."records UPDATED successfully";
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
	    }
		function modifierDossier($nom_patient,$dossier){
			$sql="UPDATE dossier SET nom_patient=:nom_patient,date_n=:date_n,adresses=:adresses,faxe=:faxe,type_rap=:type_rap,periode=:periode where nom_patient= :nom_patient";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'nom_patient' => $dossier->getnomp(),
					'date_n' => $dossier->getdaten(),
					'adresses' => $dossier->getadressesl(),
					'faxe' => $dossier->getfaxe(),
					'type_rap' => $dossier->gettype_rap(),
					'periode' => $dossier->getperiode(),
					'nom_patient' => $nom_patient
				]);	
				echo $query->rowCount()."records UPDATED successfully";
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
	    }
		function supprimerRdv(int $id_rdv){
			$sql="DELETE FROM rdv where id_rdv= :id_rdv";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);				
				$query->execute(['id_rdv' =>$id_rdv]);
				echo $query->rowCount() ."records DELETED successfully";
			}catch(Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}	
		}
		function supprimerDossier(int $nom_patient){
			$sql="DELETE FROM dossier where nom_patient= :nom_patient";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);				
				$query->execute(['nom_patient' =>$nom_patient]);
				echo $query->rowCount() ."records DELETED successfully";
			}catch(Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}	
		}
		function consulterRdv(int $id_rdv){
			$sql="SELECT * FROM rdv where id_rdv= :id_rdv";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);				
				$query->execute(['id_rdv' =>$id_rdv]);
				return $query->fetch();
			}catch(Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}	
		}
		function consulterDossier(int $nom_patient){
			$sql="SELECT * FROM dossier where nom_patient= :nom_patient";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);				
				$query->execute(['nom_patient' =>$nom_patient]);
				return $query->fetch();
			}catch(Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}	
		}
	}
?>