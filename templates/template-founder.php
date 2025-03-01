<?php
/**
 * Template Name: Founder
 * Template Post Type: page
 *
 * This template is for displaying home page.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package Dtearsd Package
 * @since 1.0.0
 *
 */

// Include header
get_header();

// Global variables
global $option_fields;
global $pID;
global $fields;

$dtearsd_tmlt_fndr_title = (isset($fields['dtearsd_tmlt_fndr_title']) && $fields['dtearsd_tmlt_fndr_title']!='' ) ? $fields['dtearsd_tmlt_fndr_title'] : get_the_title();
$dtearsd_tmlt_fndr_text = ( isset( $fields['dtearsd_tmlt_fndr_text'] ) && '' !== $fields['dtearsd_tmlt_fndr_text'] ) ? $fields['dtearsd_tmlt_fndr_text'] : null;
?> 
<section id="banner-section" class="banner-section banner-with-image green-ctn">
	<div class="wrapper">
	<div class="image-alongside-text two-columns align-items-center">
		<div class="iat-content column">
				<h1 class="heading-1"><?php echo $dtearsd_tmlt_fndr_title; ?></h1>
				<?php if($dtearsd_tmlt_fndr_text){
					echo html_entity_decode($dtearsd_tmlt_fndr_text);
				} ?>
				
			</div>
			<div class="iat-image column image-cover">
				<?php
				if (has_post_thumbnail()) {
					the_post_thumbnail('full', ['alt' => get_the_title()]);
				} else {
					// Fallback image if no featured image is set
					echo '<img src="' . get_template_directory_uri() . '/assets/img/defaults/default-image.webp" alt="'.$dtearsd_tmlt_fndr_title.'">';
				}
				?>
			</div>
		</div>
		</div>
	</div>
	</div>
</section>

<section id="page-section" class="page-section">
	<!-- Content Start --> <?php while ( have_posts() ) { the_post();
		//Include specific template for the content.
		get_template_part( 'partials/content', 'page' );

	} ?> <div class="clear"></div>
	<div class="ts-80"></div>
	<!-- Content End -->
</section> <?php get_footer(); ?>
