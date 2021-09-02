<?php

add_action('admin_post_si-modal-form-card','si_modal_form_card_handler');
add_action('admin_post_nopriv_si-modal-form-card','si_modal_form_card_handler');

function si_modal_form_card_handler(){
  header("Location: " . home_url());
}
