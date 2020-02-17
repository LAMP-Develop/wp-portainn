<?php
/**
* The main template file
* @package WordPress
* @subpackage
*/

$home = esc_url(home_url());
$wp_url = get_template_directory_uri();

get_header();
$locale = get_locale(); ?>
<div class="index-kv">
<div class="txt">
<p><span>「暮せるホテル」</span>
<br>ポルタイン九条レジデンス
<br><span class="eng">Portainn Kujou Residencs</span></p>
<p>2020年　　月　　日<br class="sp-only">グランドオープン</p>
<p>大阪メトロ中央線「九条駅」⑥番出口　徒歩1分</p>
<h1>1泊はもちろん長期滞在にも最適なレジデンス仕様。大阪ベイエリア（USJ・海遊館）や京セラドーム大阪のコンサート＆イベント、レジャー利用に。
<br class="sp-only">また中央線「本町駅」まで2駅（８分）とビジネスの拠点にも最適。
</h1>
<!-- <p>レジャー、<br>ビジネスの拠点に。</p> -->
<!-- <h1>大阪メトロ中央線・阪神電車で本町、難波、海遊館へ直結</h1> -->
</div>
<div class="slide-kv">
<div class="slide-view slide01"></div>
</div>
</div>

<div class="index-concept">
<div class="inner">
<h2>「暮らせるホテル」</h2>
<p>各客室にはシステムキッチン、電子レンジ、大型冷蔵庫、大容量クローゼット、<br>ドラム型乾燥機付コインランドリー（一部）といった設備を備え、<br>1泊はもちろんのこと長期滞在の場合にも快適にお過ごしいただけます。</p>
</div>
</div><!-- /.index-concept -->

<div class="index-room">
<div class="inner">
<div class="ttl-bloc">
<h2 class="eng"><span>客室</span></h2>
<p>PORTA INN九条レジデンスでは、<br>3パターンのお部屋をご用意し、お客様をお待ちしております。</p>
</div>
<div class="slide-room">
<?php
$args = ['post_type' => 'room', 'numberposts' => 3];
$posts = get_posts($args);
if ($posts):
foreach ($posts as $post):
setup_postdata($post);
$id = get_the_ID();
$ttl = get_the_title();
$content = mb_strimwidth(strip_tags(get_the_content()), 0, 80, '...');
if (has_post_thumbnail()) {
    $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'large');
}
?>
<div class="room">
<div class="img">
<img src="<?php echo $thumbnail; ?>" alt="<?php echo $ttl; ?>">
</div>
<div class="txt">
<h3><?php echo $ttl; ?></h3>
<p><?php echo $content; ?></p>
<p>room size ｜ <?php echo get_post_meta($id, 'size', true); ?>㎡</p>
</div>
</div><!-- /.room -->
<?php endforeach; endif; wp_reset_postdata(); ?>
</div>
<div class="btn">
<a href="<?php echo $home; ?>/room/"><i class="fas fa-chevron-circle-right"></i>全ての客室を見る</a>
</div>
</div>
</div><!-- /.index-room -->

<div class="index-near bg-ptn1">
<div class="inner">
<div class="ttl-bloc">
<h2 class="eng"><span>周辺施設</span></h2>
<p>当館周辺にはコンビニや商店街、飲食店があり、<br>ご滞在中の利便性をより一層引き上げます。</p>
</div>
</div>
<ul class="slide-near">
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/near-kuromon.jpg" alt="黒門市場"></dt>
<dd>黒門市場<br>4.6km</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/near-abeno.jpg" alt="あべのハルカス"></dt>
<dd>あべのハルカス<br>6.5km</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/near01.jpg" alt="USJ"></dt>
<dd>USJ<br>3.9km</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/near02.jpg" alt="海遊館"></dt>
<dd>海遊館<br>4.3km</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/near03.jpg" alt="天保山大観覧車"></dt>
<dd>天保山大観覧車<br>4.2km</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/near04.jpg" alt="京セラドーム"></dt>
<dd>京セラドーム<br>1.5km</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/near05.jpg" alt="大阪市下水道科学館"></dt>
<dd>大阪市下水道科学館<br>3.3km</dd>
</dl></li>
</ul>
</div><!-- /.index-near -->

