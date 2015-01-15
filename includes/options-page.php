<style>
    .form-field input, input.regular-text {
        width: 6em;
    }
</style>

<div class="wrap">
	
	<div id="icon-options-general" class="icon32"></div>
	<h2>Premier Popups Options</h2>
	
	<div id="poststuff">
	
		<div id="post-body" class="metabox-holder columns-2">
		
			<!-- main content -->
			<div id="post-body-content">
				
				<div class="meta-box-sortables ui-sortable">
					
					<div class="postbox">
						<div class="inside">
							<form name="premier_popups_options_form" method="post" action="">
								<input type="hidden" name="premier_popups_options_submitted" value=1>
								<table class="form-table">
									<tr>
										<td>Select popup to display:</td>
										<td><select name="select_popup"> 
												<option value="">Select popup</option> 
												<?php select_popup(); ?>
											</select>
										</td>
									</tr>
									<tr>
										<td><label for="popup_mobile">Display on mobile?</label></td>
										<td><input type="radio" name="popup_mobile" id="popup_mobile" value="1" <?php echo $mobile_yes; ?>>Yes &nbsp;&nbsp;<input type="radio" name="popup_mobile" id="popup_mobile" value="0" <?php echo $mobile_no; ?>>No</td>
										<td>Default: No</td>
									</tr>
                                    <tr>
										<td><label for="popup_delay">Hide popup for:</label></td>
										<td><input name="popup_delay" id="popup_delay" type="text" value="<?php echo $popup_delay; ?>" class="regular-text" /> days</td>
										<td>Default: 7 days</td>
									</tr>									
                                    <tr>
										<td><label for="popup_background">Background color:</label></td>
										<td>#<input name="popup_background" id="popup_background" type="text" value="<?php echo $popup_background; ?>" class="regular-text" /></td>
										<td>Default: #FFFFFF (white)</td>
									</tr>
									<tr>
										<td><label for="popup_color">Text color:</label></td>
										<td>#<input name="popup_color" id="popup_color" type="text" value="<?php echo $popup_color; ?>" class="regular-text" /></td>
										<td>Default: #000000 (black)</td>
									</tr>
									<tr>
										<td><label for="popup_width">Popup width:</label></td>
										<td><input name="popup_width" id="popup_width" type="text" value="<?php echo $popup_width; ?>" class="regular-text" />px</td>
										<td>Default: 750px</td>
									</tr>
									<tr>
										<td><label for="popup_height">Popup height:</label></td>
										<td><input name="popup_height" id="popup_height" type="text" value="<?php echo $popup_height; ?>" class="regular-text" />px</td>
										<td>Default: 300px</td>
									</tr>
								</table>
								<p><input class="button-primary" type="submit" name="Submit" value="Submit" /></p>
							</form>
							<p>
								Need to edit your popups or create a new popup? <a href="<?php echo admin_url('edit.php?post_type=premier_popup') ?>">Click here.</a>
							</p>
							
						</div> <!-- .inside -->
					</div> <!-- .postbox -->
					
				</div> <!-- .meta-box-sortables .ui-sortable -->
				
			</div> <!-- post-body-content -->
			
			<!-- sidebar -->
			<div id="postbox-container-1" class="postbox-container">
				
				<div class="meta-box-sortables">
					
					<div class="postbox">
						
						<div class="inside">
							<h2>Developer Information</h2>
							<p>Author: Andrew Dushane, <a href="http://premierprograming.com" target="_blank">Premier Programing</a></p>
						</div><!-- .inside -->
						
					</div>  <!-- .postbox -->
					
				</div> <!-- .meta-box-sortables -->
				
			</div> <!-- #postbox-container-1 .postbox-container -->
			
		</div> <!-- #post-body .metabox-holder .columns-2 -->
		
		<br class="clear">
	</div> <!-- #poststuff -->
	
</div> <!-- .wrap -->
