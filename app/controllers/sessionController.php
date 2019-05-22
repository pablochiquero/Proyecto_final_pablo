<?php defined('BASEPATH') or exit ('No se permite acceso directo');

class sessionController extends Controller {

    public function index() {

        $this->render('index');

    }

            // ------------->FUNCIONES REGISTRO Y LOGIN ARTISTA<--------------

    public function regArt(){   //REGISTRO ARTISTA
       if(isset($_POST["NameAR"]) && isset($_POST["EmailAR"]) && isset($_POST["PassAR"]) )
       {  
           
            $NameAR=Security::secure_input($_POST["NameAR"]);
            $EmailAR=Security::secure_input($_POST["EmailAR"]);
            $EmailAR=Security::en_de_cryptIt($EmailAR,'en');

            $PassAR=Security::secure_input($_POST["PassAR"]);
            $PassAR=Security::en_de_cryptIt($PassAR,'en');

            

       
            require_once(ROOT . DS . 'app' . DS . 'models' . DS . 'sessionModel.php' );

            $insertarRegArt = new sessionModel;
            echo json_encode($insertarRegArt->Reg_artista($NameAR,$EmailAR,$PassAR));
        }
        else{
            header('location:'. BASE_DOMAIN_DIR_URL . 'webroot/404.php');
        }
    }

    public function logArt(){      //LOGIN ARTISTA
        if(isset($_POST["NameAL"]) && isset($_POST["EmailAL"]) && isset($_POST["PassAL"]) )
       {  
            
            $NameAL=Security::secure_input($_POST["NameAL"]);

            $EmailAL=Security::secure_input($_POST["EmailAL"]);
            $EmailAL=Security::en_de_cryptIt($EmailAL,'en');

            $PassAL=Security::secure_input($_POST["PassAL"]);
            $PassAL=Security::en_de_cryptIt($PassAL,'en');
            

       
            require_once(ROOT . DS . 'app' . DS . 'models' . DS . 'sessionModel.php' );

            $selectLogArt = new sessionModel;
            echo json_encode($selectLogArt->Log_artista($NameAL,$EmailAL,$PassAL));
            
        }
        else{
            header('location:'. BASE_DOMAIN_DIR_URL . 'webroot/404.php');
        }
    }



    
            // ------------->FUNCIONES REGISTRO Y LOGIN CLUB<--------------


   public function regClub(){           //REGISTRO CLUB
    if( isset($_POST["NameCR"]) && isset($_POST["EmailCR"]) && isset($_POST["PassCR"]) )
    {  
         
        $NameCR=Security::secure_input($_POST["NameCR"]);

         $EmailCR=Security::secure_input($_POST["EmailCR"]);
         $EmailCR=Security::en_de_cryptIt($EmailCR,'en');

         $PassCR=Security::secure_input($_POST["PassCR"]);
         $PassCR=Security::en_de_cryptIt($PassCR,'en');

         

    
         require_once(ROOT . DS . 'app' . DS . 'models' . DS . 'sessionModel.php' );

        $insertarRegClub = new sessionModel;
        echo json_encode($insertarRegClub->Reg_club($NameCR,$EmailCR,$PassCR));
        
        
     }
     else{
         header('location:'. BASE_DOMAIN_DIR_URL . 'webroot/404.php');
     }
    }

     public function logClub(){       //LOGIN ARTISTA
        
        if(isset($_POST["NameCL"]) && isset($_POST["EmailCL"]) && isset($_POST["PassCL"]) )
        {  
             
 
            $NameCL=Security::secure_input($_POST["NameCL"]);

             $EmailCL=Security::secure_input($_POST["EmailCL"]);
            $EmailCL=Security::en_de_cryptIt($EmailCL,'en');
 
             $PassCL=Security::secure_input($_POST["PassCL"]);
             $PassCL=Security::en_de_cryptIt($PassCL,'en');
 
 
        
             require_once(ROOT . DS . 'app' . DS . 'models' . DS . 'sessionModel.php' );
 
             $selectLogclub = new sessionModel;
             echo json_encode($selectLogclub->Log_club($NameCL,$EmailCL,$PassCL));
             
         }
         else{
             header('location:'. BASE_DOMAIN_DIR_URL . 'webroot/404.php');
         }




     }

     public function salir(){
       
            unset($_SESSION["usuario"]);
            session_destroy();
            header('location:'. BASE_DOMAIN_DIR_URL . 'home/index');
        
      
    }

}