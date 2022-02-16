<?php
 class Qestion{
     private $id;
   private $idarticle;
  private $iduser;
    private $qestion;
  
 
    public function __construct($idarticle,$iduser,$qestion){
		
		
		$this->idarticle=$idarticle;
		$this->iduser=$iduser;
		$this->qestion=$qestion;
		
		}
		
		
 
      
		public function setId($id)
		{
			$this->id=$id;
		}
		
		public function setIdarticle($idarticle)
		{
			$this->idarticle=$idarticle;
		}
		
		
		public function setQestion($qestion)
		{
			$this->qestion=$qestion;
		}
		
	public function getIduser($iduser)
		{
			$this->iduser=$iduser;
		}
		
		public function getId(){
			return $this->id;
		}
	public function setIduser()
		{
			return $this->iduser;
		}
		public function getIdarticle(){
			return $this->idarticle;
		}
		public function getQestion(){
			return $this->qestion;
		}
		
		
}

?>