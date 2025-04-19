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
            会社概要
        </div>
        <div class="enttl">
            Overview
        </div>
    </div>
    <div class="sub_menu">
        <div><a href="#philosophy">企業理念</a></div>
        <div>｜</div>
        <div><a href="#message">代表挨拶</a></div>
        <div>｜</div>
        <div><a href="#history">沿革</a></div>
        <div>｜</div>
        <div><a href="#profile">企業概要</a></div>
        <div>｜</div>
        <div><a href="#organization">組織図</a></div>
        <div>｜</div>
        <div><a href="#access">アクセス</a></div>
    </div>
</div>
<!-- 企業理念 -->
<div id="philosophy">
    <div class="title_wrap">
        <div class="jp">
            企業理念
        </div>
        <div class="en">
            Corporate Philosophy
        </div>
    </div>
    <div class="wrapper">
        <div class="ttl">
            <div class="en">
                Mission statement
            </div>
            <div class="jp">
                グループ理念
            </div>
        </div>
        <div class="catch fade_side">
            ひとに、まちに、ここちよく
        </div>
        <div class="txt">
            私たちは“地域のあったらいいなをお届けする”をテーマに、街と人の暮らしに寄り添い、<br class="pc_inline">たのしいを仕掛けるサービスで、笑顔あふれる生きがいを生み出します。
        </div>
    </div>
    <div class="wrapper">
        <div class="ttl">
            <div class="en">
                Value
            </div>
            <div class="jp">
                真価
            </div>
        </div>
        <div class="catch fade_side">
            創意
        </div>
        <div class="txt">
            繊維業で培った“商いの心”は、お客様と働くスタッフの笑顔や生きがいを生み出すための<br class="pc_inline">常なる創意創造の精神を持ち合わせます。
        </div>
    </div>
    <div class="wrapper">
        <div class="ttl pc_block">
            <div class="en">
                　
            </div>
            <div class="jp">
                　
            </div>
        </div>
        <div class="catch fade_side">
            三方よし
        </div>
        <div class="txt">
            相手よし、自分よしはみんなよし。<br class="pc_inline">地域社会にも良い影響が波及するという広い心と視野でチャレンジや工夫を惜しみません。
        </div>
    </div>
    <div class="wrapper">
        <div class="ttl pc_block">
            <div class="en">
                　
            </div>
            <div class="jp">
                　
            </div>
        </div>
        <div class="catch fade_side">
            地域創造
        </div>
        <div class="txt">
            時代や共に人と街とが行き交い、たくさんの笑顔が集う場を創出すること。<br class="pc_inline">地域の「あったらいいな」をお届けすること。<br class="pc_inline">それが事業創造カンパニーとしての高橋マインドです。
        </div>
    </div>
    <div class="wrapper">
        <div class="ttl">
            <div class="en">
                TG way
            </div>
            <div class="jp">
                行動指針
            </div>
        </div>
        <div class="catch fade_side">
            生きガイド
        </div>
        <div class="txt">
            私たちのサービスやマインドをお客様へお届けするために導き出した8つの道しるべです。
            <div class="guide">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/over_ikiguide.png" alt="生きガイド">
            </div>
        </div>
    </div>
</div>
<!-- 代表挨拶 -->
<div id="message">
    <div class="title_wrap">
        <div class="jp">
            代表挨拶
        </div>
        <div class="en">
            President Message
        </div>
    </div>
    <div class="catch fade">
        100年企業に向けて、<br class="sp_inline">地域とともに。
    </div>
    <div class="txt_wrap">
        <div class="txt fade">
            「創意」とは、創業者が残した大切な言葉のひとつで、自ら率先して新しいものを生み出す意志＝英語でいう「initiative」の意味と考えています。<br>
            <br>
            繊維業からスタートした高橋株式会社は、不動産、スポーツ・レジャー、フィットネス、飲食、農業、商業施設など多角的な事業領域で、福岡を中心に長崎、熊本、東京、米国へと広がっています。<br>
            商いの心にルーツをもつ"三方良し"の気概をもって時代のニーズをつかみ、「それぞれの地域やお客様に喜ばれるサービスコンテンツは何か」を具現化。余暇・レジャーの時代にはゴルフ練習場やボウリング場を、生活の付加価値と健康増進を求めた時代にはスポーツクラブを、食の楽しみを広げる事業としてレストランやカフェを、そして創業85周年を迎えた2022年には誰もが自由にひと息つける憩いの場として民間公園にも着手しました。<br>
            <br>
            ここから100周年を見据え、社員一人ひとりの自発性を大事にしながら、高橋グループらしさである「地域×創意」で、今を生きる私たち、そして子どもたちの未来と環境を守る"心地良い場づくり"に、より一層取り組んでいきます。
        </div>
        <div class="ph fade">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/over_president.jpg" alt="">
        </div>
    </div>
