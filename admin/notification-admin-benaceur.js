/*-- Admin Script
------------------------------------------*/

jQuery(document).ready(function(){

	jQuery('#notification-admin-benaceur-font .handlediv,.hndle').click(function(){
		jQuery(this).parent().find('.inside').slideToggle("fast");
	});
	
	if (jQuery("#notification-admin-benaceur-font").length){
		jQuery('.notification-admin-benaceur-colorScheme_a').farbtastic('#notification-admin-benaceur-colorScheme_a');
		jQuery('.notification-admin-benaceur-txtclr_a').farbtastic('#notification-admin-benaceur-txtclr_a');
		jQuery('.notification-admin-benaceur-borderclr_a').farbtastic('#notification-admin-benaceur-borderclr_a');
		jQuery('.notification-admin-benaceur-background2clr_a').farbtastic('#notification-admin-benaceur-background2clr_a');
		jQuery('.notification-admin-benaceur-textshadowclr_a').farbtastic('#notification-admin-benaceur-textshadowclr_a');
		jQuery('.notification-admin-benaceur-boxshadowclr_a').farbtastic('#notification-admin-benaceur-boxshadowclr_a');
	}
	jQuery('html').click(function() {jQuery("#notification-admin-benaceur-font .farbtastic").fadeOut('fast');});
	
	jQuery('#notification-admin-benaceur-font .notification-admin-benaceur-colsel').click(function(event){
		jQuery("#notification-admin-benaceur-font .farbtastic").hide();
		jQuery(this).find(".farbtastic").fadeIn('fast');event.stopPropagation();
	});
	
});

