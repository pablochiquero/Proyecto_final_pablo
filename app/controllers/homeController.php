<?php defined('BASEPATH') or exit ('No se permite acceso directo');

class homeController extends Controller {

    public function index(){

        $this->render('index');

    }
    // public function dato(){

    // 	if(isset($_POST["dato"])){

 	// 	$dato=Security::secure_input($_POST['dato']);
    // 		 require(ROOT . DS . 'app' . DS . 'models' . DS . 'homeModel.php');
    		 
    // 		 $insertar= new homeModel();
    // 		$d['mensaje'] =$insertar->recdato($dato);
    // 		$this->set($d);
    // 		$this->render('index');


    // 	}
    // 	else{
	// 		header('location'. BASE_DOMAIN_DIR_URL.'webroot/404.php');
    // 	}
    // }

}
