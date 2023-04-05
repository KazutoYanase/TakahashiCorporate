<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <main>
 *
 * @package TAKAHASHI GROUP
 */
?>
<!DOCTYPE html>
<html lang="ja" prefix="og: //ogp.me/ns# fb: //www.facebook.com/2008/fbml">
	<head>
		<title><?php wp_title( '｜', true, 'right' ); bloginfo('name'); ?></title>
		<meta charset="UTF-8">
		<meta name="keywords" content="高橋株式会社,スポーツガーデン,エスタ,ビーエルダイニング,タンデムスプリント,アークフィールド,ガーデンズ千早,KURUMERU,久留米">
		<meta name="description" content="<?php set_meta_description(); ?>">
		<meta name="viewport" content="width=device-width, maximum-scale=1.0">
		<meta name="format-detection" content="telephone=no">
		
		<?php if ( is_home() || is_front_page() ) : ?>
		<meta property="og:type" content="website">
		<?php else: ?>
		<meta property="og:type" content="article">
		<?php endif; ?>

		<meta property="og:url" content="<?php set_meta_ogurl(); ?>">
		<meta property="og:image" content="<?php set_meta_image(); ?>">
		<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
		<meta property="og:title" content="<?php wp_title( '｜', true, 'right' ); bloginfo('name'); ?>">
		<meta property="og:description" content="<?php set_meta_description(); ?>">
		<meta name="twitter:card" content="summary">
		<meta name="twitter:title" content="<?php wp_title( '｜', true, 'right' ); bloginfo('name'); ?>">
		<meta name="twitter:description" content="<?php set_meta_description(); ?>">
		<meta name="twitter:image" content="<?php set_meta_image(); ?>">
		<meta name="twitter:url" content="<?php set_meta_ogurl(); ?>">
		
		<?php wp_head(); ?>
		
		<link rel="icon" href="<?= esc_url(get_template_directory_uri()); ?>/asset/css/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="<?= esc_url(get_template_directory_uri()); ?>/asset/css/reset.css">
		<link rel="stylesheet" type="text/css" href="<?= esc_url(get_template_directory_uri()); ?>/asset/css/slick.css" media="screen">
		<link rel="stylesheet" type="text/css" href="<?= esc_url(get_template_directory_uri()); ?>/asset/css/slick-theme.css" media="screen">
		<link rel="stylesheet" type="text/css" href="<?= esc_url(get_template_directory_uri()); ?>/asset/css/style.css?<?= time() ?>">
		
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@300;400;500;700;900&display=swap" rel="stylesheet">
		
		<script type="text/javascript" src="<?= esc_url(get_template_directory_uri()); ?>/asset/js/jquery-1.11.2.min.js"></script>
		<script type="text/javascript" src="<?= esc_url(get_template_directory_uri()); ?>/asset/js/common.js"></script>
		<script>
			$(function() {
				$('.menu').on('click', function() {
					$(this).toggleClass('active');
					$("#humnav").toggleClass('active');
				})
			})
			$(function() {
				$('#humnav a').on('click', function() {
					$('#humnav').toggleClass('active');
					$(".menu").toggleClass('active');
				})
			});
		</script>
	</head>
	<body>
	<!-- PCメニュー -->
	<div id="pc_nav" class="pc_block">
		<div id="pc_nav_wrap">
			<div id="pc_nav_inner">
				<h1 id="pc_nav_logo"><a href="<?= esc_url(home_url()); ?>"><img alt="TAKAHASHI GROUP" src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/menu_logo.svg"></a></h1>
				<div class="pcmenubtn_1"><a href="<?= esc_url(home_url('/news/')); ?>">ニュース</a></div>
				<div>｜</div>
				<div class="pcmenubtn_1"><a href="<?= esc_url(home_url('/overview/')); ?>">会社概要</a></div>
				<div>｜</div>
				<div class="pcmenubtn_1"><a href="<?= esc_url(home_url('/projects/')); ?>">事業案内</a></div>
				<div>｜</div>
				<div class="pcmenubtn_1"><a href="<?= esc_url(home_url('/contribution/')); ?>">地域連携</a></div>
				<div>｜</div>
				<div class="pcmenubtn_1"><a href="https://www.tkgroup.co.jp/saiyou/" target="_blank" rel="noopener noreferrer">採用情報</a></div>
			</div>
		</div>
	</div>
	</div>
	<!-- SPメニュー -->
	<div id="sp_menu" class="sp_block">
		<div class="fullscreenmenu">
			<div id="humnav">
				<h1 class="spmenubtn_0"><a href="<?= esc_url(home_url()); ?>"><img alt="TAKAHASHI GROUP" src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/menu_logo.svg"></a></h1>
				<div class="spmenubtn_1"><a href="<?= esc_url(home_url('/news/')); ?>">ニュース</a></div>
				<div class="spmenubtn_1"><a href="<?= esc_url(home_url('/overview/')); ?>">会社概要</a></div>
				<div class="spmenubtn_1"><a href="<?= esc_url(home_url('/projects/')); ?>">事業案内</a></div>
				<div class="spmenubtn_1"><a href="<?= esc_url(home_url('/contribution/')); ?>">地域連携</a></div>
				<div class="spmenubtn_1"><a href="https://www.tkgroup.co.jp/saiyou/" target="_blank" rel="noopener noreferrer">採用情報</a></div>
				<div class="spmenubtn_1"><a href="<?= esc_url(home_url('/policy/')); ?>">プライバシーポリシー</a></div>
			</div>
		</div>
		<div class="menu">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- ヘッダー終わり -->