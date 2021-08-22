<?php

get_template_part('inc/widgets/SI_Widget_Text');
get_template_part('inc/widgets/SI_Widget_Contacts');
get_template_part('inc/widgets/SI_Widget_Social_Link');
get_template_part('inc/widgets/SI_Widget_Iframe');
get_template_part('inc/widgets/SI_Widget_Contact_Info');

add_action('widgets_init', 'si_widgets_register');

function si_widgets_register() {

    register_widget('SI_Widget_Text');
    register_widget('SI_Widget_Contacts');
    register_widget('SI_Widget_Social_Link');
    register_widget('SI_Widget_Iframe');
    register_widget('SI_Widget_Contact_Info');

}
