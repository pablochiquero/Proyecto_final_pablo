$(document).ready(function()
{					
    $("#generos").change(function(){			//  SELECT DINAMICOS POR AJAX DE CATEGORIAS VINCULADAS A LOS GENEROS
       
          var genero=$("#generos").val();
          
                $.ajax({
                    type : 'post',     //$_POST
                    url : '/Proyecto_final_pablo/perfilArtista/categorias',  // RUTA A DONDE ENVIAR LOS DATOS
                    data : "genero="+genero ,      //RECOGEMOS TODO LOS DATOS DEL FORM REG
                    datatype: 'json',

                    
                    success:function(data){
						var datos = JSON.parse(data);
						// var datos =data;
						
                       var divContent = "";


										for(var i = 0; i<datos.length; i++)
											{					//PINTAMOS LAS CATEGORIAS DINAMICAS.

												divContent+='<option value='+datos[i].idCategorias+'>'+datos[i].NombreCategoria+'</option>';

											}
											if(data.length>0)
														{
															$("#categoria").html(divContent);
															
														}
														else
														{
															
														}

										
									},
									error: function(e){
										alert("error");
										

										
									}
                    

                  
                })
	  });
	  


			
	  // ---------->  VALIDACIÓN PERFIL ARTISTA    <------------------

		function readURL(input) 
		{
			if (input.files && input.files[0])
			{
				var reader = new FileReader();

				reader.onload = function(e) 
				{
					$('#user-img').attr('src', e.target.result);
				}

				reader.readAsDataURL(input.files[0]);
			}
		}
						
		$('#user-img-file').change(function(){
				readURL(this);
		});




	  $("#perfil_btn").click(function()  //<-- BOTON REG PERFIL ARTISTA
	  {  
			msg="";
			var Nombre = $('#NombreART').val();
			var Descrip = $('#Descrip').val();
			var Numero = $('#Number').val();
		
			var Categoria = $('#categoria').val();
			var imgFile = $('input[type=file]')[0].files[0];
			var formData = new FormData();
	
			if(imgFile == null){
				formData.append('NombreART', Nombre);
				formData.append('Descrip', Descrip);
				formData.append('Number', Numero);
				formData.append('Categoria', Categoria);
			}else{
				formData.append('user-img-file', imgFile);
				formData.append('NombreART', Nombre);
				formData.append('Descrip', Descrip);
				formData.append('Number', Numero);
				formData.append('Categoria', Categoria);
			}
			
			if($("#NombreART").val() == ""){ // <-- VALIDACIÓN DE NombreART REG PERFIL ARTISTA
				  msg+="Rellene el campo Nombre Artistico <br>";                
				  $("#NombreART").addClass('error-validation');

			} else{
				  $("#NombreART").removeClass('error-validation');
			  
			}

			if($("#Descrip").val() == ""){ // <-- VALIDACIÓN DE DESCRIPCIÒN REG PERFIL ARTISTA
				msg+="Rellene el campo descripción <br>";                
				$("#Descrip").addClass('error-validation');

			} else{
				$("#Descrip").removeClass('error-validation');
			
			}


			if($("#Number").val() == ""){ // <-- VALIDACIÓN DE NÚMERO REG PERFIL ARTISTA
				msg+="Rellene el campo Nùmero <br>";                
				$("#Number").addClass('error-validation');

			} else{
				$("#Number").removeClass('error-validation');
			
			}


			if ($('#generos').val() === '') {		// <-- VALIDACIÓN DE GÉNERO REG PERFIL ARTISTA
			
				msg+="Debe seleccionar una opción<br>"; 
				$("#generos").addClass('error-validation');
		
			} else {
				
				$("#generos").removeClass('error-validation');
			}

			if ($('#categoria').val() === '') {		// <-- VALIDACIÓN DE CATEGORIA REG PERFIL ARTISTA
				msg+="Debe seleccionar una opción<br>"; 
				$("#categoria").addClass('error-validation');
		
			} else {
				
				$("#categoria").removeClass('error-validation');
			}
			  
			

			  $(".errorsM").html(msg);       // <-- CONTENEDOR DE ERRORS DE REG ARTISTA

			  if(msg == ""){

				$.ajax({
  
					type: 'post',
					url : '/Proyecto_final_pablo/perfilArtista/InsertDatos',
					data: formData,
					cache: false,
					contentType: false,
					processData: false,
  
					beforeSend: function(){
						$("#errorsM").html("Enviando datos...");
					},
  
					success: function(data){
						if(data){
							$("#errorsM").html("actualizado!");
						}
						else{
							$("#errorsM").html("error!");
						}
						
  
						
						
					},
  
					error: function(){
						$("#errorsM").html("Error en el envío de datos al server");
					}
  
				});
			}
		

	  });

	  	
	 

	


	














});