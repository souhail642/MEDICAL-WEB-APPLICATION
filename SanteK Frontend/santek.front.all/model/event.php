<?PHP
class Evenement{
    private $id_event;
	private $nom_event;
	private $lieu_event;
	private $date_debut;
	private $date_fin;
	private $nb_par;


	
	function __construct($nom_event,$lieu_event,$date_debut,$date_fin,$nb_par){		
		$this->nom_event=$nom_event;
		$this->lieu_event=$lieu_event;
		$this->date_debut=$date_debut;
		$this->date_fin=$date_fin;
		$this->nb_par=$nb_par;

		
	}

    function getid_event(){
		return $this->id_event;
	}
	function getnom_event(){
		return $this->nom_event;
	}
    function getlieu_event(){
		return $this->lieu_event;
	}
	function getdate_debut(){
		return $this->date_debut;
	}
	function getdate_fin(){
		return $this->date_fin;
	} 
	function getnb_par(){
		return $this->nb_par;
	} 



	
	function setid_event($id_event){
		$this->id_event=$id_event;
	}
	function setnom_event($nom_event){
		$this->nom_event=$nom_event;
	}
    function setlieu_event($lieu_event){
		$this->lieu_event=$lieu_event;
	}
    function setdate_debut($date_debut){
		$this->date_debut=$date_debut;
	}
	function setdate_fin($date_fin){
		$this->date_fin=$date_fin;
	}

	function setnb_par($nb_par){
		$this->nb_par=$nb_par;
	}

	



} 

?>