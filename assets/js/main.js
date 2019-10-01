////////////////////////////////////////////////////////////////////////////////
//
// 定数
//
const BREAK_POINT = 767;
////////////////////////////////////////////////////////////////////////////////
//
// 関数実行
//
$(function () {
	spNavi(); // spナビ 背景固定
	pageInnerLink(); // ページ内リンク
	hoverBackground(); //hoverでクラスをつける
	SwiperControl();
	switchImg();
	ClickArea();
	SpAccordion();
	FixedSideBar();
	linupAction();
	setTimeout(function () {
		initGmap();
	}, 500);
});


////////////////////////////////////////////////////////////////////////////////
//
// 関数
//
/******************************************************************************/
// spナビ 背景固定
/******************************************************************************/
function spNavi() {
	var scrollTop = 0; //スクロール量を保存しておく変数
	var $body = $('body');
	var $menu_btn = $('#menu-cb');

	function menuAction() {
		//メニュー閉じている時
		if ($menu_btn.prop("checked") == false) {
			$body.css({
				'position': 'relative',
				'top': ''
			});
		} else {
			//メニューバーを開いた瞬間のスクロール位置を変数に保存
			scrollTop = $(window).scrollTop();

			//bodyのスクロール禁止。スクロール位置もそのままで固定
			$body.css({
				'position': 'fixed',
				'top': -scrollTop
			});
		}
	}

	//メニューボタンを押して、メニューを開閉する
	$menu_btn.click(function () {
		menuAction();
	});
}
/******************************************************************************/
// ページ内リンク
/******************************************************************************/
function pageInnerLink() {
	$('a[href^="#"]').click(function () {
		var href = $(this).attr('href');
		var hash = href == '#' || href == '' ? 'html' : href;
		scrollToAnker(hash);
		return false;
	});

	function scrollToAnker(hash) {
		var target = $(hash);
		var minusHight = 80;
		if ($('.logo-area').hasClass('js-fixed-header')) {
			minusHight = $('.logo-area').outerHeight();
		}
		var position = target.offset().top - minusHight
		$('body,html').stop().animate({
			scrollTop: position
		}, 500);
	}
}
/******************************************************************************/
// hoverでクラスをつける
/******************************************************************************/
function hoverBackground() {
	var $hover_bg = $('.js-hover-bg');
	var $hover_bg_parent_section = $('.js-hover-bg').closest('section');
	var hover_class = "";
	if (!$hover_bg.length) {
		return;
	}
	$hover_bg.find('a').on({
		'mouseenter': function () {
			hover_class = $(this).data('hover-class');
			$hover_bg_parent_section.addClass(hover_class);
		},
		'mouseleave': function () {
			hover_class = $(this).data('hover-class');
			$hover_bg_parent_section.removeClass(hover_class);
		}
	});
}
function linupAction(){
	if($('#top #lineup').length == 0 ){
		return;
	}
	looptime();
	$('#lineup .one-item').each(function(){
		$(this).find('img').attr('data-defaultimg', $(this).find('img').attr('src'));
		if ($(this).find('img').attr('data-hoverimg') == undefined){
			let pid = $(this).find('img').data('productname');
			const THEME_PATH = $(this).find('img').attr('src').split('assets')[0];
			if ($(this).parents('ul.seasonal').length != 0) {
				$(this).find('img').attr('data-hoverimg', THEME_PATH + 'assets/images/top/lineup_' + pid + '_on.jpg');
			} else {
				$(this).find('img').attr('data-hoverimg', THEME_PATH + 'assets/images/top/lineup_' + pid + '_cubebara.jpg');
			}
		}
		//DOMの生成
		$on_img = $('<img src="' + $(this).find('img').attr('data-hoverimg') +'" style="position:absolute;top:0;left:0;opacity:0">');
		$(this).find('img').after($on_img);
		$(this).on({
			'mouseenter ': function () {
				stoploop();
				$(this).find('img').eq(1).animate({opacity:1},400);
			},
			'mouseleave': function(){
				$(this).find('img').eq(1).animate({ opacity: 0 }, 400);
				looptime();
			}
		});
	});
	function looptime(){
		const SEASONAL_ITEM_COUNT = 3;
		const REGULAR_ITEM_COUNT = (($('#lineup .one-item').length) - SEASONAL_ITEM_COUNT) / 2;
		item_altimg = setInterval(function () {
			$('#lineup .one-item').each(function () {
				$(this).find('img').eq(1).animate({ opacity: 0 }, 400);
			});
			let rand_num = Math.floor(Math.random() * $('#lineup .one-item').length);
			if(isSP()){
				if (rand_num > SEASONAL_ITEM_COUNT && rand_num < REGULAR_ITEM_COUNT + SEASONAL_ITEM_COUNT ){
					rand_num += REGULAR_ITEM_COUNT;
				}
			}
			else{
				if (rand_num > SEASONAL_ITEM_COUNT + REGULAR_ITEM_COUNT ){
					rand_num -= REGULAR_ITEM_COUNT;
				}
			}
			$target_item = $('#lineup .one-item').eq(rand_num);
			$target_item.find('img').eq(1).animate({ opacity: 1 }, 400);
		}, 4000);
	}
	function stoploop(){
		$('#lineup .one-item').each(function () {
			$(this).find('img').eq(1).animate({ opacity: 0 }, 0);
		});
		clearInterval(item_altimg);
	}
}
/******************************************************************************/
// SwiperControl
/******************************************************************************/
function SwiperControl() {
	var mySwiper = new Swiper('#js-top-swiper-container', {
		effect: "fade",
		autoplay: {
			delay: 5000,
			stopOnLast: false,
			disableOnInteraction: true,
		},
		loop: true,
		speed: 1000,
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
		},
	});
	if($('#js-pickup-swiper .swiper-slide').length > 1){
		var pickupSwiper = new Swiper('#js-pickup-swiper', {
			autoplay: {
				delay: 5000,
				stopOnLast: false,
				disableOnInteraction: true,
			},
			loop: true,
			speed: 1000,
			pagination: {
				el: '.pickup-swiper-pagination',
				clickable: true,
			},
//			breakpoints: {
//				767: {
//					spaceBetween: 20,
//				}
//			}
		});
	}

	var conceptSwiper = new Swiper('#js-brandconcept-swiper-container', {
		centeredSlides: true,
		slidesPerView: 1.5,
		autoplay:{
			delay:0
		},
		speed:19000,
		loop: true,
		spaceBetween: 20
	});

	var galleryThumbs1 = new Swiper('.gallery-thumbs1', {
		spaceBetween: 10,
		slidesPerView: 3,
		freeMode: true,
		watchSlidesVisibility: true,
		watchSlidesProgress: true,
	});
	var galleryTop1 = new Swiper('.gallery-main1', {
		spaceBetween: 10,
		thumbs: {
			swiper: galleryThumbs1
		}
	});

	var galleryThumbs2 = new Swiper('.gallery-thumbs2', {
		spaceBetween: 10,
		slidesPerView: 3,
		freeMode: true,
		watchSlidesVisibility: true,
		watchSlidesProgress: true,
	});
	var galleryTop2 = new Swiper('.gallery-main2', {
		spaceBetween: 10,
		thumbs: {
			swiper: galleryThumbs2
		}
	});

	var galleryThumbs3 = new Swiper('.gallery-thumbs3', {
		spaceBetween: 10,
		slidesPerView: 3,
		freeMode: true,
		watchSlidesVisibility: true,
		watchSlidesProgress: true,
	});
	var galleryTop3 = new Swiper('.gallery-main3', {
		spaceBetween: 10,
		thumbs: {
			swiper: galleryThumbs3
		}
	});

	var galleryThumbs4 = new Swiper('.gallery-thumbs4', {
		spaceBetween: 10,
		slidesPerView: 3,
		freeMode: true,
		watchSlidesVisibility: true,
		watchSlidesProgress: true,
	});
	var galleryTop4 = new Swiper('.gallery-main4', {
		spaceBetween: 10,
		thumbs: {
			swiper: galleryThumbs4
		}
	});

	var galleryThumbs5 = new Swiper('.gallery-thumbs5', {
		spaceBetween: 10,
		slidesPerView: 3,
		freeMode: true,
		watchSlidesVisibility: true,
		watchSlidesProgress: true,
	});
	var galleryTop5 = new Swiper('.gallery-main5', {
		spaceBetween: 10,
		thumbs: {
			swiper: galleryThumbs5
		}
	});

	var galleryThumbs6 = new Swiper('.gallery-thumbs6', {
		spaceBetween: 10,
		slidesPerView: 3,
		freeMode: true,
		watchSlidesVisibility: true,
		watchSlidesProgress: true,
	});
	var galleryTop6 = new Swiper('.gallery-main6', {
		spaceBetween: 10,
		thumbs: {
			swiper: galleryThumbs6
		}
	});

	var galleryThumbs7 = new Swiper('.gallery-thumbs7', {
		spaceBetween: 10,
		slidesPerView: 3,
		freeMode: true,
		watchSlidesVisibility: true,
		watchSlidesProgress: true,
	});
	var galleryTop7 = new Swiper('.gallery-main7', {
		spaceBetween: 10,
		thumbs: {
			swiper: galleryThumbs7
		}
	});

	var galleryThumbs8 = new Swiper('.gallery-thumbs8', {
		spaceBetween: 10,
		slidesPerView: 3,
		freeMode: true,
		watchSlidesVisibility: true,
		watchSlidesProgress: true,
	});
	var galleryTop8 = new Swiper('.gallery-main8', {
		spaceBetween: 10,
		thumbs: {
			swiper: galleryThumbs8
		}
	});

	var galleryThumbs9 = new Swiper('.gallery-thumbs9', {
		spaceBetween: 10,
		slidesPerView: 3,
		freeMode: true,
		watchSlidesVisibility: true,
		watchSlidesProgress: true,
	});
	var galleryTop9 = new Swiper('.gallery-main9', {
		spaceBetween: 10,
		thumbs: {
			swiper: galleryThumbs9
		}
	});
	//動作が不安定だったのでroll部分だけslickを使用
	$('#js-roll-slick-container').slick({
		vertical: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 0,
		cssEase: 'linear',
		pauseOnFocus:false,
		pauseOnHover:false,
		respondTo:'window',
		variableWidth: false,
		lazyLoad: 'ondemand',
		speed: 5000,
		arrows: false,
		responsive: [{
			breakpoint: 768,
			settings: {
				vertical: false,
				variableWidth: true,
				// centerMode: true,
				speed: 8000,
				slidesToShow: 3,
			}
		}]
	});
	$(window).on('resize', function () {
		// $('#js-roll-slick-container').slick('slickPlay');
	});


}

