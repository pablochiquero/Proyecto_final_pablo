<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>

<?php 
                        
                        
                        
                        ?>

<form action="" method="post" class="cont-form-art">

    <h1 class="tittle">Crea tu perfil.</h1>

    <div class="col-6"> <!-- NOMBRE ARTISTICO -->
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="Nombre Artístico">Nombre Artístico</span>
        </div>
        <input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
        </div>
        </div>
        <hr>
        <div class="col-6"> <!-- DESCRIPCIÓN -->
            <div class="input-group" >
            <div class="input-group-prepend">
                <span class="input-group-text">Describete</span>
            </div>
            <textarea class="form-control" aria-label="With textarea"></textarea>
            </div>
        </div>
<hr>

        <div class="col-6"> <!-- NÚMERO DE TELEFONO -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="Número">Número de telefono</span>
                </div>
                    <input type="number" class="form-control" form-control-  aria-label="Number" aria-describedby="basic-addon1">
            </div>
        </div>

        <hr>

        <div class="col-12">
                <div class="input-group-prepend" class="col-6">  <!--<GENERO -->
                <span class="input-group-text" id="Número">Género</span>

                <select name="generos" id="generos">
                <optgroup label="Elige tu genero">
                <?php foreach($generos as $value){ ?>   <!-- HACEMOS UN FOREACH PARA RECORRER LA VARIABLE DONDE ALMACENAMOS LA ARRAY RECOGIDA DE LA TABLA GENEROS-->
                    
                        <option value="<?php echo $value['idGeneros']; ?>"> 
                            <?php echo $value['Nombre']; ?>      <!-- INSERTAMOS DE FORMA DINAMICA TODOS LOS TIPOS DE GENEROS -->
                        </option> 
                <?php } ?>
                </select>
                            
                </div>

            <div class="input-group-prepend" class="col-6">  <!--<CATEGORIA -->
            <span class="input-group-text">Categoria</span>

            <select name="categoria" id="categoria">
            
            </select>
                        
            </div>
        </div>

        <div class="img-box">           <!--IMG-->
				<img src="<?php echo $userData['image'];?>" id="user-img">
				<input type="file" id="user-img-file" name="user-img-file">
				<label for="user-img-file" class="center">
					Click aquí para subir imagen (2MB máx).
				</label>
			</div>


  
        </form>
        