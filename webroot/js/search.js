$(document).ready(function(){            // HAY QUE MODIFICARLO TODO PARA ADAPTARLO A MIS BUSCADOR


								//PARA BUSCAR ARTISTAS

	$("#SearchArtista").on("keypress", function(e){
		if(e.which == 13) 
		{
			var letra = $("#SearchArtista").val();
					$.ajax({
								
						type: "post",
						dataType: "json",
						url : '/Proyecto_final_pablo/search/searchBD', 
						data: "dato="+letra,
						// async: false,
							
						
						success: function(data){
						
						// var datos = JSON.parse(data);
						var divContent = "";

						
							divContent+='<div class="row">';
								divContent+='<div class="contenteventos">';
									divContent+='<h4> Estos son los artistas encontrados según tu busqueda.</h4>';
										divContent+='<div class="proximoseventos">';
 
						
						
						for(var i = 0; i<data[0].length; i++)
						{					//PINTAMOS LAS CATEGORIAS DINAMICAS.
							
							
							
							divContent+='<div class="card" style="width: 18rem;"> ';
							divContent+='<img src="'+data[0][i].Imagen+'" class="card-img-top" alt="...">';
							divContent+='<div class="card-body">';
							divContent+='<p class="card-text">'+ data[0][i].NombreArtistico+'</p>';
							divContent+='<p class="card-text">'+ data[0][i].Descrip+'</p>';
							
							
							divContent+='<a href="vistadetArt/index" class="btn btn-primary">Visitame!</a>';
							divContent+='</div>';
							divContent+='</div>';
							
						}

									divContent+='</div>';     
								divContent+='</div>';
							divContent+='</div>';
						





						var divContent1 = "";



							divContent1+='<div class="row">';
								divContent1+='<div class="contenteventos">';
									 divContent1+='<h3>Estos son nuestros Clubs encontrados</h3>';
										divContent1+='<div class="proximoseventos">';
 
						for(var i = 0; i<data[1].length; i++)
						{					//PINTAMOS LAS CATEGORIAS DINAMICAS.
							
							 
							
							divContent1+='<div class="card" style="width: 18rem;"> ';
							divContent1+='<img src="'+data[1][i].Imagen+'" class="card-img-top" alt="...">';
							divContent1+='<div class="card-body">';
							divContent1+='<p class="card-text">'+ data[1][i].NombreLocal+'</p>';
							divContent1+='<p class="card-text">'+ data[1][i].Descrip+'</p>';
							
							divContent1+='<a href="vistadetArt/index" class="btn btn-primary">Visitame!</a>';
							divContent1+='</div>';
							divContent1+='</div>';
							
						}

									divContent1+='</div>';     
								divContent1+='</div>';
							divContent1+='</div>';
						

						if(data.length>0)
						{
					
								$(".contsearch").html(divContent);
							
							
							
							

							$(".contsearch1").html(divContent1);
							
						}
						else
						{
							$(".contsearch").html("Lo sentimos no hemos encontrado ninguna coincidencia");
							

						$(".contsearch1").html("Lo sentimos no hemos encontrado ninguna coincidencia");
							
						}
				 

									
										
					},
					error: function(e){
						alert("error");
					}
			});
	

		    
		};
	});		
	
	
});

