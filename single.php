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
	while (have_posts()) :
		the_post();
	?> <h1 class="text-5xl mb-6"> <?php the_title(); ?> </h1>
		<div class="single-post-content">
			<?php the_content(); ?>
		</div>
		<p><?php the_field('song') ?></p>
		<?php
		$images = get_field('image_gallery');

		// $size = 'full'; // (thumbnail, medium, large, full or custom size)
		if ($images) : ?>
			<ul>
				<?php foreach ($images as $image_id) : ?>
					<li>
						<img src="<?php echo esc_url($image_id['url']); ?>"  />
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>

		<?php



		// get_template_part( 'template-parts/content', get_post_type() );




		?>
		<div class="container flex justify-between border-[1px] my-4 px-2 py-6 border-gray-200">
			<div class="mx-6"> <?php previous_post_link(); ?> </div>
			<div class="mx-6"> <?php next_post_link(); ?> </div>
		</div>
	<?php

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
