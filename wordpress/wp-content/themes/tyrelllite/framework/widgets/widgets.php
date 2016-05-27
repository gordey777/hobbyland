<?php
/* Get all widgets */
function get_all_widgets() {
    $dir = get_template_directory() . '/framework/widgets';
    if ($handle = opendir($dir)) {
        $arr = array();
        // Get all files and store it to array
        while (false !== ($entry = readdir($handle))) {
            $arr[] = $entry;
        }
        closedir($handle); 
      
        /* Remove widgets, ., .. */
        unset($arr[remove_widget('widgets.php', $arr)], $arr[remove_widget('.', $arr)], $arr[remove_widget('..', $arr)]);

        return $arr;
    }
}

/* Remove widget function */
function remove_widget($name, $arr) {
    return array_search($name, $arr);
}

/* Include all widgets */ 
foreach(get_all_widgets() as $item) {
    include_once get_template_directory() . '/framework/widgets/'.$item;
} 

/** Register sidebars by running tyrell_widgets_init() on the widgets_init hook. */
add_action('widgets_init', 'dessky_widgets_init');
function dessky_widgets_init() {
    // Area 1, located at the top of the sidebar.
    register_sidebar(array(
        'name' => __('Sidebar', 'tyrell'),
        'id' => 'primary-widget-area',
        'description' => __('The primary widget area', 'tyrell'),
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => __('Secondary Sidebar', 'tyrell'),
        'id' => 'secondary-widget-area',
        'description' => __('Secondary widget area', 'tyrell'),
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    // Area 3, located in the footer. Empty by default.
    register_sidebar(array(
        'name' => __('First Footer Column', 'tyrell'),
        'id' => 'first-footer-widget-area',
        'description' => __('The first footer widget area', 'tyrell'),
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    // Area 4, located in the footer. Empty by default.
    register_sidebar(array(
        'name' => __('Second Footer Column', 'tyrell'),
        'id' => 'second-footer-widget-area',
        'description' => __('The second footer widget area', 'tyrell'),
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    // Area 5, located in the footer. Empty by default.
    register_sidebar(array(
        'name' => __('Third Footer Column', 'tyrell'),
        'id' => 'third-footer-widget-area',
        'description' => __('The third footer widget area', 'tyrell'),
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    // Area 6, located in the footer. Empty by default.
    register_sidebar(array(
        'name' => __('Fourth Footer Column', 'tyrell'),
        'id' => 'fourth-footer-widget-area',
        'description' => __('The fourth footer widget area', 'tyrell'),
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
