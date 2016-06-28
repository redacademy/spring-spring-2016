<!--?php wp_enqueue_script('jquery'); ?-->
<!--?php wp_head(); ?-->

  $(document).ready(function(){
    $('.bxslider').bxSlider({
        auto: true,
        slideWidth: 300,
        minSlides: 1,
        maxSlides: 1,
        slideMargin: 10
    });
  });
