<?php
/**
 * Part for second fold of home page
 */
$about_title 	= get_field( 'about_title' );
$button_link 	= get_field( 'about_button' );
$button_text	= get_field( 'about_button_text' );
?>

<div class="fold-second">
	<div class="fold-second__header">
		<h2 class="fold-second__title"><?php echo esc_html( $about_title ); ?></h2>
		<div class="fold-second__underline sbc-underline"></div>
	</div>
	<div class="fold-second__text max-width">
		<div class="fold-second__content">
			<?php the_content(); ?>
		</div>
		<div class="fold-second__button">
			<a href="<?php echo esc_url( $button_link ); ?>" class="button button--view-process">
				<?php echo esc_html( $button_text ); ?>
			</a>
		</div>
	</div>
</div>