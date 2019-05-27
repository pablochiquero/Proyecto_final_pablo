<?php defined('BASEPATH') or exit ('No se permite acceso directo');

class clubsModel extends Model     //CLASE SESSION MODEL
{
    public function get_club()
    {
        $connect = Model::getInstanceDB();  //CONEX A LA BASE DE DATOS
        $sql ='SELECT * FROM UsuariosClub';     //CONSULTA PARA RECOGER LOS DATOS DE LA TABLA GENERO
        $stmt = $connect->prepare($sql);        
        $stmt->execute();
        $clubs = $stmt->fetchAll(PDO::FETCH_ASSOC);       
        return $clubs;
    }        
                        
		  
		
        


    


}