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

          <div class="col-full">
      <div class="widget-footer">
        <?php if ( is_active_sidebar('widgetarea2') ) : ?>
          <?php dynamic_sidebar( 'widgetarea2' ); ?>
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



</body>
</html>
