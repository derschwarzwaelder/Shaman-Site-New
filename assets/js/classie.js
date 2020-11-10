!function(s){"use strict";function e(s){return new RegExp("(^|\\s+)"+s+"(\\s+|$)")}function n(s,e){var n=a(s,e)?c:t;n(s,e)}var a,t,c;"classList"in document.documentElement?(a=function(s,e){return s.classList.contains(e)},t=function(s,e){s.classList.add(e)},c=function(s,e){s.classList.remove(e)}):(a=function(s,n){return e(n).test(s.className)},t=function(s,e){a(s,e)||(s.className=s.className+" "+e)},c=function(s,n){s.className=s.className.replace(e(n)," ")});var i={hasClass:a,addClass:t,removeClass:c,toggleClass:n,has:a,add:t,remove:c,toggle:n};"function"==typeof define&&define.amd?define(i):s.classie=i}(window);
function toggleOverlay(){var e=document.querySelector("body");e.classList.toggle("hide-overlay")}
!function(){function n(){if(classie.has(t,"open")){classie.remove(t,"open"),classie.add(t,"close");var n=function(e){if(support.transitions){if("visibility"!==e.propertyName)return;this.removeEventListener(transEndEventName,n)}classie.remove(t,"close")};support.transitions?t.addEventListener(transEndEventName,n):n()}else classie.has(t,"close")||classie.add(t,"open")}var e=document.getElementById("trigger-overlay"),t=document.querySelector("div.overlay"),i=t.querySelector("button.overlay-close");transEndEventNames={WebkitTransition:"webkitTransitionEnd",MozTransition:"transitionend",OTransition:"oTransitionEnd",msTransition:"MSTransitionEnd",transition:"transitionend"},transEndEventName=transEndEventNames[Modernizr.prefixed("transition")],support={transitions:Modernizr.csstransitions},e.addEventListener("click",n),i.addEventListener("click",n)}();
!function(e,t){"function"==typeof define&&define.amd?define(["jquery"],t):t("object"==typeof exports?require("jquery"):e.jQuery)}(this,function(e){"use strict";function t(e){var t,o,i,r,n,s,a,p={};for(n=e.replace(/\s*:\s*/g,":").replace(/\s*,\s*/g,",").split(","),a=0,s=n.length;a<s&&(o=n[a],o.search(/^(http|https|ftp):\/\//)===-1&&o.search(":")!==-1);a++)t=o.indexOf(":"),i=o.substring(0,t),r=o.substring(t+1),r||(r=void 0),"string"==typeof r&&(r="true"===r||"false"!==r&&r),"string"==typeof r&&(r=isNaN(r)?r:+r),p[i]=r;return null==i&&null==r?e:p}function o(e){e=""+e;var t,o,i,r=e.split(/\s+/),n="50%",s="50%";for(i=0,t=r.length;i<t;i++)o=r[i],"left"===o?n="0%":"right"===o?n="100%":"top"===o?s="0%":"bottom"===o?s="100%":"center"===o?0===i?n="50%":s="50%":0===i?n=o:s=o;return{x:n,y:s}}function i(t,o){var i=function(){o(this.src)};e('<img src="'+t+'.gif">').on("load",i),e('<img src="'+t+'.jpg">').on("load",i),e('<img src="'+t+'.jpeg">').on("load",i),e('<img src="'+t+'.png">').on("load",i)}function r(o,i,r){if(this.$element=e(o),"string"==typeof i&&(i=t(i)),r?"string"==typeof r&&(r=t(r)):r={},"string"==typeof i)i=i.replace(/\.\w*$/,"");else if("object"==typeof i)for(var n in i)i.hasOwnProperty(n)&&(i[n]=i[n].replace(/\.\w*$/,""));this.settings=e.extend({},s,r),this.path=i;try{this.init()}catch(p){if(p.message!==a)throw p}}var n="vide",s={volume:1,playbackRate:1,muted:!0,loop:!0,autoplay:!0,position:"50% 50%",posterType:"detect",resizing:!0,bgColor:"transparent",className:""},a="Not implemented";r.prototype.init=function(){var t,r,n=this,s=n.path,p=s,c="",d=n.$element,u=n.settings,l=o(u.position),g=u.posterType;r=n.$wrapper=e("<div>").addClass(u.className).css({position:"absolute","z-index":-1,top:0,left:0,bottom:0,right:0,overflow:"hidden","-webkit-background-size":"cover","-moz-background-size":"cover","-o-background-size":"cover","background-size":"cover","background-color":u.bgColor,"background-repeat":"no-repeat","background-position":l.x+" "+l.y}),"object"==typeof s&&(s.poster?p=s.poster:s.mp4?p=s.mp4:s.webm?p=s.webm:s.ogv&&(p=s.ogv)),"detect"===g?i(p,function(e){r.css("background-image","url("+e+")")}):"none"!==g&&r.css("background-image","url("+p+"."+g+")"),"static"===d.css("position")&&d.css("position","relative"),d.prepend(r),"object"==typeof s?(s.mp4&&(c+='<source src="'+s.mp4+'.mp4" type="video/mp4">'),s.webm&&(c+='<source src="'+s.webm+'.webm" type="video/webm">'),s.ogv&&(c+='<source src="'+s.ogv+'.ogv" type="video/ogg">'),t=n.$video=e("<video>"+c+"</video>")):t=n.$video=e('<video><source src="'+s+'.mp4" type="video/mp4"><source src="'+s+'.webm" type="video/webm"><source src="'+s+'.ogv" type="video/ogg"></video>');try{t.prop({autoplay:u.autoplay,loop:u.loop,volume:u.volume,muted:u.muted,defaultMuted:u.muted,playbackRate:u.playbackRate,defaultPlaybackRate:u.playbackRate})}catch(f){throw new Error(a)}t.css({margin:"auto",position:"absolute","z-index":-1,top:l.y,left:l.x,"-webkit-transform":"translate(-"+l.x+", -"+l.y+")","-ms-transform":"translate(-"+l.x+", -"+l.y+")","-moz-transform":"translate(-"+l.x+", -"+l.y+")",transform:"translate(-"+l.x+", -"+l.y+")",visibility:"hidden",opacity:0}).one("canplaythrough.vide",function(){n.resize()}).one("playing.vide",function(){t.css({visibility:"visible",opacity:1}),r.css("background-image","none")}),d.on("resize.vide",function(){u.resizing&&n.resize()}),r.append(t)},r.prototype.getVideoObject=function(){return this.$video[0]},r.prototype.resize=function(){if(this.$video){var e=this.$wrapper,t=this.$video,o=t[0],i=o.videoHeight,r=o.videoWidth,n=e.height(),s=e.width();s/r>n/i?t.css({width:s+2,height:"auto"}):t.css({width:"auto",height:n+2})}},r.prototype.destroy=function(){delete e[n].lookup[this.index],this.$video&&this.$video.off(n),this.$element.off(n).removeData(n),this.$wrapper.remove()},e[n]={lookup:[]},e.fn[n]=function(t,o){var i;return this.each(function(){i=e.data(this,n),i&&i.destroy(),i=new r(this,t,o),i.index=e[n].lookup.push(i)-1,e.data(this,n,i)}),this},e(document).ready(function(){var t=e(window);t.on("resize.vide",function(){for(var t,o=e[n].lookup.length,i=0;i<o;i++)t=e[n].lookup[i],t&&t.settings.resizing&&t.resize()}),t.on("unload.vide",function(){return!1}),e(document).find("[data-vide-bg]").each(function(t,o){var i=e(o),r=i.data("vide-options"),s=i.data("vide-bg");i[n](s,r)})})});