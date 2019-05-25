<?php defined('BASEPATH') or exit ('No se permite acceso directo');

require_once(ROOT . DS . 'app' . DS . 'models' . DS . 'perfilArtistaModel.php' );  //REQUERIMOS EL MODELO DONDE HAREMOS LA CONSULTA


class perfilArtistaController extends Controller 
{

        // FUNCIÓN INDEX DONDE HAREMOS TODO LO QUE NOS TIENE QUE APARECER DIRECTAMENTE EN EL INDEX DE ESTE CONTROLLER.
    public function index() {

        //GENEROS
        $generos=perfilArtistaModel::get_generos(); // INSTANCIAMOS UN METODO
        $d["generos"]=$generos;                     //ALMACENAMOS EN UNA VARIABLE LOS DATOS RECOGIDOS
        $this->set($d);                             // SET A ESTA VARIABLE Y LA MANDAMOS AL INDEX


        //IMAGEN PERFIL
        require_once(ROOT . DS . 'app' . DS . 'models' . DS . 'sessionModel.php' );  //REQUERIMOS EL MODELO DONDE HAREMOS LA CONSULTA
        $userData =new sessionModel();
        $i["userData"]= $userData->Get_info();
        $this->set($i); 
         
        
        // RENDERIZAR TODO LO QUE ESTA EN ESTA FUNCIÓN AL INDEX.
        $this->render('index');
 
    }


        // CATEGORIAS
    public function categorias(){    

        $a = $_POST["genero"];
        $categorias=perfilArtistaModel::get_categorias($a);   // INSTANCIAMOS UN METODO
        echo json_encode($categorias);

    }

  


//INSERTAMOS DATOS DE FORMULARIO DE PERFIL E IMAGEN 

    public function InsertDatos(){   
        $usuario_sess=$_SESSION["artista"];
    
        if(isset($_POST['Nombre']) && isset($_POST['Descrip']) && isset($_POST['Number']) && isset($_FILES['user-img-file']['name']))
        {
            $insertImg = insertImage($_FILES['user-img-file'], 'user-image', 2000000, 'login-registro/data-user/img', $usuario_sess);

		if($insertImg[1] == false){

			echo $insertImg[0];
 
		} else {

			$imageURL = 'data-user/img/' . $usuario_sess . '/' . $insertImg[2];
        
        }
    }

   

        // $usuario_sess=$_SESSION["artista"];

        // if(isset($_POST["Nombre"]) && isset($_POST["Descrip"]) && isset($_POST["Number"]) && isset($_POST["generos"])
        //      && isset($_FILES['user-img-file']) ){

        //         $insertImg = insertImage($_FILES['user-img-file'], 'user-image', 2000000, 'data-user/img',$usuario_sess);
                
        //         $Nombre=Security::secure_input($_POST["Nombre"]);
        //         $Descrip=Security::secure_input($_POST["Descrip"]);
        //         $Number=Security::secure_input($_POST["Number"]);
        //         $generos=$_POST["generos"];
        //         // $Categoria=$_POST["categoria"];

                
        //         $perfil=perfilArtistaModel::insertImg($insertImg[2],$Nombre,$Descrip,$Number,$generos);   // INSTANCIAMOS UN METODO
        //         echo json_encode($perfil);
        //     }
        //     else{
        //         $Nombre=Security::secure_input($_POST["Nombre"]);
        //         $Descrip=Security::secure_input($_POST["Descrip"]);
        //         $Number=Security::secure_input($_POST["Number"]);
        //         $generos=$_POST["generos"];




        //         // $Categoria=$_POST["categoria"];

                
        //         $perfildat=perfilArtistaModel::insert($Nombre,$Descrip,$Number,$generos);   // INSTANCIAMOS UN METODO
        //         echo json_encode($perfildat);

        //         // $insertar = new perfilArtistaModel;
        //         // echo json_encode($insertar->insert($Nombre,$Descrip,$Number,$generos));  // prueba de creear otro metodo
                
        //     }
            

           


            
           
            
            
            
            



        
      
    }

   












    

   

		





}