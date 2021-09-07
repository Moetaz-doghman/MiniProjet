<?php
	include_once "../../config.php";
	require_once '../../model/commande.php';


 class commandeC {
   
    function affichercommande()
    {
        $sql="SElECT * From commande";
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

    function ajoutercommande($commande){
        $sql="INSERT INTO commande (prenom,nom,tel,prix,email) 
        VALUES (:prenom,:nom,:tel,:email,:prix)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
        
            $query->execute([
                'prenom' => $commande->getprenom(),
                'nom' => $commande->getnom(),
                'tel' => $commande->gettel(),
                'prix' => $commande->getprix(),
                'email' => $commande->getemail()



                
            ]);			
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }			
    }


    function supprimercommande($commande)
    {
        $sql="DELETE FROM commande where id= :id ";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        
        $req->bindValue(':id',$_POST["id"]);
        try{
            $req->execute();
          //  header('Location: commande.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function modifiercommande($commande, $id){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE commande SET 
                    prenom = :prenom, 
                    nom = :nom, 
                    tel = :tel,
                    prix = :prix,
                    email = :email
                   
                   
                WHERE id = :id'
            );
            $query->execute([
                'prenom' => $commande->getprenom(),
                'nom' => $commande->getnom(),
                'tel' => $commande->gettel(),
                'prix' => $commande->getprix(),
                'email' => $commande->getemail(),

               

                'id' => $id
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
 }

?>