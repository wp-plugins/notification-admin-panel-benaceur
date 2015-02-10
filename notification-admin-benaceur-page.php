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
<style> 

</style>
    <div class="wrap">
            <h2><?php _e('Notification Admin Panel Benaceur', 'notification-admin-benaceur'); ?></h2>
        <h3><?php _e('Settings', 'notification-admin-benaceur'); ?></h3>
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
	<center><div style="margin-top:10px;" ><?php _e("Enable plugin",'notification-admin-benaceur'); ?></div></center>
		</td>
	</tr>
</table>

			<table class="form-table">
					<hr width="200" size="3">
                <tr> 
<h3 align="center"><font color="#008080"><?php _e('First text', 'notification-admin-benaceur'); ?></font></h3>
                	<th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Enter your text', 'notification-admin-benaceur'); ?></th>
                    <td>
	                    <textarea name="notification_admin_benaceur_text"  style="padding:6px" cols="80%" rows="6"><?php echo get_option('notification_admin_benaceur_text'); ?></textarea>
						</br>&nbsp;&nbsp;<em><?php _e( 'To return to the line add at the end of the line: &lt;/br>', 'notification-admin-benaceur' ); ?></em>
                    </td>
                </tr>
                <tr>  
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><div class="dd"><label><?php _e('All users', 'notification-admin-benaceur'); ?></label></div></th>
                    <td> 
					<label class="switch-nab">				

	                    <input type="checkbox" class="switch-input" name="notification_admin_benaceur_for_users" value="1" <?php if( get_option('notification_admin_benaceur_for_users')) { echo 'checked="checked"'; } ?>/>
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
				   </td>
                </tr>
				<tr>    
                	<th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Choose the group (You can select more than one group)', 'notification-admin-benaceur'); ?></th>
                    <td>
					<div class="checkbox">				
<div class="styled-select">
<select name="notification_admin_benaceur_for_role_x[]" id="notification_admin_benaceur_for_role_x"  size="10" style="height:auto;" multiple="multiple">
<option style="color: #C4C4C4;" value="<?php echo esc_attr( $role ); ?>" select="select"><?php _e('Remove Selection', 'notification-admin-benaceur'); ?></option>

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
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Insert the user id', 'notification-admin-benaceur'); ?></th>
                    
                    <td>
					<div class="sm_benaceurlist_caps_input"><input type="text" name="notification_admin_benaceur_for_user_id" placeholder="<?php _e( 'Enter here the user id', 'notification-admin-benaceur' ); ?>" value="<?php echo get_option('notification_admin_benaceur_for_user_id'); ?>" /></div>
                    &nbsp;&nbsp;<em><?php _e( 'Separate between id by commas, for example: 2,16,223', 'notification-admin-benaceur' ); ?></em></td>
                    
                </tr>
                <tr>    
                	<th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Insert the user name', 'notification-admin-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input"><input type="text" name="notification_admin_benaceur_for_user_name" placeholder="<?php _e( 'Enter here the user name', 'notification-admin-benaceur' ); ?>" value="<?php echo get_option('notification_admin_benaceur_for_user_name'); ?>" /></div>
                    &nbsp;&nbsp;<em><?php _e( 'Separate between id by commas, for example: 2,16,223', 'notification-admin-benaceur' ); ?></em></td>
				   </td>
                </tr>
            </table>
<p><?php submit_button(); ?></p>
        </form>
    <form action="options.php" method="post">
            <?php settings_fields( 'notification_admin_benaceur_group' ); 
				do_settings_sections( 'notification_admin_benaceur_group' );
			?>
      <input type="submit" value="<?php _e('Click to reset properties plugin', 'notification-admin-benaceur');?>" class="button-secondary" />
    </form>
            </br><hr width="40%" size="3"></br>
			<div id="sub3">
        <form id="myOptionsForm2" method="post" action="options.php" name="f-tw"  >
            <?php settings_fields( 'notification_admin_benaceur_group_tw' ); 
				do_settings_sections( 'notification_admin_benaceur_group_tw' );
			?>
            <table class="form-table">
