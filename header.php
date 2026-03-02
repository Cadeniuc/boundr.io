<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Boundr
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-barba="wrapper">
<?php wp_body_open(); ?>

<!-- <div class="preloader_backdrop fixed inset-0 bg-white z-[100] pointer-events-none"></div> -->

<header class="fixed top-10 inset-x-0 pointer-events-none px-[50px] z-50">
	<div class="mx-auto max-w-[1340px]">
		<div class="bg-[#DBDBDB]/40 rounded-[5px] backdrop-blur-[60px] h-[]">
			<div class="container">
				<div class="px-5 flex items-center h-[76px] pointer-events-auto">
					<div class="flex-none">
						<img class="w-[110px] h-auto" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="">
					</div>
					<div class="flex-1">
						<ul class="menu_header text-base font-medium">
							<li>
								<a href="#!">
									Our Mission
								</a>
							</li>
							<li>
								<a href="#!">
									What it does
								</a>
							</li>
							<li>
								<a href="#!">
									How it works
								</a>
							</li>
							<li>
								<a href="#!">
									Features
								</a>
							</li>
							<li>
								<a href="#!">
									Pricing
								</a>
							</li>
							<li>
								<a href="#!">
									FAQ
								</a>
							</li>
						</ul>
					</div>
					<div class="flex-none">
						<a href="#!" class="btn_site small bg_cta">
							Join the waitlist
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

<div data-barba="container" data-barba-namespace="<?=$namespace?>" class="wrapper_site">
    <?php // get_template_part( 'template-parts/views/top-header'); ?>

    <div class="inner_site">


