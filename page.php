<?php
/**
 * The template for displaying all pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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


// $dtearsd_pagetitle = (isset($fields['dtearsd_pagetitle'])) ? $fields['dtearsd_pagetitle'] : null;
// if(!$dtearsd_pagetitle){
// 	$dtearsd_pagetitle = get_the_title();
// }
// $dtearsd_pagetitle = dawat_page_title('dtearsd_pagetitle');
$dtearsd_tmlt_dflt_title = (isset($fields['dtearsd_tmlt_dflt_title']) && $fields['dtearsd_tmlt_dflt_title']!='' ) ? $fields['dtearsd_tmlt_dflt_title'] : get_the_title();
$dtearsd_tmlt_dflt_text = ( isset( $fields['dtearsd_tmlt_dflt_text'] ) && '' !== $fields['dtearsd_tmlt_dflt_text'] ) ? $fields['dtearsd_tmlt_dflt_text'] : null;
?>

<section id="banner-section" class="banner-section banner-with-image green-ctn">
	<div class="wrapper">
	<div class="image-alongside-text two-columns align-items-center">
		<div class="iat-content column">
			<?php if($dtearsd_tmlt_dflt_title){?>
				<h1 class="heading-1"><?php echo $dtearsd_tmlt_dflt_title; ?></h1>
				<?php }?>
				<?php if($dtearsd_tmlt_dflt_text){
					echo html_entity_decode($dtearsd_tmlt_dflt_text);
				} ?>
				
			</div>
			<div class="iat-image column image-cover">
				<?php
				if (has_post_thumbnail()) {
					the_post_thumbnail('full', ['alt' => get_the_title()]);
				} else {
					// Fallback image if no featured image is set
					echo '<img src="' . get_template_directory_uri() . '/assets/img/defaults/default-image.webp" alt=" '.$dtearsd_tmlt_dflt_title.' ">';
				}
				?>
			</div>
		</div>
		</div>
	</div>
	</div>
</section>
<div class="s-96"></div>
<section id="page-section" class="page-section">
	<!-- Content Start -->

	<?php while ( have_posts() ) { the_post();
		//Include specific template for the content.
		get_template_part( 'partials/content', 'page' );

	} ?>

	<div class="clear"></div>
	<div class="ts-80"></div>

	<!-- Content End -->
</section>

<?php get_footer(); ?>
