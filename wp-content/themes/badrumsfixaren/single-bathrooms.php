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

          <?php the_post_thumbnail(); ?>

        <?php endwhile; // End of the loop. ?>

      </main><!-- #main -->
    </div><!-- #primary -->

  <?php get_sidebar(); ?>
  </div>

<?php get_footer(); ?>
