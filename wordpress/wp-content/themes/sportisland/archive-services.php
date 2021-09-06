<?php
    get_header();
?>

<main class="main-content">
    <h1 class="sr-only">Услуги</h1>
    <div class="wrapper">
        <?php get_template_part('inc/pages/breadcrumbs') ?>
        <?php if(have_posts()): ?>
            <ul class="services-list">
                <?php while(have_posts()): the_post(); ?>
                    <li class="services-list__item service">
                        <h2 class="service__name main-heading"> <?php the_title(); ?> </h2>
                        <p class="service__text"><?php the_field('services_desctiption'); ?></p>
                        <p class="service__action">
                            <a data-post-id="<?php echo $id ?>" href="#modal-form" class="service__subscribe btn btn_modal"><?php esc_html_e('sign up', 'sportisland') ?></a>
                            <strong class="service__price price"> <?php the_field('service_price'); ?> <span class="price__unit"><?php esc_html_e('$ / month', 'sportisland') ?></span>
                            </strong>
                        </p>
                        <figure class="service__thumb">
                            <img src="<?php echo get_field('service_img')['url']; ?>" alt="<?php echo get_field('service_img')['alt']; ?>" class="service__img">
                        </figure>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php else: ?>
            <?php get_template_part('inc/pages/post', 'none') ?>
        <?php endif; ?>
    </div>
</main>

<?php
    get_footer();
?>
