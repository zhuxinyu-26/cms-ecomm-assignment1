<?php
/* 
The header
This is template that displays all of the <head> section
*/
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
	<!-- add our custom CSS file -->
	<link rel="stylesheet"
		href="<?php echo esc_url(home_url('wp-content/themes/assignment1/assets/css/assignment1-style.css')); ?>">
	<!-- add our custom font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&family=Merriweather&family=Roboto:ital@0;1&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
	<header>
		<div>
			<a href="<?php echo esc_url(home_url()); ?>">
				<img src="<?php echo esc_url(home_url('wp-content/uploads/2023/03/Team_Cherry_Logo_Big.png')); ?>"
					alt="header logo">
			</a>
		</div>
		<nav>
			<?php
			wp_nav_menu(
				array(
					'menu' => 'main',
					'theme_location' => '',
					'depth' => 2,
					'fallback_cb' => false
				)
			);
			?>
		</nav>
	</header>