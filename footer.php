<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of <div id="content"> and all content after
 *
 * @package Writr-Social
 */
$twitter  = get_theme_mod( 'twitter_textbox' );
$facebook = get_theme_mod( 'facebook_textbox' );
$gplus = get_theme_mod( 'gplus_textbox' );
$github   = get_theme_mod( 'github_textbox' );
$social_links = ( '' != $twitter
	|| '' != $facebook
	|| '' != $gplus
	|| '' != $github
) ? true : false;
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php if ( $social_links ) : ?>
		<div id="social-links" class="clear">
			<ul class="social-links clear">
				<?php if ( '' != $twitter ) : ?>
				<li>
					<a href="<?php echo esc_url( $twitter ); ?>" class="genericon genericon-twitter" title="<?php esc_attr_e( 'Twitter', 'writr' ); ?>" target="_blank">
						<span class="screen-reader-text"><?php _e( 'Twitter', 'writr' ); ?></span>
					</a>
				</li>
				<?php endif; ?>

				<?php if ( '' != $facebook ) : ?>
				<li>
					<a href="<?php echo esc_url( $facebook ); ?>" class="genericon genericon-facebook" title="<?php esc_attr_e( 'Facebook', 'writr' ); ?>" target="_blank">
						<span class="screen-reader-text"><?php _e( 'Facebook', 'writr' ); ?></span>
					</a>
				</li>
				<?php endif; ?>

                                <?php if ( '' != $gplus ) : ?>
                                <li>
                                    	<a href="<?php echo esc_url( $gplus ); ?>" class="genericon genericon-googleplus" title="<?php esc_attr_e( 'Google +', 'writr' ); ?>" target="_blank">
                                                <span class="screen-reader-text"><?php _e( 'Google +', 'writr' ); ?></span>
                                        </a>
                                </li>
                                <?php endif; ?>

                                <?php if ( '' != $github ) : ?>
                                <li>
                                    	<a href="<?php echo esc_url( $github ); ?>" class="genericon genericon-github" title="<?php esc_attr_e( 'GitHub', 'writr' ); ?>" target="_blank">
                                                <span class="screen-reader-text"><?php _e( 'GitHub', 'writr' ); ?></span>
                                        </a>
                                </li>
                                <?php endif; ?>

			</ul>
		</div><!-- #social-links -->
		<?php endif; ?>

		<div class="site-info">
			<?php do_action( 'writr_credits' ); ?>
			<div><a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'writr' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'writr' ), 'WordPress' ); ?></a></div>
			<div><?php printf( __( 'Theme: %1$s by %2$s.', 'writr' ), 'Writr', '<a href="http://theme.wordpress.com/" rel="designer">Automattic</a>' ); ?></div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
