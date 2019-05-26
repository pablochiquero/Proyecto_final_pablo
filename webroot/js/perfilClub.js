$(document).ready(function()
{	
 // ---------->  VALIDACIÓN PERFIL CLUB   <------------------

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




	  $("#perfilClub_btn").click(function()  //<-- BOTON REG PERFIL CLUB
	  {  
			msg="";
			var Nombre = $('#NameClub').val();
			var Descrip = $('#DescripClub').val();
			var Numero = $('#NumberClub').val();
			var imgFile = $('input[type=file]')[0].files[0];
			var formData = new FormData();
	
			if(imgFile == null){
				formData.append('NameClub', Nombre);
				formData.append('DescripClub', Descrip);
				formData.append('NumberClub', Numero);
			
			}else{
				formData.append('user-img-file', imgFile);
				formData.append('NameClub', Nombre);
				formData.append('DescripClub', Descrip);
				formData.append('NumberClub', Numero);
			
			}
			
			if($("#NameClub").val() == ""){ // <-- VALIDACIÓN DE NameClub REG PERFIL ARTISTA
				  msg+="Rellene el campo Nombre<br>";                
				  $("#NameClub").addClass('error-validation');

			} else{
				  $("#NameClub").removeClass('error-validation');
			  
			}

			if($("#DescripClub").val() == ""){ // <-- VALIDACIÓN DE DescripClubCIÒN REG PERFIL ARTISTA
				msg+="Rellene el campo DescripClubción <br>";                
				$("#DescripClub").addClass('error-validation');

			} else{
				$("#Descrip").removeClass('error-validation');
			
			}


			if($("#NumberClub").val() == ""){ // <-- VALIDACIÓN DE NÚMERO REG PERFIL ARTISTA
				msg+="Rellene el campo Nùmero <br>";                
				$("#NumberClub").addClass('error-validation');

			} else{
				$("#NumberClub").removeClass('error-validation');
			
			}

			  
			

			  $(".errorsC").html(msg);       // <-- CONTENEDOR DE ERRORS DE REG ARTISTA

			  if(msg == ""){

				$.ajax({
  
					type: 'post',
					url : '/Proyecto_final_pablo/perfilClub/InsertDatos',
					data: formData,
					cache: false,
					contentType: false,
					processData: false,
  
					beforeSend: function(){
						$("#errorsC").html("Enviando datos...");
					},
  
					success: function(data){
						if(data){
							$("#errorsC").html("actualizado!");
						}
						else{
							$("#errorsC").html("error!");
						}
						
  
						
						
					},
  
					error: function(){
						$("#errorsC").html("Error en el envío de datos al server");
					}
  
				});
			}
		

	  });

	  	
	 

	


	














});