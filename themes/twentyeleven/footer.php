<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<!-- <?php
				/*
				 * A sidebar in the footer? Yep. You can customize
				 * your footer with three columns of widgets.
				 */
				/*if ( ! is_404() )
					get_sidebar( 'footer' );*/
			?>

			<div id="site-generator">
				<?php /*do_action( 'twentyeleven_credits' );*/ ?>
				<a href="<?php /*echo esc_url( __( 'https://wordpress.org/', 'twentyeleven' ) );*/ ?>" title="<?php/* esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyeleven' );*/ ?>"><?php /*printf( __( 'Proudly powered by %s', 'twentyeleven' ), 'WordPress' );*/ ?></a>
			</div> -->
		<div class="logoLink">
			<a href=""><img id="logo-GEDN" src="wp-content/themes/twentyeleven/images/logo-GEDN.svg"></a>
			<a href=""><img id="logo-onlineformapro" src="wp-content/themes/twentyeleven/images/logo-onlineformapro.svg"></a>
			<a href=""><img id="logo-acs" src="wp-content/themes/twentyeleven/images/logo-acs.svg"></a>
		</div>
		<div class="iconLink">
			<a href=""><img src="wp-content/themes/twentyeleven/images/logo-message.svg"></a>
			<a href=""><img src="wp-content/themes/twentyeleven/images/1484147976_facebook_online_social_media.svg"></a>
			<a href=""><img src="wp-content/themes/twentyeleven/images/1484147987_twitter_online_social_media.svg"></a>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>