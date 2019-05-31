<?php //defined('BASEPATH') or exit ('No se permite acceso directo');

require_once(ROOT . DS . 'app' . DS . 'models' . DS . 'vistadetArtModel.php' );  //REQUERIMOS EL MODELO DONDE HAREMOS LA CONSULTA

class vistadetArtController extends Controller 
{

    public function index($user){ // INSERTAMOS EL $ARTISTA QUE ES EL QUE VIENE DE EL INDEX PARA PASAR EL PARAMETRO DE CADA BOTON (EL NOMBRE DE CADA USUARIO PARA PODER PINTAR)
          
           //ARTISTAS
           
                $artistas=vistadetArtModel::get_artistas($user); // INSTANCIAMOS UN METODO
                
                $a["artistas"]=$artistas;                        //ALMACENAMOS EN UNA VARIABLE LOS DATOS RECOGIDOS
                $this->set($a);                                  // SET A ESTA VARIABLE Y LA MANDAMOS AL INDEX
 
                
                $this->render('index');
  

           
    }


   












    

   

		





}