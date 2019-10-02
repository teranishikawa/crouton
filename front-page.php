<?php get_header(); ?>

<?php get_template_part('assets/parts/loading'); ?>


<main>
	<div class="contents">
		<div class="inner">
			<div class="main-visual">
				<div class="swiper-container" id="js-top-swiper-container">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<img class="js-switch" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/p_mv01_pc.jpg" alt="" class="js-switch">
						</div>
						<div class="swiper-slide">
							<img class="js-switch" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/p_mv02_pc.jpg" alt="" class="js-switch">
						</div>
						<div class="swiper-slide">
							<img class="js-switch" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/p_mv03_pc.jpg" alt="" class="js-switch">
						</div>
						<div class="swiper-slide">
							<img class="js-switch" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/p_mv04_pc.jpg" alt="" class="js-switch">
						</div>
						<div class="swiper-slide">
							<img class="js-switch" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/p_mv05_pc.jpg" alt="" class="js-switch">
						</div>
					</div>

					<div class="swiper-pagination"></div>
				</div>
				<p class="copy" data-aos="fade-left">食卓がつくる、絆をもっと。</p>

				<div class="scroll-navi align-items-center" data-aos="fade-left" data-aos-delay="1000">
					<dl>
						<dt>SCROLL</dt>
						<dd>
							<ul>
								<li><a href="#concept"><span class="scroll-bullet"></span>
										<p class="description">ブランドコンセプト</p>
									</a></li>
								<li><a href="#lineup"><span class="scroll-bullet"></span>
										<p class="description">ラインナップ</p>
									</a></li>
								<li><a href="#secret"><span class="scroll-bullet"></span>
										<p class="description">かぞくのクルトンのひみつ</p>
									</a></li>
								<li><a href="#recipe"><span class="scroll-bullet"></span>
										<p class="description">おいしいお召し上がり方</p>
									</a></li>
								<li><a href="#gift"><span class="scroll-bullet"></span>
										<p class="description">ギフトセット</p>
									</a></li>
								<li><a href="#topics"><span class="scroll-bullet"></span>
										<p class="description">ニュース・トピックス</p>
									</a></li>
								<li><a href="#access ?>"><span class="scroll-bullet"></span>
										<p class="description">店舗紹介・アクセス</p>
									</a></li>
							</ul>
						</dd>
					</dl>
				</div>

				<section id="pickup" data-aos="fade-right">
					<?php
						$args = array(
							'post_type' => 'topics',
							'post_status' => 'publish',
							'orderby' => 'date',
							'orderby' => 'DESC',
							'posts_per_page' => -1,
							'meta_query' => array(
								array(
									'key' => 'topics_pickup',
									'value' => true,
									'compare' => '=',
								),
							),
						);
						$the_query = new WP_Query($args);
						if($the_query->have_posts()){
					?>
					<div class="swiper-container" id="js-pickup-swiper" data-aos="fade-right">
						<div class="swiper-wrapper">
							<?php
									while($the_query->have_posts()){
										$the_query->the_post();
										$wk = CFS()->get('topics_thumb');
									foreach ($wk as $thumb => $label){
										break;
									}
									$img_src = "";
									if((int)$thumb){
										$img_src = '<img src="'.get_template_directory_uri().'/assets/images/topics/thumb_index_0'.$thumb.'.jpg" alt="'.get_the_title().'">';
									}else{
										$img_src = wp_get_attachment_image_src(CFS()->get('topics_catch'),'topics');
										if($img_src) $img_src = '<img src="'.$img_src[0].'" alt="'.get_the_title().'">';
									}
						?>
						<div class="swiper-slide">
							<div class="row no-gutters no-gutters-sm">
								<p class="label"><?php
								if ($terms = get_the_terms($post->ID, 'topics_cat')){
									foreach ( $terms as $term ){
									echo esc_html($term->name);
									}
								}
							?></p>
								<div class="img-area order-sm-first">
									<figure><?php echo $img_src ?></figure>
								</div>
								<div class="text-area js-clickArea">
									<p class="ttl"><?php the_title(); ?></p>
									<p class="date"><?php the_time('Y.m.d', $post->ID); ?></p>
									<p class="more"><a href="<?php echo get_permalink() ?>" class="arrow">LEARN MORE</a></p>
								</div>
								
							</div>
						</div>
						<?php
						}
						wp_reset_postdata();
						?>
						</div>
						<div class="pickup-swiper-pagination"></div>
					</div>
					<?php
						}
					?>
				</section>
			</div>
		</div>


		<section id="concept" class="concept wide">
			<div class="inner" data-aos="fade-up">
				<div class="ttl-area" data-aos="fade-left">
					<h2><span class="eng line"></span>コンセプト</h2>
				</div>
				
				<div id="animation_container">
					<canvas id="canvas" style="position: absolute; display: block;"></canvas>
						<div id="dom_overlay_container" style="pointer-events:none; position: absolute; left: 0px; top: 0px; display: block;">
					</div>
				</div>
				
				<div class="text-area">							
					<p class="copy" data-aos="twist-left">食卓がつくる、絆をもっと。</p>
					<p class="tx-concept">
						<p data-aos="twist-left" data-aos-delay="100">食卓は、心をつくる。</p>
						<p data-aos="twist-left" data-aos-delay="300">心を寄せあう、分けあう、重ねあう場所だから。</p>
						<p data-aos="twist-left" data-aos-delay="500">かぞくとは、大切な人との絆。</p>
						<p data-aos="twist-left" data-aos-delay="600">かぞくの心の温もりが届いたら、</p>
						<p data-aos="twist-left" data-aos-delay="800">心の食卓はつながって、かぞくの絆がつくられる。</p>
						<p data-aos="twist-left" data-aos-delay="1000">離れていたって、心はひとりにならない。</p>
						<p data-aos="twist-left" data-aos-delay="1200">食卓がつくる、絆をもっと。</p>
						<p data-aos="twist-left" data-aos-delay="1400">かぞくのクルトン</p>
						<p class="more" data-aos="twist-right" data-aos-delay="1600"><a href="<?php echo esc_url( home_url('/concept/') ); ?>" class="arrow">LEARN MORE</a></p>
					</p>
				</div>
			</div>
		</section>

		<section id="lineup" class="lineup wide">
			<div class="inner">
				<div data-aos="layer-fade-right" data-aos-delay="300">
					<div class="ttl-area layer-fade-child">
						<h2><span class="eng line" data-aos="fade-right" data-aos-delay="600"></span>ラインナップ</h2>
					</div>
				</div>
				<ul class="row no-gutters no-gutters-sm seasonal">
					<li class="col-4 one-item" data-aos="layer-fade-right">
						<a href="<?php echo esc_url( home_url('/lineup/salted-dark-chocolate/') ); ?>" class="arrow only">
							<figure class="zoom layer-fade-child"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/lineup_salt_chocolate_off.jpg" alt="塩チョコレート" data-productname="salt_chocolate"></figure>
							<div class="text-area" data-aos="fade-right" data-aos-delay="800">
								<!--<p class="label">季節限定</p>-->
								<p class="ttl"><small>塩</small>チョコレート<span class="eng">SALTED DARK CHOCOLATE</span></p>
							</div>
						</a>
					</li>
					<li class="col-4 one-item" data-aos="layer-fade-right" data-aos-delay="300">
						<a href="<?php echo esc_url( home_url('/lineup/salted-caramel-blonde-chocolate/') ); ?>" class="arrow only">
							<figure class="zoom layer-fade-child"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/lineup_salt_caramel_off.jpg" alt="塩キャラメルチョコレート" data-productname="salt_caramel"></figure>
							<div class="text-area" data-aos="fade-right" data-aos-delay="800">
								<!--<p class="label">季節限定</p>-->
								<p class="ttl"><small>塩</small>キャラメル<br class="forSP"><small>チョコレート</small><span class="eng">SALTED CARAMEL BLONDE CHOCOLATE</span></p>
							</div>
						</a>
					</li>
					<li class="col-4 one-item" data-aos="layer-fade-right" data-aos-delay="300">
						<a href="<?php echo esc_url( home_url('/lineup/matcha-white-chocolate/') ); ?>" class="arrow only">
							<figure class="zoom layer-fade-child"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/lineup_greentea_off.jpg" alt="抹茶チョコレート" data-productname="greentea"></figure>
							<div class="text-area" data-aos="fade-right" data-aos-delay="800">
								<!--<p class="label">季節限定</p>-->
								<p class="ttl"><small>抹茶</small>チョコレート<span class="eng">MATCHA WHITE CHOCOLATE</span></p>
							</div>
						</a>
					</li>
				</ul>

				<div class="menu-list forPC">
					<table class="menu-tbl">
						<tbody>
							<tr>
								<td colspan="2" class="one-item" data-aos="layer-fade-right">
									<a href="<?php echo esc_url( home_url('/lineup/tomato/') ); ?>" class="arrow left only">
										<figure class="zoom layer-fade-child"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/lineup_tomato.jpg" alt="もぎたてトマト" data-productname="tomato"></figure>
										<div class="text-area" data-aos="fade-right" data-aos-delay="800">
											<!--<p class="label new">NEW</p>-->
											<p class="ttl"><small>もぎたて</small>トマト<span class="eng">TOMATO</span></p>
										</div>
									</a>
								</td>
								<td colspan="2" class="one-item" data-aos="layer-fade-right" data-aos-delay="200">
									<a href="<?php echo esc_url( home_url('/lineup/potato/') ); ?>" class="arrow left only">
										<figure class="zoom layer-fade-child"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/lineup_potato.jpg" alt="ホクホクポテト" data-productname="potato"></figure>
										<div class="text-area" data-aos="fade-right" data-aos-delay="800">
											<!--<p class="label new">NEW</p>-->
											<p class="ttl"><small>ホクホク</small>ポテト<span class="eng">POTATO</span></p>
										</div>
									</a>
								</td>
								<td rowspan="2" class="one-item" data-aos="layer-fade-right" data-aos-delay="400">
									<a href="<?php echo esc_url( home_url('/lineup/cheese/') ); ?>" class="arrow only">
										<figure class="vertically zoom layer-fade-child"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/lineup_cheese.jpg" alt="コクうまチーズ" data-productname="cheese"></figure>
										<div class="text-area vertically" data-aos="fade-right" data-aos-delay="800">
											<p class="ttl"><small>コクうま</small>チーズ<span class="eng">CHEESE</span></p>
										</div>
									</a>
								</td>
							</tr>
							<tr>
								<td colspan="2" class="one-item" data-aos="layer-fade-right">
									<a href="<?php echo esc_url( home_url('/lineup/honey-toast/') ); ?>" class="arrow left only">
										<figure class="zoom layer-fade-child"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/lineup_toast.jpg" alt="はちみつトースト" data-productname="toast"></figure>
										<div class="text-area order-first" data-aos="fade-right" data-aos-delay="800">
											<p class="ttl"><small>はちみつ</small>トースト<span class="eng">TOAST</span></p>
										</div>
									</a>
								</td>
								<td colspan="2" rowspan="2" data-aos="layer-fade-right" data-aos-delay="200">
									<figure class="vertically layer-fade-child"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/lineup_photo01.jpg" alt="" data-productname=""></figure>
								</td>
							</tr>
							<tr>
								<td colspan="2" class="one-item" data-aos="layer-fade-right" data-aos-delay="400">
									<a href="<?php echo esc_url( home_url('/lineup/corn/') ); ?>" class="arrow left only">
										<figure class="zoom layer-fade-child"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/lineup_corn.jpg" alt="やきたてコーン" data-productname="corn"></figure>
										<div class="text-area" data-aos="fade-right" data-aos-delay="800">
											<p class="ttl"><small>やきたて</small>コーン<span class="eng">CORN</span></p>
										</div>
									</a>
								</td>
								<td rowspan="2" class="one-item" data-aos="layer-fade-right" data-aos-delay="600">
									<a href="<?php echo esc_url( home_url('/lineup/curry/') ); ?>" class="arrow only">
										<figure class="vertically zoom layer-fade-child"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/lineup_curry.jpg" alt="おいしいカレー" data-productname="curry"></figure>
										<div class="text-area vertically" data-aos="fade-right" data-aos-delay="800">
											<p class="ttl"><small>おいしい</small>カレー<span class="eng">CURRY</span></p>
										</div>
									</a>
								</td>
							</tr>
							<tr>
								<td colspan="2" data-aos="layer-fade-right">
									<p class="layer-fade-child"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/lineup_photo02.jpg" alt=""></p>
								</td>
								<td colspan="2" class="one-item" data-aos="layer-fade-right">
									<a href="<?php echo esc_url( home_url('/lineup/brown-sugar-soybean-flour/') ); ?>" class="arrow left only">
										<figure class="zoom layer-fade-child"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/lineup_brownsugar.jpg" alt="こくとうときなこ" data-productname="brownsugar"></figure>
										<div class="text-area order-first" data-aos="fade-right" data-aos-delay="800">
											<p class="ttl">こくとう<small>と</small>きなこ<span class="eng">BROWN SUGAR &amp; SOYBEAN FLOUR</span></p>
										</div>
									</a>
								</td>
							</tr>
							<tr>
								<td colspan="2" class="one-item" data-aos="layer-fade-right" data-aos-delay="200">
									<a href="<?php echo esc_url( home_url('/lineup/purple-sweet-potato/') ); ?>" class="arrow left only">
										<figure class="zoom layer-fade-child"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/lineup_sweetpotato.jpg" alt="むらさきいも" data-productname="sweetpotato"></figure>
										<div class="text-area" data-aos="fade-right" data-aos-delay="800">
											<p class="ttl"><small>むらさき</small>いも<span class="eng">PURPLE SWEET POTATO</span></p>
										</div>
									</a>
								</td>
								<td colspan="2" class="one-item" data-aos="layer-fade-right" data-aos-delay="400">
									<a href="<?php echo esc_url( home_url('/lineup/soy-sauce/') ); ?>" class="arrow left only">
										<figure class="zoom layer-fade-child"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/lineup_soysauce.jpg" alt="みたらし醤油" data-productname="soysauce"></figure>
										<div class="text-area" data-aos="fade-right" data-aos-delay="800">
											<p class="ttl"><small>みたらし</small>醤油<span class="eng">SOY SAUCE</span></p>
										</div>
									</a>
								</td>
								<td class="more-link">
									<p class="more" data-aos="fade-in" data-aos-delay="800"><a href="<?php echo esc_url( home_url('/lineup/') ); ?>" class="arrow">LEARN MORE</a></p>
								</td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="menu-list forSP">
					<table class="menu-tbl">
						<tbody>
							<tr>
								<td colspan="2" class="one-item" data-aos="fade-right">
									<a href="<?php echo esc_url( home_url('/lineup/tomato/') ); ?>" class="arrow only">
										<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/lineup_tomato.jpg" alt="もぎたてトマト" data-productname="tomato"></figure>
										<div class="text-area">
											<!--<p class="label new">NEW</p>-->
											<p class="ttl"><small>もぎたて</small>トマト<span class="eng">TOMATO</span></p>
										</div>
									</a>
								</td>
								<td colspan="2" class="one-item" data-aos="fade-right">
									<a href="<?php echo esc_url( home_url('/lineup/potato/') ); ?>" class="arrow only">
										<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/lineup_potato.jpg" alt="ホクホクポテト" data-productname="potato"></figure>
										<div class="text-area">
											<p class="ttl"><small>ホクホク</small>ポテト<span class="eng">POTATO</span></p>
										</div>
									</a>
								</td>
							</tr>
							<tr>
								<td colspan="2" class="one-item" data-aos="fade-left">
									<a href="<?php echo esc_url( home_url('/lineup/cheese/') ); ?>" class="arrow only">
										<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/lineup_cheese.jpg" alt="コクうまチーズ" data-productname="cheese"></figure>
										<div class="text-area order-first">
											<p class="ttl"><small>コクうま</small>チーズ<span class="eng">CHEESE</span></p>
										</div>
									</a>
								</td>
								<td colspan="2" class="one-item" data-aos="fade-left">
									<a href="<?php echo esc_url( home_url('/lineup/honey-toast/') ); ?>" class="arrow only">
										<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/lineup_toast.jpg" alt="はちみつトースト" data-productname="toast"></figure>
										<div class="text-area order-first">
											<p class="ttl"><small>はちみつ</small>トースト<span class="eng">TOAST</span></p>
										</div>
									</a>
								</td>
							</tr>
							<tr>
								<td colspan="2" class="one-item" data-aos="fade-right">
									<a href="<?php echo esc_url( home_url('/lineup/corn/') ); ?>" class="arrow only">
										<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/lineup_corn.jpg" alt="やきたてコーン" data-productname="corn"></figure>
										<div class="text-area">
											<p class="ttl"><small>やきたて</small>コーン<span class="eng">CORN</span></p>
										</div>
									</a>
								</td>
								<td colspan="2" class="one-item" data-aos="fade-right">
									<a href="<?php echo esc_url( home_url('/lineup/curry/') ); ?>" class="arrow only">
										<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/lineup_curry.jpg" alt="おいしいカレー" data-productname="curry"></figure>
										<div class="text-area">
											<p class="ttl"><small>おいしい</small>カレー<span class="eng">CURRY</span></p>
										</div>
									</a>
								</td>
							</tr>
							<tr>
								<td colspan="2" class="one-item" data-aos="fade-left">
									<a href="<?php echo esc_url( home_url('/lineup/brown-sugar-soybean-flour/') ); ?>" class="arrow only">
										<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/lineup_brownsugar.jpg" alt="こくとうときなこ" data-productname="brownsugar"></figure>
										<div class="text-area order-first">
											<p class="ttl">こくとう<small>と</small>きなこ<span class="eng">BROWN SUGAR &amp; SOYBEAN FLOUR</span></p>
										</div>
									</a>
								</td>
								<td colspan="2" class="one-item" data-aos="fade-left">
									<a href="<?php echo esc_url( home_url('/lineup/purple-sweet-potato/') ); ?>" class="arrow only">
										<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/lineup_sweetpotato.jpg" alt="むらさきいも" data-productname="sweetpotato"></figure>
										<div class="text-area order-first">
											<p class="ttl"><small>むらさき</small>いも<span class="eng">PURPLE SWEET POTATO</span></p>
										</div>
									</a>
								</td>
							</tr>
							<tr>
								<td colspan="2" class="one-item" data-aos="fade-right">
									<a href="<?php echo esc_url( home_url('/lineup/soy-sauce/') ); ?>" class="arrow only">
										<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/lineup_soysauce.jpg" alt="みたらし醤油" data-productname="soysauce"></figure>
										<div class="text-area">
											<p class="ttl"><small>みたらし</small>醤油<span class="eng">SOY SAUCE</span></p>
										</div>
									</a>
								</td>
								<td colspan="2" class="more-link">
									<p class="more"><a href="<?php echo esc_url( home_url('/lineup/') ); ?>" class="arrow">LEARN MORE</a></p>
								</td>
							</tr>
						</tbody>
					</table>
				</div>

			</div>
		</section>

		<section id="others">
			<ul class="other-links">
				<li id="secret">
					<div class="row no-gutters no-gutters-sm js-clickArea" data-aos="layer-fade-right">
						<div class="col-6 col-sm-12 text-area" data-aos="fade-right">
							<h2><span class="eng line"></span>かぞくのクルトンのひみつ</h2>
							<p class="more forPC"><a href="<?php echo esc_url( home_url('/secret/') ); ?>" class="arrow">LEARN MORE</a></p>
						</div>
						<div class="col-6 col-sm-12" data-aos="fade-right">
							<figure class="layer-fade-child">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/idx_secret.jpg" alt="">
							</figure>
						</div>
					</div>
					<p class="more forSP" data-aos="fade-in"><a href="<?php echo esc_url( home_url('/secret/') ); ?>" class="arrow">LEARN MORE</a></p>
				</li>
				<li id="recipe">
					<div class="row no-gutters no-gutters-sm js-clickArea" data-aos="layer-fade-right">
						<div class="col-6 col-sm-12 text-area order-last order-sm-first" data-aos="fade-left">
							<h2><span class="eng line"></span>おいしいお召し上がり方</h2>
							<p class="more forPC"><a href="<?php echo esc_url( home_url('/delicious/') ); ?>" class="arrow">LEARN MORE</a></p>
						</div>
						<div class="col-6 col-sm-12" data-aos="fade-left">
							<figure class="layer-fade-child">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/idx_recipe.jpg" alt="">
							</figure>
						</div>
					</div>
					<p class="more forSP" data-aos="fade-in"><a href="<?php echo esc_url( home_url('/delicious/') ); ?>" class="arrow">LEARN MORE</a></p>
				</li>
				<li id="gift">
					<div class="row no-gutters no-gutters-sm js-clickArea" data-aos="layer-fade-right">
						<div class="col-6 col-sm-12 text-area" data-aos="fade-right">
							<h2><span class="eng line"></span>ギフトセット</h2>
							<p class="more forPC"><a href="<?php echo esc_url( home_url('/gift/') ); ?>" class="arrow">LEARN MORE</a></p>
						</div>
						<div class="col-6 col-sm-12" data-aos="fade-right">
							<figure class="layer-fade-child">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/idx_gift.jpg" alt="">
							</figure>
						</div>
					</div>
					<p class="more forSP" data-aos="fade-in"><a href="<?php echo esc_url( home_url('/gift/') ); ?>" class="arrow">LEARN MORE</a></p>
				</li>
			</ul>
		</section>

		<?php
		$args = array(
			'post_type' => 'topics',
			'post_status' => 'publish',
			'orderby' => 'date',
			'orderby' => 'DESC',
			'posts_per_page' => 6,
		);
		$the_query = new WP_Query($args);
		if($the_query->have_posts()){
			?>
			<section id="topics">
				<div class="width-fixed">
					<h2 data-aos="fade-right"><span class="eng line"></span>ニュース・トピックス</h2>
					<ul class="row">
						<?php
						while($the_query->have_posts()){
							$the_query->the_post();
							?>
							<li class="col-4 col-sm-6" data-aos="fade-up">
								<a href="<?php echo get_permalink() ?>">
									<div class="item">
										<figure><?php
										$wk = CFS()->get('topics_thumb');
										foreach ($wk as $thumb => $label){
											break;
										}
										$img_src = "";
										if((int)$thumb){
											$img_src = '<img src="'.get_template_directory_uri().'/assets/images/topics/thumb_index_0'.$thumb.'.jpg" alt="ニュース・トピックス">';
										}else{
											$img_src = wp_get_attachment_image_src(CFS()->get('topics_catch'),'topics');
											if($img_src) $img_src = '<img src="'.$img_src[0].'" alt="ニュース・トピックス">';
										}
										?><?php echo $img_src ?></figure>
										<div class="text-area">
											<p class="label"><?php
											if ($terms = get_the_terms($post->ID, 'topics_cat')){
												foreach ( $terms as $term ){
													echo esc_html($term->name);
												}
											}
											?></p>
											<p class="ttl"><?php the_title(); ?></p>
											<p class="date"><?php the_time('Y.m.d', $post->ID); ?></p>
										</div>
									</div>
								</a>
							</li>
							<?php
						}
						?>
					</ul>
					<p class="more" data-aos="fade-in"><a href="<?php echo esc_url( home_url('/topics/') ); ?>" class="arrow">LEARN MORE</a></p>
				</div>
			</section>
			<?php
		}
		?>
	</div>
</main>

<?php get_template_part('assets/parts/access'); ?>
<?php get_footer(); ?>

</div>
	
</body>

</html>
