<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of <main> and all content after
 *
 * @package TAKAHASHI GROUP
 */
?>
<!-- フッター -->
<footer class="footer">
	<div class="wrapper">
		<div class="inner">
			<div class="col-1">
				<a href="<?= esc_url(home_url()); ?>">
					<img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/menu_logo.svg" alt="高橋株式会社">
				</a>
			</div>
			<div class="col-2 pc_block">
				<a href="<?= esc_url(home_url('/overview/')); ?>">会社概要</a><br>
				<a href="<?php if(!is_page('overview')): ?><?= esc_url(home_url('/overview/')); ?><?php endif; ?>#philosophy">　ー 企業理念</a><br>
				<a href="<?php if(!is_page('overview')): ?><?= esc_url(home_url('/overview/')); ?><?php endif; ?>#message">　ー 代表挨拶</a><br>
				<a href="<?php if(!is_page('overview')): ?><?= esc_url(home_url('/overview/')); ?><?php endif; ?>#history">　ー 沿革</a><br>
				<!--
				<a href="#">　　ー 久留米ヒストリー</a><br>
				<a href="#">　　ー 千早ヒストリー</a><br>
				-->
				<a href="<?php if(!is_page('overview')): ?><?= esc_url(home_url('/overview/')); ?><?php endif; ?>#profile">　ー 企業概要</a><br>
				<a href="<?php if(!is_page('overview')): ?><?= esc_url(home_url('/overview/')); ?><?php endif; ?>#organization">　ー 組織図</a><br>
				<a href="<?php if(!is_page('overview')): ?><?= esc_url(home_url('/overview/')); ?><?php endif; ?>#access">　ー アクセス</a>
			</div>
			<div class="col-3 pc_block">
				<a href="<?= esc_url(home_url('/projects/')); ?>">事業案内</a><br>
				<a href="<?php if(!is_page('projects')): ?><?= esc_url(home_url('/projects/')); ?><?php endif; ?>#takahashi">　ー 高橋&#12849; 不動産事業部</a><br>
				<a href="<?php if(!is_page('projects')): ?><?= esc_url(home_url('/projects/')); ?><?php endif; ?>#sportsgarden">　ー スポーツガーデン&#12849;</a><br>
				<a href="<?php if(!is_page('projects')): ?><?= esc_url(home_url('/projects/')); ?><?php endif; ?>#esta">　ー エスタ&#12849;</a><br>
				<a href="<?php if(!is_page('projects')): ?><?= esc_url(home_url('/projects/')); ?><?php endif; ?>#bldining">　ー ビーエルダイニング&#12849;</a><br>
				<a href="<?php if(!is_page('projects')): ?><?= esc_url(home_url('/projects/')); ?><?php endif; ?>#arcfield">　ー アークフィールド&#12849;</a><br>
				<a href="<?php if(!is_page('projects')): ?><?= esc_url(home_url('/projects/')); ?><?php endif; ?>#tandemsprint">　ー タンデムスプリント</a>
			</div>
			<div class="col-4 pc_block">
				<a href="<?= esc_url(home_url('/news/')); ?>">ニュース</a><br>
				<a href="<?= esc_url(home_url('/contribution/')); ?>">地域連携</a><br>
				<a href="https://www.tkgroup.co.jp/saiyou/" target="_blank" rel="noopener noreferrer">採用情報</a><br>
				<a href="<?= esc_url(home_url('/policy/')); ?>">プライバシーポリシー</a>
			</div>
		</div>
	</div>
	<div class="footer_copy">
		Copyright TAKAHASHI Co., Ltd. 2023
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>