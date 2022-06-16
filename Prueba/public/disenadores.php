<?php
    include '../template/header.php';
    require_once("../app/inicio.php")
    // require_once("db/conexion.php");
    // require_once("controlador/Disenador.php");
    // $db =new conexion();
?>
<form action='<?php print RUTA_APP."disenadores/borrar/";
print "<td><a href='".RUTA_APP."libros/modificar/"; ?>' method="POST">
<div class="container">
  <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre</th>
      <th scope="col">poleras</th>
      <th scope="col">region</th>
   
    </tr>
  </thead>
  <tbody>
        <?php
      for ($i=0; $i < count($data); $i++) { 
        print "<tr>";
        print "<td>".$data[$i]["id"]."</td>";
        print "<td>".$data[$i]["nombre"]."</td>";
        print "<td>".$data[$i]["poleras"]."</td>";
        print "<td>".$data[$i]["region"]."</td>";
        print "<td><a href='".RUTA_APP."disenadores/modificar/".$data[$i]["id"]."'>Modificar</a></td>";
        print "<td><a href='".RUTA_APP."disenadores/borrar/".$data[$i]["id"]."'>Borrar</a></td>";
        print "</tr>";
      }
    ?>
    </tbody>
  </table>
    </form>
  <button type="button" class="btn btn-dark"><a href='<?php print RUTA_APP."libros/crea/"; ?>'>Crear un libro</a></button>
  </div>
<main class="contenedor sombra">

<div class="servicios">
        <section class="servicio">
            <h3>Diseñador #1</h3>
            <div class="iconos">
                <span style="font-size: 40px; color: #fff;">
                <i class="fa fa-user"></i>
                  </span>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, non.</p>
       </section>
       <section class="servicio">
            <h3>Diseñador #2</h3>
            <div class="iconos">
                <span style="font-size: 40px; color: #fff;">
                <i class="fa fa-user"></i>
                  </span>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab reprehende</p>
        </section>
        <section class="servicio">
            <h3>Diseñador #3</h3>
            <div class="iconos">
                <span style="font-size: 40px; color: #fff">
                <i class="fa fa-user"></i>
                  </span>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt!</p>
            </section>
        </div>
    </main>
<?php
    include '../template/footer.php';
?>