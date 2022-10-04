<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <title>Editar Libro</title>
</head>
<body>

    <?php
        include "Conexion.php";

        $CodigoId = $_REQUEST["Id"];

        $sql = $conexion->prepare("SELECT * FROM Libro WHERE Id = ?");
        $sql -> execute([$CodigoId]);

        $Fila = $sql->fetch(PDO::FETCH_OBJ);

    ?>
    <div class="container">
        <h1 class="text-center" style="background-color: blueviolet; color:aliceblue; border-radius: 10px;">Editar Libro</h1>
        <br>
    </div>
    <div class="container">
    <br>
    <form action="Editar.php" method="POST">
    <input type="Hidden" class="form-control" name="Id" value="<?php echo $Fila -> Id?>">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre del Libro</label>
        <input type="text" class="form-control" name="NombreLibro" value="<?php echo $Fila -> NombreLibro?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Autor</label>
        <input type="text" class="form-control" name="AutorLibro" value="<?php echo $Fila -> Autor?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Descripcion</label>
        <input type="text" class="form-control" name="DescripcionLibro" value="<?php echo $Fila -> Descripcion?>">
    </div>
    <input type="hidden" name="hidden" value="1">
    <button type="submit" class="btn btn-success">Enviar</button>
    <a href="Index.php" class="btn btn-dark">Regresar</a>
    </form>
    </div>
</body>
</html>