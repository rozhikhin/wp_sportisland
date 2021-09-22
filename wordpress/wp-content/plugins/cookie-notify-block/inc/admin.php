<h2><?php esc_html_e('Notification settings', 'cookie-notify-block');  ?></h2>
<form method="post" class="cookie-notify-block-admin-form">
	<p>
		<label>
			<?php esc_html_e('Enter a value for the background color', 'cookie-notify-block'); ?>:
			<input type="text" name="cnb_bg" value="<?php echo $bg  ?>">
		</label>
	</p>
	<p>
		<label>
			<?php esc_html_e('Enter a value for the text color', 'cookie-notify-block'); ?>:
			<input type="text" name="cnb_color" value="<?php echo $color  ?>">
		</label>
	</p>
	<p>
		<label>
			<?php esc_html_e('Enter your notification text', 'cookie-notify-block'); ?>:
			<input type="text" name="cnb_text" value="<?php echo $text  ?>">
		</label>
	</p>
	<fieldset>
		<legend>
			<?php esc_html_e('Enter the location of the notification', 'cookie-notify-block'); ?>:
		</legend>
		<label>
			<?php esc_html_e('Top', 'cookie-notify-block'); ?>
			<input
				type="radio"
				value="top"
				name="cnb_position"
				<?php checked('top', $position, true) ?>
			>
		</label>
		<label>
			<?php esc_html_e('Bottom', 'cookie-notify-block'); ?>
			<input
				type="radio"
				value="bottom"
				name="cnb_position"
				<?php checked('bottom', $position, true) ?>
			>
		</label>
	</fieldset>
	<button type="submit" class="button-primary"><?php esc_html_e('Save settings', 'cookie-notify-block'); ?></button>
</form>
