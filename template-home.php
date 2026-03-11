<?php
/*
Template Name: Home
*/
get_header();
?>

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

<section class="lg:pb-[90px] lg:pb-[calc(var(--px)*93)] pt-[125px] lg:pt-[calc(var(--px)*150)] overflow-hidden" id="top">
	<div class="container">
		<div class="mb-[49px] md:mb-[80px] lg:mb-[calc(var(--px)*100)]">
			<?php
			$title_site = get_field('heading_text');
			?>
			<h1 class="home_title text-[35px] lg:text-[calc(var(--px)*75)] perspective-midrang leading-[129%] font_suisse text-center">
				<?=$title_site?>
			</h1>
		</div>
		<div>
			<?php
			?>
			<div class="grid md:flex lg:max-w-[calc(var(--px)*945)] gap-[60px] lg:gap-0 mx-auto content_top">
				<?php if( have_rows('left_top') ): ?>
					<?php while( have_rows('left_top') ): the_row(); 
						$text = get_sub_field('text');
						$button = get_sub_field('button');
						?>
						<div class="order-[2] md:order-none md:w-[250px] lg:w-[calc(var(--px)*433)]">
							<div class="lg:pr-[calc(var(--px)*50)] font-medium">
								<?=$text?>
							</div>
							<div class="mt-[calc(var(--px)*40)]">
								<a href="<?=$cta_url?>" target="_blank" class="btn_site min-w-[calc(var(--px)*247)]">
									<?=$cta_text?>
								</a>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>

				<?php if( have_rows('images') ): ?>
					<div class="md:w-[calc(100%-250px)] lg:w-[calc(100%-(var(--px)*433))] -mr-6 md:mr-0">
						<div class="aspect-[16/9] lg:max-w-[calc(var(--px)*420)] mx-auto lg:mx-0" id="slider_emails">
							<?php while( have_rows('images') ): the_row(); 
								$image = get_sub_field('image');
								?>
								<div class="item_email_anim absolute inset-0 flex items-center">
									<img class="w-full h-auto rounded-[calc(var(--px)*4)]" src="<?=$image?>" alt="">
								</div>
							<?php endwhile; ?>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>

		<?php if( have_rows('three_columns') ): ?>
			<?php while( have_rows('three_columns') ): the_row(); 
				$hide = get_sub_field('hide');
				if(!$hide) :
					?>
					<div class="mt-[100px] lg:mt-[calc(var(--px)*96)] content_top">
						<div class="grid md:grid-cols-3 lg:max-w-[calc(var(--px)*1114)] mx-auto">

							<?php if( have_rows('item_1') ): ?>
								<?php while( have_rows('item_1') ): the_row(); 
									$icon = get_sub_field('icon');
									$text = get_sub_field('text');
									?>
									<div class="py-[27px] lg:py-[calc(var(--px)*27)] md:pl-5 lg:px-[calc(var(--px)*40)] gap-[23px] lg:gap-[calc(var(--px)*23)] flex items-center">
										<div class="flex-none w-[56px] lg:w-[calc(var(--px)*56)] h-[56px] lg:h-[calc(var(--px)*56)] rounded-[6px] lg:rounded-[calc(var(--px)*6)] bg-white flex items-center justify-center">
											<img class="icon_thrr_blk" src="<?=$icon?>" alt="">
										</div>
										<div class="text_base font-medium">
											<?=$text?>
										</div>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>
							
							<?php if( have_rows('item_2') ): ?>
								<?php while( have_rows('item_2') ): the_row(); 
									$icon = get_sub_field('icon');
									$text = get_sub_field('text');
									?>
									<div class="py-[27px] lg:py-[calc(var(--px)*27)] md:pl-5 lg:px-[calc(var(--px)*40)] gap-[23px] lg:gap-[calc(var(--px)*23)] flex items-center">
										<div class="flex-none w-[56px] lg:w-[calc(var(--px)*56)] h-[56px] lg:h-[calc(var(--px)*56)] rounded-[6px] lg:rounded-[calc(var(--px)*6)] bg-white flex items-center justify-center">
											<img class="icon_thrr_blk" src="<?=$icon?>" alt="">
										</div>
										<div class="text_base font-medium">
											<?=$text?>
										</div>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>
							
							<?php if( have_rows('item_3') ): ?>
								<?php while( have_rows('item_3') ): the_row(); 
									$icon = get_sub_field('icon');
									$text = get_sub_field('text');
									?>
									<div class="py-[27px] lg:py-[calc(var(--px)*27)] md:pl-5 lg:px-[calc(var(--px)*40)] gap-[23px] lg:gap-[calc(var(--px)*23)] flex items-center">
										<div class="flex-none w-[56px] lg:w-[calc(var(--px)*56)] h-[56px] lg:h-[calc(var(--px)*56)] rounded-[6px] lg:rounded-[calc(var(--px)*6)] bg-white flex items-center justify-center">
											<img class="icon_thrr_blk" src="<?=$icon?>" alt="">
										</div>
										<div class="text_base font-medium">
											<?=$text?>
										</div>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>

						</div>
					</div>
				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>

		<?php if( have_rows('mission') ): ?>
			<?php while( have_rows('mission') ): the_row(); ?>

				<?php if( have_rows('block') ): ?>
					<?php while( have_rows('block') ): the_row(); 
						$label = get_sub_field('label');
						$description = get_sub_field('description');
						if($description) :
							?>
							<div class="mt-[100px] lg:mt-[calc(var(--px)*170)] content_top" id="mission">
								<div class="lg:max-w-[calc(var(--px)*660)] ml-auto">
									<?php if($label) : ?>
										<div class="mb-10 lg:mb-[calc(var(--px)*40)]">
											<div class="label"> 
												<?=$label?>
											</div>
										</div>
									<?php endif; ?>
									<div class="text-[24px] lg:text-[calc(var(--px)*28)] leading-[128%] space-y-8 lg:space-y-[calc(var(--px)*37)] font_suisse">
										<?=$description?>
									</div>
								</div>
							</div>
						<?php endif; ?>
					<?php endwhile; ?>
				<?php endif; ?>

			<?php endwhile; ?>
		<?php endif; ?>

	</div>
