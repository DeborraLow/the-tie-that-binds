<?php get_header(); ?>
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>

		<?php if( have_rows('blocks') ):
			while ( have_rows('blocks') ) : the_row();
				if( get_row_layout() == 'site_intro' ):
					include(locate_template('parts/block-site_intro.php'));
				elseif( get_row_layout() == 'page_header' ):
					include(locate_template('parts/block-page_header.php'));
				elseif( get_row_layout() == 'text_block' ):
					include(locate_template('parts/block-text_block.php'));
				elseif( get_row_layout() == 'large_text' ):
					include(locate_template('parts/block-large_text.php'));
				elseif( get_row_layout() == 'single_image' ):
					include(locate_template('parts/block-single_image.php'));
				elseif( get_row_layout() == 'dual_image' ):
					include(locate_template('parts/block-dual_image.php'));
				elseif( get_row_layout() == 'garden_block' ):
					include(locate_template('parts/block-garden_block.php'));
				elseif( get_row_layout() == 'news_block' ):
					include(locate_template('parts/block-news_block.php'));
				elseif( get_row_layout() == 'big_map' ):
					include(locate_template('parts/block-big_map.php'));
				elseif( get_row_layout() == 'visit_footer' ):
					include(locate_template('parts/block-visit_footer.php'));
				endif;
			endwhile;
		endif; ?>

	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
