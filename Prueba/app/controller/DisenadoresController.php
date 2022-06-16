<?php
/**
 * Disenadores
 */
class Disenadores
 extends Controlador{
  private $modelo;
  function __construct()
  {
    $this->modelo = $this->modelo("Disenadores
    Modelo");
  }

  public function index(){
    $data = $this->modelo->getDisenadores
    ();
    //llamamos a la vista
    $this->vista("Disenadores
    Vista",$data);
  }

  public function modificar($id="")
  {
    if ($_SERVER['REQUEST_METHOD']=="POST") {
      $id = isset($_POST["id"])?$_POST["id"]:"";
      $titulo = isset($_POST["titulo"])?$_POST["titulo"]:"";
      $autor = isset($_POST["autor"])?$_POST["autor"]:"";
      $editorial = isset($_POST["editorial"])?$_POST["editorial"]:"";


      $this->modelo->modificarDisenadores
      ($id, $titulo, $autor, $editorial);

    } else {
      $data = $this->modelo->getLibro($id);
      $datos = [
        "id" => $id,
        "titulo" => $data[0]["titulo"],
        "autor" => $data[0]["autor"],
        "editorial" => $data[0]["editorial"]
      ];
      $this->vista("Disenadores
      Modificar",$datos);
    }
  }

  public function borrar($id="")
  {
   if ($_SERVER['REQUEST_METHOD']=="POST") {
      $id = isset($_POST["id"])?$_POST["id"]:"";

      $this->modelo->borrarLibro($id);

    } else {
      $data = $this->modelo->getLibro($id);
      $datos = [
        "id" => $id,
        "titulo" => $data[0]["titulo"],
        "autor" => $data[0]["autor"],
        "editorial" => $data[0]["editorial"]
      ];
      $this->vista("Disenadores
      Borrar",$datos);
    }
  }

  public function crea()
  {
    if ($_SERVER['REQUEST_METHOD']=="POST") {
      $titulo = isset($_POST["titulo"])?$_POST["titulo"]:"";
      $autor = isset($_POST["autor"])?$_POST["autor"]:"";
      $editorial = isset($_POST["editorial"])?$_POST["editorial"]:"";
      $isdn = isset($_POST["isdn"])?$_POST["isdn"]:"";
      

      $this->modelo->insertarDisenadores
      ($titulo, $autor, $editorial, $isdn);

    } else {
      $this->vista("Disenadores
      Alta");
    }
  }
}
?>