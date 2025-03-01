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
 $faqs = $block_fields['faqs']; // for keeping html from input
 $faqs_title = $block_fields['faqs_title'];


?>
<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name. ' ' . $name; ?> dawat-block-<?php echo $block_dawat_name; ?>">
 <section>
                <div class="wrapper">
                    <div class="faq-ctn">
                        <div class="section-head center-align">
                            <?php if($faqs_title){?>
                            <h2 class="heading-2"><?php echo $faqs_title;?></h2>
                            <?php }?>
                        </div>
                        <div class="s-48"></div>
						
						<div class="faqs">
                      <?php if($faqs){?>
						<?php foreach($faqs as $faq){
							$question = $faq['question'];	
							$answer = $faq['answer'];							
							
							?>
                            <div class="faq">
                                <div class="faq-head">
                                  
								<?php if($question){
								
									?>
								<h3 class="heading-6">
									<?php echo $question; ?>
                                    </h3>

<?php }?>

                                    <span class="faq-icon">
                                    </span>
                                </div>
                              
								<?php if($answer){?>
								
								<div class="faq-content">
                                   <?php echo html_entity_decode($answer);?>
                                </div>
                         
							
							<?php }?>
							</div>
                            <?php }} ?>
 <div class="s-48"></div>

                        </div>
                    </div>
                </div>           </section>
</div>
