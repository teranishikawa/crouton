<?php /*
	Template Name: お問い合わせ
*/?>

<?php get_header(); ?>
		<main>
			<div class="contents">
	
<?php if(have_posts()): while(have_posts()):the_post(); ?>
<?php the_content(); ?>
<?php endwhile; endif; ?>


				<section class="pagelink-area">
					<div class="width-fixed">
						<ul class="row">
							<li class="col-4 col-sm-12 one-item js-clickArea" data-aos="fade-up">
								<figure class="zoom col-sm-7"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/idx_secret.jpg" alt=""></figure>
								<div class="text-area col-sm-5">
									<p class="ttl">かぞくのクルトンのひみつ</p>
									<p class="more"><span><a href="/secret/" class="arrow">LEARN MORE</a></span></p>
								</div>
							</li>
							<li class="col-4 col-sm-12 one-item js-clickArea active" data-aos="fade-up">
								<figure class="zoom col-sm-7"><span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/idx_lineup.jpg" alt=""></span></figure>
								<div class="text-area col-sm-5 order-sm-first">
									<p class="ttl">ラインナップ</p>
									<p class="more"><span><a href="/lineup/" class="arrow">LEARN MORE</a></span></p>
								</div>
							</li>
							<li class="col-4 col-sm-12 one-item js-clickArea" data-aos="fade-up">
								<figure class="zoom col-sm-7"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/idx_gift.jpg" alt=""></figure>
								<div class="text-area col-sm-5">
									<p class="ttl">ギフトセット</p>
									<p class="more"><span><a href="/secret/" class="arrow">LEARN MORE</a></span></p>
								</div>
							</li>
						</ul>
					</div>
				</section>

			</div>
		</main>

		<!-- [ GLOBAL FOOTER ] -->
		<?php get_template_part('assets/parts/access'); ?>
		<!-- [ /GLOBAL FOOTER ] -->

		<?php get_footer(); ?>