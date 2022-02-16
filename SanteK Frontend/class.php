<?php
	class rdv{
		private $id_rdv;
        private $first_name;
        private $last_name;
        private $email;
		private $phone;
		private $speciality;
        private $date1;
		private $hours;
        private $description;
		
		public function __construct($first_name,$last_name,$email,$phone,$speciality,$date1,$hours,$description){
            $this->first_name=$first_name;
            $this->last_name=$last_name;
            $this->email=$email;
			$this->phone=$phone;
			$this->speciality=$speciality;
            $this->date1=$date1;
			$this->hours=$hours;
            $this->description=$description;
        }
		public function getid_rdv(){
			return $this->id_rdv;
        }
        
		public function getfirst_name(){
			return $this->first_name;
		}
		public function getlast_name(){
			return $this->last_name;
		}
        public function getemail(){
			return $this->email;
		}
		public function getphone(){
			return $this->phone;
		}
		public function getspeciality(){
			return $this->speciality;
		}
        public function getdate1(){
			return $this->date1;
		}
		public function gethours(){
			return $this->hours;
		}
        public function getdescription(){
			return $this->description;
		}

        public function setid_rdv($id_rdv){
			$this->id_rdv=$id_rdv;
		}
		public function setfirst_name($first_name){
			$this->first_name=$first_name;
		}
		public function setlast_name($last_name){
			$this->last_name=$last_name;
        }
        public function setemail($email){
			$this->email=$email;
        }
		public function setphone($phone){
			$this->phone=$phone;
        }
		public function setspeciality($speciality){
			$this->speciality=$speciality;
		}
        public function setdate1($date){
			$this->date1=$date1;
        }
		public function sethours($hours){
			$this->hours=$hours;
        }
        public function setdescription($description){
			$this->description=$description;
        }
}
	class dossier{
		private $nom_patient;
        private $date_n ;
        private $adresses;
		private $faxe;
        private $type_rap;
		private $periode;
		
		public function __construct($nom_patient,$date_n,$adresses,$faxe,$type_rap,$periode){
            $this->nom_patient=$nom_patient;
            $this->date_n=$date_n;
            $this->adresses=$adresses;
			$this->faxe=$faxe;
            $this->type_rap=$type_rap;
			$this->periode=$periode;
        }
		public function getnomp(){
			return $this->nom_patient;
        }
        
		public function getdaten(){
			return $this->date_n;
		}
		public function getadresses(){
			return $this->adresses;
		}
        public function getfaxe(){
			return $this->faxe;
		}
		public function gettype_rap(){
			return $this->type_rap;
		}
        public function getperiode(){
			return $this->periode;
		}

        public function setnomp($nom_patient){
			$this->nom_patient=$nom_patient;
		}
		public function setdaten($date_n){
			$this->date_n=$date_n;
		}
		public function setadresses($adresses){
			$this->adresses=$adresses;
        }
        public function setfaxe($faxe){
			$this->faxe=$faxe;
        }
		public function settype_rap($type_rap){
			$this->type_rap=$type_rap;
        }
        public function setperiode($periode){
			$this->periode=$periode;
        }
}
?>