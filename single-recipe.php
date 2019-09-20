<?php /*
	Template Name: アレンジレシピ（詳細）
*/?>

<?php get_header(); ?>
		<main>
			<div class="contents">
				<div class="main-visual">
					<div class="inner">
						<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/recipe/main_visual_sec_pc.jpg" alt="アレンジレシピ" class="js-switch"></figure>
						<h2 data-aos="fade-left">アレンジレシピ<span class="eng">ARRANGE&nbsp;RECIPES</span></h2>
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
	".$table_prefix."posts.post_type = 'recipe'
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
	".$table_prefix."posts.post_type = 'recipe'
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

				<section class="wide recipe-box">
					<div class="inner">

						<div class="recipe-detail width-fixed">

						<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
							<p class="cat">
							<?php
								if ($terms = get_the_terms($post->ID, 'recipe_cat')){
									foreach ( $terms as $term ){
									echo esc_html($term->name);
									}
								}
							?>
							</p>
							<h3><?php the_title(); ?></h3>
							<!-- time><?php the_time('Y.m.d', $post->ID); ?></time -->
							<div class="recipe-body">
<?php
	$img_src = wp_get_attachment_image_src(CFS()->get('main_visual'),'full');
	if($img_src){
		echo '<img src="'.$img_src[0].'" alt="'.get_the_title().'">';
	}
	echo CFS()->get('recipe_text')
?>
							</div>

<?php
	$ingredients = $cfs->get('ingredients');
	$cnt = count($ingredients);
?>
<div class="ingredients" data-aos="fade-right">
<h3>材料（<?php echo CFS()->get('howmany') ?>）</h3>
<?php
	if((int)$cnt){
		$row1 = (int)ceil($cnt / 2);
		if((int)$row1){
			echo "<ul>";
			for($i=0;$i<$row1;$i++){
				printf("<li><span>%s</span><span>%s</span></li>",$ingredients[$i]['name'],$ingredients[$i]['val']);
			}
			echo "</ul>";
		}
		$row2 = (int)floor($cnt / 2);
		if((int)$row2){
			echo "<ul>";
			for($i=$row1;$i<$cnt;$i++){
				printf("<li><span>%s</span><span>%s</span></li>",$ingredients[$i]['name'],$ingredients[$i]['val']);
			}
			echo "</ul>";
		}
	}
?>
</div>

<?php
	$steps = $cfs->get('steps');
	if(count($steps)){
?>
<div class="steps" data-aos="fade-left">
<h3>作り方</h3>
<ul>
<?php
	$row = 0;
	foreach($steps as $val){
		$row++;
		printf("<li><span>STEP%d</span><span>%s</span></li>",$row,$val['step']);
	}
?>
</ul>
</div>
<?php } ?>

<?php
	$lineups = $cfs->get('lineups');
	if(count($lineups[0]['lineup'])){
?>
<div class="lineup">
<h3>今回使用したかぞくのクルトン・フレーバー</h3>
<ul>
<?php
	foreach($lineups[0]['lineup'] as $lineup_id){
?>
<li class="js-clickArea one-item" data-aos="fade-up">
	<div class="text">
		<h4><span><?php echo CFS()->get('catch_copy', $lineup_id) ?></span><?php echo get_the_title($lineup_id); ?></h4>
		<p class="lineup_body"><?php echo CFS()->get('feature1_body', $lineup_id) ?></p>
		<p class="more"><a href="<?php echo get_permalink($lineup_id) ?>" class="arrow">LEARN MORE</a></p>
	</div>
	<figure class="zoom"><?php
		$img_src = wp_get_attachment_image_src(CFS()->get('package1_img', $lineup_id),'lineup_package');
		if($img_src) $img_src = '<img src="'.$img_src[0].'" alt="'.get_the_title($lineup_id).'">';
?><?php echo $img_src ?></figure>
</li>
<?php
	}
?>
</ul>
</div>
<?php } ?>

<div class="profile" data-aos="fade-right">
<h3>アレンジレシピ考案者紹介</h3>
<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/recipe/profile.jpg" alt="Mio-Mani 堀之内 玲子"></figure>
<div class="text">
<h4><span>フード／テーブルコーディネーター</span>Mio-Mani 堀之内 玲子 <span>REIKO　HORINOUCHI</span></h4>
<p>
名古屋市生まれ。スタイリスト事務所所属ののち、フリーランスのスタイリストとして活動中。<br>
企業広告のフードコーディネートやテーブルコーディネート、レシピ開発など、 広告物、パンフレット等からCMまで、衣・食・住のスタイリングを幅広く手掛けている。
</p>
</div>
</div>

<ul class="detail_navi">
<li><?php if($prevId){ ?><a class="prev" href="<?php echo get_permalink($prevId); ?>">PREVIOUS</a><?php } ?></li>
<li><a href="<?php echo get_bloginfo("siteurl"); ?>/recipe/">ARRANGE RECIPE TOP</a></li>
<li><?php if($nextId){ ?><a class="next" href="<?php echo get_permalink($nextId); ?>">NEXT</a><?php } ?></li>
</ul>

						<?php endwhile;else: ?>
							<p>アレンジレシピは、現在投稿されていません。</p>
						<?php endif; ?>
						</div>
						
					</div>
				</section>

				<section class="pagelink-area">
					<div class="width-fixed">
						<ul class="row">
							<li class="col-4 col-sm-12 one-item js-clickArea" data-aos="fade-up">
								<figure class="zoom col-sm-7"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/idx_delicious.jpg" alt=""></figure>
                                <div class="text-area col-sm-5">
                                    <p class="ttl">おいしいお召し上がり方</p>
                                    <p class="more"><span><a href="<?php echo esc_url( home_url('/delicious/') ); ?>" class="arrow">LEARN MORE</a></span></p>
                                </div>
							</li>
							<li class="col-4 col-sm-12 one-item js-clickArea active" data-aos="fade-up" data-aos-delay="300">
								<figure class="zoom col-sm-7"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/idx_recipe.jpg" alt=""></figure>
                                <div class="text-area col-sm-5">
                                    <p class="ttl">アレンジレシピ</p>
                                    <p class="more"><span><a href="<?php echo esc_url( home_url('/recipe/') ); ?>" class="arrow">LEARN MORE</a></span></p>
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