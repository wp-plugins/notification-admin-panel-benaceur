<?php

function fonction_de_la_page_options() {
	$settings = get_settings_nab();
	$settings_tw = get_settings_nab_tw();
	$settings_th = get_settings_nab_th();
		global $wp_roles;

		if ( !isset( $wp_roles ) ) {
			$wp_roles = new WP_Roles();
		}
		$roles = $wp_roles->get_names();
        $roles = array_map( 'translate_user_role', $roles );

?>
    <div id="wpcontent-benaceur-nab"><div id="wpcontent-benaceur-nab-top"></div>
            <h2><?php _e('Notification Admin Panel Benaceur', 'notification-admin-panel-benaceur'); ?></h2>
        <h3><?php _e('Settings', 'notification-admin-panel-benaceur'); ?></h3>
<!-- hide/show settings updated -->		
<?php if( isset($_GET['settings-updated']) && $_GET['page'] == 'Notification-Admin-Benaceur' ) { ?>
	<script <?php echo 'src="' . plugins_url( 'admin/min-ben.js', __FILE__ ) . '"'; ?>></script>
      <div id="Slider_nib" class="slideup_nib">
    <div id="h-s-msg-nab" id="message" class="updated" style="background:#AC302D;color:white;">
        <p><strong><?php _e('Settings saved.') ?></strong></p>
    </div>
      </div>
<?php } ?>
<!-- hide/show settings updated -->		
        <form id="myOptionsForm1" method="post" action="options.php"  >
            <?php settings_fields( 'notification_admin_benaceur_group' ); 
				do_settings_sections( 'notification_admin_benaceur_group' );
			?>

<table class="form-table">
	<tr>
		<td>
    <div class="switch demo1">
                        <input type="checkbox"  value="1" <?php if (get_option( 'notification_admin_benaceur_enable_plug' )) echo 'checked="checked"';  ?> name="notification_admin_benaceur_enable_plug" />
                        <label></label>
	</div>
	<center><div style="margin-top:10px;" ><?php _e("Enable plugin",'notification-admin-panel-benaceur'); ?></div></center>
		</td>
	</tr>
</table>

<center><div class="to-tr2"></div></center>
</br>
<div id="notification-admin-benaceur-font">
<table>
					<tr>
						<td>
						<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
						<div class="bold-3"><select style="min-width:110px;text-align:center;"  name="notification_admin_benaceur_links_admin_bar_menu" class="notification-admin-benaceur-color-inp"><option value="menu" <?php selected('menu', get_option( 'notification_admin_benaceur_links_admin_bar_menu' )); ?>><?php _e('Menu', 'notification-admin-panel-benaceur'); ?></option><option value="submenu" <?php selected('submenu', get_option( 'notification_admin_benaceur_links_admin_bar_menu' )); ?>><?php _e('Submenu', 'notification-admin-panel-benaceur'); ?></option></select></div>
						</div></div>
						</td>
					</tr>
<tr valign="top"><td  scope="row"><?php _e('Enable Notif-Admin-Benaceur on admin bar in frontend', 'notification-admin-panel-benaceur'); ?></td><td><label class="switch-nab"><input type="checkbox" name="notification_admin_benaceur_links_admin_bar_front" class="switch-input" id="notification_admin_benaceur_links_admin_bar_front" value="1"<?php if( get_option('notification_admin_benaceur_links_admin_bar_front')) { echo 'checked="checked"'; } ?>/><span class="switch-label" data-on="On" data-off="Off"></span><span class="switch-handle"></span></label></td></tr>
<tr valign="top"><td scope="row"><?php _e('Enable Notif-Admin-Benaceur on admin bar in admin panel', 'notification-admin-panel-benaceur'); ?></td><td><label class="switch-nab"><input type="checkbox" name="notification_admin_benaceur_links_admin_bar_admin" class="switch-input" id="notification_admin_benaceur_links_admin_bar_admin" value="1"<?php if( get_option('notification_admin_benaceur_links_admin_bar_admin')) { echo 'checked="checked"'; } ?>/><span class="switch-label" data-on="On" data-off="Off"></span><span class="switch-handle"></span></label></td></tr>
</table>
</div>
</br>
<center><div class="to-tr2"></div></center>
			<table class="form-table">
                <tr> 
<h3 align="center"><font color="#fff"><?php _e('First text', 'notification-admin-panel-benaceur'); ?></font></h3>
                	<th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Enter your text', 'notification-admin-panel-benaceur'); ?></th>
                    <td>
	                    <textarea name="notification_admin_benaceur_text"  style="padding:6px" cols="80%" rows="6"><?php echo get_option('notification_admin_benaceur_text'); ?></textarea>
						</br>&nbsp;&nbsp;<em><?php _e( 'To return to the line add at the end of the line: &lt;/br>', 'notification-admin-panel-benaceur' ); ?></em>
                    </td>
                </tr>
                <tr>  
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><div class="dd"><?php _e('All users', 'notification-admin-panel-benaceur'); ?></div></th>
                    <td> 
					<label class="switch-nab">				

	                    <input type="checkbox" class="switch-input" name="notification_admin_benaceur_for_users" value="1" <?php if( get_option('notification_admin_benaceur_for_users')) { echo 'checked="checked"'; } ?>/>
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
				   </td>
                </tr>
				<tr>    
                	<th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Choose the group (You can select more than one group)', 'notification-admin-panel-benaceur'); ?></th>
                    <td>
					<div class="checkbox">				
<div class="styled-select">
<select name="notification_admin_benaceur_for_role_x[]" id="notification_admin_benaceur_for_role_x"  size="10" style="height:auto;" multiple="multiple">
<option style="color: #C4C4C4;" value="<?php echo esc_attr( $role ); ?>" select="select"><?php _e('Remove Selection', 'notification-admin-panel-benaceur'); ?></option>

						    	<?php
									$rolexcap_nab = $settings[ 'rolexcap_nab' ];

									foreach ( $roles as $role => $name ) {
								?>
<option value="<?php echo esc_attr( $role ); ?>"<?php selected( in_array( $role, $rolexcap_nab ) ); ?>><?php echo esc_html( $name ); ?></option>
								<?php
									}
								?>
</select>
</div></div>
                    </td>
                </tr>
                <tr valign="top">
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Insert the user id', 'notification-admin-panel-benaceur'); ?></th>
                    
                    <td>
					<div class="sm_benaceurlist_caps_input"><input style="font-weight:bold;" type="text" name="notification_admin_benaceur_for_user_id" placeholder="<?php _e( 'Enter here the user id', 'notification-admin-panel-benaceur' ); ?>" value="<?php echo get_option('notification_admin_benaceur_for_user_id'); ?>" /></div>
                    &nbsp;&nbsp;<em><?php _e( 'Separate between id by commas, for example: 2,16,223', 'notification-admin-panel-benaceur' ); ?></em></td>
                    
                </tr>
                <tr>    
                	<th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Insert the user name', 'notification-admin-panel-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input"><input style="font-weight:bold;" type="text" name="notification_admin_benaceur_for_user_name" placeholder="<?php _e( 'Enter here the user name', 'notification-admin-panel-benaceur' ); ?>" value="<?php echo get_option('notification_admin_benaceur_for_user_name'); ?>" /></div>
                    &nbsp;&nbsp;<em><?php _e( 'Separate between id by commas, for example: Mohamed,Omar,Ali', 'notification-admin-panel-benaceur' ); ?></em></td>
				   </td>
                </tr>
            </table>
<table>
	
					<tr>
						<td>
                   <input type="radio" name="notification_admin_benaceur_pages_admin1" value="all_pages_admin1" <?php if( get_option('notification_admin_benaceur_pages_admin1') == 'all_pages_admin1' || get_option('notification_admin_benaceur_pages_admin1') == '')echo 'checked';?> >
                    <div class="colwrap-display">&nbsp;&nbsp;<td><?php _e("In all pages Administration Panel",'notification-admin-panel-benaceur'); ?></td></div>
					</tr></br>
					<tr> 
						<td>
                   <input type="radio" name="notification_admin_benaceur_pages_admin1" value="home_admin1" <?php if( get_option('notification_admin_benaceur_pages_admin1') == 'home_admin1')echo 'checked';?> >
						</td>
                    <div class="colwrap-display">&nbsp;&nbsp;<td><?php _e("Only in the home",'notification-admin-panel-benaceur'); ?></td></div>
					</tr></br>
</table></br>
<p><?php submit_button(); ?></p>
        </form>
    <form action="options.php" method="post">
            <?php settings_fields( 'notification_admin_benaceur_group' ); 
				do_settings_sections( 'notification_admin_benaceur_group' );
			?>
      <input type="submit" value="<?php _e('Click to reset properties plugin', 'notification-admin-panel-benaceur');?>" class="button-secondary" />
    </form>
            </br><center><div class="to-tr2"></div></center></br>
			<div id="sub3">
        <form id="myOptionsForm2" method="post" action="options.php" name="f-tw"  >
            <?php settings_fields( 'notification_admin_benaceur_group_tw' ); 
				do_settings_sections( 'notification_admin_benaceur_group_tw' );
			?>
            <table class="form-table">
<h3 align="center"><font color="#fff"><?php _e('Second text', 'notification-admin-panel-benaceur'); ?></font></h3>
                <tr>    
                	<th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Enter your text', 'notification-admin-panel-benaceur'); ?></th>
                    <td>
	                    <textarea name="notification_admin_benaceur_text_tw" style="padding:6px" cols="90%" rows="6"><?php echo get_option('notification_admin_benaceur_text_tw'); ?></textarea>
                    </td>
                </tr>
                <tr>  
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><div class="dd"><?php _e('All users', 'notification-admin-panel-benaceur'); ?></div></th>
                    <td> 
					<label class="switch-nab">				

	                    <input type="checkbox" class="switch-input" name="notification_admin_benaceur_for_users_tw" value="1" <?php if( get_option('notification_admin_benaceur_for_users_tw')) { echo 'checked="checked"'; } ?>/>
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
				   </td>
                </tr>
				<tr>    
                	<th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Choose the group (You can select more than one group)', 'notification-admin-panel-benaceur'); ?></th>
                    <td>
<div class="styled-select">
<select name="notification_admin_benaceur_for_role_x_tw[]" id="notification_admin_benaceur_for_role_x_tw"  size="10" style="height:auto;" multiple="multiple">
<option style="color: #C4C4C4;" value="<?php echo esc_html( $role_tw ); ?>" select="select"><?php _e('Remove Selection', 'notification-admin-panel-benaceur'); ?></option>

						    	<?php
									$rolexcap_nab_tw = $settings_tw[ 'rolexcap_nab_tw' ];

									foreach ( $roles as $role_tw => $name ) {
								?>
<option value="<?php echo esc_attr( $role_tw ); ?>"<?php selected( in_array( $role_tw, $rolexcap_nab_tw ) ); ?>><?php echo esc_html( $name ); ?></option>
								<?php
									}
								?>
</select>
</div>
                    </td>
                </tr>
                <tr valign="top">
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Insert the user id', 'notification-admin-panel-benaceur'); ?></th>
                    
                    <td>
					<div class="sm_benaceurlist_caps_input"><input style="font-weight:bold;" type="text" name="notification_admin_benaceur_for_user_id_tw" placeholder="<?php _e( 'Enter here the user id', 'notification-admin-panel-benaceur' ); ?>" value="<?php echo get_option('notification_admin_benaceur_for_user_id_tw'); ?>" /></div>
                    &nbsp;&nbsp;<em><?php _e( 'Separate between id by commas, for example: 2,16,223', 'notification-admin-panel-benaceur' ); ?></em></td>
                    
                </tr>
                <tr>    
                	<th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Insert the user name', 'notification-admin-panel-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input"><input style="font-weight:bold;" type="text" name="notification_admin_benaceur_for_user_name_tw" placeholder="<?php _e( 'Enter here the user name', 'notification-admin-panel-benaceur' ); ?>" value="<?php echo get_option('notification_admin_benaceur_for_user_name_tw'); ?>" /></div>
                    &nbsp;&nbsp;<em><?php _e( 'Separate between id by commas, for example: 2,16,223', 'notification-admin-panel-benaceur' ); ?></em></td>
				   </td>
                </tr>
            </table>
<table>
	
					<tr>
						<td>
                   <input type="radio" name="notification_admin_benaceur_pages_admin2" value="all_pages_admin2" <?php if( get_option('notification_admin_benaceur_pages_admin2') == 'all_pages_admin2' || get_option('notification_admin_benaceur_pages_admin2') == '')echo 'checked';?> >
                    <div class="colwrap-display">&nbsp;&nbsp;<td><?php _e("In all pages Administration Panel",'notification-admin-panel-benaceur'); ?></td></div>
					</tr></br>
					<tr> 
						<td>
                   <input type="radio" name="notification_admin_benaceur_pages_admin2" value="home_admin2" <?php if( get_option('notification_admin_benaceur_pages_admin2') == 'home_admin2')echo 'checked';?> >
						</td>
                    <div class="colwrap-display">&nbsp;&nbsp;<td><?php _e("Only in the home",'notification-admin-panel-benaceur'); ?></td></div>
					</tr></br>
</table></br>
<p><?php submit_button(); ?></p>
        </form>
    <form action="options.php" method="post">
            <?php settings_fields( 'notification_admin_benaceur_group_tw' ); 
				do_settings_sections( 'notification_admin_benaceur_group_tw' );
			?>
      <input type="submit" value="<?php _e('Click to reset properties plugin', 'notification-admin-panel-benaceur');?>" class="button-secondary" />
    </form>
            </br><center><div class="to-tr2"></div></center></br>
</div>
<input type='button'  id='bt1' class="button-secondary" value='<?php _e('Second text', 'notification-admin-panel-benaceur'); ?>' onclick="setVisibility('sub3');";> 
			<div id="sub4">
        <form id="myOptionsForm3" method="post" action="options.php" name="f-th"  >
            <?php settings_fields( 'notification_admin_benaceur_group_th' ); 
				do_settings_sections( 'notification_admin_benaceur_group_th' );
			?>
            <table class="form-table">
<h3 align="center"><font color="#fff"><?php _e('Third text', 'notification-admin-panel-benaceur'); ?></font></h3>
                <tr>    
                	<th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Enter your text', 'notification-admin-panel-benaceur'); ?></th>
                    <td>
	                    <textarea name="notification_admin_benaceur_text_th" style="padding:6px" cols="90%" rows="6"><?php echo get_option('notification_admin_benaceur_text_th'); ?></textarea>
                    </td>
                </tr>
                <tr>  
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><div class="dd"><?php _e('All users', 'notification-admin-panel-benaceur'); ?></div></th>
                    <td> 
					<label class="switch-nab">				

	                    <input type="checkbox" class="switch-input" name="notification_admin_benaceur_for_users_th" value="1" <?php if( get_option('notification_admin_benaceur_for_users_th')) { echo 'checked="checked"'; } ?>/>
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
				   </td>
                </tr>
				<tr>    
                	<th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Choose the group (You can select more than one group)', 'notification-admin-panel-benaceur'); ?></th>
                    <td>
<div class="styled-select">
<select name="notification_admin_benaceur_for_role_x_th[]" id="notification_admin_benaceur_for_role_x_th"  size="10" style="height:auto;" multiple="multiple">
<option style="color: #C4C4C4;" value="<?php echo esc_html( $role_th ); ?>" select="select"><?php _e('Remove Selection', 'notification-admin-panel-benaceur'); ?></option>

						    	<?php
									$rolexcap_nab_th = $settings_th[ 'rolexcap_nab_th' ];

									foreach ( $roles as $role_th => $name ) {
								?>
<option value="<?php echo esc_attr( $role_th ); ?>"<?php selected( in_array( $role_th, $rolexcap_nab_th ) ); ?>><?php echo esc_html( $name ); ?></option>
								<?php
									}
								?>
</select>
</div>
                    </td>
                </tr>
                <tr valign="top">
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Insert the user id', 'notification-admin-panel-benaceur'); ?></th>
                    
                    <td>
					<div class="sm_benaceurlist_caps_input"><input style="font-weight:bold;" type="text" name="notification_admin_benaceur_for_user_id_th" placeholder="<?php _e( 'Enter here the user id', 'notification-admin-panel-benaceur' ); ?>" value="<?php echo get_option('notification_admin_benaceur_for_user_id_th'); ?>" /></div>
                    &nbsp;&nbsp;<em><?php _e( 'Separate between id by commas, for example: 2,16,223', 'notification-admin-panel-benaceur' ); ?></em></td>
                    
                </tr>
                <tr>    
                	<th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Insert the user name', 'notification-admin-panel-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input"><input style="font-weight:bold;" type="text" name="notification_admin_benaceur_for_user_name_th" placeholder="<?php _e( 'Enter here the user name', 'notification-admin-panel-benaceur' ); ?>" value="<?php echo get_option('notification_admin_benaceur_for_user_name_th'); ?>" /></div>
                    &nbsp;&nbsp;<em><?php _e( 'Separate between id by commas, for example: 2,16,223', 'notification-admin-panel-benaceur' ); ?></em></td>
				   </td>
                </tr>
            </table>
<table>
	
					<tr>
						<td>
                   <input type="radio" name="notification_admin_benaceur_pages_admin3" value="all_pages_admin3" <?php if( get_option('notification_admin_benaceur_pages_admin3') == 'all_pages_admin3' || get_option('notification_admin_benaceur_pages_admin3') == '')echo 'checked';?> >
                    <div class="colwrap-display">&nbsp;&nbsp;<td><?php _e("In all pages Administration Panel",'notification-admin-panel-benaceur'); ?></td></div>
					</tr></br>
					<tr> 
						<td>
                   <input type="radio" name="notification_admin_benaceur_pages_admin3" value="home_admin3" <?php if( get_option('notification_admin_benaceur_pages_admin3') == 'home_admin3')echo 'checked';?> >
						</td>
                    <div class="colwrap-display">&nbsp;&nbsp;<td><?php _e("Only in the home",'notification-admin-panel-benaceur'); ?></td></div>
					</tr></br>
</table></br>
<p><?php submit_button(); ?></p>
        </form>
    <form action="options.php" method="post">
            <?php settings_fields( 'notification_admin_benaceur_group_th' ); 
				do_settings_sections( 'notification_admin_benaceur_group_th' );
			?>
      <input type="submit" value="<?php _e('Click to reset properties plugin', 'notification-admin-panel-benaceur');?>" class="button-secondary" />
    </form>
            </br></br>
		</div>
<input type='button'  id='bt2' class="button-secondary" value='<?php _e('Third text', 'notification-admin-panel-benaceur'); ?>' onclick="setVisibility2('sub4');";> 
<div id="notification-admin-benaceur-font">
             </br><center><div class="to-tr2"></div></center></br>
  <form id="myOptionsForm4" method="post" action="options.php" >
            <?php settings_fields( 'notification_admin_benaceur_group_sty'); 
				do_settings_sections( 'notification_admin_benaceur_group_sty' );
			?>
					<tr>
						<td>
						<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
						<div class="bold-3"><select   name="notification_admin_benaceur_style" class="notification-admin-benaceur-color-inp"><option value="style1" <?php selected('style', get_option( 'notification_admin_benaceur_style' )); ?>><?php _e('style 1', 'notification-admin-panel-benaceur'); ?></option><option value="style2" <?php selected('style2', get_option( 'notification_admin_benaceur_style' )); ?>><?php _e('style 2', 'notification-admin-panel-benaceur'); ?></option><option value="style3" <?php selected('style3', get_option( 'notification_admin_benaceur_style' )); ?>><?php _e('style 3', 'notification-admin-panel-benaceur'); ?></option><option value="style4" <?php selected('style4', get_option( 'notification_admin_benaceur_style' )); ?>><?php _e('style 4', 'notification-admin-panel-benaceur'); ?></option></select></div>
						</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Styles",'notification-admin-panel-benaceur'); ?> </td></div></br>
					</tr>
          </br><h3><?php _e('Style properties ( style 1 )', 'notification-admin-panel-benaceur'); ?></h3></br>
	<div class="option-box">
					<tr>
						<td>
						<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
						<div class="bold-3"><select   name="notification_admin_benaceur_align_msg" class="notification-admin-benaceur-color-inp"><option value="center" <?php selected('center', get_option( 'notification_admin_benaceur_align_msg' )); ?>><?php _e('centering', 'notification-admin-panel-benaceur'); ?></option><option value="right" <?php selected('right', get_option( 'notification_admin_benaceur_align_msg' )); ?>><?php _e('right', 'notification-admin-panel-benaceur'); ?></option><option value="left" <?php selected('left', get_option( 'notification_admin_benaceur_align_msg' )); ?>><?php _e('left', 'notification-admin-panel-benaceur'); ?></option></select></div>
						</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("center/right/left of content",'notification-admin-panel-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
						<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
						<div class="bold-3"><select   name="notification_admin_benaceur_text_align" class="notification-admin-benaceur-color-inp"><option value="center" <?php selected('center', get_option( 'notification_admin_benaceur_text_align' )); ?>><?php _e('centering', 'notification-admin-panel-benaceur'); ?></option><option value="right" <?php selected('right', get_option( 'notification_admin_benaceur_text_align' )); ?>><?php _e('right', 'notification-admin-panel-benaceur'); ?></option><option value="left" <?php selected('left', get_option( 'notification_admin_benaceur_text_align' )); ?>><?php _e('left', 'notification-admin-panel-benaceur'); ?></option></select></div>
						</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("center/right/left of text (All styles)",'notification-admin-panel-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
								<input type="text" name="notification_admin_benaceur_color_back" id="notification-admin-benaceur-colorScheme_a" class="notification-admin-benaceur-color-inp" value="<?php if(get_option( 'notification_admin_benaceur_color_back' )) echo get_option( 'notification_admin_benaceur_color_back' ); else echo "#FFFFFF"; ?>"  />
								<div class="notification-admin-benaceur-colsel notification-admin-benaceur-colorScheme_a"></div>
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Background color",'notification-admin-panel-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
								<input type="text" name="notification_admin_benaceur_color_back2" id="notification-admin-benaceur-background2clr_a" class="notification-admin-benaceur-color-inp" value="<?php if(get_option( 'notification_admin_benaceur_color_back2' )) echo get_option( 'notification_admin_benaceur_color_back2' ); else echo "#f5d6d6"; ?>"  />
								<div class="notification-admin-benaceur-colsel notification-admin-benaceur-background2clr_a"></div>
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("the color of the second background",'notification-admin-panel-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
								<input type="text" id="notification-admin-benaceur-txtclr_a" class="notification-admin-benaceur-color-inp" value="<?php if(get_option( 'notification_admin_benaceur_color_text' )) echo get_option( 'notification_admin_benaceur_color_text' ); else echo "#000000"; ?>" name="notification_admin_benaceur_color_text" />
								<div class="notification-admin-benaceur-colsel notification-admin-benaceur-txtclr_a"></div>
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Text color (All styles)",'notification-admin-panel-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
								<input type="text" id="notification-admin-benaceur-borderclr_a" class="notification-admin-benaceur-color-inp" value="<?php if(get_option( 'notification_admin_benaceur_color_border' )) echo get_option( 'notification_admin_benaceur_color_border' ); else echo "#CE1031"; ?>" name="notification_admin_benaceur_color_border" />
								<div class="notification-admin-benaceur-colsel notification-admin-benaceur-borderclr_a"></div>
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Border color",'notification-admin-panel-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
								<input type="text" id="notification-admin-benaceur-txtclr_a" class="notification-admin-benaceur-color-inp" value="<?php $border_top=get_option( 'notification_admin_benaceur_border_top' ); if (!empty($border_top)) echo $border_top; elseif ($border_top == '') echo "1"; else echo "0"; ?>" name="notification_admin_benaceur_border_top" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("border top",'notification-admin-panel-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
								<input type="text" id="notification-admin-benaceur-txtclr_a" class="notification-admin-benaceur-color-inp" value="<?php $border_bottom=get_option( 'notification_admin_benaceur_border_bottom' ); if (!empty($border_bottom)) echo $border_bottom; elseif ($border_bottom == '') echo "1"; else echo "0"; ?>" name="notification_admin_benaceur_border_bottom" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("border bottom",'notification-admin-panel-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
								<input type="text" id="notification-admin-benaceur-txtclr_a" class="notification-admin-benaceur-color-inp" value="<?php $border_right=get_option( 'notification_admin_benaceur_border_right' ); if (!empty($border_right)) echo $border_right; elseif ($border_right == '') echo "1"; else echo "0"; ?>" name="notification_admin_benaceur_border_right" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("border right",'notification-admin-panel-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
								<input type="text" id="notification-admin-benaceur-txtclr_a" class="notification-admin-benaceur-color-inp" value="<?php $border_left=get_option( 'notification_admin_benaceur_border_left' ); if (!empty($border_left)) echo $border_left; elseif ($border_left == '') echo "1"; else echo "0"; ?>" name="notification_admin_benaceur_border_left" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("border left",'notification-admin-panel-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
								<input type="text" id="notification-admin-benaceur-txtclr_a" class="notification-admin-benaceur-color-inp" value="<?php if (get_option( 'notification_admin_benaceur_border_radius' )) echo get_option( 'notification_admin_benaceur_border_radius'); else echo "0"; ?>" name="notification_admin_benaceur_border_radius" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("border radius",'notification-admin-panel-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
								<input type="text" class="notification-admin-benaceur-color-inp" value="<?php if (get_option( 'notification_admin_benaceur_opacity' )) echo get_option( 'notification_admin_benaceur_opacity'); else echo "1"; ?>" name="notification_admin_benaceur_opacity" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("The level of transparency 1-0.1",'notification-admin-panel-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
								<input type="text" class="notification-admin-benaceur-color-inp" value="<?php if (get_option( 'notification_admin_benaceur_width' )) echo get_option( 'notification_admin_benaceur_width' ); else echo "99%"; ?>" name="notification_admin_benaceur_width" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Width by adding: px or %",'notification-admin-panel-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
								<input type="text" class="notification-admin-benaceur-color-inp" value="<?php $padding_top=get_option( 'notification_admin_benaceur_padding_top' ); if (!empty($padding_top)) echo $padding_top; elseif ($padding_top == '') echo "1"; else echo "0"; ?>" name="notification_admin_benaceur_padding_top" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("padding top",'notification-admin-panel-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
								<input type="text" class="notification-admin-benaceur-color-inp" value="<?php $padding_bottom=get_option( 'notification_admin_benaceur_padding_bottom' ); if (!empty($padding_bottom)) echo $padding_bottom; elseif ($padding_bottom == '') echo "1"; else echo "0"; ?>" name="notification_admin_benaceur_padding_bottom" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("padding bottom",'notification-admin-panel-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
								<input type="text" class="notification-admin-benaceur-color-inp" value="<?php if (get_option( 'notification_admin_benaceur_margin_top' )) echo get_option( 'notification_admin_benaceur_margin_top'); else echo "0"; ?>" name="notification_admin_benaceur_margin_top" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("margin top",'notification-admin-panel-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
								<input type="text" class="notification-admin-benaceur-color-inp" value="<?php if (get_option( 'notification_admin_benaceur_margin_bottom' )) echo get_option( 'notification_admin_benaceur_margin_bottom'); else echo "0"; ?>" name="notification_admin_benaceur_margin_bottom" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("margin bottom",'notification-admin-panel-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="notification-admin-benaceur-colwrap2">
								<input type="text" class="notification-admin-benaceur-color-inp" value="<?php if (get_option( 'notification_admin_benaceur_font' )) echo get_option( 'notification_admin_benaceur_font' ); else echo "DroidKufi_Ben, Arial"; ?>" name="notification_admin_benaceur_font" />
						&nbsp;&nbsp;&nbsp;&nbsp;<?php _e("Font family (All styles)",'notification-admin-panel-benaceur'); ?> /
                               <input type="checkbox"  value="enable" <?php checked('enable', get_option( 'notification_admin_benaceur_disable_this_font' )); ?> name="notification_admin_benaceur_disable_this_font" />
                        <?php _e("Disable this font: DroidKufi_Ben ",'notification-admin-panel-benaceur'); ?>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
								<input type="text" class="notification-admin-benaceur-color-inp" value="<?php if (get_option( 'notification_admin_benaceur_font_size' )) echo get_option( 'notification_admin_benaceur_font_size' ); else echo "14"; ?>" name="notification_admin_benaceur_font_size" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Font size (All styles)",'notification-admin-panel-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
						<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
						<div class="bold-3"><select  name="notification_admin_benaceur_font_weight" class="notification-admin-benaceur-color-inp"><option value="normal" <?php selected('normal', get_option('notification_admin_benaceur_font_weight')); ?>><?php _e('Normal', 'notification-admin-panel-benaceur'); ?></option><option value="bold" <?php selected('bold', get_option('notification_admin_benaceur_font_weight')); ?>><?php _e('Bold', 'notification-admin-panel-benaceur'); ?></option></select></div>
						</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Font weight",'notification-admin-panel-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
						<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
						<div class="bold-3"><select  name="notification_admin_benaceur_text_shadow" class="notification-admin-benaceur-color-inp"><option value="no" <?php selected('no', get_option('notification_admin_benaceur_text_shadow')); ?>><?php _e('no', 'notification-admin-panel-benaceur'); ?></option><option value="5px 5px 5px" <?php selected('5px 5px 5px', get_option('notification_admin_benaceur_text_shadow')); ?>><?php _e('yes', 'notification-admin-panel-benaceur'); ?></option></select></div>
						</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("text shadow",'notification-admin-panel-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
								<input type="text" id="notification-admin-benaceur-textshadowclr_a" class="notification-admin-benaceur-color-inp" value="<?php if(get_option('notification_admin_benaceur_text_shadow_color')) echo get_option('notification_admin_benaceur_text_shadow_color'); else echo "#000000"; ?>" name="notification_admin_benaceur_text_shadow_color" />
								<div class="notification-admin-benaceur-colsel notification-admin-benaceur-textshadowclr_a"></div>
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("text shadow color",'notification-admin-panel-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
						<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
						<div class="bold-3"><select  name="notification_admin_benaceur_box_shadow" class="notification-admin-benaceur-color-inp"><option value="no" <?php selected('no', get_option('notification_admin_benaceur_box_shadow')); ?>><?php _e('no', 'notification-admin-panel-benaceur'); ?></option><option value="0px 0px" <?php selected('0px 0px', get_option('notification_admin_benaceur_box_shadow')); ?>><?php _e('yes', 'notification-admin-panel-benaceur'); ?></option></select></div>
						</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("box shadow",'notification-admin-panel-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
								<input type="text" id="notification-admin-benaceur-boxshadowclr_a" class="notification-admin-benaceur-color-inp" value="<?php if(get_option('notification_admin_benaceur_box_shadow_color')) echo get_option('notification_admin_benaceur_box_shadow_color'); else echo "#888888"; ?>" name="notification_admin_benaceur_box_shadow_color" />
								<div class="notification-admin-benaceur-colsel notification-admin-benaceur-boxshadowclr_a"></div>
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("box shadow color",'notification-admin-panel-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
								<input type="text" id="notification-admin-benaceur-txtclr_a" class="notification-admin-benaceur-color-inp" value="<?php if (get_option( 'notification_admin_benaceur_box_shadow_v' )) echo get_option( 'notification_admin_benaceur_box_shadow_v'); elseif (get_option( 'notification_admin_benaceur_box_shadow_v') == '0')  echo "0"; else echo "4"; ?>" name="notification_admin_benaceur_box_shadow_v" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("box shadow v",'notification-admin-panel-benaceur'); ?> </td></div></br>
					</tr>
                    <div class="to-tr"></div></br>
					<tr>
						<td>
					<label class="switch-nab">			
                    <input type="checkbox" class="switch-input" value="enable" <?php checked('enable', get_option( 'notification_admin_benaceur_disable_clignotement' )); ?> name="notification_admin_benaceur_disable_clignotement" />
						<span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
						</td>
                    <div class="colwrap-display">&nbsp;&nbsp;<td><?php _e("disable clignotement",'notification-admin-panel-benaceur'); ?></td></div>
					</tr>
					</br></br>
                    <div class="to-tr"></div>
					<tr>
						<td>
					<label class="switch-nab">			
                    <input type="checkbox" class="switch-input" value="enable" <?php checked('enable', get_option( 'notification_admin_benaceur_disable_b_close' )); ?> name="notification_admin_benaceur_disable_b_close" />
						<span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
						</td>
                    <div class="colwrap-display">&nbsp;&nbsp;<td><?php _e("disable button close x",'notification-admin-panel-benaceur'); ?></td></div>
					</tr></br></br>
					<?php $nab_disable_close = get_option('nab_disable_close');?>
					<tr>
						<td>
                   <input type="radio" name="nab_disable_close" value="img2" <?php if( $nab_disable_close == 'img2' || $nab_disable_close == '')echo 'checked';?> >
                    <div class="colwrap-display">&nbsp;&nbsp;<td><img border="0" src="<?php echo '' . plugins_url( 'admin/close/close_ben2.png', __FILE__ ) . ''; ?>" width="16" height="16"></td></div>
					</tr></br>
					<tr> 
						<td>
                   <input type="radio" name="nab_disable_close" value="img1" <?php if( $nab_disable_close == 'img1')echo 'checked';?> >
						</td>
                    <div class="colwrap-display">&nbsp;&nbsp;<td><img border="0" src="<?php echo '' . plugins_url( 'admin/close/close_ben.png', __FILE__ ) . ''; ?>" width="16" height="16"></td></div>
					</tr></br>
					<tr> 
						<td>
                   <input type="radio" name="nab_disable_close" value="img" <?php if( $nab_disable_close == 'img')echo 'checked';?> >
						</td>
                    <div class="colwrap-display">&nbsp;&nbsp;<td><img border="0" src="<?php echo '' . plugins_url( 'admin/close/close_ben1.png', __FILE__ ) . ''; ?>" width="16" height="16"></td></div>
					</tr></br>
					<tr> 
						<td>
                   <input type="radio" name="nab_disable_close" value="img3" <?php if( $nab_disable_close == 'img3')echo 'checked';?> >
						</td>
                    <div class="colwrap-display">&nbsp;&nbsp;<td><img border="0" src="<?php echo '' . plugins_url( 'admin/close/close_ben3.png', __FILE__ ) . ''; ?>" width="16" height="16"></td></div>
					</tr></br></br>
					<tr>
						<td>
						<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
						<div class="bold-3"><select   name="notification_admin_benaceur_time_a_show" class="notification-admin-benaceur-color-inp"><option value="hour" <?php selected('hour', get_option( 'notification_admin_benaceur_time_a_show' )); ?>><?php _e('Hour(s)', 'notification-admin-panel-benaceur'); ?></option><option value="minute" <?php selected('minute', get_option( 'notification_admin_benaceur_time_a_show' )); ?>><?php _e('Minute(s)', 'notification-admin-panel-benaceur'); ?></option></select></div>
						</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Time to appear after closing",'notification-admin-panel-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
								<input type="text" id="notification-admin-benaceur-txtclr_a" class="notification-admin-benaceur-color-inp" value="<?php if (get_option( 'notification_admin_benaceur_enter_time' )) echo get_option( 'notification_admin_benaceur_enter_time'); elseif (get_option( 'notification_admin_benaceur_enter_time') == '0')  echo "0"; else echo "0"; ?>" name="notification_admin_benaceur_enter_time" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Enter the time (Enter 0 to disable)",'notification-admin-panel-benaceur'); ?> </td></div></br>
					</tr>
                    <div class="to-tr"></div>
					</br></br><p><?php submit_button(); ?></p>
				</div>	
			</form>
    <form action="options.php" method="post">
            <?php
			settings_fields( 'notification_admin_benaceur_reset_group_sty' );
			?>
      <input type="submit" value="<?php _e('Click to reset style properties plugin', 'notification-admin-panel-benaceur');?>" class="button-secondary" />
	  <input type="hidden"  name="NAB_ben_reset_group_sty" value="1" <?php if(!get_option( 'NAB_ben_reset_group_sty' ) ) { echo 'checked="checked"'; } ?>/>
    </form>
</br><div class="to-tr"></div>
    <form action="options.php" method="post">
            <?php
			settings_fields( 'notification_admin_benaceur_group_delete_all_options' ); 
			do_settings_sections( 'notification_admin_benaceur_group_delete_all_options' );
			?>
<table style="margin-top:20px;" >
	
					<tr>
						<td>
                   <input type="radio" name="notification_admin_benaceur_delete_all_options" value="delete_opt" <?php $del_nab = get_option( 'notification_admin_benaceur_delete_all_options' ); if( $del_nab == 'delete_opt') echo 'checked';?> >
                    <td><?php _e("Remove all settings and data of the plugin from database when the plugin is disabled",'notification-admin-panel-benaceur'); ?></td>
						</td>
					</tr>
					<tr> 
						<td>
                   <input type="radio" name="notification_admin_benaceur_delete_all_options" value="no_delete_opt" <?php if( $del_nab == 'no_delete_opt' || $del_nab == '') echo 'checked';?> >
						</td>
                   <td><?php _e("Do not delete",'notification-admin-panel-benaceur'); ?></td>
					</tr>
</table>
					<p><?php submit_button(); ?></p>
    </form>
</br>
<br /><br />
<div id="sub-nab-hid">
<a target="_blank" href="https://wordpress.org/plugins/news-ticker-benaceur/">https://wordpress.org/plugins/news-ticker-benaceur</a><br /><br />
<a target="_blank" href="https://wordpress.org/plugins/notification-msg-interface-benaceur/">https://wordpress.org/plugins/notification-msg-interface-benaceur</a><br /><br />
<a target="_blank" href="https://wordpress.org/plugins/notification-admin-panel-benaceur/">https://wordpress.org/plugins/notification-admin-panel-benaceur</a><br /><br />
<a target="_blank" href="https://wordpress.org/plugins/month-name-translation-benaceur/">https://wordpress.org/plugins/month-name-translation-benaceur</a>
<br /><br />
</div>
<input type='button'  id='bt-nab-hid' class="button-secondary" value='<?php _e('My plugins', 'notification-admin-panel-benaceur'); ?>' onclick="setVisibility_nab_hid('sub-nab-hid');";>

    </div></div>
	<a href="#top"><div id="to-top"></div></a>
	
<style type="text/css">
#to-top {
  height:60px;
  width:60px;
  <?php if ( is_rtl() ) { ?>
  background: url(<?php echo '' . plugins_url( 'admin/top-r.png', __FILE__ ) . ''; ?>) no-repeat ;
  float:left;
  margin-left:100px;
  <?php } else { ?>
  background: url(<?php echo '' . plugins_url( 'admin/top-l.png', __FILE__ ) . ''; ?>) no-repeat ;
  float:right;
  margin-right:60px;
  <?php } ?>
  }
  #sub-nab-hid {display: none;}
  #sub-nab-hid a:link,#sub-nab-hid a:visited {color:white;text-decoration:none;}
  #sub-nab-hid a:hover {color:#D4D4D4;text-decoration:none;
  -webkit-transition: all 0.5s ease-out;
  -moz-transition: all 0.5s ease-out;
  -o-transition: all 0.5s ease-out;
  transition: all 0.5s ease-out;
  }
</style>

<script language="JavaScript">
function setVisibility(id) {
if(document.getElementById('bt1').value=='<?php _e('Hide second text', 'notification-admin-panel-benaceur'); ?>'){
document.getElementById('bt1').value = '<?php _e('Second text', 'notification-admin-panel-benaceur'); ?>';
document.getElementById(id).style.display = 'none';
}else{
document.getElementById('bt1').value = '<?php _e('Hide second text', 'notification-admin-panel-benaceur'); ?>';
document.getElementById(id).style.display = 'inline';
}
}
</script>

<script language="JavaScript">
function setVisibility2(id) {
if(document.getElementById('bt2').value=='<?php _e('Hide third text', 'notification-admin-panel-benaceur'); ?>'){
document.getElementById('bt2').value = '<?php _e('Third text', 'notification-admin-panel-benaceur'); ?>';
document.getElementById(id).style.display = 'none';
}else{
document.getElementById('bt2').value = '<?php _e('Hide third text', 'notification-admin-panel-benaceur'); ?>';
document.getElementById(id).style.display = 'inline';
}
}
</script>

<script language="JavaScript">
function setVisibility_nab_hid(id) {
if(document.getElementById('bt-nab-hid').value=='<?php _e('Hide this list', 'notification-admin-panel-benaceur'); ?>'){
document.getElementById('bt-nab-hid').value = '<?php _e('My plugins', 'notification-admin-panel-benaceur'); ?>';
document.getElementById(id).style.display = 'none';
}else{
document.getElementById('bt-nab-hid').value = '<?php _e('Hide this list', 'notification-admin-panel-benaceur'); ?>';
document.getElementById(id).style.display = 'inline';
}
}
</script>

<?php }
