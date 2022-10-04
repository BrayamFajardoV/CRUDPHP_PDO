<?php

    include "Conexion.php";


    $Id = ($_GET["Id"]);

    $sql = $conexion -> prepare("DELETE FROM libro WHERE Id = ?;");
    $resultado = $sql -> execute([$Id]);

    if ($resultado) {
        header("Location: Index.php");
    }


