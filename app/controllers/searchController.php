<?php defined('BASEPATH') or exit ('No se permite acceso directo');

require_once(ROOT . DS . 'app' . DS . 'models' . DS . 'searchModel.php' );  //REQUERIMOS EL MODELO DONDE HAREMOS LA CONSULTA


class searchController extends Controller 
{
    //ARTISTAS
    public function searchBD()
    {

        $dato = $_POST["dato"];

        
        $searchtotal=searchModel::search_BD($dato);
        echo json_encode($searchtotal);
     
       
    }


}



   