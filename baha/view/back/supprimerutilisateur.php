<?PHP
	include "../../controller/UtilisateurC.php";

	$produitC=new utilisateurC();
	
	if (isset($_POST["id"])){
		$produitC->supprimerutilisateur($_POST["id"]);
		header('Location:client.php');
	}

?>