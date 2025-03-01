<?php
/**
 * Template part for displaying single course post 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Dtearsd Package
 * @since 1.0.0
 */


$post_data=get_queried_object();
$pID  = get_the_ID();
if (function_exists('get_fields') && function_exists('get_fields_escaped')) {
	$post_fields = get_fields_escaped( $pID );
}
$dtearsd_cpt_book_title = ( isset( $post_fields['dtearsd_cpt_book_title'] ) && '' !== $post_fields['dtearsd_cpt_book_title'] ) ? $post_fields['dtearsd_cpt_book_title'] : get_the_title();
$dtearsd_cpt_book_text = ( isset( $post_fields['dtearsd_cpt_book_text'] ) && '' !== $post_fields['dtearsd_cpt_book_text'] ) ? $post_fields['dtearsd_cpt_book_text'] : null;
$dtearsd_cpt_book_author = ( isset( $post_fields['dtearsd_cpt_book_author'] ) && '' !== $post_fields['dtearsd_cpt_book_author'] ) ? $post_fields['dtearsd_cpt_book_author'] : null;
$dtearsd_cpt_book_features_title = ( isset( $post_fields['dtearsd_cpt_book_features_title'] ) && '' !== $post_fields['dtearsd_cpt_book_features_title'] ) ? $post_fields['dtearsd_cpt_book_features_title'] : null;
$dtearsd_cpt_book_features = ( isset( $post_fields['dtearsd_cpt_book_features'] ) && '' !== $post_fields['dtearsd_cpt_book_features'] ) ? $post_fields['dtearsd_cpt_book_features'] : null;
$dtearsd_cpt_book_iframe = ( isset( $post_fields['dtearsd_cpt_book_iframe'] ) && '' !== $post_fields['dtearsd_cpt_book_iframe'] ) ? $post_fields['dtearsd_cpt_book_iframe'] : null;
$dtearsd_cpt_book_images = ( isset( $post_fields['dtearsd_cpt_book_images'] ) && '' !== $post_fields['dtearsd_cpt_book_images'] ) ? $post_fields['dtearsd_cpt_book_images'] : null;
?>



<section
        id="banner-section"
        class="banner-section banner-single-book green-ctn">
        <div class="wrapper">
          <div id="breadcrumbs">
            <a href="books.html">کتابیں
            </a> /
            <span>ختم نبوت
            </span>
        </div>
        <div class="single-book-ctn d-flex">
          <div class="single-book-content">
            <h1 class="heading-1"><?php echo $dtearsd_cpt_book_title; ?></h1>
            <?php if($dtearsd_cpt_book_author){ ?>
			<div class="book-author">
              تحریر:
              <strong><?php echo $dtearsd_cpt_book_author; ?></strong>
            </div>
			<?php } ?>
         <div class="book-short-detail">
          <?php if($dtearsd_cpt_book_text){
			echo html_entity_decode($dtearsd_cpt_book_text);
		  } ?>
		  <?php if($dtearsd_cpt_book_features_title){ ?>
          <h2 class="heading-4"><?php echo $dtearsd_cpt_book_features_title; ?></h2>
		  <?php } ?>
		  <?php if($dtearsd_cpt_book_features){ ?>
				<ol>
					<?php foreach($dtearsd_cpt_book_features as $features){ 
						$text = ( isset( $features['text'] ) && '' !== $features['text'] ) ? $features['text'] : null;
						if($text){
						?>
						<li> <?php echo $text; ?> </li>
					<?php } 
					}
					?>
				</ol>
				<?php  } ?>
         </div>
			<div class="banner-btns">
				<a href="#" class="button"><span>ڈاؤن لوڈ کریں</span></a>
				<a href="#" class="button outline-btn"><span>پی ڈی ایف دیکھیں</span></a>
			</div>
          </div>
          <div class="single-book-slider">
				<div class="single-book-slider-inner">
					<?php if($dtearsd_cpt_book_images){ ?>
					<div id="book-slider-top" class="owl-carousel owl-theme">  
						<?php foreach($dtearsd_cpt_book_images as $images){
							$image = ( isset( $images['image'] ) && '' !== $images['image'] ) ? $images['image'] : null;
							?>
						<div class="item">
							<div class="book-slider-image image-cover">
							<img src="<?php echo wp_get_attachment_image_url( $image, 'thumb_1200' ); ?>" alt="<?php the_title(); ?>">
							</div>  
						</div>
						<?php } ?>
					</div>
					<?php } ?>
					<?php if($dtearsd_cpt_book_images){ ?>
					<div id="book-slider-bottom" class="owl-carousel owl-theme">  
						<?php foreach($dtearsd_cpt_book_images as $images){
							$image = ( isset( $images['image'] ) && '' !== $images['image'] ) ? $images['image'] : null;
							?>
						<div class="item">
							<div class="book-slider-image image-cover">
							<img src="<?php echo wp_get_attachment_image_url( $image, 'thumb_1200' ); ?>" alt="<?php the_title(); ?>">
							</div>  
						</div>
						<?php } ?>
					</div>
					<?php } ?>
				</div>
          </div>
        </div>
        </div>
      </section>

	  <div class="s-96"></div>
	  <section>
          <div class="wrapper">
            <div class="books-filter-ctn">
           </div>
            <div class="books-filter-categories">
			<?php
				// Get terms from the taxonomy 'books'
				$terms = get_terms(array(
					'taxonomy' => 'books',
					'hide_empty' => false, // Show even if no posts are associated
				));

				// Check if there are any terms
				if (!empty($terms) && !is_wp_error($terms)) {
					// First button (All books) with a link to all books (taxonomy archive)
					echo '<a href="/books"><button class="book-category show-all active"><span>تمام</span></button></a>';

					// Loop through each term
					foreach ($terms as $term) {
						$term_link = get_term_link($term); // Get the link to the term archive
						if (!is_wp_error($term_link)) {
							// Print each term as a button with a link
							echo '<a href="'. $term_link .'"><button class="book-category '.esc_html($term->name) .'"><span>' . esc_html($term->name) . '</span></button></a>';
						}
					}
				}
				?>
            </div>
			

			
              <div class="s-48"></div>
                        <div class="books-links four-columns">
						<?php
								// WP_Query arguments
								$args = array(
									'post_type'              => array( 'book' ),
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
									get_template_part( 'partials/content', 'archive-book' );
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