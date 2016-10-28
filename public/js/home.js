/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(window).on("load", function() {
    $('a[href*=#]:not([href=#])').click(function() {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.substr(1) +']');
        if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
        }
    });
});
  
  /* changing quotes on video */
$(window).on("load", function() {
    var quotes = $(".quotes");
    var quoteIndex = -1;

    function showNextQuote() {
        ++quoteIndex;
        quotes.eq(quoteIndex % quotes.length)
            .fadeIn(2000)
            .delay(2000)
            .fadeOut(2000, showNextQuote);
    }

    showNextQuote();
}); 

/* video-section */
var player;
function onYouTubeIframeAPIReady()
{
    player = new YT.Player('playerId', {
        events: {
            onReady:onPlayerReady
        }
    })
}
function onPlayerReady(event) {
    player.mute();
    player.setVolume(0);
    player.playVideo();
}

/* packages-section */
$(window).on("load", function() {
    // reflections
    var $cards = $('.card');
    $.each($cards, function() {
        var $element = $(this);
        $element.reflect({
            height: 0.5,
            opacity: 0.1
        });
    })
    
    // flip
    var $front = $('.flip-container .flipper .front .card img');
    $front.on("mouseenter mouseleave", function(ev) {
        ev.preventDefault();
        var $flipper = $(this).closest(".flipper");
        if ($flipper.closest("figure").attr("id") == 0) {
            $flipper.css({
                "-webkit-transform" : "rotateX(-180deg)",
                transform: "rotateX(-180deg)"
            })
        }
    })
    
    var $back = $('.flip-container .flipper .back');
    $back.on({
        mouseleave: function() {
            var $flipper = $(this).closest(".flipper");
            if ($flipper.closest("figure").attr("id") == 0) {
                $flipper.css({
                    "-webkit-transform" : "rotateX(0deg)",
                    transform: "rotateX(0deg)"
                })  
            }
        }
    })
    
    
})

$(window).on("load", function() {
    //var ids = { id: ["front", "right-front", "right-back", "back", "left-back", "left-front"] };
    var translate = { value: ["0, 0, 0", "440px, 0, -20px", "240px, 0, -40px", "0, 0, -60px", "-240px, 0, -40px", "-440px, 0, -20px"] };
    var scale = { value: ["1", "0.75", "0.4", "0.3", "0.4", "0.75"] };
    $('#carousel figure').on('click', function(ev) {
        ev.preventDefault();
        // $(this).css("background", "blue");       
        var figures = $('#carousel figure');
        var id = parseInt($(this).attr("id"));
        var delay_time = 0;
        
        $.each(figures, function() {
            var $element = $(this);
            var $curr_id = parseInt($element.attr("id"));
            // flip back the center one
            if ($curr_id == 0) {
                var $flipper = $element.find(".flipper");
                $flipper.css({
                    "-webkit-transform" : "rotateX(0deg)",
                    transform: "rotateX(0deg)"
                })  
            }
        })
        
        if (id == 2 || id == 4) {           
            $.each(figures, function() {
                var $element = $(this);
                var $curr_id = parseInt($element.attr("id"));
                var $new_id;
                if (id == 2)
                    $new_id = ($curr_id - 1 + 6) % 6;
                else if (id == 4)
                    $new_id = ($curr_id + 1) % 6;
                $element.attr("id", $new_id);
                $element.css({
                    "-webkit-transform": "translate3d(" + translate.value[$new_id] + ") scale(" + scale.value[$new_id] + ")",
                    "transform": "translate3d(" + translate.value[$new_id] + ") scale(" + scale.value[$new_id] + ")",
                });
            })
            if (id == 2) id = 1;
            if (id == 4) id = 5;
            delay_time = 500;          
        }
         
        $.each(figures, function() {
            var $element = $(this);
            var $curr_id = parseInt($element.attr("id"));
            var $new_id = ((6 - id) + $curr_id) % 6;
            $element.attr("id", $new_id);
            $element.delay(delay_time).queue(function (next) { 
                $element.css({
                    "-webkit-transform": "translate3d(" + translate.value[$new_id] + ") scale(" + scale.value[$new_id] + ")",
                    "transform": "translate3d(" + translate.value[$new_id] + ") scale(" + scale.value[$new_id] + ")",
                });
                next(); 
            });                        
        })
        
    })
})


$( window ).load( function() {

	$( '.sldr' ).each( function() {
		var th = $( this );
		th.sldr({
			focalClass    : 'focalPoint',
			offset        : th.width() / 2,
			sldrWidth     : 'responsive',
			nextSlide     : th.nextAll( '.sldr-nav.next:first' ),
			previousSlide : th.nextAll( '.sldr-nav.prev:first' ),
			selectors     : th.nextAll( '.selectors:first' ).find( 'li' ),
			toggle        : th.nextAll( '.captions:first' ).find( 'div' ),
			sldrInit      : sliderInit,
			sldrStart     : slideStart,
			sldrComplete  : slideComplete,
			sldrLoaded    : sliderLoaded,
			sldrAuto      : true,
			sldrTime      : 5000,
			hasChange     : true
		});
	});

});

/**
 * Sldr Callbacks
 */

/**
 * When the sldr is initiated, before the DOM is manipulated
 * @param {object} args the slides, callback, and config of the slider
 * @return null
 */
function sliderInit( args ) {

}

/**
 * When individual slides are loaded
 * @param {object} args the slides, callback, and config of the slider
 * @return null
 */
function slideLoaded( args ) {

}

/**
 * When the full slider is loaded, after the DOM is manipulated
 * @param {object} args the slides, callback, and config of the slider
 * @return null
 */
function sliderLoaded( args ) {

}

/**
 * Before the slides change focal points
 * @param {object} args the slides, callback, and config of the slider
 * @return null
 */
function slideStart( args ) {

}

/**
 * After the slides are done changing focal points
 * @param {object} args the slides, callback, and config of the slider
 * @return null
 */
function slideComplete( args ) {

}