/******************************************************************************/
// windowサイズによって画像切り替え
/******************************************************************************/
function switchImg() {
	var pcName = '_pc',
		spName = '_sp',
		replaceWidth = 766;

	$('.js-switch').each(function () {
		var $this = $(this);

		function imgSize() {
			var windowWidth = parseInt($(window).width());
			if (windowWidth >= replaceWidth) {
				$this.attr('src', $this.attr('src').replace(spName, pcName));
			} else if (windowWidth < replaceWidth) {
				$this.attr('src', $this.attr('src').replace(pcName, spName));
			}
		}
		$(window).resize(function () {
			imgSize();
		});
		imgSize();
	});
}
/******************************************************************************/
// 関数名：ClickArea()
/******************************************************************************/
function ClickArea(target) {
	if (target == undefined) {
		$target = $('.js-clickArea');
	} else {
		$target = $(target);
	}
	$target.on('click', function () {
		var $link = $(this).find('a');
		var target = $link.attr('target');
		if (!($(this).find('a').hasClass('cboxElement'))) {
			if (target == '_blank') {
				window.open($(this).find('a').attr('href'));
			} else {
				window.location = $(this).find('a').attr('href');
				return false;
			}
		} else {
			$.colorbox(get_cb_setting($link));
		}
	}).hover(function () {
		$(this).addClass('on');
		$(this).removeClass('off');
	}, function () {
		$(this).addClass('off');
		$(this).removeClass('on');
	});
}


