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

/**
 * @param WP_Post $post_obj
 * @param $slug
 */
function si_order_fields_cb($post_obj, $slug){
	$slug = $slug['args'];
	$data = '';
	switch ( $slug ){
		case 'si_order_date':
			$data = $post_obj->post_date;
			break;
		case 'si_order_choice':
			$id = get_post_meta($post_obj->ID, $slug, true);
			$title = get_the_title($id);
			$type = get_post_type_object(get_post_type($id))->labels->name;
			$data = esc_html__('Client chose:', 'sportisland') . ' <strong>' . $title . '</strong>';
			$data .= '<br>';
			$data .= esc_html__('from section:', 'sportisland') . ' <strong>' . $type . '</strong>';
			break;
		default:
			$data = get_post_meta($post_obj->ID, $slug, true);
			$data = $data ? $data : esc_html__('No data', 'sportisland');
	}

	echo '<span>' . $data . '</span>';
}


// Handle POST query
add_action('admin_post_si-modal-form-card','si_modal_form_handler');
add_action('admin_post_nopriv_si-modal-form-card','si_modal_form_handler');

function si_modal_form_handler(){
  $post_id = $_POST['form-post-id'] ?  esc_html($_POST['form-post-id']) : esc_html__('Empty', 'sportisland');
  $name = $_POST['si-user-name'] ? esc_html($_POST['si-user-name']) : esc_html__('Anonymous', 'sportisland');
  $phone = $_POST['si-user-phone'] ? esc_html($_POST['si-user-phone']) : false;

  if ($phone) {
	$post_title = esc_html__('Order №', 'sportisland');
	$order_id = wp_insert_post( wp_slash([
		'post_title' => $post_title,
		'post_type' => 'orders',
		'post_status' => 'publish',
		'meta_input' => [
			'si_order_name' => $name,
			'si_order_phone' => $phone,
			'si_order_choice' => $post_id,
		],
	]));
	if ($order_id !== 0) {
		wp_update_post([
			'ID' => $order_id,
			'post_title' => $post_title . ' ' . $order_id,
		]);
		update_field('order_status', 'new', $order_id);
	}
  }
  header('Location: ' . home_url());
}


