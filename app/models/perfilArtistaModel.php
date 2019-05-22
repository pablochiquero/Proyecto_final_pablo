<?php defined('BASEPATH') or exit ('No se permite acceso directo');


class perfilArtistaModel extends Model{

    public function get_generos(){          //CREAMOS UNA FUNCIÓN PARA PODER REALIZAR LA CONSULTA

        $connect = Model::getInstanceDB();  //CONEX A LA BASE DE DATOS

        $sql ='SELECT * FROM Generos';     //CONSULTA PARA RECOGER LOS DATOS DE LA TABLA GENERO

        $stmt = $connect->prepare($sql);        
        $stmt->execute();
       
        $generos = $stmt->fetchAll(PDO::FETCH_ASSOC);       
        return $generos;

       
      

    }
    public function get_categorias($a){
        $connect = Model::getInstanceDB();  //CONEX A LA BASE DE DATOS 
        $sql ='SELECT *  FROM Categorias WHERE idGeneros= :id';     //CONSULTA PARA RECOGER LOS DATOS DE LA TABLA CATEGORIAS
        $stmt = $connect->prepare($sql);        
        $stmt->bindParam(":id", $a);
        $stmt->execute();
        $categorias = $stmt->fetchAll(PDO::FETCH_ASSOC);       
        return $categorias;
    }

    public function Img_definida(){    //PARA PONER IMAGEN PREDEFINIDA EN EL FORMULARIO.
        
        $connect = Model::getInstanceDB(); 
        
        $sql = "SELECT imagen FROM  usuariosartistas";
        $stmt = $connect->prepare($sql);
        $stmt->execute();

        $userData = $stmt->fetch();
        return $userData;
    }


    // public function insert($NameArtistico,$Descrip,$Number,$generos){
    //     var_dump($NameArtistico);
    //     var_dump($Descrip);
    // }

    // public function get_foto(){

    //     $connect = Model::getInstanceDB();
    //     $sql ='SELECT image FROM perfilArtistas'; 
    //     $stmt = $connect->prepare($sql);        
    //     $stmt->execute();
    //     $fotoPerfil = $stmt->fetch();
    //     return $fotoPerfil;
        
    // }




}