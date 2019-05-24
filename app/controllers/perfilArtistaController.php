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

        if(isset($_POST["NameArtistico"]) && isset($_POST["Descrip"]) && isset($_POST["Number"]) && isset($_POST["generos"])
             && isset($_FILES['user-img-file']) ){

                // $insertImg = insertImage($_FILES['user-img-file'], 'user-image', 2000000, 'data-user/img', $usuario_sess);
                $insertImg = insertImage($_FILES['user-img-file'], 'user-image', 2000000, 'data-user/img', $usuario_sess);

                var_dump( $insertImg);
                
                // $NameArtistico=Security::secure_input($_POST["NameArtistico"]);
                // $Descrip=Security::secure_input($_POST["Descrip"]);
                // $Number=Security::secure_input($_POST["Number"]);
                // $generos=$_POST["generos"];
                // // $Categoria=$_POST["categoria"];

                
                // $perfil=perfilArtistaModel::insertImg($insertImg[2],$NameArtistico,$Descrip,$Number,$generos);   // INSTANCIAMOS UN METODO
                // echo json_encode($perfil);
            }
            // else{
                // $NameArtistico=Security::secure_input($_POST["NameArtistico"]);
                // $Descrip=Security::secure_input($_POST["Descrip"]);
                // $Number=Security::secure_input($_POST["Number"]);
                // $generos=$_POST["generos"];




                // $Categoria=$_POST["categoria"];

                
                // $perfildat=perfilArtistaModel::insert($NameArtistico,$Descrip,$Number,$generos);   // INSTANCIAMOS UN METODO
                // echo json_encode($perfildat);

                // $insertar = new perfilArtistaModel;
                // echo json_encode($insertar->insert($NameArtistico,$Descrip,$Number,$generos));  // prueba de creear otro metodo
                
            // }






            //------------------->EL DE DAYANA <------------------------------


            // public function mod_perfil()
            // {
            //     $usuario_sess = $_SESSION['usuario'];
        
            //     if((isset($_POST['emailM'])) && (isset($_POST['contraM'])) && (isset($_FILES['user-img-file'])))
            //     {
            //         $insertImg = insertImage($_FILES['user-img-file'], 'user-image', 2000000, 'data-user/img', $usuario_sess);
        
            //         $new_email = Security::secure_input($_POST['emailM']);
            //         $new_emailMencrip = Security::en_de_cryptIt($new_email,'en');
            //         $new_contra = Security::secure_input($_POST['contraM']);
            //         $contMencrip = Security::en_de_cryptIt($new_contra,'en');
        
            //         $insertar = new modificarPerfilModel;
            //         echo json_encode($insertar->recDatoimg($insertImg[2], $new_emailMencrip, $contMencrip, $usuario_sess));
            //     }
            //     else
            //     {
            //         $new_email = Security::secure_input($_POST['emailM']);
            //         $new_emailMencrip = Security::en_de_cryptIt($new_email,'en');
            //         $new_contra = Security::secure_input($_POST['contraM']);
            //         $contMencrip = Security::en_de_cryptIt($new_contra,'en');
        
            //         $insertar = new modificarPerfilModel;
            //         echo json_encode($insertar->recDato($new_emailMencrip, $contMencrip, $usuario_sess));
            //     }
            // } 
            

           


            
           
            
            
            
            



        
      
    }

   












    

   

		





}