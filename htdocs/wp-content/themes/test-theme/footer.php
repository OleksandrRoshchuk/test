<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="wrap">
                <div class='contact-footer'>
                    <a class="hide-on-big" href="tel:0987654321">Call Us</a>
                    <p class="hide-on-small">Call Us: 0987654321</p>
                    <a href="mailto:testdomain@mail.to" class="hide-on-small">Email: testdomain@mail.to</a>
                    <a href="mailto:testdomain@mail.to" class="hide-on-big">Email us</a>
                    <button id="contact-info-popup">Contact Us</button>
                </div>
				<?php
				get_template_part( 'template-parts/footer/footer', 'widgets' );

				if ( has_nav_menu( 'social' ) ) : ?>
					<nav class="social-navigation" role="navigation" aria-label="<?php _e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'social',
								'menu_class'     => 'social-links-menu',
								'depth'          => 1,
								'link_before'    => '<span class="screen-reader-text">',
								'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
							) );
						?>
					</nav><!-- .social-navigation -->

				<?php endif;

				get_template_part( 'template-parts/footer/site', 'info' );
				?>

                <div class="contact-popup-wprapper">
                    <span class="pupup-close"></span>
                    <div class="contact-info">
                        <h3>Popup header</h3>
                        <p>Popup text</p>
                    </div>
                </div>
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
