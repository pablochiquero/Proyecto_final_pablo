<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>



        <!-- CONTENEDOR DONDE METEMOS RESULTADO DE BUSCADOR -->
    <div class="contsearch"></div> 

    

<div class="container-fluid">         <!--  TARJETAS NUESTROS ARTISTAS -->
  <div class="row">
    <div class="contenteventos">
      <h1>Nuestros artistas</h1>
        <div class="proximoseventos">

        <?php foreach($artistas as $value){ ?>   <!-- HACEMOS UN FOREACH PARA RECORRER LA VARIABLE DONDE ALMACENAMOS LA ARRAY RECOGIDA DE LA TABLA GENEROS-->
            
          <div class="card" style="width: 18rem;"> <!--  TARJETA QUE LUEGO NO IRA AQUI YA QUE SERA DINAMICA -->
                  <img src="<?php echo $value['Imagen'];  ?>" class="card-img-top" alt="...">

                    <div class="card-body">
                      <h5 class="card-title"><?php echo $value['NombreArtistico'];  ?></h5>
                      <p class="card-text"> <?php echo $value['Descrip'];  ?></p>
                      <p class="card-text"> <?php echo $value['NombreCategoria'];  ?></p>
                      <a href="vistadetArt/index" class="btn btn-primary">Go somewhere</a>
                    </div>
            </div>

            <?php } ?>   <!-- FIN DEL FOREACH -->
            
      </div>         
    </div>
  </div>
</div> 


<div class="clear" ></div>


