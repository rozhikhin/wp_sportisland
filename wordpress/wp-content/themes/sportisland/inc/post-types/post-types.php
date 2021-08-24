<?php

add_action('init', 'si_register_post_types');

function si_register_post_types(){
    get_template_part('inc/post-types/services');
    get_template_part('inc/post-types/trainers');
    get_template_part('inc/post-types/shedule');
    get_template_part('inc/post-types/prices');
    get_template_part('inc/post-types/cards');

}
