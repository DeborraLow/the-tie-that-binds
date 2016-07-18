<section class="pageheader">

<div class="headerwrap">

	<div class="ratio"></div>

	<?php $background_image = get_sub_field('background_image'); ?>
	<?php if ($background_image) : ?>
	<?php $imgsrc = wp_get_attachment_image_src($background_image, 'full'); ?>
	<div class="headerbg" style="background-image: url('<?php echo $imgsrc[0]; ?>')"></div>
	<?php else: ?>
	<div class="headerbg"></div>
	<?php endif; ?>

	<div class="inner">
		<h1><span><?php the_title(); ?></span></h1>
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