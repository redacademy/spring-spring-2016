(function($) {

   
   //video url variable, set autoplay to =1 to autoplay. 
   var videoUrl = "<iframe id=\"vimeo_player\" src=\"https://player.vimeo.com/video/165338136?portrait=0&title=0&autoplay=1&byline=0&loop=1\" width=\"100%\" height=\"75%\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>"
   
   // on page load over 640px video will load. under and it will be mobile view.
   if ($(window).width() > 640) {
          $(".js-video").html(videoUrl);
      }  else {
          $(".js-video").html("");
      } 
   
   // watching for page resize and either removing video html or hides it.
   //should add debounce or throttle
   $( window ).resize(function() {
      
     if ($(window).width() > 640) {
           $(".js-video").html(videoUrl)
        } else {
           $(".js-video").html("");
        }
     
    });
    
    var vid = $("#vimeo_player");
    vid.prop('muted', true);
    
    
    $('.fa-play-circle-o').on('click', function(){
      $('.video_text_overlay').fadeOut(300);
      
    });
    

 })( jQuery );
 
 