<style>
<?php if ( !get_option( 'notification_admin_benaceur_disable_this_font' ) )  { ?>
@font-face {
    font-family:"DroidKufi_Ben";
    <?php echo 'src: url(' . plugins_url( '../font/droidkufi-regular.eot', __FILE__ ) . '); '; ?>
}
@font-face {
    font-family:"DroidKufi_Ben";
    <?php echo 'src: url(' . plugins_url( '../font/droidkufi-regular.ttf', __FILE__ ) . '); '; ?>
}
<?php } ?>
.important-nab_a { 
    background-color:<?php if (!get_option( 'notification_admin_benaceur_color_back' )) echo get_option( 'notification_admin_benaceur_color_back' ) ; else  echo '#FFFFFF'; ?>;
    line-height:2;
    border-radius:<?php echo get_option( 'notification_admin_benaceur_border_radius' ) ; ?>px;
    -moz-border-radius:<?php echo get_option( 'notification_admin_benaceur_border_radius' ) ; ?>px;
    -webkit-border-radius:<?php echo get_option( 'notification_admin_benaceur_border_radius' ) ; ?>px;
}
</style>
