<?php
/**
* The template for displaying pages
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages and that
* other "pages" on your WordPress site will use a different template.
*
* @package WordPress
* @subpackage Twenty_Sixteen
* @since Twenty Sixteen 1.0
*/

get_header(); ?>

<div class="kv" id="kv-<?php echo get_post($wp_query->post->ID)->post_name; ?>">
<div class="inner-kv">
<h2 class="eng">
<?php
if( is_page('facilities') ): echo('FACILITIES');
elseif( is_page('access') ): echo('ACCESS');
elseif( is_page('contact') ): echo('CONTACT');
endif;
?>
</h2>
<?php if ('en_US' == $locale  ) { ?>
<?php }else{ ?>
<hr>
<p><?php the_title(); ?></p>
<?php } ?>
</div>
</div>

<div class="wrap">

<?php
// Start the loop.
while ( have_posts() ) : the_post();

// Include the page content template.
the_content();

// End of the loop.
endwhile;
?>

</div><!-- .wrap -->

<?php get_footer();
