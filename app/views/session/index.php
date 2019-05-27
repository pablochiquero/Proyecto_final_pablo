<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>

<div>
  <!-- LOGIN Y REGISTRO ARTISTA -->
  
  <div class="cont-form-art"> 

  <!-- REGISTRO ARTISTA -->
   <form method="post" class="Content-form" id="regArt"> 
        <h1>Registro Artista!</h1>
        
        
        

        <div class="form-group"> <!-- NOMBRE  REG ART-->
            
            <input type="text" class="form-control" id="NameArtistaReg" name="NameAR" placeholder="Nombre" >
           </div>  

          <div class="form-group"> <!--  EMAIL  REG ART-->
              <input type="email" class="form-control" id="EmailArtistaReg" aria-describedby="emailHelp" name="EmailAR" placeholder="Email artista">   
          </div>

          <div class="form-group"> <!--  PASSWORD  REG ART-->
            <input type="password" class="form-control" id="PassArtistaReg" name="PassAR" placeholder="Password" >
          </div>
          
          <div> <!--  BOTON  REG ART-->
            <button type="button" class="btn btn-light" id="registrarArt">Registrar!</button> 
          </div>
            <p> Ya estás registrado? <span class="logArt">Entra aquí como artista</span></p>

          <div class="errorsArtistaReg"></div>
        </form>

      <!-- LOGIN ARTISTA -->
        <form method="post" class="Content-form" id="logArt" >
            <h1>Login Artista!</h1>

            <div class="form-group"> <!--  NOMBRE  LOG ART-->
            <input type="text" class="form-control" id="NameArtistaLog" name="NameAL"placeholder="Nombre" >
          </div>
          <div class="form-group">   <!--  EMAIL LOG ART-->
              <input type="email" class="form-control" id="EmailArtistaLog" aria-describedby="emailHelp" name="EmailAL" placeholder="Email artista" >   
          </div>
          <div class="form-group">  <!--  PASSWORD LOG ART-->
              <input type="password" class="form-control" id="PassArtistaLog"  name="PassAL" placeholder="Password">
          </div>
          
          <div>   <!--  BOTON  LOG ART-->
              <button type="button" class="btn btn-light" id="entrarArt">Entrar!</button> 
          </div>
              <p>Aún no estás registrado? <span class="regArt">Regístrate aquí como artista</span></p>

        <div class="errorsArtistaLog"></div>
        </form>


    </div>

      


  <!-- LOGIN Y REGISTRO CLUB -->

 
  <div class="cont-form-art"> 
  


        <!-- REGISTRO CLUB -->
        <form method="post" class="Content-form" id="regClub">
        <h1>Registro Club!</h1>

        <div class="form-group"> <!--  NOMBRE  REG CLUB-->
            <input type="text" class="form-control" id="NameClubReg" name="NameCR" placeholder="Nombre" >
          </div>

        
          <div class="form-group">  <!--  EMAIL REG CLUB-->
              <input type="email" class="form-control" id="EmailClubReg" aria-describedby="emailHelp" name="EmailCR" placeholder="Email club">       
          </div>

          <div class="form-group">  <!--  PASSWORD REG CLUB-->
            <input type="password" class="form-control" id="PassClubReg" name="PassCR" placeholder="Password" >
          </div>
          
          <div>   <!--  BOTON REG CLUB-->
            <button type="button" class="btn btn-light" id="registrarClub">Registrar!</button> 
          </div>
            <p> Ya estás registrdo? <span class="logClub">Entra aquí como club</span></p>

          <div class="errorsClubReg"></div>
      </form>


      <!-- LOGIN CLUB -->
    
      <form method="post" class="Content-form" id="logClub" >
            <h1>Login Club!</h1>

            <div class="form-group"> <!--  NOMBRE  LOG CLUB-->
            <input type="text" class="form-control" id="NameClubLog" name="NameCL"placeholder="Nombre"  >
          </div>

            <div class="form-group">  <!--  EMAIL LOG CLUB-->
              <input type="email" class="form-control" id="EmailClubLog" aria-describedby="emailHelp" name="EmailCL" placeholder="Email club">         
          </div>

          <div class="form-group"> <!--  PASSWORD LOG CLUB-->
              <input type="password" class="form-control" id="PassClubLog" name="PassCL" placeholder="Password" >
          </div>
          
          <div>   <!--  BOTON LOG CLUB-->
              <button type="button" class="btn btn-light" id="entrarClub">Entrar!</button> 
          </div>
              <p>Aún no estás registrado? <span class="regClub">Regístrate aquí como club</span></p>

        <div class="errorsClubLog"></div>
        </form>


      </div>

</div>







