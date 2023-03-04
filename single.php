<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package artr
 */

get_header();
?>

	<main id="primary" class="site-main container mx-auto px-14">

		<?php
		while ( have_posts() ) :
			the_post();
			?> <h1 class="text-6xl"> <?php the_title(); ?> </h1> 

			<div class="single-post-content">
			<?php the_content();?>
			</div>

			<?php

			
			
			// get_template_part( 'template-parts/content', get_post_type() );

			previous_post_link();
			next_post_link();

			// the_post_navigation(
			// 	array(
			// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'artr' ) . '</span> <span class="nav-title">%title</span>',
			// 		'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'artr' ) . '</span> <span class="nav-title">%title</span>',
			// 	)
			// );

			

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;
			// comments are disabled only for testing purpose and for working on the main theme portion

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
