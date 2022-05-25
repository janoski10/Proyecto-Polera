<!DOCTYPE html>
<html lang="en">

<?php
include 'template/header.php';
?>

<main class="contenedor sombra">
  <!-- Contenedor sombra es el fondo blanco-->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">     
      <div class="carousel-item active">
        <div class="servicio">
          <img class="img-responsive" src="../Prueba/img/unknown.png" alt="First slide" height="300">
        </div>
      </div>
      <div class="carousel-item">
        <img class="img-responsive" src="../Prueba/img/unknownr.png" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="img-responsive" src="../Prueba/img/unknownr.png" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Siguiente</span>
    </a>
  </div>
  <div class="contenedor">
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, voluptas.
    </p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis cum corrupti quia nulla consectetur cumque iusto, eos id in quas ullam esse ipsum beatae aspernatur at natus doloribus velit. Ex, alias? Libero aut quod odio nisi natus earum. Non adipisci nulla eligendi commodi ab esse! Maiores, inventore aut deleniti eligendi necessitatibus voluptatibus, placeat cum officia quae quo, ut fuga reprehenderit ab doloremque sint numquam obcaecati? Sint minima praesentium at eaque officiis ea dolorem esse, quae voluptatum perspiciatis, animi labore. Perferendis sequi iste nostrum, quis quaerat a cum quos minus et molestias veritatis nemo similique sit voluptates veniam nulla id tenetur!
    </p>
  </div>
</main>
<!--contenido Contacto-->

<?php
include 'template/footer.php';
?>