var clignotement = function(){ 
   if (document.getElementById('my_wellcome_panel-b-note-nab_a').style.visibility=='visible'){ 
      document.getElementById('my_wellcome_panel-b-note-nab_a').style.visibility='hidden'; 
   } 
   else{ 
   document.getElementById('my_wellcome_panel-b-note-nab_a').style.visibility='visible'; 
   } 
}; 
// mise en place de l appel de la fonction toutes les 0.8 secondes 
// Pour arrêter le clignotement : clearInterval(periode); 
periode = setInterval(clignotement, 500); 


// my_wellcome_panel
  jQuery(window).ready(function(){
                jQuery( "#my_wellcome_panel" ).insertAfter( jQuery( ".wrap h2" ) ).css("display", "block");
            });