</section>

<?php if( have_rows('problem') ): ?>
	<?php while( have_rows('problem') ): the_row(); ?>
		<?php
		$label = '';
		$text = '';
		?>

			<?php if( have_rows('left') ): ?>
				<?php while( have_rows('left') ): the_row(); 
				$label = get_sub_field('label');
				$text = get_sub_field('text');
				?>
			<?php endwhile; ?>
		<?php endif; ?>


		<?php if($text) : ?>
			<section class="my-[100px] lg:my-[calc(var(--px)*130)]">
				<div class="container">
					<div class="lg:flex">
						<div class="lg:w-[calc(100%-(var(--px)*660))] lg:pr-[calc(var(--px)*50)]">
							<?php if($label) : ?>
								<div class="mb-10 lg:mb-[calc(var(--px)*40)]">
									<div class="label"> 
										<?=$label?>
									</div>
								</div>
							<?php endif; ?>
							<div>
								<h2 class="heading_h2 font_suisse hide_br_mobile">
									<?=$text?>
								</h2>
							</div>
						</div>

						<?php if( have_rows('items') ):?>
							<div class="lg:w-[calc(var(--px)*660)] mt-[60px] lg:mt-[calc(var(--px)*150)] text-[13px] lg:text-[calc(var(--px)*20)]">
								<div class="perspective-[600px] space-y-2 lg:space-y-[calc(var(--px)*16)] lg:max-w-[calc(var(--px)*550)]" id="wrapper_problem">
									<?php while( have_rows('items') ): the_row(); 
										$text = get_sub_field('text');
										?>
										<div class="item_problem rounded-[3px] lg:rounded-[calc(var(--px)*5)] min-h-[97px] lg:min-h-[calc(var(--px)*130)] px-8 lg:px-[calc(var(--px)*40)] text-center flex items-center justify-center bg-white">
											<div>
												<?=$text?>
											</div>
										</div>
									<?php endwhile; ?>
								</div>
							</div>
						<?php endif; ?>

					</div>
				</div>
			</section>
		<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('solution') ): ?>
	<?php while( have_rows('solution') ): the_row();
		$label = get_sub_field('label');
		$heading_title = get_sub_field('heading_title');
		if($heading_title) : ?>
			<section class="mt-[100px] lg:mt-[calc(var(--px)*100)]">
				<div class="mb-10 lg:mb-[calc(var(--px)*40)]" id="solution">
					<div class="container">
						<?php if($label) : ?>
							<div class="mb-[calc(var(--px)*40)]">
								<div class="label">
									<?=$label?>
								</div>
							</div>
						<?php endif; ?>
						<div>
							<h2 class="heading_h2 font_suisse">
								<?=$heading_title?>
							</h2>
						</div>
					</div>
				</div>
				<div class="bg-dark text-white overflow-hidden">
					<div class="grid md:grid-cols-2 lg:grid-cols-3 -mx-px relative z-[1]">

						<?php if( have_rows('item_1') ): ?>
							<?php while( have_rows('item_1') ): the_row();
								$heading = get_sub_field('heading');
								$text = get_sub_field('text');
								?>
								<div class="md:border-r md:border-r-[0.5px] md:border-white/40 item_solution">
									<div class="bottom_active_line"></div>
									<div class="follow_active_cars bg-primary absolute top-0 left-0 z-[-1]"></div>
									<div class="py-[calc(var(--px)*56)] pr-[50px] lg:pr-[calc(var(--px)*30)] pl-[calc(var(--px)*77)] min-h-[calc(var(--px)*364)] flex flex-wrap flex-col min-h-full justify-between">
										<div class="relative min-h-[calc(var(--px)*152)] mb-[calc(var(--px)*39)]">
											<div class="text-[24px] lg:text-[calc(var(--px)*32)] leading-[131%] font_suisse">
												<?=$heading?>
											</div>
											<div class="absolute -left-[calc(var(--px)*31)] top-[calc(var(--px)*8)] text-[calc(var(--px)*14)]">1</div>
										</div>
										<div class="text_base">
											<?=$text?>
										</div>
									</div>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>

						<?php if( have_rows('item_2') ): ?>
							<?php while( have_rows('item_2') ): the_row();
								$heading = get_sub_field('heading');
								$text = get_sub_field('text');
								?>
								<div class="md:border-r md:border-r-[0.5px] md:border-white/40 item_solution">
									<div class="bottom_active_line"></div>
									<div class="follow_active_cars bg-primary absolute top-0 left-0 z-[-1]"></div>
									<div class="py-[calc(var(--px)*56)] pr-[50px] lg:pr-[calc(var(--px)*30)] pl-[calc(var(--px)*77)] min-h-[calc(var(--px)*364)] flex flex-wrap flex-col min-h-full justify-between">
										<div class="relative min-h-[calc(var(--px)*152)] mb-[calc(var(--px)*39)]">
											<div class="text-[24px] lg:text-[calc(var(--px)*32)] leading-[131%] font_suisse">
												<?=$heading?>
											</div>
											<div class="absolute -left-[calc(var(--px)*31)] top-[calc(var(--px)*8)] text-[calc(var(--px)*14)]">2</div>
										</div>
										<div class="text_base">
											<?=$text?>
										</div>
									</div>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>

						<?php if( have_rows('item_3') ): ?>
							<?php while( have_rows('item_3') ): the_row();
								$heading = get_sub_field('heading');
								$text = get_sub_field('text');
								?>
								<div class="md:border-r md:border-r-[0.5px] md:border-white/40 item_solution">
									<div class="bottom_active_line"></div>
									<div class="follow_active_cars bg-primary absolute top-0 left-0 z-[-1]"></div>
									<div class="py-[calc(var(--px)*56)] pr-[50px] lg:pr-[calc(var(--px)*30)] pl-[calc(var(--px)*77)] min-h-[calc(var(--px)*364)] flex flex-wrap flex-col min-h-full justify-between">
										<div class="relative min-h-[calc(var(--px)*152)] mb-[calc(var(--px)*39)]">
											<div class="text-[24px] lg:text-[calc(var(--px)*32)] leading-[131%] font_suisse">
												<?=$heading?>
											</div>
											<div class="absolute -left-[calc(var(--px)*31)] top-[calc(var(--px)*8)] text-[calc(var(--px)*14)]">3</div>
										</div>
										<div class="text_base">
											<?=$text?>
										</div>
									</div>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>

						<?php if( have_rows('item_4') ): ?>
							<?php while( have_rows('item_4') ): the_row();
								$logo = get_sub_field('logo');
								?>
								<div class="md:border-r md:border-r-[0.5px] md:border-white/40 item_solution">
									<div class="bottom_active_line"></div>
									<div class="follow_active_cars bg-primary absolute top-0 left-0 z-[-1]"></div>
									<div class="p-[64px] lg:p-[calc(var(--px)*50)] lg:min-h-[calc(var(--px)*364)] flex items-center min-h-full justify-center">
										<img class="icon_logo_solution" src="<?=$logo?>" alt="">
									</div>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>


						<?php if( have_rows('item_5') ): ?>
							<?php while( have_rows('item_5') ): the_row();
								$heading = get_sub_field('heading');
								$text = get_sub_field('text');
								?>
								<div class="md:border-r md:border-r-[0.5px] md:border-white/40 item_solution">
									<div class="bottom_active_line"></div>
									<div class="follow_active_cars bg-primary absolute top-0 left-0 z-[-1]"></div>
									<div class="py-[calc(var(--px)*56)] pr-[50px] lg:pr-[calc(var(--px)*30)] pl-[calc(var(--px)*77)] min-h-[calc(var(--px)*364)] flex flex-wrap flex-col min-h-full justify-between">
										<div class="relative min-h-[calc(var(--px)*152)] mb-[calc(var(--px)*39)]">
											<div class="text-[24px] lg:text-[calc(var(--px)*32)] leading-[131%] font_suisse">
												<?=$heading?>
											</div>
											<div class="absolute -left-[calc(var(--px)*31)] top-[calc(var(--px)*8)] text-[calc(var(--px)*14)]">4</div>
										</div>
										<div class="text_base">
											<?=$text?>
										</div>
									</div>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>

						<?php if( have_rows('item_6') ): ?>
							<?php while( have_rows('item_6') ): the_row();
								$heading = get_sub_field('heading');
								$text = get_sub_field('text');
								?>
								<div class="md:border-r md:border-r-[0.5px] md:border-white/40 item_solution">
									<div class="bottom_active_line"></div>
									<div class="follow_active_cars bg-primary absolute top-0 left-0 z-[-1]"></div>
									<div class="py-[calc(var(--px)*56)] pr-[50px] lg:pr-[calc(var(--px)*30)] pl-[calc(var(--px)*77)] min-h-[calc(var(--px)*364)] flex flex-wrap flex-col min-h-full justify-between">
										<div class="relative min-h-[calc(var(--px)*152)] mb-[calc(var(--px)*39)]">
											<div class="text-[24px] lg:text-[calc(var(--px)*32)] leading-[131%] font_suisse">
												<?=$heading?>
											</div>
											<div class="absolute -left-[calc(var(--px)*31)] top-[calc(var(--px)*8)] text-[calc(var(--px)*14)]">5</div>
										</div>
										<div class="text_base">
											<?=$text?>
										</div>
									</div>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
			</section>
		<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('how_it_works') ): ?>
	<?php while( have_rows('how_it_works') ): the_row();
		$label = get_sub_field('label');
		$heading_title = get_sub_field('heading_title');
		if($heading_title) : ?>
			<section class="my-[100px] lg:my-[calc(var(--px)*130)]">
				<div class="container">
					<div class="mb-[73px] lg:mb-[calc(var(--px)*110)] lg:flex gap-[calc(var(--px)*40)]" id="how_works">
						<?php if($label) : ?>
							<div class="mb-[calc(var(--px)*40)]">
								<div class="label flex-none">
									<?=$label?>
								</div>
							</div>
						<?php endif; ?>
						<div class="lg:-mt-[calc(var(--px)*15)]">
							<h2 class="heading_h2 font_suisse">
								<?=$heading_title?>
							</h2>
						</div>
					</div>
					<div class="grid md:grid-cols-3 gap-[71px] lg:gap-[calc(var(--px)*50)]">
						<?php if( have_rows('item_1') ): ?>
							<?php while( have_rows('item_1') ): the_row();
								$title = get_sub_field('title');
								$title_copy = get_sub_field('title_copy');
								$icon = get_sub_field('icon');
								?>
								<div>
									<div class="heading_h4 font_suisse md:min-h-[calc(var(--px)*73)] mb-10 md:mb-[calc(var(--px)*24)]">
										<?=$title?>
									</div>
									<div class="text_base hide_br_mobile">
										<?=$title_copy?>
									</div>
									<div class="mt-[52px] md:mt-[calc(var(--px)*65)] max-w-[calc(var(--px)*312)] mx-auto">
										<img class="remove_bg" src="<?=$icon?>" alt="">
									</div>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
						<?php if( have_rows('item_2') ): ?>
							<?php while( have_rows('item_2') ): the_row();
								$title = get_sub_field('title');
								$title_copy = get_sub_field('title_copy');
								$icon = get_sub_field('icon');
								?>
								<div>
									<div class="heading_h4 font_suisse md:min-h-[calc(var(--px)*73)] mb-10 md:mb-[calc(var(--px)*24)]">
										<?=$title?>
									</div>
									<div class="text_base hide_br_mobile">
										<?=$title_copy?>
									</div>
									<div class="mt-[52px] md:mt-[calc(var(--px)*65)] max-w-[calc(var(--px)*312)] mx-auto">
										<img class="remove_bg" src="<?=$icon?>" alt="">
									</div>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
						<?php if( have_rows('item_3') ): ?>
							<?php while( have_rows('item_3') ): the_row();
								$title = get_sub_field('title');
								$title_copy = get_sub_field('title_copy');
								$icon = get_sub_field('icon');
								?>
								<div>
									<div class="heading_h4 font_suisse md:min-h-[calc(var(--px)*73)] mb-10 md:mb-[calc(var(--px)*24)]">
										<?=$title?>
									</div>
									<div class="text_base hide_br_mobile">
										<?=$title_copy?>
									</div>
									<div class="mt-[52px] md:mt-[calc(var(--px)*65)] max-w-[calc(var(--px)*312)] mx-auto">
										<img class="remove_bg" src="<?=$icon?>" alt="">
									</div>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
			</section>
		<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('features') ): ?>
	<?php while( have_rows('features') ): the_row();
		$label = get_sub_field('label');
		$heading_title = get_sub_field('heading_title');
		if($heading_title) : ?>
			<section class="bg-dark text-white py-[70px] lg:pt-[calc(var(--px)*92)] lg:pb-[calc(var(--px)*120)]">
				<div class="container">
					<div class="mb-[calc(var(--px)*60)]" id="features">
						<?php if($label) : ?>
							<div class="mb-[calc(var(--px)*40)]">
								<div class="label"> 
									<?=$label?>
								</div>
							</div>
						<?php endif; ?>
						<div>
							<h2 class="heading_h3 font_suisse hide_br_mobile">
								<?=$heading_title?>
							</h2>
						</div>
					</div>
					<div>
						<div class="md:flex" data-barba-prevent="all">
							<div class="hidden md:block md:w-1/2 lg:w-[calc(var(--px)*806)] pr-[50px] lg:pr-[calc(var(--px)*80)]">
								<?php if( have_rows('items') ): $count = 0;?>
									<div class="min-h-[calc(var(--px)*631)] relative gallery--zoom-transition">
										<?php while( have_rows('items') ): the_row();
											$image = get_sub_field('image');
											$count++;
											?>
											<div class="item_img_feature absolute inset-0" data-id="<?=$count?>">
												<a href="<?=$image?>" class="h-full max-w-full flex items-center justify-center">
													<img src="<?=$image?>" class="max-w-full max-h-full w-auto mx-auto h-auto rounded-[calc(var(--px)*8)]" alt="">
												</a>
											</div>
										<?php endwhile; ?>
									</div>
								<?php endif; ?>
							</div>
							<div class="md:w-1/2 lg:w-[calc(100%-(var(--px)*806))] lg:pr-[calc(var(--px)*60)] flex items-center accordion_feature">
								<div class="w-full gallery--zoom-transition">
									<?php if( have_rows('items') ): $counter = 0; ?>
										<?php while( have_rows('items') ): the_row();
											$image = get_sub_field('image');
											$counter++;
											 ?>
												<div class="js_accordion__group">
													<?php if( have_rows('info') ):  ?>
														<?php while( have_rows('info') ): the_row();
															$title = get_sub_field('title');
															$description = get_sub_field('description');
															?>
															<div class="js_accordion__menu" data-id="<?=$counter?>">
																<div class="inside_toggl_acr font_suisse">
																	<?=$title?>
																</div>
																<span class="counter_feature">0<?=$counter?></span>
															</div>
															<div class="h-0 overflow-hidden js_accordion__content">
																<div class="space-y-[calc(var(--px)*18)] pl-10 md:pl-[calc(var(--px)*72)] py-8 lg:py-[calc(var(--px)*45)] text-white/70 text_base">
																	<?=$description?>
																	<div class="md:hidden mt-[30px] image_mobile_feat">
																		<a href="<?=$image?>" class="h-full max-w-full flex items-center justify-center">
																			<img src="<?=$image?>" class="max-w-full max-h-[50vh] w-auto mx-auto h-auto rounded-[calc(var(--px)*8)]" alt="">
																		</a>
																	</div>
																</div>
															</div>
														<?php endwhile; ?>
													<?php endif; ?>
												</div>
										<?php endwhile; ?>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('experience_benefits') ): ?>
	<?php while( have_rows('experience_benefits') ): the_row();  ?>
		<?php $heading_title = ''; ?>

			<?php if( have_rows('info') ): ?>
				<?php while( have_rows('info') ): the_row();
				$heading_title = get_sub_field('heading');
				?>
			<?php endwhile; ?>
		<?php endif; ?>

		<?php if($heading_title) : ?>
			<section class="my-[100px] lg:mt-[calc(var(--px)*150)] lg:mb-[calc(var(--px)*130)]">
				<div class="container">
					<div class="lg:flex">
						<div class="mb-[70px] lg:mb-0 lg:w-[calc(var(--px)*457)] lg:pr-[calc(var(--px)*50)]">
							<div class="sticky top_sticky_section">
								<h2 class="heading_h3 bigger font_suisse">
									<?=$heading_title?>	
								</h2>
								<div class="mt-[calc(var(--px)*50)]">
									<a href="<?=$cta_url?>" target="_blank" class="btn_site min-w-[calc(var(--px)*247)]">
										<?=$cta_text?>
									</a>
								</div>
							</div>
						</div>
						<div class="lg:w-[calc(100%-(var(--px)*457))]">
							<?php if( have_rows('items') ): ?>
								<?php while( have_rows('items') ): the_row();
									$image = get_sub_field('image');
									?>
									<div class="group_line_item md:flex items-center relative mb-[calc(var(--px)*68)] last:mb-0 pb-[64px] md:pb-[calc(var(--px)*68)] relative">
										<div class="line_item_group h-px bg-gray absolute left-0 bottom-0"></div>
										<?php if( have_rows('info') ): ?>
											<?php while( have_rows('info') ): the_row();
												$title = get_sub_field('title');
												$description = get_sub_field('description');
												?>
												<div class="flex-1">
													<div class="heading_h4 font-semibold mb-[55px] md:mb-0 md:min-h-[calc(var(--px)*87)]">
														<?=$title?>
													</div>
													<div class="text_base mt-[calc(var(--px)*11)]">
														<?=$description?>
													</div>
												</div>
											<?php endwhile; ?>
										<?php endif; ?>
										<div class="mt-[56px] md:mt-0 max-w-[calc(var(--px)*243)] flex-none mx-auto md:mr-0 md:ml-[calc(var(--px)*20)]">
											<img class="remove_bg" src="<?=$image?>" alt="">
										</div>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</section>
		<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>

