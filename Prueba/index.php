<?php
    include 'template/header.php';
?>

    <!--contenido Servicios-->
    <main class="contenedor sombra">
    <div class="servicios">
        <h3>Sobre la pagina</h3>
        <p>JS en el cambio de colores abajo y en el reloj que esta en el header pero sin div entonces se ven solo los numeros no el contenedor con el color.
        PHP en header y footer - bootstrap en los carrousel de libros y comics
        </p>

        <form>
        <select name="BackgroundChanger" id="mySelection" onchange="colorChanger()">
        <option value="">Default
        <option value="#ff9900">Color1
        <option value="cyan">Color2
        <option value="green">Color3
        </select>
        </form>
          <h3>Cambiar color</h3>
        <h1 id="dummy" class="center"></h1>

  
      
              <script src="js/fondo.js"></script>
    
    </div>
</main>
    <!--contenido Contacto-->

<?php
    include 'template/footer.php';
?>