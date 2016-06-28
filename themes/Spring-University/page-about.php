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
            <ul class="bxslider">
              <li class="Evan">
                <img src="../wp-content/themes/Spring-University/images/stories/headshot1.png" alt="Evan" />
                <span class="personal-story">
                  "Spring has enabled me to re-evaluate how to
                  start Daovita, check my assumptions, and
                  provided me with some top notch connections. I
                  am now on a path geared for success. Most of all
                  I'm appreciative of the overwhelming support
                  and consideration of every entrepreneur in
                  the room."
                </span>
                <span class="ss-name"> Evan Sidwell </span>
                <span class="ss-company"> Founder, Daovita </span>
              </li>

              <li class="story-jen">
                <img src="../wp-content/themes/Spring-University/images/stories/headshot2.png" alt="Jennifer Li" />
                <span class="personal-story">
                  "We're officially part of the
                    summer cohort of Entrepreneur
                    Round Table accelerator in
                    New York City.

                    Couldn't have done it without
                    Spring."
                </span>
                <span class="ss-name"> Jennifer Li </span>
                <span class="ss-company"> CEO, Muse </span>
              </li>

              <li class="Penaloza">
                <img src="../wp-content/themes/Spring-University/images/stories/headshot3.png" alt="Jesús Penaloza" />
                <span class="personal-story">
                  "Spring team, you guys are awesome.
                  Thanks for the opportunity you gave us in
                  Venezuela to take the Kick program. I am
                  glad I was able to meet all of you. Spring
                  has enabled me to learn how to evaluate
                  my projects from another perspective, and
                  let me network with people all
                  around the world. I am now on a path
                  geared for success, and am a member of a
                  great network such as Spring. Many thanks
                  for all your support."
                </span>
                <span class="ss-name"> Jesús Penaloza </span>
                <span class="ss-company"> CEO, Pago en Red </span>
              </li>
            </ul>

            <h2 class="about-title">Alumni</h2>
            <?php echo do_shortcode("[wp_flickity id='1']"); ?>

            <h2 class="about-title">Partners</h2>
            <?php echo do_shortcode("[wp_flickity id='2']"); ?>

            <h2 class="about-title">Team Members</h2>
            <ul class="bxslider">
              <li class="Keith">
                <img src="../wp-content/themes/Spring-University/images/members/Spring-Keith.jpg" alt="Keith Ippel" />
                <span class="member-name"> Keith Ippel </span>
                <span class="position-title"> CEO </span>
                <span class="personal-info">
                  I'm passionate about helping entrepreneurs change
                  the world by connecting their ideas with the right
                  tools; resources, technology, and funding. I
                  co-founded Spring to focus on early stage
                  entrepreneurs with high growth potential who want
                  to make the world a better place. Whether you call
                  it social good, impact, conscious captialism, do
                  good,or social entrepreneurship - Spring is the
                  place to transform your ideas into impact.
                </span>
                <div class="social-media">
                  1
                  2
                  3
                  4
                </div>
              </li>

              <li class="member-jen">
                <img src="../wp-content/themes/Spring-University/images/members/SpringJen.jpg" alt="Jennifer Chin" />
                <span class="member-name"> Jennifer Chin </span>
                <span class="position-title"> Community Manager </span>
                <span class="personal-info">
                  Jen shares Spring's story with our ggrowing
                  community through a variety of channels, partners
                  and content creators. She enjoys seeing good
                  companies grow and is a fan of all things innovation.
                  Have something to share? Shoot her a message at
                  jen@spring.is
                </span>
                <div class="social-media">
                  1
                  2
                  3
                  4
                </div>
              </li>

              <li class="Chang">
                <img src="../wp-content/themes/Spring-University/images/members/Chin.jpeg" alt="Chin Hing Chang" />
                <span class="member-name"> Chin Hing Chang </span>
                <span class="position-title"> Program Manager </span>
                <span class="personal-info">
                  Chin supports the growth of Spring through
                  Business Development. He does this by building
                  awarness in the community via
                  strategic partnerships and by promoting our
                  workshops and programs. He is also the lead
                  facilitator for Spring University, a global startup
                  school for budding impact entrepreneurs.
                </span>
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
