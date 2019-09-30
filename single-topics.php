	<?php /*
	Template Name: ニュース・トピックス詳細
*/?>

<?php get_header(); ?>
<main>
	<div class="contents">
		<div class="main-visual">
			<div class="inner">
				<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/news/main_visual_sec_pc.jpg" alt="ニュース・トピックス" class="js-switch"></figure>
				<h2 data-aos="fade-left">ニュース・トピックス</h2>
			</div>
		</div>

		<?php
	// 次の記事を取得
		$sql = "
		SELECT
		".$table_prefix."posts.ID
		FROM
		".$table_prefix."posts
		INNER JOIN
		".$table_prefix."postmeta
		ON
		".$table_prefix."posts.ID = ".$table_prefix."postmeta.post_id
		WHERE
		".$table_prefix."posts.post_type = 'topics'
		AND
		".$table_prefix."posts.post_date < '".get_the_date( "Y-m-d H:i:s", (int)$post->ID )."'
		AND
		(".$table_prefix."posts.post_status = 'publish'".(is_user_logged_in() ? " OR ".$table_prefix."posts.post_status = 'private'":"").")
		GROUP BY
		".$table_prefix."posts.ID
		ORDER BY
		".$table_prefix."posts.post_date DESC
		LIMIT 0, 1";
		$results = $wpdb->get_results($sql);
		$nextId = 0;
		if(is_array($results)&&count($results)){
			$nextId = $results[0]->ID;
		}

	// 前の記事を取得
		$sql = "
		SELECT
		".$table_prefix."posts.ID
		FROM
		".$table_prefix."posts
		INNER JOIN
		".$table_prefix."postmeta
		ON
		".$table_prefix."posts.ID = ".$table_prefix."postmeta.post_id
		WHERE
		".$table_prefix."posts.post_type = 'topics'
		AND
		".$table_prefix."posts.post_date > '".get_the_date( "Y-m-d H:i:s", (int)$post->ID )."'
		AND
		(".$table_prefix."posts.post_status = 'publish'".(is_user_logged_in() ? " OR ".$table_prefix."posts.post_status = 'private'":"").")
		GROUP BY
		".$table_prefix."posts.ID
		ORDER BY
		".$table_prefix."posts.post_date ASC
		LIMIT 0, 1";
		$results = $wpdb->get_results($sql);
		$prevId = 0;
		if(is_array($results)&&count($results)){
			$prevId = $results[0]->ID;
		}
		?>

		<section class="wide topics-box">
			<div class="inner">

				<div class="topics-detail width-fixed">

					<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
						<p class="cat">
							<?php
							if ($terms = get_the_terms($post->ID, 'topics_cat')){
								foreach ( $terms as $term ){
									echo esc_html($term->name);
								}
							}
							?>
						</p>
						<h3><?php the_title(); ?></h3>
						<time><?php the_time('Y.m.d', $post->ID); ?></time>
						<div class="topics-body">
							<?php
							$img_src = wp_get_attachment_image_src(CFS()->get('topics_catch'),'full');
							if($img_src){
								echo '<img src="'.$img_src[0].'" alt="'.get_the_title().'">';
							}
							echo CFS()->get('topics_text')
							?>
						</div>

						<ul class="detail_navi">

							<li><?php if($prevId){ ?><a class="prev" href="<?php echo get_permalink($prevId); ?>">PREVIOUS</a><?php } ?></li>
							<li><a href="<?php echo get_bloginfo("siteurl"); ?>/topics/">RETURN TO TOP</a></li>
							<li><?php if($nextId){ ?><a class="next" href="<?php echo get_permalink($nextId); ?>">NEXT</a><?php } ?></li>
						</ul>

					<?php endwhile;else: ?>
					<p>記事が投稿されていません。</p>
				<?php endif; ?>
			</div>
			
		</div>
	</section>

	<section class="pagelink-area">
		<div class="width-fixed">
			<ul class="row">
				<li class="col-4 col-sm-12 one-item js-clickArea" data-aos="fade-up">
					<figure class="zoom col-sm-7"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/idx_recipe.jpg" alt=""></figure>
					<div class="text-area col-sm-5">
						<p class="ttl">アレンジレシピ</p>
						<p class="more"><span><a href="<?php echo esc_url( home_url('/recipe/') ); ?>" class="arrow">LEARN MORE</a></span></p>
					</div>
				</li>
				<li class="col-4 col-sm-12 one-item js-clickArea active" data-aos="fade-up" data-aos-delay="300">
					<figure class="zoom col-sm-7"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/idx_news.jpg" alt=""></figure>
					<div class="text-area col-sm-5">
						<p class="ttl">ニュース・トピックス</p>
						<p class="more"><span><a href="<?php echo esc_url( home_url('/topics/') ); ?>" class="arrow">LEARN MORE</a></span></p>
					</div>
				</li>
				<li class="col-4 col-sm-12 one-item js-clickArea" data-aos="fade-up" data-aos-delay="600">
					<figure class="zoom col-sm-7"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/idx_brandconcept.jpg" alt=""></figure>
					<div class="text-area col-sm-5">
						<p class="ttl">ブランドコンセプト</p>
						<p class="more"><span><a href="<?php echo esc_url( home_url('/concept/') ); ?>" class="arrow">LEARN MORE</a></span></p>
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