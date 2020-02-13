<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div class="kv" id="kv-news">
	<div class="inner-kv">
		<h2 class="eng">NEWS</h2>
    <?php if ('en_US' == $locale  ) { ?>
            <p>Latest Update</p>
    <?php }elseif ('ko_KR' == $locale  ){ ?>
      	   <p>신착정보</p>
    <?php }elseif ('zh_CN' == $locale  ){ ?>
      			<p>新消息</p>
    <?php }elseif ('zh_TW' == $locale  ){ ?>
      		  <p>最新情報</p>
    <?php }else{ ?>
    		    <p>新着情報</p>
    <?php } ?>
	</div>
</div>
<div class="fixBtn">
	<a target="_blank" href="https://portainn.jp/search/">
    <?php if ('en_US' == $locale  ) { ?>
            <span>Search</span>
    <?php }elseif ('ko_KR' == $locale  ){ ?>
      	   <span>객실 검색</span>
    <?php }elseif ('zh_CN' == $locale  ){ ?>
      			<span>搜索空房</span>
    <?php }elseif ('zh_TW' == $locale  ){ ?>
      		  <span>查詢空房</span>
    <?php }else{ ?>
    		    <span>空室検索</span>
    <?php } ?>
	</a>
</div>

<div class="wrap">
	<div class="news-ctn">
		<div class="inner">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
		?>
			<div class="article-ttl">
					<p>
						<span class="date"><?php the_date('Y.m.j'); ?></span>
						<span class="tag"><?php $get_tags = get_the_tags();
							if ($get_tags) {
								foreach($get_tags as $tag) {
									echo $tag->name;
								}
							}
						?></span>
					</p>
					<h2><?php the_title(); ?></h2>
			</div>
			<div class="article-ctn">
				<?php the_content(); ?>
			</div>
		<?php
		// End of the loop.
		endwhile;
		?>

			<div class="btn"><a href="<?php echo esc_url( home_url( '/' ) ); ?>news/">一覧に戻る</a></div>
		</div>
	</div>
</div><!-- /.wrap -->

<?php /* get_sidebar(); */ ?>
<footer id="ft">
	<div class="inner-ft">
		<h3><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="PORTA INN - bentencho"></a></h3>
    <?php if ('en_US' == $locale  ) { ?>
    		<p>Check Porta inn availability</p>
    		<div class="btn-search">
    			<a target="_blank" href="https://portainn.jp/search/"><span>Search</span></a>
    		</div>
    <?php }elseif ('ko_KR' == $locale  ){ ?>
    		<p>토르타인호텔의 객실 확인</p>
    		<div class="btn-search">
    			<a target="_blank" href="https://portainn.jp/search/"><span>객실 검색</span></a>
    		</div>
    <?php }elseif ('zh_CN' == $locale  ){ ?>
    		<p>确认Porta inn酒店的空房</p>
    		<div class="btn-search">
    			<a target="_blank" href="https://portainn.jp/search/"><span>搜索空房</span></a>
    		</div>
    <?php }elseif ('zh_TW' == $locale  ){ ?>
    		<p>PORTA HOTEL 確認空房</p>
    		<div class="btn-search">
    			<a target="_blank" href="https://portainn.jp/search/"><span>查詢空房</span></a>
    		</div>
    <?php }else{ ?>
    		<p>ポルタインホテルの空室を確認する</p>
    		<div class="btn-search">
    			<a target="_blank" href="https://portainn.jp/search/"><span>空室検索</span></a>
    		</div>
    <?php } ?>
	</div>
	<div class="pagetop"><a class="scrl" href="#container">TOP</a></div>
</footer><!-- /#ft -->

<?php get_footer(); ?>
