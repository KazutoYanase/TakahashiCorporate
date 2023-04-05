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
            地域連携
        </div>
        <div class="enttl">
            Area Relation
        </div>
    </div>
</div>
<!-- コンセプト -->
<div id="concept-txt">
    <div class="catch">
        街に暮らす人とともに<br class="sp_inline">地域の発展を。
    </div>
    <div class="txt">
        日本各地、米国で事業を展開する当社にとって、その街に暮らす人とそれを取り巻く人の笑顔が増えることで地域が活発になり、地域社会が発展していくと考えています。自社のみにとどまらず、コミュニティでの対話や委員会組織体での企画も実施。各エリアでのフェスティバル開催、スタートアップ支援、地域創造インターンシップ、地域コミュニティや企業との共創活動、スポーツチーム支援など様々な活動を行っています。
    </div>
    <div class="jisseki_wrap">
        <div>
            <div class="midashi">
                【　活動実績　】
            </div>
            <div class="inner">
                <div class="nen">
                    2022年
                </div>
                <div class="event">
                    <a href="#nexco">高橋株式会社×NEXCO西日本 連携協定締結</a><br>
                    <a href="#yokusuru">ちはやをよくする会 発足</a><br>
                    <a href="#chikievent">地域連携イベント in ガーデンズ千早</a>
                </div>
            </div>
            <div class="inner">
                <div class="nen">
                    2018年
                </div>
                <div class="event">
                    <a href="#intern">地域創造インターンシップ in 久留米</a>
                </div>
            </div>
            <div class="inner">
                <div class="nen">
                    2017年
                </div>
                <div class="event">
                    <a href="#startup">スタートアップ支援<br class="sp_inline">「BRIDGE INCUBATOR」</a>
                </div>
            </div>
            <div class="inner">
                <div class="nen">
                    2017年
                </div>
                <div class="event">
                    <a href="#genkifes">元気フェスティバル<br class="sp_inline"><span>（〜2019年まで全7回実施）</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- NEXCO -->
<div id="nexco" class="corpbox">
    <div class="headttl">
        <div class="logo">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/contri_icon1.jpg" alt="">
        </div>
        <div class="txt">
            <div class="jp">
                高橋株式会社×NEXCO西日本 連携協定締結
            </div>
            <div class="en">
                2022年4月〜
            </div>
        </div>
    </div>
    <div class="kouken_box">
        <div class="txt fade">
            NEXCO西日本が持つ地域ネットワークとガーデンズ千早の地域体験コンテンツの共創により、都市と地域をつなぎ、広域交流・地域の魅力発信を目的に連携協定を締結。<br>
            <br>
            ガーデンズ千早のシェアキッチンやちはや公園を活用し、<br>
            ・大分県「さいきフェア」<br>
            ・宮崎県高原町「奥霧島マルシェ」<br>
            ・佐賀県有田町、武雄市、嬉野市「ありったけのうれしいを。」（西九州新幹線開業記念）<br>
            ・熊本県津奈木町<br>
            など、九州を中心にそのエリアの特産品などをPR、販売するマルシェを定期的に開催しています。<br>
            <!--
            <br>
            cf.）PRESS RELEASE：都市と地域をつなぎ、暮らしに彩りを添える、地域創生プロジェクト開始
            -->
        </div>
        <div class="ph">
            <div class="ph-inner fade">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/contri_ph001.jpg" alt=""><br>
                協定式
            </div>
            <div class="ph-inner fade">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/contri_ph002.jpg" alt=""><br>
                奥霧島マルシェ
            </div>
            <div class="ph-inner fade">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/contri_ph003.jpg" alt=""><br>
                ありったけのうれしいを。
            </div>
        </div>
    </div>
