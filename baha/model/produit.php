<?php
class produit 
{

  
	private $categorie;
	private $nom;
	private $description;
	private $prix;
	private $image;


	 

	function __construct($categorie,$nom,$description,$prix,$image)
	{
    
        $this->categorie=$categorie ;
        $this->nom=$nom;
		$this->description=$description;
		$this->prix=$prix;
		$this->image=$image;



		
	}
    

	function getid()
	{
		return $this->id;
	}
    function getcategorie(){
		return $this->categorie;
	}
	function getnom(){
		return $this->nom;
	}
	function getdescription(){
		return $this->description;
	}
    function getprix(){
		return $this->prix;
	}
	function getimage(){
		return $this->image;
	}
	
	

	function setcategorie($categorie){
		$this->categorie=$categorie;
	}
    function setnom($nom){
		$this->nom=$nom;
	}
    function setdescription($description)
    {
        $this->description=$description;
    }	
	function setprix($prix){
		$this->prix=$prix;
	}
	function setimage($image){
		$this->image=$image;
	}
	
	

}

?>