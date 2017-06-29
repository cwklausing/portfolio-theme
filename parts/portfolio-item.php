<?php 
/**
 * Part for portfolio items
 */

$item_id = get_sub_field( 'portfolio_item' )->ID;
$post = $item_id;
setup_postdata( $post );
$url 	= get_field( 'url' );
$desktop = get_field( 'desktop_image' )['sizes']['medium'];
$mobile = get_field( 'mobile_image' )['sizes']['medium'];
?>
<article class="port-item">
	<div class="port-item__images">
		<a href="<?php echo esc_url( $url ); ?>" class="port-item__desktop-image" target="_blank">
			<img src="<?php echo esc_url( $desktop ); ?>" />
			<div class="image-overlay">
				<span class="image-overlay__text">
					<?php echo esc_html_e( 'Visit Site', 'sbconnor' ); ?>
				</span>
			</div>
		</a>
		<a href="<?php echo esc_url( $url ); ?>" class="port-item__mobile-image" target="_blank">
			<img src="<?php echo esc_url( $mobile ); ?>" />
			<div class="image-overlay">
				<span class="image-overlay__text">
					<?php echo esc_html_e( 'Visit Site', 'sbconnor' ); ?>
				</span>
			</div>
		</a>
	</div>
	<div class="port-item__description max-width">
		<h3 class="port-item__title"><?php the_title(); ?></h3>
		<div class="port-item__underline sbc-underline"></div>
		<?php the_content(); ?>
	</div>
	<div class="button--visit-site">
		<a href="<?php echo esc_url( $url ); ?>" class="button--visit-site__link" target="_blank">
			<p class="button--visit-site__text button">
				<span>
					<?php esc_html_e( 'Visit Site', 'sbconnor' ); ?>
				</span>
				<svg aria-labelledby="icon-angle-right" class="icon social-media__icon">
					<use xlink:href="#icon-angle-right"></use>
				</svg>
			</p>
		</a>
	</div>
</article>

<?php wp_reset_postdata(); ?>