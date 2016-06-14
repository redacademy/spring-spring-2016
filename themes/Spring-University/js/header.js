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
     $( ".main-navigation ul").toggle();
   });

 })( jQuery );
