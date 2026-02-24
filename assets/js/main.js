!(function($){
	"use strict";
	jQuery(document).ready(function($) {
		/* Show menu desktop/mobile */
		function bearsShowMenuType() {
			var screen_width = $(window).width();
			
			if(screen_width <= option_ob.enable_mobile){
				$('.bt-header .bt-header-desktop, .bt-header .bt-header-stick').hide();
				$('.bt-header .bt-header-mobile').show();
			}else{
				$('.bt-header .bt-header-desktop, .bt-header .bt-header-stick').show();
				$('.bt-header .bt-header-mobile').hide();
			}
		}
		bearsShowMenuType();
		
		/* Toggle menu mobile */
		function bearsToggleMenuMobile() {
			$('.bt-header .bt-header-mobile .bt-menu-toggle').on('click', function() {
				$(this).toggleClass('active');
				$('.bt-header .bt-menu-mobile').toggle('slow');
			});
		}
		bearsToggleMenuMobile();
		
		/* Toggle sub menu vertical */
		function bearsToggleSubMenuVertical() {
			var hasChildren = $('.bt-header .bt-header-mobile ul li.menu-item-has-children, .bt-header-vertical .bt-vertical-menu-wrap ul li.menu-item-has-children');
			
			hasChildren.each( function() {
				var $btnToggle = $('<span class="bt-icon-toggle"></span>');
				$( this ).append($btnToggle);
				$btnToggle.on( 'click', function(e) {
					e.preventDefault();
					$( this ).toggleClass('active');
					$( this ).parent().children('ul').toggle('slow'); 
				} );
			} );
		}
		bearsToggleSubMenuVertical();
		
		/* Header Stick */
		function bearsHeaderStick() {
			if($( '.bt-header' ).hasClass( 'bt-stick' )) {
				var h_menu = $('.bt-header .bt-header-desktop .bt-subheader.bt-bottom'),
					h_menu_info = {top: h_menu.offset().top, height: h_menu.innerHeight()};
				
				if ($(window).scrollTop() > (h_menu_info.top + h_menu_info.height)){
					$( '.bt-header .bt-header-stick' ).addClass('active');
				}
				if($(window).scrollTop() < (h_menu_info.top + h_menu_info.height + 90)){
					$( '.bt-header .bt-header-stick' ).removeClass('active');
				}
				
			}
			
			
		}
		bearsHeaderStick();
		
		/* Menu Canvas */
		function bearsMenuCanvas() {
			$('.bt-header .bt-menu-canvas-toggle').on('click', function() {
				$('#bt_menu_canvas').toggleClass('active');
			});
			$('#bt_menu_canvas').on('click', function() {
				$('#bt_menu_canvas').toggleClass('active');
			});
		}
		bearsMenuCanvas();
		
		/* Header Vertical */
		function bearsHeaderVertical() {
			var w_screen = parseInt(window.innerWidth),
				w_main,
				e_hvertical = $('.header-vertical .bt-header-vertical'),
				e_main = $('.header-vertical .bt-titlebar, .header-vertical .bt-main-content, .header-vertical .bt-footer'),
				h_screen = parseInt(window.innerHeight),
				h_menu,
				e_menu = $('.bt-header-vertical .bt-header-inner .bt-vertical-menu-wrap');
			
			/* width header */
			if(w_screen > option_ob.enable_mobile){
				if(w_screen > option_ob.hvertical_width){
					w_main = w_screen - parseInt(option_ob.hvertical_width);
					e_hvertical.css("width", option_ob.hvertical_width);
					e_main.css("width", w_main);
				}else{
					w_main = w_screen - 320;
					e_hvertical.css("width", "320px");
					e_main.css("width", w_main);
				}
			}
			
			/* height menu */
			if(option_ob.hvertical_full_height){
				if(h_screen > 900){
					h_menu = parseInt(option_ob.hvertical_menu_height) + (h_screen - 900);
					e_menu.css("height", h_menu);
				}else{
					h_menu = parseInt(option_ob.hvertical_menu_height) - (900 - h_screen);
					e_menu.css("height", h_menu);
				}
			}
		}
		bearsHeaderVertical();
		
		/* Toggle Header Vertical Mobile */
		function bearsToggleHeaderVerticalMobile() {
			$('.header-vertical .bt-menu-toggle').on('click', function() {
				$('.header-vertical  .bt-header-vertical').toggleClass('active');
				$(this).toggleClass('active');
			});
		}
		bearsToggleHeaderVerticalMobile();
		
		/* Header Mini Vertical */
		function bearsHeaderMiniVertical() {
			$('.header-minivertical .bt-header-minivertical .bt-header-desktop .bt-menu-toggle').on('click', function() {
				$('.header-minivertical .bt-header-minivertical').toggleClass('active');
				$(this).toggleClass('active');
			});
		}
		bearsHeaderMiniVertical();
		
		/* Easy Scroll */
		function bearsEasingScroll() {
			var $root = $('html, body');
			$('.bt-easing-scroll, .header-onepage .bt-header .bt-header-desktop .bt-bottom ul.menu > li > a,.header-onepage .bt-header .bt-header-stick .bt-menu-desktop ul.menu > li > a, .bt-header-onepage .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > a, .bt-header-onepage .bt-menu-list ul > li > a').on('click', function() {
				var href = $.attr(this, 'href');
				$root.animate({
					scrollTop: $(href).offset().top
				}, 700, function() {
					window.location.hash = href;
				});
				return false;
			});
		}
		bearsEasingScroll();
		
		/* Active Menu Item Scroll  */
		function bearsActiveMenuItemScroll() {
			var scroll_pos = $(window).scrollTop() + 1;
			var sec_attr = [];
 
			$('.header-onepage .vc_section, .header-onepagescroll .vc_section').each(function(){
				sec_attr.push([$(this).attr('id'), $(this).offset().top]);
			});

			$.each(sec_attr, function( index, value ) {
				if(scroll_pos >= value[1] && scroll_pos < value[1] + $('#' + value[0]).innerHeight()){
					$('.header-onepage .bt-header .bt-header-desktop .bt-bottom ul.menu > li, .header-onepage .bt-header .bt-header-stick .bt-menu-desktop ul.menu > li, .bt-header-onepage .bt-menu-list ul > li').removeClass('current-menu-item');
					$('.header-onepage .bt-header .bt-header-desktop .bt-bottom ul.menu > li > a[href="#' + value[0] +'"], .header-onepage .bt-header .bt-header-stick .bt-menu-desktop ul.menu > li > a[href="#' + value[0] +'"], .bt-header-onepage .bt-menu-list ul > li > a[href="#' + value[0] +'"]').parent().addClass('current-menu-item');
				}
			});
		}
		bearsActiveMenuItemScroll();
		
		/* Footer Stick */
		function bearsFooterStick() {
			if($( '.bt-footer' ).hasClass( 'bt-stick' )) {
				var h_footer = $('.bt-footer').innerHeight();
				$('#bt-main .bt-header').css({"position": "relative", "z-index": "999"});
				$('#bt-main .bt-titlebar').css({"position": "relative", "z-index": "3"});
				$('#bt-main .bt-main-content').css({"position": "relative", "background": "#ffffff", "z-index": "3", "margin-bottom": h_footer});
			}
			
			
		}
		bearsFooterStick();
		
		/* Nice Scroll Bar */
		function bearsNiceScrollBar() {
			if(option_ob.nice_scroll_bar && option_ob.nice_scroll_bar_element){
				$(option_ob.nice_scroll_bar_element).niceScroll({
					cursorcolor:"#4d4d4d",
					cursorborder:"0px",
					cursorwidth:"7px",
				});
			}
		}
		bearsNiceScrollBar()
		
		/* Masonry */
		function bearsMasonry() {
			if($('.bt-grid-masonry').length > 0) {
				$('.bt-grid-masonry .row').isotope({
					// options
				});
			}
		}
		bearsMasonry();
		
		/* Callback function when resize screen */
		$(window).on('resize', function() {
			bearsShowMenuType();
			bearsActiveMenuItemScroll();
			bearsMasonry();
			bearsHeaderVertical();
		});
		
		$(window).on('scroll', function() {
			bearsHeaderStick();
			bearsActiveMenuItemScroll();
			bearsMasonry();
		});
		
		/* Compatible Ess Grid and VC Animation */
		$('body').on('click', '.esg-filterbutton', function() {
			setTimeout(function(){
				$(window).trigger('resize');
			}, 500);
		});
		
		/* Open the hide menu bar toggle */
		function bearsOpenMenuBarToggle() {
			$('.bt-menu-bar-toggle > a').on('click', function(e) {
				e.preventDefault();
				if($('.bt-mini-search .bt-search-form, .bt-mini-search > a').hasClass('active')){
					$('.bt-mini-search .bt-search-form, .bt-mini-search > a').removeClass('active');
				}
				if($('.bt-mini-cart .bt-cart-content, .bt-mini-cart > a').hasClass('active')){
					$('.bt-mini-cart .bt-cart-content, .bt-mini-cart > a').removeClass('active');
				}
				$(this).toggleClass('active');
				$('.bt-menu-bar-toggle .bt-menu-desktop').toggleClass('active');
			});
		}
		bearsOpenMenuBarToggle();
		
		/* Open the hide mini search */
		function bearsOpenMiniSearchSidebar() {
			$('.bt-mini-search > a').on('click', function(e) {
				e.preventDefault();
				if($('.bt-menu-bar-toggle > a').hasClass('active')){
					$('.bt-menu-bar-toggle .bt-menu-desktop, .bt-menu-bar-toggle > a').removeClass('active');
				}
				if($('.bt-mini-cart .bt-cart-content, .bt-mini-cart > a').hasClass('active')){
					$('.bt-mini-cart .bt-cart-content, .bt-mini-cart > a').removeClass('active');
				}
				$(this).toggleClass('active');
				$('.bt-mini-search .bt-search-form').toggleClass('active');
			});
		}
		bearsOpenMiniSearchSidebar();
		
		/* Open the hide mini cart */
		function bearsOpenMiniCartSidebar() {
			$('.bt-mini-cart > a').on('click', function(e) {
				e.preventDefault();
				if($('.bt-mini-search .bt-search-form, .bt-mini-search > a').hasClass('active')){
					$('.bt-mini-search .bt-search-form, .bt-mini-search > a').removeClass('active');
				}
				$(this).toggleClass('active');
				$('.bt-mini-cart .bt-cart-content').toggleClass('active');
			});
		}
		bearsOpenMiniCartSidebar();
		
        /* Plus Qty */
        $(document).on('click', '.qty-plus', function() {
            var parent = $(this).parent();
            $('input.qty', parent).val( parseInt($('input.qty', parent).val()) + 1);
			$('input.qty', parent).trigger('change');
        });
        /* Minus Qty */
        $(document).on('click', '.qty-minus', function() {
            var parent = $(this).parent();
            if( parseInt($('input.qty', parent).val()) > 1) {
                $('input.qty', parent).val( parseInt($('input.qty', parent).val()) - 1);
				$('input.qty', parent).trigger('change');
            }
        });
	});
})(jQuery);