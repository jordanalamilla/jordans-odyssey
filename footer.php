<?php
/**
 * The template for displaying the footer.
 *
 * @package Odyssey
 */

wp_footer();
?>

<?php if ( ! is_front_page() ) { ?>

	<footer class="odd-footer">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-4">
					<div class="sig sig-dark footer-sig"></div>
				</div>

				<!-- Icons -->
				<div class="col-12 col-md-8">
					<?php get_template_part( 'template-parts/icons' ); ?>
				</div>
			</div>
		</div>
	</footer>
	
<?php } ?>
