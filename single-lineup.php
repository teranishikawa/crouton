<?php /*
	Template Name: ラインナップ(詳細)
*/?>
	
<?php get_header(); ?>
<script>
$(function(){
	let replaceWidth = 766;
	$('[data-switch-pc]').each(function(){
		let $this = $(this)
		$(window).on('load resize', function(){
			if(parseInt($(window).width()) >= replaceWidth){
				$this.attr('src', $this.data('switch-pc'));
			}else{
				$this.attr('src', $this.data('switch-sp'));
			}
		});
	});
});
</script>
		<main>
			<div class="contents">
<?php
			$img_mv = "";
			$img_pc = "";
			$img_sp = "";
			$img_pc = wp_get_attachment_image_src(CFS()->get('mainvisual_pc'),'lineup_mvpc');
			$img_sp = wp_get_attachment_image_src(CFS()->get('mainvisual_sp'),'lineup_mvsp');
			if($img_pc) $img_mv = '<img src="'.$img_pc[0].'" alt="'.get_the_title().'" data-switch-pc="'.$img_pc[0].'" data-switch-sp="'.$img_sp[0].'">';
?>
				<div class="main-visual">
					<div class="inner">
						<figure><?php echo $img_mv ?></figure>
						<h2><small><?php echo CFS()->get('catch_copy') ?></small><?php the_title(); ?><span class="eng"><?php echo CFS()->get('title_en') ?></span></h2>
					</div>
				</div>

				<section class="wide">
					<div class="inner">
						<h3 class="title" data-aos="fade-right"><span class="eng line"></span>商品の特長</h3>

						<div class="feature">
							<div class="width-fixed">
								<ul>
<?php
			$img1 = "";
			$img2 = "";
			$img1 = wp_get_attachment_image_src(CFS()->get('feature1_img'),'lineup_feature');
			$img2 = wp_get_attachment_image_src(CFS()->get('feature2_img'),'lineup_feature');
			if($img1) $img1 = '<img src="'.$img1[0].'" alt="'.get_the_title().'">';
			if($img2) $img2 = '<img src="'.$img2[0].'" alt="'.get_the_title().'">';
?>
									<li class="row no-gutters no-gutters-sm justify-content-between align-items-center">
										<div class="photo col-sm-12" data-aos="layer-fade-right">
											<figure class="layer-fade-child"><?php echo $img1 ?></figure>
										</div>
										<div class="text-area col-sm-12">
											<p class="catch" data-aos="twist-right"><?php echo CFS()->get('feature1_title') ?></p>
											<p class="cont-txt" data-aos="twist-left"><?php echo CFS()->get('feature1_body') ?></p>
										</div>
									</li>
<?php if(CFS()->get('feature2_title') != ""){ ?>
									<li class="row no-gutters no-gutters-sm justify-content-between align-items-center flex-sm-column-reverse">
										<div class="photo col-sm-12" data-aos="layer-fade-right">
											<figure class="layer-fade-child"><?php echo $img2 ?></figure>
										</div>
										<div class="text-area col-sm-12 order-first">
											<p class="catch" data-aos="twist-right"><?php echo CFS()->get('feature2_title') ?></p>
											<p class="cont-txt" data-aos="twist-left"><?php echo CFS()->get('feature2_body') ?></p>
										</div>
									</li>
<?php } ?>
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
<?php
	if(CFS()->get('package2_title') == ""){
		$img1 = "";
		$img1 = wp_get_attachment_image_src(CFS()->get('package1_img'),'lineup_package');
		if($img1) $img1 = '<img src="'.$img1[0].'" alt="'.CFS()->get('package1_title').'">';
?>
								<ul class="row align-items-center">
									<li class="col-6 col-sm-12 one-item" data-aos="layer-fade-right">
										<figure class="layer-fade-child"><?php echo $img1 ?></figure>
									</li>
									<li class="col-6 col-sm-12 one-item" data-aos="fade-left">
										<div class="text-area">
											<p class="ttl"><?php echo CFS()->get('package1_title') ?></p>
											<p class="cont-txt"><?php echo CFS()->get('package1_body') ?></p>
											<table class="cmn-table mt-4">
												<tbody>
													<tr>
														<th>内容量</th>
														<td><?php echo CFS()->get('package1_contents') ?></td>
													</tr>
													<tr>
														<th>価格</th>
														<td><?php echo CFS()->get('package1_price') ?></td>
													</tr>
												</tbody>
											</table>
										</div>
									</li>
								</ul>
<?php
	}else{
		$img1 = "";
		$img2 = "";
		$img1 = wp_get_attachment_image_src(CFS()->get('package1_img'),'lineup_package');
		$img2 = wp_get_attachment_image_src(CFS()->get('package2_img'),'lineup_package');
		if($img1) $img1 = '<img src="'.$img1[0].'" alt="'.CFS()->get('package1_title').'">';
		if($img2) $img2 = '<img src="'.$img2[0].'" alt="'.CFS()->get('package2_title').'">';
?>
								<ul class="row">
									<li class="col-6 col-sm-12 one-item" data-aos="layer-fade-right">
										<figure class="layer-fade-child"><?php echo $img1 ?></figure>
										<div class="text-area">
											<p class="ttl"><?php echo CFS()->get('package1_title') ?></p>
											<p class="cont-txt"><?php echo CFS()->get('package1_body') ?></p>
											<table class="cmn-table mt-4">
												<tbody>
													<tr>
														<th>内容量</th>
														<td><?php echo CFS()->get('package1_contents') ?></td>
													</tr>
													<tr>
														<th>価格</th>
														<td><?php echo CFS()->get('package1_price') ?></td>
													</tr>
												</tbody>
											</table>
										</div>
									</li>
									<li class="col-6 col-sm-12 one-item" data-aos="layer-fade-right" data-aos-delay="300">
										<figure class="layer-fade-child"><?php echo $img2 ?></figure>
										<div class="text-area">
											<p class="ttl"><?php echo CFS()->get('package2_title') ?></p>
											<p class="cont-txt"><?php echo CFS()->get('package2_body') ?></p>
											<table class="cmn-table mt-4">
												<tbody>
													<tr>
														<th>内容量</th>
														<td><?php echo CFS()->get('package2_contents') ?></td>
													</tr>
													<tr>
														<th>価格</th>
														<td><?php echo CFS()->get('package2_price') ?></td>
													</tr>
												</tbody>
											</table>
										</div>
									</li>
								</ul>
<?php
	}
?>
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
<?php
	$allergen = CFS()->get('allergen');
	if(is_array($allergen)&&count($allergen)){
		foreach($allergen as $term_id){
			$the_term = get_term($term_id);
			$img = "";
			$img = z_taxonomy_image_url($term_id);
?>
			<li><img src="<?php echo $img ?>" alt="<?php echo $the_term->name ?>"><?php echo $the_term->name ?></li>
<?php
		}
	}
?>
														</ul>
													</td>
												</tr>
												<tr>
													<th>原材料</th>
													<td><?php echo CFS()->get('ingredient') ?></td>
												</tr>
												<tr>
													<th>賞味期限</th>
													<td><?php echo CFS()->get('expiration') ?></td>
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
											<p class="more"><span><a href="/gift/" class="arrow">LEARN MORE</a></span></p>
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
