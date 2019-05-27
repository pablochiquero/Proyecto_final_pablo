<?php defined('BASEPATH') or exit ('No se permite acceso directo');

require_once(ROOT . DS . 'app' . DS . 'models' . DS . 'clubsModel.php' );  //REQUERIMOS EL MODELO DONDE HAREMOS LA CONSULTA

class clubsController extends Controller {

    public function index() {


        //CLUBS
        $clubs=clubsModel::get_club(); // INSTANCIAMOS UN METODO
        $c["clubs"]=$clubs;                     //ALMACENAMOS EN UNA VARIABLE LOS DATOS RECOGIDOS
        $this->set($c);                

        $this->render('index');

    }

}