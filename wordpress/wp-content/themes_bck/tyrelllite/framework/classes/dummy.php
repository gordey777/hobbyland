<?php 
include_once 'framework.php';

class Dummy extends Framework {
        
    public function select() {
        return get_option('dessky_dummy');
    }
    
    public function save() {
        /* Insert account informations */
        $acc_info = array(
            'responsive'=>'on',
            'responsive_demand'=>'on',
            'copyright'=>'Copyright ©2014 Tyrell',
            'copyright_on'=>'on',
            'top_menu'=>'on',
            'top_menu_label'=>'contact us',
            'top_menu_input'=>'+800 800000000',
            'boxed'=>'-1',
            'pattern'=>4
        );
        
        update_option($this->prefix.'acc_info', $acc_info);
        
        $date = explode("/",date("Y/m"));
        /* Insert media informations */
        $media_info = array(
            'favicon'=>site_url() . "/wp-content/themes/tyrelllite/favicon.ico",
            'logo'=>site_url() . "/wp-content/themes/tyrelllite/assets/images/tyrell_logo.png"
        );
        
        update_option($this->prefix.'media_info', $media_info);
        
        /* Insert social media informations */
        $social_info = array(
            'email'=>'info@yourdomain',
            'google_analytics'=>'UA-YOUR CODE',
            'facebook'=>'facebook',
            'google_plus'=>'google_plus',
            'twitter'=>'twitter',
            'linkedin'=>'linkedin',
            'vimeo'=>'vimeo',
            'youtube'=>'youtube',
            'flickr'=>'flickr',
            'instagram'=>'instagram',
        );
        
        update_option($this->prefix.'social_info', $social_info);
        
        /* set dummy to 1 */
        update_option('dessky_dummy', 1);

        /* Import dummy xml */
        include_once 'importer/wordpress-importer.php';
        $parse = new WP_Import();
        $parse->import(TEMPLATEPATH . '/framework/classes/importer/dummy.xml');
        global $wp_rewrite;
        $blog_id = get_page_by_title("Blog")->ID;
        $portfolio_id = get_page_by_title("Portfolio")->ID;
        $error_id = get_page_by_title("404 Page")->ID;
        $first_id = get_page_by_title("Home")->ID;

        $arr = array(
            'blog_page'=>$blog_id, 
            'blog_type'=>'Sidebar layout', 
            'portfolio_page'=>$portfolio_id,
            'limit_items'=>'8',
            'pagination_type'=>'4 column',
            'filter_pag'=>'on',
            'error_page'=>$error_id
            );
        
        update_option($this->prefix.'page_setup', $arr);
        update_option('page_for_posts', $blog_id); 
        update_option('page_on_front', $first_id);                                
        update_option('show_on_front', 'page'); 
        update_option('permalink_structure', '/%postname%/'); 
        $wp_rewrite->set_permalink_structure('/%postname%/');    
        $wp_rewrite->flush_rules();
        
        /* Set menu as primary */
	    $menu_id = wp_get_nav_menus();
        $locations = get_theme_mod('nav_menu_locations');
        $locations['primary'] = $menu_id[0]->term_id;
        set_theme_mod('nav_menu_locations', $locations);
        update_option('menu_check', true);
    }
}
$dummy = new Dummy();