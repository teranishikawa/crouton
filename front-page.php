<?php get_header(); ?>
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

						<div class="scroll-navi align-items-center">
							<dl>
								<dt>SCROLL</dt>
								<dd>
									<ul>
										<li><a href="<?php echo esc_url( home_url('/#pickup') ); ?>"><span class="scroll-bullet"></span>
												<p class="description">ピックアップニュース</p>
											</a></li>
										<li><a href="<?php echo esc_url( home_url('/#concept') ); ?>"><span class="scroll-bullet"></span>
												<p class="description">ブランドコンセプト</p>
											</a></li>
										<li><a href="<?php echo esc_url( home_url('/#lineup') ); ?>"><span class="scroll-bullet"></span>
												<p class="description">ラインアップ</p>
											</a></li>
										<li><a href="<?php echo esc_url( home_url('/#secret') ); ?>"><span class="scroll-bullet"></span>
												<p class="description">かぞくのクルトンのひみつ</p>
											</a></li>
										<li><a href="<?php echo esc_url( home_url('/#recipe') ); ?>"><span class="scroll-bullet"></span>
												<p class="description">おいしいお召し上がり方</p>
											</a></li>
										<li><a href="<?php echo esc_url( home_url('/#gift') ); ?>"><span class="scroll-bullet"></span>
												<p class="description">ギフトセット</p>
											</a></li>
										<li><a href="<?php echo esc_url( home_url('/#topics') ); ?>"><span class="scroll-bullet"></span>
												<p class="description">ニュース・トピックス</p>
											</a></li>
										<li><a href="<?php echo esc_url( home_url('/#access-area') ); ?>"><span class="scroll-bullet"></span>
												<p class="description">店舗紹介・アクセス</p>
											</a></li>
									</ul>
								</dd>
							</dl>
						</div>

						<section id="pickup">
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
												$img_src = wp_get_attachment_image_src(CFS()->get('topics_catch'),'full');
												if($img_src) $img_src = '<img src="'.$img_src[0].'" alt="'.get_the_title().'">';
											}
								?>
								<div class="swiper-slide">
									<div class="row no-gutters no-gutters-sm align-items-center justify-content-between">
										<div class="img-area order-sm-first">
											<figure><?php echo $img_src ?></figure>
										</div>
										<div class="text-area js-clickArea">
											<p class="label"><?php
										if ($terms = get_the_terms($post->ID, 'topics_cat')){
											foreach ( $terms as $term ){
											echo esc_html($term->name);
											}
										}
									?></p>
											<p class="ttl"><?php the_title(); ?></p>
											<p class="date"><?php the_time('Y.m.d', $post->ID); ?></p>
											<p class="more"><a href="<?php echo get_permalink() ?>" class="arrow">LEAN MORE</a></p>
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
	

				<section id="concept" class="wide">
					<div class="inner" data-aos="fade-up">
						<div class="ttl-area" data-aos="fade-left">
							<h2><span class="eng line"></span>コンセプト</h2>
						</div>
						<div class="bg">
							<video src="<?php echo get_template_directory_uri(); ?>/assets/images/top/concept_video.mp4" autoplay loop muted></video>
						</div>
						<div class="text-area" data-aos="fade-left">							
							<p class="copy" data-aos="fade-up" data-aos-delay="600">食卓がつくる、絆をもっと。</p>			
							<p class="tx-concept" data-aos="fade-left" data-aos-delay="900">
								<p data-aos="zoom-in-left" data-aos-delay="100">食卓は、心をつくる。</p><p data-aos="zoom-in-left" data-aos-delay="300">心を寄せあう、分けあう、重ねあう場所だから。</p><p data-aos="zoom-in-left" data-aos-delay="500">かぞくとは、大切な人との絆。</p><p data-aos="zoom-in-left" data-aos-delay="600">かぞくの心の温もりが届いたら、</p><p data-aos="zoom-in-left" data-aos-delay="800">心の食卓はつながって、かぞくの絆がつくられる。</p><p data-aos="zoom-in-left" data-aos-delay="1000">離れていたって、心はひとりにならない。</p>
							<p data-aos="zoom-in-left" data-aos-delay="1200">食卓がつくる、絆をもっと。</p><p data-aos="zoom-in-left" data-aos-delay="1400">かぞくのクルトン</p>
							<p class="more" data-aos="fade-right" data-aos-delay="1600"><a href="<?php echo esc_url( home_url('/concept/') ); ?>" class="arrow">LEAN MORE</a></p>
						</div>
						<!--
						<div class="row no-gutters no-gutters-sm justify-content-between">
							<div class="text-area">
								<div class="copy-area">
									<figure data-aos=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/p_concept01.png" alt=""></figure>
									<p class="copy" data-aos=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/tx_concept01.png" alt="食卓がつくる、絆をもっと。" class="w-auto"></p>
								</div>
								<p class="tx-concept" data-aos="">食卓は、心をつくる。<br>心を寄せあう、分けあう、重ねあう場所だから。<br>かぞくとは、大切な人との絆。<br>かぞくの心の温もりが届いたら、<br>心の食卓はつながって、かぞくの絆がつくられる。<br>離れていたって、心はひとりにならない。</p>
								<p class="more"><a href="<?php echo esc_url( home_url('/concept/') ); ?>" class="arrow">LEAN MORE</a></p>
							</div>
							<div class="roll-area" style="overflow:hidden">
								<div id="js-roll-slick-container">
									<div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/p_concept_roll01.jpg" alt=""></div>
									<div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/p_concept_roll02.jpg" alt=""></div>
									<div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/p_concept_roll03.jpg" alt=""></div>
									<div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/p_concept_roll04.jpg" alt=""></div>
									<div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/p_concept_roll05.jpg" alt=""></div>
									<div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/p_concept_roll06.jpg" alt=""></div>
								</div>
							</div>
						</div>
						-->
					</div>
				</section>

				<section id="lineup" class="lineup wide">
					<div class="inner">
						<div class="ttl-area" data-aos="fade-right" data-aos-delay="300">
							<h2><span class="eng line" data-aos="fade-right" data-aos-delay="600"></span>ラインナップ</h2>
						</div>
						<ul class="row no-gutters no-gutters-sm seasonal">
							<li class="col-4 one-item" data-aos="zoom-out-up">
								<a href="<?php echo esc_url( home_url('/lineup/salt-dark-chocolate/') ); ?>" class="arrow only">
									<figure class="zoom"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/lineup_salt_chocolate_off.jpg" alt="塩チョコレート" data-productname="salt_chocolate"></figure>
									<div class="text-area">
										<p class="label">季節限定</p>
										<p class="ttl"><small>塩</small>チョコレート<span class="eng">SALT DARK CHOCOLATE</span></p>
									</div>
								</a>
							</li>
							<li class="col-4 one-item" data-aos="zoom-out-down" data-aos-delay="300">
								<a href="<?php echo esc_url( home_url('/lineup/salt-caramel_blonde-chocolate/') ); ?>" class="arrow only">
									<figure class="zoom"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/lineup_salt_caramel_off.jpg" alt="塩キャラメルチョコレート" data-productname="salt_caramel"></figure>
									<div class="text-area">
										<p class="label">季節限定</p>
										<p class="ttl"><small>塩</small>キャラメル<br class="forSP"><small>チョコレート</small><span class="eng">SALT CARAMEL BLONDE CHOCOLATE</span></p>
									</div>
								</a>
							</li>
							<li class="col-4 one-item" data-aos="zoom-out-up" data-aos-delay="300">
								<a href="<?php echo esc_url( home_url('/lineup/macha-white-chocolate/') ); ?>" class="arrow only">
									<figure class="zoom"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/lineup_salt_greentea_off.jpg" alt="抹茶チョコレート" data-productname="salt_greentea"></figure>
									<div class="text-area">
										<p class="label">季節限定</p>
										<p class="ttl"><small>抹茶</small>チョコレート<span class="eng">MATCHA WHITE CHOCOLATE</span></p>
									</div>
								</a>
							</li>
						</ul>

						<div class="menu-list forPC">
							<table class="menu-tbl">
								<tbody>
									<tr>
										<td colspan="2" class="one-item" data-aos="zoom-in-up">
											<a href="<?php echo esc_url( home_url('/lineup/tomato/') ); ?>" class="arrow only">
												<figure class="zoom"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/lineup_tomato.jpg" alt="もぎたてトマト" data-productname="tomato"></figure>
												<div class="text-area">
													<p class="label new">NEW</p>
													<p class="ttl" data-aos="zoom-in-down" data-aos-delay="300"><small>もぎたて</small>トマト<span class="eng">TOMATO</span></p>
												</div>
											</a>
										</td>
										<td colspan="2" class="one-item" data-aos="zoom-in-down" data-aos-delay="200">
											<a href="<?php echo esc_url( home_url('/lineup/potato/') ); ?>" class="arrow only">
												<figure class="zoom"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/lineup_potato.jpg" alt="ホクホクポテト" data-productname="potato"></figure>
												<div class="text-area">
													<p class="label new">NEW</p>
													<p class="ttl" data-aos="zoom-in-down" data-aos-delay="300"><small>ホクホク</small>ポテト<span class="eng">POTATO</span></p>
												</div>
											</a>
										</td>
										<td rowspan="2" class="one-item" data-aos="zoom-in-up" data-aos-delay="400">
											<a href="<?php echo esc_url( home_url('/lineup/cheese/') ); ?>" class="arrow only">
												<figure class="vertically zoom"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/lineup_cheese.jpg" alt="コクうまチーズ" data-productname="cheese"></figure>
												<div class="text-area vertically">
													<p class="ttl" data-aos="zoom-in-down" data-aos-delay="300"><small>コクうま</small>チーズ<span class="eng">CHEESE</span></p>
												</div>
											</a>
										</td>
									</tr>
									<tr>
										<td colspan="2" class="one-item" data-aos="zoom-in-up">
											<a href="<?php echo esc_url( home_url('/lineup/toast/') ); ?>" class="arrow only">
												<figure class="zoom"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/lineup_toast.jpg" alt="はちみつトースト" data-productname="toast"></figure>
												<div class="text-area order-first">
													<p class="ttl" data-aos="zoom-in-down" data-aos-delay="300"><small>はちみつ</small>トースト<span class="eng">TOAST</span></p>
												</div>
											</a>
										</td>
										<td colspan="2" rowspan="2" data-aos="zoom-in-down" data-aos-delay="200">
											<figure class="vertically"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/lineup_photo01.jpg" alt="" data-productname=""></figure>
										</td>
									</tr>
									<tr>
										<td colspan="2" class="one-item" data-aos="zoom-in-up" data-aos-delay="400">
											<a href="<?php echo esc_url( home_url('/lineup/corn/') ); ?>" class="arrow only">
												<figure class="zoom"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/lineup_corn.jpg" alt="やきたてコーン" data-productname="corn"></figure>
												<div class="text-area">
													<p class="ttl" data-aos="zoom-in-down" data-aos-delay="300"><small>やきたて</small>コーン<span class="eng">CORN</span></p>
												</div>
											</a>
										</td>
										<td rowspan="2" class="one-item" data-aos="zoom-in-down" data-aos-delay="600">
											<a href="<?php echo esc_url( home_url('/lineup/curry/') ); ?>" class="arrow only">
												<figure class="vertically zoom"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/lineup_curry.jpg" alt="おいしいカレー" data-productname="curry"></figure>
												<div class="text-area vertically">
													<p class="ttl" data-aos="zoom-in-down" data-aos-delay="300"><small>おいしい</small>カレー<span class="eng">CURRY</span></p>
												</div>
											</a>
										</td>
									</tr>
									<tr>
										<td colspan="2" data-aos="zoom-in-up"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/lineup_photo02.jpg" alt=""></td>
										<td colspan="2" class="one-item" data-aos="zoom-in-up">
											<a href="<?php echo esc_url( home_url('/lineup/brownsugar-soybeanflour/') ); ?>" class="arrow only">
												<figure class="zoom"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/lineup_brownsugar.jpg" alt="こくとうときなこ" data-productname="brownsugar"></figure>
												<div class="text-area order-first">
													<p class="ttl" data-aos="zoom-in-down" data-aos-delay="300">こくとう<small>と</small>きなこ<span class="eng">BROWN SUGAR &amp; SOYBEAN FLOUR</span></p>
												</div>
											</a>
										</td>
									</tr>
									<tr>
										<td colspan="2" class="one-item" data-aos="zoom-in-down" data-aos-delay="200">
											<a href="<?php echo esc_url( home_url('/lineup/purplesweetpotato/') ); ?>" class="arrow only">
												<figure class="zoom"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/lineup_sweetpotato.jpg" alt="むらさきいも" data-productname="sweetpotato"></figure>
												<div class="text-area">
													<p class="ttl" data-aos="zoom-in-down" data-aos-delay="300"><small>むらさき</small>いも<span class="eng">PURPLE SWEET POTATO</span></p>
												</div>
											</a>
										</td>
										<td colspan="2" class="one-item" data-aos="zoom-in-up" data-aos-delay="400">
											<a href="<?php echo esc_url( home_url('/lineup/soysauce/') ); ?>" class="arrow only">
												<figure class="zoom"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/lineup_soysauce.jpg" alt="みたらし醤油" data-productname="soysauce"></figure>
												<div class="text-area">
													<p class="ttl" data-aos="zoom-in-down" data-aos-delay="300"><small>みたらし</small>醤油<span class="eng">SOY SAUCE</span></p>
												</div>
											</a>
										</td>
										<td class="more-link">
											<p class="more"><a href="<?php echo esc_url( home_url('/lineup/') ); ?>" class="arrow">LEAN MORE</a></p>
										</td>
									</tr>
								</tbody>
							</table>
						</div>

						<div class="menu-list forSP">
							<table class="menu-tbl" data-aos="zoom-in-up">
								<tbody>
									<tr>
										<td colspan="2" class="one-item">
											<a href="<?php echo esc_url( home_url('/lineup/tomato/') ); ?>" class="arrow only">
												<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/lineup_tomato.jpg" alt="もぎたてトマト" data-productname="tomato"></figure>
												<div class="text-area">
													<p class="label new">NEW</p>
													<p class="ttl"><small>もぎたて</small>トマト<span class="eng">TOMATO</span></p>
												</div>
											</a>
										</td>
										<td colspan="2" class="one-item">
											<a href="<?php echo esc_url( home_url('/lineup/potato/') ); ?>" class="arrow only">
												<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/lineup_potato.jpg" alt="ホクホクポテト" data-productname="potato"></figure>
												<div class="text-area">
													<p class="label new">NEW</p>
													<p class="ttl"><small>ホクホク</small>ポテト<span class="eng">POTATO</span></p>
												</div>
											</a>
										</td>
									</tr>
									<tr>
										<td colspan="2" class="one-item">
											<a href="<?php echo esc_url( home_url('/lineup/cheese/') ); ?>" class="arrow only">
												<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/lineup_cheese.jpg" alt="コクうまチーズ" data-productname="cheese"></figure>
												<div class="text-area order-first">
													<p class="ttl"><small>コクうま</small>チーズ<span class="eng">CHEESE</span></p>
												</div>
											</a>
										</td>
										<td colspan="2" class="one-item">
											<a href="<?php echo esc_url( home_url('/lineup/toast/') ); ?>" class="arrow only">
												<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/lineup_toast.jpg" alt="はちみつトースト" data-productname="toast"></figure>
												<div class="text-area order-first">
													<p class="ttl"><small>はちみつ</small>トースト<span class="eng">TOAST</span></p>
												</div>
											</a>
										</td>
									</tr>
									<tr>
										<td colspan="2" class="one-item">
											<a href="<?php echo esc_url( home_url('/lineup/corn/') ); ?>" class="arrow only">
												<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/lineup_corn.jpg" alt="やきたてコーン" data-productname="corn"></figure>
												<div class="text-area">
													<p class="ttl"><small>やきたて</small>コーン<span class="eng">CORN</span></p>
												</div>
											</a>
										</td>
										<td colspan="2" class="one-item">
											<a href="<?php echo esc_url( home_url('/lineup/curry/') ); ?>" class="arrow only">
												<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/lineup_curry.jpg" alt="おいしいカレー" data-productname="curry"></figure>
												<div class="text-area">
													<p class="ttl"><small>おいしい</small>カレー<span class="eng">CURRY</span></p>
												</div>
											</a>
										</td>
									</tr>
									<tr>
										<td colspan="2" class="one-item">
											<a href="<?php echo esc_url( home_url('/lineup/brownsugar-soybeanflour/') ); ?>" class="arrow only">
												<figure class="zoom"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/lineup_brownsugar.jpg" alt="こくとうときなこ" data-productname="brownsugar"></figure>
												<div class="text-area order-first">
													<p class="ttl">こくとう<small>と</small>きなこ<span class="eng">BROWN SUGAR &amp; SOYBEAN FLOUR</span></p>
												</div>
											</a>
										</td>
										<td colspan="2" class="one-item">
											<a href="<?php echo esc_url( home_url('/lineup/purplesweetpotato/') ); ?>" class="arrow only">
												<figure class="zoom"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/lineup_sweetpotato.jpg" alt="むらさきいも" data-productname="sweetpotato"></figure>
												<div class="text-area order-first">
													<p class="ttl"><small>むらさき</small>いも<span class="eng">PURPLE SWEET POTATO</span></p>
												</div>
											</a>
										</td>
									</tr>
									<tr>
										<td colspan="2" class="one-item">
											<a href="<?php echo esc_url( home_url('/lineup/soysauce/') ); ?>" class="arrow only">
												<figure class="zoom"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/lineup_soysauce.jpg" alt="みたらし醤油" data-productname="soysauce"></figure>
												<div class="text-area">
													<p class="ttl"><small>みたらし</small>醤油<span class="eng">SOY SAUCE</span></p>
												</div>
											</a>
										</td>
										<td colspan="2" class="more-link">
											<p class="more"><a href="<?php echo esc_url( home_url('/lineup/') ); ?>" class="arrow">LEAN MORE</a></p>
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
							<div class="row no-gutters no-gutters-sm js-clickArea">
								<div class="col-6 col-sm-12 text-area" data-aos="fade-right">
									<h2><span class="eng line"></span>かぞくのクルトンのひみつ</h2>
									<p class="more forPC"><a href="<?php echo esc_url( home_url('/secret/') ); ?>" class="arrow">LEAN MORE</a></p>
								</div>
								<figure class="col-6 col-sm-12" data-aos="fade-left">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/idx_secret.jpg" alt="">
								</figure>
							</div>
							<p class="more forSP"><a href="<?php echo esc_url( home_url('/secret/') ); ?>" class="arrow">LEAN MORE</a></p>
						</li>
						<li id="recipe">
							<div class="row no-gutters no-gutters-sm js-clickArea">
								<div class="col-6 col-sm-12 text-area order-last order-sm-first" data-aos="fade-left">
									<h2><span class="eng line"></span>おいしいお召し上がり方</h2>
									<p class="more forPC"><a href="<?php echo esc_url( home_url('/recipe/') ); ?>" class="arrow">LEAN MORE</a></p>
								</div>
								<figure class="col-6 col-sm-12" data-aos="fade-right">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/idx_recipe.jpg" alt="">
								</figure>
							</div>
							<p class="more forSP"><a href="<?php echo esc_url( home_url('/recipe/') ); ?>" class="arrow">LEAN MORE</a></p>
						</li>
						<li id="gift">
							<div class="row no-gutters no-gutters-sm js-clickArea">
								<div class="col-6 col-sm-12 text-area" data-aos="fade-right">
									<h2><span class="eng line"></span>ギフトセット</h2>
									<p class="more forPC"><a href="<?php echo esc_url( home_url('/gift/') ); ?>" class="arrow">LEAN MORE</a></p>
								</div>
								<figure class="col-6 col-sm-12" data-aos="fade-left">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/idx_gift.jpg" alt="">
								</figure>
							</div>
							<p class="more forSP"><a href="<?php echo esc_url( home_url('/gift/') ); ?>" class="arrow">LEAN MORE</a></p>
						</li>
					</ul>
				</section>

				<section id="topics">
					<div class="width-fixed">
						<h2 data-aos="fade-right"><span class="eng line"></span>ニュース・トピックス</h2>
						<ul class="row">
							<li class="col-4 col-sm-6" data-aos="fade-up">
								<a href="<?php echo esc_url( home_url('/dummy/') ); ?>">
									<div class="item">
										<figure>
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/topics/news_item_01.jpg" alt="">
										</figure>
										<div class="text-area">
											<p class="label">商品</p>
											<p class="ttl">冬季限定「ストロベリーフレーバー」新発売！</p>
											<p class="date">2019.01.10</p>
										</div>
									</div>
								</a>
							</li>
							<li class="col-4 col-sm-6" data-aos="fade-up">
								<a href="<?php echo esc_url( home_url('/dummy/') ); ?>">
									<div class="item">
										<figure>
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/topics/news_item_02.jpg" alt="">
										</figure>
										<div class="text-area">
											<p class="label">商品</p>
											<p class="ttl">新商品「コーンポタージュフレーバー」発売！</p>
											<p class="date">2019.01.10</p>
										</div>
									</div>
								</a>
							</li>
							<li class="col-4 col-sm-6" data-aos="fade-up">
								<a href="<?php echo esc_url( home_url('/dummy/') ); ?>">
									<div class="item">
										<figure>
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/topics/news_no-item.jpg" alt="">
										</figure>
										<div class="text-area">
											<p class="label">お知らせ</p>
											<p class="ttl">停電点検作業にともなう休館のお知らせ</p>
											<p class="date">2019.01.10</p>
										</div>
									</div>
								</a>
							</li>
							<li class="col-4 col-sm-6" data-aos="fade-up">
								<a href="<?php echo esc_url( home_url('/dummy/') ); ?>">
									<div class="item">
										<figure>
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/topics/news_item_03.jpg" alt="">
										</figure>
										<div class="text-area">
											<p class="label">商品</p>
											<p class="ttl">冬季限定「ストロベリーフレーバー」新発売！冬季限定「ストロベリーフレーバー」新発売！</p>
											<p class="date">2019.01.10</p>
										</div>
									</div>
								</a>
							</li>
							<li class="col-4 col-sm-6" data-aos="fade-up">
								<a href="<?php echo esc_url( home_url('/dummy/') ); ?>">
									<div class="item">
										<figure>
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/topics/news_no-item.jpg" alt="">
										</figure>
										<div class="text-area">
											<p class="label">お知らせ</p>
											<p class="ttl">停電点検作業にともなう休館のお知らせ</p>
											<p class="date">2019.01.10</p>
										</div>
									</div>
								</a>
							</li>
							<li class="col-4 col-sm-6" data-aos="fade-up">
								<a href="<?php echo esc_url( home_url('/dummy/') ); ?>">
									<div class="item">
										<figure>
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/topics/news_item_01.jpg" alt="">
										</figure>
										<div class="text-area">
											<p class="label">商品</p>
											<p class="ttl">新商品「コーンポタージュフレーバー」発売！</p>
											<p class="date">2019.01.10</p>
										</div>
									</div>
								</a>
							</li>
						</ul>
						<p class="more"><a href="<?php echo esc_url( home_url('/topics/') ); ?>" class="arrow">LEAN MORE</a></p>
					</div>
				</section>

			</div>
		</main>

		<?php get_template_part('assets/parts/access'); ?>
		<?php get_footer(); ?>

	</div>
	
</body>

</html>
