<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package TAKAHASHI GROUP
 */

get_header(); ?>

<!-- メインビジュアル -->
<div class="sp_block logo__sp">
    <a href="<?= esc_url(home_url()); ?>"><img alt="TAKAHASHI GROUP" src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/menu_logo.svg"></a>
</div>
<div class="outer">
    <div class="mv_wrap">
        <div class="mv_txt">
            ひとに、まちに、ここちよく
        </div>
        <div class="mv_img">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/topimg_pc.jpg" alt="" class="pc_inline">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/topimg_sp.jpg" alt="" class="sp_inline">
        </div>
    </div>
    <div class="mv_scroll pc_block">
        <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/top_scroll.png" alt="SCROLL">
    </div>
</div>
<!-- スライダー -->
<div id="top_slider_wrap">
    <div class="slick_01">
        <a href="<?= esc_url(home_url('/projects/')); ?>#takahashi">
            <div class="top_slider_panel">
                <div class="top_slider_ph"><img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/pjt_takahashi-1.jpg" alt=""></div>
                <div class="top_msg">
                    高橋株式会社
                </div>
            </div>
        </a>
        <a href="<?= esc_url(home_url('/projects/')); ?>#sportsgarden">
            <div class="top_slider_panel">
                <div class="top_slider_ph"><img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/pjt_spoga-1.jpg" alt=""></div>
                <div class="top_msg">
                    スポーツガーデン株式会社
                </div>
            </div>
        </a>
        <a href="<?= esc_url(home_url('/projects/')); ?>#esta">
            <div class="top_slider_panel">
                <div class="top_slider_ph"><img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/pjt_esta-1.jpg" alt=""></div>
                <div class="top_msg">
                    エスタ株式会社
                </div>
            </div>
        </a>
        <a href="<?= esc_url(home_url('/projects/')); ?>#bldining">
            <div class="top_slider_panel">
                <div class="top_slider_ph"><img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/pjt_bld-1.jpg" alt=""></div>
                <div class="top_msg">
                    ビーエルダイニング株式会社
                </div>
            </div>
        </a>
        <a href="<?= esc_url(home_url('/projects/')); ?>#arcfield">
            <div class="top_slider_panel">
                <div class="top_slider_ph"><img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/pjt_af-1.jpg" alt=""></div>
                <div class="top_msg">
                    アークフィールド株式会社
                </div>
            </div>
        </a>
        <a href="<?= esc_url(home_url('/projects/')); ?>#tandemsprint">
            <div class="top_slider_panel">
                <div class="top_slider_ph"><img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/pjt_ts-1.jpg" alt=""></div>
                <div class="top_msg">
                    タンデムスプリントInc.
                </div>
            </div>
        </a>
    </div>
</div>
<!-- ニュース -->
<div class="top_news">
    <h2 class="title">
        <div class="top">ニュース</div>
        <div class="btm">News</div>
    </h2>
    <div class="inner">

        <?php 
            $args = array(
                'post_type' => 'news',
                'posts_per_page' => '3'
                );
            $the_query = new WP_query($args);
            if ($the_query->have_posts()):
        ?>

        <?php while($the_query->have_posts()): $the_query->the_post(); 
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

        <div class="report">
            <div class="kinds_<?php echo $this_term_slug; ?>"><?= esc_html($this_term); ?></div>
            <div class="wrapper fade">
                <div class="date"><?= esc_html(get_post_time("Y.m.d")); ?></div>
                <div class="project"><?= esc_html($this_pjt); ?></div>
            </div>
            <div class="ttl">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </div>
        </div>

        <?php endwhile; ?>

        <?php wp_reset_postdata(); endif; ?>



        <div class="toarchive">
            <a href="<?= esc_url(home_url('/news/')); ?>">ニュース一覧へ →</a>
        </div>
        <div class="banner">
            <div class="tanoshika fade">
                <a href="https://tkgroup.co.jp/tanoshika/" target="_blank" rel="noopener noreferrer">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/top_banner-1.jpg" alt="高橋グループのニュースサイト タノシカ！">
                </a>
            </div>
            <div class="gardens fade">
                <a href="<?= esc_url(home_url('/conceptgardens/')); ?>">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/top_banner__gardens.png" alt="ガーデンズ千早のコンセプト">
                </a>
            </div>
            <div class="chiiki fade">
                <a href="<?= esc_url(home_url('/contribution/')); ?>">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/top_banner-2.jpg" alt="高橋の地域連携">
                </a>
            </div>
        </div>
    </div>
