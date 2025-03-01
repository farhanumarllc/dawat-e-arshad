<?php
/**
 * Block Name: Related Post
 *
 * The template for displaying the custom gutenberg block named Related Post.
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
// $custom_field_of_block = html_entity_decode($block_fields['custom_field_of_block']); // for keeping html from input
// $custom_field_of_block = html_entity_remove($block_fields['custom_field_of_block']); // for removing html from input

if(isset($related_post)){
$related_post = $block_fields['related-post']; // for keeping html from input
}else{
    $related_post = [];
}
if(isset($block_fields['three_cloumn_tiles'])){
    $three_cloumn_tiles = $block_fields['three_cloumn_tiles']; // for keeping html from input
} else{
    $three_cloumn_tiles = [];
}
?>
<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name. ' ' . $name; ?> dawat-block-<?php echo $block_dawat_name; ?>">
 <section class="green-ctn">

 <?php if($three_cloumn_tiles){
    ?>
                <div class="s-96"></div>
                <div class="wrapper">
                    <?php if($three_cloumn_tiles_heading){ ?>
                    <div class="section-head center-align">
                    <h2 class="heading-2"><?php echo $three_cloumn_tiles_heading; ?></h2>
                    </div>
                    <?php } ?>
                    <div class="s-48"></div>
                    <div class="icon-grid three-columns center-align">
                        <?php  foreach($three_cloumn_tiles as $three_cloumn_tile){
                        $value_img = $three_cloumn_tile['img'];
                        $image_url = wp_get_attachment_url($value_img);
                        $value_title = $three_cloumn_tile['title']; ?>
                        <div class="icon-column column column-box">
                            <?php if($value_img){ ?>
                            <div class="icon-image">
                                <img src="<?php echo $image_url; ?>" alt="Holy Quran">
                            </div>
                            <?php } ?>
                            <?php if($value_title){ ?>
                            <div class="icon-text">
                                <p><?php echo $value_title; ?></p>
                            </div>
                            <?php } ?>
                        </div>
                        
                        <?php }?>
                    </div>
                  
                </div>
                <div class="s-96"></div>
            </section>
            <?php }?>
</div>
