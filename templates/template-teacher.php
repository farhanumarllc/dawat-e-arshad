<?php
/**
 * Template Name: Teacher Template
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

$teacher_template_page = (isset($fields['teacher_template_page']) && $fields['teacher_template_page']!='' ) ? $fields['teacher_template_page'] : get_the_title();
$teacher_template_text = (isset($fields['teacher_template_text']) && $fields['teacher_template_text']!='' ) ? $fields['teacher_template_text'] : null;

// $categories=get_categories(array(
// 	'hide_empty' 	=> false,
// ));

$dtearsd_post_catagories = get_categories($pID);
// var_dump($dtearsd_post_catagories);



?> 

<section
        id="banner-section"
        class="banner-section banner-books green-ctn center-align ctn-980"
      >
        <div class="wrapper">
			<?php if($teacher_template_page){?>
          <h1 class="heading-1"><?php echo $teacher_template_page;?></h1>
		  <?php }?>
          
			<?php if($teacher_template_text){?>
				<? echo html_entity_decode($teacher_template_text); ?>
            
         
		  <?php }?>
        </div>
      </section>
      <section id="" class="page-section">
        <div class="s-96"></div>
        <section>
          <div class="wrapper">
            <div class="filter-ctn">
              <div class="filter-categories">
	<!-- <button class="active"><span>تمام</span></button>
			  <?php if($dtearsd_post_catagories){ ?>
						<?php foreach ($dtearsd_post_catagories as $category ) { ?>
							 <button data-button-name="<?php echo get_category_link($category); ?>"><span>
								<?php echo $category->name; ?>
							</span></button>
						<?php } ?>
				<?php } ?> -->



              </div>
              <div class="s-48"></div>
              <div class="blog-articles-ctn">
                <div class="s-48"></div>
                <div class="blog-articles two-columns">
                    
				
			<?php
				// WP_Query arguments
				$args = array(
					'post_type'              => array( 'teacher' ),
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
					get_template_part( 'partials/content', 'archive-teacher' );
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
            </div>
          </div>
        </section>
        <div class="s-96"></div>
      </section>


 <?php get_footer();
