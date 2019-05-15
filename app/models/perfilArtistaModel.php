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




}