<?php
/**
 * Block Name: Our Course
 *
 * The template for displaying the custom gutenberg block named Our Course.
 *
 * @link https://www.advancedcustomfields.com/resources/blocks/
 *
 * @package Dtearsd Package
 * @since 1.0.0
 */

// Get all the fields from ACF for this block ID
// $block_fields = get_fields( $block['id'] );
$block_fields = get_fields_escaped( $block['id'] );
// $block_fields = get_fields_escaped( $block['id'] ,'sanitize_text_field' ); // if want to remove all html


// Set the block name for it's ID & class from it's file name
$block_dawat_name = $block['name'];
$block_dawat_name = str_replace("acf/" , "" , $block_dawat_name);

// Set the preview thumbnail for this block for gutenberg editor view.
if( isset( $block['data']['preview_image_help'] )  ) {    /* rendering in inserter preview  */
	echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';
}

// create align class ("alignwide") from block setting ("wide").
$align_class = $block['align'] ? 'align' . $block['align'] : '';

// Get the class name for the block to be used for it.
$class_name = (isset($block['className'])) ? $block['className'] : null;

// Making the unique ID for the block.
$id = 'block-' .$block_dawat_name . "-" . $block['id'];

// Making the unique ID for the block.
if($block['name']){
	$block_name = $block['name'];
	$block_name = str_replace("/" , "-" , $block_name);
	$name = 'block-' .  $block_name;
}

// Block variables
// $dtearsd_blk_btn_variation = (isset($block_fields['dtearsd_blk_btn_variation'])) ? $block_fields['dtearsd_blk_btn_variation'] : null;
$event_relationship = ( isset( $block_fields['event_relationship'] ) && '' !== $block_fields['event_relationship'] ) ? $block_fields['event_relationship'] : null;
$block_event_title = ( isset( $block_fields['block_event_title'] ) && '' !== $block_fields['block_event_title'] ) ? $block_fields['block_event_title'] : null;
$block_event_url = ( isset( $block_fields['block_event_url'] ) && '' !== $block_fields['block_event_url'] ) ? $block_fields['block_event_url'] : null;
$dtearsd_cpt_event_video_url = ( isset( $post_fields['dtearsd_cpt_event_video_url'] ) && '' !== $post_fields['dtearsd_cpt_event_video_url'] ) ? $post_fields['dtearsd_cpt_event_video_url'] : null;
?>
<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name. ' ' . $name; ?> dawat-block-<?php echo $block_dawat_name; ?>">

<section class="green-ctn">
                <div class="s-96"></div>
                <div class="wrapper">
                    <div class="events-ctn">
                        <div class="section-head center-align">
                            <h2 class="heading-2">تقریبات</h2>
                        </div>
                        <div class="s-48"></div>
                        <div class="event-items d-flex">
							<?php global $post;
						$lp_select_posts = array();
						$lp_select_posts = $event_relationship;
						if ( $lp_select_posts ) {
							foreach ( $lp_select_posts as $lp_posts ) {
								$post = $lp_posts;
								setup_postdata( $post );
								$post_id         = $post->ID;
								$post_fields = get_fields( $post_id );
								// $custom_field  = $post_fields['custom_field'];
								if(has_post_thumbnail()){
								$src = get_the_post_thumbnail_url( $post_id , 'thumb_600');
								}else{
								$src = esc_url( get_template_directory_uri() ) . '/assets/build/images/admin/defaults/default-image.webp';
								}
						
						
						?> 
                            <div class="event-left-column column-68">
                                <div class="event-item column-box feature-event">
                                    <div class="event-item-inner">
                                        <div class="event-video">
    <a <?php if($dtearsd_cpt_event_video_url){ ?> href=" <?php echo $dtearsd_cpt_event_video_url; ?>" class="video-popup-link" style="background-image: url('<?php echo $src; ?>');">
        <div class="video-icon">
            <img src=" echo esc_url( get_template_directory_uri() ); ?>/assets/img/video-play-icon.svg" alt="Play icon">
        </div>
    </a>
</div>
                                        <div class="event-content">
                                            <div class="event-category">
                                                <a href="<?php echo get_the_permalink();?>"><?php the_category(); ?> </a>
                                            </div>
                                            <h3 class="heading-5">
                                                <a href="#">  <?php the_title();?></a>
                                            </h3>
                                            <p>
												<?php echo dawat_excerpt_nomore(150); ?>
                                            </p>
                                            <div class="event-btn">
                                                <a href="<?php echo get_the_permalink();?>" class="button"><span>مزید تفصیل</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<?php }} wp_reset_postdata();?>
                            <div class="event-right-column column-30">
                                <div class="event-item column-box">
                                    <div class="event-item-inner">
                                        <div class="event-video">
                                            <a href="https://www.youtube.com/watch?v=LuQhefyfGpI" class="video-popup-link" style="
                                background-image: url(../assets/img/uploads/Khatme-nabuwat-image-3.webp);">
                                                <div class="video-icon">
                                                    <img src="../assets/img/video-play-icon.svg" alt="Play icon">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="event-content">
                                            <div class="event-category">
                                                <a href="#">فتح مباہلہ</a>
                                            </div>
                                            <h3 class="heading-6">
                                                <a href="#">فتح مباہلہ کانفرنس 2023</a>
                                            </h3>
                                            <div class="event-btn">
                                                <a href="#" class="button"><span>مزید تفصیل</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="s-48"></div>
                        <div class="block-button center-align">
                            <a href="events.html" class="button"><span>مزید تقریبات</span></a>
                        </div>
                    </div>
                </div>
                <div class="s-96"></div>
            </section>






</div>
