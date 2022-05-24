<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap
plantillas
-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- fontawesome
iconos -->
<script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>


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
			<span class="site-name">Onda</span>
			<span class="site-desc">Ropa / Estampados / Serigrafia</span>
		</a>

    <!-- Enlaces de navegacion -->
        <nav>
			<ul>
				<li><a href="index.php">Inicio</a></li>
				<li><a href="disenadores.php">Disenadores</a></li>
				<li><a href="diseno.php">Crea tu diseno</a></li>
        <li><a href="contacto.php">Contacto</a></li>
			</ul>
		</nav>

	</header>

<body>
    <!--Seleccion de region-->
    <section class="hero">
    <div class="contenido-hero">
        <h2 class="titulo">Onda </h2>
        <div class="ubicacion">
                <p>
                    <select class="form-select" aria-label="Default select example" style="width:800px" >
                        <option selected>Selecciona tu region</option>
                        <option value="1">Santiago</option>
                        <option value="2">Temuco</option>                        
                      </select>
                      
                </p>                
            </div>      
    </div>
    </section>