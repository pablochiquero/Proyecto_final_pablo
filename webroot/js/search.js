$(document).ready(function(){            // HAY QUE MODIFICARLO TODO PARA ADAPTARLO A MIS BUSCADOR

	$("#SearchArtista").on("keypress", function(e){
		if(e.which == 13) 
		{
			
					$.ajax({
								type: "post",
								dataType: "json",
                                url : '/Proyecto_final_pablo/artistas/SearchArtista', 
								data : $("#SearchArtista").serialize(),
								

									success: function(data){
										var divContent = "";


										for(var i = 0; i<data.length; i++)
											{

												
									// divContent+='<div >';
												
									// 			divContent+='<h3>'+" Nombre"+'</h3>';
									// 			divContent+='<p>'+data[i]["apellido"]+data[i]["nombre"]+'</p>';
									// 			divContent+='<h3>'+"Fecha de nacimiento"+'</h3>';
									// 			divContent+='<p>'+data[i]["fecha_nacimiento"]+'</p>';
									// 			divContent+='<h3>'+"Departamento"+'</h3>';
									// 			divContent+='<p>'+data[i]["departamento"]+'</p>';
									// 			divContent+='<h3>'+"Fecha incorporación"+'</h3>';
									// 			divContent+='<p>'+data[i]["fecha_entrada"]+'</p>';
											

									// divContent+='</div>';


											}
											if(data.length>0)
														{
															$(".contsearch").append(divContent);
															
														}
														else
														{
															
														}

										
									},
									error: function(e){
										alert("error");
									}
							});
	

		    
		};
	});		
});
