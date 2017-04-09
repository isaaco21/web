$(document).ready(function(){
    
    // codigo para formularios de inicio de sesion y registro dinamicos
    
    
    $(".pageForm").css({"display" : "none"});
    $(".localForm").css({"display" : "block"});
    
    $("#iniciarSesionLink").click(function(){
        $('#formsMenuUsuario .formRegistroDiv').slideUp("fast", function(){
            $('#formsMenuUsuario .formIniciarSesionDiv').slideToggle();
        });
    });
    $("#registroLink").click(function(){
        $('#formsMenuUsuario .formIniciarSesionDiv').slideUp("fast", function(){
            $('#formsMenuUsuario .formRegistroDiv').slideDown();
        });
    });

    
    //codigo para el filtro por género 
    
    $("#menFilterLink").click(function(){
        $(".men .capa").animate({opacity : "0"})
        $(".women .capa, .kids .capa").animate({opacity : "0.5"})

    });
    $("#womenFilterLink").click(function(){
        $(".women .capa").animate({opacity : "0"})
        $(".men .capa, .kids .capa").animate({opacity : "0.5"})

    });
    $("#kidsFilterLink").click(function(){
        $(".kids .capa").animate({opacity : "0"})
        $(".men .capa, .women .capa").animate({opacity : "0.5"})

    });
    $("#allFilterLink").click(function(){
        $(".men .capa, .women .capa, .kids .capa").animate({opacity : "0"})

    });
    
    
    

});