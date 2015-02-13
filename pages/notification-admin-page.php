<?php  
?>	

<div id="my_wellcome_panel">
<?php if ( get_option('notification_admin_benaceur_align_msg') == 'center' ) { ?>
<div align="center">
<?php } ?>
<?php if ( get_option('notification_admin_benaceur_align_msg') == 'right' ) { ?>
<div align="right">
<?php } ?>
<?php if ( get_option('notification_admin_benaceur_align_msg') == 'left' ) { ?>
<div align="left">
<?php } ?>

<div class="important-nab_a2" id="my_wellcome_panel"><span id="close_nab">x</span><div
<?php if ( !get_option('notification_admin_benaceur_disable_clignotement')) { ?>
 id="my_wellcome_panel-b-note-nab_a" 
<?php } ?>
 class="important-nab_a">
<div class="important-nab_a3">
<?php  echo get_option('notification_admin_benaceur_text');  ?>
</div></div></div>

</div>
</div>
<script type="text/javascript">
document.getElementById("close_nab").addEventListener("click", function(e) {
    e.preventDefault();
    this.parentNode.style.display = "none";
}, false);
</script>

<?php include('notification-admin-css.php'); ?>


