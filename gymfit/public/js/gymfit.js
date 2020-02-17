$(function(){

    
   $('.formProducto').blur(function(){
       if($(this).val() == ""){
           alert('El input '+$(this).prop('name')+" no puede estar vacio");
       }
   });
    
});