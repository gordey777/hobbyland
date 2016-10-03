
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
      };

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


      $(function(){
      var countLi = $('.carousel_lite>ul>li').size();

      if (countLi >4) {

        $('.thumbs_nav').removeClass('thumbs_nav_hide');

        $(".carousel_lite").jCarouselLite({
            btnNext: ".next",
            btnPrev: ".prev",
            vertical: true,

            visible: 4,
            start: 0,
          });
        }
      });

  });
