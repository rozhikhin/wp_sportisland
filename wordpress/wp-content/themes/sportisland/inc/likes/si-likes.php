<?php

// Add metabox for likes

add_action('add_meta_boxes', 'si_like_metaboxes');
add_action('save_post', 'si_save_like_meta');

function si_like_metaboxes() {
    add_meta_box(
        'si-like',
        esc_html__('Number of likes', 'sportisland'),
        'si_meta_like_cb',
        'post'
    );
}

function si_meta_like_cb($post_obj){
    $likes = get_post_meta($post_obj->ID, 'si-like', true);
    $likes = $likes ? $likes : 0;
//    echo '<input type="text" name="si-like" value="' . $likes . '">';
    echo '<p>' . $likes . '</p>';
}

function si_save_like_meta($post_id){
    if (isset($_POST['si-like'])){
        update_post_meta($post_id, 'si-like', $_POST['si-like']);
    }
}


// Hande ALAX from page

add_action('wp_ajax_post-likes', 'si_likes');
add_action('wp_ajax_nopriv_post-likes', 'si_likes');

function si_likes() {
	$id = $_POST['id'];
	$op = $_POST['op'];
	$current_data = get_post_meta($id, 'si-like', true);
	$current_data = $current_data ? $current_data : 0;
	if ($op === 'plus'){
		$current_data++;
	} else {
		$current_data--;
	}
	$updated = update_post_meta($id, 'si-like', $current_data);
	if ($updated) {
		echo $current_data;
		wp_die();
	} else {
		wp_die(esc_html__('No Laik. Try again later.', 'sportisland'), 500);
	}
}

// Add column "likes" on list of posts (for admin)
add_action('manage_posts_custom_column', 'si_like_column', 5, 2);
add_filter('manage_posts_columns', 'si_add_like_column', 5, 2);

function si_like_column($column_name, $id) {
	if ($column_name !== 'col_like') {
		return;
	}
	$likes = get_post_meta($id, 'si-like', true);
	echo $likes ? $likes : 0;
}

function si_add_like_column($defaults){
	$screen = get_current_screen();
	if ($screen->post_type === 'post') {
		$defaults['col_like'] = esc_html__('Likes', 'sportisland');
	}
	return $defaults;
}
