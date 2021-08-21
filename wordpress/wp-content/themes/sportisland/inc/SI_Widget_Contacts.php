<?php


class SI_Widget_Contacts extends WP_Widget
{
    public function __construct()
    {
        parent::__construct(
            'SI_Widget_Contacts',
            'SportIsland - Contacts Widget',
            [
                'name' => __('SportIsland - Contacts Widget', 'sportisland'),
                'description' => __('Show phone and address', 'sportisland')
            ]
        );
    }

    public function form($instance){
        ?>
            <div class="">
                <p>
                    <label for="<?php echo $this->get_field_id('id-phone')  ?>">
                        <?php _e('Input phone number', 'sportisland') ?>
                    </label>
                    <input
                            type="text"
                            id="<?php echo $this->get_field_id('id-phone') ?>"
                            name="<?php echo $this->get_field_name('phone') ?>"
                            value="<?php echo $instance['phone'] ?>"
                            class="widefat"
                    >
                </p>
                <p>
                    <label for="<?php echo $this->get_field_id('id-address')  ?>">
                        <?php _e('Input your address', 'sportisland') ?>
                    </label>
                    <input
                            type="text"
                            id="<?php echo $this->get_field_id('id-address') ?>"
                            name="<?php echo $this->get_field_name('address') ?>"
                            value="<?php echo $instance['address'] ?>"
                            class="widefat"
                    >
                </p>
            </div>


        <?php

    }

    public function widget($args, $instance){
            $phone_text = $instance['phone'];
            $pattern = '/[^+0-9]/';
            $phone = preg_replace($pattern, '', $phone_text)
        ?>
                <address class="main-header__widget widget-contacts">
                    <a href="tel:<?php echo $phone ?>" class="widget-contacts__phone">
                        <?php echo  esc_html($instance['phone'])?>
                    </a>
                    <p class="widget-contacts__address">
                        <?php echo  esc_html($instance['address'])?>
                    </p>
                </address>
        <?php
    }

    public function update($new_instance, $old_instance){
        return $new_instance;
    }
}
