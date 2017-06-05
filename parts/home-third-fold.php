<?php
/**
 * Part for third fold of home page
 */
?>

<?php if ( have_rows( 'portfolio_items' ) ) : 
	$title = get_sub_field( 'portfolio_title' ); ?>
	<div class="fold-third">
		<h2 class="fold-third__title"><?php echo $title; ?></h2>
		<div class="portfolio">
		<?php while ( have_rows( 'portfolio_items' ) ) : the_row(); 
			$item = get_sub_field( 'portfolio_item' );
			?>
			<div class="portfolio__item">
				<?php echo esc_html( $item ); ?>
			</div>
		<?php endwhile; ?>	
		</div>
	</div>
<?php endif; ?>