<?php
 class commentaire{
     private $id;
   private $idquestion;
  private $iduser;
    private $commentaire;
  
 

		
		  public function __construct($commentaire){
		
		

		$this->commentaire=$commentaire;
		
		}
 
      
		public function setId($id)
		{
			$this->id=$id;
		}
		
		public function setIdquestion($idquestion)
		{
			$this->idquestion=$idquestion;
		}
		
		
		public function setCommentaire($commentaire)
		{
			$this->commentaire=$commentaire;
		}
		
	public function setIduser($iduser)
		{
			$this->iduser=$iduser;
		}
		
		public function getId(){
			return $this->id;
		}
		
				
	public function getIdquestion()
		{
			return $this->idquestion;
		}
		
	public function getIduser()
		{
			return $this->iduser;
		}
		
		public function getCommentaire(){
			return $this->commentaire;
		}
		
		
}

?>