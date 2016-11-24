/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$( document ).on( "mobileinit", function() {
    $.mobile.loading( "hide" );
});

$( document ).on( "pageinit", function( event ) {
  //alert( "This page was just enhanced by jQuery Mobile!" );
  $.mobile.loading().hide();
});

$(window).on("load", function() {
    // Animate loader off screen
    $("#header-section").fadeIn(1000);
    $(".se-pre-con").fadeOut(1000);
    $(".container").fadeIn(2000);
    $(".footer").fadeIn(2000);
    
    // $('.contact-toolbar').fadeIn("slow");
    // show contact toolbar
    
    // Init Stellar   
    $.stellar({
        horizontalScrolling:false,
        responsive: true
        // rest of function
    });
    
    // all links except the links on the same page
    $("a:not([href*=#])").on("click", function(ev) {
        ev.preventDefault();
        window.location.href = $(this).attr("href");
    });
    
    // reflections
    var $cards = $('.card');
    $.each($cards, function() {
        var $element = $(this);
        $element.reflect({
            height: 0.5,
            opacity: 0.2
        });
    });
    
    /* fade-in */
    var $animation_elements = $('.animation-element');
    var $window = $(window);

    function check_if_in_view() {
        var window_height = $window.height();
        var window_top_position = $window.scrollTop();
        var window_bottom_position = (window_top_position + window_height);

        $.each($animation_elements, function() {
            var $element = $(this);
            var element_height = $element.outerHeight();
            var element_top_position = $element.offset().top;
            var element_bottom_position = (element_top_position + element_height);

            //check to see if this current container is within viewport
            if ((element_bottom_position >= (window_top_position + 100)) &&
                (element_top_position <= window_bottom_position - 50)) {
                $element.addClass('in-view');
            } else {
                $element.removeClass('in-view');
            }
        });
    }

    $window.on('scroll resize', check_if_in_view);
    $window.trigger('scroll');
});