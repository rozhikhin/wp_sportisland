 <ul class="breadcrumbs">
        <li class="breadcrumbs__item breadcrumbs__item_home">
            <a href="<?php esc_html_e(home_url()); ?>" class="breadcrumbs__link"><?php esc_html_e('Main', 'sportisland'); ?></a>
        </li>
        <li class="breadcrumbs__item">
            <a href="<?php esc_html_e(home_url( $_SERVER['REQUEST_URI'])); ?>" class="breadcrumbs__link"><?php echo wp_get_document_title(); ?></a>
        </li>
</ul>
