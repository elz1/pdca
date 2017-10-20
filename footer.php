<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PDCA
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="widget-row">
				<img class="full-logo" src="/wp-content/themes/pdca/img/PDCA-logo.png">
				<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
			    <div id="footer-1" class="footer-1 widget-area" role="complementary">
			      <?php dynamic_sidebar( 'footer-1' ); ?>
			    </div>
			  <?php endif; ?>
			  <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
			    <div id="footer-2" class="footer-2 widget-area" role="complementary">
			      <?php dynamic_sidebar( 'footer-2' ); ?>
			    </div>
			  <?php endif; ?>
			  <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
			    <div id="footer-3" class="footer-3 widget-area" role="complementary">
			      <?php dynamic_sidebar( 'footer-3' ); ?>
			    </div>
			  <?php endif; ?>
			  <?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
			    <div id="footer-4" class="footer-4 widget-area" role="complementary">
			      <?php dynamic_sidebar( 'footer-4' ); ?>
			    </div>
			  <?php endif; ?>
			</div>
	
			<div class="site-info">
				<?php
					printf( esc_html__( '&copy;2018 PDCA', 'pdca' ), 'pdca', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
				<span class="sep"> | </span>
				<?php
					printf( esc_html__( 'All Rights Reserved.', 'pdca' ), 'pdca', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
			</div><!-- .site-info -->
		</div><!--container-->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
<script src="https://use.fontawesome.com/8020ac3e36.js"></script>


</body>
</html>
