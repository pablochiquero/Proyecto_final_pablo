<?php defined('BASEPATH') or exit ('No se permite acceso directo');

require_once(ROOT . DS . 'app' . DS . 'models' . DS . 'artistaModel.php' );  //REQUERIMOS EL MODELO DONDE HAREMOS LA CONSULTA

class artistasController extends Controller {

    public function index() {


        //ARTISTAS
        $artistas=artistaModel::get_artistas(); // INSTANCIAMOS UN METODO
        $a["artistas"]=$artistas;                     //ALMACENAMOS EN UNA VARIABLE LOS DATOS RECOGIDOS
        $this->set($a);                             // SET A ESTA VARIABLE Y LA MANDAMOS AL INDEX

        $this->render('index');
        
        
    

    }

  

 
 }

   
		