<h3 align="center"><font color="#008080"><?php _e('Second text', 'notification-admin-benaceur'); ?></font></h3>
                <tr>    
                	<th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Enter your text', 'notification-admin-benaceur'); ?></th>
                    <td>
	                    <textarea name="notification_admin_benaceur_text_tw" style="padding:6px" cols="90%" rows="6"><?php echo get_option('notification_admin_benaceur_text_tw'); ?></textarea>
                    </td>
                </tr>
                <tr>    
                	<th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('All users', 'notification-admin-benaceur'); ?></th>
                    <td>
	                    <input type="checkbox" name="notification_admin_benaceur_for_users_tw" value="1" <?php if( get_option('notification_admin_benaceur_for_users_tw')) { echo 'checked="checked"'; } ?>/>
                    </td>
                </tr>
				<tr>    
                	<th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Choose the group (You can select more than one group)', 'notification-admin-benaceur'); ?></th>
                    <td>
<div class="styled-select">
<select name="notification_admin_benaceur_for_role_x_tw[]" id="notification_admin_benaceur_for_role_x_tw"  size="10" style="height:auto;" multiple="multiple">
<option style="color: #C4C4C4;" value="<?php echo esc_html( $role_tw ); ?>" select="select"><?php _e('Remove Selection', 'notification-admin-benaceur'); ?></option>

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
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Insert the user id', 'notification-admin-benaceur'); ?></th>
                    
                    <td>
					<div class="sm_benaceurlist_caps_input"><input type="text" name="notification_admin_benaceur_for_user_id_tw" placeholder="<?php _e( 'Enter here the user id', 'notification-admin-benaceur' ); ?>" value="<?php echo get_option('notification_admin_benaceur_for_user_id_tw'); ?>" /></div>
                    &nbsp;&nbsp;<em><?php _e( 'Separate between id by commas, for example: 2,16,223', 'notification-admin-benaceur' ); ?></em></td>
                    
                </tr>
                <tr>    
                	<th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Insert the user name', 'notification-admin-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input"><input type="text" name="notification_admin_benaceur_for_user_name_tw" placeholder="<?php _e( 'Enter here the user name', 'notification-admin-benaceur' ); ?>" value="<?php echo get_option('notification_admin_benaceur_for_user_name_tw'); ?>" /></div>
                    &nbsp;&nbsp;<em><?php _e( 'Separate between id by commas, for example: 2,16,223', 'notification-admin-benaceur' ); ?></em></td>
				   </td>
                </tr>
            </table>
<p><?php submit_button(); ?></p>
        </form>
    <form action="options.php" method="post">
            <?php settings_fields( 'notification_admin_benaceur_group_tw' ); 
				do_settings_sections( 'notification_admin_benaceur_group_tw' );
			?>
      <input type="submit" value="<?php _e('Click to reset properties plugin', 'notification-admin-benaceur');?>" class="button-secondary" />
    </form>
            </br><hr width="40%" size="3"></br>
</div>
<input type='button'  id='bt1' class="button-secondary" value='<?php _e('Second text', 'notification-admin-benaceur'); ?>' onclick="setVisibility('sub3');";> 
			<div id="sub4">
        <form id="myOptionsForm3" method="post" action="options.php" name="f-th"  >
            <?php settings_fields( 'notification_admin_benaceur_group_th' ); 
				do_settings_sections( 'notification_admin_benaceur_group_th' );
			?>
            <table class="form-table">
<h3 align="center"><font color="#008080"><?php _e('Third text', 'notification-admin-benaceur'); ?></font></h3>
                <tr>    
                	<th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Enter your text', 'notification-admin-benaceur'); ?></th>
                    <td>
	                    <textarea name="notification_admin_benaceur_text_th" style="padding:6px" cols="90%" rows="6"><?php echo get_option('notification_admin_benaceur_text_th'); ?></textarea>
                    </td>
                </tr>
                <tr>    
                	<th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('All users', 'notification-admin-benaceur'); ?></th>
                    <td>
	                    <input type="checkbox" name="notification_admin_benaceur_for_users_th" value="1" <?php if( get_option('notification_admin_benaceur_for_users_th')) { echo 'checked="checked"'; } ?>/>
                    </td>
                </tr>
				<tr>    
                	<th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Choose the group (You can select more than one group)', 'notification-admin-benaceur'); ?></th>
                    <td>
