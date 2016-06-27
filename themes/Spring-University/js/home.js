(function($) {

   
   
    $('.video_controls_overlay').hide();
   
   // on page load over 640px video will load. under and it will be mobile view.
   if ($(window).width() < 640) {
          $(".js-video").html("");
      }   
   
   // watching for page resize and either removing video html or hides it.
   //should add debounce or throttle
   $( window ).resize(function() {  
      
     if ($(window).width() < 640) {
           $(".js-video").html("");
        } 
    });
    
    
    var iframe = $('#vimeo_player')[0],
              player = $f(iframe),
              status = $('.status');

              player.addEvent('ready', function() {
                  player.api('setVolume', 0);
              });
    
    
    $('.fa-volume-up').on('click', function(){
      $('.video_text_overlay').fadeOut(300);
      
      player = $f(iframe),
      status = $('.status');

      player.addEvent('ready', function() {
          player.api('setVolume', 1);
      });
      
      $('.video_controls_overlay').fadeIn(300);

    
    });
    
    $('.fa-volume-off').on('click', function(){
            
      player = $f(iframe),
      status = $('.status');

      player.addEvent('ready', function() {
          player.api('setVolume', 0);
      });
    
    });
    
    
      $(iframe).prop('muted', true);
      
      $(".toggle_mute").click( function (){
        if( $(iframe).prop('muted') ) {
              $(iframe).prop('muted', false);
        } else {
          $(iframe).prop('muted', true);
        }
      });

    
    

 })( jQuery );
 
 