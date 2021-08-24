<?php
    get_header();

    if (is_home()):
?>

    <main class="main-content">
        <h1 class="sr-only"><?php esc_html_e('SportIsland Sports Club Blog Category Page', 'sportisland') ?></h1>
        <?php get_template_part('inc/pages/breadcrumbs') ?>
        <?php if (have_posts()): ?>
            <section class="last-posts">
                <div class="wrapper">
                    <h2 class="main-heading last-posts__h"> <?php esc_html_e('last posts', 'sportisland') ?>  </h2>
                    <?php get_template_part('inc/pages/post', 'all') ?>
                </div>
            </section>
        <?php else: ?>
            <?php get_template_part('inc/pages/post', 'none') ?>
        <?php endif; ?>
        <!--        Categories         -->
        <?php $categories = get_categories(); ?>
        <?php if($categories): ?>
            <section class="categories">
                <div class="wrapper">
                    <h2 class="categories__h main-heading"> категории </h2>
                    <ul class="categories-list">
                        <?php foreach ($categories as $category): ?>
                            <li class="category">
                            <a href="<?php echo get_category_link($category->cat_ID); ?>" class="category__link">
                                <img src="<?php _si_assets_path('img/blog__category_thmb1.jpg '); ?>" alt="" class="category__thumb">
                                <span class="category__name"><?php echo $category->name; ?></span>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </section>
        <?php endif; ?>
    </main>

<?php else: ?>

    <main class="main-content">
    <h1 class="sr-only"><?php esc_html_e('SportIsland Sports Club website', 'sportisland') ?></h1>
    <?php get_template_part('inc/pages/breadcrumbs') ?>
    <?php if (have_posts()): ?>
        <section class="last-posts">
        <div class="wrapper">
            <h2 class="main-heading last-posts__h"> Записи </h2>
            <?php get_template_part('inc/pages/post', 'all') ?>
            <?php the_posts_pagination(); ?>
        </div>
    </section>
    <?php else: ?>
        <?php get_template_part('inc/pages/post', 'none') ?>
    <?php endif; ?>
</main>

<?php
    endif;
    get_footer();
?>
