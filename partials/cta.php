<?php
/**
 * Template part for footer cta
 *
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/
 *
 * @package Dtearsd Package
 * @since 1.0.0
 */
// Global variables
global $option_fields;
global $pID;
global $fields;


$dtearsd_page_cta_pagevisibility = ( isset( $fields['dtearsd_page_cta_pagevisibility'] ) ) ? $fields['dtearsd_page_cta_pagevisibility'] : null;


 $dtearsd_to_cta_headline = ( isset( $option_fields['dtearsd_to_cta_headline'] ) ) ? $option_fields['dtearsd_to_cta_headline'] : null;
$dtearsd_ftrcta_headline  = ( isset( $fields['dtearsd_page_cta_headline'] ) ) ? $fields['dtearsd_page_cta_headline'] : $dtearsd_to_cta_headline;
?>

<section id="cta-section" class="cta-section">
	<!-- cta Start -->
	<div class="cta-single">
		<div class="wrapper">
			<h4><?php echo $dtearsd_ftrcta_headline; ?></h4>
		</div>
	</div>
	<!-- cta End -->
</section>
