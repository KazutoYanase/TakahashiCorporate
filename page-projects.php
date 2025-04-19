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

<!-- ヘッドパーツ -->
<div class="sp_block logo__sp">
    <a href="<?= esc_url(home_url()); ?>"><img alt="TAKAHASHI GROUP" src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/menu_logo.svg"></a>
</div>
<div class="head_parts">
    <div class="wrap">
        <div class="ttl">
            事業案内
        </div>
        <div class="enttl">
            Projects
        </div>
    </div>
    <div class="sub_menu_pjt-1">
        <div><a href="#takahashi">高橋株式会社 不動産事業部</a></div>
        <div>｜</div>
        <div><a href="#sportsgarden">スポーツガーデン株式会社</a></div>
        <div>｜</div>
        <div><a href="#esta">エスタ株式会社</a></div>
    </div>
    <div class="sub_menu_pjt-3">
        <div><a href="#bldining">高橋グループ株式会社</a></div>
        <div>｜</div>
        <div><a href="#arcfield">アークフィールド株式会社</a></div>
        <div>｜</div>
        <div><a href="#tandemsprint">TandemSprint, Inc.</a></div>
    </div>
    <div class="sub_menu_pjt-2">
        <div>クオリティクラブ株式会社</div>
        <div>｜</div>
        <div>N事業部株式会社</div>
    </div>
</div>
<!-- コンセプト -->
<div id="concept-txt">
    <div class="catch">
        心を織り込み、進化を続ける
    </div>
    <div class="txt">
        1965年に始まったレジャー・アミューズメント事業を皮切りに、フィットネス・リラクゼーション事業、外食事業、アグリ事業、海外進出支援事業など多角的に展開。昭和、平成、令和と3つの時代でゆたかさの基準や価値観が大きく変化する中、2021年に複合商業施設「ガーデンズ千早」、創業85周年を迎えた2022年には民間の公園として「ちはや公園」、久留米市中央公園内に「KURUMERU」がそれぞれ誕生し、自由なコミュニティ空間をもつ、オープンでインクルーシブな場が仲間入りしました。すべての世代の人たちへ、ちょうどよくて、心地いい、人と家族のコミュニケーションの場を広げていきます。
    </div>
</div>
<!-- 高橋株式会社 不動産事業部 -->
<div id="takahashi" class="corpbox">
    <div class="headttl">
        <div class="logo">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/pjt_logo-1.png" alt="">
        </div>
        <div class="txt">
            <div class="jp">
                高橋株式会社 不動産事業部
            </div>
            <div class="en">
                Takahashi Co., Ltd. Realestate Division
            </div>
        </div>
    </div>
    <div class="ttlcopy fade">
        人と暮らしに寄り添い、<br class="sp_inline">街と共に地域を育てる。
    </div>
    <div class="cntbox">
        <div class="slider_wrap">
            <div class="slick_03">
                <div class="top_slider_panel">
                    <div class="top_slider_ph">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/pjt_takahashi-1.jpg" alt="" class="ph_top">
                    </div>
                </div>
                <div class="top_slider_panel">
                    <div class="top_slider_ph">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/pjt_takahashi-2.jpg" alt="" class="ph_btm">
                    </div>
                </div>
                <div class="top_slider_panel">
                    <div class="top_slider_ph">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/pjt_takahashi-3.jpg" alt="" class="ph_top">
                    </div>
                </div>
                <div class="top_slider_panel">
                    <div class="top_slider_ph">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/pjt_takahashi-4.jpg" alt="" class="ph_top">
                    </div>
                </div>
            </div>
        </div>
        <div class="copy">
            <div class="txt fade">
                半世紀以上の歴史の中、私たちは地域の人々とともに街の活性化に取り組んできました。長い時間をかけて街とともに歩き、街を育て、街の人たちの記憶を彩る。目指すのは街や人々の記憶を創り出すこと。​そこで生まれる笑顔と賑わいこそが、私たちの生きがいです。
            </div>
            <a href="https://www.tgfudosan.com/" target="_blank" rel="noopener noreferrer">
                <div class="btn">
                    不動産事業部 Webサイト →
                </div>
            </a>
        </div>
    </div>
