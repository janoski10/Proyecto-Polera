<?php
/**
 * Clase base controladora
 */
class Controlador{
  public function modelo($modelo){
    require_once("../app/modelos/".$modelo.".php");
    return new $modelo();
  }
  public function vista($vista,$data=[]){
    if(file_exists("../app/view/".$vista.".php")){
      require_once("../app/view/".$vista.".php");
    } else {
      die("La vista no existe");
    }
  }
}
?>