<?php

/********************************
	title情報
*******************************/
function output_title() {
	global $post;
	$title = "";
	$siteTitle = get_bloginfo('name');
	$pageTitle = the_title( '', '', false );

	if( is_home() || is_front_page() ){//TOPページの場合
		$title = $siteTitle;
	}
	elseif( is_page() ) {//固定ページの場合
		$title = $pageTitle.' | '.$siteTitle ;

		if ( $post->post_parent > 0 ) {//固定ページの子ページの場合
			$parent_id = $post->post_parent; // 親ページのIDを取得
			$parent_slug = get_post($parent_id)->post_title;; // 親ページのタイトルを取得
			$title = $pageTitle.' | '.$parent_slug.' | '.$siteTitle ;
		}
	}
	elseif( is_post_type_archive('topics') || is_tax('topics_cat') ) {//記事ページの場合
		$title = 'ニュース・トピックス | '.$siteTitle ;
	}
	elseif( is_singular('topics') ){
		$title = $pageTitle.' | ニュース・トピックス | '.$siteTitle ;
	}
	elseif( is_post_type_archive('lineup') ) {//記事ページの場合
		$title = 'ラインナップ | '.$siteTitle ;
	}
	elseif( is_singular('lineup') ){
		$title = $pageTitle.' | ラインナップ | '.$siteTitle ;
	}
	elseif( is_post_type_archive('recipe') || is_tax('recipe_cat') ) {//アレンジレシピ
		$title = 'アレンジレシピ | '.$siteTitle ;
	}
	elseif( is_singular('recipe') ){
		$title = $pageTitle.' | アレンジレシピ | '.$siteTitle ;
	}
	else if( is_404() ){
		$title = 'エラーページ | '.$siteTitle ;
	}
	echo $title;
}

/********************************
	bodyにIDとclassをつける処理
*******************************/
function addSlugName($attr) {
	global $post;
	$slug = '';
	if( is_home() || is_front_page() ){//TOPページの場合
		$slug = 'top';
	}
	elseif( is_single() ){//記事ページの場合
		$slug = 'single';
		if(is_singular('topics')){
			$slug = 'topics';
		}
		if(is_singular('lineup')){
			$slug = 'lineup';
			$parent_slug .= 'lineup detail';
		}
		if(is_singular('recipe')){
			$slug = 'recipe';
		}
	}
	elseif( is_page() ) {//固定ページの場合
		$slug = get_post($wp_query->post->ID)->post_name;
		if ( is_page() && $post->post_parent > 0 ) {//固定ページの子ページの場合、親ページのslugをclassに付ける
			$parent_id = $post->post_parent; // 親ページのIDを取得
			$parent_slug = get_post($parent_id)->post_name; // 親ページのスラッグを取得
		}
		if (is_page('lineups') ) {
			$parent_slug .= 'lineup idx';
		}
		elseif (is_page_ancestor('lineups') ) {
			$parent_slug .= ' detail';
		}
		elseif (is_page('inquiry') || is_page('inquiry-confirm') || is_page('inquiry-submitted') ) {
			$slug = 'inquiry';
			if (is_page('inquiry-confirm') ) {
				$parent_slug .= ' confirm';
			}
			if (is_page('inquiry-submitted') ) {
				$parent_slug .= ' submitted';
			}
		}
	}
	elseif( is_post_type_archive('lineup') ) {//ラインナップの場合
		$slug = 'lineup';
		$parent_slug .= 'lineup idx';
	}
	elseif( is_post_type_archive('topics') || is_tax('topics_cat') ) {//ニュースの場合
		$slug = 'topics';
	}
	elseif( is_post_type_archive('recipe') || is_tax('recipe_cat') ) {//アレンジレシピの場合
		$slug = 'recipe';
	}
	elseif( is_404() ) {//エラーページの場合
		$slug = 'error';
	}
	if ($attr == 'id') {
		echo $slug;
	}
	else if ($attr == 'class') {
		echo $parent_slug;
	}
}

/********************************
	再上位の親ページ判定
*******************************/
function is_page_ancestor($parent_slug_name){
	global $post;
	$result = false;
	$page = get_page(get_the_ID()); //ページを取得。
	$slug = $page->post_name; //ページスラッグ取得。
	//WordPressで最上位の親ページスラッグを取得する。
	$parent = get_post_ancestors( $post->ID ); //$parentに親ページの配列を代入。
	$i = 0;
	while ($parent[$i]) {
		$parentID = get_post($parent[$i]);
		$i++; //0、1、2と、親の親を辿っていく。一番大きな数字が最上位の親。
	}
	if($parentID) { //親ページのIDがあれば・・・
		$slug = $parentID->post_name; //$slugを最上位の親ページのスラッグで書き換え。
		if($slug == $parent_slug_name ) {
			$result = true;
		}
	}
	return $result;
}

add_image_size('topics', 310, 310, true);
add_image_size('recipe', 370, 250, true);
add_image_size('recipe_lineup', 380, 314, true);
add_image_size('gift', 740, 520, true);
add_image_size('lineup_menu_thumb', 200, 200, true);
add_image_size('lineup_mvpc', 1485, 690, true);
add_image_size('lineup_mvsp', 750, 640, true);
add_image_size('lineup_feature', 740, 460, true);
add_image_size('lineup_package', 667, 550, true);
add_image_size('lineup_flavor_thumb', 520, 462, true);
add_image_size('lineup_subnav_thumb', 200, 200, true);
