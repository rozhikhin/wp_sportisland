<?php
get_header();
?>

<main class="main-content">
    <h1 class="sr-only">Цены на наши услуги и клубные карты</h1>
    <div class="wrapper">
        <ul class="breadcrumbs">
            <li class="breadcrumbs__item breadcrumbs__item_home">
                <a href="index.html" class="breadcrumbs__link">Главная</a>
            </li>
            <li class="breadcrumbs__item">
                <a href="prices.html" class="breadcrumbs__link">Цены</a>
            </li>
        </ul>
        <section class="prices">
            <h2 class="main-heading prices__h">Цены</h2>
            <?php
                if (have_posts()) {
	                while(have_posts()) {
	                    the_post();
	                    if (!get_field('prices_show')) {
	                        continue;
                        }
		                the_content();
                    }
                } else {
	                get_template_part( 'inc/pages/post', 'none' );
                }
            ?>
        </section>
	    <?php

            $query = new WP_Query([
                'numberposts' => -1,
                'post_type' => 'cards',
                'meta_key' => 'card_order',
                'orderby' => 'meta_value_num',
                'order' => 'ASC'
            ]);

            if ($query->have_posts()):
            ?>
            <section class="cards cards">
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
            </section>
	    <?php endif; ?>
    </div>
</main>

<?php
get_footer();
?>
