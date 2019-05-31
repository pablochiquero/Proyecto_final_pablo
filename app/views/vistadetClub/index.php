<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>


   <!-- IMAGEN ARTISTA -->
   <div class="col-10 content">
    <div class="ajustimg" style="background-image: url('<?php echo $clubs[0]['Imagen'];  ?>');">

    </div>
 
</div>







    <!-- QUIEN ERES -->

    <h5 class="card-title"><?php echo $clubs[0]['NombreLocal'];  ?></h5>
        <div class="col-4 Quiensoy">
            <h2>Que soy?</h2>
                <p><?php echo $clubs[0]['Descrip'];  ?></p>

        </div>

<div class="col-10 contnum">
    <div class="Numcontact" id="Numcontact"></div>
    <button type="button" id="Click" class="btn btn-secondary btn-lg btn-block col-8">Contacta conmigo!</button>
</div>






    <!-- CONTENEDOR ULTIMOS EVENTOS  PARA CREAR PROXIMAMENTE-->
<!-- <div class="col-12 ContEvents">
<h2>Mis ultimos eventos</h2>
    <div class="card col-2" >
        <img src="#" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
    </div>
</div> -->