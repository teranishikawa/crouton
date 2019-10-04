<?php /*
	Template Name: ラインナップアーカイブ
*/?>

<?php get_header(); ?>
<main>
	<div class="contents">
		<div class="main-visual">
			<div class="inner">
				<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/lineup/main_visual_pc.jpg" alt="ラインナップ" class="js-switch"></figure>
				<h2 data-aos="fade-left">ラインナップ</h2>
			</div>
		</div>

		<section class="wide chocolate">
			<div class="inner">
				<h3 class="title" data-aos="fade-right"><span class="eng line"></span>かぞくのチョコレートクルトン　ラインナップ<span class="label">季節限定</span></h3>
				<p class="cont-txt" data-aos="fade-right" data-aos-delay="300">
					香ばしいサクサクのクルトンを口溶け豊かな<br class="forPC">チョコレートで包み込んだかぞくのチョコレートクルトン。<br>
					販売期間：10月～5月下旬頃を予定しておりますが、変更になる場合がございます。
				</p>

				<div class="lineup">

					<div class="width-fixed">
						<ul>
							<?php
							$args = array(
								'post_type' => 'lineup',
								'post_status' => 'publish',
								'orderby' => 'date',
								'order' => 'ASC',
								'posts_per_page' => -1,
								'tax_query' => array(
									'relation' => 'OR',
									array(
										'taxonomy' => 'lineup_cat',
										'field' => 'slug',
										'terms' => 'season',
									),
								),
							);
							$the_query = new WP_Query($args);
							$i = 0;
							if($the_query->have_posts()){
								while($the_query->have_posts()){
									$i++;
									$the_query->the_post();
									$img_src1 = "";
									$img_src1 = wp_get_attachment_image_src(CFS()->get('feature1_img'),'lineup_feature');
									if($img_src1) $img_src1 = '<img src="'.$img_src1[0].'" alt="'.get_the_title().'">';
									$img_src2 = "";
									$img_src2 = wp_get_attachment_image_src(CFS()->get('package1_img'),'lineup_package');
									if($img_src2) $img_src2 = '<img src="'.$img_src2[0].'" alt="'.get_the_title().'">';
									if($i % 2){
										?>
										<li class="row justify-content-between js-clickArea one-item">
											<div class="col-8 col-sm-12" data-aos="layer-fade-right">
												<figure class="zoom layer-fade-child"><?php echo $img_src1 ?></figure>
											</div>
											<div class="col-4 col-sm-12 ex-area" data-aos="fade-left">
												<figure class="photo"><?php echo $img_src2 ?></figure>
												<div class="text-area">
													<p class="comment" data-aos="twist-left"><?php echo CFS()->get('catch_copy') ?></p>
													<p class="ttl" data-aos="twist-left"><?php the_title() ?><span class="eng"><?php echo CFS()->get('title_en') ?></span></p>
													<p class="more" data-aos="fade-in"><a href="<?php echo get_permalink() ?>" class="arrow">LEARN MORE</a></p>
												</div>
											</div>
										</li>
										<?php
									}else{
										?>
										<li class="row justify-content-between js-clickArea one-item">
											<div class="col-4 col-sm-12" data-aos="fade-right">
												<figure class="photo"><?php echo $img_src2 ?></figure>
												<div class="text-area">
													<p class="comment" data-aos="twist-left"><?php echo CFS()->get('catch_copy') ?></p>
													<p class="ttl" data-aos="twist-left"><?php the_title() ?><span class="eng"><?php echo CFS()->get('title_en') ?></span></p>
													<p class="more" data-aos="fade-in"><a href="<?php echo get_permalink() ?>" class="arrow">LEARN MORE</a></p>
												</div>
											</div>
											<div class="col-8 col-sm-12 order-sm-first" data-aos="layer-fade-right">
												<figure class="zoom layer-fade-child"><?php echo $img_src1 ?></figure>
											</div>
										</li>
										<?php
									}
									?>

									<?php
								}
								wp_reset_postdata();
							}
							?>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<section class="wide flavor">
			<div class="inner">
				<h3 class="title" data-aos="fade-right"><span class="eng line"></span>定番ラインナップ</h3>
				<p class="cont-txt" data-aos="fade-right" data-aos-delay="300">大切な人と食卓を楽しむ、味わい豊かな9種類のクルトン。</p>

				<div class="lineup">
					<div data-aos="layer-fade-right">
						<figure class="layer-fade-child"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/lineup/idx_standard_pc.jpg" alt=""></figure>
					</div>
					<div class="width-fixed">
						<ul class="row">
							<?php
							$args = array(
								'post_type' => 'lineup',
								'post_status' => 'publish',
								'orderby' => 'date',
								'order' => 'ASC',
								'posts_per_page' => -1,
								'tax_query' => array(
									'relation' => 'OR',
									array(
										'taxonomy' => 'lineup_cat',
										'field' => 'slug',
										'terms' => 'std_flavor',
									),
								),
							);
							$the_query = new WP_Query($args);
							$i = 0;
							if($the_query->have_posts()){
								while($the_query->have_posts()){
									$i++;
									$the_query->the_post();
									$img_src1 = "";
									$img_src1 = wp_get_attachment_image_src(CFS()->get('package1_img'),'lineup_package');
									if($img_src1) $img_src1 = '<img src="'.$img_src1[0].'" alt="'.get_the_title().'">';
									?>
									<li class="col-4 col-sm-6 js-clickArea one-item" data-aos="layer-fade-right">
										<figure class="zoom layer-fade-child"><?php echo $img_src1 ?></figure>
										<div class="text-area">
											<p class="comment" data-aos="twist-left"><?php echo CFS()->get('catch_copy') ?></p>
											<p class="ttl" data-aos="twist-left"><?php the_title(); ?><span class="eng"><?php echo CFS()->get('title_en') ?></span></p>
											<p class="more" data-aos="fade-in"><a href="<?php echo get_permalink() ?>" class="arrow">LEARN MORE</a></p>
										</div>
									</li>
									<?php
								}
								wp_reset_postdata();
							}
							?>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<section class="wide package">
			<div class="inner">
				<h3 class="title" data-aos="fade-right"><span class="eng line"></span>パッケージラインナップ</h3>
				<p class="cont-txt" data-aos="fade-right" data-aos-delay="300">用途に合わせて、2種類のパッケージをご用意しました。</p>

				<div class="lineup">
					<div class="width-fixed">
						<ul class="row">
							<li class="col-6 col-sm-12 one-item" data-aos="fade-up">
								<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/lineup/idx_package_cube.jpg" alt="かぞくのキューブ"></figure>
								<div class="text-area">
									<p class="ttl">かぞくのキューブ</p>
									<p class="cont-txt">15g入りの個包装が2個入ったキューブ。少しずつ小分けに。<br class="forPC">大切な方と分け合って。シーンに合わせてお召し上がりください。</p>
								</div>
							</li>
							<li class="col-6 col-sm-12 one-item" data-aos="fade-up" data-aos-delay="1000">
								<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/lineup/idx_package_long.jpg" alt="かぞくのロングケース"></figure>
								<div class="text-area">
									<p class="ttl">かぞくのロングケース</p>
									<p class="cont-txt">たくさんの方でお召し上がりいただきたい増量パッケージです。<br class="forPC">ご自宅のストックやカジュアルな贈り物におすすめです。</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="width-fixed giftset">
					<ul class="row justify-content-between">
						<li class="col-12 col-sm-12 one-item">
							<div class="row no-gutters no-gutters-sm js-clickArea">
								<figure class="col-7 col-sm-12 zoom" data-aos="fade-right"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/lineup/idx_giftset.jpg" alt="ギフトセット"></figure>
								<div class="col-5 col-sm-12 text-area" data-aos="fade-left">
									<p class="ttl">贈り物に最適な<br>ギフトセットのご案内</p>
									<p class="more"><span><a href="/gift/" class="arrow">LEARN MORE</a></span></p>
								</div>
							</div>
						</li>
					</ul>
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
							<p class="more"><span><a href="/secret/" class="arrow">LEARN MORE</a></span></p>
						</div>
					</li>
					<li class="col-4 col-sm-12 one-item js-clickArea active" data-aos="fade-up" data-aos-delay="300">
						<figure class="zoom col-sm-7"><span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/idx_lineup.jpg" alt=""></span></figure>
						<div class="text-area col-sm-5">
							<p class="ttl">ラインナップ</p>
							<p class="more"><span><a href="/lineup/" class="arrow">LEARN MORE</a></span></p>
						</div>
					</li>
					<li class="col-4 col-sm-12 one-item js-clickArea" data-aos="fade-up" data-aos-delay="600">
						<figure class="zoom col-sm-7"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/idx_gift.jpg" alt=""></figure>
						<div class="text-area col-sm-5">
							<p class="ttl">ギフトセット</p>
							<p class="more"><span><a href="/gift/" class="arrow">LEARN MORE</a></span></p>
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