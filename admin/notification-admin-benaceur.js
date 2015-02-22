/*-- Admin Script
------------------------------------------*/
var $jnib = jQuery.noConflict();
$jnib(document).ready(function(){

	$jnib('#notification-admin-benaceur-font .handlediv,.hndle').click(function(){
		$jnib(this).parent().find('.inside').slideToggle("fast");
	});
	
	if ($jnib("#notification-admin-benaceur-font").length){
		$jnib('.notification-admin-benaceur-colorScheme_a').farbtastic('#notification-admin-benaceur-colorScheme_a');
		$jnib('.notification-admin-benaceur-txtclr_a').farbtastic('#notification-admin-benaceur-txtclr_a');
		$jnib('.notification-admin-benaceur-borderclr_a').farbtastic('#notification-admin-benaceur-borderclr_a');
		$jnib('.notification-admin-benaceur-background2clr_a').farbtastic('#notification-admin-benaceur-background2clr_a');
		$jnib('.notification-admin-benaceur-textshadowclr_a').farbtastic('#notification-admin-benaceur-textshadowclr_a');
		$jnib('.notification-admin-benaceur-boxshadowclr_a').farbtastic('#notification-admin-benaceur-boxshadowclr_a');
	}
	$jnib('html').click(function() {$jnib("#notification-admin-benaceur-font .farbtastic").fadeOut('fast');});
	
	$jnib('#notification-admin-benaceur-font .notification-admin-benaceur-colsel').click(function(event){
		$jnib("#notification-admin-benaceur-font .farbtastic").hide();
		$jnib(this).find(".farbtastic").fadeIn('fast');event.stopPropagation();
	});
	
});

// h/s settings-updated 5 seconds later			
    window.setTimeout(function() {
	$("#Slider_nib").toggleClass("slidedown_nib slideup_nib");
        // This will execute 5 seconds later
        var label = document.getElementById('slidedown_nib slideup_nib');
        if (label != null) {
            label.style.display = 'none';
        }
    }, 3000);
	
function showIt_nib() {
	$("#Slider_nib").toggleClass("slidedown_nib slideup_nib");
document.getElementById("slidedown_nib slideup_nib").style.display = "block";
}
setTimeout("showIt_nib()",600);
// h settings-updated 5 seconds later			
