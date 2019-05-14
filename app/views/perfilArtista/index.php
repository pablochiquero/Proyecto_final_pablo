<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>

<form action="" method="post" class="cont-form-art">

    <h1 class="tittle">Crea tu perfil.</h1>

    <div class="col-6"> <!-- NOMBRE ARTISTICO -->
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="Nombre Artístico">Nombre Artístico</span>
        </div>
        <input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
        </div>
        </div>
        <hr>
        <div class="col-6"> <!-- DESCRIPCIÓN -->
            <div class="input-group" >
            <div class="input-group-prepend">
                <span class="input-group-text">Describete</span>
            </div>
            <textarea class="form-control" aria-label="With textarea"></textarea>
            </div>
        </div>
<hr>

        <div class="col-6"> <!-- NÚMERO DE TELEFONO -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="Número">Número de telefono</span>
                </div>
                    <input type="number" class="form-control" form-control-  aria-label="Number" aria-describedby="basic-addon1">
            </div>
        </div>

        <hr>
        <div class="col-6">
        <div class="input-group-prepend"><!-- GENERO -->
            <span class="input-group-text" id="Número">Genero</span>
            <select class="form-control" id="exampleFormControlSelect1">
            <option > Elige un Genero </option>
                <option>Musical</option>
                <option>Arte</option>
                <option>Baile</option>
                <option>Interpretación</option>
                <option></option>
                </select>
        </div>
        </div>

        <hr>



        <hr>
        <div class="col-6">
       <div class="input-group-prepend"> <!-- CATEGORIA -->
            <span class="input-group-text" id="Número">Categoria</span>
            <select name="OS" class="form-control">
        
                <option selected value="0"> Elige una Categoría </option>
                    <optgroup label="Musical"> 
                    <option value="1">Dj</option> 
                    <option value="2">Pop</option> 
                    <option value="3">Rap</option> 
                    <option value="4">Clasica</option> 
                    <option value="5">Rock</option> 
                </optgroup> 
                <optgroup label="Arte"> 
                    <option value="4">Fedora</option> 
                    <option value="5">Debian</option> 
                    <option value="6">Suse</option> 
                </optgroup> 
                <optgroup label="Baile"> 
                    <option value="7">Fedora</option> 
                    <option value="8">Debian</option> 
                    <option value="9">Suse</option> 
                </optgroup> 
                <optgroup label="Interpretación"> 
                    <option value="10">Fedora</option> 
                    <option value="11">Debian</option> 
                    <option value="12">Suse</option> 
                </optgroup> 
        </select>
        </div>
        </div>

        <hr>
  
        </form>
        