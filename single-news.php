<?php
/**
 * The template for displaying all single posts.
 *
 * @package TAKAHASHI GROUP
 */

get_header(); ?>


<!-- ヘッドパーツ -->
<div class="head_parts">
	<div class="wrap">
		<div class="ttl">
			ニュース
		</div>
		<div class="enttl">
			News
		</div>
	</div>
</div>
<!-- ニュース -->
<div class="news_wrap">
	<?php 
		while ( have_posts() ) : the_post();//Start the Loop 
		$terms = get_the_terms($post->ID, 'news_kind');
		foreach ( $terms as $term) :
			$this_term = $term->name;
			$this_term_slug = $term->slug;
		endforeach;
		
		$terms = get_the_terms($post->ID, 'news_pjt');
		foreach ( $terms as $term) :
			$this_pjt = $term->name;
			$this_pjt_slug = $term->slug;
		endforeach;
		
		$this_post_id = $post->ID;
	?>

	<div class="head">
		<div class="news_kind">
			<div class="kinds_<?php echo $this_term_slug; ?>"><?= esc_html($this_term); ?></div>
		</div>
		<div class="inner">
			<div class="date"><?= esc_html(get_post_time("Y.m.d")); ?></div>
			<div class="news_pjt"><?= esc_html($this_pjt); ?></div>
		</div>
	</div>

	<div class="entry">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</div>

	<?php endwhile;//end of the loop. ?>
	
	<div class="news_zengo">
		<div class="box">
		<?php if (get_previous_post()): ?>
		<div class="top"><?php previous_post_link('%link', '＜　前の記事へ'); ?></div>
		<div class="btm"><?php previous_post_link('%link'); ?></div>
		<?php endif; ?>
		</div>
		<div class="box rightside">
		<?php if (get_next_post()): ?>
		<div class="top"><?php next_post_link('%link', '次の記事へ　＞'); ?></div>
		<div class="btm"><?php next_post_link('%link'); ?></div>
		<?php endif; ?>
		</div>
	</div>
</div>



<?php get_footer(); ?>