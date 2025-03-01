<?php
/**
 * Template part for displaying posts in an archive course
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

?><article id="post-<?php the_ID(); ?>" <?php post_class("course-item column column-box"); ?>>
    <div class="course-image image-cover">
        <img src="<?php echo $src; ?>" alt="<?php the_title(); ?>">
    </div>
    <div class="course-content">
        <h3 class="heading-5"><?php the_title(); ?></h3>
        <p>
            <?php echo dawat_excerpt_nomore( 130 ); ?>
        </p>
        <div class="course-btn">
            <a href="<?php the_permalink(); ?>" class="button"><span>مزید تفصیل</span></a>
        </div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->



