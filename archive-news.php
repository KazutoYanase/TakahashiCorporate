<?php
/**
 * The template for displaying all single posts.
 *
 * @package TAKAHASHI GROUP
 */

get_header(); ?>


<!-- ヘッドパーツ -->
<div class="sp_block logo__sp">
    <a href="<?= esc_url(home_url()); ?>"><img alt="TAKAHASHI GROUP" src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/menu_logo.svg"></a>
</div>
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
<!-- ニュースアーカイブ -->
<div class="archive_wrap">
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


<div class="news__box">
  <div class="news_kind">
    <div class="kinds_<?php echo $this_term_slug; ?>"><?= esc_html($this_term); ?></div>
  </div>
  <div class="inner">
    <div class="date"><?= esc_html(get_post_time("Y.m.d")); ?></div>
    <div class="news_pjt"><?= esc_html($this_pjt); ?></div>
  </div>
  <div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
</div>




<?php endwhile;//end of the loop. ?>


<div class="pager">
  <?php if(function_exists('wp_pagenavi')): wp_pagenavi(); endif; ?>
</div>

</div>

<?php get_footer(); ?>