<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CHAT EN VIVO NO MOVER
-->
<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="6fc5633e-000c-447f-a300-38bbbf896313";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
    <!-- Bootstrap
plantillas
-->
    <script type="text/javascript" src="../js/region_comuna.js"></script>
    <script src="http://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- fontawesome
iconos -->
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <title>Onda</title>
    <!-- Links
estilo.css , hoja de estilos
normalize.css , estandariza estilos para ser mejor renderizados por los navegadores
all.min.css , iconos de fontawesome
-->
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<!-- Header
Barra de navegacion
Seleccion de region
 -->
<header id="main-header">
    <a id="logo-header" href="index.php">
        <img src="img/logo_solo_onda.png" alt="..." height="60" width="180">
    </a>
    <!-- Enlaces de navegacion -->
    <nav>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="disenadores.php">Disenadores</a></li>
            <li><a href="diseno.php">Crea tu dise??o</a></li>
            <li><a href="singup.php">Registrate</a></li>
            <li><a href="login.php">Inicia Sesion</a></li>

        </ul>
    </nav>
</header>
<body>
    <!--Seleccion de region-->
    <section class="hero">
        <div class="contenido-hero">
            <a href="index.php">
                <img src="img/logo_sin_bordes.png" class="d-block w-150" alt="..." height="200">
            </a>
            <div class="contenedor">
           

                
                    <select class="form-select" aria-label="Default select example" style="width:800px">
                    <?php 
            require '../db/conexion.php';
            $consulta="SELECT * FROM regiones";
            $ejecutar=mysqli_query($conn,$consulta) or die (mysqli_error($conn));
        ?>
        <?php foreach ($ejecutar as $opciones):     ?>
           <option value="<?php echo $opciones['nombre'] ?>"><?php echo $opciones['nombre'] ?></option>
        <?php endforeach ?>                                                                                
                    </select>                
            </div>
        </div>
    </section>
</body>