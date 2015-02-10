<style type='text/css'>
<?php if ( !$options_f['mib_msg_interface_disable_this_font'] )  { ?>
@font-face {
    font-family:"DroidKufi_Ben";
    <?php echo 'src: url(' . plugins_url( 'font/droidkufi-regular.eot', __FILE__ ) . '); '; ?>
}
@font-face {
    font-family:"DroidKufi_Ben";
    <?php echo 'src: url(' . plugins_url( 'font/droidkufi-regular.ttf', __FILE__ ) . '); '; ?>
}
<?php } ?>
.quick3-2 {
	margin-top:<?php if (!empty($options_f['mib_msg_margin_top'])) echo $options_f['mib_msg_margin_top'] ; else  echo '10'; ?>px;
	margin-bottom:<?php if (!empty($options_f['mib_msg_padding_top'])) echo $options_f['mib_msg_margin_bottom'] ; else  echo '10'; ?>px;
}
.quick3-2-2 {
	margin-top:0px;
	margin-bottom:8px;
}
.mib_msg_interface_quick { 
    background-color:<?php if (!empty($options_f['mib_msg_background'])) echo $options_f['mib_msg_background'] ; else  echo '#F3F3F3'; ?>;
	border-radius:<?php if (!empty($options_f['mib_msg_border_radius'])) echo $options_f['mib_msg_border_radius'] ; else  echo ''; ?>px;
	-moz-border-radius:<?php if (!empty($options_f['mib_msg_border_radius'])) echo $options_f['mib_msg_border_radius'] ; else  echo ''; ?>px;
	-webkit-border-radius:<?php if (!empty($options_f['mib_msg_border_radius'])) echo $options_f['mib_msg_border_radius'] ; else  echo ''; ?>px;
}
.mib_msg_interface_quick2 { 
    background-color:<?php if (!empty($options_f['mib_msg_background2'])) echo $options_f['mib_msg_background2'] ; else  echo '#FFFFFF'; ?>;
	<?php if ( !$options_f['mib_msg_min_width'] ) { ?>
    width:<?php if (!empty($options_f['mib_msg_width'])) echo $options_f['mib_msg_width'] ; else  echo '60%'; ?>;
	<?php } ?>
	min-width:<?php echo $options_f['mib_msg_min_width'] ;?>px;
	border-radius:<?php if (!empty($options_f['mib_msg_border_radius'])) echo $options_f['mib_msg_border_radius'] ; else  echo ''; ?>px;
	-moz-border-radius:<?php if (!empty($options_f['mib_msg_border_radius'])) echo $options_f['mib_msg_border_radius'] ; else  echo ''; ?>px;
	-webkit-border-radius:<?php if (!empty($options_f['mib_msg_border_radius'])) echo $options_f['mib_msg_border_radius'] ; else  echo ''; ?>px;
	opacity:<?php if (!empty($options_f['mib_msg_opacity'])) echo $options_f['mib_msg_opacity'] ; else  echo '1'; ?>;
 }
.mib_msg_interface_quick3 { 
	font-family:<?php if (!empty($options_f['mib_msg_font_family'])) echo $options_f['mib_msg_font_family'] ; else  echo 'DroidKufi_Ben, Arial'; ?>;
	font-size:<?php if (!empty($options_f['mib_msg_font_size'])) echo $options_f['mib_msg_font_size'] ; else  echo '15'; ?>px;
	color:<?php if (!empty($options_f['mib_msg_txt_color'])) echo $options_f['mib_msg_txt_color'] ; else  echo '#000000'; ?>; 
	text-align:<?php if (!empty($options_f['mib_msg_text_align'])) echo $options_f['mib_msg_text_align'] ; else  echo 'center'; ?>;
	font-weight:<?php echo $options_f['mib_msg_font_weight'] ;?>;
	padding-top:<?php if (!empty($options_f['mib_msg_padding_top'])) echo $options_f['mib_msg_padding_top'] ; else  echo '8'; ?>px;
	padding-bottom:<?php if (!empty($options_f['mib_msg_padding_bottom'])) echo $options_f['mib_msg_padding_bottom'] ; else  echo '8'; ?>px;
	padding-right:6px;
	padding-left:6px;
	line-height:<?php if (!empty($options_f['mib_msg_line_height'])) echo $options_f['mib_msg_line_height'] ; else  echo '1.5'; ?>;
	opacity:<?php if (!empty($options_f['mib_msg_opacity'])) echo $options_f['mib_msg_opacity'] ; else  echo '1'; ?>;
	text-shadow:<?php echo $options_f['mib_msg_text_shadow']; ?> <?php if (!empty($options_f['mib_msg_text_shadow_color'])) echo $options_f['mib_msg_text_shadow_color'] ; else  echo '#000000'; ?>;
	border-top:<?php if (!empty($options_f['mib_msg_border_top'])) echo $options_f['mib_msg_border_top'] ; else  echo '1'; ?>px solid <?php if (!empty($options_f['mib_msg_border_color'])) echo $options_f['mib_msg_border_color'] ; else  echo '#c6c6c6'; ?>;
	border-bottom:<?php if (!empty($options_f['mib_msg_border_bottom'])) echo $options_f['mib_msg_border_bottom'] ; else  echo '1'; ?>px solid <?php if (!empty($options_f['mib_msg_border_color'])) echo $options_f['mib_msg_border_color'] ; else  echo '#c6c6c6'; ?>;
	border-right:<?php if (!empty($options_f['mib_msg_border_right'])) echo $options_f['mib_msg_border_right'] ; else  echo '1'; ?>px solid <?php if (!empty($options_f['mib_msg_border_color'])) echo $options_f['mib_msg_border_color'] ; else  echo '#c6c6c6'; ?>;
	border-left:<?php if (!empty($options_f['mib_msg_border_left'])) echo $options_f['mib_msg_border_left'] ; else  echo '1'; ?>px solid <?php if (!empty($options_f['mib_msg_border_color'])) echo $options_f['mib_msg_border_color'] ; else  echo '#c6c6c6'; ?>;
	border-radius:<?php if (!empty($options_f['mib_msg_border_radius'])) echo $options_f['mib_msg_border_radius'] ; else  echo ''; ?>px;
	-moz-border-radius:<?php if (!empty($options_f['mib_msg_border_radius'])) echo $options_f['mib_msg_border_radius'] ; else  echo ''; ?>px;
	-webkit-border-radius:<?php if (!empty($options_f['mib_msg_border_radius'])) echo $options_f['mib_msg_border_radius'] ; else  echo ''; ?>px;
    visibility: visible;
}
<?php if ( $options_f['mib_msg_interface_delay_show']  )  { ?>
#mib-msg-delay-show {display: none;}
<?php } ?>
</style>
