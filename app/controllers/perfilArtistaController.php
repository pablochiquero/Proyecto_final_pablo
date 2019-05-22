<?php defined('BASEPATH') or exit ('No se permite acceso directo');

require_once(ROOT . DS . 'app' . DS . 'models' . DS . 'perfilArtistaModel.php' );  //REQUERIMOS EL MODELO DONDE HAREMOS LA CONSULTA

class perfilArtistaController extends Controller {

    public function index() {
        
        $generos=perfilArtistaModel::get_generos();     // INSTANCIAMOS UN METODO
        $d["generos"]=$generos;                     //ALMACENAMOS EN UNA VARIABLE LOS DATOS RECOGIDOS
        $this->set($d);                   // SET A ESTA VARIABLE Y LA MANDAMOS AL INDEX
        $this->render('index');
 
    }


    public function categorias(){
        $a = $_POST["genero"];
        $categorias=perfilArtistaModel::get_categorias($a);   // INSTANCIAMOS UN METODO
        echo json_encode($categorias);
    }

    public function 




    public function InsertDatos(){   //INSERTAMOS DATOS DE FORMULARIO DE PERFIL E IMAGEN 

        if(isset($_POST["NameArtistico"]) && isset($_POST["Descrip"]) && isset($_POST["Number"]) && isset($_POST["generos"]) 
        && isset($_FILES['user-img-file'])){

            $carpetaImg = getcwd()."/img/";
            // $carpetaImg = "BASE_DIR_URL/webroot/img/";

            // $nameFoto = $_SESSION["artista"].'_'.$_FILES['Img_Usuario_Perfil']['name'];
            $nameFoto = date('Ymd_His').'_'.$_FILES['Img_Usuario_Perfil']['name'];

            // $InsertFoto = move_uploaded_file($_FILES['Img_Usuario_Perfil']['tmp_name'],$carpetaImg.$nameFoto);
            // $InsertFoto = move_uploaded_file($_FILES['Img_Usuario_Perfil']['tmp_name'],$carpetaImg);
            move_uploaded_file($_FILES['Img_Usuario_Perfil']['name'], $carpetaImg.$nameFoto);

            // $insertImg = insertImage($_FILES['user-img-file'], 'user-image', 2000000, 'Proyecto_final_pablo/webroot/img',date('Ymd_His'));

            $NameArtistico=Security::secure_input($_POST["NameArtistico"]);
            $Descrip=Security::secure_input($_POST["Descrip"]);
            $Number=Security::secure_input($_POST["Number"]);
            $generos=$_POST["generos"];
            // $Categoria=$_POST["Categoria"];



            $perfil=perfilArtistaModel::insert($NameArtistico,$Descrip,$Number,$generos);   // INSTANCIAMOS UN METODO
            echo json_encode($perfil);
            
    
            // var_dump($generos);
            



        }
      
    }

   












    

   

		





}