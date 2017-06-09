<?php
/**
 * Part for third fold of home page
 */
?>

<?php if ( have_rows( 'portfolio_items' ) ) : 
	$title = get_field( 'portfolio_title' ); ?>
	<div class="portfolio__wrap">
		<div class="portfolio">
			<div class="portfolio__header">
				<h2 class="portfolio__title"><?php echo $title; ?></h2>
				<div class="portfolio__underline sbc-underline"></div>
			</div>
			<div class="portfolio__pieces">
			<?php while ( have_rows( 'portfolio_items' ) ) : the_row(); ?>
				<?php get_template_part( 'parts/portfolio-item' ); ?>
			<?php endwhile; ?>	
			</div>
		</div>
	</div>
<?php endif; ?>