</div>
<!-- 会社概要 -->
<div class="top_overview">
    <h2 class="title">
        <div class="top">会社概要</div>
        <div class="btm">Overview</div>
    </h2>
    <div class="inner">
        <div class="ph">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/pjt_takahashi-1.jpg" alt="">
        </div>
        <div class="copy">
            <div class="ttl fade">
                ひとに、まちに、ここちよく
            </div>
            <div class="txt fade">
                創業以来85年をこえて、さまざまな事業を展開してきた私たちは、今こそ「ひとに、まちに、ここちよく」をキーワードに、さらなる挑戦を続けていきます。
            </div>
            <a href="<?= esc_url(home_url('/overview/')); ?>">
                <div class="btn">
                    more →
                </div>
            </a>
        </div>
    </div>
    <div class="wrap">
        <a href="<?= esc_url(home_url('/overview/')); ?>#philosophy">
            <div class="maru fade">
                <div>企業理念</div>
            </div>
        </a>
        <a href="<?= esc_url(home_url('/overview/')); ?>#message">
            <div class="maru fade">
                <div>代表挨拶</div>
            </div>
        </a>
        <a href="<?= esc_url(home_url('/overview/')); ?>#history">
            <div class="maru fade">
                <div>沿革</div>
            </div>
        </a>
        <a href="<?= esc_url(home_url('/overview/')); ?>#profile">
            <div class="maru fade">
                <div>企業概要</div>
            </div>
        </a>
        <a href="<?= esc_url(home_url('/overview/')); ?>#organization">
            <div class="maru fade">
                <div>組織図</div>
            </div>
        </a>
        <a href="<?= esc_url(home_url('/overview/')); ?>#access">
            <div class="maru fade">
                <div>アクセス</div>
            </div>
        </a>
    </div>
</div>
<!-- 事業案内 -->
<div class="top_projects">
    <h2 class="title">
        <div class="top">事業案内</div>
        <div class="btm">Projects</div>
    </h2>
    <div class="inner">
        <div class="ph">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/top_project.jpg" alt=""><br>
            1960年代 織物工場の様子
        </div>
        <div class="copy">
            <div class="ttl fade">
                心を織り込み、進化を続ける
            </div>
            <div class="txt fade">
                1937（昭和12）年に繊維業として創業。お客様第一に信頼と品質を重視した「製品に心を織り込む」を社是に掲げ、時代の変遷とともに展開する事業では「創意」の意志のもと、お客様、働くスタッフ、社会という三方よしの“場づくり”を続けています。
            </div>
            <a href="<?= esc_url(home_url('/projects/')); ?>">
                <div class="btn">
                    more →
                </div>
            </a>
        </div>
    </div>
    <div class="wrap">
        <a href="https://www.tgfudosan.com/" target="_blank" rel="noopener noreferrer">
            <div class="logo fade">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/top_project-01.jpg" alt="不動産事業部">
            </div>
        </a>
        <a href="https://sportsgarden.co.jp/" target="_blank" rel="noopener noreferrer">
            <div class="logo fade">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/top_project-02.jpg" alt="スポーツガーデン株式会社">
            </div>
        </a>
        <a href="https://www.sports-esta.com/" target="_blank" rel="noopener noreferrer">
            <div class="logo fade">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/top_project-03.jpg" alt="エスタ株式会社">
            </div>
        </a>
        <a href="https://www.bldining.com/" target="_blank" rel="noopener noreferrer">
            <div class="logo fade">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/top_project-04.jpg" alt="ビーエルダイニング株式会社">
            </div>
        </a>
        <a href="https://arc-field.com/" target="_blank" rel="noopener noreferrer">
            <div class="logo fade">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/top_project-05.jpg" alt="アークフィールド株式会社">
            </div>
        </a>
        <a href="https://tandemsprint.com/" target="_blank" rel="noopener noreferrer">
            <div class="logo fade">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/top_project-06.jpg" alt="タンデムスプリント Inc.">
            </div>
        </a>
        <a href="https://gardenschihaya.com/" target="_blank" rel="noopener noreferrer">
            <div class="logo fade">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/top_project-07.jpg" alt="ガーデンズ千早">
            </div>
        </a>
        <a href="https://www.kurumeru.jp/" target="_blank" rel="noopener noreferrer">
            <div class="logo fade">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/top_project-08.jpg" alt="KURUMERU">
            </div>
        </a>
    </div>
