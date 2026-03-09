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

<?php
$cta_text = '';
$cta_url = '';
?>

<?php if( have_rows('cta_button', 'options') ): ?>
	<?php while( have_rows('cta_button', 'options') ): the_row(); 
		$cta_text = get_sub_field('text');
		$cta_url = get_sub_field('action');
		?>
	<?php endwhile; ?>
<?php endif; ?>

<div class="preloader_backdrop fixed inset-0 bg-bg z-[100] pointer-events-none"></div>

<header class="fixed top-0 lg:top-[calc(var(--px)*36)] inset-x-0 pointer-events-none lg:px-[calc(var(--px)*16)] z-50 header_top bg-[#EFEFEA]/90 lg:bg-transparent backdrop-blur-sm lg:backdrop-blur-none">
	<div class="container in_to_header mx-auto">
		<div class="relative z-[1] py-6 lg:py-0">
			<div class="bg_header absolute inset-y-0 -inset-x-[calc(var(--px)*12)] bg-[#DBDBDB]/40 rounded-[calc(var(--px)*5)] backdrop-blur-[60px] z-[-1] hidden lg:block"></div>
				<div class="wrapper_header lg:px-[calc(var(--px)*16)] flex items-center justify-between lg:justify-center lg:h-[calc(var(--px)*80)] pointer-events-auto">
					<div class="flex-none">
						<a href="#top" class="go_to_screen">
								<?php
								$logo_header = get_field('logo_header', 'options');
								?>
								<img class="w-[109px] md:w-[140px] lg:w-[calc(var(--px)*110)] h-auto" src="<?=$logo_header?>" alt="">
						</a>
				</div>
				<div class="flex-1 hidden lg:flex justify-center relative">
					<div class="relative wrap_menu_head">
						<div class="follow_menu_active"></div>
							<?php if( have_rows('menu_global', 'options') ): ?>
								<ul class="menu_header site_menu text_base font-medium">
									<?php while( have_rows('menu_global', 'options') ): the_row(); 
										$text = get_sub_field('text');
										$url = get_sub_field('url');
										?>
										<li>
											<a href="<?=$url?>">
												<?=$text?>
											</a>
										</li>
									<?php endwhile; ?>
								</ul>
							<?php endif; ?>
					</div>
				</div>
				<div class="flex-none hidden lg:block">
					<?php if($cta_text) : ?>
						<a href="<?=$cta_url?>" target="_blank" class="btn_site small">
							<?=$cta_text?>
						</a>
					<?php endif ?>
				</div>
				<div class="lg:hidden">
					<button class="menu_burger h-full w-[46px] flex flex-col items-center justify-center cursor-pointer">
						<span></span>
						<span></span>
					</button>
				</div>
			</div>
		</div>
	</div>
</header>

<div id="menu_mobile" class="lg:hidden fixed inset-0 z-[49] bg-[#EFEFEA] opacity-0 invisible">
	<div class="w-full h-full flex py-[90px] px-6 overflow-y-auto" data-lenis-prevent>
		<div class="my-auto w-full menu-header">
				<?php if( have_rows('menu_global', 'options') ): ?>
					<ul class="heading_h4 site_menu font-medium space-y-6">
						<?php while( have_rows('menu_global', 'options') ): the_row(); 
							$text = get_sub_field('text');
							$url = get_sub_field('url');
							?>
							<li>
								<a href="<?=$url?>">
									<?=$text?>
								</a>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
		</div>
		<div class="absolute bottom-0 inset-x-0 p-6 menu_mob_foot">
			<div>
				<?php if($cta_text) : ?>
					<a href="<?=$cta_url?>" target="_blank" class="btn_site small w-full lg:w-auto">
						<?=$cta_text?>
					</a>
				<?php endif ?>
			</div>
		</div>
	</div>
</div>

<div data-barba="container" data-barba-namespace="<?=$namespace?>" class="wrapper_site">
    <div class="inner_site">
