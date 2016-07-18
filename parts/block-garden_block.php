<section class="gardenblock"><div class="margin">

	<?php $garden_title = get_sub_field('garden_title'); ?>
	<?php if ( $garden_title && $garden_title != '' ) : ?>
	<h2><?php echo $garden_title; ?></h2>
	<?php endif;?>

	<?php $images = get_sub_field('images'); ?>
	<?php if ( $images ) : ?>
		<div class="plants">
		<?php foreach ( $images as $image ) : ?>
			<div class="plant">
				<div class="image" style="background-image: url('<?php echo $image["url"]; ?>')">
					<div class="ratio"></div>
				</div>

				<?php $imagedescription = $image["description"]; ?>
				<?php if ( $imagedescription != '' ) : ?>
					<div class="imagedescription"><p><span><?php echo $imagedescription; ?></span></p></div>
				<?php endif; ?>

			</div>
		<?php endforeach; ?>
		</div>
	<?php endif; ?>

	<?php $icon = get_sub_field('icon'); ?>
	<?php if ( $icon ) : ?>
	<div class="icon">
		<?php spellerberg_the_image($icon); ?>
	</div>
	<?php endif; ?>

	<?php $description = get_sub_field('description'); ?>
	<?php if ( $description && $description != '' ) : ?>
	<?php echo wpautop($description); ?>
	<?php endif;?>

</div></section>