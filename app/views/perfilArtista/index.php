<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>

<?php 
                        
                        
                        
                        ?>
      
<form action="" method="post" id="RegPerfilArt" class="cont-form-art" enctype="multipart/form-data">

    <h1 class="tittle">Crea tu perfil.</h1>

            
    <div class="col-6"> 

            <!-- NOMBRE ARTISTICO -->
        <div class="input-group" >
            <input type="text" id="Nombre" name="Nombre"  class="form-control"  aria-label="Username" aria-describedby="basic-addon1" placeholder="Nombre Artístico">
        </div>
<hr>
            <!-- DESCRIPCIÓN -->
        <div class="input-group" >  
           <textarea class="form-control" id="Descrip" aria-label="With textarea" placeholder="Describete" name="Descrip"></textarea>
        </div>
<hr>
            <!-- NÚMERO DE TELEFONO -->
        <div class="input-group mb-3"> 
            <input type="number" class="form-control" id="Number" form-control-aria-label="Number" aria-describedby="basic-addon1" name="Number" placeholder="Número de telefono">
        </div>
<hr>
            <!--<GENERO -->
    <div class="col-12">        
        <div class="input-group-prepend">  
            <span class="input-group-text" id="Número">Género</span>
            <select name="generos" id="generos">
                <optgroup label="Elige tu genero">
                <?php foreach($generos as $value){ ?>   <!-- HACEMOS UN FOREACH PARA RECORRER LA VARIABLE DONDE ALMACENAMOS LA ARRAY RECOGIDA DE LA TABLA GENEROS-->
                    
                    <option  id ="generos" name="Generos" value="<?php echo $value['idGeneros']; ?>">     
                            <?php echo $value['Nombre']; ?>      <!-- INSERTAMOS DE FORMA DINAMICA TODOS LOS TIPOS DE GENEROS -->
                    </option> 

               <?php } ?>   <!-- FIN DEL FOREACH -->
            </select>   
                    
        </div>
 
        <!--<CATEGORIA -->
        <!-- <div class="input-group-prepend" class="col-6">  
                <span class="input-group-text">Categoria</span>  
                <select name="categoria" id="categoria" name="Categoria"></select>               
        </div>

    </div>
<hr> -->

        <!--  IMG ARTISTA -->            
            <div class="img-box" class="col-6">
				<img src="<?php echo $userData['Imagen'];?>" id="user-img">
				<input type="file" id="user-img-file" name="user-img-file">
				<label for="user-img-file" class="center">
					Click aquí para subir imagen (2MB máx).
				</label>
			</div>

</div>
            

                        <!-- BOTON -->
            <input type="button" class="btn" value="Crea tu perfil." id="perfil_btn">

            <!-- CONTENEDOR ERRORES -->
            <div class="errorsM"></div>
           
        </form>
        