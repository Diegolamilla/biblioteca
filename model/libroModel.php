<?php
require_once "../librerias/conexion.php";
class LibroModel{

    private $conexion;
    function __construct()
    {
        $this->conexion =new Conexion();
        $this->conexion =$this->conexion->connect();
    }

    public function registrarLibro($cod_libro, $nombre, $detalle, $autor, $categoria, $estado, $cantidad_libros){
        $sql=$this->conexion->query("CALL insertarLibro('{$cod_libro}', '{$nombre}', 
        '{$detalle}', '{$autor}', '{$categoria}', '{$estado}', '{$cantidad_libros}')");
         $sql  = $sql->fetch_object();
         return $sql;
    }
}
?>