<?php defined('BASEPATH') or exit ('No se permite acceso directo');

class artistaModel extends Model     //CLASE SESSION MODEL
{
    public function get_artistas()
    {
        $connect = Model::getInstanceDB();  //CONEX A LA BASE DE DATOS
        $sql ='SELECT * FROM UsuariosArtistas';     //CONSULTA PARA RECOGER LOS DATOS DE LA TABLA GENERO
        $stmt = $connect->prepare($sql);        
        $stmt->execute();
        $artistas = $stmt->fetchAll(PDO::FETCH_ASSOC);       
        return $artistas;
    }        
                        
		  
		
        

  


            // //GENEROS
            // public function get_generos(){          //CREAMOS UNA FUNCIÓN PARA PODER REALIZAR LA CONSULTA

            //     $connect = Model::getInstanceDB();  //CONEX A LA BASE DE DATOS
            //     $sql ='SELECT * FROM Generos';     //CONSULTA PARA RECOGER LOS DATOS DE LA TABLA GENERO
            //     $stmt = $connect->prepare($sql);        
            //     $stmt->execute();
            //     $generos = $stmt->fetchAll(PDO::FETCH_ASSOC);       
            //     return $generos;
            // }


    


}