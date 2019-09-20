	<header class="header">
		<div id="js-header-inner">
			<div class="logo-area">
				<h1><a href="<?php echo esc_url( home_url('/') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_pc.png" alt="かぞくのクルトン"></a></h1>
			</div>
			<input id="menu-cb" type="checkbox" value="off">
			<label id="menu-icon" for="menu-cb"></label>
			<label id="menu-background" for="menu-cb"></label>
			<ul class="shareList forSP">
				<li><a class="insta_btn" href="<?php echo esc_url( home_url('/dummy/') ); ?>" target="_blank" title="instagram"><i class="fab fa-instagram"></i></a></li>
				<li><a class="insta_btn" href="<?php echo esc_url( home_url('/dummy/') ); ?>" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
				<li><a class="insta_btn" href="<?php echo esc_url( home_url('/dummy/') ); ?>" target="_blank" title="LINE"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/i_line.svg" alt="LINE"></a></li>
			</ul>
			
			<div id="menu-navi">
				<div class="menu-navi-inner">
					<nav id="site-navi">
						<hr>
						<ul>
							<li><a href="<?php echo esc_url( home_url('/concept/') ); ?>">ブランドコンセプト</a></li>
							<li>
								<a href="<?php echo esc_url( home_url('/secret/') ); ?>">かぞくのクルトンのひみつ</a>
							</li>
							<li class="lineup">
								<a class="navi-link sp-aco" href="<?php echo esc_url( home_url('/lineup/') ); ?>">ラインナップ</a>
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
	if($the_query->have_posts()){
		while($the_query->have_posts()){
			$the_query->the_post();
			$img_src = "";
			$img_src = wp_get_attachment_image_src(CFS()->get('subnav_img'),'lineup_subnav_thumb');
			if($img_src) $img_src = '<img src="'.$img_src[0].'" alt="'.get_the_title().'">';
?>
												<li class="col-4 col-sm-3">
													<a href="<?php echo get_permalink() ?>">
														<figure><?php echo $img_src ?></figure>
														<?php echo CFS()->get('subnav_title'); ?>
													</a>
												</li>
<?php
		}
		wp_reset_postdata();
	}
?>
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
	if($the_query->have_posts()){
		while($the_query->have_posts()){
			$the_query->the_post();
			$img_src = "";
			$img_src = wp_get_attachment_image_src(CFS()->get('subnav_img'),'lineup_subnav_thumb');
			if($img_src) $img_src = '<img src="'.$img_src[0].'" alt="'.get_the_title().'">';
?>
												<li class="col-4 col-sm-3">
													<a href="<?php echo get_permalink() ?>">
														<figure><?php echo $img_src ?></figure>
														<?php echo CFS()->get('subnav_title'); ?>
													</a>
												</li>
<?php
		}
		wp_reset_postdata();
	}
?>
											</ul>
										</dd>
									</dl>
								</div>
							</li>
							<li><a href="<?php echo esc_url( home_url('/gift/') ); ?>">ギフトセット</a></li>
							<li><a href="<?php echo esc_url( home_url('/recipe/') ); ?>">おいしいお召し上がり方</a></li>
							<li><a href="<?php echo esc_url( home_url('/access/') ); ?>">店舗紹介・アクセス</a></li>
							<li><a href="<?php echo esc_url( home_url('/topics/') ); ?>">ニュース・トピックス</a></li>
						</ul>
						<hr>
						<ul>
							<li><a href="<?php echo esc_url( home_url('/business/') ); ?>">法人のお客様（出店・催事）</a></li>
							<li><a href="https://hotey.co.jp/recruit/" target="_blank">採用情報</a></li>
							<li><a href="<?php echo esc_url( home_url('/inquiry/') ); ?>">お問い合わせ</a></li>
						</ul>
					</nav>
					
					<ul class="shareList forPC">
					<li><a class="insta_btn" href="<?php echo esc_url( home_url('/dummy/') ); ?>" target="_blank" title="instagram"><i class="fab fa-instagram"></i></a></li>
					<li><a class="insta_btn" href="<?php echo esc_url( home_url('/dummy/') ); ?>" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
					<li><a class="insta_btn" href="<?php echo esc_url( home_url('/dummy/') ); ?>" target="_blank" title="LINE"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/i_line.svg" alt="LINE"></a></li>
					</ul>
				</div>
			</div>
		</div>
	</header>
