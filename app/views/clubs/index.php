<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>

    <!-- CONTENEDOR DONDE METEMOS RESULTADO DE BUSCADOR -->
    

    <div class="contsearch1"></div> 

<div class="container-fluid">         <!--  TARJETAS CLUBS -->
  <div class="row">
    <div class="contenteventos">
      <h1>Clubs</h1>
        <div class="proximoseventos">
            
        <?php foreach($clubs as $value){ ?>   <!-- HACEMOS UN FOREACH PARA RECORRER LA VARIABLE DONDE ALMACENAMOS LA ARRAY RECOGIDA DE LA TABLA GENEROS-->
            
            <div class="card" style="width: 18rem;"> <!--  TARJETA QUE LUEGO NO IRA AQUI YA QUE SERA DINAMICA -->
                    
                    <div class="card-img-top" style="background-image: url(<?php echo $value['Imagen'];  ?>)" ></div>
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $value['NombreLocal'];  ?></h5>
                        <hr>
                        <p class="card-text"> <?php echo $value['Descrip'];  ?></p>
                        <hr>
                        <a href="vistadetClub/index/<?php echo $value['Nombre'];?>" class="btn btn-primary">Go somewhere</a>
                      </div>
              </div>
  
              <?php } ?>   <!-- FIN DEL FOREACH -->
            
            
      </div>         
    </div>
  </div>
</div>






<div class="clear" ></div>