<?php
/**
 * Template Name: Projects
 * Template Post Type: page
 *
 * This template is for displaying blog page.
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

$dtearsd_trprjctsho_title = (isset($fields['dtearsd_trprjctsho_title']) && $fields['dtearsd_trprjctsho_title']!='' ) ? $fields['dtearsd_trprjctsho_title'] : get_the_title();
$dtearsd_trprjctsho_text = (isset($fields['dtearsd_trprjctsho_text']) && $fields['dtearsd_trprjctsho_text']!='' ) ? $fields['dtearsd_trprjctsho_text'] : null;
$dtearsd_trprjctsho_images = (isset($fields['dtearsd_trprjctsho_images']) && $fields['dtearsd_trprjctsho_images']!='' ) ? $fields['dtearsd_trprjctsho_images'] : null;
$dtearsd_trprjctsho_page_section_title = (isset($fields['dtearsd_trprjctsho_page_section_title']) && $fields['dtearsd_trprjctsho_page_section_title']!='' ) ? $fields['dtearsd_trprjctsho_page_section_title'] : null;

?> 



<main id="main-section" class="main-section">
		<section id="banner-section" class="banner-section green-ctn banner-projects">
            <div class="wrapper">
                <div id="breadcrumbs">
                    <a href="courses.html">Projetcs</a> /
                    <span>KIMS</span>
                </div>
               <div class="project-gallery-ctn d-flex">
					<div class="banner-content">
						<?php if($dtearsd_trprjctsho_title){?>
							<h1 class="heading-1"><?php echo $dtearsd_trprjctsho_title;?></h1>
						<?php }?>
						<?php if($dtearsd_trprjctsho_text){?>
							<?php echo html_entity_decode($dtearsd_trprjctsho_text); ?>
						<?php }?>
					</div>
					<div class="banner-gallery">
						<?php if($dtearsd_trprjctsho_images){
							foreach($dtearsd_trprjctsho_images as $images){
								$image = ( isset( $images['image'] ) && '' !== $images['image'] ) ? $images['image'] : null;
								if($image){
							?>
						<div class="galler-image image-cover">
							<img src="<?php echo wp_get_attachment_image_url( $image, 'thumb_400' ); ?>" alt="Project Image">
						</div>
						<?php
								} 
							}
						}
						?>
					</div>
               </div>
            </div>
        </section>


      <section id="" class="page-section">
	  	<div class="s-96"></div>
            <section>
                <div class="wrapper">
                    <div class="projects-ctn">
                        <div class="section-head max-width-80 center-align">
                            <h2 class="heading-2">دیگر ادارے</h2>
                        </div>
                        <div class="s-48"></div>
                        <div class="three-columns">
							<?php
								// WP_Query arguments
								$args = array(
									'post_type'              => array( 'project' ),
									'posts_per_page'         => get_option('posts_per_page'), //how many posts you need
									'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
								);
								// The Query
								$query = new WP_Query( $args );
								// The Loop
								if ( $query->have_posts() ) {
									while ( $query->have_posts() ) {
										$query->the_post();
									//Include specific template for the content.
									get_template_part( 'partials/content', 'archive-project' );
									}
								?> <div class="clear"></div> <?php
								} else {
									// If no content, include the "No posts found" template.
									get_template_part( 'partials/content', 'none' );
								}?> </div>
							<?php if ( function_exists( 'dawat_pagination' ) ) { ?>
								<div class="ts-40"></div>
								<div class="center-align"> <?php dawat_pagination( $query->max_num_pages ); ?></div>
								<div class="ts-80"></div>
							<?php } ?>

                		</div>
            		</div>
        	 </div>

        </section>
        <div class="s-96"></div>
      </section>
</main>

 <?php get_footer();
