<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package premix
 */

?>
	<!-- Premix Footer Bottom Section Start -->
	<?php get_template_part('widgets'); ?>
	<!-- Premix Footer -->
	<footer class="premix-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<?php esc_html_e( premix_option('copyright_text' ) ); ?>
				</div>
			</div>
		</div>
	</footer>
		
</body>
</html>
<?php wp_footer(); ?> 