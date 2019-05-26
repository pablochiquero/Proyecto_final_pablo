<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <base href="<?php echo BASE_DOMAIN_DIR_URL ?>">
    <link rel="stylesheet" href="webroot/css/bootstrap.min.css">
    <link rel="stylesheet" href="webroot/css/estilos.css">
    <link rel="stylesheet" href="webroot/css/reglog.css">
    <link rel="stylesheet" href="webroot/css/perfiles.css">
  
    
    <script src="webroot/js/jquery-3.3.1.min.js"></script>
    <!-- <script src="webroot/js/home.js"></script> -->
    <script src="webroot/js/reglog.js"></script>
    <script src="webroot/js/perfilArtista.js"></script>
    <script src="webroot/js/perfilClub.js"></script>
    <title>Proyecto con bootstrap</title>
</head>
<body>

<header>
<?php

if(isset($_SESSION["artista"])){ //COMPRUEBO SI EXISTE SESSION DE ARTISTA
   
    require_once(ROOT . DS . 'app' . DS . 'views' . DS . 'templates' . DS . 'menuifsessionartista.php' ); //MENU ESPECIAL ARTISTA
         
}

 else if(isset($_SESSION["club"])){     //COMPRUEBO SI EXISTE SESSION DE CLUB
   
    require_once(ROOT . DS . 'app' . DS . 'views' . DS . 'templates' . DS . 'menuifsessionclub.php' ); //MENU ESPECIAL CLUB
         
}
else{
    require_once(ROOT . DS . 'app' . DS . 'views' . DS . 'templates' . DS . 'menunotsession.php' ); //MENU GENERICO
}

?>
</header>


<main>
    <div class="search">  <!--   BUSCADOR -->
        <nav class="navbar navbar-light bg-light">
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="SearchArtista" id="SearchArtista">
            </form>
        </nav>
    </div>



  <?php echo $content_for_layout;?>           <!--   HOME/INDEX -->                                      
                  
</main>
                





<!-- <footer class="foot clear">           FOOTER -->
    <!-- <div  class="col-4">
        <p ><//?php echo date("Y");?> © Siatelo</p>
    </div>
</footer>                                        --> 

            

    
    <script src="webroot/js/popper.min.js"></script>
    <script src="webroot/js/bootstrap.min.js"></script>
   
    </body>
</html>





