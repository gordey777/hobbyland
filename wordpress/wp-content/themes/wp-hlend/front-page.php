<?php
/* Template Name: Home Page */
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package storefront
 */

get_header(); ?>



                <!--PRODUCT SLIDER -->

            <div class="main-slider">
              <?php if( have_rows('product_slider') ): ?>
                <div id="owl-product-slider" class="owl-carousel">
                  <?php while ( have_rows('product_slider') ) : the_row(); ?>
                    <div class="item">
                      <a href="<?php the_sub_field('product_link'); ?>">
                        <?php $image = get_sub_field('product_image');
                        if( !empty($image) ): ?>
                          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php endif; ?>
                      </a>
                    </div>
                  <?php  endwhile;
                  else : ?>
                </div>
              <?php endif; ?>
            </div>



                <!-- BRAND SLIDER -->

            <div class="main-slider">
              <?php if( have_rows('brend_slider') ): ?>
                <div id="owl-brand-slider" class="owl-carousel">
                 <?php while ( have_rows('brend_slider') ) : the_row(); ?>
                  <div class="item brand">
                   <a href="<?php the_sub_field('brand_link'); ?>">
                    <?php $image = get_sub_field('brand_image');
                    if( !empty($image) ): ?>
                      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                    </a>
                  </div>
                 <?php  endwhile;
                 else : ?>
                </div>
             <?php endif;?>
            </div>



      <div class="widget-footer">
        <?php if ( is_active_sidebar('widgetarea2') ) : ?>
          <?php dynamic_sidebar( 'widgetarea2' ); ?>
        <?php endif; ?>
      </div>





  <div id="primary" class="no-sid-bar">
    <main id="main" class="site-main" role="main">

      <?php while ( have_posts() ) : the_post();

        do_action( 'storefront_page_before' );

        get_template_part( 'content', 'page' );

        /**
         * Functions hooked in to storefront_page_after action
         *
         * @hooked storefront_display_comments - 10
         */
        do_action( 'storefront_page_after' );

      endwhile; // End of the loop. ?>

    </main><!-- #main -->
  </div><!-- #primary -->
<!--   </div> -->

<?php ; get_footer();





