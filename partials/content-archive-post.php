<?php
/**
 * Template part for displaying posts in an archive
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Dtearsd Package
 * @since 1.0.0
 */

	$post_id = get_the_ID();
 	if(has_post_thumbnail()){
    	$src = get_the_post_thumbnail_url( $post_id , 'thumb_400');
    }else{
    	$src = esc_url( get_template_directory_uri() ) . '/assets/img/defaults/default-image.webp';
    }
?> <article id="post-<?php the_ID(); ?>" <?php post_class("column"); ?>>
	<a href="<?php the_permalink(); ?>" class="blog-article">
		<div class="blog-article-inner column-box">
			<img src="<?php echo $src; ?>" alt="<?php the_title(); ?>">
			<h3 class="heading-4">
				<?php the_title(); ?>
			</h3>
			<p>
				<?php echo dawat_excerpt_nomore( 130 ); ?> 
			</p>
			<div class="blog-article-btn">
				<span class="button"><span>مزید پڑھیں</span></span>
			</div>
		</div>
	</a>	
</article><!-- #post-<?php the_ID(); ?> -->