/******************************************************************************/
// header(横グロナビ)追従調整
/******************************************************************************/
function FixedSideBar() {
	if ($('header').hasClass('no-fixed')) { //headerにno-fixedクラスが付いていたら処理しない
		return;
	}
	if ($('#menu-icon').is(':hidden')) { //スマホメニュー非表示の場合、つまりPC表示の場合
		var $recruit_fixed_header = $('#js-rec-fixed-header'); //recruitページトップの判定用
		$(window).scroll(function () {
			var footHeight = $('footer').innerHeight(); //footerの高さ（＝止めたい位置）
			var headerScrollPosition = $('#js-header-inner').height() + $(window).scrollTop();
			var footerPosition = $(document).height() - $('footer').innerHeight();
			
			//recruitページトップの場合
			if ($recruit_fixed_header.length) {
				var mainvisHeight = $('#js-rec-mainvis').height();
				var scrollPosition = $(window).scrollTop();
				//スクロール値がメインビジュアルの高さを超えていたら
				if (scrollPosition >= mainvisHeight) {
					//スクロール値がfooterが見える高さに来たら
					if (headerScrollPosition > footerPosition) {
						$recruit_fixed_header.addClass('is-absolute');
						$recruit_fixed_header.removeClass('is-fixed');
					} else {
						$recruit_fixed_header.removeClass('is-absolute');
						$recruit_fixed_header.addClass('is-fixed');
					}
				} else {
					$recruit_fixed_header.removeClass('is-fixed');
				}
				return;
			}
			
			if (headerScrollPosition > footerPosition) {
				$('header').css({
					'position': 'absolute',
					'top': 'auto',
					'bottom': footHeight,
					'left': '0',
					'height': 'auto'
				});
			} else {
				$('header').css({
					'position': 'fixed',
					'top': '0',
					'bottom': 'auto',
					'left': '0',
					'height': '100%'
				});
			}
		});
	}
}

