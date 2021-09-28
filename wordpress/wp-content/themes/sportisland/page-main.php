<?php
 /*
  * Template name: Template for Main page
 */

    get_header();
?>

<main class="main-content">
    <h1 class="sr-only"> Домашняя страница спортклуба SportIsland. </h1>
    <div class="banner">
        <span class="sr-only">Будь в форме!</span>
        <a href="<?php echo get_post_type_archive_link('services') ?>" class="banner__link btn">записаться</a>
    </div>
    <?php
        $post_about = get_post(151);
        if ($post_about) :
    ?>
        <article class="about">
            <div class="wrapper about__flex">
                <div class="about__wrap">
                    <h2 class="main-heading about__h"> <?php echo $post_about->post_title; ?> </h2>
                    <p class="about__text"><?php echo get_the_excerpt($post_about->ID); ?></p>
                    <a href="<?php echo get_the_permalink($post_about->ID); ?>" class="about__link btn">подробнее</a>
                </div>
                <figure class="about__thumb">
                    <?php echo get_the_post_thumbnail($post_about->ID, 'full'); ?>
                </figure>
            </div>
        </article>
    <?php endif; ?>

    <?php
        $stocks = get_posts([
            'numberposts' => -1,
            'category_name' => 'stock',
            'meta_key' => 'stock_actual',
            'meta_value' => true,
        ]);
    ?>
	<?php if($stocks): ?>
        <section class="sales">
            <div class="wrapper">
                <header class="sales__header">
                    <h2 class="main-heading sales__h"> акции и скидки </h2>
                    <p class="sales__btns">
                        <button class="sales__btn sales__btn_prev">
                            <span class="sr-only"> Предыдущие акции </span>
                        </button>
                        <button class="sales__btn sales__btn_next">
                            <span class="sr-only"> Следующие акции </span>
                        </button>
                    </p>
                </header>
                <div class="sales__slider slider">
                    <?php
                    global $post;
                        foreach ($stocks as $post):
                            setup_postdata($post);
                   ?>
                    <section class="slider__slide stock">
                        <a href="<?php the_permalink(); ?>" class="stock__link" aria-label="<?php the_title(); ?>">
                            <?php the_post_thumbnail('full', ['class' => 'stock__thumb']); ?>
                            <h3 class="stock__h"> <?php the_title(); ?> </h3>
                            <p class="stock__text"><?php echo get_the_excerpt(); ?></p>
                            <span class="stock__more link-more_inverse link-more">Подробнее</span>
                        </a>
                    </section>
                    <?php
                        endforeach;
                        wp_reset_postdata();
                    ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php

        $query = new WP_Query([
            'numberposts' => -1,
            'post_type' => 'cards',
            'meta_key' => 'card_order',
            'orderby' => 'meta_value_num',
            'order' => 'ASC'
        ]);

        if ($query->have_posts()): ?>
            <section class="cards cards_index">
                <div class="wrapper">
                    <h2 class="main-heading cards__h"> клубные карты </h2>
                    <ul class="cards__list row">
                        <?php
                            while ($query->have_posts()):
                                $query->the_post();
                                $benefits_list = mb_split("\n", get_field('card_benefits'));
                                $card_bg = get_field('card_bg');
                                ?>
                                <li
                                        class="card <?php echo get_field( 'card_profit' ) ? 'card_profitable' : '' ?>"
                                        <?php if($card_bg): ?>
                                            style="background-image: url(<?php echo $card_bg ?>)"
                                        <?php endif; ?>
                                >
                                <h3 class="card__name"> <?php the_title() ?> </h3>
                                <p class="card__time">
                                    <?php the_field('card_time_start'); ?>
                                    &ndash;
                                    <?php the_field('card_time_end'); ?>
                                </p>
                                <p class="card__price price">
                                    <?php the_field('card_price'); ?>
                                    <span class="price__unit" aria-label="рублей в месяц">
                                        р.-/мес.
                                    </span>
                                </p>
                                <ul class="card__features">
                                    <?php foreach ($benefits_list as $benefits_item): ?>
                                        <li class="card__feature" >
                                            <?php echo $benefits_item ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                                <a data-post-id="<?php echo $id ?>" href="#modal-form" class="card__buy btn btn_modal">купить</a>
                            </li>
                        <?php
                            endwhile;
                            wp_reset_postdata();
                        ?>
                    </ul>
                </div>
            </section>
   <?php endif; ?>
</main>

<?php
    get_footer();
?>

