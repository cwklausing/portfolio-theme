<?php 
/**
 * Part for portfolio items
 */

$item_id = get_sub_field( 'portfolio_item' )->ID;
$post = $item_id;
setup_postdata( $post );
$desktop = get_field( 'desktop_image' )['sizes']['large'];
$mobile = get_field( 'mobile_image' )['sizes']['large'];
?>
<div class="port-item">
	<h3 class="port-item__title"><?php the_title(); ?></h3>
	<div class="port-item__images">
		<div class="port-item__desktop-image">
			<img src="<?php echo esc_url( $desktop ); ?>" />
		</div>
		<div class="port-item__mobile-image">
			<img src="<?php echo esc_url( $mobile ); ?>" />
		</div>
	</div>
</div>

<?php wp_reset_postdata(); ?>