<?php
/**
 * Template Name: Events
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

$dtearsd_trevntsho_title = (isset($fields['dtearsd_trevntsho_title']) && $fields['dtearsd_trevntsho_title']!='' ) ? $fields['dtearsd_trevntsho_title'] : get_the_title();
$dtearsd_trevntsho_text = (isset($fields['dtearsd_trevntsho_text']) && $fields['dtearsd_trevntsho_text']!='' ) ? $fields['dtearsd_trevntsho_text'] : null;

// $categories=get_categories(array(
// 	'hide_empty' 	=> false,
// ));

$dtearsd_post_catagories = get_categories($pID);
// var_dump($dtearsd_post_catagories);
?> 



<main id="main-section" class="main-section">
<section id="banner-section" class="banner-section banner-default green-ctn center-align ctn-980">
	<div class="wrapper">
	<?php if($dtearsd_trevntsho_title){?>
		<h1 class="heading-1"><?php echo $dtearsd_trevntsho_title;?></h1>
	<?php }?>
	<?php if($dtearsd_trevntsho_text){?>
		<?php echo html_entity_decode($dtearsd_trevntsho_text); ?>
	<?php }?>
	</div>
</section>


      <section id="" class="page-section">
        <div class="s-96"></div>
        <section>
          <div class="wrapper">
			  <div class="events-filter-ctn filter-ctn">
			  <div class="filter-categories">
				<?php
				// Get terms from the taxonomy 'events'
				$terms = get_terms(array(
					'taxonomy' => 'events',
					'hide_empty' => false, // Show even if no posts are associated
				));

				// Check if there are any terms
				if (!empty($terms) && !is_wp_error($terms)) {
					// First button (All events) with a link to all events (taxonomy archive)
					echo '<a href="/events"><button class="active"><span>تمام</span></button></a>';

					// Loop through each term
					foreach ($terms as $term) {
						$term_link = get_term_link($term); // Get the link to the term archive
						if (!is_wp_error($term_link)) {
							// Print each term as a button with a link
							echo '<a href="' . esc_url($term_link) . '"><button><span>' . esc_html($term->name) . '</span></button></a>';
						}
					}
				}
				?>
			</div>

              		<div class="s-48"></div>
              			<div class="event-items three-columns">
							<?php
								// WP_Query arguments
								$args = array(
									'post_type'              => array( 'event' ),
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
									get_template_part( 'partials/content', 'archive-event' );
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
