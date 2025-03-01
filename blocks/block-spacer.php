<?php
/**
 * Block Name: Spacer
 *
 * The template for displaying the custom gutenberg block named Spacer.
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
$dtearsd_blk_spacer = html_entity_remove($block_fields['dtearsd_blk_spacer']);
$dtearsd_blk_spacer_class = null;

	 if($dtearsd_blk_spacer == 'space-50')  { $dtearsd_blk_spacer_class = 's-50'; }
else if($dtearsd_blk_spacer == 'space-60')  { $dtearsd_blk_spacer_class = 's-60'; }
else if($dtearsd_blk_spacer == 'space-80')  { $dtearsd_blk_spacer_class = 's-80'; }
else if($dtearsd_blk_spacer == 'space-100') { $dtearsd_blk_spacer_class = 's-100'; }
else if($dtearsd_blk_spacer == 'space-120') { $dtearsd_blk_spacer_class = 's-120'; }
else if($dtearsd_blk_spacer == 'space-140') { $dtearsd_blk_spacer_class = 's-140'; }
else if($dtearsd_blk_spacer == 'space-160') { $dtearsd_blk_spacer_class = 's-160 '; }
else if($dtearsd_blk_spacer == 'space-200') { $dtearsd_blk_spacer_class = 's-200'; }
else if($dtearsd_blk_spacer == 'space-270') { $dtearsd_blk_spacer_class = 's-270'; }


?>
<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name. ' ' . $name; ?> dawat-block-<?php echo $block_dawat_name; ?>">

	<div class="dawat-spacer <?php echo $dtearsd_blk_spacer_class; ?>"> </div>

</div>
