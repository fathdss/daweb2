<?php

class rolesView  {
/*
    public function agregar(){
      echo "Metodo agregar de clase ClasificacionViews";


    } 
    public function agregar(){
        $str = file_get_contents(
            STATIC_DIR . "html/artesanias/clasificacion_agregar.html"); 
        $html = Template($str)->render();
        print Template('Agregar clasificacion')->show($html);
    } 
*/
    public function agregar($list=[]){
        $str = file_get_contents(
            STATIC_DIR . "html/artesanias/roles_agregar.html"); 
        $html = Template($str)->render_regex('LISTADO_ROLES', $list);
        print Template('Agregar roles')->show($html);
    } 

    public function editar($list=[], $clasificacion){
        $str = file_get_contents(
            STATIC_DIR . "html/artesanias/roles_editar.html"); 
        $html = Template($str)->render_regex('LISTADO_ROLES', $list);
        $html = Template($html)->render($clasificacion);
        print Template('Editar roles')->show($html);
    } 


    public function listar($list=array()) {
        $str = file_get_contents(
            STATIC_DIR . "html/artesanias/roles_listar.html"); 
        $html = Template($str)->render_regex('LISTADO_ROLES', $list);
        print Template('Listado de roles')->show($html);
    }



}

?>