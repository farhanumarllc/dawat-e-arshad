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

?><article id="post-<?php the_ID(); ?>" <?php post_class("event-item column-box column"); ?>>


    <div class="event-item-inner">
        <div class="event-video">
            <a <?php if($dtearsd_cpt_event_video_url){ ?> href="<?php echo $dtearsd_cpt_event_video_url; ?>" <?php } ?>
                class="video-popup-link" style="
background-image: url(<?php echo $src; ?>);">
                <div class="video-icon">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/video-play-icon.svg" alt="Play icon">
                </div>
            </a>
        </div>
        <div class="event-content">
            <?php  if (!empty($dtearsd_post_categories) && !is_wp_error($dtearsd_post_categories)) { ?>
					<div class="event-category">
					<?php
					$category_links = array();

					foreach ($dtearsd_post_categories as $category) {
						$category_links[] = '<a href="' . esc_url(get_term_link($category)) . '">' . esc_html($category->name) . '</a>';
					}

					// Join the links with a comma separator
					echo implode(', ', $category_links);
					?>
 					</div>
					<?php
				}
				?>
           
            <p><?php echo dawat_excerpt_nomore( 130 ); ?></p>
            <h3 class="heading-6">
                <a href="#"><?php the_title(); ?></a>
            </h3>
            <div class="event-btn">
                <a href="<?php the_permalink(); ?>" class="button"><span>مزید تفصیل
                </span></a>
            </div>
        </div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->



