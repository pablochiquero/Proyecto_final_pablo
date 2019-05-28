<?php defined('BASEPATH') or exit ('No se permite acceso directo');

require_once(ROOT . DS . 'app' . DS . 'models' . DS . 'perfilClubModel.php' );  //REQUERIMOS EL MODELO DONDE HAREMOS LA CONSULTA

class perfilClubController extends Controller {

    public function index() {

         //IMAGEN PERFIL QUE VIENE DEL SESSIONMODEL 
         require_once(ROOT . DS . 'app' . DS . 'models' . DS . 'sessionModel.php' );  //REQUERIMOS EL MODELO DONDE HAREMOS LA CONSULTA
         $userimg =new sessionModel();
         $i["userimg"]= $userimg->Get_img();
         $this->set($i); 

        $this->render('index');

    }

    public function InsertDatos(){   
        $usuario_sess=$_SESSION["club"][1];
      
                //INSERTAMOS DATOS DE FORMULARIO DE PERFIL E IMAGEN 

            if( isset($_POST["NameClub"]) &&  isset($_FILES['user-img-file']) && isset($_POST["DescripClub"])  && isset($_POST["NumberClub"])){  
                 

                $insertImg = insertImage($_FILES['user-img-file'], 'user-image', 2000000, 'data-user/img',$usuario_sess);
                
                $Nombre=Security::secure_input($_POST["NameClub"]);
                $Descrip=Security::secure_input($_POST["DescripClub"]);
                $Numero=Security::secure_input($_POST["NumberClub"]);

           
                $perfilClub = new perfilClubModel;
                echo json_encode($perfilClub->insertImg($insertImg[2],$Nombre,$Descrip,$Numero,$usuario_sess));
            }
             else{           //INSERTAMOS DATOS DE FORMULARIO DE PERFIL SOLO.
                
                $Nombre=Security::secure_input($_POST["NameClub"]);
                $Descrip=Security::secure_input($_POST["DescripClub"]);
                $Numero=Security::secure_input($_POST["NumberClub"]);
                

                $perfil= new perfilClubModel;
                echo json_encode($perfil->insert($Nombre,$Descrip,$Numero,$usuario_sess));

               
                
            }
               
    }


}