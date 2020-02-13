<?php
/*
Template name: 交通アクセス
*/
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header();
?>

<div class="kv" id="kv-access">
<div class="inner-kv">
</div>
</div>

<div class="wrap">
  <h3 class="ttl3"><span>電車のご利用をお考えのかたへ</span></h3>
  <div class="trains">
    <div>
      <h4><img src="<?php echo $wp_url; ?>/img/train.svg" alt="電車">阪神電車をご利用の場合</h4>
      <img src="<?php echo $wp_url; ?>/img/train01.png" alt="電車">
      <p>なんば線九条駅①番出口徒歩３分</p>
    </div>
    <div>
      <h4><img src="<?php echo $wp_url; ?>/img/train.svg" alt="電車">大阪メトロをご利用の場合</h4>
      <img src="<?php echo $wp_url; ?>/img/train01.png" alt="電車">
      <p>中央線⑥番出口徒歩１分</p>
    </div>
  </div>
</div>

<div class="wrap">
  <h3 class="ttl3"><span>お車のご利用をお考えのかたへ</span></h3>
  <div class="cars">
    <div>
      <h4>大阪空港から</h4>
      <img src="<?php echo $wp_url; ?>/img/car.svg" alt="お車">
      <p>阪神高速16号大阪港線<br>「九条」出口から１分</p>
    </div>
    <div>
      <h4>堺方面から</h4>
      <img src="<?php echo $wp_url; ?>/img/car.svg" alt="お車">
      <p>阪神高速17号西大阪線<br>「弁天町」出口５分</p>
    </div>
    <div>
      <h4>関空国際空港、USJから</h4>
      <img src="<?php echo $wp_url; ?>/img/car.svg" alt="お車">
      <p>阪神高速１６号線大阪港線<br>「波除」出口から５分</p>
    </div>
  </div>
  <p class="txt-c">※駐車場はございません。近隣のコインパーキングをご利用下さいませ</p>
</div>
<?php get_template_part('foot-link'); ?>
<?php get_footer();