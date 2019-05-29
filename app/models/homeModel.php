<?php defined('BASEPATH') or exit ('No se permite acceso directo');

class homeModel extends Model {

    public function get_artistas()
    {
        $connect = Model::getInstanceDB();  //CONEX A LA BASE DE DATOS
        // $sql ='SELECT * FROM UsuariosArtistas,categorias';     //CONSULTA PARA RECOGER LOS DATOS DE LA TABLA GENERO
        $sql ='SELECT * FROM usuariosartistas join categorias on usuariosartistas.idCategorias = categorias.idCategorias';
        $stmt = $connect->prepare($sql);        
        $stmt->execute();
        $artistas = $stmt->fetchAll(PDO::FETCH_ASSOC);       
        return $artistas;
    }        
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
