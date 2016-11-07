/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(window).on("load", function() {
    // responsive menu
    var pull = $('#pull');
    menu = $('ul.top-nav-menu');
    menuHeight  = menu.height();
 
    $(pull).on('click', function(e) {
      e.preventDefault();
      if (menu.is(':hidden'))
          $('.ha-header').css("background", "rgb(2,2,2)");
      else {
          $('.ha-header').removeAttr('style');
          $('.ha-header').css("display", "block");
      }
      menu.slideToggle();

    });
  
    // toggle submenus
    var services = $('#services');
    s_submenu = $('#services-submenu');
    $(services).on({
        mouseenter: function () {
            s_submenu.slideToggle();
        },
        mouseleave: function () {
            s_submenu.slideToggle();
        }
    });    
    var places = $('#places');
    p_submenu = $('#places-submenu');
    $(places).on({
        mouseenter: function () {
            p_submenu.slideToggle();
        },
        mouseleave: function () {
            p_submenu.slideToggle();
        }
    });
});

$(window).on("resize", function(){
    var w = $(window).width();
    if (w > 320) {
        //menu.hide();
        if (menu.is(':hidden'))
            menu.removeAttr('style');
    } /*else if (w > 767) {
        $('.ha-header').removeAttr('style');
        $('.ha-header').css("display", "block");
        if (!menu.is(':hidden'))
            menu.hide();
        
        //$('.ha-header').css("background", "rgba(253,253,253,0.8)");
    }*/
}); 