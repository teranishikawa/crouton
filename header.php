<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="format-detection" content="telephone=no, address=no, email=no">
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<title><?php output_title() ?></title>
	<?php wp_head(); ?>

	<!--facebook-->
	<meta property="og:type" content="website">
	<meta property="og:image" content="dummy">
	<meta property="og:description" content="">
	<meta property="fb:app_id" content="">
	<!--/facebook-->

	<!-- resources -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/vendor/swiper.css" media="all">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/all.css" media="all">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/library.css" media="all">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/project.css" media="all">
	<?php
	//-------------css条件分岐------------------
	if ( is_home() || is_front_page() ) : //TOPページの場合?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/unique/top.css">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<?php elseif( is_page('lineup') || is_page_ancestor('lineup') ): //advantageページ、advantageの下層ページの場合?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/unique/lineup.css">

	<?php elseif( is_post_type_archive('topics') || is_tax('topics_cat') || is_singular('topics') ): ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/unique/topics.css">

	<?php elseif( is_post_type_archive('recipe') || is_tax('recipe_cat') || is_singular('recipe') ): ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/unique/recipe.css">


	<?php elseif( is_page('secret') || is_page_ancestor('secret') ): ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/unique/secret.css">

	<?php elseif( is_page('concept') ): ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/unique/concept.css">

	<?php elseif( is_page('business') ): ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/unique/business.css">

	<?php elseif( is_page('gift') ): ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/unique/gift.css">

	<?php elseif( is_page('access') ): ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/unique/access.css">

	<?php elseif( is_page('inquiry') || is_page('inquiry-confirm') || is_page('inquiry-submitted') ): ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/unique/inquiry.css">
	
	<script type="text/javascript" src="https://ajaxzip3.github.io/ajaxzip3.js"></script>
	<script type="text/javascript">
	jQuery(function( $ ) {
		jQuery( '#inquiry .mw_wp_form input[name="zip"]' ).keyup( function( e ) {
			AjaxZip3.zip2addr('zip','','pref','add1');
		} );
		if($('.error')[0]){
			$('body,html').animate({scrollTop:$('.error').eq(0).offset().top - 100});
		}
	} );
	</script>

	<?php else: //それ以外のページ場合?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/unique/other.css">

	<?php endif;
	//------------css条件分岐終わり--------------
	?>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/jquery.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/swiper.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
	<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600|Noto+Sans+JP:400,500&display=swap&subset=japanese" rel="stylesheet">
	<?php wp_head(); ?>
	<!-- /resources -->
</head>


