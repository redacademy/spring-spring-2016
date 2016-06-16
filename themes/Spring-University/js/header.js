/**
 * header.js
 *
 * Helps with the menu in header
 *
 */

(function($) {

  $( ".menu-toggle" ).click(function() {
    $( ".hamburger" ).toggle();
    $( ".x-mark" ).toggle();
    $( ".menu-spring_main_menu-container" ).toggle();
  });

  $( window ).resize(function() {
    if ($(window).width() > 920) {
      $(".menu-spring_main_menu-container").html(ul)
    } else {
      $(".menu-spring_main_menu-container").html("");
    }
   });

 })( jQuery );