<div class="styled-select">
<select name="notification_admin_benaceur_for_role_x_th[]" id="notification_admin_benaceur_for_role_x_th"  size="10" style="height:auto;" multiple="multiple">
<option style="color: #C4C4C4;" value="<?php echo esc_html( $role_th ); ?>" select="select"><?php _e('Remove Selection', 'notification-admin-benaceur'); ?></option>

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
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Insert the user id', 'notification-admin-benaceur'); ?></th>
                    
                    <td>
					<div class="sm_benaceurlist_caps_input"><input type="text" name="notification_admin_benaceur_for_user_id_th" placeholder="<?php _e( 'Enter here the user id', 'notification-admin-benaceur' ); ?>" value="<?php echo get_option('notification_admin_benaceur_for_user_id_th'); ?>" /></div>
                    &nbsp;&nbsp;<em><?php _e( 'Separate between id by commas, for example: 2,16,223', 'notification-admin-benaceur' ); ?></em></td>
                    
                </tr>
                <tr>    
                	<th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Insert the user name', 'notification-admin-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input"><input type="text" name="notification_admin_benaceur_for_user_name_th" placeholder="<?php _e( 'Enter here the user name', 'notification-admin-benaceur' ); ?>" value="<?php echo get_option('notification_admin_benaceur_for_user_name_th'); ?>" /></div>
                    &nbsp;&nbsp;<em><?php _e( 'Separate between id by commas, for example: 2,16,223', 'notification-admin-benaceur' ); ?></em></td>
				   </td>
                </tr>
            </table>
<p><?php submit_button(); ?></p>
        </form>
    <form action="options.php" method="post">
            <?php settings_fields( 'notification_admin_benaceur_group_th' ); 
				do_settings_sections( 'notification_admin_benaceur_group_th' );
			?>
      <input type="submit" value="<?php _e('Click to reset properties plugin', 'notification-admin-benaceur');?>" class="button-secondary" />
    </form>
            </br></br>
		</div>
