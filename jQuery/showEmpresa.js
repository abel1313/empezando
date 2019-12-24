$(document).ready(function(){

mostrarTablaTodos("../Controlador/mostrarEmpresa.php","#showEmpresa table tbody");

});





function mostrarTablaTodos(url,imprimirRespuesta){

 $.ajax({


           url:url,
           success:function(respuesta){
             
          $(imprimirRespuesta).html(respuesta);
               
               },
           error:function(jqXHR,status,error){
                  console.log(status); 
                   console.log(error);
                   
           },complete:function(jqXHR,status){
               console.log(status);
           },timeoute:4000
           
       });
       return false;

}