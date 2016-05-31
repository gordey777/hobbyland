<?php
include_once 'classes/options.php';

$page_data = $options->get_page_setup_data();
if (isset($_GET['save_page_setup']))
  $options->save_page_setup();
?>
<form action="themes.php?page=theme_options&sub_page=options_page_setup&save_page_setup" method="post">   
    <div class="content-top"><input class="submit" type="submit" value="<?php _e("Save all changes", "tyrell"); ?>" /><div class="clear"></div></div>
    <div class="content-inner">
        <!-- Page setup -->
        <h3><?php _e("Theme setup", "tyrell"); ?></h3>
        <!-- Error page -->
        <div class="input">
            <label for="error_page"><?php _e("404 error page", "tyrell"); ?></label>
            <select name="error_page">
                <option value="0">*** Select ***</option>
                <?php
                $pages = get_pages();
                foreach ($pages as $item) :
                    if ($page_data['error_page'] == $item->ID)
                        $selected = 'selected="selected"';
                    else
                        $selected = '';
                    ?>
                    <option value="<?php echo $item->ID; ?>" <?php echo $selected; ?>><?php echo $item->post_title; ?></option> 
                <?php endforeach; ?>
            </select>
        </div>
        <!-- Front page -->
        <div class="input">
            <label for="front_page"><?php _e("Front page", "tyrell"); ?></label>
            <select name="front_page">
                <option value="0">*** Select ***</option>
                <?php $pages = get_pages();
                foreach ($pages as $item) :
                    if (get_option('page_on_front') == $item->ID) 
                        $selected = 'selected="selected"';
                    else 
                        $selected = '';
                    ?>
                    <option value="<?php echo $item->ID; ?>" <?php echo $selected; ?>><?php echo $item->post_title; ?></option> 
                <?php endforeach; ?>
            </select>
        </div>
        <hr/>
        <!-- Blog page -->
        <div class="input">
            <label for="blog_page"><?php _e("Blog page", "tyrell"); ?></label>
            <select name="blog_page">
                <option value="0">*** Select ***</option>
                <?php foreach ($pages as $item) :
                    if ($page_data['blog_page'] == $item->ID) 
                        $selected = 'selected="selected"';
                    else
                        $selected = '';
                    ?>
                    <option value="<?php echo $item->ID; ?>" <?php echo $selected; ?>><?php echo $item->post_title; ?></option> 
                <?php endforeach; ?>
            </select> 
        </div>
        <!-- Blog layout -->
        <div class="input"> 
            <label for="blog_type"><?php _e("Blog layout", "tyrell"); ?></label>
            <?php $pag_type = array('Sidebar layout', 'Full view', '1 column', '2 column', '3 column', '4 column'); ?>
            <select name="blog_type">
                <?php foreach ($pag_type as $item) :
                    if ($page_data['blog_type'] == $item) 
                        $selected = 'selected="selected"';
                    else 
                        $selected = '';
                    ?>
                    <option value="<?php echo $item; ?>" <?php echo $selected; ?>><?php echo $item; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <hr>
        <!-- END Page setup -->
    </div>

    <div class="content-top">
        <input type="submit" class="submit" value="<?php _e("Save all changes", "tyrell"); ?>">
        <div class="clear"></div>
    </div>
</form>