<?php
/**
 * Template part for displaying posts in an archive course
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Dtearsd Package
 * @since 1.0.0
 */

 // Global variables.
 global $post_id;
 global $post_fields;
 $post_id         = get_the_ID();

if (function_exists('get_fields') && function_exists('get_fields_escaped')) {
	$post_fields = get_fields_escaped( $post_id );
}
   $dtearsd_cpt_event_video_url = ( isset( $post_fields['dtearsd_cpt_event_video_url'] ) && '' !== $post_fields['dtearsd_cpt_event_video_url'] ) ? $post_fields['dtearsd_cpt_event_video_url'] : null;
    $dtearsd_post_categories = wp_get_post_terms($post_id, 'events');

    if(has_post_thumbnail()){
    $src = get_the_post_thumbnail_url( $post_id , 'thumb_400');
    }else{
    $src = esc_url( get_template_directory_uri() ) . '/assets/img/defaults/default-image.webp';
    }

?><article id="post-<?php the_ID(); ?>" <?php post_class("project-box column-box column"); ?>>
    <div class="project-image image-cover">
        <img src="<?php echo $src; ?>" alt="<?php the_title(); ?>">
    </div>
    <div class="project-content">
        <h3 class="heading-4">
            <?php the_title(); ?>
        </h3>
        <p><?php echo dawat_excerpt_nomore( 130 ); ?></p>
        <div class="project-btn">
            <a href="<?php the_permalink(); ?>" class="button"><span>مزید تفصیل</span></a>
        </div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->



