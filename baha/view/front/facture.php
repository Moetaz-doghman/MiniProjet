<?php
require("fpdp/fpdf.php");
include "../../controller/commandeC.php";
	require_once ("composant/composant.php");


    if (
        isset($_POST["prenom"]) &&
        isset($_POST["nom"]) && 
        isset($_POST["adresse"]) &&
        isset($_POST["tel"]) &&
            isset($_POST["email"]) 
       ) 
        
     {
        if (
            !empty($_POST["prenom"]) &&  
            !empty($_POST["nom"]) && 
            !empty($_POST["adresse"]) &&  
            !empty($_POST["tel"]) && 
                  !empty($_POST["email"])
            
        )  {
            $commande = new commande(
                $_POST['prenom'],
                $_POST['nom'],
                $_POST['tel'],
                $_POST['adresse'], 
                $_POST['email'],
                $_POST['produit'],
                $_POST['total'],
               
                
                
            );
            $commandeC = new commandeC();
            $commandeC->ajoutercommande($commande);
        }
        else
            $error = "Missing information";
    }
    
	$listecommandes=$commandeC->affichercommande();
     
    class mypdf extends FPDF
      {
         function header()
           {

           
               $this->SetTextColor(30,144,255);

                // Arial bold 15
                $this->SetFont('Arial','B',35);
    $this->Cell(276,5,'Facture',0,0,'C');
    // Saut de ligne
    $this->Ln();
    $this->SetFont('Times','',20);
    // Saut de ligne
    $this->Ln(20);
    
              
           }
            function Footer()
                {
                    
                    // Position at 1.5 cm from bottom
                    $this->SetY(-15);
                    // Arial italic 8
                    $this->SetFont('Arial','I',8);
                    // Page number
                    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
                }
      }

        $pdf = new mypdf('P','mm','A4');
        $title = 'Facture';
        $pdf->SetTitle($title);
        $pdf->AliasNbpages();
        $pdf->AddPage('L','A4',0);
        $pdf->Ln();
        $pdf->SetFont('Times','B',12);
        $pdf->Cell(20,10,'Nom',1,0,'C');
        $pdf->Cell(100,10,'Produits',1,0,'C');
        $pdf->Cell(20,10,'Adresse',1,0,'C');
        $pdf->Cell(25,10,'Telephone',1,0,'C');
        $pdf->Cell(85,10,'Email',1,0,'C');
        $pdf->Cell(20,10,'Total',1,0,'C');
        
        
    
         
                         $pdf->Ln();
                         $pdf->Cell(20,20,$_POST['nom'],1,0,'C');
                         $pdf->Cell(100,20,$_POST['produit'],1,0,'C');
                         $pdf->Cell(20,20,$_POST['adresse'],1,0,'C');
                         $pdf->Cell(25,20,$_POST['tel'],1,0,'C');
                         $pdf->Cell(85,20,$_POST['email'],1,0,'C');
                         $pdf->Cell(20,20,$_POST['total'],1,0,'C');


                         
                 
               
        $pdf->Output(); 
        
                  
?>