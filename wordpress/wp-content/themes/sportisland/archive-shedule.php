<?php
get_header();
?>

    <main class="main-content">
        <div class="wrapper">
	        <?php get_template_part('inc/pages/breadcrumbs') ?>
            <h1 class="main-heading schedule-page__h"><?php esc_html_e('schedule', 'sportisland');  ?></h1>
            <div class="tabs">
                <ul class="tabs-btns">
                    <?php
                        $days = get_terms([
                            'taxonomy' => 'shedule-days',
                            'orderby' => 'slug',
                            'order' => 'ASC'
                        ]);

                        foreach ($days as $index => $day):
                            if( $index === 0 ){
	                            $active_tab_class = ' active-tab';
                            } else {
	                            $active_tab_class = '';
                            }
                            ?>
                            <li class="tabs-btns__item <?php echo $active_tab_class; ?> ">
                                <a
                                        href="#<?php  echo $day->slug; ?>"
                                        class="tabs-btns__btn "
                                        aria-label="<?php  echo $day->description; ?> "
                                >
                                            <?php  echo $day->name; ?>
                                </a>
                            </li>
                            <?php endforeach; ?>

                </ul>
                <ul class="tabs-content">
                    <?php foreach ($days as $index => $day ):
                        if( $index === 0 ){
                            $active_tab_class = ' active-tab';
                        } else {
                            $active_tab_class = '';
                        }
                    ?>
                        <li
                                class="tabs-content__item <?php echo $active_tab_class; ?>"
                                id="<?php echo $day->slug; ?>"
                        >
                            <h2 class="sr-only"> <?php echo $day->description; ?> </h2>
                            <ul class="schedule tabs-content__list">
                                <?php
                                    $actions = new WP_Query([
	                                    'posts_per_page' => -1,
                                        'post_type' => 'shedule',
                                        'shedule-days' => $day->slug,
                                        'meta_key' => 'shedule_time_start',
                                        'orderby' => 'meta_value_num',
                                        'order' => 'ASC'
                                    ]);
                                    if ($actions->have_posts()):
                                        while ($actions->have_posts()):
                                            $actions->the_post();
	                                        $trainer = esc_html(
	                                                get_the_title(
	                                                        get_field('shedule_trainer')
                                                    )
                                            );
	                                        $place = get_the_terms($id, 'places')[0];
	                                        $gym_text_color = get_field('gym_text_color', 'places_' . $place->term_id)
                                        ?>
                                            <li class="schedule__item">
                                            <p class="schedule__time"> <?php echo the_field('shedule_time_start') ?> - <?php echo the_field('shedule_time_end') ?>  </p>
                                            <h2 class="schedule__h"> <?php echo the_field('shedule_name') ?>  </h2>
                                            <p class="schedule__trainer"> с <?php echo $trainer ?>  </p>
                                            <p class="schedule__place" style="color: <?php echo $gym_text_color ?>"> <?php echo $place->name ?>  </p>
                                        </li>
                                        <?php
                                        endwhile;
                                        wp_reset_postdata();
                                    endif;
                                ?>
                            </ul>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </main>

<?php
get_footer();
?>
