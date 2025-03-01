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
$book_text = ( isset( $block_fields['book_text'] ) && '' !== $block_fields['book_text'] ) ? $block_fields['book_text'] : null;
$button_field = ( isset( $block_fields['button_field'] ) && '' !== $block_fields['button_field'] ) ? $block_fields['button_field'] : null;
$books_relationship = ( isset( $block_fields['books_relationship'] ) && '' !== $block_fields['books_relationship'] ) ? $block_fields['books_relationship'] : null;
?>
<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name. ' ' . $name; ?> dawat-block-<?php echo $block_dawat_name; ?>">
<section>
                <div class="wrapper">
                    <div class="books-ctn">
                        <div class="section-head center-align max-width-80">
                            <?php if($book_text):?>
                            <h2 class="heading-2"><?php echo $book_text;?></h2>
                            <?php endif?>
                        </div>
                        <div class="s-48"></div>
                        <div class="books-links four-columns">
                        <?php global $post;
                        $lp_select_posts = array();
                        $lp_select_posts = $books_relationship;
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
                            <div class="book-link column column-box">
                                <div class="book-image image-cover">
                                        <img src="<?php echo $src;?>" alt="<?php the_title();?>">
                                </div>
                                <div class="book-content">
                                    <div class="book-category">
                                        <a href="<?php echo get_the_permalink();?>"> <?php echo dawat_excerpt_nomore(150); ?></a>
                                    </div>
                                    <div class="book-title">
                                        <h3 class="heading-6"><?php  the_title();?>
                                        </h3>
                                    </div>
                                    <div class="book-btn">
                                        <a href="#book-link-<?php echo $post_id; ?>" class="button read-more-btn"><span>کتاب کھولیں</span></a>
                                        <a href="<?php echo get_the_permalink();?>" class="button outline-btn download-btn"><span>ڈاونلوڈ</span></a>
                                    </div>
                                </div>
                                <div class="book-popup mfp-hide" id="book-link-<?php echo $post_id; ?>">
                                    <iframe src="www.e-maktaba.org.html" frameborder="0"></iframe>
                                </div>
                            </div>
                            <?php }} wp_reset_query();wp_reset_postdata();?>
                        </div>
                        <div class="s-48"></div>
                        <?php if($button_field){ 
                            $url = ( isset( $button_field['url'] ) && '' !== $button_field['url'] ) ? $button_field['url'] : null;
                            $title = ( isset( $button_field['title'] ) && '' !== $button_field['title'] ) ? $button_field['title'] : null;
                            ?>
                        <div class="block-button center-align">
                            <a <?php if($url){ ?> href="<?php echo $url; ?>" <?php } ?> class="button"><?php if($title){ ?><span><?php echo $title; ?></span><?php } ?></a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </section>

</div>

