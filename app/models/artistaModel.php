<?php defined('BASEPATH') or exit ('No se permite acceso directo');

class artistaModel extends Model     //CLASE SESSION MODEL
{
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
                        
		  
    


}