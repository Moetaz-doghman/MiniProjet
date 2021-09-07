<?php
class commande 
{

    private $id;
	private $prenom;
	private $nom;
	private $tel;
	private $prix;
	private $email;


	 

	function __construct($prenom,$nom,$tel,$email,$prix)
	{
    
        $this->prenom=$prenom ;
        $this->nom=$nom;
		$this->tel=$tel;
		$this->email=$email;
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
    function getprix(){
		return $this->prix;
	}
	function getemail(){
		return $this->email;
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
	function setprix($prix){
		$this->prix=$prix;
	}
	function setemail($email){
		$this->email=$email;
	}
	
	

}

?>