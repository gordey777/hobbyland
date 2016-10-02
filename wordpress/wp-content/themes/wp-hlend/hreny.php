<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see       https://docs.woocommerce.com/document/template-structure/
 * @author    WooThemes
 * @package   WooCommerce/Templates
 * @version     2.6.3
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

global $post, $product; ?>

  <div id="image-block" class="clearfix image-block-style">
    <span id="view_full_size">
      <?php if ( has_post_thumbnail()) : ?>
        <img src="<?php echo get_the_post_thumbnail_url( '', 'full' ); ?>" id="bigpic" itemprop="image" title="<?php the_title(); ?>" alt="<?php the_title(); ?>">
        <span class="span_link no-print"></span>
      <?php else:?>
        <?php echo apply_filters( 'woocommerce_single_product_image_html', sprintf( '<img src="%s" alt="%s" />', wc_placeholder_img_src(), __( 'Placeholder', 'woocommerce' ) ), $post->ID ); ?>
      <?php endif; ?>
    </span>
  </div><!-- .image-block -->

  <div id="views_block" class="clearfix views-block-style">

    <div id="thumbs_list">
      <div id="thumbs_list_frame" class="owlCarousel">
        <?php if ( has_post_thumbnail()) : ?>
          <div id="thumbnail_">
           <a href="<?php echo get_the_post_thumbnail_url( '', 'full' ); ?>" data-fancybox-group="other-views" class="fancybox " data-rel="prettyPhoto[product-gallery]">
            <img src="<?php echo get_the_post_thumbnail_url( '', 'full' ); ?>" id="bigpic" itemprop="image" title="<?php the_title(); ?>" alt="<?php the_title(); ?>">
          </a>
         </div>
        <?php else:?>
        <?php endif; ?>

        <?php do_action( 'woocommerce_product_thumbnails' ); ?>
      </div>




    </div>
  </div><!-- .views_block -->




<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */
?>
    </div><!-- .col-full -->
  </div><!-- #content -->

      <div class="col-full">
      <div class="widget-footer">
        <?php if ( is_active_sidebar('widgetarea1') ) : ?>
          <?php dynamic_sidebar( 'widgetarea1' ); ?>
        <?php endif; ?>
      </div>
    </div>



  <?php do_action( 'storefront_before_footer' ); ?>

  <footer id="colophon" class="site-footer" role="contentinfo">
    <div class="col-full">

      <?php wpeFootNav(); ?>

      <?php wpeFootNavTwo(); ?>

      <?php wpeFootNavThree(); ?>

      <?php wpeFootNavFor(); ?>

      <?php
      /**
       * Functions hooked in to storefront_footer action
       *
       * @hooked storefront_footer_widgets - 10
       * @hooked storefront_credit         - 20
       */
      do_action( 'storefront_footer' ); ?>

    </div><!-- .col-full -->
  </footer><!-- #colophon -->

  <?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

  <script src="https://code.jquery.com/jquery-1.12.4.min.js" crossorigin="anonymous"></script>

  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.elevatezoom.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>

  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/home-page-sliders.js"></script>


  <!--  MAIN NAV -->
  <script>
    var h_hght = 142;
    var h_mrg = 0;
    $(function(){

      var elem = $('.my-nav');
      var top = $(this).scrollTop();

      if(top > h_hght){
        elem.css('top', h_mrg);
      }

      $(window).scroll(function(){
        top = $(this).scrollTop();

        if (top+h_mrg < h_hght) {
          elem.css('top', (h_hght-top));
        } else {
          elem.css('top', h_mrg);
        }
      });

    });
  </script>

  <script>
    function displayImage(domAAroundImgThumb, no_animation) {
    if (typeof(no_animation) == 'undefined')
      no_animation = false;
    if (domAAroundImgThumb.attr('href')) {
      var new_src = domAAroundImgThumb.attr('href').replace('thickbox', 'large');
      var new_title = domAAroundImgThumb.attr('title');
      var new_href = domAAroundImgThumb.attr('href');
      if ($('#bigpic').attr('src') != new_src) {
        $('#bigpic').attr({
          'src': new_src,
          'alt': new_title,
          'title': new_title
        }).load(function() {
          if (typeof(jqZoomEnabled) !== 'undefined' && jqZoomEnabled)
            $(this).attr('rel', new_href);
        });
      }
      $('#views_block a').removeClass('shown');
      $(domAAroundImgThumb).addClass('shown');
    }
  }


  $(document).on('mouseover', '#views_block a', function() {
    displayImage($(this));
  });



  var zoom_type = 'window';
    var zoom_fade_in = 400;
    var zoom_fade_out = 550;
    var zoom_cursor_type = 'default';
    var zoom_window_pos = 1;
    var zoom_scroll = true;
    var zoom_easing = true;
    var zoom_tint = true;
    var zoom_tint_color = '#333';
    var zoom_tint_opacity = 0.4;
    var zoom_lens_shape = 'round';
    var zoom_lens_size = 345;;

    function applyElevateZoom() {
      var src = $('.thickbox.shown').attr('href');
      var bigimage = $('.fancybox.shown').attr('href');
      $('#bigpic').elevateZoom({
        zoomType: zoom_type,
        cursor: zoom_cursor_type,
        zoomWindowFadeIn: zoom_fade_in,
        zoomWindowFadeOut: zoom_fade_out,
        zoomWindowPosition: zoom_window_pos,
        scrollZoom: zoom_scroll,
        easing: zoom_easing,
        tint: zoom_tint,
        tintColour: zoom_tint_color,
        tintOpacity: zoom_tint_opacity,
        lensShape: zoom_lens_shape,
        lensSize: zoom_lens_size,
        zoomImage: bigimage,
        borderSize: 1,
        borderColour: '#e2dfdf',
        zoomWindowWidth: 450,
        zoomWindowHeight: 450,
        zoomLevel: 0.7,
        lensBorderSize: 0
      });
    }
    $(document).ready(function() {
      applyElevateZoom();
      $('#color_to_pick_list').click(function() {
        restartElevateZoom();
      });
      $('#color_to_pick_list').hover(function() {
        restartElevateZoom();
      });
      $('#views_block a').hover(function() {
        restartElevateZoom();
      });
    });

    function restartElevateZoom() {
      $(".zoomContainer").remove();
      applyElevateZoom();
    };;


      $(document).ready(function() {

        $("#thumbs_list_frame").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            pagination : false,
            singleItem:false,
            autoPlay: false,
            items:4,
            stopOnHover: true,
            loop: true,
            rewindSpeed: 1000,
            rewindNav: true,
            animateOut: 'slideOutUp',
            animateIn: 'slideInUp'
        });
      });
  </script>




</body>
</html>


