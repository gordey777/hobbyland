<?php
include_once 'classes/options.php';

$page_data = $options->get_shop_setup_data();
if (isset($_GET['save_shop_setup']))
  $options->save_shop_setup();
?>
<form action="themes.php?page=theme_options&sub_page=shop_settings&save_shop_setup" method="post">   
    <div class="content-top"><input type="submit" class="submit" value="<?php _e("Save all changes", "tyrell"); ?>" /><div class="clear"></div></div>
    <div class="content-inner">
        <!-- Page setup -->
        <h3><?php _e("Shop Settings", "tyrell"); ?></h3>

        <!-- Shop number of columns -->
        <div class="input"> 
            <label for="shop_pagination"><?php _e("Number of columns", "tyrell"); ?></label>
            <?php $pag_type = array('2 column', '3 column', '4 column'); ?>
            <select name="shop_pagination">
                <?php
                foreach ($pag_type as $item) :
                    if ($page_data['shop_pagination'] == $item) 
                        $selected = 'selected="selected"';
                    else 
                        $selected = '';
                    ?>
                    <option value="<?php echo $item; ?>" <?php echo $selected; ?>><?php echo $item; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <!-- Shop number of products -->
        <div class="input"> <?php if (!isset($page_data['shop_per_page'])) $page_data['shop_per_page'] = ''; ?>
            <label for="shop_per_page"><?php _e("Products per page", "tyrell"); ?></label>
            <input type="text" name="shop_per_page" value="<?php echo $page_data['shop_per_page']; ?>"/>
        </div>

        <hr />
        <!-- END Page setup -->
    </div>

    <div class="content-top">
        <input type="submit" class="submit" value="<?php _e("Save all changes", "tyrell"); ?>">
        <div class="clear"></div>
    </div>
</form>