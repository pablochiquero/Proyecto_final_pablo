$(document).ready(function()
{


    $("#generos").change(function(){
       
          var genero=$("#generos").val();
          
                $.ajax({
                    type : 'post',     //$_POST
                    url : '/Proyecto_final_pablo/perfilArtista/categorias',  // RUTA A DONDE ENVIAR LOS DATOS
                    data : "genero="+genero ,      //RECOGEMOS TODO LOS DATOS DEL FORM REG
                    datatype: 'json',

                    
                    success:function(data){
                        var datos = JSON.parse(data);
                       var divContent = "";


										for(var i = 0; i<datos.length; i++)
											{

									// divContent+='<option >';
{/* <optgroup label="Elige tu genero"> */}
												 divContent+="<optgroup label='Elige tu genero'>"; 
												divContent+='<option>'+datos[i].NombreCategoria+'</option>';
												// divContent+='<h3>'+"Fecha de nacimiento"+'</h3>';
												// divContent+='<p>'+data[i]["fecha_nacimiento"]+'</p>';
												// divContent+='<h3>'+"Departamento"+'</h3>';
												// divContent+='<p>'+data[i]["departamento"]+'</p>';
												// divContent+='<h3>'+"Fecha incorporación"+'</h3>';
												// divContent+='<p>'+data[i]["fecha_entrada"]+'</p>';
											

									// divContent+='</option>';


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























});