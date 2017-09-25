<!-- ==========================================
HOME PAGE
========================================== -->

<?php
/*
  Template Name: Home Page
*/
?>

<?php get_header(); ?>


<!-- HERO SECTION -->

    <section class="hero-section" name="hero-section">
      <div class="headline-container">
        <div class="headline-container__border--top"></div>
        <h1 class="headline">Lorem ipsum<br/>dolor sit ament</h1>
        <div class="headline-container__border--bottom"></div>
      </div>
      <div class="triangle">
        <div class="arrows-container">
          <img class="arrow--top" src="<?php bloginfo('stylesheet_directory'); ?>/images/arrow-mustard.svg" alt="Arrow"/>
          <img class="arrow--bottom" src="<?php bloginfo('stylesheet_directory'); ?>/images/arrow-mustard.svg" alt="Arrow"/>
        </div>
      </div>
    </section>


<!-- FLOOR PLANS SECTION -->

    <section class="floor-plans-section" name="floor-plans-section">
      <div class="floor-plans-section__description">
        <h2>Floor Plans</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
      </div>

      <div class=floor-plans-div>
        <div class="floor-plans-slider--desktop">
          <div class="floor-plans-post">
            <div class="floor-plans-post__title-container">
              <span class="floor-plans-post__title">S1</span>
              <span class="floor-plans-post__subtitle">Studio / 1 Bathroom</span>
            </div>
            <div class="floor-plans-post__image-container">
              <img class="floor-plans-post__image" src="<?php bloginfo('stylesheet_directory'); ?>/images/floor-plans/S1.png" alt="S1 floor plan"/>
            </div>
            <div class="floor-plans-post__details-container">
              <span class="floor-plans-post__dimensions">650 sq ft</span>
              <span class="floor-plans-post__price">$1,500</span>
            </div>
          </div>
          <div class="floor-plans-post">
            <div class="floor-plans-post__title-container">
              <span class="floor-plans-post__title">A1</span>
              <span class="floor-plans-post__subtitle">1 Bedroom / 1 Bathroom</span>
            </div>
            <div class="floor-plans-post__image-container">
              <img class="floor-plans-post__image" src="<?php bloginfo('stylesheet_directory'); ?>/images/floor-plans/A1.png" alt="A1 floor plan"/>
            </div>
            <div class="floor-plans-post__details-container">
              <span class="floor-plans-post__dimensions">850 sq ft</span>
              <span class="floor-plans-post__price">$1,800</span>
            </div>
          </div>
          <div class="floor-plans-post">
            <div class="floor-plans-post__title-container">
              <span class="floor-plans-post__title">B1</span>
              <span class="floor-plans-post__subtitle">2 Bedroom / 1 Bathroom</span>
            </div>
            <div class="floor-plans-post__image-container">
              <img class="floor-plans-post__image" src="<?php bloginfo('stylesheet_directory'); ?>/images/floor-plans/B1.png" alt="B1 floor plan"/>
            </div>
            <div class="floor-plans-post__details-container">
              <span class="floor-plans-post__dimensions">1,096 sq ft</span>
              <span class="floor-plans-post__price">$2,000</span>
            </div>
          </div>
          <div class="floor-plans-post">
            <div class="floor-plans-post__title-container">
              <span class="floor-plans-post__title">C3</span>
              <span class="floor-plans-post__subtitle">3 Bedroom / 2 Bathroom</span>
            </div>
            <div class="floor-plans-post__image-container">
              <img class="floor-plans-post__image" src="<?php bloginfo('stylesheet_directory'); ?>/images/floor-plans/C3.png" alt="C3 floor plan"/>
            </div>
            <div class="floor-plans-post__details-container">
              <span class="floor-plans-post__dimensions">1,235 sq ft</span>
              <span class="floor-plans-post__price">$2,400</span>
            </div>
          </div>
          <div class="floor-plans-post">
            <div class="floor-plans-post__title-container">
              <span class="floor-plans-post__title">S1</span>
              <span class="floor-plans-post__subtitle">Studio / 1 Bathroom</span>
            </div>
            <div class="floor-plans-post__image-container">
              <img class="floor-plans-post__image" src="<?php bloginfo('stylesheet_directory'); ?>/images/floor-plans/S1.png" alt="S1 floor plan"/>
            </div>
            <div class="floor-plans-post__details-container">
              <span class="floor-plans-post__dimensions">650 sq ft</span>
              <span class="floor-plans-post__price">$1,500</span>
            </div>
          </div>
          <div class="floor-plans-post">
            <div class="floor-plans-post__title-container">
              <span class="floor-plans-post__title">A1</span>
              <span class="floor-plans-post__subtitle">1 Bedroom / 1 Bathroom</span>
            </div>
            <div class="floor-plans-post__image-container">
              <img class="floor-plans-post__image" src="<?php bloginfo('stylesheet_directory'); ?>/images/floor-plans/A1.png" alt="A1 floor plan"/>
            </div>
            <div class="floor-plans-post__details-container">
              <span class="floor-plans-post__dimensions">850 sq ft</span>
              <span class="floor-plans-post__price">$1,800</span>
            </div>
          </div>
        </div>

        <div class="floor-plans-slider--tablet">
          <div class="floor-plans-post">
            <div class="floor-plans-post__title-container">
              <span class="floor-plans-post__title">S1</span>
              <span class="floor-plans-post__subtitle">Studio / 1 Bathroom</span>
            </div>
            <div class="floor-plans-post__image-container">
              <img class="floor-plans-post__image" src="<?php bloginfo('stylesheet_directory'); ?>/images/floor-plans/S1.png" alt="S1 floor plan"/>
            </div>
            <div class="floor-plans-post__details-container">
              <span class="floor-plans-post__dimensions">650 sq ft</span>
              <span class="floor-plans-post__price">$1,500</span>
            </div>
          </div>
          <div class="floor-plans-post">
            <div class="floor-plans-post__title-container">
              <span class="floor-plans-post__title">A1</span>
              <span class="floor-plans-post__subtitle">1 Bedroom / 1 Bathroom</span>
            </div>
            <div class="floor-plans-post__image-container">
              <img class="floor-plans-post__image" src="<?php bloginfo('stylesheet_directory'); ?>/images/floor-plans/A1.png" alt="A1 floor plan"/>
            </div>
            <div class="floor-plans-post__details-container">
              <span class="floor-plans-post__dimensions">850 sq ft</span>
              <span class="floor-plans-post__price">$1,800</span>
            </div>
          </div>
          <div class="floor-plans-post">
            <div class="floor-plans-post__title-container">
              <span class="floor-plans-post__title">B1</span>
              <span class="floor-plans-post__subtitle">2 Bedroom / 1 Bathroom</span>
            </div>
            <div class="floor-plans-post__image-container">
              <img class="floor-plans-post__image" src="<?php bloginfo('stylesheet_directory'); ?>/images/floor-plans/B1.png" alt="B1 floor plan"/>
            </div>
            <div class="floor-plans-post__details-container">
              <span class="floor-plans-post__dimensions">1,096 sq ft</span>
              <span class="floor-plans-post__price">$2,000</span>
            </div>
          </div>
          <div class="floor-plans-post">
            <div class="floor-plans-post__title-container">
              <span class="floor-plans-post__title">C3</span>
              <span class="floor-plans-post__subtitle">3 Bedroom / 2 Bathroom</span>
            </div>
            <div class="floor-plans-post__image-container">
              <img class="floor-plans-post__image" src="<?php bloginfo('stylesheet_directory'); ?>/images/floor-plans/C3.png" alt="C3 floor plan"/>
            </div>
            <div class="floor-plans-post__details-container">
              <span class="floor-plans-post__dimensions">1,235 sq ft</span>
              <span class="floor-plans-post__price">$2,400</span>
            </div>
          </div>
          <div class="floor-plans-post">
            <div class="floor-plans-post__title-container">
              <span class="floor-plans-post__title">S1</span>
              <span class="floor-plans-post__subtitle">Studio / 1 Bathroom</span>
            </div>
            <div class="floor-plans-post__image-container">
              <img class="floor-plans-post__image" src="<?php bloginfo('stylesheet_directory'); ?>/images/floor-plans/S1.png" alt="S1 floor plan"/>
            </div>
            <div class="floor-plans-post__details-container">
              <span class="floor-plans-post__dimensions">650 sq ft</span>
              <span class="floor-plans-post__price">$1,500</span>
            </div>
          </div>
          <div class="floor-plans-post">
            <div class="floor-plans-post__title-container">
              <span class="floor-plans-post__title">A1</span>
              <span class="floor-plans-post__subtitle">1 Bedroom / 1 Bathroom</span>
            </div>
            <div class="floor-plans-post__image-container">
              <img class="floor-plans-post__image" src="<?php bloginfo('stylesheet_directory'); ?>/images/floor-plans/A1.png" alt="A1 floor plan"/>
            </div>
            <div class="floor-plans-post__details-container">
              <span class="floor-plans-post__dimensions">850 sq ft</span>
              <span class="floor-plans-post__price">$1,800</span>
            </div>
          </div>
        </div>

        <div class="floor-plans-slider--mobile">
          <div class="floor-plans-post">
            <div class="floor-plans-post__title-container">
              <span class="floor-plans-post__title">S1</span>
              <span class="floor-plans-post__subtitle">Studio / 1 Bathroom</span>
            </div>
            <div class="floor-plans-post__image-container">
              <img class="floor-plans-post__image" src="<?php bloginfo('stylesheet_directory'); ?>/images/floor-plans/S1.png" alt="S1 floor plan"/>
            </div>
            <div class="floor-plans-post__details-container">
              <span class="floor-plans-post__dimensions">650 sq ft</span>
              <span class="floor-plans-post__price">$1,500</span>
            </div>
          </div>
          <div class="floor-plans-post">
            <div class="floor-plans-post__title-container">
              <span class="floor-plans-post__title">A1</span>
              <span class="floor-plans-post__subtitle">1 Bedroom / 1 Bathroom</span>
            </div>
            <div class="floor-plans-post__image-container">
              <img class="floor-plans-post__image" src="<?php bloginfo('stylesheet_directory'); ?>/images/floor-plans/A1.png" alt="A1 floor plan"/>
            </div>
            <div class="floor-plans-post__details-container">
              <span class="floor-plans-post__dimensions">850 sq ft</span>
              <span class="floor-plans-post__price">$1,800</span>
            </div>
          </div>
          <div class="floor-plans-post">
            <div class="floor-plans-post__title-container">
              <span class="floor-plans-post__title">B1</span>
              <span class="floor-plans-post__subtitle">2 Bedroom / 1 Bathroom</span>
            </div>
            <div class="floor-plans-post__image-container">
              <img class="floor-plans-post__image" src="<?php bloginfo('stylesheet_directory'); ?>/images/floor-plans/B1.png" alt="B1 floor plan"/>
            </div>
            <div class="floor-plans-post__details-container">
              <span class="floor-plans-post__dimensions">1,096 sq ft</span>
              <span class="floor-plans-post__price">$2,000</span>
            </div>
          </div>
          <div class="floor-plans-post">
            <div class="floor-plans-post__title-container">
              <span class="floor-plans-post__title">C3</span>
              <span class="floor-plans-post__subtitle">3 Bedroom / 2 Bathroom</span>
            </div>
            <div class="floor-plans-post__image-container">
              <img class="floor-plans-post__image" src="<?php bloginfo('stylesheet_directory'); ?>/images/floor-plans/C3.png" alt="C3 floor plan"/>
            </div>
            <div class="floor-plans-post__details-container">
              <span class="floor-plans-post__dimensions">1,235 sq ft</span>
              <span class="floor-plans-post__price">$2,400</span>
            </div>
          </div>
          <div class="floor-plans-post">
            <div class="floor-plans-post__title-container">
              <span class="floor-plans-post__title">S1</span>
              <span class="floor-plans-post__subtitle">Studio / 1 Bathroom</span>
            </div>
            <div class="floor-plans-post__image-container">
              <img class="floor-plans-post__image" src="<?php bloginfo('stylesheet_directory'); ?>/images/floor-plans/S1.png" alt="S1 floor plan"/>
            </div>
            <div class="floor-plans-post__details-container">
              <span class="floor-plans-post__dimensions">650 sq ft</span>
              <span class="floor-plans-post__price">$1,500</span>
            </div>
          </div>
          <div class="floor-plans-post">
            <div class="floor-plans-post__title-container">
              <span class="floor-plans-post__title">A1</span>
              <span class="floor-plans-post__subtitle">1 Bedroom / 1 Bathroom</span>
            </div>
            <div class="floor-plans-post__image-container">
              <img class="floor-plans-post__image" src="<?php bloginfo('stylesheet_directory'); ?>/images/floor-plans/A1.png" alt="A1 floor plan"/>
            </div>
            <div class="floor-plans-post__details-container">
              <span class="floor-plans-post__dimensions">850 sq ft</span>
              <span class="floor-plans-post__price">$1,800</span>
            </div>
          </div>
        </div>
      </div>

    </section>


<!-- CONTACT SECTION -->

    <section class="contact-section">
      <div class="contact-section__square--left">
        <div class="headline-container">
          <div class="headline-container__border--top"></div>
          <h2 class="headline">Choose your lifestyle. Find your new home.</h2>
          <div class="headline-container__border--bottom"></div>
        </div>
      </div>
      <div class="contact-section__square--middle">
      </div>
      <div class="contact-section__square--right">
        <form class="contact-form">
          <input id="first-name" placeholder="First Name" type="text" required></input>
          <input id="last-name" placeholder="Last Name" type="text" required></input>
          <input id="email" placeholder="Email" type="text" required></input>
          <input id="source" placeholder="How did you hear about us?" list="source-options" required>
            <datalist id="source-options">
              <option value="Advertisement">
              <option value="Internet search">
              <option value="Referral">
              <option value="Social Media">
            </datalist>
          </input>
          <input id="submit" type="submit" value="Submit">
        </form>
      </div>
    </section>


<?php get_footer(); ?>
