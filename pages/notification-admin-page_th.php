<?php  
?>		

<div id="my_wellcome_panel">
<?php if ( get_option('notification_admin_benaceur_align_msg') == 'center' ) { ?>
<div align="center" id="nab">
<?php } ?>
<?php if ( get_option('notification_admin_benaceur_align_msg') == 'right' ) { ?>
<div align="right" id="nab">
<?php } ?>
<?php if ( get_option('notification_admin_benaceur_align_msg') == 'left' ) { ?>
<div align="left" id="nab">
<?php } ?>

<div class="important-nab_a2" id="my_wellcome_panel"><span id="close_nab" onmouseup="setcookie('nab',1)">
<?php if (get_option('nab_disable_close')=='img' || !get_option('nab_disable_close') ) { ?>
<img border="0" src="<?php echo '' . plugins_url( '../admin/close/close_ben1.png', __FILE__ ) . ''; ?>" width="16" height="16">
<?php } elseif (get_option('nab_disable_close')=='img1') {  ?>
<img border="0" src="<?php echo '' . plugins_url( '../admin/close/close_ben.png', __FILE__ ) . ''; ?>" width="16" height="16">
<?php } elseif (get_option('nab_disable_close')=='img2') {  ?>
<img border="0" src="<?php echo '' . plugins_url( '../admin/close/close_ben2.png', __FILE__ ) . ''; ?>" width="16" height="16">
<?php } elseif (get_option('nab_disable_close')=='img3') {  ?>
<img border="0" src="<?php echo '' . plugins_url( '../admin/close/close_ben3.png', __FILE__ ) . ''; ?>" width="16" height="16">
<?php } ?>
</span><div 
<?php if ( !get_option('notification_admin_benaceur_disable_clignotement')) { ?>
 id="my_wellcome_panel-b-note-nab_a" 
<?php } ?>
class="important-nab_a">
<div class="important-nab_a3">
<?php  echo get_option('notification_admin_benaceur_text_th');  ?>
</div></div></div>

</div>
</div>

<?php include 'hide-cook.php'; 
      include('notification-admin-css.php'); 
?>


