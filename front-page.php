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
		<div class="row">
			<div class="col-12">
				<div class="home-content-wrapper">

					<!-- Image -->
					<div class="home-section">
						<?php get_template_part( 'template-parts/home/image-rotisserator' ); ?>
					</div>

					<!-- Title -->
					<div class="home-section">
						<h1 class="h6 badge bg-dark">
							<?php echo esc_attr( bloginfo( 'title' ) ); ?>
						</h1>
					</div>

					<!-- Menu -->
					<div class="home-section">
						<?php
						wp_nav_menu(
							array(
								'menu' => 'primary-menu',
							)
						);
						?>
					</div>

					<!-- Icons -->
					<div class="home-section">
						<?php get_template_part( 'template-parts/icons' ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
