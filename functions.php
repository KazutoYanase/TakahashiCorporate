<?php
/**
 * Blank functions and definitions
 *
 * @package TAKAHASHI GROUP
 */
 
 
/**
 * set meta description
 * description og:description twitter:description
 */
function set_meta_description() {
	global $post;
	$description = get_bloginfo('description');

	if ( is_category() ) {
		// アーカイブページでは、カテゴリーの説明文を取得
		$description = category_description();
	}
	elseif ( is_single() ) {
		if ( $post->post_excerpt ) {
			// 投稿記事、カスタム投稿では、記事本文から抜粋を取得
			$description = strip_tags($post->post_excerpt);
		} else {
			// 抜粋がない時は、記事の冒頭60文字を抜粋して取得
			$description = strip_tags($post->post_content);
			$description = str_replace("\n", "", $description);
			$description = str_replace("\r", "", $description);
			$description = mb_substr($description, 0, 60) . "...";
		}
	}
	echo esc_html($description);
}


/**
 * set meta url
 * og:url twitter:url
 */
function set_meta_ogurl() {
	if ( is_home() || is_front_page() ) {
		echo esc_url(home_url());
	} else {
		echo esc_url(home_url()) . htmlspecialchars($_SERVER["REQUEST_URI"], ENT_QUOTES, 'UTF-8');
	}
}


/**
 * set meta image
 * og:image twitter:image
 */
function set_meta_image() {
	$meta_image = get_stylesheet_directory_uri()."/common/images/ogp.png";
	if (is_single()||is_page()) {
		if (has_post_thumbnail()) {
			$image_id = get_post_thumbnail_id();
			$image = wp_get_attachment_image_src( $image_id, 'full');
			$meta_image = $image[0];
		}
	}
	echo esc_url($meta_image);
}


/**
 * アイキャッチ画像表示
 */
add_theme_support('post-thumbnails');


/**
 * 許可するタグ
 */
$allowed_html = array(
	'a' => array(
		'href' => array (),
		'target' => array()
	),
	'br' => array(),
	'strong' => array(), 
);


/**
 * テーマディレクトリショートコード[tp]
 */
add_shortcode( 'tp', 'shortcode_tp' );
function shortcode_tp( $atts, $content = '' ) {
	return get_template_directory_uri().$content;
}


/**
 * home url ショートコード[tp]
 */
add_shortcode( 'home', 'shortcode_home' );
function shortcode_home() {
	return home_url();
}


/**
 * DNS プリフェッチ削除
 */
add_filter( 'emoji_svg_url', '__return_false' );

/**
 * 管理画面ブロックエディタ用CSS
 */
add_action( 'enqueue_block_editor_assets', 'wt_add_block_editor_style' );
function wt_add_block_editor_style() {
  global $post;
  $post_type = $post -> post_type;
  if( $post_type == 'article' ){
	wp_enqueue_style( 'wt-block-editor-style-post', get_stylesheet_directory_uri() . '/asset/css/block_style.css', array( 'wp-edit-blocks' ), '1.0.0' );
  }
}