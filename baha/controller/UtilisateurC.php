<?php
	include_once "../../config.php";
	require_once '../../model/utilisateur.php';


class UtilisateurC {
   
    
    function ajouterutilisateur($utilisateur){
        $sql="INSERT INTO utilisateur (nom,prenom,date,numero,email,password) 
        VALUES (:nom,:prenom,:date,:numero,:email,:password)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
        
            $query->execute([
                'nom' => $utilisateur->getNom(),
                'prenom' => $utilisateur->getPrenom(),
                'date' => $utilisateur->getDate(),
                'numero' => $utilisateur->getNumero(),
                'email' => $utilisateur->getEmail(),
                'password' => $utilisateur->getPassword()




                
            ]);			
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }			
    }

    function afficherutilistauer()
    {
        $sql="SElECT * From utilisateur";
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

    function supprimerutilisateur($utilisateur)
    {
        $sql="DELETE FROM utilisateur where id= :id ";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        
        $req->bindValue(':id',$_POST["id"]);
        try{
            $req->execute();
          //  header('Location: client.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    


}

	

?>