<?php
     /*
      * Template name: Template for Contact page
     */

    get_header();
?>

<main class="main-content">
    <div class="wrapper">
        <?php get_template_part('inc/pages/breadcrumbs') ?>
    </div>
    <section class="contacts">
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>
                <div class="wrapper">
            <h1 class="contacts__h main-heading"><?php the_title(); ?></h1>
            <div class="map">
                <a href="#" class="map__fallback">
                    <img src="<?php echo _si_assets_path('img/map.jpg')  ?>" alt="<?php esc_attr_e('SportIsland Club Map', 'sportisland'); ?>">
                    <span class="sr-only"><?php esc_html_e('Map', 'sportisland'); ?></span>
                </a>
                <?php
                    if (is_active_sidebar('si-contact-map-sidebar')) {
                        dynamic_sidebar('si-contact-map-sidebar');
                    }
                ?>
            </div>
            <p class="contacts__info">
                <?php
                if (is_active_sidebar('si-contact-info-sidebar')) {
                    dynamic_sidebar('si-contact-info-sidebar');
                }
                ?>
            </p>
            <?php the_content(); ?>
            <form action="#" class="contacts__form contacts-form">
                <label class="contacts-form__label">
                    <span class="sr-only"> Имя </span>
                    <input type="text" class="contacts-form__input" placeholder="Ваше имя">
                </label>
                <label class="contacts-form__label">
                    <span class="sr-only"> Телефон </span>
                    <input type="text" class="contacts-form__input" placeholder="Ваш телефон">
                </label>
                <label class="contacts-form__label">
                    <span class="sr-only"> Почта </span>
                    <input type="text" class="contacts-form__input" placeholder="Ваша почта">
                </label>
                <label class="contacts-form__label contacts-form__label_textarea">
                    <span class="sr-only"> Комментарий </span>
                    <textarea name="" id="" cols="30" rows="10" class="contacts-form__textarea" placeholder="Ваше сообщение"></textarea>
                </label>
                <button class="contacts-form__btn btn"> Отправить </button>
            </form>

        </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>
</main>

<?php
    get_footer();
?>
