<?php
 class Question{
     private $id;
   private $idarticle;
  private $iduser;
    private $question;
  
 
    public function __construct($question){
		
		
		
		$this->question=$question;
		
		}
		
		
 
      
		public function setId($id)
		{
			$this->id=$id;
		}
		
		public function setIdarticle($idarticle)
		{
			$this->idarticle=$idarticle;
		}
		
		
		public function setQuestion($question)
		{
			$this->question=$question;
		}
		
	public function setIduser($iduser)
		{
			$this->iduser=$iduser;
		}
		
		public function getId(){
			return $this->id;
		}
	public function getIduser()
		{
			return $this->iduser;
		}
		public function getIdarticle(){
			return $this->idarticle;
		}
		public function getQuestion(){
			return $this->question;
		}
		
		
}

?>