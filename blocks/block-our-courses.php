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
$block_our_course_title = ( isset( $block_fields['block_our_course_title'] ) && '' !== $block_fields['block_our_course_title'] ) ? $block_fields['block_our_course_title'] : null;
$block_our_course_select_courses = ( isset( $block_fields['block_our_course_select_courses'] ) && '' !== $block_fields['block_our_course_select_courses'] ) ? $block_fields['block_our_course_select_courses'] : null;
?>
<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name. ' ' . $name; ?> dawat-block-<?php echo $block_dawat_name; ?>">
<section>
                <div class="wrapper">
                    <div class="course-ctn">
                        <div class="section-head center-align">
							<?php if ( $block_our_course_title ) { ?>
								<h2 class="heading-2"><?php echo $block_our_course_title; ?></h2>
							<?php } ?>
                        </div>
                        <div class="s-48"></div>
                        <div class="course-grid three-columns">



						<?php
						global $post;
						$lp_select_posts = array();
						$lp_select_posts = $block_our_course_select_courses;
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
                            <div class=" course-item column column-box">
                                <div class="course-image image-cover">
                                    <img src="<?php echo $src; ?>" alt="<?php the_title(); ?>" />
                                </div>
                                <div class="course-content">
                                    <h3 class="heading-5"><?php the_title(); ?></h3>
                                    <p>
                                        <?php echo dawat_excerpt_nomore(150); ?>
                                    </p>
                                    <div class="course-btn">
                                            <a href="<?php echo get_the_permalink(); ?>" class="button"><span>مزید تفصیل</span></a>
                                    </div>
                                </div>
                            </div>
                            
								<?php
						
						}} wp_reset_query();wp_reset_postdata();
						?>

                        </div>
                    </div>
                </div>
            </section>
</div>
