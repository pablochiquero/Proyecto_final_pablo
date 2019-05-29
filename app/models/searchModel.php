<?php defined('BASEPATH') or exit ('No se permite acceso directo');


class searchModel extends Model     //CLASE SESSION MODEL
{
                        
        //ARTISTAS

        public function search_BD($dato)     
        {    
            
            $connect = Model::getInstanceDB();  //CONEX A LA BASE DE DATOS

            // CONSULTA DE ARTISTAS
            $sql = "SELECT * FROM `UsuariosArtistas` WHERE Nombre LIKE concat('%', '$dato', '%')  OR NombreArtistico LIKE concat('%', '$dato','%') OR Descrip LIKE concat('%', '$dato','%')";
            $stmt = $connect->prepare($sql);         
            $stmt->execute();
            $search = $stmt->fetchAll(PDO::FETCH_ASSOC);   
            
            
            // CONSULTA DE CLUBS
            $sql1= "SELECT * FROM `UsuariosClub` WHERE Nombre LIKE concat('%', '$dato', '%')  OR NombreLocal LIKE concat('%', '$dato','%') OR Descrip LIKE concat('%', '$dato','%')";
            $stmt1 = $connect->prepare($sql1);         
            $stmt1->execute();
            $search1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);
            
            //RETURN DE ARRAY DE SEARCH
            
            return $searchtotal=[$search, $search1];

            // var_dump($searchtotal[1]);


           
        }

      

		

}



             