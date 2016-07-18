<section class="textblock"><div class="margin">

	<?php $headline = get_sub_field('headline'); ?>
	<?php if ( $headline && $headline != '' ) : ?>
	<h2><?php echo $headline; ?></h2>
	<?php endif;?>

	<?php $text = get_sub_field('text'); ?>
	<?php if ( $text && $text != '' ) : ?>
	<?php echo wpautop($text); ?>
	<?php endif;?>

	<?php $show_big_link = get_sub_field('show_big_link'); ?>
	<?php $big_link_text = get_sub_field('big_link_text'); ?>
	<?php $big_link_url = get_sub_field('big_link_url'); ?>
	<?php if ( $show_big_link != 'no' && $big_link_text != '' && $big_link_url != '' ) : ?>
	<p class="biglink"><a href="<?php echo $big_link_url; ?>"><?php echo $big_link_text; ?></a></p>
	<?php endif;?>

</div></section>