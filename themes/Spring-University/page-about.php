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
            <ul class="bxslider">
              <li class="Keith">
                <img src="../wp-content/themes/Spring-University/images/members/Spring-Keith.jpg" alt="Keith Ippel" />
                <h2 class="member-name"> Keith Ippel </h2>
                <h2 class="position-title"> CEO </h2>
                <p class="personal-info">
                  I'm passionate about helping entrepreneurs change
                  the world by connecting their ideas with the right
                  tools; resources, technology, and funding. I
                  co-founded Spring to focus on early stage
                  entrepreneurs with high growth potential who want
                  to make the world a better place. Whether you call
                  it social good, impact, conscious captialism, do
                  good,or social entrepreneurship - Spring is the
                  place to transform your ideas into impact.
                </p>
                <div class="social-media">
                  1
                  2
                  3
                  4
                </div>
              </li>

              <li class="member-jen">
                <img src="../wp-content/themes/Spring-University/images/members/SpringJen.jpg" alt="Jennifer Chin" />
                <h2 class="member-name"> Jennifer Chin </h2>
                <h2 class="position-title"> Community Manager </h2>
                <p class="personal-info">
                  Jen shares Spring's story with our ggrowing
                  community through a variety of channels, partners
                  and content creators. She enjoys seeing good
                  companies grow and is a fan of all things innovation.
                  Have something to share? Shoot her a message at
                  jen@spring.is
                </p>
                <div class="social-media">
                  1
                  2
                  3
                  4
                </div>
              </li>

              <li class="Chang">
                <img src="../wp-content/themes/Spring-University/images/members/Chin.jpeg" alt="Chin Hing Chang" />
                <h2 class="member-name"> Chin Hing Chang </h2>
                <h2 class="position-title"> Program Manager </h2>
                <p class="personal-info">
                  Chin supports the growth of Spring through
                  Business Development. He does this by building
                  awarness in the community via
                  strategic partnerships and by promoting our
                  workshops and programs. He is also the lead
                  facilitator for Spring University, a global startup
                  school for budding impact entrepreneurs.
                </p>
                <div class="social-media">
                  1
                  2
                  3
                  4
                </div>
              </li>
            </ul>
          </div>  <!-- About-paragraphs -->
        </div> <!-- .ABOUT-CONTENT -->
      </main><!-- #main -->
  </div><!-- #primary -->
<?php get_footer(); ?>
