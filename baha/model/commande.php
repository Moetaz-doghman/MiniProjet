<?php
class commande 
{

    private $id;
	private $prenom;
	private $nom;
	private $tel;
	private $adresse;
	private $produits;
	private $prix;
	private $email;


	 

	function __construct($prenom,$nom,$tel,$adresse,$email,$produits,$prix)
	{
    
        $this->prenom=$prenom ;
        $this->nom=$nom;
		$this->tel=$tel;
		$this->adresse=$adresse;
		$this->email=$email;
		$this->produits=$produits;
        $this->prix=$prix;



		
	}
    

	function getid()
	{
		return $this->id;
	}
    function getprenom(){
		return $this->prenom;
	}
	function getnom(){
		return $this->nom;
	}
	function gettel(){
		return $this->tel;
	}
	function getadresse(){
		return $this->adresse;
	}
    function getprix(){
		return $this->prix;
	}
	function getemail(){
		return $this->email;
	}
	function getproduits(){
		return $this->produits;
	}
	
	

	function setprenom($prenom){
		$this->prenom=$prenom;
	}
    function setnom($nom){
		$this->nom=$nom;
	}
    function settel($tel)
    {
        $this->tel=$tel;
    }	
	function setadresse($adresse)
    {
        $this->adresse=$adresse;
    }
	function setprix($prix){
		$this->prix=$prix;
	}
	function setemail($email){
		$this->email=$email;
	}
	function setproduits($produits){
		$this->produits=$produits;
	}
	
	

}

?>