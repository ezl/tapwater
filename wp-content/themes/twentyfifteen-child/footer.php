<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php
				/**
				 * Fires before the Twenty Fifteen footer text for footer customization.
				 *
				 * @since Twenty Fifteen 1.0
				 */
				do_action( 'twentyfifteen_credits' );
			?>
            <a href="<?php echo site_url('/contact-us/'); ?>">Contact us</a><span role="separator" aria-hidden="true"></span>
			<?php
			if ( function_exists( 'the_privacy_policy_link' ) ) {
				the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
			}
			?>
			<a href="<?php echo esc_url( __( 'https://www.canyoudrinktapwaterin.com/contact-us/', 'twentyfifteen' ) ); ?>" class="imprint">
				<?php printf( __( 'Built with &hearts; in Chicago %s', 'twentyfifteen' ), 'by ezl' ); ?>
			</a>
   
    	<div class="footer-social">
        	<a href="https://www.facebook.com/Tap-Water-Safety-110261403853327/"><img src="https://img.icons8.com/ios-filled/24/000000/facebook-new.png"/></a>
            <a href="https://twitter.com/TapWaterSafety"><img src="https://img.icons8.com/ios-filled/24/000000/twitter-squared.png"/></a>
            <a href="https://www.reddit.com/user/TapwaterSafety"><img src="https://img.icons8.com/metro/24/000000/reddit.png"/></a>
            <a href="https://www.pinterest.com/tapwatersafety/"><img src="https://img.icons8.com/ios/24/000000/pinterest.png"/></a>
            
        </div>
   
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>