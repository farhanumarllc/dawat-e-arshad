<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Dtearsd Package
 * @since 1.0.0
 */

// Include header
get_header();

// Global variables
global $option_fields;
global $pID;
global $fields;




?> 


<section
        id="banner-section"
        class="banner-section banner-books green-ctn center-align ctn-980"
      >
        <div class="wrapper">
          <h1 class="heading-1"><?php the_archive_title( ); ?></h1>
        </div>
      </section>



<section id="page-section" class="page-section">
	<!-- Content Start -->
	<div class="wrapper">
		<div class="s-48"></div>
		<div class="blog-articles-ctn">
			<div class="blog-articles two-columns">
				<?php
					if ( have_posts() ) {
						while ( have_posts() ) {
							the_post();
							// Include specific template for the content
							get_template_part( 'partials/content-archive',get_post_type() );
						}
						?> <div class="clear"></div> <?php
					} else {
						// If no content, include the "No posts found" template.
						get_template_part( 'partials/content', 'none' );
					}
				?>
			</div>
		</div>
		<div class="ts-40"></div> <?php
		if ( function_exists( 'dawat_pagination' ) ) { ?>
			<div class="center-align"> <?php dawat_pagination( $wp_query->max_num_pages ); ?></div>
		<?php } ?>
		<div class="ts-80"></div>
	</div>
	<!-- Content End -->
</section> <?php get_footer(); ?>
