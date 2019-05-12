<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>

<div>
  <!-- LOGIN Y REGISTRO ARTISTA -->
  <div class="cont-LR-artista">

  <!-- REGISTRO ARTISTA -->
  <form method="post" class="ffreg" id="regArt">
        <h1>Registro Artista!</h1>

          <div class="form-group"> <!--  EMAIL  REG ART-->
              <label for="exampleInputEmail1">Email artista</label> 
              <input type="email" class="form-control" id="EmailArtistaReg" aria-describedby="emailHelp" name="EmailAR">   
          </div>

          <div class="form-group"> <!--  PASSWORD  REG ART-->
            <label for="exampleInputPassword2">Password</label> 
            <input type="password" class="form-control" id="PassArtistaReg" name="PassAR" >
          </div>
          
          <div> <!--  BOTON  REG ART-->
            <input type="button" value="Registrar!" id="registrarArt"> 
          </div>
            <p> Ya estás registrado? <span class="logArt">Entra aquí como artista</span></p>

          <div class="errorsArtistaReg"></div>
        </form>

      <!-- LOGIN ARTISTA -->
        <form method="post" class="ffreg" id="logArt" >
            <h1>Login Artista!</h1>
          <div class="form-group">   <!--  EMAIL LOG ART-->
              <label for="exampleInputEmail1">Email artista</label> 
              <input type="email" class="form-control" id="EmailArtistaLog" aria-describedby="emailHelp" name="EmailAL" >   
          </div>
          <div class="form-group">  <!--  PASSWORD LOG ART-->
              <label for="exampleInputPassword1">Password </label>  
              <input type="password" class="form-control" id="PassArtistaLog"  name="PassAL">
          </div>
          
          <div>   <!--  BOTON  LOG ART-->
              <input type="button" value="Entrar!" id="entrarArt">  
          </div>
              <p>Aun no estás registrado? <span class="regArt">Regístrate aquí como artista</span></p>

        <div class="errorsArtistaLog"></div>
        </form>


    </div>

      


  <!-- LOGIN Y REGISTRO CLUB -->

  <div class="cont-LR-club">
  


        <!-- REGISTRO CLUB -->
        <form method="post" class="ffreg" id="regClub">
        <h1>Registro Club!</h1>
        
          <div class="form-group">  <!--  EMAIL REG CLUB-->
              <label for="exampleInputEmail1">Email club</label> 
              <input type="email" class="form-control" id="EmailClubReg" aria-describedby="emailHelp" name="EmailCR">       
          </div>

          <div class="form-group">  <!--  PASSWORD REG CLUB-->
            <label for="exampleInputPassword2">Password</label>  
            <input type="password" class="form-control" id="PassClubReg" name="PassCR" >
          </div>
          
          <div>   <!--  BOTON REG CLUB-->
            <input type="button" value="Registrar!" id="registrarClub"> 
          </div>
            <p> Ya estás registrdo? <span class="logClub">Entra aquí como club</span></p>

          <div class="errorsClubReg"></div>
      </form>


      <!-- LOGIN CLUB -->
    
      <form method="post" class="ffreg" id="logClub" >
            <h1>Login Club!</h1>

            <div class="form-group">  <!--  EMAIL LOG CLUB-->
              <label for="exampleInputEmail1">Email club</label>  
              <input type="email" class="form-control" id="EmailClubLog" aria-describedby="emailHelp" name="EmailCL">         
          </div>

          <div class="form-group"> <!--  PASSWORD LOG CLUB-->
              <label for="exampleInputPassword1">Password </label> 
              <input type="password" class="form-control" id="PassClubLog" name="PassCL" >
          </div>
          
          <div>   <!--  BOTON LOG CLUB-->
              <input type="button" value="Entrar!" id="entrarClub">  
          </div>
              <p>Aun no estás registrado? <span class="regClub">Regístrate aquí como club</span></p>

        <div class="errorsClubLog"></div>
        </form>


      </div>

</div>







