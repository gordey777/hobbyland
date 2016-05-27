<?php

class dessky_photostream extends WP_Widget {

    function dessky_photostream() {
        $widget_options = array(
            'classname' => 'dessky-photostream',
            'description' => 'Photostream from Flickr, Pinterest or Instagram in your sidebar.'
        );
        parent::WP_Widget('dessky_photostream', 'Photostream Widget', $widget_options);
    }

    function widget($args, $instance) {
        extract($args, EXTR_SKIP);
        if (!isset($instance['title']))
            $instance['title'] = "";
        if (!isset($instance['social_network']))
            $instance['social_network'] = "";
        if (!isset($instance['user']))
            $instance['user'] = "";
        if (!isset($instance['limit']))
            $instance['limit'] = "";
        if (!isset($instance['hover_color']))
            $instance['hover_color'] = "#ffffff";

        $root = get_stylesheet_directory_uri() . "/framework/photostream/";

        wp_register_script('dessky_photostream', $root . "dessky_photostream.js", array('jquery'), '1.3', true);
        wp_enqueue_script('dessky_photostream');

        $title = ( $instance['title'] ) ? $instance['title'] : '';
        $user = ( $instance['user'] ) ? $instance['user'] : 'chrisrushing';
        $social_network = ( $instance['social_network'] ) ? $instance['social_network'] : 'instagram';
        $limit = ( $instance['limit'] ) ? $instance['limit'] : '9';
        $hover_color = ( $instance['hover_color'] ) ? $instance['hover_color'] : '#ffffff';
        echo $before_widget;
        echo $before_title . $title . $after_title;

        $unique_id = $user . $social_network . $limit;
        $unique_id = preg_replace("/[^A-Za-z0-9]/", '', $unique_id);
        $html = '<div class="photostream clearfix" id="' . $unique_id . '"></div>';
        $html .= '<script type="text/javascript"> jQuery(document).ready(function($){ ';
        $html .= '$("#' . $unique_id . '").dessky_photostream({user: "' . $user . '", limit:' . $limit . ', social_network: "' . $social_network . '"});';
        $html .= '});</script>';

        echo $html;
        echo $after_widget;
    }

    function form($instance) {

        $root = get_stylesheet_directory_uri() . "/framework/photostream/";
        wp_enqueue_script("miniColors", $root . "jquery.miniColors.min.js", array('jquery'));
        wp_enqueue_style("miniColors", $root . "jquery.miniColors.css");

        if (!isset($instance['title']))
            $instance['title'] = "Instagram Photostream";
        if (!isset($instance['user']))
            $instance['user'] = "chrisrushing";
        if (!isset($instance['limit']))
            $instance['limit'] = "8";
        if (!isset($instance['social_network']))
            $instance['social_network'] = "instagram";
        if (!isset($instance['hover_color']))
            $instance['hover_color'] = "#000000";
        ?>

        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>">
                Title: 
                <input id="<?php echo $this->get_field_id('title'); ?>"
                       name="<?php echo $this->get_field_name('title'); ?>"
                       value="<?php echo esc_attr($instance['title']); ?>" 
                       class="widefat" type="text"/>
            </label>
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('user'); ?>">
                Photostream user: 
                <input id="<?php echo $this->get_field_id('user'); ?>"
                       name="<?php echo $this->get_field_name('user'); ?>"
                       value="<?php echo esc_attr($instance['user']); ?>" 
                       class="widefat" type="text"/>
            </label>
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('limit'); ?>">
                No of pics displayed: 
                <input id="<?php echo $this->get_field_id('limit'); ?>"
                       name="<?php echo $this->get_field_name('limit'); ?>"
                       value="<?php echo esc_attr($instance['limit']); ?>" 
                       class="" size="1"/>
            </label>
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('social_network'); ?>">
                Social Network
                <select name="<?php echo $this->get_field_name('social_network'); ?>" 
                        id="<?php echo $this->get_field_id('social_network'); ?>"
                        class="">
                    <option value="dribbble" <?php if ($instance['social_network'] == "dribbble") echo 'selected="selected"' ?>>Dribbble</option>
                    <option value="pinterest" <?php if ($instance['social_network'] == "pinterest") echo 'selected="selected"' ?>>Pinterest</option>
                    <option value="flickr" <?php if ($instance['social_network'] == "flickr") echo 'selected="selected"' ?>>Flickr</option>
                    <option value="instagram" <?php if ($instance['social_network'] == "instagram") echo 'selected="selected"' ?>>Instagram</option>
                </select>
            </label>
        </p>

        <p style="display: none">
            <label for="<?php echo $this->get_field_id('hover_color'); ?>">
                Hover color (with #): 
                <input id="<?php echo $this->get_field_id('hover_color'); ?>"
                       name="<?php echo $this->get_field_name('hover_color'); ?>"
                       value="<?php echo esc_attr($instance['hover_color']); ?>" 
                       class="color-picker" size="10"/>
            </label>
        </p>
        <?php
    }

}

function dessky_photostream_init() {
    register_widget("dessky_photostream");
}

add_action('widgets_init', 'dessky_photostream_init');