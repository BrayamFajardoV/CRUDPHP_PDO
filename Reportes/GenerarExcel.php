<?php
    header("Content-type: application/xls");
    header("Content-Disposition: attachment; filename = Excel.xls");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Style.css" media="print">
    <title>Index</title>
</head> 
<body>
    <div class="container">
        <h1 class="text-center" style="background-color: blueviolet; color:aliceblue; border-radius: 10px;">LISTADO DE LIBROS</h1>
        <br>
    </div>
    <div class="container">
    <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre Libro</th>
            <th scope="col">Autor</th>
            <th scope="col">Descripcion</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include "../Conexion.php";

                $sql = $conexion -> query("SELECT * FROM libro");
                $fila = $sql -> fetchAll(PDO::FETCH_OBJ);

                foreach ($fila as $row) {
            ?>

            <tr>
                <th scope="row"><?php echo $row -> Id?></th>
                <td><?php echo $row -> NombreLibro?></td>
                <td><?php echo $row -> Autor?></td>
                <td><?php echo $row -> Descripcion?></td>
                </td>
            </tr>
                    
            <?php
                }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>