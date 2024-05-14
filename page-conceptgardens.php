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
<div class="head_gardens">
    <div class="wrap">
        <div class="ttl gardens_ttl">
            ガーデンズ千早の歩み
        </div>
        <div class="enttl">
            History of GARDENS CHIHAYA
        </div>
    </div>
</div>
<!-- コンセプト -->
<div id="gardens_concept">
    <div class="catch">
        暮らしたのしむ、<br class="sp_inline">まちのオープンリビング
    </div>
    <div class="txt">
        「ガーデンズ千早」は当エリアを1つの街区＝gardensとして捉え、毎日の暮らしに欠かせない衣・食・住にまつわる店舗、体を動かすウェルネスな店舗、そして地域と人をつなぐコミュニティハブとしての共創空間を有するライフスタイルセンターです。
    </div>
    <div class="ph_box fade">
        <img alt="ガーデンズ千早全景" src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/c_gardens_all.jpg">
    </div>
</div>
<!-- コンセプト詳細 -->
<div class="c_gardens_box order_jun">
    <div class="ph_inner fade">
        <img alt="ガーデンズ千早全景" src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/c_gardens_honkan.jpg">
    </div>
    <div class="txt_inner">
        1965年から55年間、ボウリング場、アイススケート、ゴルフ練習場などの総合レジャー施設「スポーツガーデン香椎」として地域の皆様に親しまれ、この場所での原体験がまちの記憶のひとつとして刻まれてきました。そして2020年よりスポーツガーデン香椎開発プロジェクトに着手し、2021年4月にガーデンズ千早が、2022年4月にちはや公園が開業。千早エリアも駅周辺の再開発に伴い子育て世帯が増加し、「住みたい街NO.1」の称号を得るまでになりました。<br>
        今春新たに、私たちの想いに共感いただいた「エディオン社」が、ガーデンズ千早の東側・3号線沿いに家電量販店を中心とした新たな商業施設を開業。これによりガーデンズ千早の開発プロジェクト事業が完結することになります。
    </div>
</div>
<div class="c_gardens_box order_rev">
    <div class="ph_inner fade">
        <img alt="ガーデンズ千早全景" src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/pjt_takahashi-1.jpg">
    </div>
    <div class="txt_inner">
        「暮らしたのしむ、まちのオープンリビング」を施設コンセプトに「ちはや公園」を中心とした東西の商業施設が、千早在住の皆さんはもちろん、中広域の皆さんにもお楽しみいただけるような心地よい時間をお届けしてまいります。<br>
        これからの50年も千早がよりたのしく、よりよい地域となるため、人々が気軽に立ち寄り、多くのつながりが生まれることで、千早への愛着がさらに増していくような取り組みを行ってまいります。また大人も子どもも、体験を通して新しいものを発見したり、地域とのつながりを体感したり、文化を育む取り組みを意識する点で「ちはやをよくする会」とともに真の意味での"共創環境"を引き続き整えて参ります。
    </div>
</div>
<!-- 開発経緯 -->
<div class="gardens_kaihatsu">
    <div>
        <div class="midashi">
            【　旧スポーツガーデン香椎開発の主な経緯　】
        </div>
        <div class="inner fade">
            <div class="nen">
                1965年12月
            </div>
            <div class="event">
                福岡市東区千早に西日本ゴルフセンターを開業
            </div>
        </div>
        <div class="inner fade">
            <div class="nen">
                1970年12月
            </div>
            <div class="event">
                西日本ゴルフセンターと同敷地内にボウリング場など新設<br>
                一帯を総合レジャーランド「スポーツガーデン香椎（当時は"香椎スポーツガーデン"）」として開業
            </div>
        </div>
        <div class="inner fade">
            <div class="nen">
                2020年6月
            </div>
            <div class="event">
                スポーツガーデン香椎の再開発に着手
            </div>
        </div>
        <div class="inner fade">
            <div class="nen">
                2021年4月
            </div>
            <div class="event">
                ガーデンズ千早 開業
            </div>
        </div>
        <div class="inner fade">
            <div class="nen">
                2022年4月
            </div>
            <div class="event">
                ガーデンズ千早 ちはや公園 開業
            </div>
        </div>
        <div class="inner fade">
            <div class="nen">
                2024年4月
            </div>
            <div class="event">
                エディオン ガーデンズ千早東店の開業<br>
                以上をもって、スポーツガーデン香椎の再開発完了
            </div>
        </div>
    </div>
</div>
<!-- バナー -->
<div class="gardens_banner">
    <div class="banner_inner fade">
        <a href="https://gardenschihaya.com/" target="_blank" rel="noopener noreferrer">
            <img alt="ガーデンズ千早全景" src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/banner_conceptgardens.png">
        </a>
    </div>
</div>

<?php get_footer(); ?>