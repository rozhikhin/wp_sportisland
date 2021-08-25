<?php

add_action('add_meta_boxes', 'si_metaboxes');
add_action('save_post', 'si_save_like_meta');

function si_metaboxes() {
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
    echo '<input type="text" name="si-like" value="' . $likes . '">';
//    echo '<p>' . $likes . '</p>';
}

function si_save_like_meta($post_id){
    if (isset($_POST['si-like'])){
        update_post_meta($post_id, 'si-like', $_POST['si-like']);
    }
}
