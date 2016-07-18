<!doctype html>
<html>
<head>

<!-- Website by http://martyspellerberg.com & http://www.tomkracauer.com/ -->

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php get_template_part('parts/favicons'); ?>
<?php get_template_part('parts/meta'); ?>
<?php wp_head(); ?>

</head>
<body>


<nav class="primarynav"> 

	<div class="wpadminbarspacer"></div>

	<div class="primarynavwraper">

	<a class="homelink" href="<?php echo get_site_url(); ?>"><span>Home</span></a>


	<div class="mobiletoggle">
		<div class="opennav toggle">Menu</div>	
		<div class="closenav toggle">Close</div>
	</div>

	<div class="topnav">
		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>		
	</div>

	</div>

</nav>

<div class="layoutspacer"></div>
