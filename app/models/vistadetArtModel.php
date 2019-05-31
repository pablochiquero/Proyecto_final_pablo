<?php defined('BASEPATH') or exit ('No se permite acceso directo');

class vistadetArtModel extends Model     //CLASE SESSION MODEL
{
    public function get_artistas($user)
    {
        $connect = Model::getInstanceDB();  //CONEX A LA BASE DE DATOS
      
        $sql ='SELECT * FROM usuariosartistas join categorias on usuariosartistas.idCategorias = categorias.idCategorias WHERE Nombre=:usuario';

        

        $stmt = $connect->prepare($sql); 
        $stmt->bindParam(':usuario', $user);       

        $stmt->execute();
        
        $artistas = $stmt->fetchAll(PDO::FETCH_ASSOC);    
        
        return $artistas;
       
    }        
                        
		  
    


}