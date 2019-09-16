<?php
/*
Template Name: 店舗紹介・アクセス
*/
get_header();
?>
		<main>
			<div class="contents">
				<div class="main-visual">
					<div class="inner">
						<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/access/main_visual_pc.jpg" alt="法人のお客様（出店・催事）" class="js-switch"></figure>
						<h2 data-aos="fade-left">店舗紹介・アクセス</h2>
					</div>
				</div>

				<section class="wide lead-access">
                    <div class="inner width-fixed">
                        <h3 class="title" data-aos="fade-right">私たちのお店にお越しください</h3>
                        <p class="cont-txt">
お店には「かぞくのクルトン」すべての種類をご用意しています。<br class="pc">
もちろんご試食していただくことができます。<br class="pc">
味と楽しさを実感していただくために、ぜひご来店ください。
                        </p>
                    </div>
                </section>

				<section class="wide info-access">
                    <div class="inner">
                        <h3 class="title" data-aos="fade-left"><span class="eng line"></span>店舗案内</h3>
						<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/access/store_1.jpg" alt="店舗案内" class="js-switch"></figure>
                    </div>
                </section>

				<section class="wide time-access">
                    <div class="inner">
                        <h3 class="title" data-aos="fade-left"><span class="eng line"></span>営業時間</h3>
                        <p class="cont-txt">11:00～19：00　水曜定休</p>
                    </div>
                </section>

				<section class="wide map-access">
                    <div class="inner">
                        <h3 class="title" data-aos="fade-left"><span class="eng line"></span>アクセスマップ</h3>
						<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/access/store_map.png" alt="店舗案内" class="js-switch"></figure>
                        <p class="store-name">かぞくのクルトン　本山本店</p>
                        <p class="store-address">〒464-0819<br class="sp">名古屋市千種区四谷通1-1<br class="sp">イリヤ本山1F<br>TEL:052-789-1008</p>
                        <p class="store-access">地下鉄東山線　4番出口より徒歩3分　愛知工業大学すぐ南</p>
                        <a href="#" class="arrow" target="_blank">MAP</a>
                        </p>
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
							<li class="col-4 col-sm-12 one-item js-clickArea active" data-aos="fade-up" data-aos-delay="300">
								<figure class="zoom col-sm-7"><span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/idx_lineup.jpg" alt=""></span></figure>
								<div class="text-area col-sm-5 order-sm-first">
									<p class="ttl">ラインナップ</p>
									<p class="eng">LINE UP</p>
									<p class="more"><span><a href="/lineup/" class="arrow">LEAN MORE</a></span></p>
								</div>
							</li>
							<li class="col-4 col-sm-12 one-item js-clickArea" data-aos="fade-up" data-aos-delay="600">
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


		<?php get_footer(); ?>