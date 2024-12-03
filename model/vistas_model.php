<?php
class vistaModelo{
    //funcion para obtener vistas
    protected static function obtener_vista($vista){
        $palabras_permitidas =['usuario','inicio','nueva-categoria','nueva-persona','admin','lector','categoria','libro','catalogo','configuracion-avanzada','reportes','listar-admin','listar-categoria','listar-lector','listar-libro']; 
        //carpetas de php
        if(in_array($vista, $palabras_permitidas)){
            if (is_file("./views/".$vista.".php")) {
                $contenido = "./views/".$vista.".php";    
            }else{
                $contenido = "404"; 
            }
        }elseif($vista=="login" || $vista=="index"){
            $contenido = "login";
        }else{
            $contenido = "404"; 
        }
        return $contenido;
    }
}
?>