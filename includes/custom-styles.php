<style type="text/css" id="premier-popups-custom-css">

<?php if ( isset($popup_background) && $popup_background != '' ) { ?>
	div.popup-inner {
		background: #<?php echo $popup_background; ?>;
	}
<?php } ?>

<?php if ( isset($popup_color) && $popup_color != '' ) { ?>
	div.popup-inner {
		color: #<?php echo $popup_color; ?>;
	}
<?php } ?>

<?php if ( $popup_width && $popup_width != '' ) {
	$wrapper_width = $popup_width + 36;
	$wrapper_margin_left = $wrapper_width / 2;
	?>
	div.popup-wrapper {
		width: <?php echo $wrapper_width; ?>px;
		margin-left: -<?php echo $wrapper_margin_left; ?>px;
	}
	div.popup-inner {
		width: <?php echo $popup_width; ?>px;
	}
<?php } ?>

<?php if ( $popup_height && $popup_height != '' ) {
	$wrapper_height = $popup_height + 36;
	$wrapper_margin_top = $wrapper_height / 2;
	?>
	div.popup-wrapper {
		height: <?php echo $wrapper_height; ?>px;
		margin-top: -<?php echo $wrapper_margin_top; ?>px;
	}
	div.popup-inner {
		height: <?php echo $popup_height; ?>px;
	}
<?php } ?>

	
</style>
