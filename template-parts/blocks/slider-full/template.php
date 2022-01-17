<?php

$id = 'block-slider-full-' . $block['id'];

if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = '';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

$items = get_field('items') ?: '';

if($items) {
?>

<section id="<?php echo esc_attr($id); ?>" class="block-slider-full swiper-container <?php echo esc_attr($className); ?>">
	<div class="swiper-wrapper">
		<?php $i = 0; foreach($items as $item){ $i++; ?>
			<div class="block-slider-full__item swiper-slide block-slider-full__item--<?php echo $i; ?>">
				<?php echo wp_get_attachment_image( $item['ID'], 'large' ); ?>
			</div>
		<?php } ?>
	</div>
</section>
<?php }