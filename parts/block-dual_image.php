<?php $first_image = get_sub_field('first_image'); ?>
<?php if ( $first_image ) : ?>

	<section class="dualimage first">
		<figure class="margin">
		<?php spellerberg_the_image($first_image); ?>
		</figure>

		<?php 
			$thumb_img = get_post( $first_image ); // Get post by ID 
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

<?php $second_image = get_sub_field('second_image'); ?>
<?php if ( $second_image ) : ?>

	<section class="dualimage second">
		<figure class="margin">
		<?php spellerberg_the_image($second_image); ?>
		</figure>

		<?php 
			$thumb_img = get_post( $second_image ); // Get post by ID 
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
