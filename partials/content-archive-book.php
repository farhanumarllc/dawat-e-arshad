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
 	
    if (function_exists('get_fields') && function_exists('get_fields_escaped')) {
        $post_fields = get_fields_escaped( $post_id );
    }
    $dtearsd_cpt_book_author = ( isset( $post_fields['dtearsd_cpt_book_author'] ) && '' !== $post_fields['dtearsd_cpt_book_author'] ) ? $post_fields['dtearsd_cpt_book_author'] : null;
    if(has_post_thumbnail()){
    	$src = get_the_post_thumbnail_url( $post_id , 'thumb_400');
    }else{
    	$src = esc_url( get_template_directory_uri() ) . '/assets/img/defaults/default-image.webp';
    }
?><article id="post-<?php the_ID(); ?>" <?php post_class("book-link column column-box"); ?>>
        <div class="book-image image-cover">
            <img src="<?php echo $src; ?>" alt="<?php the_title(); ?>">
        </div>
        <div class="book-content">
            <?php if($dtearsd_cpt_book_author){ ?>
            <div class="book-category">
                <a href="<?php the_permalink(); ?>"> <?php echo $dtearsd_cpt_book_author; ?></a>
            </div>
            <?php } ?>
            <div class="book-title">
                <h3 class="heading-6"><?php the_title(); ?></h3>
            </div>
            <p><?php echo dawat_excerpt_nomore( 130 ); ?></p>
            <div class="book-btn">
                <a href="<?php the_permalink(); ?>" class="button read-more-btn"><span>کتاب کھولیں</span></a>
                <a href="<?php the_permalink(); ?>" class="button outline-btn download-btn"><span>ڈاونلوڈ</span></a>
            </div>
        </div>
        <!-- <div class="book-popup mfp-hide" id="book-link-<?php //echo $post_id; ?>">
            <iframe src="www.e-maktaba.org.html" frameborder="0"></iframe>
        </div> -->
</article><!-- #post-<?php the_ID(); ?> -->



