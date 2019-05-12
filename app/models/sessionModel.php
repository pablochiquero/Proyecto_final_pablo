<?php defined('BASEPATH') or exit ('No se permite acceso directo');


class sessionModel extends Model     //CLASE SESSION MODEL
{
                        // ------------->FUNCIONES REGISTRO Y LOGIN ARTISTA<--------------

        public function Reg_artista($EmailAR,$PassAR)     //FUNCIÓN REGISTRO ARTISTA EN BASE DE DATOS
        {    
                $id = null;
                $connect = Model::getInstanceDB();
                
                $sql ='INSERT INTO UsuariosArtistas (`Email`, `Password`) VALUES (:Email,:Pass)';
                $stmt = $connect->prepare($sql);
                
                
                $stmt->bindParam(':Email', $EmailAR);
                $stmt->bindParam(':Pass', $PassAR);
                

                if(!$stmt->execute())
                {
                        echo json_encode("Datos incorrectos");
                }
                else
                {
                        echo json_encode("Registro correcto."." ".$EmailAR);
                }
            

        }
        public function Log_artista($EmailAL,$PassAL)  //FUNCIÓN SELECIONAR ARTISTA PARA LOGIN EN BASE DE DATOS
	{		
		$connect = Model::getInstanceDB();
                $sql ='SELECT * FROM UsuariosArtistas WHERE Email = :Email AND Password = :Pass';
                        
                $stmt = $connect->prepare($sql);
                        
		$stmt->bindParam(':Email', $EmailAL);
	        $stmt->bindParam(':Pass', $PassAL);
		$stmt->execute();
                $rows = $stmt->rowCount();
                $user=Security::en_de_cryptIt($EmailAL,'de');
		
		if($rows>0)
		{
			//$_SESSION["usuario"]=$EmailAL;
                        return "login correcto"." ". $user;
                               
		}
		else
		{
			return "login incorrecto";
		}

	}


                        // ------------->FUNCIONES REGISTRO Y LOGIN CLUB<--------------


        public function Reg_club($EmailCR,$PassCR)   //FUNCIÓN REGISTRO CLUB EN BASE DE DATOS
        {    
                $id = null;
                $connect = Model::getInstanceDB();
                                
                $sql ='INSERT INTO UsuariosClub (`Email`, `Password`) VALUES (:Email,:Pass)';
                $stmt = $connect->prepare($sql);
                                
                              
                $stmt->bindParam(':Email', $EmailCR);
                $stmt->bindParam(':Pass', $PassCR);
                                
                   
                if(!$stmt->execute())
                {
                        echo json_encode("Datos incorrectos");
                }
                else
                {
                        echo json_encode("Registro correcto."." ".$EmailCR);
                }
                               
                   
        }
        public function Log_club($EmailCL,$PassCL)  
	{		
		$connect = Model::getInstanceDB();
                $sql ='SELECT * FROM UsuariosClub WHERE Email = :Email AND Password = :Pass';
                        
                $stmt = $connect->prepare($sql);
                        
		$stmt->bindParam(':Email', $EmailCL);
	        $stmt->bindParam(':Pass', $PassCL);
		$stmt->execute();
                $rows = $stmt->rowCount();
                $user=Security::en_de_cryptIt($EmailCL,'de');
		
		if($rows>0)
		{
			// $_SESSION["usuario"]=$EmailCL;
                        return "login correcto"." ". $EmailCL;
                               
		}
		else
		{
			return "login incorrecto";
		}

	}

        




}

