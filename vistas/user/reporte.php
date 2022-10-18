<?php

require "/xampp/htdocs/unicaes/config/conexion.php";
require "plantilla.php";

if (!empty($_POST)) {
    
    $con = new Database();
    $resultado = $con->Conexion();
    $sql = "SELECT id_user username, email, direction, ins_date FROM usuarios";

    $pdf = new PDF("P", "mm", "letter");
    $pdf->AliasNbPages();
    $pdf->SetMargins(10, 10, 10);
    $pdf->AddPage();

    $pdf->SetFont("Arial", "B", 9);

    $pdf->Cell(10, 5, "Id", 1, 0, "C");
    $pdf->Cell(30, 5, "Usuario", 1, 0, "C");
    $pdf->Cell(40, 5, "Email", 1, 0, "C");
    $pdf->Cell(60, 5, "Direccion", 1, 0, "C");
    $pdf->Cell(30, 5, "Fecha de alta", 1, 0, "C");

    $pdf->SetFont("Arial", "", 9);

    if($resultado = $resultado->query($sql)){
        while ($fila = $resultado->fetch()) {
            $pdf->Cell(10, 5, "", 1, 1, "C");
            $pdf->Cell(10, 5, $fila['id_user'], 1, 0, "C");
            $pdf->Cell(30, 5, utf8_decode($fila['username']), 1, 0, "C");
            $pdf->Cell(40, 5, $fila['email'], 1, 0, "C");
            $pdf->Cell(60, 5, utf8_decode($fila['direction']), 1, 0, "C");
            $pdf->Cell(30, 5, $fila['ins_date'], 1, 0, "C");
            
            $pdf->Cell(10, 5, "", 1, 1, "C");
        }
    }
    

    $pdf->Output('', 'registro.pdf');
}