</div>
<!-- スポガ -->
<div id="sportsgarden" class="corpbox">
    <div class="headttl">
        <div class="logo">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/pjt_logo-2.png" alt="">
        </div>
        <div class="txt">
            <div class="jp">
                スポーツガーデン株式会社
            </div>
            <div class="en">
                Sports Garden Co., Ltd.
            </div>
        </div>
    </div>
    <div class="ttlcopy fade">
        忘れられない笑顔の体験を通じて、<br>
        温もりある「家族コミュニケーション」を提供する。
    </div>
    <div class="cntbox">
        <div class="slider_wrap">
            <div class="slick_03">
                <div class="top_slider_panel">
                    <div class="top_slider_ph">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/pjt_spoga-1.jpg" alt="">
                    </div>
                </div>
                <div class="top_slider_panel">
                    <div class="top_slider_ph">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/pjt_spoga-2.jpg" alt="">
                    </div>
                </div>
                <div class="top_slider_panel">
                    <div class="top_slider_ph">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/pjt_spoga-3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="copy">
            <div class="txt fade">
                ボウリングやバッティング、アイススケート、アミューズメント施設を展開するスポーツガーデン。私たちがもっとも大切にしているのは、家族や大切な人同士が、いつでも、気軽に楽しめる“カジュアルスポーツ”を通して、記憶に残るような笑顔の体験をしていただくこと。そして体験を通じて、家族や大切な人とのコミュニケーションを深めていただくこと。家族の話題になるような楽しい時間とともに、私たちスポーツガーデンは、地域に「いつの時代も笑顔になれる場所」を提供していきます。
            </div>
            <a href="https://sportsgarden.co.jp/" target="_blank" rel="noopener noreferrer">
                <div class="btn">
                    スポーツガーデン Webサイト →
                </div>
            </a>
        </div>
    </div>
</div>
<!-- エスタ -->
<div id="esta" class="corpbox">
    <div class="headttl">
        <div class="logo">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/pjt_logo-3.png" alt="">
        </div>
        <div class="txt">
            <div class="jp">
                エスタ株式会社
            </div>
            <div class="en">
                Esta Co., Ltd.
            </div>
        </div>
    </div>
    <div class="ttlcopy fade">
        「健康エンターテイメント」で、<br>
        地域に笑顔あふれる毎日を創りだす。
    </div>
    <div class="cntbox">
        <div class="slider_wrap">
            <div class="slick_03">
                <div class="top_slider_panel">
                    <div class="top_slider_ph">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/pjt_esta-1.jpg" alt="">
                    </div>
                </div>
                <div class="top_slider_panel">
                    <div class="top_slider_ph">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/pjt_esta-2.jpg" alt="">
                    </div>
                </div>
                <div class="top_slider_panel">
                    <div class="top_slider_ph">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/pjt_esta-3.jpg" alt="">
                    </div>
                </div>
                <div class="top_slider_panel">
                    <div class="top_slider_ph">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/pjt_esta-4.jpg" alt="">
                    </div>
                </div>
                <div class="top_slider_panel">
                    <div class="top_slider_ph">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/pjt_esta-5.jpg" alt="">
                    </div>
                </div>
                <div class="top_slider_panel">
                    <div class="top_slider_ph">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/pjt_esta-6.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="copy">
            <div class="txt fade">
                フィットネスクラブ、テニス・スイミングスクール、ホットヨガスタジオ、ヒーリングサロンなどを展開するエスタ。施設や設備などハード面の充実だけでなく、お客さまが気軽にワクワクしながら健康になっていただけるよう、スタッフ一人ひとりの手で楽しさを演出していく。いわば「健康エンターテイメント」がエスタのコンセプト。健康なお客さまが増えていけば、地域に笑顔が増えていく。お客さまの毎日と地域を元気にしていくことが、私たちエスタの使命なのです。
            </div>
            <a href="https://www.sports-esta.com/" target="_blank" rel="noopener noreferrer">
                <div class="btn">
                    エスタ Webサイト →
                </div>
            </a>
        </div>
    </div>
</div>
<!-- ビーエルダイニング -->
<div id="bldining" class="corpbox">
    <div class="headttl">
        <div class="logo">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/pjt_logo-10.png" alt="">
        </div>
        <div class="txt">
            <div class="jp">
                高橋グループ株式会社
            </div>
            <div class="en">
                TAKAHASHI GROUP Co.,Ltd.
            </div>
        </div>
    </div>
    <div class="ttlcopy fade">
        まだない「ダイニングシーン」で、<br>
        潤いあるひとときを演出する。
    </div>
    <div class="cntbox">
        <div class="slider_wrap">
            <div class="slick_03">
                <div class="top_slider_panel">
                    <div class="top_slider_ph">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/pjt_bld-1.jpg" alt="">
                    </div>
                </div>
                <div class="top_slider_panel">
                    <div class="top_slider_ph">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/pjt_bld-2.jpg" alt="">
                    </div>
                </div>
                <div class="top_slider_panel">
                    <div class="top_slider_ph">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/pjt_bld-4.jpg" alt="">
                    </div>
                </div>
                <div class="top_slider_panel">
                    <div class="top_slider_ph">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/pjt_bld-5.jpg" alt="">
                    </div>
                </div>
                <div class="top_slider_panel">
                    <div class="top_slider_ph">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/pjt_bld-6.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="copy">
            <div class="txt fade">
                “プロント”など、カフェを展開する高橋グループ株式会社。私たちが、これまで高橋グループの歴史の中で築いてきたコンセプトは、「その街に新しいダイニングシーン」を創りだすこと。そして、心温まるおもてなしを通して、お客さまの日常の中に、潤いのあるひとときを演出していくこと。街に新たな風景を創りだし、お客さまの日常を豊かに変えていく。自社ブランドの開発や海外出店など、私たち高橋グループ株式会社の挑戦に終わりはありません。
            </div>
            <a href="https://www.bldining.com/" target="_blank" rel="noopener noreferrer">
                <div class="btn">
                    高橋グループ株式会社 Webサイト →
                </div>
            </a>
        </div>
    </div>
