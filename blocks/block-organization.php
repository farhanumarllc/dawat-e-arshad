<?php
/**
 * Block Name: BlockName
 *
 * The template for displaying the custom gutenberg block named BlockName.
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
if (isset($block_fields['organization'])) {
    $organization = $block_fields['organization'];
    // Debugging line to check if data is present
} else {
    $organization = [];
}
$organization_title = (isset($block_fields['organization_title']) && $block_fields['organization_title']!='' ) ? $block_fields['organization_title'] : get_the_title();
$organization_text = (isset($block_fields['organization_text']) && $block_fields['organization_text']!='' ) ? $block_fields['organization_text'] : null;
$organization_img = (isset($block_fields['organization_img']) && $block_fields['organization_img']!='' ) ? $block_fields['organization_img'] : null;

?>
<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name . ' ' . $name; ?> dawat-block-<?php echo $block_dawat_name; ?>">
    <section id="banner-section" class="banner-section banner-with-image green-ctn">
        <div class="wrapper">
          
                <div class="image-alongside-text two-columns align-items-center">
                    <div class="iat-content column">
                        <?php if ($organization_title) { ?>
                            <h1 class="heading-1"><?php echo $organization_title; ?> </h1>
                        <?php } ?>
                        <div class="iat-text text-20">
                            <?php if ($organization_text) { ?>
                                <p>
                                    <?php echo html_entity_decode( $organization_text); ?> </p>
                            <?php } ?>
                        </div>
                    </div>
                    <?php if ($organization_img) {  ?>
                        <div class="iat-image column image-cover">
                            <img src="<?php echo wp_get_attachment_image_url( $organization_img, 'thumb_800' ); ?>" alt="Organization image">
                        </div>
                    <?php } ?>
                </div>
        </div>
    </section>
</div>
