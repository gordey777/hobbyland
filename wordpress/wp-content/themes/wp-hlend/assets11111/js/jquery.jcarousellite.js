!function(t){t.jCarouselLite={version:"1.1"},t.fn.jCarouselLite=function(e){return e=t.extend({},t.fn.jCarouselLite.options,e||{}),this.each(function(){function n(t){return v||(clearTimeout(z),L=t,e.beforeStart&&e.beforeStart.call(this,c()),e.circular?a(t):u(t),d({start:function(){v=!0},done:function(){e.afterEnd&&e.afterEnd.call(this,c()),e.auto&&r(),v=!1}}),e.circular||f()),!1}function i(){if(v=!1,b=e.vertical?"top":"left",h=e.vertical?"height":"width",p=T.find(">ul"),g=p.find(">li"),N=g.size(),w=N<e.visible?N:e.visible,e.circular){var n=g.slice(N-w).clone(),i=g.slice(0,w).clone();p.prepend(n).append(i),e.start+=w}x=t("li",p),j=x.size(),L=e.start}function l(){T.css("visibility","visible"),x.css({overflow:"hidden","float":e.vertical?"none":"left"}),p.css({margin:"0",padding:"0",position:"relative","list-style":"none","z-index":"1"}),T.css({overflow:"hidden",position:"relative","z-index":"2",left:"0px"}),!e.circular&&e.btnPrev&&0==e.start&&t(e.btnPrev).addClass("disabled")}function o(){m=e.vertical?x.outerHeight(!0):x.outerWidth(!0),P=m*j,C=m*w,x.css({width:x.width(),height:x.height()}),p.css(h,P+"px").css(b,-(L*m)),T.css(h,C+"px")}function s(){e.btnPrev&&t(e.btnPrev).click(function(){return n(L-e.scroll)}),e.btnNext&&t(e.btnNext).click(function(){return n(L+e.scroll)}),e.btnGo&&t.each(e.btnGo,function(i,l){t(l).click(function(){return n(e.circular?w+i:i)})}),e.mouseWheel&&T.mousewheel&&T.mousewheel(function(t,i){return n(i>0?L-e.scroll:L+e.scroll)}),e.auto&&r()}function r(){z=setTimeout(function(){n(L+e.scroll)},e.auto)}function c(){return x.slice(L).slice(0,w)}function a(t){var n;t<=e.start-w-1?(n=t+N+e.scroll,p.css(b,-(n*m)+"px"),L=n-e.scroll,console.log("Before - Positioned at: "+n+" and Moving to: "+L)):t>=j-w+1&&(n=t-N-e.scroll,p.css(b,-(n*m)+"px"),L=n+e.scroll,console.log("After - Positioned at: "+n+" and Moving to: "+L))}function u(t){t<0?L=0:t>j-w&&(L=j-w),console.log("Item Length: "+j+"; To: "+t+"; CalculatedTo: "+L+"; Num Visible: "+w)}function f(){t(e.btnPrev+","+e.btnNext).removeClass("disabled"),t(L-e.scroll<0&&e.btnPrev||L+e.scroll>j-w&&e.btnNext||[]).addClass("disabled")}function d(n){v=!0,p.animate("left"==b?{left:-(L*m)}:{top:-(L*m)},t.extend({duration:e.speed,easing:e.easing},n))}var v,b,h,p,g,x,m,P,C,w,N,j,L,z,T=t(this);i(),l(),o(),s()})},t.fn.jCarouselLite.options={btnPrev:null,btnNext:null,btnGo:null,mouseWheel:!1,auto:null,speed:200,easing:null,vertical:!1,circular:!0,visible:3,start:0,scroll:1,beforeStart:null,afterEnd:null}}(jQuery);
//# sourceMappingURL=maps/jquery.jcarousellite.js.map