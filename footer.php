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

<footer class="pb-5 pt-[75px]">
	<div class="container">
		<div class="mb-[250px]">
			<div class="flex">
				<div>
					<div class="font_suisse">
						Purus velit ac lacus pulvinar viverra gravida congue. Condimentum consectetur lorem a egestas tempus commodo facilisis magna.
					</div>
					<div>
						<a href="mailto:hello@boundr.io">
							hello@boundr.io
						</a>
					</div>
				</div>
				<div>
					<ul>
						<li>
							<a href="#">Our Mission</a>
						</li>
						<li>
							<a href="#">What it does</a>
						</li>
						<li>
							<a href="#">How it works</a>
						</li>
						<li>
							<a href="#">Features</a>
						</li>
						<li>
							<a href="#">Pricing</a>
						</li>
						<li>
							<a href="#">FAQ</a>
						</li>
					</ul>
				</div>
				<div>
					<div>Newsletter</div>
					<form>
						<input type="email" placeholder="Email Address">
					</form>
					<div>
						<a href="http://linkedin.com/" target="_blank">
							Linkedin
						</a>
					</div>
				</div>
			</div>
		</div>
		<div>
			<div class="container">
				<div class="flex items-end justify-between">
					<div>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="">
					</div>
					<div class="flex gap-[30px] items-center">
						<div>
							Boundr © 2026 All rights reserved.
						</div>
						<ul class="flex gap-[30px]">
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
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
