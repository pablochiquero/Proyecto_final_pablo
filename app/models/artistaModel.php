<?php defined('BASEPATH') or exit ('No se permite acceso directo');

class artistaModel extends Model     //CLASE SESSION MODEL
{
    public function search_artista($Search)
    {
      

        $connect = Model::getInstanceDB();
        $sql= "SELECT * FROM `Artistas` WHERE Descripción LIKE concat('%', '$Search', '%') OR Número LIKE concat('%', '$Search','%')OR idGeneros LIKE concat('%', '$Search','%') 
        OR Nombre_Apellidos LIKE concat('%', '$Search','%');";

        $stmt = $connect->prepare($sql);

           $artistas = $stmt->fetchAll(PDO::FETCH_ASSOC);     
           return $artistas;
                        
                        
		  
		
        

    }


    


}