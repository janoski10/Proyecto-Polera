<?php

  require '../db/conexion.php';

  $message = ''; // se llena con la ejecucion del query 

// si el correo y la contrasena no esta vacio continuar
  if (!empty($_POST['nombre']) && !empty($_POST['correo']) && !empty($_POST['contrasena']) && !empty($_POST['descripcion']) && !empty($_POST['region'])) {

    $sql = " INSERT INTO disenadores (nombre, correo, contrasena, descripcion , region) VALUES (:nombre, :correo, :contrasena, :descripcion, :region)";
    $stmt = $conn->prepare($sql) 
        || die( sprintf("Error!: %s", $conn->error) );
    $stmt->bindParam(':nombre', $_POST['nombre']); // vincular parametros
    $stmt->bindParam(':correo', $_POST['correo']); 
    $contrasena = password_hash($_POST['contrasena'], PASSWORD_BCRYPT);
    $stmt->bindParam(':contrasena', $contrasena);
    $stmt->bindParam(':descripcion', $_POST['descripcion']); 
    $stmt->bindParam(':region', $_POST['region']); 


    if ($stmt->execute()) {
      $message = 'Se creo un usuario';
    } else {
      $message = 'Ah ocurrido un error';
    }
  }
?>

    <?php require '../template/header.php' ?>
    <main class="contenedor sombra">

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Registro de disenadores</h1>
    <span>o inicia sesion<a href="login.php"> aqui</a></span>

    <form action="singup.php" method="POST">
      <input name="nombre" type="text" placeholder="Nombre de la tienda">
      <input name="correo" type="text" placeholder="Corre de contacto">
      <input name="contrasena" type="password" placeholder="Contrasena">
      <input name="descripcion" type="text" placeholder="Escribe una descripcion">
      <select name="region" id="">
        <?php 
            require '../db/conexion.php';
            $consulta="SELECT * FROM regiones";
            $ejecutar=mysqli_query($conn,$consulta) or die (mysqli_error($conn));
        ?>
        <option value="0">Selecciona tu region</option>
        <?php foreach ($ejecutar as $opciones):     ?>
           <option value="<?php echo $opciones['id'] ?>"><?php echo $opciones['nombre'] ?></option>
        <?php endforeach ?>
        
    </select>
      <input type="submit" value="Submit">
    </form>
    </main>

    <?php require '../template/footer.php' ?>