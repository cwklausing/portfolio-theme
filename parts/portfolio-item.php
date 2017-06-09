<?php 
/**
 * Part for portfolio items
 */

$item_id = get_sub_field( 'portfolio_item' )->ID;
$post = $item_id;
setup_postdata( $post );
$url 	= get_field( 'url' );
$desktop = get_field( 'desktop_image' )['sizes']['large'];
$mobile = get_field( 'mobile_image' )['sizes']['large'];
?>
<div class="port-item">
	<h3 class="port-item__title"><?php the_title(); ?></h3>
	<div class="port-item__images">
		<a href="<?php echo esc_url( $url ); ?>" class="port-item__desktop-image" target="_blank">
			<img src="<?php echo esc_url( $desktop ); ?>" />
			<div class="image-overlay"></div>
		</a>
		<a href="<?php echo esc_url( $url ); ?>" class="port-item__mobile-image" target="_blank">
			<img src="<?php echo esc_url( $mobile ); ?>" />
			<div class="image-overlay"></div>
		</a>
	</div>
	<div class="port-mobile-message">
		<a href="<?php echo esc_url( $url ); ?>" class="port-mobile-message__link" target="_blank">
			<p class="port-mobile-message__text button">
				<span>
					<?php esc_html_e( 'Visit Site', 'sbconnor' ); ?>
				</span>
				<svg aria-labelledby="icon-angle-right" class="icon social-media__icon">
					<use xlink:href="#icon-angle-right"></use>
				</svg>
			</p>
		</a>
	</div>
	<div class="port-description">
		<?php the_content(); ?>
	</div>
</div>

<?php wp_reset_postdata(); ?>