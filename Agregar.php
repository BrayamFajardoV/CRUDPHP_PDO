<?php

    include "Conexion.php";

    $NombreLibro = $_POST['NombreLibro'];
    $Descripcion = $_POST['DescripcionLibro'];
    $Autor = $_POST['AutorLibro'];

    $sql = $conexion -> prepare("INSERT INTO libro (NombreLibro, Autor, Descripcion) VALUES (?,?,?)");

    $resultado = $sql->execute([$NombreLibro, $Autor, $Descripcion]);

    if ($resultado) {
        header("location:Index.php");
    }else{
        echo "No se insertaron los datos";
    }

?>