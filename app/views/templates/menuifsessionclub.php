   <!--MENU CON SESSIÓN CLUB-->                                                  
   <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <a href="home/index"> <h5 class="text-white h4">Inicio</h5></a>
                <span class="text-muted">Descubre todo lo que tenemos.</span>

                <a href="artistas/index"> <h5 class="text-white h4">Artistas</h5></a>
                <span class="text-muted">Conoce a nuestros artistas.</span>
                
                <a href="eventos/index"> <h5 class="text-white h4">Eventos</h5></a>
                <span class="text-muted">Echa un vistazo a nuestros proximos eventos.</span>
                
                <a href="perfilClub/index"> <h5 class="text-white h4">Tu Club</h5></a>
                <span class="text-muted">Enseñanos tu club.</span>
                
            </div>
        </div>


        <nav class="navbar navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <h1 class="logo"> Bienvenido a Siatelo <a href="perfil/index" class="etexus"><?php echo $_SESSION["club"]?></a></h1> 
            <img src="<?php echo $userData['Imagen'];?>">
            <a href="session/salir" class="etexus">salir</a>
        </nav>

    </div> 