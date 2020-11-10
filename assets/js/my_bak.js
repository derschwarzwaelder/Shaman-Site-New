jQuery(document).ready(function() {
        
            jQuery('html').addClass('js'); 
        
         var navToggle = ['<div id="toggle-nav"><span class="icon-bars"></span></div>'].join("");  
         jQuery(".site-header").prepend(navToggle) 
      });

      jQuery(function() { 
        var pull        = jQuery('#toggle-nav');  
          menu      = jQuery('.site-nav'); 
          menuHeight    = menu.height();

        jQuery(pull).on('click', function(e) { 
          e.preventDefault();
          menu.slideToggle();
        });

        jQuery(window).resize(function(){
          var w = jQuery(window).width();
          if(w > 650 && menu.is(':hidden')) { 
              menu.removeAttr('style'); 
          }
        });
      });