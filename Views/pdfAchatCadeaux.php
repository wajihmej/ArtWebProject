<?php
   
    require("fpdf/fpdf.php");
    $db=new PDO("mysql:host=localhost;dbname=Projet_food", "root", "mysql");
   
    class myPDF extends FPDF
    {
   
    function header()
    {
    $this->SetFont("Arial","B",14);
            $this->Cell(10,10,"Achats",'C');
            $this->Ln(20);
            $this->Cell(5,5,"liste des Achats:",'C');
            $this->ln();
    }
    function headertable()
    {
    $this->SetFont('Times','B',12);
    $this->Cell(40,10,'Nom',1,0,'C');
    $this->Cell(40,10,'Prix',1,0,'C');
    $this->Cell(40,10,'Quantite',1,0,'C');
    $this->Cell(40,10,'Prixtotal ',1,0,'C');
    $this->ln();
    }
    function viewsTable($db)
    {
    $this->SetFont('times','',12);
    $stmt = $db->query("SELECT tableaux.nom,tableaux.prix,achat.quatite ,achat.prix_total,achat.type FROM tableaux,`achat` WHERE tableaux.id = achat.id_prod and achat.type = 'tableaux'");
        while($data = $stmt->fetch(PDO::FETCH_OBJ))
            {
       $this->Cell(40,10,$data->nom,1,0,'C');
       $this->Cell(40,10,$data->prix,1,0,'L');
       $this->Cell(40,10,$data->quantite,1,0,'L');
       $this->Cell(40,10,$data->prix_total,1,0,'L');
       $this->ln();
            }

    }
    }
    $pdf=new myPDF();
    $pdf->AliasNbPages();
    $pdf->AddPage('L','A4',0);
    $pdf->headertable();
    $pdf->viewsTable($db);
    $pdf->output("Achats.pdf", "D");


?>