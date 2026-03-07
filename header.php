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

<div class="preloader_backdrop fixed inset-0 bg-bg z-[100] pointer-events-none hidden"></div>

<header class="lg:fixed top-[calc(var(--px)*36)] inset-x-0 pointer-events-none lg:px-[calc(var(--px)*16)] z-50 header_top">
	<div class="container in_to_header mx-auto">
		<div class="relative z-[1] pt-6 lg:pt-0">
			<div class="bg_header absolute inset-y-0 -inset-x-[calc(var(--px)*12)] bg-[#DBDBDB]/40 rounded-[calc(var(--px)*5)] backdrop-blur-[60px] z-[-1] hidden lg:block"></div>
			<div class="wrapper_header lg:px-[calc(var(--px)*16)] flex items-center justify-between lg:justify-center lg:h-[calc(var(--px)*80)] pointer-events-auto">
				<div class="flex-none">
					<a href="#top" class="go_to_screen">
						<img class="w-[109px] md:w-[140px] lg:w-[calc(var(--px)*110)] h-auto" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="">
					</a>
				</div>
				<div class="flex-1 hidden lg:flex justify-center relative">
					<div class="relative wrap_menu_head">
						<div class="follow_menu_active"></div>
						<ul class="menu_header site_menu text_base font-medium">
							<li>
								<a href="#mission">
									Our Mission
								</a>
							</li>
							<li>
								<a href="#solution">
									What it does
								</a>
							</li>
							<li>
								<a href="#how_works">
									How it works
								</a>
							</li>
							<li>
								<a href="#features">
									Features
								</a>
							</li>
							<li>
								<a href="#pricing">
									Pricing
								</a>
							</li>
							<li>
								<a href="#faq">
									FAQ
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="flex-none hidden lg:block">
					<a href="https://app.boundr.io/waitlist" target="_blank" class="btn_site small">
						Join the waitlist
					</a>
				</div>
				<div class="lg:hidden">
					<svg width="46" height="8" viewBox="0 0 46 8" fill="none" xmlns="http://www.w3.org/2000/svg">
						<rect width="46" height="1" fill="black"/>
						<rect y="7" width="46" height="1" fill="black"/>
					</svg>
				</div>
			</div>
		</div>
	</div>
</header>

<div data-barba="container" data-barba-namespace="<?=$namespace?>" class="wrapper_site">
    <?php // get_template_part( 'template-parts/views/top-header'); ?>

    <div class="inner_site">


