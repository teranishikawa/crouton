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
                    	<h3 class="title" data-aos="fade-right">2019年10月末オープン</h3>
                        <!--<h3 class="title" data-aos="fade-right">私たちのお店にお越しください</h3>-->
                        <p class="cont-txt" data-aos="fade-up">
							名古屋市本山の焼き菓子「クルトン」専門店『かぞくのクルトン』では、<br class="forPC">
							全商品をお取り扱いするとともに、ご試食もご用意しております。<br class="forPC">
							スタッフ一同お客様のご来店を心よりお待ちしております。					
                        </p>
                    </div>
                </section>

				<section class="wide info-access">
                    <div class="inner">
                        <h3 class="title" data-aos="fade-left"><span class="eng line"></span>店舗案内</h3>
						<div data-aos="layer-fade-right">
							<figure class="layer-fade-child"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/access/store_1.jpg" alt="店舗案内" class="js-switch"></figure>
						</div>
                    </div>
                </section>

				<section class="wide time-access">
                    <div class="inner">
                        <h3 class="title" data-aos="fade-left"><span class="eng line"></span>営業時間</h3>
                        <p class="cont-txt" data-aos="fade-left">11:00～19：00　水曜定休</p>
                    </div>
                </section>

				<section class="wide map-access">
                    <div class="inner">
                        <h3 class="title" data-aos="fade-left"><span class="eng line"></span>アクセスマップ</h3>
						<div id="gmap" class="gmap" data-aos="fade-up"></div>
                        <p class="store-name" data-aos="fade-left">かぞくのクルトン　本山本店</p>
                        <p class="attend" data-aos="fade-left">2019年10月末オープン予定</p>
                        <p class="store-address" data-aos="fade-up">〒464-0819 <br class="forSP">名古屋市千種区四谷通1-1 <br class="forSP">イリヤ本山1F<br>TEL:<a href="tel:0527891008">052-789-1008</a></p>
                        <p class="store-access" data-aos="fade-up">地下鉄東山線・名城線「本山駅」4番出口より徒歩1分</p>
                        <a href="https://goo.gl/maps/qTKJzSdWuxW9QLdt7" class="arrow" target="_blank" data-aos="fade-up">MAP</a>
                        </p>
                    </div>
                </section>


				<section class="pagelink-area">
					<div class="width-fixed">
						<ul class="row">
							<li class="col-4 col-sm-12 one-item js-clickArea" data-aos="fade-up" data-aos-delay="300">
								<figure class="zoom col-sm-7"><span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/idx_lineup.jpg" alt=""></span></figure>
								<div class="text-area col-sm-5">
									<p class="ttl">ラインナップ</p>
									<p class="more"><span><a href="/lineup/" class="arrow">LEARN MORE</a></span></p>
								</div>
							</li>
							<li class="col-4 col-sm-12 one-item js-clickArea" data-aos="fade-up" data-aos-delay="600">
								<figure class="zoom col-sm-7"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/idx_gift2.jpg" alt=""></figure>
								<div class="text-area col-sm-5">
									<p class="ttl">ギフトセット</p>
									<p class="more"><span><a href="/gift/" class="arrow">LEARN MORE</a></span></p>
								</div>
							</li>
							<li class="col-4 col-sm-12 one-item js-clickArea" data-aos="fade-up" data-aos-delay="300">
                                <figure class="zoom col-sm-7"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/idx_news.jpg" alt=""></figure>
                                <div class="text-area col-sm-5">
                                    <p class="ttl">ニュース・トピックス</p>
                                    <p class="more"><span><a href="<?php echo esc_url( home_url('/topics/') ); ?>" class="arrow">LEARN MORE</a></span></p>
                                </div>
                            </li>
						</ul>
					</div>
				</section>




			</div>
		</main>


		<?php get_footer(); ?>