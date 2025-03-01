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
$block_mid_page_title = ( isset( $block_fields['block_mid_page_title'] ) && '' !== $block_fields['block_mid_page_title'] ) ? $block_fields['block_mid_page_title'] : null;
$Block_Mid_Page_button = ( isset( $block_fields['Block_Mid_Page_button'] ) && '' !== $block_fields['Block_Mid_Page_button'] ) ? $block_fields['Block_Mid_Page_button'] : null;
?>
<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name. ' ' . $name; ?> dawat-block-<?php echo $block_dawat_name; ?>">
<section class="green-ctn">
                <div class="s-72"></div>
                <div class="wrapper">
                    <div class="mid-page-cta center-align"> 
                        <?php if($block_mid_page_title){?>
                        <h2 class="heading-2">
                           <?php echo $block_mid_page_title;?>
                        </h2>
                        <?php }?>
                        <div class="s-36"></div>
                    <div class="cta-btn">
    <?php 
    if ( isset($Block_Mid_Page_button) && is_array($Block_Mid_Page_button) ) {
        $block_btn_url = ( isset($Block_Mid_Page_button['url']) && '' !== $Block_Mid_Page_button['url'] ) ? esc_url($Block_Mid_Page_button['url']) : '#';
        $block_btn_text = ( isset($Block_Mid_Page_button['title']) && '' !== $Block_Mid_Page_button['title'] ) ? esc_html($Block_Mid_Page_button['title']) : '';
        ?>
        <a href="<?php echo $block_btn_url; ?>" class="button"><span><?php echo $block_btn_text; ?></span></a>
    <?php } ?>
</div>


                    </div>
                </div>
                <div class="s-72"></div>
            </section>

</div>

