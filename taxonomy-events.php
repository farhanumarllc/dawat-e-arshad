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
<div class="books-filter-ctn"></div>
				
				<div class="filter-categories">

<?php
// Get terms from the taxonomy 'events'
$terms = get_terms(array(
    'taxonomy' => 'events',
    'hide_empty' => false, // Show even if no posts are associated
));

// Check if there are any terms
if (!empty($terms) && !is_wp_error($terms)) {
    // Check if we are on a taxonomy archive, and if not, make 'All' button active
    $current_tax = is_tax('events') ? '' : 'active';
    // First button (All events) with a link to all events (taxonomy archive)
    echo '<a href="/events"><button class="' . $current_tax . '"><span>تمام</span></button></a>';

    // Loop through each term
    foreach ($terms as $term) {
        $term_link = get_term_link($term); // Get the link to the term archive
        if (!is_wp_error($term_link)) {
            // Check if the current term is the active one
            $active_class = (is_tax('events', $term->term_id)) ? 'active' : '';

            // Print each term as a button with a link
            echo '<a href="' . esc_url($term_link) . '"><button class="' . $active_class . '"><span>' . esc_html($term->name) . '</span></button></a>';
        }
    }
}
?>
</div>


					



		<div class="s-48"></div>
		<div class="taxnomy-event-page">
			<div class="event-items three-columns">
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
