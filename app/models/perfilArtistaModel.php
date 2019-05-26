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
 public function insertImg($new_img,$Nombre,$Descrip,$Number,$generos,$usuario_sess)
                    
  {
        

        
        $connect = Model::getInstanceDB();

        
        $sql= "UPDATE UsuariosArtistas SET NombreArtistico = :NameArt, Descrip= :Descrip, Num= :Num ,idGenerosart = :Generos, Imagen = :Img WHERE  Nombre = :usuario";
        $stmt = $connect->prepare($sql);

        $stmt->bindParam(':NameArt', $Nombre);
        $stmt->bindParam(':Descrip', $Descrip);
        $stmt->bindParam(':Num', $Number);
        $stmt->bindParam(':Generos', $generos);
        $stmt->bindParam(':Img', $new_img);
        $stmt->bindParam(':usuario', $usuario_sess);
        //$stmt->bindParam(':categoria', $categoria);
        
        

        if($stmt->execute()){
            return true;
        }
        else{
            return false;
        }


        
    }

    
    public function insert($Nombre,$Descrip,$Number,$generos,$usuario_sess)
    {
       $connect = Model::getInstanceDB();
        
    $sql="UPDATE UsuariosArtistas SET NombreArtistico = ':NameArt', Descrip= ':Descrip', Num = ':Num', idGenerosart = ':Generos'  WHERE  Nombre = ':usuario' ";   
    
        $stmt = $connect->prepare($sql);

        $stmt->bindParam(':NombreART', $Nombre);
        $stmt->bindParam(':Descrip', $Descrip);
        $stmt->bindParam(':Num', $Number);
        $stmt->bindParam(':Generos', $generos);
    //  $stmt->bindParam(":categoria", $categoria);
        $stmt->bindParam(':usuario', $usuario_sess);
   

         if($stmt->execute())
         {
             return true;
 
         } else {
 
             return false;
         }

    }

}