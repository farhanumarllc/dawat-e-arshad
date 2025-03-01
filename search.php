<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Dtearsd Package
 * @since 1.0.0
 */

// Include header.
get_header();

// Global variables.
global $option_fields;
global $pID;
global $fields;

// Required if you want different search results style for separate CPT etc
// $post_type = get_post_type();

 /**
 * Search Masthead
 */
?> 

<section
        id="banner-section"
        class="banner-section banner-books green-ctn center-align ctn-980"
      >
        <div class="wrapper">
          <h1 class="heading-1"><?php _e( 'Search Results', 'dtearsd_td' ); ?></h1>
		  <p>
			<?php
					printf(
						/* translators: %s: search term. */
						esc_html__( 'Results for "%s"', 'dtearsd_td' ),
						'<span class="search-term">' . esc_html( get_search_query() ) . '</span>'
					);
					?>
				 </p>
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
						get_template_part( 'partials/content-archive', get_post_type() );
					}
					?>
					<?php
				} else {
					// If no content, include the "No posts found" template.
					get_template_part( 'partials/content', 'none' );
				}
				?>
			</div>
			<div class="ts-40"></div>
			<?php
			if ( function_exists( 'dawat_pagination' ) ) {
				dawat_pagination( $wp_query->max_num_pages );
			}
			?>
			<div class="ts-80"></div>
</div>
	</div>
	<!-- Content End -->
</section> <?php get_footer(); ?>