</div>
<!-- よくする会 -->
<div id="yokusuru" class="corpbox">
    <div class="headttl">
        <div class="logo">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/contri_icon1.jpg" alt="">
        </div>
        <div class="txt">
            <div class="jp">
                ちはやをよくする会
            </div>
            <div class="en">
                2022年4月〜
            </div>
        </div>
    </div>
    <div class="kouken_box">
        <div class="txt fade">
            2022年のちはや公園オープンに伴い、まちの暮らしをよりたのしく、よりよくするための取り組みを推進する協議会として「ちはやをよくする会」を発足。<br>
            九州産業大学教授、千早校区自治協議会会長、なみきスクエア事業プロデューサーなどの皆様をメンバーに迎え、定例MTGを行いながら協議を進めています。<br>
            <br>
            また、地域住民の方へボランティアを募り、毎月第２土曜日に「ちはやゴミ拾い大作戦」を行ったり、九州産業大学主催のチャリティイベント「福岡サンタウォーク」をちはや公園で行うなど、地域と連携しながら実質的な活動もスタートしています。<br>
            <!--
            <br>
            cf.）PRESS RELEASE：「ちはや公園」オープン 地域のみなさんと一緒にまちをよくする取り組みがスタート
            -->
        </div>
        <div class="ph">
            <div class="ph-inner fade">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/contri_ph004.jpg" alt=""><br>
                定期ミーティングの様子
            </div>
            <div class="ph-inner fade">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/contri_ph005.jpg" alt=""><br>
                ちはやゴミ拾い大作戦
            </div>
            <div class="ph-inner fade">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/contri_ph006.jpg" alt=""><br>
                福岡サンタウォーク
            </div>
        </div>
    </div>
</div>
<!-- 地域イベント -->
<div id="chikievent" class="corpbox">
    <div class="headttl">
        <div class="logo">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/contri_icon1.jpg" alt="">
        </div>
        <div class="txt">
            <div class="jp">
                地域連携イベント in ガーデンズ千早
            </div>
            <div class="en">
                2022年10月〜
            </div>
        </div>
    </div>
    <div class="kouken_box">
        <div class="txt fade">
            NEXCO西日本との連携以外にも、地域活性に力を入れている方々と一緒にイベント・マルシェを積極的に開催。<br>
            人と人との繋がりが、さらにその先の人との出会いに繋がり、地域を盛り上げる“和”が広がっています。
        </div>
        <div class="ph">
            <div class="ph-inner fade">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/contri_ph007.jpg" alt=""><br>
                福岡まちむらマルシェ
            </div>
            <div class="ph-inner fade">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/contri_ph008.jpg" alt=""><br>
                別府マルシェ
            </div>
            <div class="ph-inner fade">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/contri_ph009.jpg" alt=""><br>
                福岡ジビエフェア
            </div>
        </div>
    </div>
</div>
<!-- 地域インターン -->
<div id="intern" class="corpbox">
    <div class="headttl">
        <div class="logo">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/contri_icon1.jpg" alt="">
        </div>
        <div class="txt">
            <div class="jp">
                地域創造インターンシップin久留米
            </div>
            <div class="en">
                2018年08月27〜31日
            </div>
        </div>
    </div>
    <div class="kouken_box">
        <div class="txt fade">
            久留米市が実際に抱える地域課題に対して、どう解決していくかをテーマに、高橋&#12849;以外の久留米近隣の3社１大学のバックアップも受けて、4泊5日のインターンシップを開催。
            実際に街中を歩きまわり、そこにいる人に話を聞き、そうした中から出てきたアイデアを最後にプレゼンテーションしました。
        </div>
        <div class="ph">
            <div class="ph-inner fade">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/contri_ph010.jpg" alt=""><br>
                事前調査
            </div>
            <div class="ph-inner fade">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/contri_ph011.jpg" alt=""><br>
                フィールドワーク
            </div>
            <div class="ph-inner fade">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/contri_ph012.jpg" alt=""><br>
                プレゼンテーション
            </div>
        </div>
    </div>