</div>
<!-- マップ -->
<div class="top_map">
    <div class="copy">
        <div class="ttl">
            TAKAHASHI MAP
        </div>
        <div class="txt fade">
            高橋グループは本社をかまえる福岡県を中心として、<br>
            日本各地に拠点を持ち、<br class="sp_inline">さまざまな事業にチャレンジしています。
        </div>
    </div>
    <div class="mapph fade">
        <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/top_map.png" alt="" class="pc_inline">
        <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/top_map__sp.png" alt="" class="sp_inline">
    </div>
    <div class="wrap">
        <div class="left">
            <div class="inner">
                <div class="logo fade">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/top_project-00.jpg" alt="">
                </div>
                <div class="txt fade">
                    高橋株式会社<br>
                    アゼリアガーデン諏訪野<br>
                    サンシティ宗像<br>
                    <a href="https://gardenschihaya.com/" target="_blank" rel="noopener noreferrer">ガーデンズ千早　<img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/top_map_icon.png" alt=""></a><br>
                    <a href="https://chihayapark.com/" target="_blank" rel="noopener noreferrer">ちはや公園　<img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/top_map_icon.png" alt=""></a> <br>
                    <a href="https://www.kurumeru.jp/" target="_blank" rel="noopener noreferrer">KURUMERU　<img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/top_map_icon.png" alt=""></a>
                </div>
            </div>
            <div class="inner">
                <div class="logo fade">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/top_project-02.jpg" alt="">
                </div>
                <div class="txt fade">
                    <a href="https://spogakurume.com/" target="_blank" rel="noopener noreferrer">スポガ久留米<br class="sp_inline"><span>（ボウリング・バッティング・アイススケート）</span><img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/top_map_icon.png" alt=""></a><br>
                    <a href="https://ohashicitybowl.com/" target="_blank" rel="noopener noreferrer">大橋シティボウル　<img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/top_map_icon.png" alt=""></a><br>
                    <a href="https://munakatacitybowl.com/" target="_blank" rel="noopener noreferrer">宗像シティボウル<br class="sp_inline"><span>（ボウリング・バッティング）</span><img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/top_map_icon.png" alt=""></a><br>
                </div>
            </div>
            <div class="inner">
                <div class="logo fade">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/top_project-03.jpg" alt="">
                </div>
                <div class="txt fade">
                    <a href="https://www.sports-esta.com/suwano/" target="_blank" rel="noopener noreferrer">スポーツクラブエスタ諏訪野　<img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/top_map_icon.png" alt=""></a><br>
                    <a href="https://www.sports-esta.com/johnan/" target="_blank" rel="noopener noreferrer">スポーツクラブエスタクロス城南　<img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/top_map_icon.png" alt=""></a><br>
                    <a href="https://www.sports-esta.com/moji/" target="_blank" rel="noopener noreferrer">スポーツクラブエスタ門司　<img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/top_map_icon.png" alt=""></a><br>
                    <a href="https://www.sports-esta.com/chihaya/" target="_blank" rel="noopener noreferrer">スポーツクラブエスタクオリア千早　<img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/top_map_icon.png" alt=""></a><br>
                    <a href="https://www.ib-luonto.com/" target="_blank" rel="noopener noreferrer">LUONTO久留米　<img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/top_map_icon.png" alt=""></a>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="inner">
                <div class="logo fade">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/top_project-04.jpg" alt="">
                </div>
                <div class="txt fade">
                    <a href="https://www.pronto.co.jp/shop/detail?shopid=PR00008011" target="_blank" rel="noopener noreferrer">プロント長崎浜町　<img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/top_map_icon.png" alt=""></a><br>
                    <a href="https://www.pronto.co.jp/shop/detail?shopid=0339106015" target="_blank" rel="noopener noreferrer">プロント大塚　<img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/top_map_icon.png" alt=""></a><br>
                    <a href="https://www.pronto.co.jp/shop/detail?shopid=PR00000264" target="_blank" rel="noopener noreferrer">プロント渋谷東武ホテル　<img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/top_map_icon.png" alt=""></a><br>
                    プロント日比谷<br>
                    <a href="https://www.pronto.co.jp/shop/detail?shopid=0X00252498" target="_blank" rel="noopener noreferrer"> - ライブラリーダイニング　<img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/top_map_icon.png" alt=""></a><br>
                    <a href="https://www.pronto.co.jp/shop/detail?shopid=S000004660" target="_blank" rel="noopener noreferrer"> - ライブラリーショップ&カフェ　<img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/top_map_icon.png" alt=""></a>
                </div>
            </div>
            <div class="inner">
                <div class="logo fade">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/top_project-05.jpg" alt="">
                </div>
                <div class="txt fade">
                    棚田米水田<span>（福岡県うきは市）</span><br>
                    アスパラ農場<span>（福岡県三潴郡大木町）</span><br>
                    ニラ農場<span>（熊本県山鹿市）</span>
                </div>
            </div>
            <div class="inner">
                <div class="logo fade">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/top_project-06.jpg" alt="">
                </div>
                <div class="txt fade">
                    <a href="https://tandemsprint.com/" target="_blank" rel="noopener noreferrer">タンデムスプリント　<img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/top_map_icon.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?= esc_url(get_template_directory_uri()); ?>/asset/js/slick.min.js"></script>
<script type="text/javascript">
    $(function() {
        $('.slick_01').slick({
            infinite: true, // 無限ループ
            autoplay: true, //オートプレイ
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplaySpeed: 0, //オートプレイの切り替わり時間
            speed: 20000,
            accessibility: false,
            arrows: false,
            draggable: false,
            pauseOnHover: false,
            dots: false,
            fade: false,
            cssEase: 'linear',
            responsive: [{
                breakpoint: 800, // 799px以下のサイズに適用
                settings: {
                    slidesToShow: 2,
                },
            }, ],
        });
    });
</script>

<?php get_footer(); ?>