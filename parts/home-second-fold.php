<?php
/**
 * Part for second fold of home page
 */
$about_title = get_field( 'about_title' );
?>

<div class="fold-second">
	<div class="fold-second__text max-width">
		<div class="fold-second__header">
			<h2 class="fold-second__title"><?php echo esc_html( $about_title ); ?></h2>
			<div class="fold-second__underline sbc-underline"></div>
		</div>
		<div class="fold-second__content">
			<?php the_content(); ?>
		</div>
	</div>
</div>