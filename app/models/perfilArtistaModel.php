<?php defined('BASEPATH') or exit ('No se permite acceso directo');


class perfilArtistaModel extends Model
{

            //GENEROS
    public function get_generos(){          //CREAMOS UNA FUNCIÓN PARA PODER REALIZAR LA CONSULTA

        $connect = Model::getInstanceDB();  //CONEX A LA BASE DE DATOS
        $sql ='SELECT * FROM Generos';     //CONSULTA PARA RECOGER LOS DATOS DE LA TABLA GENERO
        $stmt = $connect->prepare($sql);        
        $stmt->execute();
        $generos = $stmt->fetchAll(PDO::FETCH_ASSOC);       
        return $generos;
    }

                //CATEGORIAS
    public function get_categorias($a){

        $connect = Model::getInstanceDB();  //CONEX A LA BASE DE DATOS 
        $sql ='SELECT *  FROM Categorias WHERE idGeneros= :id';     //CONSULTA PARA RECOGER LOS DATOS DE LA TABLA CATEGORIAS
        $stmt = $connect->prepare($sql);        
        $stmt->bindParam(":id", $a);
        $stmt->execute();
        $categorias = $stmt->fetchAll(PDO::FETCH_ASSOC);       
        return $categorias;
    }

 

                // INSERTAR DATOS FORMULARIO
    public function insertImg($NameArtistico,$Descrip,$Number,$generos,$new_img)
    {
        // $connect = Model::getInstanceDB();
        // $sql ='UPDATE usuariosartistas SET NombreArtistico = :NombreArtistico, Descripción= :Descripción, Número = :Número ,idGenerosart = :idGenerosart ,Imagen = :Imagen ';

        // $stmt = $connect->prepare($sql);

        // $stmt->bindParam(":NombreArtistico", $NameArtistico);
        // $stmt->bindParam(":Descripción", $Descrip);
        // $stmt->bindParam(":Número", $Number);
        // $stmt->bindParam(":idGenerosart", $generos);
        // // $stmt->bindParam(":categoria", $categoria);
        // $stmt->bindParam(":Imagen", $new_img);

        // if($stmt->execute()){
        //     return true;
        // }
        // else{
        //     return false;
        // }


        
    }

    
    public function insert($NameArtistico,$Descrip,$Number,$generos)
    {
        // $connect = Model::getInstanceDB();
        // $sql ='UPDATE usuariosartistas SET NombreArtistico = :NombreArtistico, Descripción= :Descripción, Número = :Número ,idGenerosart = :idGenerosart  ';

        // $stmt = $connect->prepare($sql);

        // $stmt->bindParam(":NombreArtistico", $NameArtistico);
        // $stmt->bindParam(":Descripción", $Descrip);
        // $stmt->bindParam(":Número", $Number);
        // $stmt->bindParam(":idGenerosart", $generos);
        //  // $stmt->bindParam(":categoria", $categoria);
        

        // if($stmt->execute()){
        //     return true;
        // }
        // else{
        //     return false;
        // }
  

    }

}