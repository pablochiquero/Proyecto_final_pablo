<?php defined('BASEPATH') or exit ('No se permite acceso directo');


class perfilClubModel extends Model
{

    public function insertImg($new_img,$Nombre,$Descrip,$Numero,$usuario_sess)
    {
        
        $connect = Model::getInstanceDB();

        
        $sql= "UPDATE UsuariosClub SET 	NombreLocal = :NameClub , Descrip = :Descrip, Num = :Numero, Imagen = :Img  WHERE  Nombre= :usuario";
        $stmt = $connect->prepare($sql);

      
        $stmt->bindParam(':NameClub', $Nombre);
        $stmt->bindParam(':Descrip', $Descrip);
        $stmt->bindParam(':Numero', $Numero);
        $stmt->bindParam(':Img', $new_img);
        $stmt->bindParam(':usuario', $usuario_sess);

            if( $stmt->execute()){
                return true;
            }
            else{
                return false;
            }
                


        
    }

    public function insert($Nombre,$Descrip,$Numero,$usuario_sess)
    {
        
        $connect = Model::getInstanceDB();

        
        $sql= "UPDATE UsuariosClub SET 	NombreLocal = :NameClub , Descrip = :Descrip, Num = :Numero WHERE  Nombre = :usuario";
        $stmt = $connect->prepare($sql);

      
        $stmt->bindParam(':NameClub', $Nombre);
        $stmt->bindParam(':Descrip', $Descrip);
        $stmt->bindParam(':Numero', $Numero);
        $stmt->bindParam(':usuario', $usuario_sess);


                if( $stmt->execute()){
                    return true;
                }
                else{
                    return false;
                }


        
    }
   

}


