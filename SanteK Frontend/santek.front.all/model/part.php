<?PHP
class participant{
    private $id_par;
	private $nom_par;
	private $prenom_par;
	private $login_par;
	private $pwd_par;
	private $grp_sang;


	
	function __construct($nom_par,$prenom_par,$login_par,$pwd_par,$grp_sang){		
		$this->nom_par=$nom_par;
		$this->prenom_par=$prenom_par;
		$this->login_par=$login_par;
		$this->pwd_par=$pwd_par;
		$this->grp_sang=$grp_sang;
			
	}

    function getid_par(){
		return $this->id_par;
	}
	function getnom_par(){
		return $this->nom_par;
	}
    function getprenom_par(){
		return $this->prenom_par;
	}
	function getlogin_par(){
		return $this->login_par;
	}
    function getpwd_par(){
		return $this->pwd_par;
	}
    function getgrp_sang(){
		return $this->grp_sang;
	}


	function setid_par($id_par){
		$this->id_par=$id_par;
	}
	function setnom_par($nom_par){
		$this->nom_par=$nom_par;
	}
    function setprenom_par($prenom_par){
		$this->prenom_par=$prenom_par;
	}
	function setlogin_par($login_par){
		$this->login_par=$login_par;
	}
	function setpwd_par($pwd_par){
		$this->pwd_par=$pwd_par;
	}
	function setgrp_sang($grp_sang){
		$this->grp_sang=$grp_sang;
	}
	
} 

?>