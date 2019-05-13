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
    
    <script src="webroot/js/jquery-3.3.1.min.js"></script>
    <!-- <script src="webroot/js/home.js"></script> -->
    <script src="webroot/js/reglog.js"></script>
    <title>Proyecto con bootstrap</title>
</head>
<body>

<header>

<?php
if(isset($_SESSION["usuario"])){
   
 
    echo "<h1>".$_SESSION['usuario']."</h1>";
    

      
}
else{
    echo "<h3>conectado</h3>";
    echo "<h2>prueba</h2>";
}

?>
                        <!--MENU-->                                                  
    <div class="pos-f-t">
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
            <a href="<?php echo BASE_DIR_URL ?>home/index"> <h5 class="text-white h4">Inicio</h5></a>
            <span class="text-muted">Descubre todo lo que tenemos.</span>

            <a href="<?php echo BASE_DIR_URL ?>artistas/index"> <h5 class="text-white h4">Artistas</h5></a>
            <span class="text-muted">Conoce a nuestros artistas.</span>
            
            <a href="<?php echo BASE_DIR_URL ?>eventos/index"> <h5 class="text-white h4">Eventos</h5></a>
            <span class="text-muted">Echa un vistazo a nuestros proximos eventos.</span>
            
            <a href="<?php echo BASE_DIR_URL ?>session/index"> <h5 class="text-white h4">Login</h5></a>
            <span class="text-muted">Entra o Registrate si aún no tienes cuenta.</span>
            <hr> -->

         <form action="session/salir"><input type="submit" value="salir"></form>
            <a action="session/salir"> <h5 class="text-white h4">Salir</h5></a>
             <span class="text-muted">Sal de tu cuenta.</span> 
        </div>
    </div>


        <nav class="navbar navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
            </button>
            <h1 class="logo">Siatelo</h1>
        </nav>

    </div> 
</header>
<main>
    <div class="search">  <!--   BUSCADOR -->
    <nav class="navbar navbar-light bg-light">
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button  class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </nav>
    </div>
  <?php echo $content_for_layout;?>                                                
                  
</main>
                



<div class="clear"></div>
<footer class="foot">
<div  class="col-4">
    <p ><?php echo date("Y");?> © Siatelo</p>
 </div>
</footer>                                       

            
    








    
    <script src="webroot/js/popper.min.js"></script>
    <script src="webroot/js/bootstrap.min.js"></script>
</body>

</html>