<!-- <span class="wrap_tooltip">
<span class="text_tooltip">parsing</span>
	<span class="tooltip_wrapper">
		1 Scope strenghened <br>
		25-50 requests ect
	</span>
</span> -->

<?php if( have_rows('pricing') ): ?>
	<?php while( have_rows('pricing') ): the_row();
		$label = get_sub_field('label');
		$heading_title = get_sub_field('heading');
		if($heading_title) : ?>
			<section class="my-[100px] lg:my-[calc(var(--px)*130)]">
				<div class="container">
					<div class="mb-[70px] lg:mb-[calc(var(--px)*100)]" id="pricing">
						<?php if($label) : ?>
							<div class="mb-[calc(var(--px)*40)]">
								<div class="label">
									<?=$label?>
								</div>
							</div>
						<?php endif; ?>
						<div>
							<h2 class="heading_h3 font_suisse">
								<?=$heading_title?>
							</h2>
						</div>
					</div>
					<div class="border-b border-gray/20 pb-12 lg:pb-[calc(var(--px)*63)]">
						<div class="grid md:grid-cols-3 gap-[calc(var(--px)*50)]">
							<?php if( have_rows('item_1') ): ?>
								<?php while( have_rows('item_1') ): the_row();
									$icon = get_sub_field('icon');
									$text = get_sub_field('text');
									$caption = get_sub_field('caption');
									?>
									<div>
										<div class="mb-[calc(var(--px)*23)]">
											<img class="icon_price" src="<?=$icon?>" alt="">
										</div>
										<div>
											<div class="font-medium">
												<?=$text?>
											</div>
											<div class="text_base">
												<?=$caption?>
											</div>
										</div>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>
							<?php if( have_rows('item_2') ): ?>
								<?php while( have_rows('item_2') ): the_row();
									$icon = get_sub_field('icon');
									$text = get_sub_field('text');
									$caption = get_sub_field('caption');
									?>
									<div>
										<div class="mb-[calc(var(--px)*23)]">
											<img class="icon_price" src="<?=$icon?>" alt="">
										</div>
										<div>
											<div class="font-medium">
												<?=$text?>
											</div>
											<div class="text_base">
												<?=$caption?>
											</div>
										</div>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>
							<?php if( have_rows('item_3') ): ?>
								<?php while( have_rows('item_3') ): the_row();
									$icon = get_sub_field('icon');
									$text = get_sub_field('text');
									$caption = get_sub_field('caption');
									?>
									<div>
										<div class="mb-[calc(var(--px)*23)]">
											<img class="icon_price" src="<?=$icon?>" alt="">
										</div>
										<div>
											<div class="font-medium">
												<?=$text?>
											</div>
											<div class="text_base">
												<?=$caption?>
											</div>
										</div>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>
					<div class="mt-[60px] md:mt-[calc(var(--px)*73)]">
						<div class="grid lg:grid-cols-2 gap-[60px] lg:gap-[calc(var(--px)*96)]">
							<?php if( have_rows('plan') ): ?>
								<?php while( have_rows('plan') ): the_row();
									$text_1 = get_sub_field('text_1');
									$text_2 = get_sub_field('text_2');
									$description = get_sub_field('description');
									$list = get_sub_field('list');
									?>
									<div class="flex flex-col justify-between">
										<div>
											<div class="bg-[#F8F5F5] rounded-[calc(var(--px)*8)] px-5 md:px-[calc(var(--px)*60)] py-[34px] md:py-[calc(var(--px)*40)]">
												<div class="flex items-center gap-[calc(var(--px)*62)]">
													<div class="font_suisse text-[calc(var(--px)*24)]">
														<?=$text_1?>
													</div>
													<div class="font-semibold text_base">
														<?=$text_2?>
													</div>
												</div>
												<div class="text_base min-h-[calc(var(--px)*84)] mt-[22px] md:mt-[calc(var(--px)*35)] flex flex-col justify-end hide_br_mobile">
													<?=$description?>
												</div>
											</div>
											<div class="mt-[33px] md:mt-[calc(var(--px)*65)] pl-9 md:pl-[calc(var(--px)*114)] flex flex-col justify-between">
												<div class="mb-[33px] md:mb-[calc(var(--px)*68)] plan_list_compar text_base">
													<?=$list?>
												</div>
											</div>
										</div>
										<div class="md:pl-[calc(var(--px)*78)]">
											<a href="<?=$cta_url?>" target="_blank" class="btn_site w-full md:w-auto md:min-w-[calc(var(--px)*247)]">
												<?=$cta_text?>
											</a>
										</div>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>
							<?php if( have_rows('plan_2') ): ?>
								<?php while( have_rows('plan_2') ): the_row();
									$text_1 = get_sub_field('text_1');
									$text_2 = get_sub_field('text_2');
									$description = get_sub_field('description');
									$list = get_sub_field('list');
									$text = get_sub_field('text');
									?>
									<div class="flex flex-col justify-between">
										<div>
											<div class="bg-[#F8F5F5] rounded-[calc(var(--px)*8)] px-5 md:px-[calc(var(--px)*60)] py-[34px] md:py-[calc(var(--px)*40)]">
												<div class="flex items-center gap-[calc(var(--px)*62)]">
													<div class="font_suisse text-[calc(var(--px)*24)]">
														<?=$text_1?>
													</div>
													<div class="font-semibold text_base">
														<?=$text_2?>
													</div>
												</div>
												<div class="text_base min-h-[calc(var(--px)*84)] mt-[22px] md:mt-[calc(var(--px)*35)] flex flex-col justify-end hide_br_mobile">
													<?=$description?>
												</div>
											</div>
											<div class="mt-[33px] md:mt-[calc(var(--px)*65)] pl-9 md:pl-[calc(var(--px)*114)] flex flex-col justify-between">
												<div class="mb-[33px] md:mb-[calc(var(--px)*68)] plan_list_compar text_base">
													<?=$list?>
												</div>
											</div>
										</div>
										<div class="md:pl-[calc(var(--px)*78)]">
											<div class="font_suisse text_base mb-[calc(var(--px)*36)]">
												<?=$text?>
											</div>
											<div>
												<a href="<?=$cta_url?>" target="_blank" class="btn_site w-full md:w-auto md:min-w-[calc(var(--px)*247)]">
													<?=$cta_text?>
												</a>
											</div>
										</div>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</section>
		<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('faq') ): ?>
	<?php while( have_rows('faq') ): the_row();
		$heading_title = get_sub_field('heading');
		$description_bottom = get_sub_field('description_bottom');
		if($heading_title) : ?>
			<div class="bg-dark py-[70px] lg:pb-[110px] lg:pt-[calc(var(--px)*80)] text-white">
				<div class="container">
					<div class="lg:flex" id="faq">
						<div class="mb-5 lg:mb-0 lg:w-[calc(100%-(var(--px)*592))] lg:pr-[calc(var(--px)*100)]">
							<div class="sticky top_sticky_section">
								<h2 class="heading_h1 font_suisse"><?=$heading_title ?></h2>
							</div>
						</div>

						<?php if( have_rows('items') ): ?>
							<div class="lg:w-[calc(var(--px)*592)] text_base accordion_section">
								<?php while( have_rows('items') ): the_row();
									$title = get_sub_field('title');
									$description = get_sub_field('description');
									?>
									<div class="item_accordion js_accordion__group" data-underline-link>
										<div class="toggle_accordion js_accordion__menu">
											<div class="inside_toggl_acr font_suisse">
												<?=$title ?>
												<div class="arrow_accord js_accordion__icon"></div>
											</div>
										</div>
										<div class="accordion_description js_accordion__content">
											<div class="inside_acc_descr">
												<?=$description ?>
											</div>
										</div>
									</div>
								<?php endwhile; ?>
							</div>
						<?php endif; ?>

					</div>
					<?php if($description_bottom) : ?>
						<div class="mt-[100px] lg:mt-[calc(var(--px)*134)] text-center">
							<h4 class="font_suisse text-[calc(var(--px)*32)] leading-[131%] hide_br_mobile">
								<?=$description_bottom ?>
							</h4>
							<div class="mt-[calc(var(--px)*48)]">
								<a href="<?=$cta_url?>" target="_blank" class="btn_site min-w-[calc(var(--px)*247)]">
									<?=$cta_text?>
								</a>
							</div>
						</div>
					<?php endif; ?>
				</div>
			</div>
		<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
