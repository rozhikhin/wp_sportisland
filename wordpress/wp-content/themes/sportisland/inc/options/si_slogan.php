<?php

add_action('admin_init', 'si_register_slogan');

function si_register_slogan(){
	add_settings_field(
		'si_slogan_option_field',
		esc_html__('Slogan of your site', 'sportisland'),
		'si_slogan_option_cb',
		'general',
		'default',
		['label_for' => 'si_slogan_option_field']
	);
	register_setting(
		'general',
		'si_slogan_option_field',
		'strval'
	);
}

function si_slogan_option_cb($args){
	$slug = $args['label_for'];
	?>
	<input
		type="text"
		id="<?php echo $slug; ?>"
		value="<?php echo get_option($slug); ?>"
		name="<?php echo $slug; ?>"
		class="regular-text code"
	>
	<?php
}
