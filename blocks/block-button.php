<?php
/**
 * Block Name: Buttons
 *
 * The template for displaying the custom gutenberg block named Buttons.
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
$dtearsd_blk_btn_variation		 = $block_fields['dtearsd_blk_btn_variation'];
if($dtearsd_blk_btn_variation 	== 'single'){
	$dtearsd_blk_button 		= $block_fields['dtearsd_blk_button'];
	$dtearsd_blk_btn_style 	= $block_fields['dtearsd_blk_btn_style'];
	if($dtearsd_blk_btn_style == 'de(fault'){
		$block_btn_class = ' button ';
	} else if($dtearsd_blk_btn_style == 'boxed') {
		$block_btn_class = ' boxed button ';
	}
} else {
	$dtearsd_blk_buttons 		=  $block_fields['dtearsd_blk_buttons'];
}

?>
<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name. ' ' . $name; ?> dawat-block-<?php echo $block_dawat_name; ?>">

	<?php
		if($dtearsd_blk_btn_variation == 'single'){
			if( $dtearsd_blk_button ) {
				echo dawat_acf_button( $dtearsd_blk_button, $block_btn_class );
			}
		} else {

			if($dtearsd_blk_buttons){
				foreach ($dtearsd_blk_buttons as $button ) {
					$button_link = $button['button'];
					$button_style = $button['style'];
					if($button_style == 'default'){
						$button_style_class = ' button ';
					} else {
						$button_style_class = ' button boxed ';
					}
					if( $button_link ) {
						echo dawat_acf_button( $button_link, $button_style_class );
					}
				}
			}

		}
	?>

</div>
