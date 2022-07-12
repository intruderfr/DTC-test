<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dtctheme
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="bg-secondary text-white pt-5">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-4 footer-left-col">
					<?php dynamic_sidebar( 'footer-widget-col-one' ); ?>
					</div>
					<div class="col-12 col-lg-8 footer-right-col w-80">
						<?php dynamic_sidebar( 'footer-widget-col-two' ); ?>
						<div class="row">
							<div class="col-12 col-lg-4">
							<?php dynamic_sidebar( 'footer-widget-col-three' ); ?>
							</div>
							<div class="col-12 col-lg-4">
							<?php dynamic_sidebar( 'footer-widget-col-four' ); ?>
							</div>
							<div class="col-12 col-lg-4">
							<?php dynamic_sidebar( 'footer-widget-col-five' ); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bg-secondary text-white copyright-section">
			<div class="container pt-4 pb-4">
				<div class="row copyright-row d-flex">
					<div class="col-12 col-lg-4 align-item-center">
					<p>Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' );?>. All Rights Reserved</a>
					</div>
					<div class="col-12 col-lg-8 h-25 d-inline-block text-right">
					<p>Designed by Batman</a>
					</div>
				</div>
			</div>
		</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