<div class="index-guide">
<div class="inner">
<div class="ttl-bloc">
<h2 class="eng"><span>館内案内</span></h2>
<p>システムキッチン、大型冷蔵庫、ドラム型乾燥機付コインランドリー（一部）を設置し、<br>マンションタイプならではのバスルームとトイレはセパレートです。</p>
</div>
<div class="view">
<div><iframe src="https://www.google.com/maps/embed?pb=!4v1562040010529!6m8!1m7!1sCAoSLEFGMVFpcFB6ZWkwMHlENUd6b0ROYVplcnFxOWVvcG4ybnRYdkF1VS1HTS1a!2m2!1d34.669894193236!2d135.46309258115!3f13.436730133372464!4f-5.955435915357995!5f0.7820865974627469" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe></div>
</div>
<div class="view-btn">
<a href="https://goo.gl/maps/EEngFh4r1echTtSb7"><i class="fas fa-chevron-circle-right"></i>　ストリートビューを見る</a>
</div>
<ul class="slide-guide">
<?php if ('en_US' == $locale) { ?>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide01.jpg" alt="Reception Desk"></dt>
<dd>Reception Desk</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide02.jpg" alt="Appearance"></dt>
<dd>Appearance</dd>
</dl></li>
<li><dl>
<dt><a target="_blank" href="https://www.anytimefitness.co.jp/bentencho/"><img src="<?php echo get_template_directory_uri(); ?>/img/guide03.jpg" alt="24-hour Fitness Gym"></a></dt>
<dd>24-hour Fitness Gym</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide04.jpg" alt="Laundromat"></dt>
<dd>Laundromat</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide05.jpg" alt="Others"></dt>
<dd>Others</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide01.jpg" alt="Reception Desk"></dt>
<dd>Reception Desk</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide02.jpg" alt="Appearance"></dt>
<dd>Appearance</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide03.jpg" alt="24-hour Fitness Gym"></dt>
<dd>24-hour Fitness Gym</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide04.jpg" alt="Laundromat"></dt>
<dd>Laundromat</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide05.jpg" alt="Others"></dt>
<dd>Others</dd>
</dl></li>
<?php } elseif ('ko_KR' == $locale) { ?>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide01.jpg" alt="접수"></dt>
<dd>접수</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide02.jpg" alt="외관"></dt>
<dd>외관</dd>
</dl></li>
<li><dl>
<dt><a target="_blank" href="https://www.anytimefitness.co.jp/bentencho/"><img src="<?php echo get_template_directory_uri(); ?>/img/guide03.jpg" alt="24시간 피트니스 "></a></dt>
<dd>24시간 피트니스 </dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide04.jpg" alt="코인 세탁기"></dt>
<dd>코인 세탁기</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide05.jpg" alt="그 외"></dt>
<dd>그 외</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide01.jpg" alt="접수"></dt>
<dd>접수</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide02.jpg" alt="외관"></dt>
<dd>외관</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide03.jpg" alt="24시간 피트니스 "></dt>
<dd>24시간 피트니스 </dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide04.jpg" alt="코인 세탁기"></dt>
<dd>코인 세탁기</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide05.jpg" alt="그 외"></dt>
<dd>그 외</dd>
</dl></li>
<?php } elseif ('zh_CN' == $locale) { ?>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide01.jpg" alt="受理"></dt>
<dd>受理</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide02.jpg" alt="外观"></dt>
<dd>外观</dd>
</dl></li>
<li><dl>
<dt><a target="_blank" href="https://www.anytimefitness.co.jp/bentencho/"><img src="<?php echo get_template_directory_uri(); ?>/img/guide03.jpg" alt="24小时健身房"></a></dt>
<dd>24小时健身房</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide04.jpg" alt="投币式洗衣机"></dt>
<dd>投币式洗衣机</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide05.jpg" alt="其他"></dt>
<dd>其他</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide01.jpg" alt="受理"></dt>
<dd>受理</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide02.jpg" alt="外观"></dt>
<dd>外观</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide03.jpg" alt="24小时健身房"></dt>
<dd>24小时健身房</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide04.jpg" alt="投币式洗衣机"></dt>
<dd>投币式洗衣机</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide05.jpg" alt="其他"></dt>
<dd>其他</dd>
</dl></li>
<?php } elseif ('zh_TW' == $locale) { ?>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide01.jpg" alt="櫃檯"></dt>
<dd>櫃檯</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide02.jpg" alt="外觀"></dt>
<dd>外觀</dd>
</dl></li>
<li><dl>
<dt><a target="_blank" href="https://www.anytimefitness.co.jp/bentencho/"><img src="<?php echo get_template_directory_uri(); ?>/img/guide03.jpg" alt="24 小時健身房"></a></dt>
<dd>24 小時健身房</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide04.jpg" alt="自助洗衣服"></dt>
<dd>自助洗衣服</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide05.jpg" alt="其他"></dt>
<dd>其他</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide01.jpg" alt="櫃檯"></dt>
<dd>櫃檯</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide02.jpg" alt="外觀"></dt>
<dd>外觀</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide03.jpg" alt="24 小時健身房"></dt>
<dd>24 小時健身房</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide04.jpg" alt="自助洗衣服"></dt>
<dd>自助洗衣服</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide05.jpg" alt="其他"></dt>
<dd>其他</dd>
</dl></li>
<?php } else { ?>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide01.jpg" alt="受付"></dt>
<dd>受付</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide02.jpg" alt="外観"></dt>
<dd>外観</dd>
</dl></li>
<li><dl>
<dt><a target="_blank" href="https://www.anytimefitness.co.jp/bentencho/"><img src="<?php echo get_template_directory_uri(); ?>/img/guide03.jpg" alt="24時間フィットネス"></a></dt>
<dd>24時間フィットネス</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide04.jpg" alt="コインランドリー"></dt>
<dd>コインランドリー</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide05.jpg" alt="その他"></dt>
<dd>その他</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide01.jpg" alt="受付"></dt>
<dd>受付</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide02.jpg" alt="外観"></dt>
<dd>外観</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide03.jpg" alt="24時間フィットネス"></dt>
<dd>24時間フィットネス</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide04.jpg" alt="コインランドリー"></dt>
<dd>コインランドリー</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide05.jpg" alt="その他"></dt>
<dd>その他</dd>
</dl></li>
<?php } ?>
</ul>
<?php if ('en_US' == $locale) { ?>
<div class="btn"><a href="<?php echo esc_url(home_url('/')); ?>facilities/"><i class="fas fa-chevron-circle-right"></i>Hotel Tour</a></div>
<?php } elseif ('ko_KR' == $locale) { ?>
<div class="btn"><a href="<?php echo esc_url(home_url('/')); ?>facilities/"><i class="fas fa-chevron-circle-right"></i>관내 안내</a></div>
<?php } elseif ('zh_CN' == $locale) { ?>
<div class="btn"><a href="<?php echo esc_url(home_url('/')); ?>facilities/"><i class="fas fa-chevron-circle-right"></i>酒店内介绍</a></div>
<?php } elseif ('zh_TW' == $locale) { ?>
<div class="btn"><a href="<?php echo esc_url(home_url('/')); ?>facilities/"><i class="fas fa-chevron-circle-right"></i>館內介紹</a></div>
<?php } else { ?>
<div class="btn"><a href="<?php echo esc_url(home_url('/')); ?>facilities/"><i class="fas fa-chevron-circle-right"></i>館内のご案内</a></div>
<?php } ?>
</div>
</div><!-- /.index-guide -->

