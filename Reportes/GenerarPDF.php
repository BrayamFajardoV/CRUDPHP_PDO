<?php

    include "../FPDF/fpdf.php";
    include "../Conexion.php";

    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf -> SetFont("Arial", "B" , 8);

    $pdf -> Cell(70 ,10 ,"REPORTE DE LIBROS" , 85,0,"C");
    $pdf-> Ln(20);

    $pdf -> Cell(5,8,"Id" , 1 , 0);
    $pdf -> Cell(40,8,"Nombre Libro" , 1 , 0);
    $pdf -> Cell(35,8,"Autor" , 1 , 0);
    $pdf -> Cell(120,8,"Descripcion" , 1 , 0);

    $sql = $conexion->query("SELECT * FROM Libro");
    $Fila = $sql->fetchAll(PDO::FETCH_OBJ);

    $pdf -> Ln(8);

    foreach($Fila as $dato){

        $pdf->Cell(5,8, $dato -> Id, 1 , 0, "b",0);
        $pdf->Cell(40,8, $dato -> NombreLibro, 1 , 0, "b",0);
        $pdf->Cell(35,8, $dato -> Autor, 1 , 0, "b",0);
        $pdf->Cell(120,8, $dato -> Descripcion, 1 , 0, "i",0);
        $pdf -> Ln(8);
    }

    $pdf -> Output();




?>