<?php
 class LikeDislike{
     private $id;
      private $iduser;
	 private $idarticle;
	  private $likes;
	   private $dislike;
	    
 
    public function __construct(){
		
	
		
		}
		
		
 
      
		public function setId($id)
		{
			$this->id=$id;
		}
		
		public function setIduser($iduser)
		{
			$this->iduser=$iduser;
		}
		
		
		public function setIdarticle($idarticle)
		{
			$this->idarticle=$idarticle;
		}
		
		
	
		public function setLike($likes)
		{
			$this->likes=$likes;
		}
		public function setDislike($dislike)
		{
			$this->dislike=$dislike;
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
		
		
		
	public function getLike(){
			return $this->likes;
		}
		public function getDislike(){
			return $this->dislike;
		}
		
}

?>