<?PHP

class eventC {

function afficherEvent($evenement){
		echo "nom_event: ".$evenement->getnom_event()."<br>";
        echo "lieu_event: ".$evenement->getlieu_event()."<br>";
        echo "date_debut: ".$evenement->getdate_debut()."<br>";
        echo "date_fin: ".$evenement->getdate_fin()."<br>";
        echo "nb_par: ".$evenement->getdate_fin()."<br>";
		
	}
	
	function ajouterEvent($evenement){
		$sql="insert into evenement(nom_event,lieu_event,date_debut,date_fin,nb_par) values (:nom_event,:lieu_event,:date_debut,:date_fin,nb_par)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom_event=$evenement->getnom_event();
        $lieu_event=$evenement->getlieu_event();
        $date_debut=$evenement->getdate_debut();
        $date_fin=$evenement->getdate_fin();

        
		$req->bindValue(':nom_event',$nom_event);
        $req->bindValue(':lieu_event',$lieu_event);
        $req->bindValue(':date_debut',$date_debut);
        $req->bindValue(':date_fin',$date_fin);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherEvents(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From evenement";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
 

	function supprimerEvents($nom_event){
		$sql="DELETE FROM evenement where nom_event= :nom_event";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':nom_event',$nom_event);
		try{
            $req->execute();
           header('Location: afficher.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}



	function modifierEvent($evenement,$id_event){
		$sql="UPDATE evenement SET nom_event=:nom_event, lieu_event=:lieu_event,date_debut=:date_debut,date_fin=:date_fin WHERE id_event=:id_event";
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        try{		
        $req=$db->prepare($sql);
		
		$nom_event=$evenement->getnom_event();
        $lieu_event=$evenement->getlieu_event();
        $date_debut=$evenement->getdate_debut();        
        $date_fin=$evenement->getdate_fin();


        $datas = array(':id_event'=>$id_event,':nom_event'=>$nom_event,':lieu_event'=>$lieu_event,':date_debut'=>$date_debut,':date_fin'=>$date_fin);
        
		
        $req->bindValue(':nom_event',$nom_event);
        $req->bindValue(':lieu_event',$lieu_event);
        $req->bindValue(':date_debut',$date_debut);        
        $req->bindValue(':date_fin',$date_fin);
        $req->bindValue(':id_event',$id_event);
            $s=$req->execute();

           //header('Location: afficher.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
         echo " Les datas : " ;
        print_r($datas);

        }
		
	}


    function recupererEvent($id_event){
        $sql="SELECT * from evenement where id_event=$id_event";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (PDOException $e){
            die('Erreur: '.$e->getMessage());
        }
    }


    function trierEvents(){
        $sql="SELECT * from evenement ORDER BY nom_event ASC";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    /*function ajouterParticipants($id_event){
            $sql="insert into participant (prenom_par,nom_par,login_par,pwd_par,grp_sang) values (:prenom_par,:nom_par,:login_par,:pwd_par,:grp_sang)";
            $db = config::getConnexion();
            try{
            $req=$db->prepare($sql);
            
            $prenom_par=$participant->getprenom_par();
            $nom_par=$participant->getnom_par();
            $login_par=$participant->getlogin_par();
            $pwd_par=$pwd_par->getpwd_par();
            $grp_sang=$participant->getgrp_sang();
    
            
            $req->bindValue(':prenom_par',$prenom_par);
            $req->bindValue(':nom_par',$nom_par);
            $req->bindValue(':login_par',$login_par);
            $req->bindValue(':pwd_par',$pwd_par);
            $req->bindValue(':grp_sang',$grp_sang);
            
                $req->execute();
               
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }
            
        }*/

    
    function afficherStatut($participant)
    {
     
          $sql="SELECT * from participant where id_par ORDER BY ASC";
          $sql="SELECT * from evenement ORDER BY nom_event ASC";

       // $sql="SElECT participant.id_event,evenement.nom_event,evenement.date_debut evenement.date_fin From evenement,participant where participant.id_par='$participant' and participant.id_event=evenement.id_event ";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }

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
    function participerevent($id_event){
        $sql="UPDATE evenement SET nb_par =: nb_par+1 where id_event=$id_event";

        $req->bindValue(':nb_par',$nb_par);
        $db = config::getConnexion();

        try{
            $req->execute();
            $liste=$db->query($sql);
            return $liste;
            }
        catch(Exception $e){
            die('Erreur:' .$e->getMessage());
        }		
    }
	
}

?>