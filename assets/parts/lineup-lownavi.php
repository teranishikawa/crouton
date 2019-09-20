<section class="wide flavor">
	<div class="inner">
		<h3 class="title" data-aos="fade-right"><span class="eng line">FLAVOR</span>フレーバー</h3>
		<div class="lineupbox">
			<div class="width-fixed">
				<ul class="row">
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
	$i = 0;
	if($the_query->have_posts()){
		while($the_query->have_posts()){
			$i++;
			$the_query->the_post();
			$img_src1 = "";
			$img_src1 = wp_get_attachment_image_src(CFS()->get('package1_img'),'lineup_package');
			if($img_src1) $img_src1 = '<img src="'.$img_src1[0].'" alt="'.get_the_title().'">';
?>
					<li class="col-3 col-sm-6 js-clickArea one-item" data-aos="fade-up">
						<figure class="zoom"><?php echo $img_src1 ?></figure>
						<div class="text-area">
							<p class="comment"><?php echo CFS()->get('catch_copy') ?></p>
							<p class="ttl"><?php the_title() ?><span class="eng"><?php echo CFS()->get('title_en') ?></span></p>
							<p class="more"><span><a href="<?php echo get_permalink() ?>" class="arrow">LEARN MORE</a></span></p>
						</div>
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
	$i = 0;
	if($the_query->have_posts()){
		while($the_query->have_posts()){
			$i++;
			$the_query->the_post();
			$img_src1 = "";
			$img_src1 = wp_get_attachment_image_src(CFS()->get('package1_img'),'lineup_package');
			if($img_src1) $img_src1 = '<img src="'.$img_src1[0].'" alt="'.get_the_title().'">';
?>
					<li class="col-3 col-sm-6 js-clickArea one-item" data-aos="fade-up">
						<figure class="zoom"><?php echo $img_src1 ?></figure>
						<div class="text-area">
							<p class="comment"><?php echo CFS()->get('catch_copy') ?></p>
							<p class="ttl"><?php the_title() ?><span class="eng"><?php echo CFS()->get('title_en') ?></span></p>
							<p class="more"><span><a href="<?php echo get_permalink() ?>" class="arrow">LEARN MORE</a></span></p>
						</div>
					</li>
<?php
		}
		wp_reset_postdata();
	}
?>
				</ul>
			</div>
		</div>
	</div>
</section>