<!--?php wp_enqueue_script('jquery'); ?-->
<!--?php wp_head(); ?-->

  $(document).ready(function(){
    $('.bxslider').bxSlider({
        controls: false,
        slideMargin: 0,
        slideWidth: 0,
        auto: true,
        infiniteLoop: true,
        minslides: 1,
        maxSlides: 4
    });
  });
