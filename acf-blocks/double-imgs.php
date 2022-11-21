<?php $first_image = get_sub_field( 'first_image' ); ?>
			<?php if ( $first_image ) : ?>
				<img src="<?php echo esc_url( $first_image['url'] ); ?>" alt="<?php echo esc_attr( $first_image['alt'] ); ?>" />
			<?php endif; ?>
			<?php $second_image = get_sub_field( 'second_image' ); ?>
			<?php if ( $second_image ) : ?>
				<img src="<?php echo esc_url( $second_image['url'] ); ?>" alt="<?php echo esc_attr( $second_image['alt'] ); ?>" />
			<?php endif; ?>
			<?php the_sub_field( 'sub_header' ); ?>
			<?php the_sub_field( 'header' ); ?>
			<?php the_sub_field( 'content' ); ?>
			<?php the_sub_field( 'button_label' ); ?>
			<?php $button_link = get_sub_field( 'button_link' ); ?>
			<?php if ( $button_link ) : ?>
				<a href="<?php echo esc_url( $button_link['url'] ); ?>" target="<?php echo esc_attr( $button_link['target'] ); ?>"><?php echo esc_html( $button_link['title'] ); ?></a>
			<?php endif; ?>