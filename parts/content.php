<?php
/**
 * Default Content
 *
 * @package sbconnor;
 */
?>

<main <?php post_class( 'entry' ); ?> >
	<header class="entry__header">
		<h1 class="entry__title">
			<?php the_title(); ?>
		</h1>
		<div class="entry__underline sbc-underline"></div>
	</header>
	<div class="entry__content">
		<?php the_content(); ?>
	</div>
</main>