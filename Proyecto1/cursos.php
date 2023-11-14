<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once("header.php");
    ?>
    <div class="container">
    <h1>Lista de cursos</h1>
    <?php
    //conexion a la base de datos
    include_once("conexion.php");

    $sql = "SELECT * FROM cursos";
    $ejecutar = $con->query($sql);
    while ($filas = mysqli_fetch_array($ejecutar)) {
        ?>
    
        <div class="card" style="width: 18rem;">
            <img src="data:image/jpg:base64,<?php echo base64_encode($filas['img']); ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">
                    <?php echo $filas['titulo'] ?>
                </h5>
                <p class="card-text">
                    <?php echo $filas['descripcion'] ?>
                </p>
                <a href="#" class="btn btn-success">Ver curso</a>
            </div>
        </div>
    </div>
    <?php } ?>
</body>
</html>