<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>

      <!-- CONTENEDOR DONDE METEMOS RESULTADO DE BUSCADOR -->
      <div class="contsearch"></div> 

<div class="contsearch1"></div> 

              <!--SLIDER-->
<div class="container-fluid">          
  <div class="row">   
    <div  class="col-7" >
      <div class="bd-example" >
           
              <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
               <ol class="carousel-indicators">
                 <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                 <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                 <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
               </ol>
              <div class="carousel-inner">
               <div class="carousel-item active">
                 <img src="webroot/imagenes/3.jpeg" class="d-block w-100" alt="...">
                 <div class="carousel-caption d-none d-md-block">
                   <h5>Andres jonrron</h5>
                   <p>Bateria</p>
                 </div>
               </div>
               <div class="carousel-item">
                 <img src="webroot/imagenes/5.jpeg" class="d-block w-100" alt="...">
                 <div class="carousel-caption d-none d-md-block">
                   <h5>alba sanchez</h5>
                   <p>Guitarra</p>
                 </div>
               </div>
               <div class="carousel-item">
                 <img src="webroot/imagenes/3.jpeg" class="d-block w-100" alt="...">
                 <div class="carousel-caption d-none d-md-block">
                   <h5>Third slide label</h5>
                   <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                 </div>
               </div>
               <div class="carousel-item">
                  <img src="webroot/imagenes/5.jpeg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                  </div>
                </div>
                <div class="carousel-item">
                    <img src="webroot/imagenes/3.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Third slide label</h5>
                      <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                      <img src="webroot/imagenes/3.jpeg" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                      </div>
                    </div>
            </div>
                   
            </div>
        </div>
     </div>

     <div class="col-3">        <!-- BREVE DESCRIPCIÓN SIATELO-->
        <figure class="figure">
            <h1 class="entr">Siatelo</h1>
            <figcaption class="figure-caption text-right">Bienvenidos a Siatelo, aqui encontraras una infinidad de artistas que contratar para que tu negocio tenga 
                un ambiente fantastico en una de tus maravillosas veladas, para que tus clientes disfruten de una increible
                 experiencia mientras deleitas su paladar.</figcaption>
          </figure>
        
     </div>
    </div>
</div>

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



<div class="container-fluid">         <!--  TARJETAS CLUBS -->
  <div class="row">
    <div class="contenteventos">
      <h1>Clubs</h1>
        <div class="proximoseventos">
            
        <?php foreach($clubs as $value){ ?>   <!-- HACEMOS UN FOREACH PARA RECORRER LA VARIABLE DONDE ALMACENAMOS LA ARRAY RECOGIDA DE LA TABLA GENEROS-->
            
            <div class="card" style="width: 18rem;"> <!--  TARJETA QUE LUEGO NO IRA AQUI YA QUE SERA DINAMICA -->
                    <img src="<?php echo $value['Imagen'];  ?>" class="card-img-top" alt="...">
  
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $value['NombreLocal'];  ?></h5>
                        <p class="card-text"> <?php echo $value['Descrip'];  ?></p>
                        <a href="vistadetClub/index" class="btn btn-primary">Go somewhere</a>
                      </div>
              </div>
  
              <?php } ?>   <!-- FIN DEL FOREACH -->
            
            
      </div>         
    </div>
  </div>
</div>
<div class="clear" ></div>