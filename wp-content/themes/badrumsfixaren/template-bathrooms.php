<?php
/**
 * Template Name: Badrumsexempel
 * @package badrumsfixaren
 */

get_header(); ?>

  <?php 
    $header_img = get_field('header');
    $header_img_thumb = $header_img['sizes'][ 'header_img' ];
  ?>

  <?php 
    if( !empty($header_img) ): ?>
    <div class="top-image">
      <img src="<?php echo $header_img_thumb; ?>">
    </div>
  <?php endif; ?> 

  <div class="content-wrap">
    <div id="primary" class="content-area">
      <main id="main" class="site-main" role="main">

        <?php while ( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'template-parts/content', 'page' ); ?>

          <div class="bathrooms">
            <?php
              $args = array( 'post_type' => 'bathrooms', 'posts_per_page' => 25, 'orderby' => 'menu_order' );
              $loop = new WP_Query( $args );
              while ( $loop->have_posts() ) : $loop->the_post();
            ?>
              <div class="bathroom">
                <a href="<?php the_permalink( $post->ID ); ?>">
                  <?php the_post_thumbnail( 'bathroom-list' ); ?>
                </a>
                <div class="bottom">
                  <?php the_title(); ?>
                </div>
              </div>

            <?php endwhile; ?>
          </div>

        <?php endwhile; // End of the loop. ?>

      </main><!-- #main -->
    </div><!-- #primary -->

  </div>

<?php get_footer(); ?>
