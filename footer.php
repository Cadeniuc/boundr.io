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

if( have_rows('footer_info', 'options') ): 
	while( have_rows('footer_info', 'options') ): the_row(); 
		$description_footer = get_sub_field('description');
	endwhile; 
endif;
?>

		<footer class="pb-6 lg:pb-[calc(var(--px)*15)] pt-[100px] lg:pt-[calc(var(--px)*75)]">
			<div class="container">
				<div class="mb-[80px] lg:mb-[calc(var(--px)*250)]">
					<div class="grid gap-20 lg:gap-0 lg:flex">
						<div class="lg:w-[calc(var(--px)*513)] lg:pr-[calc(var(--px)*120)]">
							<div class="font_suisse">
								<?=$description_footer?>
							</div>
						</div>

						<div class="lg:w-[calc(100%-(var(--px)*513)-(var(--px)*433))] lg:pr-[calc(var(--px)*100)]">
							<?php if( have_rows('menu_global', 'options') ): ?>
								<ul class="site_menu space-y-[calc(var(--px)*12)] menu_underline">
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
						<?php if( have_rows('footer_info', 'options') ): ?>
							<?php while( have_rows('footer_info', 'options') ): the_row(); ?>

								<?php if( have_rows('form', 'options') ): ?>
									<?php while( have_rows('form', 'options') ): the_row(); 
										$title = get_sub_field('title');
										$form_shortcode = get_sub_field('form_shortcode');
										?>
										<div class="lg:w-[calc(var(--px)*433)]">
											<div class="font_suisse mb-3 lg:mb-[calc(var(--px)*23)] flex items-center gap-[calc(var(--px)*16)]">
												<?=$title?> 
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
												<?php echo do_shortcode($form_shortcode); ?>
											</div>
											<div class="mt-[calc(var(--px)*38)] flex gap-[calc(var(--px)*24)]">
												<?php if( have_rows('socials', 'options') ): ?>
													<?php while( have_rows('socials', 'options') ): the_row(); 
														$name = get_sub_field('name');
														$url = get_sub_field('url');
														?>
														<a data-underline-link="alt" class="inline-block" href="<?=$url?> " target="_blank">
															<?=$name?> 
														</a>
													<?php endwhile; ?>
												<?php endif; ?>
											</div>
										</div>
									<?php endwhile; ?>
								<?php endif; ?>

							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>

				<?php if( have_rows('footer_info', 'options') ): ?>
					<?php while( have_rows('footer_info', 'options') ): the_row();
						$logo_footer = get_sub_field('logo_footer');
						?>
						<div>
							<div class="grid lg:flex gap-10 lg:gap-0 md:items-end md:justify-between">
								<div class="order-[1] lg:order-none">
									<img class="w-full md:w-[calc(var(--px)*285)] h-auto" src="<?=$logo_footer?>" alt="">
								</div>
								<?php if( have_rows('more_info') ): ?>
									<?php while( have_rows('more_info') ): the_row();
										$copyright = get_sub_field('copyright');
										?>
										<div class="grid md:flex gap-5 md:gap-[calc(var(--px)*56)] items-center text_base">
											<div>
												Boundr © <?php the_time('Y'); ?> <?=$copyright?>
											</div>
											<ul class="flex gap-[calc(var(--px)*32)] menu_underline">
												<?php if( have_rows('privacy') ): ?>
													<?php while( have_rows('privacy') ): the_row();
														$text = get_sub_field('text');
														$url = get_sub_field('url');
														if($text) :
															?>
															<li>
																<a href="<?=$url?>">
																	<?=$text?>
																</a>
															</li>
														<?php endif; ?>
													<?php endwhile; ?>
												<?php endif; ?>
												<?php if( have_rows('cookie') ): ?>
													<?php while( have_rows('cookie') ): the_row();
														$text = get_sub_field('text');
														$url = get_sub_field('url');
														if($text) :
															?>
															<li>
																<a href="<?=$url?>">
																	<?=$text?>
																</a>
															</li>
														<?php endif; ?>
													<?php endwhile; ?>
												<?php endif; ?>
											</ul>
										</div>
									<?php endwhile; ?>
								<?php endif; ?>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>

			</div>
		</footer>
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html>
