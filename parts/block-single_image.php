<?php $image = get_sub_field('image'); ?>
<?php if ( $image ) : ?>
<section class="singleimage">
	<figure class="margin">
	<?php spellerberg_the_image($image); ?>
	</figure>
	<?php 
		$thumb_img = get_post( $image ); // Get post by ID 
		$caption = $thumb_img->post_excerpt;
		$description = $thumb_img->post_content;

		if ( $caption != '' || $description != '' ) :

	?>

		<figcaption class="captionmargin">

			<?php if ( $caption != '' ) : ?>
				<div class="caption"><?php echo wpautop($caption); ?></div>
			<?php endif; ?>

			<?php if ( $description != '' ) : ?>
				<div class="description"><?php echo wpautop($description); ?></div>
			<?php endif; ?>

		</figcaption>

		<?php endif; ?>

</section>
<?php endif; ?>