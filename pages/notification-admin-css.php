<style type="text/css">
<?php if ( !get_option( 'notification_admin_benaceur_disable_this_font' ) )  { ?>
@font-face {
  font-family: "DroidKufi_Ben";
  src: url(<?php echo '' . plugins_url( '../font/droidkufi-regular.eot' , __FILE__ ) . ''; ?>);
  src: url(<?php echo '' . plugins_url( '../font/droidkufi-regular.eot' , __FILE__ ) . ''; ?>?#iefix) format("embedded-opentype"),
       url(<?php echo '' . plugins_url( '../font/droidkufi-regular.ttf' , __FILE__ ) . ''; ?>) format("truetype");
}
<?php } ?>
.important-nab_a { 
    background-color:<?php if (get_option( 'notification_admin_benaceur_color_back' )) echo get_option( 'notification_admin_benaceur_color_back' ) ; else  echo '#FFFFFF'; ?>;
    line-height:2;
    border-radius:<?php echo get_option( 'notification_admin_benaceur_border_radius' ) ; ?>px;
    -moz-border-radius:<?php echo get_option( 'notification_admin_benaceur_border_radius' ) ; ?>px;
    -webkit-border-radius:<?php echo get_option( 'notification_admin_benaceur_border_radius' ) ; ?>px;
}
.important-nab_a2 { 
    background-color:<?php if (get_option( 'notification_admin_benaceur_color_back2' )) echo get_option( 'notification_admin_benaceur_color_back2' ) ; else  echo '#f5d6d6'; ?>;
    border-top:<?php $border_top=get_option( 'notification_admin_benaceur_border_top' ); if (!empty($border_top)) echo $border_top; elseif ($border_top == '') echo "1"; else echo "0"; ?>px solid <?php if (get_option( 'notification_admin_benaceur_color_border' )) echo get_option( 'notification_admin_benaceur_color_border' ) ; else  echo '#CE1031'; ?>;
    border-bottom:<?php $border_bottom=get_option( 'notification_admin_benaceur_border_bottom' ); if (!empty($border_bottom)) echo $border_bottom; elseif ($border_bottom == '') echo "1"; else echo "0"; ?>px solid <?php if (get_option( 'notification_admin_benaceur_color_border' )) echo get_option( 'notification_admin_benaceur_color_border' ) ; else  echo '#CE1031'; ?>;
    border-right:<?php $border_right=get_option( 'notification_admin_benaceur_border_right' ); if (!empty($border_right)) echo $border_right; elseif ($border_right == '') echo "1"; else echo "0"; ?>px solid <?php if (get_option( 'notification_admin_benaceur_color_border' )) echo get_option( 'notification_admin_benaceur_color_border' ) ; else  echo '#CE1031'; ?>;
    border-left:<?php $border_left=get_option( 'notification_admin_benaceur_border_left' ); if (!empty($border_left)) echo $border_left; elseif ($border_left == '') echo "1"; else echo "0"; ?>px solid <?php if (get_option( 'notification_admin_benaceur_color_border' )) echo get_option( 'notification_admin_benaceur_color_border' ) ; else  echo '#CE1031'; ?>;
	box-shadow:<?php echo get_option('notification_admin_benaceur_box_shadow'); ?> <?php if (get_option( 'notification_admin_benaceur_box_shadow_v' )) echo get_option( 'notification_admin_benaceur_box_shadow_v'); elseif (get_option( 'notification_admin_benaceur_box_shadow_v') == '0')  echo "0"; else echo "4"; ?>px <?php if (get_option( 'notification_admin_benaceur_box_shadow_color' )) echo get_option( 'notification_admin_benaceur_box_shadow_color' ) ; else  echo '#888888'; ?>;
	line-height:2;
    border-radius:<?php echo get_option( 'notification_admin_benaceur_border_radius' ) ; ?>px;
    width:<?php if (get_option( 'notification_admin_benaceur_width' )) echo get_option( 'notification_admin_benaceur_width' ) ; else  echo '99%'; ?>;
    -moz-border-radius:<?php echo get_option( 'notification_admin_benaceur_border_radius' ) ; ?>px;
    -webkit-border-radius:<?php echo get_option( 'notification_admin_benaceur_border_radius' ) ; ?>px;
	margin-top:<?php if (get_option( 'notification_admin_benaceur_margin_top' )) echo get_option( 'notification_admin_benaceur_margin_top'); else echo "0"; ?>px;
	margin-bottom:<?php if (get_option( 'notification_admin_benaceur_margin_bottom' )) echo get_option( 'notification_admin_benaceur_margin_bottom'); else echo "0"; ?>px;
    opacity:<?php if (get_option( 'notification_admin_benaceur_opacity' )) echo get_option( 'notification_admin_benaceur_opacity'); else echo "1"; ?>; 
 }
.important-nab_a3 {
    font-family:<?php if (get_option( 'notification_admin_benaceur_font' )) echo get_option( 'notification_admin_benaceur_font' ) ; else  echo 'DroidKufi_Ben, Arial'; ?>;
    font-size:<?php if (get_option( 'notification_admin_benaceur_font_size' )) echo get_option( 'notification_admin_benaceur_font_size' ) ; else  echo '14'; ?>px;
    color:<?php if (get_option( 'notification_admin_benaceur_color_text' )) echo get_option( 'notification_admin_benaceur_color_text' ) ; else  echo '#000000'; ?>; 
    font-weight:<?php echo get_option('notification_admin_benaceur_font_weight') ;?>;
    text-align:<?php if (get_option( 'notification_admin_benaceur_text_align' )) echo get_option( 'notification_admin_benaceur_text_align' ) ; else  echo 'center'; ?>;
	text-shadow:<?php echo get_option('notification_admin_benaceur_text_shadow'); ?> <?php if (get_option( 'notification_admin_benaceur_text_shadow_color' )) echo get_option( 'notification_admin_benaceur_text_shadow_color' ) ; else  echo '#000000'; ?>;
	padding-top:<?php $padding_top=get_option( 'notification_admin_benaceur_padding_top' ); if (!empty($padding_top)) echo $padding_top; elseif ($padding_top == '') echo "1"; else echo "0"; ?>px;
	padding-bottom:<?php $padding_bottom=get_option( 'notification_admin_benaceur_padding_bottom' ); if (!empty($padding_bottom)) echo $padding_bottom; elseif ($padding_bottom == '') echo "1"; else echo "0"; ?>px;
	padding-right:6px;
	padding-left:6px;
	visibility: visible; 
}

#close_nab { 
    position:relative;
	background-color:;
	color:#000;
	width:13px;
    margin-bottom:-2px;
	border-radius:4px;
    border:1px solid transparent;
	font-family:Arial;font-size:18px;font-weight:bold;text-align:center;
	margin-top:<?php if ($s1 || $s || $s4) echo "-7"; else echo "2"; ?>px;
    <?php if ( is_rtl() ) { ?>
	margin-left:<?php if ($s1 || $s) echo "5"; elseif ($s4) echo "-7"; else echo "-4"; ?>px;
	float:left;
	<?php } else { ?>
	margin-right:<?php if ($s1 || $s) echo "5"; elseif ($s4) echo "-7"; else echo "-4"; ?>px;
	float:right;
	<?php } ?>
	
	<?php if ( get_option( 'notification_admin_benaceur_disable_b_close' ) )  { ?>
    display:none;
	<?php } ?>
}
#close_nab:hover {
    cursor:pointer;
}

#nab1.updated,#nab1.error,#nab1.update-nag {
    font-family:<?php if (get_option( 'notification_admin_benaceur_font' )) echo get_option( 'notification_admin_benaceur_font' ) ; else  echo 'DroidKufi_Ben, Arial'; ?>;
    font-size:<?php if (get_option( 'notification_admin_benaceur_font_size' )) echo get_option( 'notification_admin_benaceur_font_size' ) ; else  echo '14'; ?>px;
    color:<?php if (get_option( 'notification_admin_benaceur_color_text' )) echo get_option( 'notification_admin_benaceur_color_text' ) ; else  echo '#000000'; ?>; 
    text-align:<?php if (get_option( 'notification_admin_benaceur_text_align' )) echo get_option( 'notification_admin_benaceur_text_align' ) ; else  echo 'center'; ?>;
}

<?php if( $_GET['page'] ){ ?>
#nab1.updated,#nab1.error {margin-top:30px;}
<?php } ?>	

</style>
