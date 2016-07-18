<?php $intro_text = get_sub_field('intro_text'); ?>
<?php  if ( $intro_text ) : ?>

<section class="siteintro">

<?php $background_image = get_sub_field('background_image'); ?>

<div class="headerwrap">

	<div class="ratio"></div>

	<?php if ($background_image) : ?>
	<?php $imgsrc = wp_get_attachment_image_src($background_image, 'full');  ?>
	<div class="headerbg" style="background-image: url('<?php echo $imgsrc[0]; ?>')"></div>
	<?php else: ?>
	<div class="headerbg"></div>
	<?php endif; ?>

	<div class="inner">
		<?php echo $intro_text; ?>
	</div>

</div>

<?php if ($background_image) : ?>
<?php 
	$thumb_img = get_post( $background_image ); // Get post by ID 
	$caption = $thumb_img->post_excerpt;
	$description = $thumb_img->post_content;

	if ( $caption != '' || $description != '' ) :

?>

	<div class="captionmargin">

		<?php if ( $caption != '' ) : ?>
			<div class="caption"><?php echo wpautop($caption); ?></div>
		<?php endif; ?>

		<?php if ( $description != '' ) : ?>
			<div class="description"><?php echo wpautop($description); ?></div>
		<?php endif; ?>

	</div>

	<?php endif; ?>

<?php endif; ?>

</section>
<?php endif; ?>