</div>
<!-- スタートアップ -->
<div id="startup" class="corpbox">
    <div class="headttl">
        <a href="http://tkgroup.co.jp/bridgeincubator/" target="_blank" rel="noopener noreferrer">
            <div class="logo">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/contri_icon1.jpg" alt="">
            </div>
            <div class="txt">
                <div class="jp">
                    BRIDGE INCUBATOR
                </div>
                <div class="en">
                    2017年〜
                </div>
            </div>
        </a>
    </div>
    <div class="kouken_box">
        <div class="txt fade">
            事業創造・起業家支援の取り組み<a href="http://tkgroup.co.jp/bridgeincubator/" target="_blank" rel="noopener noreferrer">「BRIDGE INCUBATOR（ブリッジインキュベーター）」</a>。
            2018年には株式会社ゼロワンブースターとともに、セミナーや起業家候補のピッチ大会を組み合わせた「Startup Dojo 九州」を開催しました。
        </div>
        <div class="ph">
            <div class="ph-inner fade">
                <a href="http://tkgroup.co.jp/bridgeincubator/" target="_blank" rel="noopener noreferrer">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/contri_ph013.jpg" alt=""><br>
                    　
                </a>
            </div>
            <div class="ph-inner fade">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/contri_ph014.jpg" alt=""><br>
                ピッチ大会
            </div>
            <div class="ph-inner fade">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/contri_ph015.jpg" alt=""><br>
                Startup Dojo 九州
            </div>
        </div>
    </div>
</div>
<!-- 元気フェス -->
<div id="genkifes" class="corpbox">
    <div class="headttl">
        <div class="logo">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/contri_icon1.jpg" alt="">
        </div>
        <div class="txt">
            <div class="jp">
                元気フェスティバル
            </div>
            <div class="en">
                2012〜2019年
            </div>
        </div>
    </div>
    <div class="kouken_box">
        <div class="txt fade">
            スポーツガーデン香椎時代に、秋の風物詩となっていた地域イベント「元気フェスティバル」。
            JR九州ウォーキングとのコラボのほか、地元学校の吹奏楽部やダンス部によるステージ発表、スポーツ体験など、地域の皆様の笑顔と健康につながるコンテンツを考え実施してきました。
        </div>
        <div class="ph">
            <div class="ph-inner fade">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/contri_ph016.jpg" alt=""><br>
                スポーツ体験
            </div>
            <div class="ph-inner fade">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/contri_ph017.jpg" alt=""><br>
                遊んで学べる防災ゲーム
            </div>
            <div class="ph-inner fade">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/contri_ph018.jpg" alt=""><br>
                地元学校によるステージ発表
            </div>
        </div>
    </div>
</div>
<!-- サステイナブル -->
<div id="suste" class="corpbox">
    <div class="headttl">
        <div class="logo">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/contri_icon2.jpg" alt="">
        </div>
        <div class="txt">
            <div class="jp">
                サスティナブルな取り組みも少しずつスタートしています
            </div>
            <div class="en">
                　
            </div>
        </div>
    </div>
    <div class="suste_box">
        <div class="inner">
            <div class="ph fade">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/contri_ph019.jpg" alt="">
            </div>
            <div class="txt fade">
                ガーデンズ千早　1F「つながるマルシェ」では、木材を多用した暖かな空間となっています。ここで使用している木材は、森林維持・林業活性の取り組みの一貫として、株式会社八女流の木材を使用しています。
            </div>
        </div>
        <div class="inner">
            <div class="ph fade">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/contri_ph020.jpg" alt="">
            </div>
            <div class="txt fade">
                ちはや公園では、一般的な広葉樹よりもCO2の吸収能力が約3倍高いと言われている、サステナブルな木材「センダンの木」を植えています。
            </div>
        </div>
    </div>
</div>
<!-- スポーツ応援 -->
<div id="suste" class="corpbox">
    <div class="headttl">
        <div class="logo">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/contri_icon3.jpg" alt="">
        </div>
        <div class="txt">
            <div class="jp">
                ガーデンズ千早は、地元スポーツを応援しています
            </div>
            <div class="en">
                　
            </div>
        </div>
    </div>
    <div class="suste_box">
        <div class="copy fade">
            ガーデンズ千早では地元スポーツをみんなで盛り上げるべく、イベントなどを通してスポーツ選手と交流する場を積極的につくり、地域で育つ子どもたちに夢や希望を与えたいと考えています。
        </div>
        <div class="inner">
            <div class="ph fade">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/contri_ph021.jpg" alt="">
            </div>
            <div class="txt fade">
                福岡トライアスロン キックオフイベント
            </div>
        </div>
        <div class="inner">
            <div class="ph fade">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/image/contri_ph022.jpg" alt="">
            </div>
            <div class="txt fade">
                otonari福岡サンズ 交流イベント
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>