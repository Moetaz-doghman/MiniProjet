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

    function supprimerproduit($produit)
    {
        $sql="DELETE FROM produit where id= :id ";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        
        $req->bindValue(':id',$_POST["id"]);
        try{
            $req->execute();
          //  header('Location: produit.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function modifierproduit($produit, $id){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE produit SET 
                    categorie = :categorie, 
                    nom = :nom, 
                    description = :description,
                    prix = :prix,
                    image = :image
                   
                   
                WHERE id = :id'
            );
            $query->execute([
                'categorie' => $produit->getcategorie(),
                'nom' => $produit->getnom(),
                'description' => $produit->getdescription(),
                'prix' => $produit->getprix(),
                'image' => $produit->getimage(),

               

                'id' => $id
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function recupereretat($id)
    {
        $sql="SELECT * from produit where id=$id";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();

            $user=$query->fetch();
            return $user;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


   
   

   
    		
    
   


}

	

?>