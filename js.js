$(document).ready(function() {
    var botao = $('.bt1');
    var dropDown = $('.ul-caixa');    
   
       botao.on('click', function(event){
           dropDown.stop(true,true).slideToggle();
           event.stopPropagation();
       });
   });

   $(document).ready(function() {
    var botao = $('.bt2');
    var dropDown = $('.ul-cadastros');    

       botao.on('click', function(event){
           dropDown.stop(true,true).slideToggle();
           event.stopPropagation();
       });
   });

   $(document).ready(function() {
    var botao = $('.bt3');
    var dropDown = $('.ul-relatorios');    
   
       botao.on('click', function(event){
           dropDown.stop(true,true).slideToggle();
           event.stopPropagation();
       });
   });

   $(document).ready(function() {
    var botao = $('.bt4');
    var dropDown = $('.ul-estoque');    
   
       botao.on('click', function(event){
           dropDown.stop(true,true).slideToggle();
           event.stopPropagation();
       });
   });