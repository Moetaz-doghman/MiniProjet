<?PHP
	include "../../controller/produitC.php";

	$produitC=new produitC();
	
	if (isset($_POST["id"])){
		$produitC->supprimerproduit($_POST["id"]);
		header('Location:produit.php');
	}

?>