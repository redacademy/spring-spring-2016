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
            <a class="browse-button" href="<?php echo get_site_url(); ?>/programs">Browse through programs</a>
          </div>

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
              <li class="team-members Keith">
                <img src="../wp-content/themes/Spring-University/images/members/Spring-Keith.jpg" alt="Keith Ippel" />
                <p class="member-name"> Keith Ippel </p>
                <p class="position-title"> CEO </p>
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
                  <a href="https://www.facebook.com/keith.ippel"/> <i class="fa fa-facebook"></i> </a>
                  <a href="https://twitter.com/KeithIppel"/> <i class="fa fa-twitter"></i> </a>
                  <a href="https://plus.google.com/105507575418598030936/about"/> <i class="fa fa-google-plus" aria-hidden="true">></i> </a>
                  <a href="https://ca.linkedin.com/in/keithippel"/> <i class="fa fa-linkedin"></i> </a>
                </div>
              </li>

              <li class="team-members jen">
                <img src="../wp-content/themes/Spring-University/images/members/SpringJen.jpg" alt="Jennifer Chin" />
                <p class="member-name"> Jennifer Chin </p>
                <p class="position-title"> Community Manager </p>
                <p class="personal-info">
                  Jen shares Spring's story with our ggrowing
                  community through a variety of channels, partners
                  and content creators. She enjoys seeing good
                  companies grow and is a fan of all things innovation.
                  Have something to share? Shoot her a message at
                  jen@spring.is
                </p>
                <div class="social-media">
                  <a href="https://www.facebook.com/jennifer.chin3"/> <i class="fa fa-facebook"></i> </a>
                  <a href="https://twitter.com/jenchinifer"/> <i class="fa fa-twitter"></i> </a>
                  <a href="https://plus.google.com/101580838200695912549/about"/> <i class="fa fa-google-plus"></i> </a>
                  <a href="https://ca.linkedin.com/in/jenniferchin"/> <i class="fa fa-linkedin"></i> </a>
                </div>
              </li>

              <li class="team-members Chang">
                <img src="../wp-content/themes/Spring-University/images/members/Chin.jpeg" alt="Chin Hing Chang" />
                <p class="member-name"> Chin Hing Chang </p>
                <p class="position-title"> Program Manager </p>
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
                  <a href="https://www.facebook.com/chinhingchang"/> <i class="fa fa-facebook"></i> </a>
                  <a href="https://twitter.com/h1ng"/> <i class="fa fa-twitter"></i> </a>
                  <a href="https://plus.google.com/+ChinHingChang88/about"/> <i class="fa fa-google-plus"></i> </a>
                  <a href="https://ca.linkedin.com/in/chinhingchang"/> <i class="fa fa-linkedin"></i> </a>
                </div>
              </li>
            </ul>
          </div>  <!-- About-paragraphs -->
        </div> <!-- .ABOUT-CONTENT -->
      </main><!-- #main -->
  </div><!-- #primary -->
<?php get_footer(); ?>
