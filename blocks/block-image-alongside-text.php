<?php
/**
 * Block Name: Image Alongside Text
 *
 * The template for displaying the custom gutenberg block named Image Alongside Text.
 *
 * @link https://www.advancedcustomfields.com/resources/blocks/
 *
 * @package Dtearsd Package
 * @since 1.0.0
 */


// Get all the fields from ACF for this block ID

$block_fields = get_fields_escaped( $block['id'] );
// $block_fields = get_fields_escaped( $block['id'] ,'sanitize_text_field' ); // if want to remove all html


// Set the block name for it's ID & class from it's file name
$block_dawat_name = $block['name'];
$block_dawat_name = str_replace( 'acf/', '', $block_dawat_name );

// Set the preview thumbnail for this block for gutenberg editor view.
if ( isset( $block['data']['preview_image_help'] ) ) {    /* rendering in inserter preview  */
	echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
}

// create align class ("alignwide") from block setting ("wide").
$align_class = $block['align'] ? 'align' . $block['align'] : '';

// Get the class name for the block to be used for it.
$class_name = ( isset( $block['className'] ) ) ? $block['className'] : null;

// Making the unique ID for the block.
$id = 'block-' . $block_dawat_name . '-' . $block['id'];

// Making the unique ID for the block.
if ( $block['name'] ) {
	$block_name = $block['name'];
	$block_name = str_replace( '/', '-', $block_name );
	$name       = 'block-' . $block_name;
}

// Block variables

$dtearsd_iat_title        = $block_fields['dtearsd_iat_title'];
$dtearsd_iat_text         = html_entity_decode( $block_fields['dtearsd_iat_text'] );
$dtearsd_iat_button       = $block_fields['dtearsd_iat_button'];
$dtearsd_iat_img_location = $block_fields['dtearsd_iat_img_location'];
$dtearsd_iat_image        = $block_fields['dtearsd_iat_image'];


if ( $dtearsd_iat_img_location == 'left' ) {
	$dtearsd_iat_img_location = 'image-at-left';
} else {
	$dtearsd_iat_img_location = 'image-at-right';
}


?>
<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name . ' ' . $name; ?> dawat-block-<?php echo $block_dawat_name; ?>">


<div class="wrapper">
                    <div class="image-alongside-text two-columns <?php echo $dtearsd_iat_img_location; ?>">
                        <div class="iat-content column">

						<?php if ( $dtearsd_iat_title ) { ?>
				<h2 class="heading-2"><?php echo $dtearsd_iat_title; ?></h2>
			<?php } ?>
                           <?php if ( $dtearsd_iat_text ) { ?>
				<?php echo $dtearsd_iat_text; ?>
			<?php } ?>

<?php if($dtearsd_iat_button){ 
                            $url = ( isset( $dtearsd_iat_button['url'] ) && '' !== $dtearsd_iat_button['url'] ) ? $dtearsd_iat_button['url'] : null;
                            $title = ( isset( $dtearsd_iat_button['title'] ) && '' !== $dtearsd_iat_button['title'] ) ? $dtearsd_iat_button['title'] : null;
                            ?>
                        <div class="iat-btn">
                            <a <?php if($url){ ?> href="<?php echo $url; ?>" <?php } ?> class="button"><?php if($title){ ?><span><?php echo $title; ?></span><?php } ?></a>
                        </div>
                        <?php } ?>


                           				
                        </div>

<?php if ( $dtearsd_iat_image ) { ?>
			<div class="iat-image column image-cover">
				<img src="<?php echo wp_get_attachment_image_url( $dtearsd_iat_image, 'thumb_600' ); ?>" alt="img">
			</div>
		<?php } ?>

                    </div>
                </div>




</div>
