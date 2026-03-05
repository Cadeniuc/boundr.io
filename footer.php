<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Boundr
 */

?>

		<footer class="pb-[calc(var(--px)*40)] pt-[calc(var(--px)*75)]">
			<div class="container">
				<div class="mb-[calc(var(--px)*250)]">
					<div class="flex">
						<div class="w-[calc(var(--px)*513)] pr-[calc(var(--px)*120)]">
							<div class="font_suisse">
								Purus velit ac lacus pulvinar viverra gravida congue. Condimentum consectetur lorem a egestas tempus commodo facilisis magna.
							</div>
						</div>
						<div class="w-[calc(100%-(var(--px)*513)-(var(--px)*433))] pr-[calc(var(--px)*100)]">
							<ul class="site_menu space-y-[calc(var(--px)*12)] menu_underline">
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
						<div class="w-[calc(var(--px)*433)]">
							<div class="font_suisse mb-[calc(var(--px)*23)] flex items-center gap-[calc(var(--px)*16)]">
								Newsletter 
								<div>
									<svg class="loading_form w-[calc(var(--px)*18)] h-auto" width="38" height="38" viewBox="0 0 38 38" xmlns="http://www.w3.org/2000/svg" stroke="#000">
										<g fill="none" fill-rule="evenodd">
											<g transform="translate(1 1)" stroke-width="2">
												<circle stroke-opacity=".1" cx="18" cy="18" r="18"></circle>
												<path d="M36 18c0-9.94-8.06-18-18-18">
													<animateTransform attributeName="transform" type="rotate" from="0 18 18" to="360 18 18" dur="1s" repeatCount="indefinite"></animateTransform>
												</path>
											</g>
										</g>
									</svg>
								</div>
							</div>
							<div class="form_contact min-h-[calc(var(--px)*103)] relative">
								<?php
$whitelist = ['127.0.0.1', '::1'];

$ip   = $_SERVER['REMOTE_ADDR'] ?? '';
$host = $_SERVER['HTTP_HOST'] ?? ''; // ex: boundr.io:8888

$isLocal = in_array($ip, $whitelist, true) || str_contains($host, ':8888');

if ($isLocal) {
  echo do_shortcode('[contact-form-7 id="204fa81" title="Newsletter"]');
} else {
  echo do_shortcode('[contact-form-7 id="c742c7e" title="Contact form 1"]');
}
?>

							</div>
							<div class="mt-[calc(var(--px)*38)] flex gap-[calc(var(--px)*24)]">
								<a data-underline-link="alt" class="inline-block" href="http://linkedin.com/" target="_blank">
									Linkedin
								</a>
							</div>
						</div>
					</div>
				</div>
				<div>
					<div class="flex items-end justify-between">
						<div>
							<img class="w-[calc(var(--px)*285)] h-auto" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="">
						</div>
						<div class="flex gap-[calc(var(--px)*56)] items-center text_base">
							<div>
								Boundr © <?php the_time('Y'); ?> All rights reserved.
							</div>
							<ul class="flex gap-[calc(var(--px)*32)] menu_line_a">
								<li>
									<a href="#">Privacy policy</a>
								</li>
								<li>
									<a href="#">Cookie preferences</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html>
