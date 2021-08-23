<?php
    get_header();
    $category_title = single_cat_title('', false);
?>

    <main class="main-content">
        <h1 class="sr-only"><?php echo (esc_html__('Page of category ', 'sportisland') . ucfirst($category_title) . (esc_html__(' in SportIsland Sports Club blog', 'sportisland'))); ?></h1>
        <?php get_template_part('inc/pages/breadcrumbs') ?>
        <?php if (have_posts()): ?>
            <section class="category-posts">
                <div class="wrapper">
                <h2 class="main-heading category-posts__h"> <?php echo mb_strtolower($category_title); ?> </h2>
                    <?php get_template_part('inc/pages/post', 'all') ?>
                    <?php the_posts_pagination(); ?>
            </div>
            </section>
        <?php else: ?>
            <?php get_template_part('inc/pages/post', 'none') ?>
        <?php endif; ?>
    </main>

<?php
get_footer();
?>
