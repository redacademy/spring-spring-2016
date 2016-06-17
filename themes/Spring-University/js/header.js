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
})( jQuery );
