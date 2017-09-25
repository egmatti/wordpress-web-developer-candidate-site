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

    <section class="hero-section" <?php if ( get_field('hero_image') ) { echo 'style="background-image: url(' . get_field('hero_image') . ')"'; } ?> name="hero-section">
      <div class="headline-container">
        <div class="headline-container__border--top"></div>
        <h1 class="headline">
          <?php
            if ( get_field('hero_text') ) {
              echo get_field('hero_text');
            } else {
              echo 'Lorem ipsum<br/>dolor sit ament';
            }
          ?>
        </h1>
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
        <h2>
          <?php
            if ( get_field('floor_plans_section_title') ) {
              echo get_field('floor_plans_section_title');
            } else {
              echo 'Floor Plans';
            }
          ?>
        </h2>
        <p>
          <?php
            if ( get_field('floor_plans_section_text') ) {
              echo get_field('floor_plans_section_text');
            } else {
              echo 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.';
            }
          ?>
        </p>
      </div>

      <div class=floor-plans-div>
        <div class="floor-plans-slider--desktop">

          <?php

            $args = array(
              'post_type' => 'floor_plans',
              'posts_per_page' => '12'
            );

            $floor_plans_desktop_query = new WP_Query($args);

          ?>

          <?php if ( $floor_plans_desktop_query->have_posts() ) : while ( $floor_plans_desktop_query->have_posts() ) : $floor_plans_desktop_query->the_post(); ?>

          <div class="floor-plans-post">
            <div class="floor-plans-post__title-container">
              <span class="floor-plans-post__title"><?php the_field('model_name'); ?></span>
              <span class="floor-plans-post__subtitle"><?php the_field('bedrooms'); ?> Bedroom / <?php the_field('bathrooms'); ?> Bathroom</span>
            </div>
            <div class="floor-plans-post__image-container">
              <img class="floor-plans-post__image" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_field('model_name'); ?> floor plan"/>
            </div>
            <div class="floor-plans-post__details-container">
              <span class="floor-plans-post__dimensions"><?php
                  $squareFootage = get_field('square_footage');
                  $squareFootageComma = number_format($squareFootage);
                  echo $squareFootageComma;
                ?> sq ft</span>
              <span class="floor-plans-post__price">$<?php
                  $price = get_field('price');
                  $priceComma = number_format($price);
                  echo $priceComma;
                ?></span>
            </div>
          </div>

          <?php endwhile; endif; wp_reset_postdata(); ?>

        </div>

        <div class="floor-plans-slider--tablet">

          <?php

            $args = array(
              'post_type' => 'floor_plans',
              'posts_per_page' => '12'
            );

            $floor_plans_tablet_query = new WP_Query($args);

          ?>

          <?php if ( $floor_plans_tablet_query->have_posts() ) : while ( $floor_plans_tablet_query->have_posts() ) : $floor_plans_tablet_query->the_post(); ?>

          <div class="floor-plans-post">
            <div class="floor-plans-post__title-container">
              <span class="floor-plans-post__title"><?php the_field('model_name'); ?></span>
              <span class="floor-plans-post__subtitle"><?php the_field('bedrooms'); ?> Bedroom / <?php the_field('bathrooms'); ?> Bathroom</span>
            </div>
            <div class="floor-plans-post__image-container">
              <img class="floor-plans-post__image" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_field('model_name'); ?> floor plan"/>
            </div>
            <div class="floor-plans-post__details-container">
              <span class="floor-plans-post__dimensions"><?php
                  $squareFootage = get_field('square_footage');
                  $squareFootageComma = number_format($squareFootage);
                  echo $squareFootageComma;
                ?> sq ft</span>
              <span class="floor-plans-post__price">$<?php
                  $price = get_field('price');
                  $priceComma = number_format($price);
                  echo $priceComma;
                ?></span>
            </div>
          </div>

          <?php endwhile; endif; wp_reset_postdata(); ?>

        </div>

        <div class="floor-plans-slider--mobile">

          <?php

            $args = array(
              'post_type' => 'floor_plans',
              'posts_per_page' => '12'
            );

            $floor_plans_mobile_query = new WP_Query($args);

          ?>

          <?php if ( $floor_plans_mobile_query->have_posts() ) : while ( $floor_plans_mobile_query->have_posts() ) : $floor_plans_mobile_query->the_post(); ?>

          <div class="floor-plans-post">
            <div class="floor-plans-post__title-container">
              <span class="floor-plans-post__title"><?php the_field('model_name'); ?></span>
              <span class="floor-plans-post__subtitle"><?php the_field('bedrooms'); ?> Bedroom / <?php the_field('bathrooms'); ?> Bathroom</span>
            </div>
            <div class="floor-plans-post__image-container">
              <img class="floor-plans-post__image" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_field('model_name'); ?> floor plan"/>
            </div>
            <div class="floor-plans-post__details-container">
              <span class="floor-plans-post__dimensions"><?php
                  $squareFootage = get_field('square_footage');
                  $squareFootageComma = number_format($squareFootage);
                  echo $squareFootageComma;
                ?> sq ft</span>
              <span class="floor-plans-post__price">$<?php
                  $price = get_field('price');
                  $priceComma = number_format($price);
                  echo $priceComma;
                ?></span>
            </div>
          </div>

          <?php endwhile; endif; wp_reset_postdata(); ?>

        </div>
      </div>

    </section>


<!-- CONTACT SECTION -->

    <section class="contact-section">
      <div class="contact-section__square--left">
        <div class="headline-container">
          <div class="headline-container__border--top"></div>
          <h2 class="headline">
            <?php
              if ( get_field('contact_section_text') ) {
                echo get_field('contact_section_text');
              } else {
                echo 'Choose your lifestyle. Find your new home.';
              }
            ?>
          </h2>
          <div class="headline-container__border--bottom"></div>
        </div>
      </div>
      <div <?php if ( get_field('contact_section_image') ) { echo 'style="background-image: url(' . get_field('contact_section_image') . ')"'; } ?> class="contact-section__square--middle">
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