</div>
<!-- 沿革 -->
<div id="history">
    <div class="title_wrap">
        <div class="jp">
            沿革
        </div>
        <div class="en">
            History
        </div>
    </div>
    <div class="history_wrap">
        <div class="history_left">
            <dl class="history_box fade">
                <dt class="history_tit">
                    1937年06月
                </dt>
                <dd class="history_txt">
                    高橋川彦 朝鮮慶尚南道大邱府にて高橋絹織工場を創業
                </dd>
            </dl>
            <dl class="history_box fade">
                <dt class="history_tit">
                    1945年08月
                </dt>
                <dd class="history_txt">
                    終戦により工場解散
                </dd>
            </dl>
            <dl class="history_box fade">
                <dt class="history_tit">
                    1947年07月
                </dt>
                <dd class="history_txt">
                    久留米市諏訪野町へ工場を移転し、博多織の本格操業を開始
                </dd>
            </dl>
            <dl class="history_box fade">
                <dt class="history_tit">
                    1949年01月
                </dt>
                <dd class="history_txt">
                    資本金200万円にて「高橋絹織株式会社」を設立<br>
                    高橋川彦 高橋絹織株式会社 代表取締役就任
                </dd>
            </dl>
            <dl class="history_box fade">
                <dt class="history_tit">
                    1965年12月
                </dt>
                <dd class="history_txt">
                    福岡市東区千早に西日本ゴルフセンターを開業
                </dd>
            </dl>
            <dl class="history_box fade">
                <dt class="history_tit">
                    1966年10月
                </dt>
                <dd class="history_txt">
                    久留米市に西日本スポーツガーデンを開業（現：スポガ久留米）
                </dd>
            </dl>
            <dl class="history_box fade">
                <dt class="history_tit">
                    1970年12月
                </dt>
                <dd class="history_txt">
                    西日本ゴルフセンターと同敷地内にボウリング場（のちの、スポガ香椎）等を新設し、一帯を総合レジャーランド「香椎スポーツガーデン（のちの、スポーツガーデン香椎）」として開業
                </dd>
            </dl>
            <dl class="history_box fade">
                <dt class="history_tit">
                    1976年05月
                </dt>
                <dd class="history_txt">
                    資本金1億円
                </dd>
            </dl>
            <dl class="history_box fade">
                <dt class="history_tit">
                    1979年09月
                </dt>
                <dd class="history_txt">
                    高橋彦二郎 高橋絹織株式会社 代表取締役就任
                </dd>
            </dl>
            <dl class="history_box fade">
                <dt class="history_tit">
                    1987年07月
                </dt>
                <dd class="history_txt">
                    久留米市にスポーツガーデン諏訪野を開業（現：スポーツクラブエスタ諏訪野）
                </dd>
            </dl>
            <dl class="history_box fade">
                <dt class="history_tit">
                    1992年01月
                </dt>
                <dd class="history_txt">
                    高橋絹織株式会社の社名を「高橋株式会社」に変更
                </dd>
            </dl>
            <dl class="history_box fade">
                <dt class="history_tit">
                    1999年04月
                </dt>
                <dd class="history_txt">
                    高橋英光 高橋株式会社 代表取締役就任<br>
                    高橋博彦 高橋株式会社 取締役会長就任
                </dd>
            </dl>
            <dl class="history_box fade">
                <dt class="history_tit">
                    2001年05月
                </dt>
                <dd class="history_txt">
                    スポーツクラブエスタ香椎を開業
                </dd>
            </dl>
            <dl class="history_box fade">
                <dt class="history_tit">
                    2001年11月
                </dt>
                <dd class="history_txt">
                    久留米市諏訪野町の工場跡地に高橋株式会社（本社）社屋を新設
                </dd>
            </dl>
            <dl class="history_box fade">
                <dt class="history_tit">
                    2002年11月
                </dt>
                <dd class="history_txt">
                    エスタインドアテニスステージ香椎を開業
                </dd>
            </dl>
            <dl class="history_box fade">
                <dt class="history_tit">
                    2003年05月
                </dt>
                <dd class="history_txt">
                    スポーツクラブエスタ城南を開業（現：スポーツクラブエスタクロス城南）
                </dd>
            </dl>
            <dl class="history_box fade">
                <dt class="history_tit">
                    2003年07月
                </dt>
                <dd class="history_txt">
                    株式会社福岡シティボウルの株式取得<br>
                    大橋シティボウルを継承
                </dd>
            </dl>
            <dl class="history_box fade">
                <dt class="history_tit">
                    2006年04月
                </dt>
                <dd class="history_txt">
                    スポーツレジャー事業部及びスポーツクラブ事業部を分社化し、「株式会社ガーデンボウル」「エスタ株式会社」を設立
                </dd>
            </dl>
            <dl class="history_box fade">
                <dt class="history_tit">
                    2008年04月
                </dt>
                <dd class="history_txt">
                    高橋彦太郎 高橋株式会社 代表取締役就任
                </dd>
            </dl>
            <dl class="history_box fade">
                <dt class="history_tit">
                    2009年01月
                </dt>
                <dd class="history_txt">
                    スポーツクラブエスタ門司を継承
                </dd>
            </dl>
            <dl class="history_box fade">
                <dt class="history_tit">
                    2009年04月
                </dt>
                <dd class="history_txt">
                    不動産事業である関連会社 博英株式会社の社名を「博英不動産株式会社」に変更
                </dd>
            </dl>
        </div>
        <div class="history_left">
            <dl class="history_box fade">
                <dt class="history_tit">
                    2012年08月
                </dt>
                <dd class="history_txt">
                    株式会社ガーデンボウルの社名を「スポーツガーデン株式会社」に変更
                </dd>
            </dl>
            <dl class="history_box fade">
                <dt class="history_tit">
                    2014年09月
                </dt>
                <dd class="history_txt">
                    プロント長崎浜町店を開業
                </dd>
            </dl>
            <dl class="history_box fade">
                <dt class="history_tit">
                    2014年09月
                </dt>
                <dd class="history_txt">
                    米国カリフォルニア州サンフランシスコに<br class="pc_inline">「Takahashi & Co.,Ltd.」設立
                </dd>
            </dl>
            <dl class="history_box fade">
                <dt class="history_tit">
                    2015年05月
                </dt>
                <dd class="history_txt">
                    プロント大塚店を継承
                </dd>
            </dl>
            <dl class="history_box fade">
                <dt class="history_tit">
                    2015年07月
                </dt>
                <dd class="history_txt">
                    プロント渋谷東武ホテル店を開業
                </dd>
            </dl>
            <dl class="history_box fade">
                <dt class="history_tit">
                    2016年04月
                </dt>
                <dd class="history_txt">
                    飲食事業として「ビーエルダイニング株式会社」を設立
                </dd>
            </dl>
            <dl class="history_box fade">
                <dt class="history_tit">
                    2016年04月
                </dt>
                <dd class="history_txt">
                    LUONTO久留米店を開業
                </dd>
            </dl>
            <dl class="history_box fade">
                <dt class="history_tit">
                    2016年09月
                </dt>
                <dd class="history_txt">
                    農業事業として「アークフィールド株式会社」を設立<br>
                    三潴郡大木町にてアスパラガスの生産を開始
                </dd>
            </dl>
            <dl class="history_box fade">
                <dt class="history_tit">
                    2016年10月
                </dt>
                <dd class="history_txt">
                    Takahashi & Co.,Ltd.の社名を<br class="pc_inline">「TandemSprint,Inc.」に変更する
                </dd>
            </dl>
            <dl class="history_box fade">
                <dt class="history_tit">
                    2017年03月
                </dt>
                <dd class="history_txt">
                    うきは市つづら・分田地区にて棚田米の生産を開始
                </dd>
            </dl>
            <dl class="history_box fade">
                <dt class="history_tit">
                    2017年04月
                </dt>
                <dd class="history_txt">
                    山鹿市鹿央町にてニラの生産を開始
                </dd>
            </dl>
            <dl class="history_box fade">
                <dt class="history_tit">
                    2017年10月
                </dt>
                <dd class="history_txt">
                    宗像シティボウルを継承
                </dd>
            </dl>
            <dl class="history_box fade">
                <dt class="history_tit">
                    2018年12月
                </dt>
                <dd class="history_txt">
                    プロント日比谷を継承
                </dd>
            </dl>
            <dl class="history_box fade">
                <dt class="history_tit">
                    2021年04月
                </dt>
                <dd class="history_txt">
                    スポーツガーデン香椎を再開発し、ガーデンズ千早を開業<br>
                    スポーツクラブエスタ香椎・エスタインドアテニスステージ香椎がスポーツクラブエスタクオリア千早としてガーデンズ千早内に新設移転
                </dd>
            </dl>
            <dl class="history_box fade">
                <dt class="history_tit">
                    2022年04月
                </dt>
                <dd class="history_txt">
                    ガーデンズ千早 ちはや公園を開業
                </dd>
            </dl>
            <dl class="history_box fade">
                <dt class="history_tit">
                    2022年07月
                </dt>
                <dd class="history_txt">
                    久留米市中央公園内にKURUMERUを開業
                </dd>
            </dl>
            <dl class="history_box fade">
                <dt class="history_tit">
                    2024年09月
                </dt>
                <dd class="history_txt">
                    「クオリティクラブ株式会社」を設立
                </dd>
            </dl>
            <dl class="history_box fade">
                <dt class="history_tit">
                    2024年10月
                </dt>
                <dd class="history_txt">
                    エスタマイフィットネスSAGAを開業
                </dd>
            </dl>
            <dl class="history_box fade">
                <dt class="history_tit">
                    2025年02月
                </dt>
                <dd class="history_txt">
                    「N事業部株式会社」を設立<br>
                    山鹿市にて福祉作業所「ライフワークサポート」を開所

                </dd>
            </dl>
            <dl class="history_box fade">
                <dt class="history_tit">
                    2025年04月
                </dt>
                <dd class="history_txt">
                    ビーエルダイニング株式会社の社名を「高橋グループ株式会社」に変更
            
                </dd>
            </dl>
        </div>
    </div>
