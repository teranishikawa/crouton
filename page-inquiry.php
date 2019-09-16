<?php /*
	Template Name: お問い合わせ
*/?>

<?php get_header(); ?>
		<main>
			<div class="contents">
				<div class="main-visual">
					<div class="inner">
						<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact/main_visual_pc.jpg" alt="お問い合わせ" class="js-switch"></figure>
						<h2 data-aos="fade-left">お問い合わせ<span class="eng">CONTACT US</span></h2>
					</div>
				</div>

				<section class="wide topics-box">
					<div class="inner">

<div class="feature" data-aos="fade-up">
	<div class="width-fixed">

<h3 class="title"><span class="eng line">PHONE</span>お電話でのお問い合わせ</h3>
<p class="attention">お電話でのお問い合わせ、ご意見、ご要望は以下の電話番号までお願いいたします。</p>
<div class="tel">
<span><i class="fas fa-phone"></i>0000-00-0000</span>
【受付時間】平日8:00 ～ 17:00【休業日】土・日・祝
</div>

<h3 class="title"><span class="eng line">FORM</span>フォームからのお問い合わせ</h3>

<?php if(have_posts()): while(have_posts()):the_post(); ?>
<?php the_content(); ?>
<?php endwhile; endif; ?>

	</div>
</div>

					</div>
				</section>

				<section class="pagelink-area">
					<div class="width-fixed">
						<ul class="row">
							<li class="col-4 col-sm-12 one-item js-clickArea" data-aos="fade-up">
								<figure class="zoom col-sm-7"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/idx_secret.jpg" alt=""></figure>
								<div class="text-area col-sm-5">
									<p class="ttl">かぞくのクルトンのひみつ</p>
									<p class="eng">SECRET OF CROUTON</p>
									<p class="more"><span><a href="/secret/" class="arrow">LEAN MORE</a></span></p>
								</div>
							</li>
							<li class="col-4 col-sm-12 one-item js-clickArea active" data-aos="fade-up">
								<figure class="zoom col-sm-7"><span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/idx_lineup.jpg" alt=""></span></figure>
								<div class="text-area col-sm-5 order-sm-first">
									<p class="ttl">ラインナップ</p>
									<p class="eng">LINE UP</p>
									<p class="more"><span><a href="/lineup/" class="arrow">LEAN MORE</a></span></p>
								</div>
							</li>
							<li class="col-4 col-sm-12 one-item js-clickArea" data-aos="fade-up">
								<figure class="zoom col-sm-7"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/idx_gift.jpg" alt=""></figure>
								<div class="text-area col-sm-5">
									<p class="ttl">ギフトセット</p>
									<p class="eng">GIFT SET</p>
									<p class="more"><span><a href="/secret/" class="arrow">LEAN MORE</a></span></p>
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