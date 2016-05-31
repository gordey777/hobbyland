<?php 
include_once 'framework.php';

class Style extends Framework {
    
    /* Get all files and save it to options */
    public function get_custom_fonts() {
        $dir = get_template_directory().'/fonts';
        if ($handle = opendir($dir)) {
            $arr = array();
            // Get all files and store it to array
            while(false !== ($entry = readdir($handle))) {
               $arr[$entry] = $entry;
            }          
            closedir($handle); 
            // Remove . and ..
            unset($arr['.'], $arr['..']); 
            
            // Prepare array to update options
            $fonts = array();
            foreach($arr as $item) {
                $exploded_item = explode(".", $item);
                $fonts[$exploded_item[0]] = $exploded_item[0];               
            } 
        } 
       return $fonts;
    }
    
    /* New upload directory */
    public function upload_directory($upload) {
        $upload['subdir'] = '/fonts';
        $upload['path'] = get_template_directory().$upload['subdir'];
        $upload['url'] = get_template_directory_uri().$upload['subdir'];
        $upload['error'] = $upload['error'];
        
        return $upload;
    }
    
    /* Get all fonts */
    public function all_fonts() {    
        $fonts['System fonts'] = array(
            array('value' => 'Arial, Helvetica, sans-serif', 'name' => 'Arial'),
            array('value' => 'Arial+Black, Gadget, sans-serif', 'name' => 'Arial black'),
            array('value' => 'Comic+Sans+MS, cursive, sans-serif', 'name' => 'Comic Sans MS'),
            array('value' => 'Courier+New, Courier, monospace', 'name'=> 'Courier New'),
            array('value' => 'Georgia, serif', 'name' => 'Georgia'),
            array('value' => 'Impact, Charcoal, sans-serif', 'name'=>'Impact'),
            array('value' => 'Lucida+Console, Monaco, monospace', 'name'=> 'Lucida Console'),
            array('value' => 'Lucida+Sans+Unicode, "Lucida Grande", sans-serif', 'name'=>'Lucida Sans Unicode'),
            array('value' => 'Palatino+Linotype, Book+Antiqua, Palatino, serif', 'name'=> 'Palatino Linotype'),
            array('value' => 'Tahoma, Geneva, sans-serif', 'name'=> 'Tahoma'),
            array('value' => 'Trebuchet+MS, Helvetica, sans-serif', 'name'=> 'Trebuchet MS'),
            array('value' => 'Times+New+Roman, Times, serif', 'name' => 'Times New Roman'),
            array('value' => 'Verdana, Geneva, sans-serif', 'name'=> 'Verdana')         
        );
        return $fonts;
    }   
    
    /* Save style options */
    public function save() { 
        $fonts = explode("|", $_POST['font_type_1']);
        $_POST['font_type_1'] = $fonts[0];
        $_POST['font_source_1'] = $fonts[1];
        $fonts2 = explode("|", $_POST['font_type_2']);
        $_POST['font_type_2'] = $fonts2[0];
        $_POST['font_source_2'] = $fonts2[1];

        foreach($_POST as $name=>$value) {  
            update_option($name, $value);
        }
        header("Location: themes.php?page=theme_options&sub_page=theme_style");
    }
        
}
$style = new Style();