<input type='button'  id='bt2' class="button-secondary" value='<?php _e('Third text', 'notification-admin-benaceur'); ?>' onclick="setVisibility2('sub4');";> 
<div id="notification-admin-benaceur-font">
            </br><hr width="40%" size="3"></br>
  <form id="myOptionsForm4" method="post" action="options.php" >
            <?php settings_fields( 'notification_admin_benaceur_group_sty' ); 
				do_settings_sections( 'notification_admin_benaceur_group_sty' );
			?>
          </br><h3><?php _e('Style properties', 'notification-admin-benaceur'); ?></h3></br>
	<div class="option-box">
					<tr>
						<td>
						<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
						<div class="bold-3"><select   name="notification_admin_benaceur_align_msg" class="notification-admin-benaceur-color-inp"><option value="center" <?php selected('center', get_option( 'notification_admin_benaceur_align_msg' )); ?>><?php _e('centering', 'notification-admin-benaceur'); ?></option><option value="right" <?php selected('right', get_option( 'notification_admin_benaceur_align_msg' )); ?>><?php _e('right', 'notification-admin-benaceur'); ?></option><option value="left" <?php selected('left', get_option( 'notification_admin_benaceur_align_msg' )); ?>><?php _e('left', 'notification-admin-benaceur'); ?></option></select></div>
						</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("center/right/left of content",'notification-admin-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
						<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
						<div class="bold-3"><select   name="notification_admin_benaceur_text_align" class="notification-admin-benaceur-color-inp"><option value="center" <?php selected('center', get_option( 'notification_admin_benaceur_text_align' )); ?>><?php _e('centering', 'notification-admin-benaceur'); ?></option><option value="right" <?php selected('right', get_option( 'notification_admin_benaceur_text_align' )); ?>><?php _e('right', 'notification-admin-benaceur'); ?></option><option value="left" <?php selected('left', get_option( 'notification_admin_benaceur_text_align' )); ?>><?php _e('left', 'notification-admin-benaceur'); ?></option></select></div>
						</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("center/right/left of text",'notification-admin-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
								<input type="text" name="notification_admin_benaceur_color_back" id="notification-admin-benaceur-colorScheme_a" class="notification-admin-benaceur-color-inp" value="<?php if(get_option( 'notification_admin_benaceur_color_back' )) echo get_option( 'notification_admin_benaceur_color_back' ); else echo "#FFFFFF"; ?>"  />
								<div class="notification-admin-benaceur-colsel notification-admin-benaceur-colorScheme_a"></div>
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Background color",'notification-admin-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
								<input type="text" name="notification_admin_benaceur_color_back2" id="notification-admin-benaceur-background2clr_a" class="notification-admin-benaceur-color-inp" value="<?php if(get_option( 'notification_admin_benaceur_color_back2' )) echo get_option( 'notification_admin_benaceur_color_back2' ); else echo "#f5d6d6"; ?>"  />
								<div class="notification-admin-benaceur-colsel notification-admin-benaceur-background2clr_a"></div>
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("the color of the second background",'notification-admin-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
								<input type="text" id="notification-admin-benaceur-txtclr_a" class="notification-admin-benaceur-color-inp" value="<?php if(get_option( 'notification_admin_benaceur_color_text' )) echo get_option( 'notification_admin_benaceur_color_text' ); else echo "#000000"; ?>" name="notification_admin_benaceur_color_text" />
								<div class="notification-admin-benaceur-colsel notification-admin-benaceur-txtclr_a"></div>
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Text color",'notification-admin-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
								<input type="text" id="notification-admin-benaceur-borderclr_a" class="notification-admin-benaceur-color-inp" value="<?php if(get_option( 'notification_admin_benaceur_color_border' )) echo get_option( 'notification_admin_benaceur_color_border' ); else echo "#CE1031"; ?>" name="notification_admin_benaceur_color_border" />
								<div class="notification-admin-benaceur-colsel notification-admin-benaceur-borderclr_a"></div>
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Border color",'notification-admin-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
								<input type="text" id="notification-admin-benaceur-txtclr_a" class="notification-admin-benaceur-color-inp" value="<?php if (get_option( 'notification_admin_benaceur_border_top' )) echo get_option( 'notification_admin_benaceur_border_top'); elseif (get_option( 'notification_admin_benaceur_border_top') == '0')  echo "0"; else echo "1"; ?>" name="notification_admin_benaceur_border_top" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("border top",'notification-admin-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
								<input type="text" id="notification-admin-benaceur-txtclr_a" class="notification-admin-benaceur-color-inp" value="<?php if (get_option( 'notification_admin_benaceur_border_bottom' )) echo get_option( 'notification_admin_benaceur_border_bottom'); elseif (get_option( 'notification_admin_benaceur_border_bottom') == '0')  echo "0"; else echo "1"; ?>" name="notification_admin_benaceur_border_bottom" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("border bottom",'notification-admin-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
								<input type="text" id="notification-admin-benaceur-txtclr_a" class="notification-admin-benaceur-color-inp" value="<?php if (get_option( 'notification_admin_benaceur_border_right' )) echo get_option( 'notification_admin_benaceur_border_right'); elseif (get_option( 'notification_admin_benaceur_border_right') == '0')  echo "0"; else echo "1"; ?>" name="notification_admin_benaceur_border_right" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("border right",'notification-admin-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
								<input type="text" id="notification-admin-benaceur-txtclr_a" class="notification-admin-benaceur-color-inp" value="<?php if (get_option( 'notification_admin_benaceur_border_left' )) echo get_option( 'notification_admin_benaceur_border_left'); elseif (get_option( 'notification_admin_benaceur_border_left') == '0')  echo "0"; else echo "1"; ?>" name="notification_admin_benaceur_border_left" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("border left",'notification-admin-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
								<input type="text" id="notification-admin-benaceur-txtclr_a" class="notification-admin-benaceur-color-inp" value="<?php if (get_option( 'notification_admin_benaceur_border_radius' )) echo get_option( 'notification_admin_benaceur_border_radius'); else echo "0"; ?>" name="notification_admin_benaceur_border_radius" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("border radius",'notification-admin-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
								<input type="text" style="text-align: center; padding-right: 0px; " class="notification-admin-benaceur-color-inp" value="<?php if (get_option( 'notification_admin_benaceur_opacity' )) echo get_option( 'notification_admin_benaceur_opacity'); elseif (get_option( 'notification_admin_benaceur_opacity') == '0')  echo "0"; else echo "1"; ?>" name="notification_admin_benaceur_opacity" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("The level of transparency 1-0.1",'notification-admin-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
								<input type="text" style="text-align: center; padding-right: 0px; " class="notification-admin-benaceur-color-inp" value="<?php if (get_option( 'notification_admin_benaceur_width' )) echo get_option( 'notification_admin_benaceur_width' ); else echo "100%"; ?>" name="notification_admin_benaceur_width" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Width by adding: px or %",'notification-admin-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
								<input type="text" style="text-align: center; padding-right: 0px; " class="notification-admin-benaceur-color-inp" value="<?php if (get_option( 'notification_admin_benaceur_padding_top' )) echo get_option( 'notification_admin_benaceur_padding_top'); elseif (get_option( 'notification_admin_benaceur_padding_top') == '0')  echo "0"; else echo "1"; ?>" name="notification_admin_benaceur_padding_top" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("padding top",'notification-admin-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
								<input type="text" style="text-align: center; padding-right: 0px; " class="notification-admin-benaceur-color-inp" value="<?php if (get_option( 'notification_admin_benaceur_padding_bottom' )) echo get_option( 'notification_admin_benaceur_padding_bottom'); elseif (get_option( 'notification_admin_benaceur_padding_bottom') == '0')  echo "0"; else echo "1"; ?>" name="notification_admin_benaceur_padding_bottom" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("padding bottom",'notification-admin-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
								<input type="text" style="text-align: center; padding-right: 0px; " class="notification-admin-benaceur-color-inp" value="<?php if (get_option( 'notification_admin_benaceur_margin_top' )) echo get_option( 'notification_admin_benaceur_margin_top'); else echo "0"; ?>" name="notification_admin_benaceur_margin_top" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("margin top",'notification-admin-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
								<input type="text" style="text-align: center; padding-right: 0px; " class="notification-admin-benaceur-color-inp" value="<?php if (get_option( 'notification_admin_benaceur_margin_bottom' )) echo get_option( 'notification_admin_benaceur_margin_bottom'); else echo "0"; ?>" name="notification_admin_benaceur_margin_bottom" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("margin bottom",'notification-admin-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="notification-admin-benaceur-colwrap2">
								<input type="text" style="text-align: center; padding-right: 0px; " class="notification-admin-benaceur-color-inp" value="<?php if (get_option( 'notification_admin_benaceur_font' )) echo get_option( 'notification_admin_benaceur_font' ); else echo "DroidKufi_Ben, Arial"; ?>" name="notification_admin_benaceur_font" />
						&nbsp;&nbsp;&nbsp;&nbsp;<?php _e("Font family",'notification-admin-benaceur'); ?> /
                               <input type="checkbox"  value="enable" <?php checked('enable', get_option( 'notification_admin_benaceur_disable_this_font' )); ?> name="notification_admin_benaceur_disable_this_font" />
                        <?php _e("Disable this font: DroidKufi_Ben ",'notification-admin-benaceur'); ?>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
								<input type="text" style="text-align: center; padding-right: 0px; " class="notification-admin-benaceur-color-inp" value="<?php if (get_option( 'notification_admin_benaceur_font_size' )) echo get_option( 'notification_admin_benaceur_font_size' ); else echo "14"; ?>" name="notification_admin_benaceur_font_size" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Font size",'notification-admin-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
						<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
						<div class="bold-3"><select  name="notification_admin_benaceur_font_weight" class="notification-admin-benaceur-color-inp"><option value="normal" <?php selected('normal', get_option('notification_admin_benaceur_font_weight')); ?>><?php _e('Normal', 'notification-admin-benaceur'); ?></option><option value="bold" <?php selected('bold', get_option('notification_admin_benaceur_font_weight')); ?>><?php _e('Bold', 'notification-admin-benaceur'); ?></option></select></div>
						</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Font weight",'notification-admin-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
						<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
						<div class="bold-3"><select  name="notification_admin_benaceur_text_shadow" class="notification-admin-benaceur-color-inp"><option value="no" <?php selected('no', get_option('notification_admin_benaceur_text_shadow')); ?>><?php _e('no', 'notification-admin-benaceur'); ?></option><option value="5px 5px 5px" <?php selected('5px 5px 5px', get_option('notification_admin_benaceur_text_shadow')); ?>><?php _e('yes', 'notification-admin-benaceur'); ?></option></select></div>
						</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("text shadow",'notification-admin-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
								<input type="text" id="notification-admin-benaceur-textshadowclr_a" class="notification-admin-benaceur-color-inp" value="<?php if(get_option('notification_admin_benaceur_text_shadow_color')) echo get_option('notification_admin_benaceur_text_shadow_color'); else echo "#000000"; ?>" name="notification_admin_benaceur_text_shadow_color" />
								<div class="notification-admin-benaceur-colsel notification-admin-benaceur-textshadowclr_a"></div>
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("text shadow color",'notification-admin-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
						<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
						<div class="bold-3"><select  name="notification_admin_benaceur_box_shadow" class="notification-admin-benaceur-color-inp"><option value="no" <?php selected('no', get_option('notification_admin_benaceur_box_shadow')); ?>><?php _e('no', 'notification-admin-benaceur'); ?></option><option value="0px 0px" <?php selected('0px 0px', get_option('notification_admin_benaceur_box_shadow')); ?>><?php _e('yes', 'notification-admin-benaceur'); ?></option></select></div>
						</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("box shadow",'notification-admin-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
								<input type="text" id="notification-admin-benaceur-boxshadowclr_a" class="notification-admin-benaceur-color-inp" value="<?php if(get_option('notification_admin_benaceur_box_shadow_color')) echo get_option('notification_admin_benaceur_box_shadow_color'); else echo "#888888"; ?>" name="notification_admin_benaceur_box_shadow_color" />
								<div class="notification-admin-benaceur-colsel notification-admin-benaceur-boxshadowclr_a"></div>
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("box shadow color",'notification-admin-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="notification-admin-benaceur-colwrap">
								<input type="text" id="notification-admin-benaceur-txtclr_a" class="notification-admin-benaceur-color-inp" value="<?php if (get_option( 'notification_admin_benaceur_box_shadow_v' )) echo get_option( 'notification_admin_benaceur_box_shadow_v'); elseif (get_option( 'notification_admin_benaceur_box_shadow_v') == '0')  echo "0"; else echo "4"; ?>" name="notification_admin_benaceur_box_shadow_v" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("box shadow v",'notification-admin-benaceur'); ?> </td></div></br>
					</tr>
                    <hr width="200" size="3">
					<tr>
						<td>
					<label class="switch-nab">				
                    <input type="checkbox" class="switch-input" value="enable" <?php checked('enable', get_option( 'notification_admin_benaceur_disable_clignotement' )); ?> name="notification_admin_benaceur_disable_clignotement" />
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                    <div class="switch-handle-w"><?php _e("disable clignotement",'notification-admin-benaceur'); ?></div>
                   </label>
						</td>
					</tr>
					
					</br></br><p><?php submit_button(); ?></p>
				</div>	
			</form>
    <form action="options.php" method="post">
            <?php
			settings_fields( 'notification_admin_benaceur_group_sty' ); 
			do_settings_sections( 'notification_admin_benaceur_group_sty' );
			?>
      <input type="submit" value="<?php _e('Click to reset style properties plugin', 'notification-admin-benaceur');?>" class="button-secondary" />
    </form>
			
    </div></div>
	
<script language="JavaScript">
function setVisibility(id) {
if(document.getElementById('bt1').value=='<?php _e('Hide second text', 'notification-admin-benaceur'); ?>'){
document.getElementById('bt1').value = '<?php _e('Second text', 'notification-admin-benaceur'); ?>';
document.getElementById(id).style.display = 'none';
}else{
document.getElementById('bt1').value = '<?php _e('Hide second text', 'notification-admin-benaceur'); ?>';
document.getElementById(id).style.display = 'inline';
}
}
</script>

<script language="JavaScript">
function setVisibility2(id) {
if(document.getElementById('bt2').value=='<?php _e('Hide third text', 'notification-admin-benaceur'); ?>'){
document.getElementById('bt2').value = '<?php _e('Third text', 'notification-admin-benaceur'); ?>';
document.getElementById(id).style.display = 'none';
}else{
document.getElementById('bt2').value = '<?php _e('Hide third text', 'notification-admin-benaceur'); ?>';
document.getElementById(id).style.display = 'inline';
}
}
</script>

<?php }
