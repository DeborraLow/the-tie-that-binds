<section class="newsblock"><div class="margin">

	<?php $date = get_sub_field('date'); ?>
	<?php if ( $date && $date != '' ) : ?>
	<p class="date"><?php echo $date; ?></p>
	<?php endif;?>

	<?php $headline = get_sub_field('headline'); ?>
	<?php if ( $headline && $headline != '' ) : ?>
	<h2><?php echo $headline; ?></h2>
	<?php endif;?>

	<?php $text = get_sub_field('text'); ?>
	<?php if ( $text && $text != '' ) : ?>
	<?php echo wpautop($text); ?>
	<?php endif;?>

</div></section>