</div>
<!-- スライダー -->
<div id="slider_wrap">
    <div class="slick_02">
        <div class="top_slider_panel">
            <div class="top_slider_ph">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/over_slide01.jpg" alt="" class="ph_top">
            </div>
        </div>
        <div class="top_slider_panel">
            <div class="top_slider_ph">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/over_slide02.jpg" alt="" class="ph_btm">
            </div>
        </div>
        <div class="top_slider_panel">
            <div class="top_slider_ph">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/over_slide03.jpg" alt="" class="ph_top">
            </div>
        </div>
        <div class="top_slider_panel">
            <div class="top_slider_ph">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/over_slide04.jpg" alt="" class="ph_btm">
            </div>
        </div>
        <div class="top_slider_panel">
            <div class="top_slider_ph">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/over_slide05.jpg" alt="" class="ph_top">
            </div>
        </div>
        <div class="top_slider_panel">
            <div class="top_slider_ph">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/over_slide06.jpg" alt="" class="ph_btm">
            </div>
        </div>
        <div class="top_slider_panel">
            <div class="top_slider_ph">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/over_slide07.jpg" alt="" class="ph_top">
            </div>
        </div>
        <div class="top_slider_panel">
            <div class="top_slider_ph">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/over_slide08.jpg" alt="" class="ph_btm">
            </div>
        </div>
        <div class="top_slider_panel">
            <div class="top_slider_ph">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/over_slide09.jpg" alt="" class="ph_top">
            </div>
        </div>
        <div class="top_slider_panel">
            <div class="top_slider_ph">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/over_slide10.jpg" alt="" class="ph_btm">
            </div>
        </div>
        <div class="top_slider_panel">
            <div class="top_slider_ph">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/over_slide11.jpg" alt="" class="ph_top">
            </div>
        </div>
    </div>
