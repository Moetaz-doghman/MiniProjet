<?php
	include_once "../../config.php";
	require_once '../../model/produit.php';


class produitC {
   
    function afficherproduit()
    {
        $sql="SElECT * From produit";
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

    function ajouterproduit($produit){
        $sql="INSERT INTO produit (categorie,nom,description,prix,image) 
        VALUES (:categorie,:nom,:description,:prix,:image)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
        
            $query->execute([
                'categorie' => $produit->getcategorie(),
                'nom' => $produit->getnom(),
                'description' => $produit->getdescription(),
                'prix' => $produit->getprix(),
                'image' => $produit->getimage()



                
            ]);			
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }			
    }

    function afficherproduit1()
    {
        $sql="SElECT * From produit WHERE categorie='homme'";
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

    function afficherproduit2()
    {
        $sql="SElECT * From produit WHERE categorie='femme'";
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


   
   

   
    		
    
   


}

	

?>