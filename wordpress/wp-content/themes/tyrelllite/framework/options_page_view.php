<?php
include_once 'classes/options.php';

$options_data = $options->get_page_data(); //var_dump(!isset($options_data['responsive']));exit;
if (isset($_GET['save_page']))
  $options->save_page();
?>
<form action="themes.php?page=theme_options&sub_page=options_page&save_page" method="post">

    <div class="content-top"><input type="submit" class="submit" value="<?php _e("Save all changes", "tyrell"); ?>" /><div class="clear"></div></div>

    <div class="content-inner">
        <!-- Page layout -->
        <h3><?php _e("Theme layout", "tyrell"); ?></h3>
        <div class="info">

            <!-- RTL -->
            <div class="input">
            <?php
            $checked='';

            if (get_option('rtl', '') == 'on') {
                $checked = 'checked';
            }
                
            ?>
            <label for="rtl"><?php _e("Right-to-left", "tyrell"); ?></label>
            <input class="small_input" type="checkbox" name="rtl" <?php echo $checked; ?> />
			</div>
            <!-- Sticky menu -->
            <div class="input">
            <?php
            if(!isset($options_data['sticky_menu']))
                $checked='';
            elseif ($options_data['sticky_menu'] == '-1')
                $checked = '';
            elseif ($options_data['sticky_menu'] == '')
                $checked = '';
            else
                $checked = 'checked';
            ?>
            <label for="sticky_menu"><?php _e("Sticky menu", "tyrell"); ?></label>
            <input class="small_input" type="checkbox" name="sticky_menu" <?php echo $checked; ?> />
			</div>
            <!-- Responsive -->
            <div class="input">
                <?php
                if(!isset($options_data['responsive']))
                    $checked='';
                elseif ($options_data['responsive'] == '-1')
                    $checked = '';
                elseif ($options_data['responsive'] == '')
                    $checked = '';
                else
                    $checked = 'checked';
                ?>
                <label for="responsive"><?php _e("Responsive", "tyrell"); ?></label>
                <input class="small_input" type="checkbox" name="responsive" <?php echo $checked; ?> />
            </div>
            <!-- Responsive on demand --> 
            <div class="input" id="responsive-on-demand">
                <?php
                if(!isset($options_data['responsive_demand']))
                    $checked='';
                elseif ($options_data['responsive_demand'] == '-1')
                    $checked = '';
                elseif ($options_data['responsive_demand'] == '')
                    $checked = '';
                else
                    $checked = 'checked';
                ?>
                <label for="responsive_demand"><?php _e("Responsive on demand", "tyrell"); ?></label>
                <input class="small_input" type="checkbox" name="responsive_demand" <?php echo $checked; ?> />

            </div>
            <!-- Boxed -->
            <div class="input">
                <?php
                if(!isset($options_data['boxed']))
                    $checked='';
                elseif ($options_data['boxed'] == '-1')
                    $checked = '';
                elseif ($options_data['boxed'] == '')
                    $checked = '';
                else
                    $checked = 'checked';
                ?>
                <label for="boxed"><?php _e("Boxed", "tyrell"); ?></label>
                <input id="is-boxed" class="small_input" type="checkbox" name="boxed" <?php echo $checked; ?> />

            </div>
        <!-- END Page layout -->  
        <hr />
        <!-- Copyright -->
        <h3>Copyright footer:</h3>
        <div class="input">
            <label for="copyright"><?php _e("Copyright", "tyrell"); ?></label>
            <input type="text" name="copyright" value="<?php echo htmlspecialchars_decode($options_data['copyright']); ?>" />
        </div>

        <div class="input">
            <label for="copyright_on"><?php _e("Copyright footer", "tyrell"); ?></label>
                <?php $options = array('on', 'off'); ?> 
            <select name="copyright_on">
                <?php foreach ($options as $item) :
                    if ($options_data['copyright_on'] == $item) 
                        $selected = 'selected="selected"';
                    else 
                        $selected = '';               
                    ?>
                    <option value="<?php echo $item; ?>" <?php echo $selected; ?>><?php echo $item; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <!-- END Copyright -->
    </div>
</div>

<div class="content-top">
    <input type="submit" class="submit" value="<?php _e("Save all changes", "tyrell"); ?>">
    <div class="clear"></div>
</div>
</form>

<?php
    if (isset($_GET['save_page'])) {
      update_option("rtl", $_POST['rtl']);
    }
?>