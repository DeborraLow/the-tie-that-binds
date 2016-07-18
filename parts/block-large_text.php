<?php $text = get_sub_field('text'); ?>
<?php if ( $text && $text != '' ) : ?>
<section class="largetext"><div class="margin">
	<?php echo wpautop( $text ); ?>
</div></section>
<?php endif;?>