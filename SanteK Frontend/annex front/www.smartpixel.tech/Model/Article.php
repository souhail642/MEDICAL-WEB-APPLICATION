<?php
 class Article{
     private $id;
      private $titre;
	 private $image;
	  private $description;
	   private $datepub;
	    private $nblike;
		 private $nbcomment;
		  private $idmed;
		  private $specialite;
 
    public function __construct($titre,$image,$description,$specialite){
		
		
		$this->titre=$titre;
		$this->image=$image;
		$this->description=$description;
		$this->specialite=$specialite;
		
		
		}
		
		
 
      
		public function setId($id)
		{
			$this->id=$id;
		}
		
		public function setTitre($titre)
		{
			$this->titre=$titre;
		}
		
		
		public function setImage($image)
		{
			$this->image=$image;
		}
		
		
	public function setIdmed($idmed)
		{
			$this->idmed=$idmed;
		}
		public function setDescription($description)
		{
			$this->description=$description;
		}
		public function setDate($date)
		{
			$this->datepub=$date;
		}
		public function setLike($nblike)
		{
			$this->nblike=$nblike;
		}
 public function setComment($nbcomment)
		{
			$this->nbcomment=$nbcomment;
		}
		public function setSpecialite($specialite)
		{
			$this->specialite=$specialite;
		}
		public function getId(){
			return $this->id;
		}
	public function getSpecialite()
		{
			return $this->specialite;
		}
		public function getTitre(){
			return $this->titre;
		}
		
		public function getImage(){
			return $this->image;
		}
		
	public function getIdmed(){
			return $this->idmed;
		}
		public function getDescription(){
			return $this->description;
		}
		public function getLike(){
			return $this->nblike;
		}
		public function getComment(){
			return $this->nbcomment;
		}
	public function getdates(){
			return $this->datepub;
		}
}

?>