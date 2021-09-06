<?php
	include_once "../../config.php";
	require_once '../../model/panier.php';


class panierC {
   
    function afficherpanier()
    {
        $sql="SElECT * From panier";
        $db = config::getConnexion();
        try
        {
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }   
    }

    function ajouterpanier($panier){
        $sql="INSERT INTO panier (categorie,nom,description,prix,image) 
        VALUES (:categorie,:nom,:description,:prix,:image)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
        
            $query->execute([
                'categorie' => $panier->getcategorie(),
                'nom' => $panier->getnom(),
                'description' => $panier->getdescription(),
                'prix' => $panier->getprix(),
                'image' => $panier->getimage()



                
            ]);			
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }			
    }

   
   

   
    		
    
   


}

	

?>