<?php

add_action('wp_ajax_post-likes', 'si_likes');
add_action('wp_ajax_nopriv_post-likes', 'si_likes');

function si_likes() {
	echo 'si_likes';
	wp_die();
}
