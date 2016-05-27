<div id="copyright-footer">
    <div id="copyright-footer-wrapper" class="container">   

        <div id="copyright-footer-left"> 
                <?php 
                    global $options_data; 
                    global $social_data; 
                    unset($social_data['email'], $social_data['google_analytics']);       
					echo $options_data['copyright'];        
					 
					// If you like what we do you can support us by simply not removing this link :)
                    echo " - Developed by <a class='copylink' href='http://dessky.com' target='_blank' title='Dessky - providing premium themes, plugins and support for your website.'>Dessky.com</a>"; 
                ?>
        </div>

        <div id="copyright-footer-right">
            <?php
                $has_social = false;

                foreach($social_data as $key=>$item) {
                    if($item!='') { $has_social = true; }
                }
            ?>
        
            <?php if ( $has_social ): ?>
                <span><?php _e("socialise", "tyrell"); ?> - </span>
                            
                <?php 
                if($social_data!='') :
                    foreach($social_data as $key=>$item) : 
                        if($item!='') : ?>
                    <a href="<?php echo $item; ?>" class="<?php echo $key;?>"></a>
                    <?php endif;
                    endforeach; 
                endif;?> 
            <?php endif ; ?>
        </div>
    </div>  
</div>

