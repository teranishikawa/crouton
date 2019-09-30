	<footer class="footer">
		<div class="container">
			<div class="footer-logo">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_footer.png" alt="かぞくのクルトン">
			</div>
			<div class="category-list">
				<ul class="row no-gutters no-gutters-sm">
					<li class="col-4 col-sm-12 order-sm-0"><a href="<?php echo esc_url( home_url('/concept/') ); ?>" class="arrow only">ブランドコンセプト</a></li>
					<li class="col-4 col-sm-12 order-sm-4"><a href="<?php echo esc_url( home_url('/delicious/') ); ?>" class="arrow only">おいしいお召し上がり方</a></li>
					<li class="col-4 col-sm-12 order-sm-8"><a href="<?php echo esc_url( home_url('/business/') ); ?>" class="arrow only">法人のお客様（出展・催事）</a></li>
					<li class="col-4 col-sm-12 order-sm-1"><a href="<?php echo esc_url( home_url('/secret/') ); ?>" class="arrow only">かぞくのクルトンのひみつ</a></li>
					<li class="col-4 col-sm-12 order-sm-5"><a href="<?php echo esc_url( home_url('/recipe/') ); ?>" class="arrow only">アレンジレシピ</a></li>
					<li class="col-4 col-sm-12 order-sm-9"><a href="<?php echo esc_url( home_url('/inquiry/') ); ?>" class="arrow only">お問い合わせ</a></li>	
					<li class="col-4 col-sm-12 order-sm-2"><a href="<?php echo esc_url( home_url('/lineup/') ); ?>" class="arrow only">ラインナップ</a></li>	
					<li class="col-4 col-sm-12 order-sm-6"><a href="<?php echo esc_url( home_url('/access/') ); ?>" class="arrow only">店舗紹介・アクセス</a></li>
					<li class="col-4 col-sm-12 order-sm-10"><a href="https://hotey.co.jp/recruit/" target="_blank" class="blank">採用情報</a></li>
					<li class="col-4 col-sm-12 order-sm-3"><a href="<?php echo esc_url( home_url('/gift/') ); ?>" class="arrow only">ギフトセット</a></li>
					<li class="col-4 col-sm-12 order-sm-7"><a href="<?php echo esc_url( home_url('/topics/') ); ?>" class="arrow only">ニュース・トピックス</a></li>
					<li class="col-4 col-sm-12 order-sm-11"><a href="https://hotey.co.jp/company/" target="_blank" class="blank">会社情報</a></li>
					
				</ul>
			</div>

			
			<p class="copyright">※当サイトに掲載されている「かぞくのクルトン」以外の食材の写真は全てイメージです。</p>
			<p class="copyright">Copyright &copy; Hotey Shokuryo Co.,Ltd. All Rights Reserved.</p>
		</div>
	</footer>

	<div id="js-page-top" class="page-top">
		<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/btn_pagetop.png" alt="ページの先頭へ"></a>
	</div>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
	// aosの初期化
	AOS.init({
		duration: 1000,
		once: true
	});
</script>


<?php wp_footer(); ?>