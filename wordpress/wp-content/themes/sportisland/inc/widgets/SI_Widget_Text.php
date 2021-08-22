<?php

/**
 * Class SI_Widget_Text
 * Widget's class - adds simple text or html
 */
class SI_Widget_Text extends WP_Widget {
    public function __construct()
    {
        parent::__construct(
            'SI_Widget_Text',
            'SportIsland - Text Widget',
            [
                'name' => __('SportIsland - Text Widget', 'sportisland'),
                'description' => __('Show simple text', 'sportisland')
            ]
        );
    }

    public function form($instance){
        ?>
            <p>
                <label for="<?php echo $this->get_field_id('id-text')  ?>">Введите текст</label>
                <textarea
                    type="text"
                    id="<?php echo $this->get_field_id('id-text') ?>"
                    name="<?php echo $this->get_field_name('text') ?>"
                    value="<?php esc_html_e($instance['text']) ?>"
                    class="widefat"
                    rows="7"
                >
                    <?php esc_html_e($instance['text']); ?>
                </textarea>
            </p>

        <?php

    }

    public function widget($args, $instance){
        /**
         * apply_filters for enable shortcode in widget
         */
        echo apply_filters('si_widget_text', $instance['text']) ;
    }

    public function update($new_instance, $old_instance){
        return $new_instance;
    }
}
