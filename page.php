<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package artr
 */

get_header();
?>

	<main id="primary" class="page-content site-main container mx-auto px-14">
	<!-- <h2 class="text-2xl">Keep in mind that this is a page.php file</h2> -->
		<?php
		while ( have_posts() ) :
			the_post();

			// get_template_part( 'template-parts/content', 'page' );
			?>
			<h1 class="text-4xl mb-4"> <?php the_title(); ?></h1>
			<div class="text-gray-600"> <?php the_content(); ?></div>
			<?php

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