<body id="<?php addSlugName('id'); ?>" class="<?php addSlugName('class'); ?>">
	<noscript>JavascriptがOFFのため正しく表示されない可能性があります。</noscript>
	<div id="wrap">

	<header class="header">
		<div id="js-header-inner">
			<div class="logo-area">
				<h1><a href="<?php echo esc_url( home_url('/') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_pc.png" alt="かぞくのクルトン"></a></h1>
			</div>
			<input id="menu-cb" type="checkbox" value="off">
			<label id="menu-icon" for="menu-cb"></label>
			<label id="menu-background" for="menu-cb"></label>
			<ul class="shareList forSP">
				<!--<li><a class="insta_btn" href="<?php echo esc_url( home_url('/dummy/') ); ?>" target="_blank" title="instagram"><i class="fab fa-instagram"></i></a></li>-->
				<li><a class="insta_btn" href="<?php echo esc_url( home_url('http://www.facebook.com/share.php?u=https://kazokuno-crouton.jp') ); ?>" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
				<li><a class="insta_btn" href="<?php echo esc_url( home_url('https://twiter.com/share?url=https://kazokuno-crouton.jp') ); ?>" target="_blank" title="LINE"><i class="fab fa-twitter"></i></a></li>
			</ul>
			
			<div id="menu-navi">
				<div class="menu-navi-inner">
					<nav id="site-navi">
						
						<ul>
							<li><a <?php if (is_page('concept')) { echo 'class="current"'; } ?> href="<?php echo esc_url( home_url('/concept/') ); ?>">ブランドコンセプト</a></li>
							<li>
								<a <?php if(is_page(array('secret','about_croutons', 'birth')) ) { echo 'class="current"'; } ?> href="<?php echo esc_url( home_url('/secret/') ); ?>">かぞくのクルトンのひみつ</a>
							</li>
							<li id="slide-navi" class="lineup">
								<a <?php if( is_page(array('lineup', 'salt-dark-chocolate', 'salt-caramel-blonde-chocolate', 'macha-white-chocolate', 'tomato', 'potate', 'toast', 'cheese', 'corn', 'curry', 'brownsugar-soybeanflour','purplesweetpotate', 'soysauce')) ) { echo 'class="current"'; } ?> class="navi-link sp-aco" href="<?php echo esc_url( home_url('/lineup/') ); ?>">ラインナップ</a>
								<div class="site-subnavi open-aco">
									<dl>
										<dt>
											<a href="<?php echo esc_url( home_url('/lineup/') ); ?>">
												<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/subnavi_lineup.jpg" alt=""></figure>
												ラインナップトップ
											</a>
										</dt>
										<dd>
											<ul class="menu-area row">
												<li class="col-4 col-sm-3">
													<a href="<?php echo esc_url( home_url('/lineup/salt-dark-chocolate/') ); ?>">
														<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/subnavi_salt-darkchocolate.jpg" alt=""></figure>
														塩チョコレート
													</a>
												</li>
												<li class="col-4 col-sm-3">
													<a href="<?php echo esc_url( home_url('/lineup/salt-caramel_blonde-chocolate/') ); ?>">
														<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/subnavi_salt-caramel.jpg" alt=""></figure>
														塩キャラメル<br>チョコレート
													</a>
												</li>
												<li class="col-4 col-sm-3">
													<a href="<?php echo esc_url( home_url('/lineup/macha-white-chocolate/') ); ?>">
														<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/subnavi_matcha.jpg" alt=""></figure>
														抹茶<br>チョコレート
													</a>
												</li>
												<li class="col-4 col-sm-3">
													<a href="<?php echo esc_url( home_url('/lineup/tomato/') ); ?>">
														<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/subnavi_tomato.jpg" alt=""></figure>
														もぎたてトマト
													</a>
												</li>
												<li class="col-4 col-sm-3">
													<a href="<?php echo esc_url( home_url('/lineup/potato/') ); ?>">
														<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/subnavi_potato.jpg" alt=""></figure>
														ホクホクポテト
													</a>
												</li>
												<li class="col-4 col-sm-3">
													<a href="<?php echo esc_url( home_url('/lineup/toast/') ); ?>">
														<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/subnavi_toast.jpg" alt=""></figure>
														はちみつ<br>トースト
													</a>
												</li>
												<li class="col-4 col-sm-3">
													<a href="<?php echo esc_url( home_url('/lineup/cheese/') ); ?>">
														<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/subnavi_cheese.jpg" alt=""></figure>
														コクうまチーズ
													</a>
												</li>
												<li class="col-4 col-sm-3">
													<a href="<?php echo esc_url( home_url('/lineup/corn/') ); ?>">
														<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/subnavi_corn.jpg" alt=""></figure>
														やきたてコーン
													</a>
												</li>
												<li class="col-4 col-sm-3">
													<a href="<?php echo esc_url( home_url('/lineup/curry/') ); ?>">
														<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/subnavi_curry.jpg" alt=""></figure>
														おいしいカレー
													</a>
												</li>
												<li class="col-4 col-sm-3">
													<a href="<?php echo esc_url( home_url('/lineup/brownsugar-soybeanflour/') ); ?>">
														<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/subnavi_brownsugar.jpg" alt=""></figure>
														こくとうと<br>きなこ
													</a>
												</li>
												<li class="col-4 col-sm-3">
													<a href="<?php echo esc_url( home_url('/lineup/purplesweetpotato/') ); ?>">
														<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/subnavi_sweetpotato.jpg" alt=""></figure>
														むらさきいも
													</a>
												</li>
												<li class="col-4 col-sm-3">
													<a href="<?php echo esc_url( home_url('/lineup/soysauce/') ); ?>">
														<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/subnavi_soysause.jpg" alt=""></figure>
														みたらし醤油
													</a>
												</li>
											</ul>
										</dd>
									</dl>
								</div>
							</li>
							<li><a <?php if( is_page('gift') ){ echo 'class="current"'; } ?> href="<?php echo esc_url( home_url('/gift/') ); ?>">ギフトセット</a></li>
							<li><a <?php if( get_post_type() == 'recipe' ){ echo 'class="current"'; } ?> href="<?php echo esc_url( home_url('/recipe/') ); ?>">おいしいお召し上がり方</a></li>
							<li><a <?php if( is_page('access') ){ echo 'class="current"'; } ?> href="<?php echo esc_url( home_url('/access/') ); ?>">店舗紹介・アクセス</a></li>
							<li><a <?php if( get_post_type() == 'topics' ){ echo 'class="current"'; } ?> href="<?php echo esc_url( home_url('/topics/') ); ?>">ニュース・トピックス</a></li>
						</ul>
						
						<ul>
							<li><a href="<?php echo esc_url( home_url('/business/') ); ?>">法人のお客様（出店・催事）</a></li>
							<li><a href="https://hotey.co.jp/recruit/" target="_blank">採用情報</a></li>
							<li><a href="<?php echo esc_url( home_url('/inquiry/') ); ?>">お問い合わせ</a></li>
						</ul>
					</nav>
					
					<ul class="shareList forPC">
					<!--<li><a class="insta_btn" href="<?php echo esc_url( home_url('/dummy/') ); ?>" target="_blank" title="instagram"><i class="fab fa-instagram"></i></a></li>-->
					<li><a class="insta_btn" href="<?php echo esc_url( home_url('http://www.facebook.com/share.php?u=https://kazokuno-crouton.jp') ); ?>" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
					<li><a class="insta_btn" href="<?php echo esc_url( home_url('https://twiter.com/share?url=https://kazokuno-crouton.jp') ); ?>" target="_blank" title="LINE"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</header>