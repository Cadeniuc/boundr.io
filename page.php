<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Boundr
 */

get_header();
?>

<div class="pt-[100px] md:pt-[calc(var(--px)*180)] md:mb-[calc(var(--px)*50)]">
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="container">
			<div class="max-w-[calc(var(--px)*800)] mx-auto">
				<h1 class="text-[45px] lg:text-[calc(var(--px)*85)] leading-[113%] font_suisse">
					<?php echo the_title(); ?>
				</h1>
				<div class="mt-10 md:mt-[calc(var(--px)*70)] prose max-w-full">
					<?php echo the_content(); ?>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
</div>

<?php
get_footer();