/******************************************************************************/
// スマホナビアコーディオン
/******************************************************************************/
function SpAccordion(no_class) {
	if (no_class == undefined) {
		var no_class = '.no-aco';
	}

	if (isSP()) {
		$('a.sp-aco').on('click', function () { //aタグの無効化
			return false;
		});

		var SLIDE_SPEED = 300; //スライドが完了するまでのミリ秒
		$('.sp-aco').not(no_class).next('.open-aco').hide();
		$('.sp-aco').not(no_class).on('click', function () {
			if (!$(this).hasClass('js-active')) {
				$(this).next('.open-aco').slideDown(SLIDE_SPEED);
				$(this).addClass('js-active');
			} else {
				$(this).next('.open-aco').slideUp(SLIDE_SPEED);
				$(this).removeClass('js-active');
			}
		});
	}
}

/******************************************************************************/
// ページトップ
/******************************************************************************/
$(function () {
	const $PAGE_TOP = $('#js-page-top');
	const ACTIVE = 'is-active';
	const FADE_SPEED = 400;
	if (!($(window).scrollTop() > 150)) {
		$PAGE_TOP.hide();
	}
	$(window).on('scroll', function () {
		if ($(this).scrollTop() > 150) {
			if (!($PAGE_TOP.hasClass(ACTIVE))) {
				$PAGE_TOP.fadeIn(FADE_SPEED, function () {
					$PAGE_TOP.addClass(ACTIVE);
				});
			}
		} else {
			if ($PAGE_TOP.hasClass(ACTIVE)) {
				$PAGE_TOP.fadeOut(FADE_SPEED, function () {
					$PAGE_TOP.removeClass(ACTIVE);
				});
			}
		}
	});
});


/******************************************************************************/
// スマホ判定
/******************************************************************************/
function isSP(){
	if ($(window).width() < BREAK_POINT){
		return true;
	}
	else{
		return false;
	}
	
}

/******************************************************************************/
// googlem api customize
/******************************************************************************/
function initGmap() {
	if (document.getElementById('gmap')) {
		if( google == undefined ){
			return;
		}
		var MyLatLng = new google.maps.LatLng(35.163266, 136.963369);

		// マップスタイル
		var map = new google.maps.Map(document.getElementById('gmap'), {
			zoom: 17,      //地図の縮尺値
			center: MyLatLng,    //地図の中心座標
			mapTypeId: google.maps.MapTypeId.ROADMAP,   //地図の種類
			styles: [
				{
					stylers: [
						{ hue: '#967c72' /*色相*/ },
						{ saturation: -60 /* 彩度 */ },
						{ lightness: 0 /* 明度 */ }]
				},
				{
					featureType: 'water',
					elementType: 'all',
					stylers: [
						{ saturation: -25 }
					],
				},
			]
		});

		var PINLATLNG = new google.maps.LatLng(35.163266, 136.963369);

		var marker = new google.maps.Marker({
			position: PINLATLNG,
			map: map,
			icon: '/wp-content/themes/crouton/assets/images/map_pin.png',
		});
	}
}