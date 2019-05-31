<?php defined('BASEPATH') or exit ('No se permite acceso directo');
require_once(ROOT . DS . 'app' . DS . 'models' . DS . 'vistadetClubModel.php' );  //REQUERIMOS EL MODELO DONDE HAREMOS LA CONSULTA
class vistadetClubController extends Controller 
{

    public function index($user) {

        $clubs=vistadetClubModel::get_clubs($user); // INSTANCIAMOS UN METODO
                
        $a["clubs"]=$clubs;                        //ALMACENAMOS EN UNA VARIABLE LOS DATOS RECOGIDOS
        $this->set($a);                                  // SET A ESTA VARIABLE Y LA MANDAMOS AL INDEX

    
        $this->render('index');
 
    }
}