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



<!--
<div class="col-full"> -->




  <div class="main-slider">
    <?php $images = get_field('product_slider');
    if( $images ): ?>
      <div id="owl-top-slider" class="owlCarousel">
        <?php $images = get_field('product_slider'); if( $images ):
         foreach( $images as $image ): ?>
            <div class="item">
            <a href="<?php the_permalink() ?>">
            <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
            </a></div>
          <?php endforeach; endif; ?>
      </div>
      <?php endif; ?>
  </div>

  <div class="main-slider">
    <?php $images = get_field('brand_slider');
    if( $images ): ?>
      <div id="owl-brand-slider" class="owlCarousel">
        <?php $images = get_field('brand_slider'); if( $images ):
         foreach( $images as $image ): ?>
            <div class="item">
            <a href="<?php the_permalink() ?>">
            <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
            </a></div>
          <?php endforeach; endif; ?>
      </div>
      <?php endif; ?>
  </div>




  <div id="primary" class="content-area">
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

<?php do_action( 'storefront_sidebar' ); get_footer();





