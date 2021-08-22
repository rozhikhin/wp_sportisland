<?php


class SI_Widget_Contact_Info extends WP_Widget
{
    public function __construct()
    {
        parent::__construct(
            'SI_Widget_Contact_Info',
            'SportIsland - Info Widget',
            [
                'name' => __('SportIsland - Info Widget', 'sportisland'),
                'description' => __('Show info under map ', 'sportisland')
            ]
        );
    }

    public function form($instance){
            $vars = [
                'position' => __('Address', 'sportisland'),
                'time' => __('Time', 'sportisland'),
                'phone' => __('Phone number', 'sportisland'),
                'mail' => __('E-Mail', 'sportisland'),
            ];
        ?>
            <div class="">
                <p>
                    <label for="<?php echo $this->get_field_id('id-info')  ?>">
                        <?php _e('Input text', 'sportisland') ?>
                    </label>
                    <input
                            type="text"
                            id="<?php echo $this->get_field_id('id-info') ?>"
                            name="<?php echo $this->get_field_name('info') ?>"
                            value="<?php echo  array_key_exists('info', $instance) ?  $instance['info'] : '' ?>"
                            class="widefat"
                    >
                </p>
                <p>
                    <label for="<?php echo $this->get_field_id('id-var')  ?>">
                        <?php _e('Select the option to display', 'sportisland') ?>
                    </label>
                    <select
                            id="<?php echo $this->get_field_id('id-var') ?>"
                            name="<?php echo $this->get_field_name('var') ?>"
                            class="widefat"
                    >
                        <?php foreach ($vars as $var => $desc ): ?>
                            <option
                                value="<?php echo $var; ?>"
                                <?php selected(array_key_exists('var', $instance) ?  $instance['var'] : '', $var, true); ?>
                            >
                                <?php echo $desc; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </p>
            </div>


        <?php

    }

    public function widget($args, $instance){
        switch ($instance['var']){
            case 'position':
                ?>
                    <span class="widget-address"> <?php echo $instance['info']; ?> </span>
                <?php
                break;
            case 'time':
                ?>
                    <span class="widget-working-time"> <?php echo $instance['info']; ?> </span>
                <?php
                break;
            case 'phone':
                $phone = preg_replace('/[^+0-9]/', '', $instance['info'])
                ?>
                    <a href="tel:<?php echo $phone ?>" class="widget-phone"> <?php echo $instance['info']; ?> </a>
                <?php
                break;
            case 'mail':
                ?>
                    <a href="mailto:<?php echo $instance['info']; ?>" class="widget-email"> <?php echo $instance['info']; ?> </a>
                <?php
                break;
            default: echo '';
        }
    }

    public function update($new_instance, $old_instance){
        return $new_instance;
    }
}
