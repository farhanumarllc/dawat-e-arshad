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
$former_student_title = ( isset( $block_fields['former_student_title'] ) && '' !== $block_fields['former_student_title'] ) ? $block_fields['former_student_title'] : null;
$former_student = ( isset( $block_fields['former_student'] ) && '' !== $block_fields['former_student'] ) ? $block_fields['former_student'] : null;

?>
<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name. ' ' . $name; ?> dawat-block-<?php echo $block_dawat_name; ?>">

<section>
	 <div class="s-48"></div>
                <div class="wrapper">
                    <div class="stat-ctn">
                        <div class="section-head center-align">
							<?php if ($former_student_title):?>
					<h2 class="heading-2"><?php echo $former_student_title ?></h2>
				<?php endif ?>
                        </div>
                        <div class="s-48"></div>
                        <div class="stat-items four-columns">
							<?php if($former_student){?>
								<?php foreach($former_student as $former_students){
									$former_img = $former_students['former_img'];
									$former_number = $former_students['former_number'];
									$former_text = $former_students['former_text'];
									?>
                            <div class="stat-item column column-box">
                                <div class="stat-icon">
                                    <img src="<?php echo wp_get_attachment_image_url( $former_img, 'thumb_600' ); ?>" alt="Holy Quran">
                                </div>
								<?if($former_number):?>
                                <h3 class="stat-value heading-1" data-number="100"><?php echo $former_number;?></h3>
								<?php endif?>
								<?if($former_text):?>
                                <div class="stat-name text-22"> <?php echo html_entity_decode($former_text);?></div>
								<?php endif?>
                            </div>
							<?php }}?>
                        </div>
                    </div>
                </div>
            </section>






</div>
