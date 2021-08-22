<?php

/**
 * Add custom filter to work shorcode in widgets
 */
add_filter('si_widget_text', 'do_shortcode');
/**
 * Add shortcode
 */
add_shortcode('si-paste-link', 'si_paste_link');

/**
 * Function for shortcode
 * Shortcode gets params:
 * links - link for href, mailto or tel
 * type - type of link ( 'mail', 'phone' or 'link' - default)
 * text - text for show in tag "a"
 *
 * @param $attrs
 * @return string
 */
function si_paste_link($attrs) {
    $params = shortcode_atts([
        'link' => '',
        'text' => '',
        'type' => 'link'
    ], $attrs);

    $params['text'] = $params['text'] ? $params['text'] : $params['link'];
    if ($params['link']) {
        $protocol = '';
        switch ($params['type']) {
            case 'email':
                $protocol = 'mailto:';
                break;
            case 'phone':
                $protocol = 'tel:';
                $params['link'] = preg_replace('/[^+0-9]/', '', $params['link']);
                break;
            default:
                $protocol = '';

        $link = $protocol . $params['link'];
        $text = $params['text'];
        return "<a href=\"${link}\">${text} </a>";
        }
    } else {
        return '';
    }
}
