(function($) {

   
   //video url variable, set autoplay to =1 to autoplay. 
   
   
   
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
    
    
    $('.fa-play-circle-o').on('click', function(){
      $('.video_text_overlay').fadeOut(300);
      
      player = $f(iframe),
      status = $('.status');

      player.addEvent('ready', function() {
          player.api('setVolume', 1);
      });
      
      
      
    });
    

    
    

 })( jQuery );
 
 