</div>
<!-- アークフィールド -->
<div id="arcfield" class="corpbox">
    <div class="headttl">
        <div class="logo">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/pjt_logo-5.png" alt="">
        </div>
        <div class="txt">
            <div class="jp">
                アークフィールド株式会社
            </div>
            <div class="en">
                Arcfield Inc.
            </div>
        </div>
    </div>
    <div class="ttlcopy fade">
        日本の食と農業を未来につなぐため、<br>
        「ファームtoテーブル」 にチャレンジする。
    </div>
    <div class="cntbox">
        <div class="slider_wrap">
            <div class="slick_03">
                <div class="top_slider_panel">
                    <div class="top_slider_ph">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/pjt_af-1.jpg" alt="">
                    </div>
                </div>
                <div class="top_slider_panel">
                    <div class="top_slider_ph">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/pjt_af-2.jpg" alt="">
                    </div>
                </div>
                <div class="top_slider_panel">
                    <div class="top_slider_ph">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/pjt_af-3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="copy">
            <div class="txt fade">
                日本の食と農業を未来に繋げたいという想いから生まれた「アークフィールド株式会社」。農業従事者の高齢化、耕作放棄地の増加など、現在の日本の農業の課題を解決すべく、自由な発想と無限のチャレンジ精神で農業の可能性を広げていくことを目指しています。現在、九州の複数の地域でアスパラガス・棚田米・ニラなどの生産に取り組み、様々なスタイルで農産物を市場に提供。農業の新たな価値を創造しつつ、日々の食卓をもっと笑顔にする。それが私たちの願いです。
            </div>
            <a href="https://arc-field.com/" target="_blank" rel="noopener noreferrer">
                <div class="btn">
                    アークフィールド Webサイト →
                </div>
            </a>
        </div>
    </div>
</div>
<!-- タンデムスプリント -->
<div id="tandemsprint" class="corpbox">
    <div class="headttl">
        <div class="logo">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/pjt_logo-6.png" alt="">
        </div>
        <div class="txt">
            <div class="jp">
                タンデムスプリントInc.
            </div>
            <div class="en">
                TandemSprint Inc.
            </div>
        </div>
    </div>
    <div class="ttlcopy fade">
        国際ビジネスのパートナーとして<br>
        「世界進出をサポート」する。
    </div>
    <div class="cntbox">
        <div class="slider_wrap">
            <div class="slick_03">
                <div class="top_slider_panel">
                    <div class="top_slider_ph">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/pjt_ts-1.jpg" alt="">
                    </div>
                </div>
                <div class="top_slider_panel">
                    <div class="top_slider_ph">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/pjt_ts-2.jpg" alt="">
                    </div>
                </div>
                <div class="top_slider_panel">
                    <div class="top_slider_ph">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/pjt_ts-3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="copy">
            <div class="txt fade">
                北米市場を中心とした海外進出支援事業と、サンフランシスコで不動産事業を行う「タンデムスプリント」。“日本の素晴らしい商品やサービスを、世界中の人々に届け、より豊かな社会を実現したい”という想いをコンセプトに、現地との強固なネットワークを強みとしています。日本企業の商品・サービスが海外市場に喜んで受け入れられる価値を明確にし、仕組みを構築することで、日本企業が世界市場に進出できるようサポートします。
            </div>
            <a href="https://tandemsprint.com/" target="_blank" rel="noopener noreferrer">
                <div class="btn">
                    タンデムスプリント Webサイト →
                </div>
            </a>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?= esc_url(get_template_directory_uri()); ?>/asset/js/slick.min.js"></script>
<script type="text/javascript">
    $(function() {
        $('.slick_03').slick({
            infinite: true, // 無限ループ
            autoplay: true, //オートプレイ
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplaySpeed: 3500, //オートプレイの切り替わり時間
            speed: 1500,
            accessibility: false,
            arrows: false,
            draggable: false,
            pauseOnHover: false,
            dots: true,
            fade: true,
            cssEase: 'linear',
        });
    });
</script>

<?php get_footer(); ?>