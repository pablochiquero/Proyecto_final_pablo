$(document).ready(function()
{

    // VALIDACION Y ENVIO DE FORMULARIO LOGIN/REGISTRO ----------------> ARTISTA <----------------.

        // VARIABLE MENSAJE DONDE ALMACENAREMOS TODOS LOS MENSAJES
            // var msg="";



        //  PARA HACER CAMBIO DE LOGIN A REGISTRO ARTISTA
            $(".regArt").click(function(){
                msg="";
                $(".errorsArtistaLog").html(msg);
                $(".errorsArtistaReg").html(msg);       // <-- CAMBIO DE LOGIN CLUB A REGISTRO ART.
                $("#logArt").css("display","none");
                $("#regArt").css("display","block");
            });

            $(".logArt").click(function(){
               msg="";
                $(".errorsArtistaLog").html(msg);
                $(".errorsArtistaReg").html(msg);       // <-- CAMBIO DE REGISTRO CLUB A LOGIN ARTISTA.
                $("#regArt").css("display","none");
                $("#logArt").css("display","block");    
            });




        // VALIDAR CAMPOS DE REGISTRO ARTISTA

        $("#registrarArt").click(function()  //<-- BOTON REG ARTISTA
        {  
                msg="";
                if($("#NameArtistaReg").val() == ""){ // <-- VALIDACIÓN DE NOMBRE REG ARTISTAasd
                    msg+="Rellene el campo Nombre <br>";                
                    $("#NameArtistaReg").addClass('error-validation');

                } else{
                    $("#NameArtistaReg").removeClass('error-validation');
                
                }
                if($("#PassArtistaReg").val() == ""){  // <-- VALIDACIÓN DE PASS REG ARTISTA
                    msg+= " Rellene el campo Password <br>";               
                    $("#PassArtistaReg").addClass('error-validation');
                }
                else{
                    $("#PassArtistaReg").removeClass('error-validation');
                    
                
                } 
                
                if($("#EmailArtistaReg").val() == ""){     // <-- VALIDACIÓN DE EMAIL REG ARTISTA
                    msg+= " Rellene el campo Email <br>";
                    $("#EmailArtistaReg").addClass('error-validation');
                }
                else{
                    $("#EmailArtistaReg").removeClass('error-validation');
                
                }  

                $(".errorsArtistaReg").html(msg);       // <-- CONTENEDOR DE ERRORS DE REG ARTISTA

        //     //  ENVIO POR AJAX DE REGISTRO ARTISTA (DENTRO DE LA FUNCIÓN VALIDAR REGISTRO)
             if(msg == "")
            {
               
                $.ajax({
                    type : 'post',     //$_POST
                    url : '/Proyecto_final_pablo/session/regArt',  // RUTA A DONDE ENVIAR LOS DATOS
                    data : $("#regArt").serialize(),        //RECOGEMOS TODO LOS DATOS DEL FORM REG
                    datatype: 'json',

                    beforeSend: function(){
                        $(".errorsArtistaReg").html("Enviando datos...");
                    },

                    success:function(data){
                        $(".errorsArtistaReg").html(data);
                    },

                    error: function(){
                        $(".errorsArtistaReg").html("Error en el envio de datos al server")
                    }

                })
            }

        });






        // VALIDAR CAMPOS DE LOGIN ARTISTA
            $("#entrarArt").click(function()        //<-- BOTON LOG ARTISTA
            {

                msg="";
                if($("#EmailArtistaLog").val() == ""){  // <-- VALIDACIÓN DE EMAIL LOGIN ARTISTA
                    msg+= " Rellene el campo Email <br>";
                
                    $("#EmailArtistaLog").addClass('error-validation');
                }
                else{
                    $("#EmailArtistaLog").removeClass('error-validation');
                
                }
                if($("#PassArtistaLog").val() == ""){       // <--VALIDACIÓN DE PASS LOGIN ARTISTA
                    msg+= " Rellene el campo Password <br>";
                
                    $("#PassArtistaLog").addClass('error-validation');
                }
                else{
                    $("#PassArtistaLog").removeClass('error-validation');
                
                }   

                $(".errorsArtistaLog").html(msg);           // <-- CONTENEDOR DE ERRORS DE LOGIN ARTISTA



        //ENVIO POR AJAX DE LOGIN ARTISTA (DENTRO DE LA FUNCIÓN VALIDAR LOGIN)
                if(msg == "")
                {
                   
                    $.ajax({
                        type : 'post',     //$_POST
                        url : '/Proyecto_final_pablo/session/logArt',  // RUTA A DONDE ENVIAR LOS DATOS
                        data : $("#logArt").serialize(),        //RECOGEMOS TODO LOS DATOS DEL FORM REG
                        datatype: 'json',

                        beforeSend: function(){
                            $(".errorsArtistaLog").html("Enviando datos...");
                        },

                        success:function(data){
                            $(".errorsArtistaLog").html(data);
                        },

                        error: function(){
                            $(".errorsArtistaLog").html("Error en el envio de datos al server")
                        }
                    })

                }
            });










    // // VALIDACION Y ENVIO DE FORMULARIO LOGIN/REGISTRO -------------> CLUB <--------------.

    //     // VARIABLE MENSAJE DONDE ALMACENAREMOS TODOS LOS MENSAJES
    //         var msg="";



    //     //  PARA HACER CAMBIO DE LOGIN A REGISTRO CLUB
            $(".regClub").click(function(){
                msg="";
                $(".errorsClubLog").html(msg);
                $(".errorsClubReg").html(msg);
                $("#logClub").css("display","none");     //CAMBIO DE LOGIN CLUB A REGISTRO CLUB.
                $("#regClub").css("display","block");
            });

            $(".logClub").click(function(){
                msg="";
                $(".errorsClubLog").html(msg);
                $(".errorsClubReg").html(msg);           //CAMBIO DE REGISTRO CLUB A LOGIN CLUB.
                $("#regClub").css("display","none");
                $("#logClub").css("display","block");    
            });

        // VALIDAR CAMPOS DE REGISTRO CLUB

            $("#registrarClub").click(function(){   //<-- BOTON REG CLUB
                msg="";
                if($("#NameClubReg").val()==""){        // <-- VALIDACIÓN DE NOMBRE REG CLUB
                    msg+="Rellene el campo Nombre <br>";
                    $("#NameClubReg").addClass('error-validation');

                } else{
                    $("#NameClubReg").removeClass('error-validation');
                
                }
                if($("#PassClubReg").val() == ""){      // <-- VALIDACIÓN DE PASS REG CLUB
                    msg+= " Rellene el campo Password <br>";
                
                    $("#PassClubReg").addClass('error-validation');
                }
                else{
                    $("#PassClubReg").removeClass('error-validation');
                
                } 
                
                if($("#EmailClubReg").val() == ""){     // <-- VALIDACIÓN DE EMAIL REG CLUB
                    msg+= " Rellene el campo Email <br>";
                
                    $("#EmailClubReg").addClass('error-validation');
                }
                else{
                    $("#EmailClubReg").removeClass('error-validation');
                
                }  

                $(".errorsClubReg").html(msg);           // <-- CONTENEDOR DE ERRORS DE REG CLUB

        //  ENVIO POR AJAX DE REGISTRO CLUB (DENTRO DE LA FUNCIÓN VALIDAR REGISTRO)
                if(msg == "")
                {
                   
                    $.ajax({
                        type : 'post',  //RECOGEMOS POR $_POST
                        url : '/Proyecto_final_pablo/session/regClub', // RUTA A DONDE ENVIAR LOS DATOS
                        data : $("#regClub").serialize(),   //RECOGEMOS TODO LOS DATOS DEL FORM REG
                        datatype: 'json',

                        beforeSend: function(){
                            $(".errorsClubReg").html("Enviando datos...");
                        },

                        success:function(data){
                            $(".errorsClubReg").html(data);
                        },

                        error: function(){
                            $(".errorsClubReg").html("Error en el envio de datos al server")
                        }

                    })
                }

            });





        // VALIDAR CAMPOS DE LOGIN CLUB
        $("#entrarClub").click(function(){

            msg="";
            if($("#EmailClubLog").val() == ""){  // <-- VALIDACIÓN DE EMAIL LOG CLUB
                msg+= " Rellene el campo Nombre <br>";
            
                $("#EmailClubLog").addClass('error-validation');
            }
            else{
                $("#EmailClubLog").removeClass('error-validation');
            
            }
            if($("#PassClubLog").val() == ""){  // <-- VALIDACIÓN DE PASS LOG CLUB
                msg+= " Rellene el campo Password <br>";
            
                $("#PassClubLog").addClass('error-validation');
            }
            else{
                $("#PassClubLog").removeClass('error-validation');
            
            }   

            $(".errorsClubLog").html(msg);       // <-- CONTENEDOR DE ERRORS DE LOG CLUB



            //   ENVIO POR AJAX DE LOGIN CLUB (DENTRO DE LA FUNCIÓN VALIDAR LOGIN)
            if(msg == "")
            {
                $.ajax({
                    type : 'post',//RECOGEMOS POR $_POST
                    url : '/Proyecto_final_pablo/session/logClub',// RUTA A DONDE ENVIAR LOS DATOS
                    data : $("#logClub").serialize(),//RECOGEMOS TODO LOS DATOS DEL FORM LOGIN
                    datatype: 'json',

                    beforeSend: function(){
                        $(".errorsClubLog").html("Enviando datos...");
                    },

                    success:function(data){
                        $(".errorsClubLog").html(data);
                    },

                    error: function(){
                        $(".errorsClubLog").html("Error en el envio de datos al server")
                    }
                })

            }
        });





       


});