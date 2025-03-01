<?php
/**
 * Template part for displaying posts in an archive brand
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Dtearsd Package
 * @since 1.0.0
 */





?><article id="post-<?php the_ID(); ?>" <?php post_class("project-box column-box column"); ?>>
    <div class="project-image image-cover">
        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
    </div>
    <div class="section-head max-width-80 center-align">
        <h3 class="heading-5"><?php the_title(); ?></h3>
        <p>
            <?php echo dawat_excerpt_nomore( 130 ); ?> 
        </p>
        <div class="course-btn">
            <a href="<?php the_permalink(); ?>" class="button"><span>مزید تفصیل</span></a>
        </div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->



