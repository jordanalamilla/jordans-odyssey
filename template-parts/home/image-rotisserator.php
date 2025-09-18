<?php
$home_images      = get_field( 'h_images' );
$home_images_size = 'large';

if ( $home_images ) {
	$rand_image_array_id = wp_rand( 0, count( $home_images ) - 1 ); ?>

	<div class="image-rotisserator">
		<div class="ir-image"
			style="background-image: url('<?php echo esc_attr( $home_images[ $rand_image_array_id ] ); ?>');"></div>
	</div>

	<?php
}
