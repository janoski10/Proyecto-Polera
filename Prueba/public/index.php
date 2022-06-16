<!DOCTYPE html>
<html lang="en">

<?php
include 'template/header.php';
?>




<main class="contenedor sombra">
  
  <!-- Contenedor sombra es el fondo blanco-->
  <div id="carousel" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner" data-bs-slide="0">
    <div class="carousel-item active">
      <img src="../Prueba/img/unknown.png">
    </div>
    <div class="carousel-item" data-bs-slide="1">
      <img src="../Prueba/img/unknownr.png">
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>


  </div>


</main>

<!--contenido Contacto-->

<?php
include 'template/footer.php';
?>