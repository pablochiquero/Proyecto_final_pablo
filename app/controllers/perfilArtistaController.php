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


        //IMAGEN PERFIL QUE VIENE DEL SESSIONMODEL 
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
        $usuario_sess=$_SESSION["artista"][1];
      

        var_dump($_SESSION["artista"]);
      
                //INSERTAMOS DATOS DE FORMULARIO DE PERFIL E IMAGEN 

        if(isset($_POST["NombreART"]) && isset($_POST["Descrip"]) && isset($_POST["Number"])  && isset($_POST["Categoria"]) 
        && isset($_FILES['user-img-file']) ){  


                 

                $insertImg = insertImage($_FILES['user-img-file'], 'user-image', 2000000, 'data-user/img',$usuario_sess);
                
                $Nombre=Security::secure_input($_POST["NombreART"]);
                $Descrip=Security::secure_input($_POST["Descrip"]);
                $Number=Security::secure_input($_POST["Number"]);
                $Categoria=$_POST["Categoria"];                                                  

             

               
                $perfil = new perfilArtistaModel;
                echo json_encode($perfil->insertImg($insertImg[2],$Nombre,$Descrip,$Number,$Categoria,$usuario_sess));
            }
            else{           //INSERTAMOS DATOS DE FORMULARIO DE PERFIL SOLO.

                $Nombre=Security::secure_input($_POST["NombreART"]);
                $Descrip=Security::secure_input($_POST["Descrip"]);
                $Number=Security::secure_input($_POST["Number"]);
                $Categoria=$_POST["Categoria"];


                $perfildat=perfilArtistaModel::insert($Nombre,$Descrip,$Number,$Categoria,$usuario_sess); 
                echo json_encode($perfildat);

               
                
            }
            

           


            
           
            
            
            
            



        
      
    }

   












    

   

		





}