</div>
<!-- 企業概要 -->
<div id="profile">
    <div class="title_wrap">
        <div class="jp">
            企業概要
        </div>
        <div class="en">
            Profile
        </div>
    </div>
    <div class="wrap">
        <div class="ph fade">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/over_profile.jpg" alt="">
        </div>
        <div class="inner fade">
            <div class="ttl">社名</div>
            <div class="txt">高橋株式会社</div>
        </div>
        <div class="box fade">
            <div>
                <div class="ttl">代表取締役</div>
                <div class="txt">髙橋彦太郎</div>
            </div>
            <div>
                <div class="ttl">取締役</div>
                <div class="txt">中島康彦</div>
            </div>
            <div>
                <div class="ttl">取締役</div>
                <div class="txt">小野智博</div>
            </div>
            <div>
                <div class="ttl">取締役</div>
                <div class="txt">笠原盛泰</div>
            </div>
            <div>
                <div class="ttl">監査役</div>
                <div class="txt">内田健二</div>
            </div>
        </div>
        <div class="inner fade">
            <div class="ttl">本社所在地</div>
            <div class="txt">福岡県久留米市諏訪野町2378</div>
        </div>
        <div class="inner fade">
            <div class="ttl">創業</div>
            <div class="txt">1937年6月</div>
        </div>
        <div class="inner fade">
            <div class="ttl">設立</div>
            <div class="txt">1949年1月</div>
        </div>
        <div class="inner fade">
            <div class="ttl">資本金</div>
            <div class="txt">1億円</div>
        </div>
        <div class="inner fade">
            <div class="ttl">グループ会社</div>
            <div class="txt">
                スポーツガーデン株式会社、エスタ株式会社、高橋グループ株式会社、アークフィールド株式会社、TandemSprint,lnc.、クオリティクラブ株式会社、N事業部株式会社、博英不動産株式会社
            </div>
        </div>
        <div class="inner fade">
            <div class="ttl">グループ従業員数</div>
            <div class="txt">395名（うち正社員84名）</div>
        </div>
    </div>
