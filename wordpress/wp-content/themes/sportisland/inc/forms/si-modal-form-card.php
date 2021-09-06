<?php

// Add metabox for form

add_action('add_meta_boxes', 'si_modal_form__metaboxes');

function si_modal_form__metaboxes() {
	$modal_form__metaboxes = [
		'si_order_date' => esc_html__('Order date', 'sportisland'),
		'si_order_name' => esc_html__('Client name', 'sportisland'),
		'si_order_phone' => esc_html__('Client phone', 'sportisland'),
		'si_order_choice' => esc_html__('Client choice', 'sportisland'),
	];

	foreach ($modal_form__metaboxes as $slug => $text){
		add_meta_box(
			$slug,
			$text,
			'si_order_fields_cb',
			'orders',
			'advanced',
			'default',
			$slug
		);
	}
}

function si_order_fields_cb($post_obj, $slug){
	$slug = $slug['args'];
	$data = get_post_meta($post_obj->ID, $slug, true);
	$data = $data ? $data : esc_html__('No data', 'sportisland');
	echo '<span>' . $data . '</span>';
}


// Handle POST query
add_action('admin_post_si-modal-form-card','si_modal_form_card_handler');
add_action('admin_post_nopriv_si-modal-form-card','si_modal_form_card_handler');

function si_modal_form_card_handler(){
  header("Location: " . home_url());
}


