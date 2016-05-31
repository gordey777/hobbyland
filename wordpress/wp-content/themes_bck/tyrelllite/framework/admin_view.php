<?php 
/* Include styles and scripts */
if (is_admin()) {
	wp_enqueue_style( "admin-style", get_template_directory_uri() . '/framework/assets/css/admin.style.css' ); 
	wp_enqueue_style( "jquery-uniform", get_template_directory_uri() . '/framework/assets/css/jquery.uniform.css' ); 
	wp_enqueue_style( "admin-theme", get_template_directory_uri() . '/framework/assets/css/admin.theme.css' ); 
    wp_enqueue_script( "jquery_google", "//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" );
    if (isset($_GET['sub_page']) && ($_GET['sub_page'] == "options" || $_GET['sub_page'] == "options_page"))
        wp_enqueue_script( "pattern", get_template_directory_uri() . "/framework/assets/js/pattern.js" );
    if (isset($_GET['sub_page']) && $_GET['sub_page'] == "contact_form") 
        wp_enqueue_script( "contact", get_template_directory_uri() . "/framework/assets/js/contact.js" );
	
	wp_enqueue_script( "jquery-uniform", get_template_directory_uri() . "/framework/assets/js/jquery.uniform.js" ); 
    wp_enqueue_script( "theme-options", get_template_directory_uri() . "/framework/assets/js/theme-options.js" ); 
}
?> 
<header>
<div class="theme_options_title">
			<h1><?php _e("Theme Options", "tyrell"); ?></h1>
</div>
</header>

<div class="dessky-admin">
	<nav>
    <ul id="nav">
    	<li class="i_settings_2">
            <a <?php if (!isset($_GET['sub_page']) || ( $_GET['sub_page'] == "options" || $_GET['sub_page'] == "options_page_setup" || $_GET['sub_page'] == "options_social_accounts" || $_GET['sub_page'] == "options_media" )) echo 'id="selected-menu-item" class="active"'; ?> ><span><?php _e("General Settings", "tyrell"); ?></span></a>
            <ul class="dessky-admin-submenu" <?php if (!isset($_GET['sub_page']) || ( $_GET['sub_page'] == "options" || $_GET['sub_page'] == "options_page_setup" || $_GET['sub_page'] == "options_social_accounts" || $_GET['sub_page'] == "options_media" )) echo 'style="display: block;"'; ?> >
                <li><a <?php if (isset($_GET['sub_page']) && $_GET['sub_page'] == "options") echo 'id="selected-menu-subitem" class="active"'; ?> href="themes.php?page=theme_options&sub_page=options"><span><?php _e("Theme layout", "tyrell"); ?></span></a></li>
                <li><a <?php if (!isset($_GET['sub_page']) || $_GET['sub_page'] == "options_page_setup") echo 'id="selected-menu-subitem" class="active"'; ?> href="themes.php?page=theme_options&sub_page=options_page_setup"><span><?php _e("Theme setup", "tyrell"); ?></span></a></li>
                <li><a <?php if (isset($_GET['sub_page']) && $_GET['sub_page'] == "options_social_accounts") echo 'id="selected-menu-subitem" class="active"'; ?> href="themes.php?page=theme_options&sub_page=options_social_accounts"><span><?php _e("Social accounts", "tyrell"); ?></span></a></li>
                <li><a <?php if (isset($_GET['sub_page']) && $_GET['sub_page'] == "options_media") echo 'id="selected-menu-subitem" class="active"'; ?> href="themes.php?page=theme_options&sub_page=options_media"><span><?php _e("Logo and favicon", "tyrell"); ?></span></a></li>
            </ul>
        </li>
        <li class="i_shopping_cart">
            <a <?php if (isset($_GET['sub_page']) && $_GET['sub_page'] == "shop_settings") echo 'id="selected-menu-item" class="active"'; ?> href="themes.php?page=theme_options&sub_page=shop_settings"><span><?php _e("Shop Settings", "tyrell"); ?></span></a>
        </li>
        <li class="i_duplicate">
            <a <?php if (isset($_GET['sub_page']) && $_GET['sub_page'] == "dummy_content") 
                        echo 'id="selected-menu-item" class="active"'; ?> href="themes.php?page=theme_options&sub_page=dummy_content"><span><?php _e("Dummy Content", "tyrell"); ?></span></a>
        </li>
    </ul>
    </nav>
    
    <section id="content">
    <div class="dessky-admin-content">
        <?php
        if(!isset($_GET['sub_page']))
            $_GET['sub_page']='';
      
        switch($_GET['sub_page']) {
            case 'options': include_once 'options_page_view.php'; break;
            case 'options_page': include_once 'options_page_view.php'; break;
            case 'options_page_setup': include_once 'options_page_setup_view.php'; break;
            case 'options_social_accounts': include_once 'options_social_accounts_view.php'; break;
            case 'options_media': include_once 'options_media_view.php'; break;
            case 'contact_form': include_once 'contact_view.php'; break;
            case 'dummy_content': include_once 'dummy_view.php'; break;
            case 'theme_style': include_once 'style_view.php'; break;
            case 'shop_settings': include_once 'shop_settings.php'; break;
            default: include_once 'options_page_setup_view.php';
        }

        ?>
    </div>
    </section>
    <footer>Copyright by dessky.com 2014</footer>
</div> 