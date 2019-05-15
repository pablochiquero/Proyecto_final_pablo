<?php defined('BASEPATH') or exit ('No se permite acceso directo');

require_once(ROOT . DS . 'app' . DS . 'models' . DS . 'perfilArtistaModel.php' );  //REQUERIMOS EL MODELO DONDE HAREMOS LA CONSULTA

class perfilArtistaController extends Controller {

    public function index() {
        
        $generos=perfilArtistaModel::get_generos();     // INSTANCIAMOS UN METODO
        $d["generos"]=$generos;                     //ALMACENAMOS EN UNA VARIABLE LOS DATOS RECOGIDOS
        $this->set($d);                   // SET A ESTA VARIABLE Y LA MANDAMOS AL INDEX


        // $categorias=perfilArtistaModel::get_categorias();   // INSTANCIAMOS UN METODO
        // $c["categorias"]=$categorias;                    //ALMACENAMOS EN UNA VARIABLE LOS DATOS RECOGIDOS
        // $this->set($c);  // SET A ESTA VARIABLE Y LA MANDAMOS AL INDEX
        // var_dump($categorias[1]);

        $this->render('index');
 

    }


    public function categorias(){
        $a = $_POST["genero"];
        $categorias=perfilArtistaModel::get_categorias($a);   // INSTANCIAMOS UN METODO
        echo json_encode($categorias);
    }

     
        


    

   

		





}