<?php defined('BASEPATH') or exit ('No se permite acceso directo');


class sessionModel extends Model     //CLASE SESSION MODEL
{
                        // ------------->FUNCIONES REGISTRO Y LOGIN ARTISTA<--------------

        public function Reg_artista($NameAR,$EmailAR,$PassAR)     //FUNCIÓN REGISTRO ARTISTA EN BASE DE DATOS
        {    
               
                $connect = Model::getInstanceDB();

                $sql ='SELECT * FROM UsuariosArtistas WHERE Email = :Email';
                $stmt = $connect->prepare($sql);
                $stmt->bindParam(':Email', $EmailAR);
                $stmt->execute();
                $rows = $stmt->rowCount();

                if($rows== 1){
                        return "Email Ocupado";
                }


                else{
                        $id = null;
                        $sql ='INSERT INTO UsuariosArtistas (`Nombre`,`Email`, `Password`) VALUES (:Nombre,:Email,:Pass)';
                        $stmt = $connect->prepare($sql);
                        
                        $stmt->bindParam(':Nombre', $NameAR);
                        $stmt->bindParam(':Email', $EmailAR);
                        $stmt->bindParam(':Pass', $PassAR);
                        

                        if(!$stmt->execute())
                        {
                                echo json_encode("Datos incorrectos");
                        }
                        else
                        {
                                echo json_encode("Registro correcto.");
                        }
            
                }
        }
        public function Log_artista($NameAL,$EmailAL,$PassAL)  //FUNCIÓN SELECIONAR ARTISTA PARA LOGIN EN BASE DE DATOS
	{		
		$connect = Model::getInstanceDB();
                $sql ='SELECT * FROM UsuariosArtistas WHERE Email = :Email AND Password = :Pass AND Nombre = :Nombre';
                        
                $stmt = $connect->prepare($sql);

                $stmt->bindParam(':Nombre', $NameAL);       
		$stmt->bindParam(':Email', $EmailAL);
	        $stmt->bindParam(':Pass', $PassAL);
                $stmt->execute();
                $userData = $stmt->fetch();  //<---------- PARA COGER LA IMG DE LA BD.
                $rows = $stmt->rowCount();
                $user=Security::en_de_cryptIt($NameAL,'de');
		
		if($rows>0)
		{
                         
                        $_SESSION["artista"]=$NameAL;  //prueba para tener variable de session por artista
                        return true;
                        
                               
		}
		else
		{
			return false;
		}

	}


                        // ------------->FUNCIONES REGISTRO Y LOGIN CLUB<--------------


        public function Reg_club($NameCR,$EmailCR,$PassCR)   //FUNCIÓN REGISTRO CLUB EN BASE DE DATOS
        {    
                $id = null;
                $connect = Model::getInstanceDB();
                                
                $sql ='INSERT INTO UsuariosClub (`Nombre`,`Email`, `Password`) VALUES (:Nombre,:Email,:Pass)';
                $stmt = $connect->prepare($sql);
                                
                $stmt->bindParam(':Nombre', $NameCR);             
                $stmt->bindParam(':Email', $EmailCR);
                $stmt->bindParam(':Pass', $PassCR);
                                
                   
                if(!$stmt->execute())
                {
                        echo json_encode("Datos incorrectos");
                }
                else
                {
                
                         echo json_encode('Registro correcto.');
                }
                               
                   
        }
        public function Log_club($NameCL,$EmailCL,$PassCL)  
	{		
		$connect = Model::getInstanceDB();
                $sql ='SELECT * FROM UsuariosClub WHERE Email = :Email AND Password = :Pass AND Nombre = :Nombre';
                        
                $stmt = $connect->prepare($sql);

                $stmt->bindParam(':Nombre', $NameCL);       
		$stmt->bindParam(':Email', $EmailCL);
	        $stmt->bindParam(':Pass', $PassCL);
		$stmt->execute();
                $rows = $stmt->rowCount();
                $user=Security::en_de_cryptIt($NameCL,'de');
		
		if($rows>0)
		{
			 $_SESSION["club"]=$NameCL;
                         return true;
                        
                               
		}
		else
		{
			return false;
		}

        }
        
       
        
        
        public function Get_info()  //FUNCIÓN SELECIONAR ARTISTA PARA LOGIN EN BASE DE DATOS
	{		
		$connect = Model::getInstanceDB();
                $sql ='SELECT * FROM UsuariosArtistas WHERE Nombre = :Nombre';
                        
                $stmt = $connect->prepare($sql);

                $stmt->bindParam(':Nombre', $_SESSION["artista"]);  
                
               
		
                $stmt->execute();
                $userData = $stmt->fetch(PDO::FETCH_ASSOC);  //<---------- PARA COGER LA IMG DE LA BD.

                

                return $userData;

                
	
                         
                       
		

	}



}

