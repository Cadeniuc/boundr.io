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
							<ul class="site_menu space-y-[calc(var(--px)*12)] menu_line_a">
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
							<div class="font_suisse mb-[calc(var(--px)*23)]">
								Newsletter
							</div>
							<form>
								<div class="relative">
									<input class="input_foott" type="email" placeholder="Email Address">
									<button class="absolute right-0 top-1/2 -translate-y-1/2" type="submit">
										<svg class="w-[calc(var(--px)*22)] h-auto" width="22" height="19" viewBox="0 0 22 19" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M21.6309 10.0098L13.0371 18.6035C12.7441 18.8965 12.207 18.8965 11.9141 18.6035C11.6211 18.3105 11.6211 17.7734 11.9141 17.4805L19.1895 10.2051H0.78125C0.341797 10.2051 0 9.86328 0 9.42383C0 9.0332 0.341797 8.64258 0.78125 8.64258H19.1895L11.9141 1.41602C11.6211 1.12305 11.6211 0.585938 11.9141 0.292969C12.207 0 12.7441 0 13.0371 0.292969L21.6309 8.88672C21.9238 9.17969 21.9238 9.7168 21.6309 10.0098Z" fill="black"/>
										</svg>
									</button>
								</div>
							</form>
							<div class="mt-[calc(var(--px)*70)]">
								<a class="border-b inline-block transition hover:border-b-transparent duration-300" href="http://linkedin.com/" target="_blank">
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
							<ul class="flex gap-[calc(var(--px)*32)]">
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
