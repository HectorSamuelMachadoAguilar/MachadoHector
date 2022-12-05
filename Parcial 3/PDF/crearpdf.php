<?php
    require('./FPDF/fpdf.php');
    
    $nombre = $_POST['nombre'];

    $pdf = new FPDF();
    $pdf->AddPage();
    
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(13,7,'Nombre: ');
    $pdf->Cell(60,7,' '.$nombre);
    $pdf->Ln(5);
    
    
    
    $pdf->Output();
    ?>