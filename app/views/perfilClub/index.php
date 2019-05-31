<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>

<div class="contsearch1"></div> 
      
<form  method="post" id="RegPerfilClub" class="cont-form-art col-12" enctype="multipart/form-data">

    <h1 class="tittle">el perfil de tu establecimiento.</h1>

          <!-- NOMBRE LOCAL-->    
    <div class="col-6"> 

          
        <div class="input-group" >
            <input type="text" id="NameClub" name="NameClub"  class="form-control"  aria-label="Username" aria-describedby="basic-addon1" placeholder="Nombre de tu establecimiento">
        </div>
        <hr>
        </div>

        <div class="col-6"> 

        <!-- DESCRIPCIÓN-->
            <div class="input-group" >
                <input type="text" id="DescripClub" name="DescripClub"  class="form-control"  aria-label="Username" aria-describedby="basic-addon1" placeholder="Describe tu establecimiento">
            </div>
            <hr>
        </div>

    <div class="col-6"> 
            <!-- NÚMERO DE TELEFONO -->
        <div class="input-group"> 
            <input type="number" class="form-control" id="NumberClub" name="NumberClub" form-control-aria-label="Number" aria-describedby="basic-addon1"  placeholder="Número de telefono">
        </div>
        <hr>
    </div>


        <!--  IMG CLUB -->  
        <div class="col-6">           
            <div class="img-box" >
				<img src="<?php echo $userimg['Imagen'];?>" id="user-img">
				<input type="file" id="user-img-file" name="user-img-file">
				<label for="user-img-file" class="center">
					Click aquí para subir imagen (2MB máx).
				</label>
			</div>
        </div>
        <hr>
</div>
            

                        <!-- BOTON -->
            <input type="button" class="btn" value="Crea tu perfil." id="perfilClub_btn">

            <!-- CONTENEDOR ERRORES -->
            <div class="errorsC"></div>
           
        </form>
        