<div class="index-access">
<div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.178313802778!2d135.4727088147338!3d34.67544884207879!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e64c389873ff%3A0xe9ceadd0d21a8901!2z44CSNTUwLTAwMjcg5aSn6Ziq5bqc5aSn6Ziq5biC6KW_5Yy65Lmd5p2h77yR5LiB55uu77yR77yT!5e0!3m2!1sja!2sjp!4v1581582025028!5m2!1sja!2sjp" allowfullscreen></iframe>
</div>
<div class="info">
<p>〒550-0027　大阪市西区九条1-13-22<br>TEL：06-6581-5000</p>
<p>大阪メトロ中央線九条駅⑥番出口徒歩1分<br>阪神電車なんば線九条駅①番出口徒歩３分</p>
<p class="btn-view"><a href="https://goo.gl/maps/VAiYUyQJeLmuTeJp6" target="_blank">GoogleMAPで見る</a></p>
</div>
</div><!-- /.index-access -->

<div class="index-news">
<div class="inner">
<div class="ttl-bloc">
<h2 class="eng">ニュース</h2>
<p><a href="<?php echo esc_url(home_url('/')); ?>news/"><i class="fas fa-chevron-circle-right"></i>　一覧を見る</a></p>
</div>
<ul class="news-topics">
<?php
$posts = get_posts(['posts_per_page' => 3, 'category_name' => 'news']);
foreach ($posts as $post): setup_postdata($post); ?>
<li>
<a href="<?php the_permalink(); ?>">
<time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('Y.m.d') ?></time>
<p><span><?php the_title(); ?></span><i class="fas fa-chevron-circle-right"></i></p>
</a>
</li>
<?php endforeach; wp_reset_postdata(); ?>
</ul>
</div>
</div><!-- /.index-news -->

<?php get_footer();
