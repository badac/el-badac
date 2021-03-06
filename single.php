<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
?>



<div class="wrapper" id="single-wrapper">

	<div class="row justify-content-center" id="featured-image-block">
		<div class="col-10 featured-image-block">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php echo get_the_post_thumbnail( $post->ID, 'widescreen-lg' ); ?>


			<?php endwhile; // end of the loop. ?>
		</div>
	</div>

	<div class="container-fluid" id="content" tabindex="-1">


			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'single' ); ?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

		<!-- Do the right sidebar check -->
		<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
