var gapi=window.gapi=window.gapi||{};gapi._bs=(new Date).getTime(),function(){var e,o=window,t=document,i=o.location,r=function(){},s=/\[native code\]/,a=function(e,o,t){return e[o]=e[o]||t},n=function(e){for(var o=0;o<this.length;o++)if(this[o]===e)return o;return-1},l=function(e){e=e.sort();for(var o=[],t=void 0,i=0;i<e.length;i++){var r=e[i];r!=t&&o.push(r),t=r}return o},c=function(){var e;if((e=Object.create)&&s.test(e))e=e(null);else{e={};for(var o in e)e[o]=void 0}return e},p=a(o,"gapi",{});e=a(o,"___jsl",c()),a(e,"I",0),a(e,"hel",10);var u=function(){var o,t=i.href;if(e.dpo)o=e.h;else{o=e.h;var r=RegExp("([#].*&|[#])jsh=([^&#]*)","g"),s=RegExp("([?#].*&|[?#])jsh=([^&#]*)","g");if(t=t&&(r.exec(t)||s.exec(t)))try{o=decodeURIComponent(t[2])}catch(a){}}return o},g=function(o){var t=a(e,"PQ",[]);e.PQ=[];var i=t.length;if(0===i)o();else for(var r=0,s=function(){++r===i&&o()},n=0;i>n;n++)t[n](s)},d=function(o){return a(a(e,"H",c()),o,c())},h=a(e,"perf",c()),f=a(h,"g",c()),m=a(h,"i",c());a(h,"r",[]),c(),c();var _=function(e,o,t){var i=h.r;"function"==typeof i?i(e,o,t):i.push([e,o,t])},b=function(e,o,t){o&&0<o.length&&(o=w(o),t&&0<t.length&&(o+="___"+w(t)),28<o.length&&(o=o.substr(0,28)+(o.length-28)),t=o,o=a(m,"_p",c()),a(o,t,c())[e]=(new Date).getTime(),_(e,"_p",t))},w=function(e){return e.join("__").replace(/\./g,"_").replace(/\-/g,"_").replace(/\,/g,"_")},v=c(),y=[],C=function(e){throw Error("Bad hint"+(e?": "+e:""))};y.push(["jsl",function(o){for(var t in o)if(Object.prototype.hasOwnProperty.call(o,t)){var i=o[t];"object"==typeof i?e[t]=a(e,t,[]).concat(i):a(e,t,i)}(t=o.u)&&(o=a(e,"us",[]),o.push(t),(t=/^https:(.*)$/.exec(t))&&o.push("http:"+t[1]))}]);var X=/^(\/[a-zA-Z0-9_\-]+)+$/,x=/^[a-zA-Z0-9\-_\.,!]+$/,G=/^gapi\.loaded_[0-9]+$/,U=/^[a-zA-Z0-9,._-]+$/,T=function(e,o,t,i){var r=e.split(";"),s=r.shift(),a=v[s],n=null;return a?n=a(r,o,t,i):C("no hint processor for: "+s),n||C("failed to generate load url"),o=n,t=o.match(P),(i=o.match(E))&&1===i.length&&j.test(o)&&t&&1===t.length||C("failed sanity: "+e),n},k=function(e,o,t,i){e=R(e),G.test(t)||C("invalid_callback"),o=I(o),i=i&&i.length?I(i):null;var r=function(e){return encodeURIComponent(e).replace(/%2C/g,",")};return[encodeURIComponent(e.g).replace(/%2C/g,",").replace(/%2F/g,"/"),"/k=",r(e.version),"/m=",r(o),i?"/exm="+r(i):"","/rt=j/sv=1/d=1/ed=1",e.a?"/am="+r(e.a):"",e.c?"/rs="+r(e.c):"",e.f?"/t="+r(e.f):"","/cb=",r(t)].join("")},R=function(e){"/"!==e.charAt(0)&&C("relative path");for(var o=e.substring(1).split("/"),t=[];o.length;){if(e=o.shift(),e.length&&0!=e.indexOf(".")){if(0<e.indexOf("=")){o.unshift(e);break}}else C("empty/relative directory");t.push(e)}e={};for(var i=0,r=o.length;r>i;++i){var s=o[i].split("="),a=decodeURIComponent(s[0]),n=decodeURIComponent(s[1]);2==s.length&&a&&n&&(e[a]=e[a]||n)}return o="/"+t.join("/"),X.test(o)||C("invalid_prefix"),t=D(e,"k",!0),i=D(e,"am"),r=D(e,"rs"),e=D(e,"t"),{g:o,version:t,a:i,c:r,f:e}},I=function(e){for(var o=[],t=0,i=e.length;i>t;++t){var r=e[t].replace(/\./g,"_").replace(/-/g,"_");U.test(r)&&o.push(r)}return o.join(",")},D=function(e,o,t){if(e=e[o],!e&&t&&C("missing: "+o),e){if(x.test(e))return e;C("invalid: "+o)}return null},j=/^https?:\/\/[a-z0-9_.-]+\.google\.com(:\d+)?\/[a-zA-Z0-9_.,!=\-\/]+$/,E=/\/cb=/g,P=/\/\//g,A=function(){var e=u();if(!e)throw Error("Bad hint");return e};v.m=function(e,o,t,i){return(e=e[0])||C("missing_hint"),"https://apis.google.com"+k(e,o,t,i)};var L=decodeURI("%73cript"),O=function(e,o){for(var t=[],i=0;i<e.length;++i){var r=e[i];r&&0>n.call(o,r)&&t.push(r)}return t},S=function(e){"loading"!=t.readyState?z(e):t.write("<"+L+' src="'+encodeURI(e)+'"></'+L+">")},z=function(e){var o=t.createElement(L);o.setAttribute("src",e),o.async="true",(e=t.getElementsByTagName(L)[0])?e.parentNode.insertBefore(o,e):(t.head||t.body||t.documentElement).appendChild(o)},M=function(e,o){var t=o&&o._c;if(t)for(var i=0;i<y.length;i++){var r=y[i][0],s=y[i][1];s&&Object.prototype.hasOwnProperty.call(t,r)&&s(t[r],e,o)}},V=function(e,o,t){H(function(){var t;t=o===u()?a(p,"_",c()):c(),t=a(d(o),"_",t),e(t)},t)},B=function(o,t){var i=t||{};"function"==typeof t&&(i={},i.callback=t),M(o,i);var r=o?o.split(":"):[],s=i.h||A(),n=a(e,"ah",c());if(n["::"]&&r.length){for(var l=[],p=null;p=r.shift();){var u=p.split("."),u=n[p]||n[u[1]&&"ns:"+u[0]||""]||s,g=l.length&&l[l.length-1]||null,d=g;g&&g.hint==u||(d={hint:u,b:[]},l.push(d)),d.b.push(p)}var h=l.length;if(h>1){var f=i.callback;f&&(i.callback=function(){0==--h&&f()})}for(;r=l.shift();)$(r.b,i,r.hint)}else $(r||[],i,s)},$=function(t,i,s){t=l(t)||[];var n=i.callback,c=i.config,u=i.timeout,h=i.ontimeout,f=i.onerror,m=void 0;"function"==typeof f&&(m=f);var _=null,w=!1;if(u&&!h||!u&&h)throw"Timeout requires both the timeout parameter and ontimeout parameter to be set";var f=a(d(s),"r",[]).sort(),v=a(d(s),"L",[]).sort(),y=[].concat(f),C=function(t,i){if(w)return 0;o.clearTimeout(_),v.push.apply(v,X);var r=((p||{}).config||{}).update;if(r?r(c):c&&a(e,"cu",[]).push(c),i){b("me0",t,y);try{V(i,s,m)}finally{b("me1",t,y)}}return 1};u>0&&(_=o.setTimeout(function(){w=!0,h()},u));var X=O(t,v);if(X.length){var X=O(t,f),x=a(e,"CP",[]),G=x.length;if(x[G]=function(e){if(!e)return 0;b("ml1",X,y);var o=function(o){x[G]=null,C(X,e)&&g(function(){n&&n(),o()})},t=function(){var e=x[G+1];e&&e()};G>0&&x[G-1]?x[G]=function(){o(t)}:o(t)},X.length){var U="loaded_"+e.I++;p[U]=function(e){x[G](e),p[U]=null},t=T(s,X,"gapi."+U,f),f.push.apply(f,X),b("ml0",X,y),i.sync||o.___gapisync?S(t):z(t)}else x[G](r)}else C(X)&&n&&n()},H=function(o,t){if(e.hee&&0<e.hel)try{return o()}catch(i){t&&t(i),e.hel--,B("debug_error",function(){try{window.___jsl.hefn(i)}catch(e){throw i}})}else try{return o()}catch(i){throw t&&t(i),i}};p.load=function(e,o){return H(function(){return B(e,o)})},f.bs0=window.gapi._bs||(new Date).getTime(),_("bs0"),f.bs1=(new Date).getTime(),_("bs1"),delete window.gapi._bs}(),gapi.load("rpc:shindig_random",{callback:window.init,_c:{jsl:{ci:{deviceType:"desktop","oauth-flow":{authUrl:"https://accounts.google.com/o/oauth2/auth",proxyUrl:"https://accounts.google.com/o/oauth2/postmessageRelay",disableOpt:!0,idpIframeUrl:"https://accounts.google.com/o/oauth2/iframe",usegapi:!1},debug:{reportExceptionRate:.05,forceIm:!1,rethrowException:!1,host:"https://apis.google.com"},lexps:[81,97,99,122,123,30,79,127],enableMultilogin:!0,"googleapis.config":{auth:{useFirstPartyAuthV2:!0}},isPlusUser:!0,inline:{css:1},disableRealtimeCallback:!1,drive_share:{skipInitCommand:!0},csi:{rate:.01},report:{apiRate:{"gapi\\.signin\\..*":.05,"gapi\\.signin2\\..*":.05},apis:["iframes\\..*","gadgets\\..*","gapi\\.appcirclepicker\\..*","gapi\\.auth\\..*","gapi\\.client\\..*"],rate:.001,host:"https://apis.google.com"},client:{headers:{request:["Accept","Accept-Language","Authorization","Cache-Control","Content-Disposition","Content-Encoding","Content-Language","Content-Length","Content-MD5","Content-Range","Content-Type","Date","GData-Version","Host","If-Match","If-Modified-Since","If-None-Match","If-Unmodified-Since","Origin","OriginToken","Pragma","Range","Slug","Transfer-Encoding","Want-Digest","X-ClientDetails","X-GData-Client","X-GData-Key","X-Goog-AuthUser","X-Goog-PageId","X-Goog-Encode-Response-If-Executable","X-Goog-Correlation-Id","X-Goog-Request-Info","X-Goog-Experiments","x-goog-iam-authority-selector","x-goog-iam-authorization-token","X-Goog-Spatula","X-Goog-Upload-Command","X-Goog-Upload-Content-Disposition","X-Goog-Upload-Content-Length","X-Goog-Upload-Content-Type","X-Goog-Upload-File-Name","X-Goog-Upload-Offset","X-Goog-Upload-Protocol","X-Goog-Visitor-Id","X-HTTP-Method-Override","X-JavaScript-User-Agent","X-Pan-Versionid","X-Origin","X-Referer","X-Upload-Content-Length","X-Upload-Content-Type","X-Use-HTTP-Status-Code-Override","X-Ios-Bundle-Identifier","X-Android-Package","X-YouTube-VVT","X-YouTube-Page-CL","X-YouTube-Page-Timestamp"],response:["Digest","Cache-Control","Content-Disposition","Content-Encoding","Content-Language","Content-Length","Content-MD5","Content-Range","Content-Type","Date","ETag","Expires","Last-Modified","Location","Pragma","Range","Server","Transfer-Encoding","WWW-Authenticate","Vary","Unzipped-Content-MD5","X-Goog-Generation","X-Goog-Metageneration","X-Goog-Safety-Content-Type","X-Goog-Safety-Encoding","X-Google-Trace","X-Goog-Upload-Chunk-Granularity","X-Goog-Upload-Control-URL","X-Goog-Upload-Size-Received","X-Goog-Upload-Status","X-Goog-Upload-URL","X-Goog-Diff-Download-Range","X-Goog-Hash","X-Goog-Updated-Authorization","X-Server-Object-Version","X-Guploader-Customer","X-Guploader-Upload-Result","X-Guploader-Uploadid","X-Google-Gfe-Backend-Request-Cost"]},rms:"migrated",cors:!1},isLoggedIn:!0,signInDeprecation:{rate:0},include_granted_scopes:!0,llang:"uk",plus_layer:{isEnabled:!1},iframes:{youtube:{params:{location:["search","hash"]},url:":socialhost:/:session_prefix:_/widget/render/youtube?usegapi=1",methods:["scroll","openwindow"]},ytsubscribe:{url:"https://www.youtube.com/subscribe_embed?usegapi=1"},plus_circle:{params:{url:""},url:":socialhost:/:session_prefix::se:_/widget/plus/circle?usegapi=1"},plus_share:{params:{url:""},url:":socialhost:/:session_prefix::se:_/+1/sharebutton?plusShare=true&usegapi=1"},rbr_s:{params:{url:""},url:":socialhost:/:session_prefix::se:_/widget/render/recobarsimplescroller"},udc_webconsentflow:{params:{url:""},url:"https://www.google.com/settings/webconsent?usegapi=1"},":source:":"3p",blogger:{params:{location:["search","hash"]},url:":socialhost:/:session_prefix:_/widget/render/blogger?usegapi=1",methods:["scroll","openwindow"]},evwidget:{params:{url:""},url:":socialhost:/:session_prefix:_/events/widget?usegapi=1"},partnersbadge:{url:"https://www.gstatic.com/partners/badge/templates/badge.html?usegapi=1"},":socialhost:":"https://apis.google.com",shortlists:{url:""},hangout:{url:"https://talkgadget.google.com/:session_prefix:talkgadget/_/widget"},plus_followers:{params:{url:""},url:":socialhost:/_/im/_/widget/render/plus/followers?usegapi=1"},post:{params:{url:""},url:":socialhost:/:session_prefix::im_prefix:_/widget/render/post?usegapi=1"},":gplus_url:":"https://plus.google.com",signin:{params:{url:""},url:":socialhost:/:session_prefix:_/widget/render/signin?usegapi=1",methods:["onauth"]},rbr_i:{params:{url:""},url:":socialhost:/:session_prefix::se:_/widget/render/recobarinvitation"},share:{url:":socialhost:/:session_prefix::im_prefix:_/widget/render/share?usegapi=1"},plusone:{params:{count:"",size:"",url:""},url:":socialhost:/:session_prefix::se:_/+1/fastbutton?usegapi=1"},comments:{params:{location:["search","hash"]},url:":socialhost:/:session_prefix:_/widget/render/comments?usegapi=1",methods:["scroll","openwindow"]},":im_socialhost:":"https://plus.googleapis.com",backdrop:{url:"https://clients3.google.com/cast/chromecast/home/widget/backdrop?usegapi=1"},visibility:{params:{url:""},url:":socialhost:/:session_prefix:_/widget/render/visibility?usegapi=1"},autocomplete:{params:{url:""},url:":socialhost:/:session_prefix:_/widget/render/autocomplete"},additnow:{url:"https://apis.google.com/additnow/additnow.html?usegapi=1",methods:["launchurl"]},":signuphost:":"https://plus.google.com",appcirclepicker:{url:":socialhost:/:session_prefix:_/widget/render/appcirclepicker"},follow:{url:":socialhost:/:session_prefix:_/widget/render/follow?usegapi=1"},community:{url:":ctx_socialhost:/:session_prefix::im_prefix:_/widget/render/community?usegapi=1"},sharetoclassroom:{url:"https://www.gstatic.com/classroom/sharewidget/widget_stable.html?usegapi=1"},ytshare:{params:{url:""},url:":socialhost:/:session_prefix:_/widget/render/ytshare?usegapi=1"},plus:{url:":socialhost:/:session_prefix:_/widget/render/badge?usegapi=1"},family_creation:{params:{url:""},url:"https://families.google.com/webcreation?usegapi=1"},reportabuse:{params:{url:""},url:":socialhost:/:session_prefix:_/widget/render/reportabuse?usegapi=1"},commentcount:{url:":socialhost:/:session_prefix:_/widget/render/commentcount?usegapi=1"},configurator:{url:":socialhost:/:session_prefix:_/plusbuttonconfigurator?usegapi=1"},zoomableimage:{url:"https://ssl.gstatic.com/microscope/embed/"},savetowallet:{url:"https://clients5.google.com/s2w/o/savetowallet"},person:{url:":socialhost:/:session_prefix:_/widget/render/person?usegapi=1"},savetodrive:{url:"https://drive.google.com/savetodrivebutton?usegapi=1",methods:["save"]},page:{url:":socialhost:/:session_prefix:_/widget/render/page?usegapi=1"},card:{url:":socialhost:/:session_prefix:_/hovercard/card"}}},h:"m;/_/scs/apps-static/_/js/k=oz.gapi.uk.hCgGwU1mB9w.O/m=__features__/am=AQ/rt=j/d=1/rs=AGLTcCNa7L6V5bt7vi5DP0i8SCkpvm8Msg",u:"https://apis.google.com/js/rpc:shindig_random.js?onload=init",hee:!0,fp:"b47882e68bdefb6e2d6c8fabf4729bec2ee5461b",dpo:!1},fp:"b47882e68bdefb6e2d6c8fabf4729bec2ee5461b",annotation:["interactivepost","recobar","signin2","autocomplete","profile"],bimodal:["signin","share"]}});
//# sourceMappingURL=maps/rpc-shindig_random.js.map