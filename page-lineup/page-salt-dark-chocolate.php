<?php /*
	Template Name: 塩チョコレート
*/?>
	
<?php get_header(); ?>
		<main>
			<div class="contents">
				<div class="main-visual">
					<div class="inner">
						<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/lineup/lineup_salted-chocolate_mv_pc.jpg" alt="塩チョコレート" class="js-switch"></figure>
						<h2><small>ごほうびにどうぞ</small>塩チョコレート<span class="eng">SALTED-CHOCOLATE</span></h2>
					</div>
				</div>

				<section class="wide">
					<div class="inner">
						<h3 class="title" data-aos="fade-right"><span class="eng line"></span>商品の特長</h3>

						<div class="feature">
							<div class="width-fixed">
								<ul>
									<li class="row no-gutters no-gutters-sm justify-content-between align-items-center">
										<div class="photo col-sm-12" data-aos="fade-right">
											<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/lineup/lineup_salted-chocolate_01.jpg" alt=""></figure>
										</div>
										<div class="text-area col-sm-12" data-aos="fade-left">
											<p class="catch">心を豊かにするごほうびの時間</p>
											<p class="cont-txt">ビターな甘さのチョコにゲランドの塩をトッピング。<br>
												カカオ風味と塩が混ざりあう瞬間、<br>
												心を豊かにするごほうびの時間がはじまります。</p>
										</div>
									</li>
									<li class="row no-gutters no-gutters-sm justify-content-between align-items-center flex-sm-column-reverse">
										<div class="photo col-sm-12" data-aos="fade-left">
											<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/lineup/lineup_salted-chocolate_02.jpg" alt=""></figure>
										</div>
										<div class="text-area col-sm-12 order-first" data-aos="fade-right">
											<p class="catch">チョコの濃厚な甘さの中に<br class="pc">ほんのりとした塩味</p>
											<p class="cont-txt">ダークチョコレートの濃厚な甘さの中にほんのりとゲランドの塩味がさっぱりとした後味の印象を与えます。チョコの甘さとクルトンの香ばしさの対比は、噛めば噛むほど楽しくなることでしょう。</p>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</section>

				<section class="wide package">
					<div class="inner">
						<h3 class="title" data-aos="fade-right"><span class="eng line"></span>パッケージラインナップ</h3>
						<div class="lineupbox">
							<div class="width-fixed">
								<ul class="row align-items-center">
									<li class="col-6 col-sm-12 one-item" data-aos="fade-right">
										<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/lineup/lineup_salted-chocolate_cubebara.jpg" alt="塩チョコレート"></figure>
									</li>
									<li class="col-6 col-sm-12 one-item" data-aos="fade-left">
										<div class="text-area">
											<p class="ttl">かぞくのキューブ</p>
											<p class="cont-txt">15g入りの小分け包装が2個入った<br class="pc">お手軽パッケージです。</p>
											<table class="cmn-table mt-4">
												<tbody>
													<tr>
														<th>内容量</th>
														<td>15g×2</td>
													</tr>
													<tr>
														<th>価格</th>
														<td>000円(税込価格:000円)</td>
													</tr>
												</tbody>
											</table>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</section>
				<section class="wide package">
					<div class="inner">
						<h3 class="title" data-aos="fade-right"><span class="eng line"></span>成分表示</h3>
						<div class="material">
							<div class="width-fixed">
								<ul class="row align-items-center">
									
									<li class="col-12 col-sm-12 one-item order-1 order-sm-2" data-aos="fade-left">
										<table class="cmn-table">
											<tbody>
												<tr>
													<th>特定原材料等</th>
													<td>
														<ul class="specific">
															<li><i class="fal fa-egg-fried"></i>卵</li>
															<li><i class="fal fa-coffee"></i>乳</li>
															<li><i class="fal fa-wheat"></i>小麦</li>
														</ul>
													</td>
												</tr>
												<tr>
													<th>原材料</th>
													<td>小麦粉（2等粉）、てんさい糖、生イースト、シママース、脱脂粉乳、有機ショートニング、水、ダークチョコレート、ゲランドの塩（岩塩）

													</td>
												</tr>
												<tr>
													<th>賞味期限</th>
													<td>製造日から00日</td>
												</tr>
											</tbody>
										</table>
									</li>
								</ul>
							</div>
						</div>

						<div class="width-fixed giftset">
							<ul class="row justify-content-between flex-sm-column">
								<li class="col-12 one-item">
									<div class="row no-gutters no-gutters-sm js-clickArea">
										<figure class="col-7 col-sm-12 zoom" data-aos="fade-right"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/lineup/idx_giftset.jpg" alt="ギフトセット"></figure>
										<div class="col-5 col-sm-12 text-area" data-aos="fade-left">
											<p class="ttl">贈り物に最適な<br>ギフトセットのご案内</p>
											<p class="more"><span><a href="/gift/" class="arrow">LEAN MORE</a></span></p>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</section>

				<?php get_template_part('assets/parts/lineup-lownavi'); ?>
				
			</div>
		</main>

<!-- [ GLOBAL FOOTER ] -->
<?php get_template_part('assets/parts/access'); ?>
<!-- [ /GLOBAL FOOTER ] -->

<?php get_footer(); ?>
