<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package TAKAHASHI GROUP
 */

get_header(); ?>

<!-- スライダー -->
<div class="sp_block logo__sp">
    <a href="<?= esc_url(home_url()); ?>"><img alt="TAKAHASHI GROUP" src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/menu_logo.svg"></a>
</div>
<div id="slider_rec">
    <div class="slick_rec">
        <div class="top_slider_panel">
            <div class="top_slider_ph">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/rec__sld-01.png" alt="">
            </div>
        </div>
        <div class="top_slider_panel">
            <div class="top_slider_ph">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/rec__sld-02.png" alt="">
            </div>
        </div>
        <div class="top_slider_panel">
            <div class="top_slider_ph">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/rec__sld-03.png" alt="">
            </div>
        </div>
        <div class="top_slider_panel">
            <div class="top_slider_ph">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/rec__sld-04.png" alt="">
            </div>
        </div>
        <div class="top_slider_panel">
            <div class="top_slider_ph">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/rec__sld-05.png" alt="">
            </div>
        </div>
        <div class="top_slider_panel">
            <div class="top_slider_ph">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/rec__sld-06.png" alt="">
            </div>
        </div>
        <div class="top_slider_panel">
            <div class="top_slider_ph">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/rec__sld-07.png" alt="">
            </div>
        </div>
        <div class="top_slider_panel">
            <div class="top_slider_ph">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/rec__sld-08.png" alt="">
            </div>
        </div>
        <div class="top_slider_panel">
            <div class="top_slider_ph">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/rec__sld-09.png" alt="">
            </div>
        </div>
        <div class="top_slider_panel">
            <div class="top_slider_ph">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/rec__sld-10.png" alt="">
            </div>
        </div>
        <div class="top_slider_panel">
            <div class="top_slider_ph">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/rec__sld-11.png" alt="">
            </div>
        </div>
        <div class="top_slider_panel">
            <div class="top_slider_ph">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/rec__sld-12.png" alt="">
            </div>
        </div>
        <div class="top_slider_panel">
            <div class="top_slider_ph">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/rec__sld-13.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- ボタン -->
<div id="btns">
    <div class="wrap">
        <div class="box">
            <a href="https://tkjinji.jbplt.jp/" target="_blank">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/rec__btn-01.jpg" alt="">
            </a>
        </div>
        <div class="box">
            <a href="https://sportsgarden.jbplt.jp/" target="_blank">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/rec__btn-02.jpg" alt="">
            </a>
        </div>
        <div class="box">
            <a href="https://estajinji.jbplt.jp/" target="_blank">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/rec__btn-03.jpg" alt="">
            </a>
        </div>
        <div class="box">
            <a href="https://bldjinji.jbplt.jp/" target="_blank">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/rec__btn-04.jpg" alt="">
            </a>
        </div>
    </div>
</div>

<script type="text/javascript" src="<?= esc_url(get_template_directory_uri()); ?>/asset/js/slick.min.js"></script>
<script type="text/javascript">
    $(function() {
        $('.slick_rec').slick({
            infinite: true, // 無限ループ
            autoplay: true, //オートプレイ
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplaySpeed: 4000, //オートプレイの切り替わり時間
            speed: 1000,
            accessibility: false,
            arrows: false,
            draggable: false,
            pauseOnHover: false,
            dots: false,
            fade: true,
            cssEase: 'linear'
        });
    });
</script>

<?php get_footer(); ?>