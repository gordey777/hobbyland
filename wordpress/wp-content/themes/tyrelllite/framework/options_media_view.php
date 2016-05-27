<?php
include_once 'classes/options.php';

$media_data = $options->get_media();
if (isset($_GET['save_media']))
    $options->save_media(); 
?>
<form action="themes.php?page=theme_options&sub_page=options_media&save_media" method="post">

    <div class="content-top"><input type="submit" class="submit" value="<?php _e("Save all changes", "tyrell"); ?>" /><div class="clear"></div></div>

    <div class="content-inner">
        <h3><?php _e("Logo and favicon", "tyrell"); ?></h3>
        <!-- Favicon -->
        <div class="input">
            <label for="favicon"><?php _e("Favicon", "tyrell"); ?></label>
            <div class="preview"><img src="<?php echo $media_data['favicon']; ?>"></div>
            <input id="favicon" type="text" size="36" name="favicon" value="<?php echo $media_data['favicon']; ?>" />
            <input id="_btn" class="upload_image_button" type="button" value="Upload" />
            <p><?php _e("Enter an URL or upload an image for the favicon.", "tyrell"); ?></p>
        </div>
        <!-- Logo -->
        <div class="input">
            <label for="logo"><?php _e("Logo", "tyrell"); ?></label>
            <div class="preview"><img src="<?php echo $media_data['logo']; ?>"></div>
            <input type="text" size="36" name="logo" value="<?php echo $media_data['logo']; ?>" />
            <input id="_btn" class="upload_image_button" type="button" value="Upload" />
            <p><?php _e("Enter an URL or upload an image for the logo.", "tyrell"); ?></p>
        </div>
    </div>

    <div class="content-top">
        <input type="submit" class="submit" value="<?php _e("Save all changes", "tyrell"); ?>">
        <div class="clear"></div>
    </div>
</form>
<?php wp_enqueue_script('media-upload');
    wp_enqueue_script('thickbox');
    wp_register_script('my-upload', get_template_directory_uri() . '/framework/assets/js/upload_image.js', array('jquery', 'media-upload', 'thickbox'));
    wp_enqueue_script('my-upload');
    wp_enqueue_style('thickbox');
?>