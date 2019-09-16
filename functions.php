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
	elseif( is_single() ){//記事ページの場合
		$title = $pageTitle.' | PICK UP NEWS | '.$siteTitle ;
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
	}
	elseif( is_page() ) {//固定ページの場合
		$slug = get_post($wp_query->post->ID)->post_name;
		if ( is_page() && $post->post_parent > 0 ) {//固定ページの子ページの場合、親ページのslugをclassに付ける
			$parent_id = $post->post_parent; // 親ページのIDを取得
			$parent_slug = get_post($parent_id)->post_name; // 親ページのスラッグを取得
		}
		if (is_page('lineup') ) {
			$parent_slug .= 'lineup idx';
		}
		elseif (is_page_ancestor('lineup') ) {
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
	elseif( is_archive('topics') ) {//ニュースの場合
		$slug = 'topics';
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