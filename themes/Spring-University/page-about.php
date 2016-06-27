<?php
/**
* Template Name: About Page
*
* @package RED_Starter_Theme
*/

get_header(); ?>

  <div id="primary" class="content-area">
      <main id="main" class="site-main" role="main">

        <div class="about-content">

          <section class="about-header">
              <h1>About</h1>
          </section>

          <div class="about-company">
            <?php echo CFS()->get( 'about_text' ); ?>
          </div>
          <span class="browse"> <button> Browse through programs </button> </span>

          <div class=" about-paragraphs">
            <h2 class="about-title">Our Impact</h2>
            <?php echo CFS()->get( 'our_impact' ); ?>

            <h2 class="about-title">Awards</h2>
            <section class="awards-container">
              <?php
                $awards = CFS() -> get ('awards');
                foreach ($awards as $award) :
              ?>
              <div class="awards-images"><img src="<?php echo $award['awards_images'];?>"/>
                <p class="awards-description"><?php echo $award['awards_description']; ?></p>
             </div>
              <?php endforeach; ?>
            </section>

            <h2 class="about-title">Success Stories </h2>
            <?php echo do_shortcode("[wp_flickity id='4']"); ?>

            <h2 class="about-title">Alumni</h2>
            <?php echo do_shortcode("[wp_flickity id='1']"); ?>

            <h2 class="about-title">Partners</h2>
            <?php echo do_shortcode("[wp_flickity id='2']"); ?>

            <h2 class="about-title">Team Members</h2>
            
        </div> <!-- .ABOUT-CONTENT -->
      </main><!-- #main -->
  </div><!-- #primary -->
<?php get_footer(); ?>
