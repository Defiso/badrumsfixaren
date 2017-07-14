<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
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
	    <img src="<?php echo $header_img_thumb; ?>"/>
	  </div>
	<?php endif; ?> 

	<div class="content-wrap">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'page' ); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>

				<?php endwhile; // End of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->

		<?php get_sidebar(); ?>
	</div>

<?php get_footer(); ?>
