<?php
/**
 * Template Name: Courses
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

$dtearsd_trcrsho_title = (isset($fields['dtearsd_trcrsho_title']) && $fields['dtearsd_trcrsho_title']!='' ) ? $fields['dtearsd_trcrsho_title'] : get_the_title();
$dtearsd_trcrsho_text = (isset($fields['dtearsd_trcrsho_text']) && $fields['dtearsd_trcrsho_text']!='' ) ? $fields['dtearsd_trcrsho_text'] : null;
$dtearsd_trcrsho_title_day_courses = (isset($fields['dtearsd_trcrsho_title_day_courses']) && $fields['dtearsd_trcrsho_title_day_courses']!='' ) ? $fields['dtearsd_trcrsho_title_day_courses'] : null;
$dtearsd_trcrsho_select_courses = (isset($fields['dtearsd_trcrsho_select_courses']) && $fields['dtearsd_trcrsho_select_courses']!='' ) ? $fields['dtearsd_trcrsho_select_courses'] : null;
$dtearsd_trcrsho_courses_title = (isset($fields['dtearsd_trcrsho_courses_title']) && $fields['dtearsd_trcrsho_courses_title']!='' ) ? $fields['dtearsd_trcrsho_courses_title'] : null;

// $categories=get_categories(array(
// 	'hide_empty' 	=> false,
// ));

$dtearsd_post_catagories = get_categories($pID);
// var_dump($dtearsd_post_catagories);
?> 



<main id="main-section" class="main-section">
<section id="banner-section" class="banner-section banner-default green-ctn center-align ctn-980">
	<div class="wrapper">
	<?php if($dtearsd_trcrsho_title){?>
		<h1 class="heading-1"><?php echo $dtearsd_trcrsho_title;?></h1>
	<?php }?>
	<?php if($dtearsd_trcrsho_text){?>
		<?php echo html_entity_decode($dtearsd_trcrsho_text); ?>
	<?php }?>
	</div>
</section>






      <section id="" class="page-section">
        <div class="s-96"></div>
            <section>
                <div class="wrapper">
					<?php if($dtearsd_trcrsho_title_day_courses){ ?>
                    <div class="section-head center-align">
                        <h2 class="heading-2"> <?php echo $dtearsd_trcrsho_title_day_courses; ?> </h2>
                    </div>
					<?php } ?>
					<?php if($dtearsd_trcrsho_select_courses){ ?>
                    <div class="s-48"></div>
                    <div class="three-columns images-tiles">
					<?php
					global $post;
					$lp_select_posts = array();
					$lp_select_posts = $dtearsd_trcrsho_select_courses;
					if ( $lp_select_posts ) {
						foreach ( $lp_select_posts as $lp_posts ) {
							$post = $lp_posts;
							setup_postdata( $post );
							$post_id         = $post->ID;
							$post_fields = get_fields( $post_id );
							// $custom_field  = $post_fields['custom_field'];
							if(has_post_thumbnail()){
							$src = get_the_post_thumbnail_url( $post_id , 'full');
							}else{
							$src = esc_url( get_template_directory_uri() ) . '/assets/img/defaults/default-image.webp';
							}
							?>
   						<div class="column">
                            <div class="image-tile img-cover">
                                <img src="<?php echo $src; ?>" alt="<?php get_the_title(); ?>">
                            </div>
                        </div>
							<?php
					
					}} wp_reset_query();wp_reset_postdata();
					?>
                    </div>
					<?php } ?>
                </div>
            </section>
			<div class="s-96"></div>
        <section>
          <div class="wrapper">
		  	<div class="course-ctn">
				<?php if($dtearsd_trcrsho_courses_title){ ?>
                <div class="section-head center-align">
                    <h2 class="heading-2"> <?php echo $dtearsd_trcrsho_courses_title; ?> </h2>
                </div>
				<?php } ?>
                    <div class="s-48"></div>
                        <div class="course-grid three-columns">
							<?php
								// WP_Query arguments
								$args = array(
									'post_type'              => array( 'course' ),
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
									get_template_part( 'partials/content', 'archive-course' );
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
