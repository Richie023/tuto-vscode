<?php 
include_once("conexion.php");

if(isset($_REQUEST['btn_registrar'])){
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $sql ="SELECT id, nombre FROM usuarios WHERE usuario = '$usuario'";
    $ejecutar = $conn->query($sql);
    $filas =$ejecutar->num_rows;
    if($filas> 0){
        echo "
        <script>
        alert('El usuario ya existe')
        </script>";
    }else{
    $sql = "INSERT INTO usuarios (nombre, email, usuario, password) 
    VALUES ('$nombre','$email','$usuario','$password')";
    $ejecutar = $conn->query($sql);

}
if($ejecutar > 0){  
    echo "
    <script>
    alert('Usuario registrado correctamente')
    </script>";
}else{
        echo "
        <script>
        alert('Error al registrar')
        </script>";
    }
    }
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuarios</title>
</head>
<body>

    <?php
    include_once("header.php");
    ?>
    <div class ="container ">
<form action="register.php" method="POST">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"> Nombre</label>
    <input type="text" class="form-control" name="nombre">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"> Correo</label>
    <input type="email" class="form-control" name="email">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"> Usuario</label>
    <input type="text" class="form-control" name="usuario">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"> Contraseña</label>
    <input type="text" class="form-control" name="password">
  </div>
  
  <button type="submit" class="btn btn-primary" name="btn_registrar">Registrarme</button>
  <a href="index.php"  class="btn btn-success">Regresar</a>

</form>
    </div>
</body>
</html>