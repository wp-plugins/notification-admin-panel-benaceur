<?php 
$s = get_option('notification_admin_benaceur_style') == '';
$s1 = get_option('notification_admin_benaceur_style') == 'style1';
$s2 = get_option('notification_admin_benaceur_style') == 'style2'; 
$s3 = get_option('notification_admin_benaceur_style') == 'style3'; 
$s4 = get_option('notification_admin_benaceur_style') == 'style4'; 
?>	

<?php if ($s1 || $s) { ?>
<?php if ( get_option('notification_admin_benaceur_align_msg') == 'center' ) { ?>
<br /><br /><div align="center" id="nab1">
<?php } ?>
<?php if ( get_option('notification_admin_benaceur_align_msg') == 'right' ) { ?>
<br /><br /><div align="right" id="nab1">
<?php } ?>
<?php if ( get_option('notification_admin_benaceur_align_msg') == 'left' ) { ?>
<br /><br /><div align="left" id="nab1">
<?php } ?>

<div class="important-nab_a2"><span id="close_nab" onmouseup="setcookie('nab1',1)">
<?php if (get_option('nab_disable_close')=='img2' || !get_option('nab_disable_close') ) { ?>
<img border="0" src="<?php echo '' . plugins_url( '../admin/close/close_ben2.png', __FILE__ ) . ''; ?>" width="16" height="16">
<?php } elseif (get_option('nab_disable_close')=='img1') {  ?>
<img border="0" src="<?php echo '' . plugins_url( '../admin/close/close_ben.png', __FILE__ ) . ''; ?>" width="16" height="16">
<?php } elseif (get_option('nab_disable_close')=='img') {  ?>
<img border="0" src="<?php echo '' . plugins_url( '../admin/close/close_ben1.png', __FILE__ ) . ''; ?>" width="16" height="16">
<?php } elseif (get_option('nab_disable_close')=='img3') {  ?>
<img border="0" src="<?php echo '' . plugins_url( '../admin/close/close_ben3.png', __FILE__ ) . ''; ?>" width="16" height="16">
<?php } ?>
</span><div
<?php if ( !get_option('notification_admin_benaceur_disable_clignotement')) { ?>
 id="my_wellcome_panel-b-note-nab_a" 
<?php } ?>
 class="important-nab_a">
<div class="important-nab_a3">
<?php  echo get_option('notification_admin_benaceur_text_tw');  ?>
</div></div></div>
</div>

<?php } else { ?>

<?php if ( get_option('notification_admin_benaceur_align_msg') == 'center' ) { ?>
<div align="center" id="nab1" 
<?php if ($s2) { ?> class="updated" <?php } elseif ($s3) { ?> class="error" <?php } elseif ($s4) { ?> class="update-nag" <?php } ?>>
<?php } ?>
<?php if ( get_option('notification_admin_benaceur_align_msg') == 'right' ) { ?>
<div align="right" id="nab1"
<?php if ($s2) { ?> class="updated" <?php } elseif ($s3) { ?> class="error" <?php } elseif ($s4) { ?> class="update-nag" <?php } ?>>
<?php } ?>
<?php if ( get_option('notification_admin_benaceur_align_msg') == 'left' ) { ?>
<div align="left" id="nab1"
<?php if ($s2) { ?> class="updated" <?php } elseif ($s3) { ?> class="error" <?php } elseif ($s4) { ?> class="update-nag" <?php } ?>>
<?php } ?>

<span id="close_nab" onmouseup="setcookie('nab1',1)">
<?php if (get_option('nab_disable_close')=='img2' || !get_option('nab_disable_close') ) { ?>
<img border="0" src="<?php echo '' . plugins_url( '../admin/close/close_ben2.png', __FILE__ ) . ''; ?>" width="16" height="16">
<?php } elseif (get_option('nab_disable_close')=='img1') {  ?>
<img border="0" src="<?php echo '' . plugins_url( '../admin/close/close_ben.png', __FILE__ ) . ''; ?>" width="16" height="16">
<?php } elseif (get_option('nab_disable_close')=='img') {  ?>
<img border="0" src="<?php echo '' . plugins_url( '../admin/close/close_ben1.png', __FILE__ ) . ''; ?>" width="16" height="16">
<?php } elseif (get_option('nab_disable_close')=='img3') {  ?>
<img border="0" src="<?php echo '' . plugins_url( '../admin/close/close_ben3.png', __FILE__ ) . ''; ?>" width="16" height="16">
<?php } ?>
</span><div
<?php if ( !get_option('notification_admin_benaceur_disable_clignotement')) { ?>
 id="my_wellcome_panel-b-note-nab_a" 
<?php } ?>
 class="important-nab_a">
<p><?php  echo get_option('notification_admin_benaceur_text_tw');  ?></p>
</div>
</div>

<?php } ?>

<?php include 'hide-cook.php'; 
      include('notification-admin-css.php'); 
?>


