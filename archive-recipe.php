	<?php /*
	Template Name: アレンジレシピ(一覧)
*/?>

<?php get_header(); ?>
		<main>
			<div class="contents">
				<div class="main-visual">
					<div class="inner">
						<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/recipe/main_visual_sec_pc.jpg" alt="アレンジレシピ" class="js-switch"></figure>
						<h2 data-aos="fade-left">アレンジレシピ</h2>
					</div>
				</div>

				<section class="wide recipe-box">
					<div class="inner">
						
						<div class="arrange width-fixed">
							<p data-aos="fade-left">かぞくのクルトンをさらにおいしくお召し上がりいただくために、<br>
								プロのテーブルスタイリストが考案したアレンジレシピをご用意しました。<br>
								味わいも彩りもさらに豊かになるクルトンレシピをぜひお試しください。</p>

<?php $cat = get_query_var('recipe_cat'); ?>
						<ul class="year-list width-fixed" data-aos="fade-right">
							<li><a href="<?php echo get_bloginfo("siteurl"); ?>/recipe/"<?php echo empty($cat) ? 'class="current"':''; ?>>すべて</a></li>
<?php
	// カテゴリ一覧取得
	$cates = get_terms("recipe_cat", array('orderby' => 'term_order', 'hide_empty' => false));
	if(is_array($cates)&&count($cates)){
		foreach($cates as $val){
?>
							<li><a href="<?php echo get_bloginfo("siteurl"); ?>/recipe_cat/<?php echo $val->slug ?>"<?php echo $val->slug == $cat ? ' class="current"':''; ?>><?php echo $val->name ?></a></li>
<?php
		}
	}
?>
						</ul>

						<ul class="recipe-list width-fixed">

<?php
	$args = array(
		'post_type' => 'recipe',
		'post_status' => 'publish',
		'orderby' => 'date',
		'orderby' => 'DESC',
		'posts_per_page' => 9,
		'paged' => $paged
	);
	if(!empty($cat)){
		$args['tax_query'] = array(
			'relation' => 'OR',
			array(
				'taxonomy' => 'recipe_cat',
				'field' => 'slug',
				'terms' => $cat,
			),
		);
	}
	$the_query = new WP_Query($args);
?>
						<?php if ( $the_query->have_posts() ) : while( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<li class="js-clickArea one-item" data-aos="fade-up">
								<div class="topic-box">
								<?php
									if ($terms = get_the_terms($post->ID, 'recipe_cat')){
?>
								<p class="cat">
<?php
										foreach ( $terms as $term ){
										if(empty($term->name))continue;
										echo esc_html($term->name);
										}
?>
								</p>
<?php
									}
								?>
								<dl>
									<dd><figure class="zoom"><?php
	$img_src = wp_get_attachment_image_src(CFS()->get('main_visual'),'recipe');
	if($img_src) $img_src = '<img src="'.$img_src[0].'" alt="おいしいお召し上がり方">';
?><?php echo $img_src ?></figure></dd>
									<dt><?php the_title(); ?></dt>
								</dl>
								<p class="more"><a href="<?php echo get_permalink() ?>" class="arrow">LEARN MORE</a></p>
								</a>
								</div>
							</li>
						<?php endwhile;wp_reset_postdata(); ?>
						<?php else: ?>
							<p>アレンジレシピは、現在投稿されていません。</p>
						<?php endif; ?>
						</ul>
<?php
if(function_exists('wp_pagenavi')){
	wp_pagenavi(array('query'=>$the_query));
}
?>
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