/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function() {
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
$(function() {
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
