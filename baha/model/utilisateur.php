<?PHP
	class Utilisateur{
		private $id = null;
		private $nom = null;
		private $prenom = null;
        private $date = null;
        private $numero = null;
		private $email = null;
		private $password = null;
		
		function __construct($nom,$prenom,$date,$numero,$email,$password){
			
			
			$this->nom=$nom;
			$this->prenom=$prenom;
            $this->date=$date;
            $this->numero=$numero;
			$this->email=$email;
			$this->password=$password;
		}
		
		function getId()
		{
		return $this->id ;
		}
		function getNom()
		 {
			 return $this->nom;
		}
		function getPrenom()
		 {
			return $this->prenom;
		}
        function getDate()
        {
           return $this->date;

       }	function getNumero()
       {
          return $this->numero;
      }
		
		function getEmail() 
		{
			 return $this->email;
		}
		function getPassword() 
		{
			return $this->password;
		}

		
		function setid($id) 
		{
			$this->id=$id;
		}
		function setNom($nom)
		{
			$this->nom=$nom;
		}
		function setPrenom($prenom) 
		{
			$this->prenom=$prenom;
		}
        function setDate($date) 
		{
			$this->date=$date;
		}
        function setNumero($numero) 
		{
			$this->numero=$numero;
		}
		
		function setEmail($email)
		{
			$this->email=$email;
		}
		function setPassword($password) 
		{
			$this->password=$password;
		}
	}
?>