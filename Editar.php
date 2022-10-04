<?php

    include "Conexion.php";

    $Id = $_POST["Id"];
    $NombreLibro = $_POST["NombreLibro"];
    $AutorLibro = $_POST["AutorLibro"];
    $DescripcionLibro = $_POST["DescripcionLibro"];


    $sentencia = $conexion->prepare("UPDATE libro SET NombreLibro = ?, Autor = ?, Descripcion = ? WHERE Id = ?");

    $resultado = $sentencia->execute([$NombreLibro, $AutorLibro , $DescripcionLibro, $Id]);

    if ($resultado === TRUE) {
       header("Location: Index.php");
    }else {
        echo "Algo salio mal!";
    }
