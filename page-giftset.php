<?php
/*
Template Name: ギフトセット
*/
get_header();
?>

<main>
 <div class="contents">
    <div class="main-visual">
       <div class="inner">
          <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/giftset/main_visual_pc.jpg" alt="ギフトセット" class="js-switch"></figure>
          <h2 data-aos="fade-left">ギフトセット</h2>
      </div>
  </div>

  <section class="wide giftset-intro">
    <div class="inner">
        <div class="text-area">
            <p class="catch" data-aos="fade-left">新しいジャンル「クルトンのお菓子」をギフトとして。</p>
            <p class="cont-txt" data-aos="fade-up">かぞくのクルトンは、小さなお子さまからご年配の方まで、<br class="forPC">幅広く楽しんでいただける多彩なフレーバーをご用意しております。<br class="forPC">ブライダルの引き菓子に。出産祝いのお返しに。大切な方への贈り物に。<br>さまざまなシーンにご利用いただける、かぞくのクルトンのギフトセットをぜひご利用ください。</p>
        </div>
    </div>
</section>

<?php
$args = array(
  'post_type' => 'giftset',
  'post_status' => 'publish',
  'orderby' => 'date',
  'order' => 'ASC',
  'posts_per_page' => -1,
  'tax_query' => array(
     'relation' => 'OR',
     array(
        'taxonomy' => 'gift_cat',
        'field' => 'slug',
        'terms' => 'recommend',
    ),
 )
);
$the_query = new WP_Query($args);
if($the_query->have_posts()){
    ?>
    <section class="wide recommended-gift">
        <div class="inner">
            <h3 class="title" data-aos="fade-right"><span class="eng line"></span>おすすめギフト</h3>
            <div class="width-fixed">
                <ul>
                    <?php
                    $i = 0;
                    while($the_query->have_posts()){
                     $i++;
                     $the_query->the_post();
                     $img1 = wp_get_attachment_image_src(CFS()->get('img1'),'gift');
                     $img2 = wp_get_attachment_image_src(CFS()->get('img2'),'gift');
                     $img3 = wp_get_attachment_image_src(CFS()->get('img3'),'gift');
                     ?>
                     <li class="row no-gutters no-gutters-sm justify-content-between align-items-center<?php echo !(int)($i % 2) ? " flex-row-reverse":""; ?>">
                        <div class="photo col-sm-12 col-7" data-aos="fade-right">
                            <div class="swiper-container gallery-main<?php echo $i ?>" id="js-giftset-<?php echo $i ?>">
                                <div class="swiper-wrapper">
                                    <?php if($img1 != ""){ ?>
                                        <div class="swiper-slide">
                                            <figure><img src="<?php echo $img1[0] ?>" alt=""></figure>
                                        </div>
                                    <?php } ?>
                                    <?php if($img2 != ""){ ?>
                                        <div class="swiper-slide">
                                            <figure><img src="<?php echo $img2[0] ?>" alt=""></figure>
                                        </div>
                                    <?php } ?>
                                    <?php if($img3 != ""){ ?>
                                        <div class="swiper-slide">
                                            <figure><img src="<?php echo $img3[0] ?>" alt=""></figure>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>

                            <div class="swiper-container gallery-thumbs<?php echo $i ?>">
                                <div class="swiper-wrapper">
                                    <?php if($img1 != ""){ ?>
                                        <div class="swiper-slide one-item">
                                            <figure class="zoom"><img src="<?php echo $img1[0] ?>" alt=""></figure>
                                        </div>
                                    <?php } ?>
                                    <?php if($img2 != ""){ ?>
                                        <div class="swiper-slide one-item">
                                            <figure class="zoom"><img src="<?php echo $img2[0] ?>" alt=""></figure>
                                        </div>
                                    <?php } ?>
                                    <?php if($img3 != ""){ ?>
                                        <div class="swiper-slide one-item">
                                            <figure class="zoom"><img src="<?php echo $img3[0] ?>" alt=""></figure>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="text-area col-sm-12 col-5" data-aos="fade-left">
                            <dl class="product-description-txt">
                                <dt><?php the_title(); ?></dt>
                                <dd><?php echo CFS()->get('body') ?></dd>
                            </dl>
                            <p class="product-price-txt"><?php echo CFS()->get('amount') ?>　税込<?php echo number_format((int)CFS()->get('in_tax')) ?>円（税抜<?php echo number_format((int)CFS()->get('out_tax')) ?>円）</p>
                            <p class="more"><span><a href="/access/" class="arrow">店舗のご案内</a></span></p>
                        </div>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </div>
</section>
<?php
}
?>

<?php
$args = array(
  'post_type' => 'giftset',
  'post_status' => 'publish',
  'orderby' => 'date',
  'order' => 'ASC',
  'posts_per_page' => -1,
  'tax_query' => array(
     'relation' => 'OR',
     array(
        'taxonomy' => 'gift_cat',
        'field' => 'slug',
        'terms' => 'season',
    ),
 )
);
$the_query = new WP_Query($args);
if($the_query->have_posts()){
    ?>
    <section class="wide season-gift-set">
        <div class="inner">
            <h3 class="title" data-aos="fade-right"><span class="eng line">SEASON GIFT SET</span>季節のギフトセット</h3>

            <div class="width-fixed">
                <?php
                $j = 0;
                while($the_query->have_posts()){
                 $i++;
                 $j++;
                 $the_query->the_post();
                 $img1 = wp_get_attachment_image_src(CFS()->get('img1'),'gift');
                 $img2 = wp_get_attachment_image_src(CFS()->get('img2'),'gift');
                 $img3 = wp_get_attachment_image_src(CFS()->get('img3'),'gift');
                 ?>
                 <div class="row no-gutters no-gutters-sm justify-content-between align-items-center<?php echo !(int)($j % 2) ? " flex-row-reverse":""; ?>">
                    <div class="photo col-sm-12 col-7" data-aos="fade-right">
                        <div class="swiper-container gallery-main<?php echo $i ?>" id="js-giftset-<?php echo $i ?>">
                            <div class="swiper-wrapper">
                                <?php if($img1 != ""){ ?>
                                    <div class="swiper-slide">
                                        <figure><img src="<?php echo $img1[0] ?>" alt=""></figure>
                                    </div>
                                <?php } ?>
                                <?php if($img2 != ""){ ?>
                                    <div class="swiper-slide">
                                        <figure><img src="<?php echo $img2[0] ?>" alt=""></figure>
                                    </div>
                                <?php } ?>
                                <?php if($img3 != ""){ ?>
                                    <div class="swiper-slide">
                                        <figure><img src="<?php echo $img3[0] ?>" alt=""></figure>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="swiper-container gallery-thumbs<?php echo $i ?>">
                            <div class="swiper-wrapper">
                                <?php if($img1 != ""){ ?>
                                    <div class="swiper-slide one-item">
                                        <figure class="zoom"><img src="<?php echo $img1[0] ?>" alt=""></figure>
                                    </div>
                                <?php } ?>
                                <?php if($img2 != ""){ ?>
                                    <div class="swiper-slide one-item">
                                        <figure class="zoom"><img src="<?php echo $img2[0] ?>" alt=""></figure>
                                    </div>
                                <?php } ?>
                                <?php if($img3 != ""){ ?>
                                    <div class="swiper-slide one-item">
                                        <figure class="zoom"><img src="<?php echo $img3[0] ?>" alt=""></figure>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="text-area col-sm-12 col-5" data-aos="fade-left">
                        <dl class="product-description-txt">
                            <dt><?php the_title(); ?></dt>
                            <dd><?php echo CFS()->get('body') ?></dd>
                        </dl>
                        <p class="product-price-txt"><?php echo CFS()->get('amount') ?>　税込<?php echo number_format((int)CFS()->get('in_tax')) ?>円（税抜<?php echo number_format((int)CFS()->get('out_tax')) ?>円）</p>
                        <p class="more"><span><a href="/access/" class="arrow">店舗のご案内</a></span></p>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>
<?php
}
?>

<?php
$args = array(
  'post_type' => 'giftset',
  'post_status' => 'publish',
  'orderby' => 'date',
  'order' => 'ASC',
  'posts_per_page' => -1,
  'tax_query' => array(
     'relation' => 'OR',
     array(
        'taxonomy' => 'gift_cat',
        'field' => 'slug',
        'terms' => 'celebrate',
    ),
 )
);
$the_query = new WP_Query($args);
if($the_query->have_posts()){
    ?>
    <section class="wide return-gift">
        <div class="inner">
            <h3 class="title" data-aos="fade-right"><span class="eng line">CELEBRATION / RETURNING A FAVOR</span>お祝い、お返し</h3>
            <div class="width-fixed">
                <ul>
                    <?php
                    $i = 0;
                    while($the_query->have_posts()){
                     $i++;
                     $the_query->the_post();
                     $img = wp_get_attachment_image_src(CFS()->get('img'),'gift');
                     ?>
                     <li class="row no-gutters no-gutters-sm justify-content-between align-items-center<?php echo !(int)($i % 2) ? " flex-row-reverse":""; ?>">
                        <div class="photo col-sm-12 col-7" data-aos="layer-fade-right">
                            <?php if($img != ""){ ?>
                                <figure class="layer-fade-child"><img src="<?php echo $img[0] ?>" alt=""></figure>
                            <?php } ?>
                        </div>
                        <div class="text-area col-sm-12 col-5" data-aos="fade-left">
                            <dl class="product-description-txt">
                                <dt><?php the_title(); ?></dt>
                                <dd><?php echo CFS()->get('body1') ?></dd>
                            </dl>
                            <?php if(CFS()->get('title2') != "" || CFS()->get('body2') != ""){ ?>
                                <dl class="product-description-txt">
                                    <dt><?php echo CFS()->get('title2') ?></dt>
                                    <dd><?php echo CFS()->get('body2') ?></dd>
                                </dl>
                            <?php } ?>
                        </div>
                    </li>
                    <?php
                }
                ?>
                <li class="about-noshi">
                    <dl class="noshi-txt">
                        <dt>のしについて</dt>
                        <dd>のしをご希望の方に、表題入りののしを各種取り揃えております。<br class="forPC">店頭にてお申しつけください。空欄ののしのご用意もございます。</dd>
                    </dl>
                    <div class="row no-gutters no-gutters-sm justify-content-between align-items-center">
                        <div class="photo">
                            <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/giftset/giftset_noshi_1.jpg" alt=""></figure>
                        </div>
                        <div class="photo">
                            <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/giftset/giftset_noshi_2.jpg" alt=""></figure>
                        </div>
                        <div class="photo">
                            <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/giftset/giftset_noshi_3.jpg" alt=""></figure>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<?php
}
?>

<section class="pagelink-area">
   <div class="width-fixed">
      <ul class="row">
        <li class="col-4 col-sm-12 one-item js-clickArea" data-aos="fade-up">
            <figure class="zoom col-sm-7"><span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/idx_lineup.jpg" alt=""></span></figure>
            <div class="text-area col-sm-5">
                <p class="ttl">ラインナップ</p>
                <p class="more"><span><a href="<?php echo esc_url( home_url('/lineup/') ); ?>" class="arrow">LEARN MORE</a></span></p>
            </div>
        </li>
        <li class="col-4 col-sm-12 one-item js-clickArea active" data-aos="fade-up" data-aos-delay="300">
            <figure class="zoom col-sm-7"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/idx_gift.jpg" alt=""></figure>
            <div class="text-area col-sm-5">
                <p class="ttl">ギフトセット</p>
                <p class="more"><span><a href="<?php echo esc_url( home_url('/gift/') ); ?>" class="arrow">LEARN MORE</a></span></p>
            </div>
        </li>
        <li class="col-4 col-sm-12 one-item js-clickArea" data-aos="fade-up" data-aos-delay="600">
            <figure class="zoom col-sm-7"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/idx_delicious.jpg" alt=""></figure>
            <div class="text-area col-sm-5">
                <p class="ttl">おいしいお召し上がり方</p>
                <p class="more"><span><a href="<?php echo esc_url( home_url('/delicious/') ); ?>" class="arrow">LEARN MORE</a></span></p>
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