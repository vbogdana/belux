/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function() {
    var pull = $('#pull');
    menu = $('ul.top-nav-menu');
    menuHeight  = menu.height();
 
    $(pull).on('click', function(e) {
      e.preventDefault();
      if (menu.is(':hidden'))
          $('.ha-header').css("background", "rgb(2,2,2)");
      else
          $('.ha-header').removeAttr('style');
      menu.slideToggle();

    });
  
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

$(window).resize(function(){
  var w = $(window).width();
  if(w > 320 && menu.is(':hidden')) {
    menu.removeAttr('style');
  }
}); 

$(function () {
    var logo = $('#site-logo');
    $(logo).on({
        mouseenter: function () {
            logo.fadeIn();
            logo.attr('src', '../storage/app/images/logo2.png');
        },
        mouseleave: function () {
            logo.fadeIn();
            logo.attr('src', '../storage/app/images/logo1.png');
        }
    });
});


function showMenu(hidden) {
    if (hidden === false) {
        $('.top-nav-menu-item').css("visibility", "hidden");
        $('.top-nav-menu-separator').css("visibility", "hidden");
    } else {
        $('.top-nav-menu-item').css("visibility", "visible");
        $('.top-nav-menu-separator').css("visibility", "visible");
    }
    hidden = !hidden;
}