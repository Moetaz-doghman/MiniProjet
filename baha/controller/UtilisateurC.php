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

    function recherchernom($nom){
		$sql="SELECT * From utilisateur WHERE nom= '$nom' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}	
	}


    
    function rechercherprenom($prenom){
		$sql="SELECT * From utilisateur WHERE prenom= '$prenom' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}	
	}

    function modifierutilisateur($utilisateur, $id){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE utilisateur SET 
                    nom = :nom, 
                    prenom = :prenom, 
                    date = :date,
                    numero = :numero,
                    email = :email,
                    password = :password
                   
                   
                WHERE id = :id'
            );
            $query->execute([
                'nom' => $utilisateur->getNom(),
                'prenom' => $utilisateur->getPrenom(),
                'date' => $utilisateur->getDate(),
                'numero' => $utilisateur->getNumero(),
                'email' => $utilisateur->getEmail(),
                'password' => $utilisateur->getPassword(),

               

                'id' => $id
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function recupereretat($id)
    {
        $sql="SELECT * from utilisateur where id=$id";
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

    function login($email,$password)
    {
        $sql = "SELECT * FROM `utilisateur` WHERE email='$email' and password= '$password' ";
         $db= config::getConnexion();
         try{
            $query=$db->prepare($sql);
            $query->execute();
            $count=$query->rowCount();
    
            if($count==0) {
                  $message = "Incorrect";
                  return $message;
            }else {
                  $x=$query->fetch();
                  return $x;
              }
               }
                catch (Exception $e){
                   $message=" ".$e->getMessage();
                   return  $message;
               }
    }

    function checkmail($email){
		$sql = "SELECT * FROM `utilisateur` WHERE email='$email'";
		 $db= config::getConnexion();
		 try{
			$query=$db->prepare($sql);
			$query->execute();
			$count=$query->rowCount();
	
			if($count==0) {
				  $message = "Incorrect";
				  return $message;
			}else {
				  $x=$query->fetch();
				  return $x["id"];
			  }
			   }
				catch (Exception $e){
				   $message=" ".$e->getMessage();
				   return  $message;
			   }
	}

    function updatePassword($id,$password){
        $sql="UPDATE utilisateur set Password='$password' where id='$id' ";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
        
            $query->execute();			
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }			
    }



    


}

	

?>


