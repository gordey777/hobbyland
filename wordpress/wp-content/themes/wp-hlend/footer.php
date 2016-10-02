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
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.js"></script>
<!--   <script src="<?php echo get_template_directory_uri(); ?>/assets/js/home-page-sliders.js"></script> -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.elevatezoom.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.jcarousellite.js"></script>


  <script >
  $(document).ready(function() {

    $("#owl-product-slider").owlCarousel({
        items: 1,
        loop: true,
        margin: 10,
        smartSpeed:2000,
        autoplay: true,
        autoplayTimeout: 2500,
        autoplayHoverPause: true,
        dots: true,

    });



    $("#owl-brand-slider").owlCarousel({
        items: 6,
        loop: true,
        margin: 10,
        smartSpeed:1400,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        dots: false,
    });
  });
  </script>


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

  $(document).ready(function() {

    $('#bigpic').elevateZoom({
          zoomType: 'window',
          cursor: 'default',
          zoomWindowFadeIn: 400,
          zoomWindowFadeOut: 550,
          zoomWindowPosition: 1,
          scrollZoom: true,
          easing: true,
          tint: true,
          tintColour: '#000',
          tintOpacity: 0.4,
          lensShape: 'round',
          lensSize: 400,
          //zoomImage: bigimage,
          borderSize: 1,
          borderColour: '#e2dfdf',
          zoomWindowWidth: 400,
          zoomWindowHeight: 400,
          zoomLevel: 0.7,
          lensBorderSize: 0
        });

      function applyElevateZoom() {
        var src = $('.thickbox.shown').attr('href');
        var bigimage = $('.fancybox.shown').attr('href');
        $('#bigpic').elevateZoom({
          zoomType: 'window',
          cursor: 'default',
          zoomWindowFadeIn: 400,
          zoomWindowFadeOut: 550,
          zoomWindowPosition: 1,
          scrollZoom: true,
          easing: true,
          tint: true,
          tintColour: '#000',
          tintOpacity: 0.4,
          lensShape: 'round',
          lensSize: 400,
          zoomImage: bigimage,
          borderSize: 1,
          borderColour: '#e2dfdf',
          zoomWindowWidth: 400,
          zoomWindowHeight: 400,
          zoomLevel: 0.7,
          lensBorderSize: 0
        });
      }
      $(document).on('mouseover', '#views_block a', function() {
        displayImage($(this));
      });

      $('#views_block a').hover(function() {
        restartElevateZoom();
      });

      function restartElevateZoom() {
        $(".zoomContainer").remove();
        applyElevateZoom();
      };;
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




    $(function() {
        $(".carousel_lite").jCarouselLite({
            btnNext: ".next",
            btnPrev: ".prev",
            vertical: true,

            visible: 4,
            start: 0,
        });
    });

  });




  </script>




</body>
</html>


