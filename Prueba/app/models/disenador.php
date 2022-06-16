<?php

class Disenadores{
    private $db;
    private $disenadores;

    function __construct(){  private $db;
  
        function __construct()
        {
          $this->db = new MySQLdb();
        }
      
        public function getDisenadores(){
          $data = $this->db->querySelect("SELECT * FROM disenadores");
          return $data;
        }
      
        public function getDisenadores($id){
          $data = $this->db->querySelect("SELECT * FROM disenadores WHERE id=".$id);
          return $data;
        }
      
        public function insertarLibros($nombre, $region){
          $sql = "INSERT INTO disenadores VALUES(0,";
          $sql.= "'".$nombre."', ";
          $sql.= "'".$region."', ";          
          if ($this->db->queryNoSelect($sql)) {
            header("location:".RUTA_APP."libros");
            exit();
          } else {
            exit("Error al insertar los datos del libro");
          }
        }
      
        public function modificarLibros($id, $titulo, $autor, $editorial){
          $sql = "UPDATE libros SET ";
          $sql.= "titulo='".$titulo."', ";
          $sql.= "autor='".$autor."', ";
          $sql.= "editorial='".$editorial."' ";
          $sql.= "WHERE id=".$id;
          print $sql;
          if ($this->db->queryNoSelect($sql)) {
            header("location:".RUTA_APP."libros");
            exit();
          } else {
            exit("Error al modificar los datos del libro");
          }
        }
      
        public function borrarLibro($id){
          $sql = "DELETE FROM libros ";
          $sql.= "WHERE id=".$id;
          if ($this->db->queryNoSelect($sql)) {
            header("location:".RUTA_APP."libros");
            exit();
          } else {
            exit("Error al borrar el libro");
          }
        }
      }

}
?>