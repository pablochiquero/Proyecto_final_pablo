<?php defined('BASEPATH') or exit ('No se permite acceso directo');
require_once(ROOT . DS . 'app' . DS . 'models' . DS . 'homeModel.php' );  //REQUERIMOS EL MODELO DONDE HAREMOS LA CONSULTA

class homeController extends Controller {

    public function index(){

        //ARTISTAS
        $artistas=homeModel::get_artistas(); // INSTANCIAMOS UN METODO
        $a["artistas"]=$artistas;                     //ALMACENAMOS EN UNA VARIABLE LOS DATOS RECOGIDOS
        $this->set($a);         

        //CLUBS
        $clubs=homeModel::get_club(); // INSTANCIAMOS UN METODO
        $c["clubs"]=$clubs;                     //ALMACENAMOS EN UNA VARIABLE LOS DATOS RECOGIDOS
        $this->set($c);    
        
        
        

        $this->render('index');

    }
   
}
