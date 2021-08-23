<ul class="posts-list">
    <?php while (have_posts()): the_post();?>
        <li class="last-post">
            <a href="<?php the_permalink() ; ?>" class="last-post__link" aria-label=" <?php esc_attr_e('Read post', 'sportisland') ?>: <?php the_title(); ?>">
                <figure class="last-post__thumb">
                    <?php the_post_thumbnail('full', [
                        'class' => 'last-post__img',
                    ]); ?>
                </figure>
                <div class="last-post__wrap">
                    <h3 class="last-post__h"> <?php the_title() ?> </h3>
                    <p class="last-post__text"> <?php echo get_the_excerpt(); ?> </p>
                    <span class="last-post__more link-more"><?php esc_html_e('More', 'sportisland'); ?></span>
                </div>
            </a>
        </li>
    <?php endwhile; ?>
</ul>
