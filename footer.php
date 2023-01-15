<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package artr
 */

?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

	<footer id="colophon" class="site-footer">
		<!-- <div class="container mx-auto"> -->
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'artr' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'artr' ), 'WordPress' );
					?>
				</a>
				<span class="sep"> | </span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'artr' ), 'artr', '<a href="http://underscores.me/">Underscores.me</a>' );
					?>
			</div><!-- .site-info -->

			<!-- below is working area for now -->
			<!-- the entire footer div below -->
			<div class="bg-gray-200">
			<div class="container  footer-container md:flex md:justify-between py-4 mt-4">
				<!-- menu 1 -->
                <div class="md:w-1/4 sm:mb-2">
                    <h3 class="text-2xl ">Some Links</h3>
						<?php wp_nav_menu(
							array(
								'theme_location' => 'footer-menu-1',
								'menu_id'        => 'footer-menu-1',
								'container' => 'ul',
								'menu_class' => 'footer-menu',
							)
						); ?>
                </div>
				<!-- end of menu 1 -->
				<!-- menu 2 -->
                <div class="md:w-1/4 sm:mb-2">
                    <h3 class="text-2xl">Some Links</h3>
						<?php wp_nav_menu(
							array(
								'theme_location' => 'footer-menu-2',
								'menu_id'        => 'footer-menu-2',
								'container' => 'ul',
								'menu_class' => 'footer-menu',
							)
						); ?>
                </div>
				<!-- end of menu 2 -->
				<!-- menu 3 -->
                <div class="md:w-1/4 sm:mb-2">
                    <h3 class="text-2xl">Some Links</h3>
						<?php wp_nav_menu(
							array(
								'theme_location' => 'footer-menu-2',
								'menu_id'        => 'footer-menu-2',
								'container' => 'ul',
								'menu_class' => 'footer-menu',
							)
						); ?>
                </div>
				<!-- end of menu 3 -->
				<!-- menu 4 -->
                <div class="md:w-1/4 sm:mb-2">
                    <h3 class="text-2xl">Some Links</h3>
						<?php wp_nav_menu(
							array(
								'theme_location' => 'footer-menu-2',
								'menu_id'        => 'footer-menu-2',
								'container' => 'ul',
								'menu_class' => 'footer-menu',
							)
						); ?>
                </div>
				<!-- end of menu 4 -->
            </div>
			<!-- this content below is another section -->
            <div class="container  py-6">
                <div class=" sm:block py-6">
                    <h3 class="text-2xl ">
                        Artronn Softwares
                    </h3>
                    <ul class="mt-3">
                        <li>Nagpur street</li>
                        <li>Maharashtra, India</li>
                    </ul>
                </div>

                <div class="container py-6">
                    <h2 class="social-links text-2xl ">Get in touch</h2>
                    <ul class="mt-3 sm:flex sm:justify-evenly">
                        <i class="sm:mr-8 text-2xl md:mr-8 fa-brands fa-facebook-f"></i>
                        <i class="sm:mr-8 text-2xl md:mr-8 fa-brands fa-instagram"></i>
                        <i class="sm:mr-8 text-2xl md:mr-8 fa-brands fa-facebook-messenger"></i>
                        <i class="sm:mr-8 text-2xl md:mr-8 fa-brands fa-whatsapp"></i>
                    </ul>
                </div>
            </div>
			</div>
			
		<!-- </div> -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
