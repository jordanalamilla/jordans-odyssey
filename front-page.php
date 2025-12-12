<?php
/**
 * The home page template.
 *
 * @package Odyssey
 */

get_header();
?>

<section class="home-container">
	<div class="container">

		<!-- Image -->
		<div class="row">
			<div class="col-12">
				<div class="home-image">
					<img src="<?php echo esc_html( get_stylesheet_directory_uri() ) . '/images/logos/signature-2025.svg'; ?>" alt="">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<div class="home-menu">
					<h2 class="p">
						<?php echo bloginfo( 'description' ); ?>
					</h2>
					<a href="mailto:<?php echo bloginfo( 'admin_email' ); ?>" target="_blank">
						<h6><?php echo bloginfo( 'admin_email' ); ?></h6>
					</a>

					<?php get_template_part( 'template-parts/icons' ); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
