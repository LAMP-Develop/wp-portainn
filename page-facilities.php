<?php
/*
Template name: 館内案内
*/
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header();
?>

<div class="kv" id="kv-facilities">
<div class="inner-kv">
</div>
</div>

<div class="wrap">

<div class="hall-equipment">
<div class="txt">
<h3>館内案内</h3>
<p>フロントにアメニティバイキングを設けておりますので、用途に合わせご自由にお取りください。
<br>チェックイン 15：00～24：00（※）
<br>チェックアウト 10:00
<br>※フロントサービス 6：00~24：00
<br>※一度チェックインの手続きをしていただくと、滞在中の外出は専用出入口をご利用いただけます。</p>
<h4>館内設備</h4>
<ul>
<li>ドラム型乾燥機付コインランドリー</li>
<li>飲料自動販売機</li>
</ul>
</div>
<div class="img">
<img src="<?php echo $wp_url; ?>/img/equipment.png" alt="館内設備">
</div>
</div>
</div>

<div class="wrap">
<div class="appearance">
<h3 class="ttl3"><span>館内の様子</span></h3>
<div class="appearances">
<div class="content">
<img src="<?php echo $wp_url; ?>/img/appearance.png" alt="">
<h4>朝食コーナー</h4>
</div>
<div class="content">
<img src="<?php echo $wp_url; ?>/img/appearance.png" alt="">
<h4>朝食コーナー</h4>
</div>
<div class="content">
<img src="<?php echo $wp_url; ?>/img/appearance.png" alt="">
<h4>朝食コーナー</h4>
</div>
<div class="content">
<img src="<?php echo $wp_url; ?>/img/appearance.png" alt="">
<h4>朝食コーナー</h4>
</div>
</div>
</div>

<div class="wrap fitness">
    <img src="<?php echo $wp_url; ?>/img/appearance.png" alt="">
    <div class="">
      <h3>フィットネスジム<br>利用無料サービス(24時間）</h3>
      <h4>エニタイムフィットネス弁天町店</h4>
      <p>当館より電車で1駅5分（当館レンタルサイクルにて10分）<br>滞在中、何度でも利用可能。<br>※長期滞在（5泊以上）のお客様のみ。</p>
    </div>
</div>

<div class="other-appearance">
<div class="content">
<h4>客室備品</h4>
<ul>
<li>ＴＶ（32型）</li>
<li>インターフォン</li>
<li>加湿機能付空気清浄機</li>
<li>電子レンジ</li>
<li>大型冷蔵庫</li>
<li>ドラム型乾燥機付<br>コインランドリー（一部）</li>
<li>ケトル</li>
<li>マグカップ</li>
<li>ドライヤー</li>
<li>ハンガー</li>
<li>靴べら</li>
<li>傘立て</li>
</ul>
</div>
<div class="content">
<h4>アメニティ</h4>
<ul>
<li>シャンプー</li>
<li>コンディショナー</li>
<li>ボディソープ</li>
<li>歯ブラシ</li>
<li>バスタオル</li>
<li>フェイスタオル</li>
<li>スリッパ</li>
<li>ナイトウェア</li>
</ul>
</div>
<div class="content">
<h4>サービス</h4>
<ul>
<li>宅急便（着払いのみ）</li>
<li>※レンタルサイクル</li>
<li>※コンシェルジュサービス</li>
<li>（クリーニング保管・荷物預かり）</li>
</ul>
</div>
<div class="content">
<h4>貸出品</h4>
<ul>
<li>携帯充電器</li>
<li>アイロン・アイロン台</li>
<li>つめ切り</li>
<li>体温計</li>
<li>※キッチンセット</li>
</ul>
</div>
</div>

</div>
<?php get_template_part('foot-link'); ?>
<?php get_footer();
