<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
?>

<div class="foot-link">
  <div class="wrap">
    <a href="<?php echo $home; ?>/facilities/">
      <img src="<?php echo $wp_url; ?>/img/icon01.svg" alt="facilities">
      <span>館内のご案内</span>
    </a>
    <a href="<?php echo $home; ?>/access/">
      <img src="<?php echo $wp_url; ?>/img/icon02.svg" alt="access">
      <span>交通アクセス</span>
    </a>
  </div>
</div>