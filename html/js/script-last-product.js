function applyElevateZoom(){var o=($(".thickbox.shown").attr("href"),$(".fancybox.shown").attr("href"));$("#bigpic").elevateZoom({zoomType:zoom_type,cursor:zoom_cursor_type,zoomWindowFadeIn:zoom_fade_in,zoomWindowFadeOut:zoom_fade_out,zoomWindowPosition:zoom_window_pos,scrollZoom:zoom_scroll,easing:zoom_easing,tint:zoom_tint,tintColour:zoom_tint_color,tintOpacity:zoom_tint_opacity,lensShape:zoom_lens_shape,lensSize:zoom_lens_size,zoomImage:o,borderSize:1,borderColour:"#e2dfdf",zoomWindowWidth:450,zoomWindowHeight:450,zoomLevel:.7,lensBorderSize:0})}function restartElevateZoom(){$(".zoomContainer").remove(),applyElevateZoom()}var zoom_type="window",zoom_fade_in=400,zoom_fade_out=550,zoom_cursor_type="default",zoom_window_pos=1,zoom_scroll=!0,zoom_easing=!0,zoom_tint=!0,zoom_tint_color="#333",zoom_tint_opacity=.4,zoom_lens_shape="round",zoom_lens_size=345;$(document).ready(function(){applyElevateZoom(),$("#color_to_pick_list").click(function(){restartElevateZoom()}),$("#color_to_pick_list").hover(function(){restartElevateZoom()}),$("#views_block li a").hover(function(){restartElevateZoom()})});var $input=$("#search_query_top"),width_ac_results=$input.parent("form").width();$("document").ready(function(){$("#search_query_top").autocomplete("",{minChars:3,max:10,width:width_ac_results>0?width_ac_results:500,selectFirst:!1,scroll:!0,dataType:"json",formatItem:function(o,e,t,a,r){return a},parse:function(o){for(var e=new Array,t=0;t<o.length;t++)e[e.length]={data:o[t],value:'<img alt="'+o[t].pname+'" src="'+o[t].image+'"><div class="right-search"><h5>'+o[t].pname+'</h5><span class="price">'+o[t].dprice+"</span></div> "};return e},extraParams:{ajaxSearch:1,id_lang:1,category_filter:$("#category_filter").val()}}).result(function(o,e,t){$("#search_query_top").val(e.pname),document.location.href=e.product_link}),$("#category_filter").change(function(){$(".ac_results").remove(),$("#search_query_top").trigger("unautocomplete"),$("#search_query_top").autocomplete("",{minChars:3,max:10,width:width_ac_results>0?width_ac_results:500,selectFirst:!1,scroll:!0,dataType:"json",formatItem:function(o,e,t,a,r){return a},parse:function(o){for(var e=new Array,t=0;t<o.length;t++)e[e.length]={data:o[t],value:'<img alt="'+o[t].pname+'" src="'+o[t].image+'"><div class="right-search"><h5>'+o[t].pname+'</h5><span class="price">'+o[t].dprice+"</span></div> "};return e},extraParams:{ajaxSearch:1,id_lang:1,category_filter:$("#category_filter").val()}}).result(function(o,e,t){$("#search_query_top").val(e.pname),document.location.href=e.product_link})})}),$("#search_query_top").on("focus",function(){var o=$(this);"Search..."==o.val()&&(o.val(""),$(".btn.button-search").addClass("active"))}).on("blur",function(){var o=$(this);""==o.val()&&(o.val("Search..."),$(".btn.button-search").removeClass("active"))}),$("#click_show_searchbox").click(function(o){$("#searchbox").toggle(),$("#searchbox").is(":visible")?$("#click_show_searchbox").addClass("click_hide"):$("#click_show_searchbox").removeClass("click_hide")}),$(document).click(function(o){$(o.target).closest("#searchbox,#click_show_searchbox,.ac_results").length||($("#searchbox").hide(),$("#click_show_searchbox").removeClass("click_hide"))}),$("#productCates").owlCarousel({itemsCustom:[[0,1],[320,1],[480,1],[768,3],[992,4],[1200,5]],responsiveRefreshRate:50,slideSpeed:200,paginationSpeed:500,rewindSpeed:600,autoPlay:!1,stopOnHover:!1,rewindNav:!0,pagination:!1,navigation:!0,navigationText:['<div class="carousel-previous disable-select"><span class="icon-chevron-left"></span></div>','<div class="carousel-next disable-select"><span class="icon-chevron-right"></span></div>']});
//# sourceMappingURL=maps/script-last-product.js.map
