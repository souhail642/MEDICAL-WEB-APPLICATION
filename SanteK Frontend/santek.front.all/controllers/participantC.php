<?PHP

class participantC{


    function afficherParticipant($participant){
		echo "nom_par: ".$participant->getnom_par()."<br>";
        echo "prenom_par: ".$participant->getprenom_par()."<br>";
        echo "login_par: ".$participant->getlogin_par()."<br>";
        echo "pwd_par: ".$participant->getpwd_par()."<br>";
        echo "grp_sang: ".$participant->getgrp_sang()."<br>";
		
    }
    
    function ajouterParticipant($participant) {
        $sql="insert into participant (nom_par,prenom_par,login_par,pwd_par,grp_sang) values (:nom_par,:prenom_par,:login_par,:pwd_par,:grp_sang)";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
        
        $nom_par=$participant->getnom_par();
        $prenom_par=$participant->getprenom_par();
        $login_par=$participant->getlogin_par();
        $pwd_par=$participant->getpwd_par();
        $grp_sang=$participant->getgrp_sang();

        
        $req->bindValue(':nom_par',$nom_par);
        $req->bindValue(':prenom_par',$prenom_par);
        $req->bindValue(':login_par',$login_par);
        $req->bindValue(':pwd_par',$pwd_par);
        $req->bindValue(':grp_sang',$grp_sang);
        
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        
    }

    function afficherParticipants(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From participant";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	function supprimerPrticipants($nom_par){
		$sql="DELETE FROM participant where nom_par= :nom_par";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':nom_par',$nom_par);
		try{
            $req->execute();
           header('Location: afficherParticipant.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}



	function modifierParticipant($participant,$id_par){
		$sql="UPDATE participant SET nom_par=:nom_par, prenom_par=prenom_par,login_par=:login_par,pwd_par=:pwd_par,grp_sang=:grp_sang WHERE id_par=:id_par";

		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        try{		
        $req=$db->prepare($sql);
		
        $nom_par=$participant->getnom_par();
        $prenom_par=$participant->getprenom_par();
        $login_par=$participant->getlogin_par();
        $pwd_par=$participant->getpwd_par();
        $grp_sang=$participant->getgrp_sang();


        $datas = array(':id_par'=>$id_par,':nom_par'=>$prenom_par,':prenom_par'=>$nom_par,':login_par'=>$login_par,':pwd_par'=>$pwd_par,':grp_sang'=>$grp_sang);
        
		
        $req->bindValue(':nom_par',$nom_par);
        $req->bindValue(':prenom_par',$prenom_par);
        $req->bindValue(':login_par',$login_par);
        $req->bindValue(':pwd_par',$pwd_par);
        $req->bindValue(':grp_sang',$grp_sang);
        $req->bindValue(':id_par',$id_par);

            $s=$req->execute();

           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
         echo " Les datas : " ;
        print_r($datas);

        }
		
	}
    public function countPar($nom_event){
        $sql="SELECT COUNT(*) AS nb_par FROM participant where id_par ='".$id_par."'";
        $db=config::getConnexion();
        try{
        $query = $db->prepare($sql);
        $query->execute();
        $result = $query->fetch();
        $nbArticles = (int) $result['nb_par'];
                return $nbArticles;
        }
        catch(Exception $e){
            die('Erreur:' .$e->getMessage());
        }
}
    function participerevent($id_event){
    $sql="UPDATE evenement SET nb_par=nb_par+1 where id_event=".$id_event."";
    $db = config::getConnexion();
    try{
        $req=$db->prepare($sql);

    $req->execute();
    }
    catch(Exception $e){
        die('Erreur:' .$e->getMessage());
    }		
}
/*function trierEvents(){
        $sql="SELECT * from evenement ORDER BY nom_event ASC";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }*/

    
    /*function afficherStatut($participant){
     
        $sql="SELECT * from participant where id_par=$id_par";
        $sql="SELECT * from evenement ORDER BY nom_event ASC";
        //$sql="SElECT participant.id_par,evenement.nom_event,evenement.date_debut From evenement,participant where participant.id_par='$participant' and evenement.id_event=evenement.id_event ";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }*/
/*
    function ArchvierEvents($id_event,$id_par){
        $sql="DELETE FROM participant where id_event= :id_event and id_par=:id_par" ;
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id_event',$id_event);
         $req->bindValue(':id_par',$id_par);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function rechercherEvent($id_event){
		$sql="SELECT * from evenement where id_event=$id_event";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}*/
	
}

?>