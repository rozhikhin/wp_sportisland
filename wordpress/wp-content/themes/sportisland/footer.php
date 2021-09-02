<div class="modal">
    <div class="wrapper">
        <section class="modal-content modal-form" id="modal-form">
            <button class="modal__closer">
                <span class="sr-only">Закрыть</span>
            </button>
            <form
                    method="post"
                    action="<?php echo esc_url(admin_url('admin-post.php')); ?>"
                    class="modal-form__form"
            >
                <h2 class="modal-content__h"> Отправить заявку </h2>
                <p> Оставьте свои контакты и менеджер с Вами свяжется </p>
                <p>
                    <label>
                        <span class="sr-only">Имя: </span>
                        <input type="text" name="si-user-name" placeholder="Имя">
                    </label>
                </p>
                <p>
                    <label>
                        <span class="sr-only">Телефон:</span>
                        <input type="text" name="si-user-phone" placeholder="Телефон" pattern="^\+{0,1}[0-9]{4,}$" required>
                    </label>
                </p>
                <button class="btn" type="submit">Отправить</button>
                <input type="hidden" name="action" value="si-modal-form-card">
            </form>
        </section>
    </div>
</div>
<div class="footer">
    <header class="main-header">
        <div class="wrapper main-header__wrap">
            <p class="main-header__logolink">
                <?php the_custom_logo(); ?>
                <span class="slogan"><?php echo get_option('si_slogan_option_field')?></span>
            </p>
            <?php
                $locations = get_nav_menu_locations();
                $menu_id = $locations['menu-footer'];
                $menu_items = wp_get_nav_menu_items($menu_id, [
                    'order' => 'ASC',
                    'orderby' => 'menu_order'
                ]);
            ?>
            <nav class="main-navigation">
                <ul class="main-navigation__list">
                    <?php
                        $schema = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://";
                        $current_url = $schema . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                        foreach ($menu_items as $menu_item):
                            $active_link_class = $menu_item->url === $current_url ? 'active' : '';

                    ?>
                            <li class="<?php echo $active_link_class ?>" >
                                <a href="<?php echo $menu_item->url; ?>">
                                    <?php echo $menu_item->title; ?>
                                </a>
                            </li>
                    <?php endforeach; ?>
                </ul>
            </nav>
            <?php
                if (is_active_sidebar('si-footer-sidebar')) {
                    dynamic_sidebar('si-footer-sidebar');
                }
            ?>
        </div>
    </header>
    <footer class="main-footer wrapper">
        <div class="row main-footer__row">
            <div class="main-footer__widget main-footer__widget_copyright">
                <span class="widget-text">
                    <?php
                        if (is_active_sidebar('si-footer-left-sidebar')) {
                            dynamic_sidebar('si-footer-left-sidebar');
                        }
                    ?>
                </span>
            </div>
            <div class="main-footer__widget">
                <p class="widget-contact-mail">
                    <?php
                        if (is_active_sidebar('si-footer-center-sidebar')) {
                            dynamic_sidebar('si-footer-center-sidebar');
                        }
                    ?>

                </p>
            </div>
            <div class="main-footer__widget main-footer__widget_social">
                <?php
                if (is_active_sidebar('si-footer-right-sidebar')) {
                    dynamic_sidebar('si-footer-right-sidebar');
                }
                ?>
            </div>
        </div>
    </footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
