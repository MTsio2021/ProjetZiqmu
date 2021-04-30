<?php 

function creerPdfInscription($inscription){?>
    <?php
    // permet d'inclure la bibliothèque fpdf
    require('fpdf/fpdf182/fpdf.php');

    // instancie un objet de type FPDF qui permet de créer le PDF
    $pdf=new FPDF();
    // ajoute une page
    $pdf->AddPage();
    // définit la police courante
    $pdf->SetFont('Arial','B',16);
    // affiche du texte
    $pdf->Cell(190,10,'Inscription au cours de '.$inscription['libMatiere'],1,1,'C');
    // affiche une image
    $pdf->Image('images/imgentete.jpg',45,30, 120, 60);
    $pdf->Cell(10,200,"L'eleve ".$inscription['nomAdherent']." ".$inscription['prenomAdherent']." est inscrit au cours de ".$inscription['libMatiere']  );

    // Enfin, le documnt est terminé et envoyé au navigateur grâce à Output().
    ob_end_clean();
    $pdf->Output();   
    }?>