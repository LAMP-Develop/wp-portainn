<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage
 */

$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
?>

<footer id="ft">
<div class="inner-ft">
<h2>
<a href="<?php echo $home; ?>">
<img src="<?php echo $wp_url; ?>/img/logo_white.png" alt=""></a>
</h2>
<p>ポルタインホテルの空室を確認する</p>
<div class="btn btn-white">
<a href="#"><i class="fas fa-chevron-circle-right"></i>すべての客室を見る</a>
</div>
</div>
<div class="links">
<div class="pages">
<a href="#"><i class="fas fa-chevron-circle-right"></i>客室のご案内</a>
<a href="#"><i class="fas fa-chevron-circle-right"></i>館内のご案内</a>
<a href="#"><i class="fas fa-chevron-circle-right"></i>交通アクセス</a>
<a href="#"><i class="fas fa-chevron-circle-right"></i>お知らせ</a>
<a href="#"><i class="fas fa-chevron-circle-right"></i>お問い合わせ</a>
</div>
<div class="language">
<a href="#">English</a>
<a href="#">日本語</a>
<a href="#">한국어</a>
<a href="#">简体中文</a>
<a href="#">繁體中文</a>
</div>
</div>
</footer><!-- /#ft -->

<address class="cr">&copy; 2019 PORTA INN Bentencho</address>
</div><!-- /#wrapper -->
</div><!-- /container -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slick.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

<?php wp_footer(); ?>
</body>
</html>
