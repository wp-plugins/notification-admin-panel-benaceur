<?php if ( get_option('notification_admin_benaceur_time_a_show') == 'hour' || get_option('notification_admin_benaceur_time_a_show') == 'minute' ) { ?>	

<script type="text/javascript">
function CheckCookie(nab){
 if (cookie(nab)){
  document.getElementById(nab).style.display='none';
 }
}

function setcookie(nab,days){
 <?php if ( get_option('notification_admin_benaceur_time_a_show') == 'hour' ) { ?>	
 document.cookie=nab+'=true;expires='+(new Date(new Date().getTime()+days*<?php echo get_option('notification_admin_benaceur_enter_time') ?>*60*60*1000).toGMTString())+';path=/';
 <?php } elseif ( get_option('notification_admin_benaceur_time_a_show') == 'minute' ) { ?>	
 document.cookie=nab+'=true;expires='+(new Date(new Date().getTime()+days*<?php echo get_option('notification_admin_benaceur_enter_time') ?>*60*1000).toGMTString())+';path=/';
 <?php } ?>	
 document.getElementById(nab).style.display='none';
}

function cookie(nab){
 var re=new RegExp(nab+'[^;]+','i');
 if (document.cookie.match(re)){
  return document.cookie.match(re)[0].split("=")[1];
 }
 return null;
}

 CheckCookie('nab');
</script>

<?php } else { ?>	

<script type="text/javascript">
document.getElementById("close_nab").addEventListener("click", function(e) {
    e.preventDefault();
    this.parentNode.style.display = "none";
}, false);
</script>

<?php } ?>	







