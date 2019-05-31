<?php defined('BASEPATH') or exit ('No se permite acceso directo');

class vistadetClubModel extends Model     //CLASE SESSION MODEL
{
    public function get_clubs($user)
    {
        $connect = Model::getInstanceDB();  //CONEX A LA BASE DE DATOS
      
        $sql ='SELECT * FROM usuariosClub  WHERE Nombre=:usuario';

        

        $stmt = $connect->prepare($sql); 
        $stmt->bindParam(':usuario', $user);       

        $stmt->execute();
        
        $clubs = $stmt->fetchAll(PDO::FETCH_ASSOC);    
        
        return $clubs;
       
    }        
                        
		  
    


}