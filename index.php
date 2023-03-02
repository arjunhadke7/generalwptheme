<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package artr
 */

get_header();
?>

	<main id="primary" class="site-main container mx-auto">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<!-- <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1> -->
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
                // uncomment below line later
				// get_template_part( 'template-parts/content', get_post_type() );
                // uncomment above line later
                ?> <a class="hover:text-red-300" href=" <?php the_permalink() ?>  "> <h1 class="text-6xl"> <?php the_title(); ?> </a> </h1>

                <p class="text-gray-800"> <?php the_excerpt(); ?> </p>
                <?php
                

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
