<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Teamtalk
 */

?>

	<?php } // is_user_logged_in()  ?> 

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://ava.to', 'teamtalk' ) ); ?>"><?php printf( esc_html__( 'A theme by %s', 'teamtalk' ), 'Avato' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Teamtalk: %1$s by %2$s.', 'teamtalk' ), 'teamtalk', '<a href="http://ava.to/" rel="designer">Teamtalk</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
