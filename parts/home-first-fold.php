<?php
/**
 * Part for first fold of home page
 */
$hero_image 	= get_field( 'hero_image' );
$welcome_text	= get_field( 'welcome_text' );
$button_text	= get_field( 'welcome_button_text' );
$button_url		= get_field( 'welcome_button_link' );
?>

<div class="fold-first">
	<div class="home-hero">
		<?php echo wp_get_attachment_image( $hero_image['ID'], 'large', false, '' ); ?>
	</div>
	<div class="welcome-section">
		<h1 class="welcome-section__text"><?php echo esc_html( $welcome_text ); ?></h1>
		<a href="<?php echo esc_url( $button_url ); ?>" class="button">
			<?php echo esc_html( $button_text ); ?>
		</a>
	</div>
</div>