</div>
<!-- 組織図 -->
<div id="organization">
    <div class="title_wrap">
        <div class="jp">
            組織図
        </div>
        <div class="en">
            Organization
        </div>
    </div>
    <div class="ph fade">
        <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/over_organi.svg" alt="">
    </div>
</div>
<!-- アクセス -->
<div id="access">
    <div class="title_wrap">
        <div class="jp">
            アクセス
        </div>
        <div class="en">
            Access
        </div>
    </div>
    <div class="wrap">
        <div class="copy fade">
            <div class="ttl">
                高橋株式会社 本社
            </div>
            <div class="txt">
                〒830-0037<br>
                福岡県久留米市諏訪野町2378<br>
                （カーナビでお越しの方は久留米市諏訪野町1903-1とご入力下さい。）
            </div>
        </div>
        <div class="map fade">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53352.29941126544!2d130.45324085820312!3d33.30525209999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f3!3m3!1m2!1s0x3541a44d8648073f%3A0x16ab517b6d55017d!2z6auY5qmL5qCq5byP5Lya56S-!5e0!3m2!1sja!2sjp!4v1679557523486!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <a href="https://goo.gl/maps/WbgYAJwbRoQrd8LbA" target="_blank" rel="noopener noreferrer">
            <div class="btn">
                Google Mapで見る →
            </div>
        </a>
    </div>
    <div class="wrap">
        <div class="copy fade">
            <div class="ttl">
                高橋株式会社 千早会議室
            </div>
            <div class="txt">
                〒813-0044<br>
                福岡県福岡市東区千早3丁目6-37<br>
                ガーデンズ千早内2F
            </div>
        </div>
        <div class="map fade">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3321.2616347059256!2d130.43316751581935!3d33.6503820462462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f20!3m3!1m2!1s0x35418fa3fb860c17%3A0x5d63eab4c80434e7!2z44Ks44O844OH44Oz44K65Y2D5pep!5e0!3m2!1sja!2sjp!4v1679558748092!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <a href="https://goo.gl/maps/ZFhhc9xomns6Qycx6" target="_blank" rel="noopener noreferrer">
            <div class="btn">
                Google Mapで見る →
            </div>
        </a>
    </div>
    <div class="wrap">
        <div class="copy fade">
            <div class="ttl">
                高橋株式会社 東京会議室
            </div>
            <div class="txt">
                〒104-0031<br>
                東京都中央区京橋2丁目13-10 京橋MIDビル4階<br>
                DIAGONAL RUN TOKYO内
            </div>
        </div>
        <div class="map fade">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6482.129347619151!2d139.76292509357916!3d35.6754095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f20!3m3!1m2!1s0x60188be35efab3ed%3A0x6f258ebb0f304ad3!2zRElBR09OQUwgUlVOIFRPS1lP77yI44OA44Kk44Ki44K044OK44Or44Op44Oz5p2x5LqsL0RSVO-8iQ!5e0!3m2!1sja!2sjp!4v1724341907655!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <a href="https://goo.gl/maps/BLd8zA7ypNrmSR7z5" target="_blank" rel="noopener noreferrer">
            <div class="btn">
                Google Mapで見る →
            </div>
        </a>
    </div>
</div>
<script type="text/javascript" src="<?= esc_url(get_template_directory_uri()); ?>/asset/js/slick.min.js"></script>
<script type="text/javascript">
    $(function() {
        $('.slick_02').slick({
            infinite: true, // 無限ループ
            autoplay: true, //オートプレイ
            slidesToShow: 4,
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