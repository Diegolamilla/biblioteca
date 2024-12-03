<?php
require_once('../model/libroModel.php');
$tipo=$_REQUEST['tipo'];

//instancio la clase modelolibro
$objLibro = new LibroModel();
if ($tipo=="registrar") {
   // print_r($_POST);

    
    if($_POST){
        $cod_libro = $_POST['cod_libro'];
        $nombre = $_POST['nombre'];
        $autor = $_POST['autor'];
        $categoria = $_POST['categoria'];
        $estado = $_POST['estado'];
        $cantidad_libros = $_POST['cantidad_libros'];
        if ($cod_libro=="" || $nombre=="" || $autor=="" || $categoria=="" ||
        $estado=="" || $cantidad_libros=="") {
            //respuesta
            $arr_respuesta = array('status'=>false,'mensaje'=>'Error,campos vacíos');
        }else {
           $arrProducto = $objProducto->registrarLibro($cod_libro, $nombre, $autor, $categoria, $estado, $cantidad_libros);
              
           if ($arrProducto->id>0 ) {
            $arr_Respuesta = array('status'=>true,
            'mensaje'=>'Registro Exitoso');
           }else {
            $arr_Respuesta = array('status'=>false,
            'mensaje'=>'Error al registrar producto');
           }
           echo json_encode($arr_Respuesta);
        }
    }
}
?>