<?php 
if( $popup_ID && $popup_ID != '') { ?>
	<div <?php echo $popup_hide; ?>>
		<div class="popup-outer">
			<div class="popup-wrapper">
				<div class="popup-close" onclick="this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode); return false;">X</div>
				<div class="popup-inner">
					<?php
						$popup_post = get_post($popup_ID); 
						$popup = $popup_post->post_content;
						echo $popup;
					?>
				</div>
			</div>
		</div>
	</div>
<?php }
