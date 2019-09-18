<?php
/*
Template Name: おいしいお召し上がり方
*/
get_header();
?>

		<main>
			<div class="contents">
				<div class="main-visual">
					<div class="inner">
						<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/recipe/main_visual_delicious_pc.jpg" alt="おいしいお召し上がり方" class="js-switch"></figure>
						<h2>おいしいお召し上がり方</h2>
					</div>
				</div>

				<section class="wide introduction">
					<div class="inner">
						<div class="various width-fixed">
							<div class="various-box" data-aos="fade-right">
								<div class="aos-init aos-animate" data-aos="fade-right">
									<figure class="zoom">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/recipe/ph_recipe.jpg" alt="おいしさの組み合わせさまざま">
									</figure>
								</div>
								<div class="text ex-area aos-init aos-animate" data-aos="fade-right">
									<h3>おいしさの組み合わせさまざま</h3>
									<p>
										お菓子としてそのまま食べてもおいしいかぞくのクルトンは、多彩な風味を持つフレーバーの多さが特色です。<br>
										色々なお飲み物に合うのはもちろん、おつまみや料理にアレンジすることで、見た目も鮮やかなさまざなおいしさを演出することができます。
									</p>
								</div>
							</div>
						</div>

						<div class="example width-fixed">
							<h3 class="title" data-aos="fade-right"><span class="eng line">EXAMPLE</span>おいしいお召し上がり方の例</h3>
							<ul>
								<li data-aos="fade-up"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/recipe/example_01.jpg" alt="ビールのおつまみに"><figcaption>01</figcaption></figure><p>ビールのおつまみに</p></li>
								<li data-aos="fade-up" data-aos-delay="300"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/recipe/example_02.jpg" alt="サラダにのせて"><figcaption>02</figcaption></figure><p>サラダにのせて</p></li>
								<li data-aos="fade-up" data-aos-delay="600"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/recipe/example_03.jpg" alt="デザートのトッピングに"><figcaption>03</figcaption></figure><p>デザートのトッピングに</p></li>
								<li data-aos="fade-up"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/recipe/example_04.jpg" alt="スープに入れて"><figcaption>04</figcaption></figure><p>スープに入れて</p></li>
								<li data-aos="fade-up" data-aos-delay="300"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/recipe/example_04.jpg" alt="シリアルとして"><figcaption>05</figcaption></figure><p>シリアルとして</p></li>
							</ul>
						</div>
						
					</div>
				</section>


				 <section class="wide next_link">
                    <div class="inner">
                        <div class="width-fixed">
                            <h3 class="title" data-aos="fade-left"><span class="eng line"></span></h3>
                            <ul>
                                <li class=" js-clickArea row no-gutters no-gutters-sm justify-content-between align-items-center flex-sm-column">
                                    <div class="photo" data-aos="fade-right">
                                        <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/recipe/idx_recipe.jpg" alt="アレンジレシピ"></figure>
                                    </div>
                                    <div class="text-area" data-aos="fade-left">
                                        <p class="catch">アレンジレシピ</p>
                                        <p class="cont-txt">かぞくのクルトンをさらにおいしくお召し上がりいただくために、
															プロのテーブルスタイリストが考案したアレンジレシピをご用意しました。
															味わいも彩りもさらに豊かになるクルトンレシピをぜひお試しください。</p>
                                        <p class="more"><span><a href="<?php echo esc_url( home_url('/recipe/') ); ?>"    class="arrow">LEARN MORE</a></span></p>
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
								<figure class="zoom col-sm-7"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/idx_gift.jpg" alt=""></figure>
								<div class="text-area col-sm-5">
									<p class="ttl">ギフトセット</p>
									<p class="more"><span><a href="/secret/" class="arrow">LEARN MORE</a></span></p>
								</div>
							</li>
							<li class="col-4 col-sm-12 one-item js-clickArea active" data-aos="fade-up" data-aos-delay="300">
                                <figure class="zoom col-sm-7"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/idx_recipe.jpg" alt=""></figure>
                                <div class="text-area col-sm-5">
                                    <p class="ttl">おいしいお召し上がり方</p>
                                    <p class="more"><span><a href="<?php echo esc_url( home_url('/delicious/') ); ?>" class="arrow">LEARN MORE</a></span></p>
                                </div>
                            </li>
                            <li class="col-4 col-sm-12 one-item js-clickArea" data-aos="fade-up" data-aos-delay="600">
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

		<!-- [ GLOBAL FOOTER ] -->
		<?php get_template_part('assets/parts/access'); ?>
		<!-- [ /GLOBAL FOOTER ] -->

		<?php get_footer(); ?>