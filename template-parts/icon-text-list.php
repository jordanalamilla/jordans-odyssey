<?php
if ( have_rows( 'icon_links', 'option' ) ) { ?>

	<section class="icon-text-links">
		<ul>

			<?php
			while ( have_rows( 'icon_links', 'option' ) ) {
				the_row();
				$il_icon_url = get_sub_field( 'il_icon', 'option' );
				$il_link     = get_sub_field( 'il_link', 'option' );

				if ( $il_link ) {
					$link_url    = $il_link['url'];
					$link_title  = $il_link['title'];
					$link_target = $il_link['target'] ? $il_link['target'] : '_self';
					?>
					<li>
						<a class="il-text-link"
							href="<?php echo esc_url( $link_url ); ?>"
							target="<?php echo esc_attr( $link_target ); ?>"
							title="<?php echo esc_html( $link_title ); ?>">

							<?php echo esc_html( $link_title ); ?>
						</a>
					</li>
				
					<?php
				}
			}
			?>

		</ul>
	</section>

	<?php
}
