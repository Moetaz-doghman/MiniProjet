<?php
require("fpdp/fpdf.php");
include "../../controller/utilisateurC.php";

    $UtilisateurC=new UtilisateurC();
    $listeUsers=$UtilisateurC->afficherutilistauer();

    class mypdf extends FPDF
      {
         function header()
           {

           
               $this->SetTextColor(30,144,255);

                // Arial bold 15
                $this->SetFont('Arial','B',35);
    $this->Cell(276,5,'Gestion Des Comptes',0,0,'C');
    // Saut de ligne
    $this->Ln();
    $this->Ln(20);

    $this->SetFont('Times','',20);
    $this->Cell(276,10,'Liste Des Comptes',0,0,'C');
    // Saut de ligne
    $this->Ln();

    
              
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
        $title = 'Comptes';
        $pdf->SetTitle($title);
        $pdf->AliasNbpages();
        $pdf->AddPage('L','A4',0);
        $pdf->Ln();
        $pdf->SetFont('Times','B',12);
        $pdf->Cell(20,10,'ID',1,0,'C');
        $pdf->Cell(40,10,'Nom',1,0,'C');
        $pdf->Cell(40,10,'Prenom',1,0,'C');
        $pdf->Cell(50,10,'Date de naissance',1,0,'C');
        $pdf->Cell(30,10,'Telephone',1,0,'C');
        $pdf->Cell(80,10,'Email',1,0,'C');
        
    
        
        foreach($listeUsers as $user){
    

                         $pdf->Ln();
                         $pdf->Cell(20,10, $user['id'],1,0,'C');
                         $pdf->Cell(40,10, $user['nom'],1,0,'C');
                         $pdf->Cell(40,10, $user['prenom'],1,0,'C');
                         $pdf->Cell(50,10, $user['date'],1,0,'C');
                         $pdf->Cell(30,10, $user['numero'],1,0,'C');
                         $pdf->Cell(80,10, $user['email'],1,0,'C');



                     }
               
        $pdf->Output(); 
                
?>