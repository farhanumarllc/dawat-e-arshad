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
// Post Tags & Categories

$dtearsd_post_categories = wp_get_post_terms($pID, 'events');
$dtearsd_cpt_event_title = ( isset( $post_fields['dtearsd_cpt_event_title'] ) && '' !== $post_fields['dtearsd_cpt_event_title'] ) ? $post_fields['dtearsd_cpt_event_title'] : get_the_title();
$dtearsd_cpt_event_text = ( isset( $post_fields['dtearsd_cpt_event_text'] ) && '' !== $post_fields['dtearsd_cpt_event_text'] ) ? $post_fields['dtearsd_cpt_event_text'] : null;
$dtearsd_cpt_event_important_title = ( isset( $post_fields['dtearsd_cpt_event_important_title'] ) && '' !== $post_fields['dtearsd_cpt_event_important_title'] ) ? $post_fields['dtearsd_cpt_event_important_title'] : null;
$dtearsd_cpt_event_important_points = ( isset( $post_fields['dtearsd_cpt_event_important_points'] ) && '' !== $post_fields['dtearsd_cpt_event_important_points'] ) ? $post_fields['dtearsd_cpt_event_important_points'] : null;
$dtearsd_cpt_event_guest_title = ( isset( $post_fields['dtearsd_cpt_event_guest_title'] ) && '' !== $post_fields['dtearsd_cpt_event_guest_title'] ) ? $post_fields['dtearsd_cpt_event_guest_title'] : null;
$dtearsd_cpt_event_guest = ( isset( $post_fields['dtearsd_cpt_event_guest'] ) && '' !== $post_fields['dtearsd_cpt_event_guest'] ) ? $post_fields['dtearsd_cpt_event_guest'] : null;
?>



<section id="banner-section"
        class="banner-section banner-deafult green-ctn center-align ctn-980" >
        <div class="wrapper">
          <h1 class="heading-1"><?php echo $dtearsd_cpt_event_title; ?></h1>
          <?php if($dtearsd_cpt_event_text){
			echo html_entity_decode($dtearsd_cpt_event_text);
		  } ?>
		  <div class="thumb"> <?php the_post_thumbnail(
							'thumb_1200',
							array(
								'alt'   => get_the_title(),
								'title' => get_the_title(),
							)
						); ?> 
			</div>

			<div class="post-meta d-flex align-items-center justify-content-between">
				  <!-- /.post-tags -->
				  <?php  if (!empty($dtearsd_post_categories) && !is_wp_error($dtearsd_post_categories)) { ?>
					<div class="post-cat">
					<?php
					$category_links = array();

					foreach ($dtearsd_post_categories as $category) {
						$category_links[] = '<a href="' . esc_url(get_term_link($category)) . '">' . esc_html($category->name) . '</a>';
					}

					// Join the links with a comma separator
					echo implode(', ', $category_links);
					?>
 					</div>
					<?php
				}
				?>
				  <div class="post-shares">
					  <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title();?>" target="_blank"
						  rel="noopener" rel="noreferrer"
						  onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><img
							  src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/facebook-icon.svg" alt="Facebook"
							  class="post-fb-share"></a>
					  <a href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title();?>&amp;url=<?php the_permalink();?>"
						  target="_blank" rel="noopener" rel="noreferrer"
						  onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><img
							  src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/linkedin-icon.svg" alt="Linked In"
							  class="post-li-share"></a>
							  <a href="http://twitter.com/intent/tweet?text=Currently reading <?php the_title();?>&amp;url=<?php the_permalink();?>"
						  target="_blank" rel="noopener" rel="noreferrer"
						  onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><img
							  src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/twitter-icon.svg" alt="Twitter"
							  class="post-tw-share"></a>
				  </div>
				  <!-- /.post-shares -->
			  </div>

        </div>
      </section>

<section>
            <div class="wrapper">
				<?php if($dtearsd_cpt_event_important_title){?>
                        <h2 class="heading-3">  <?php echo $dtearsd_cpt_event_important_title?></h2>
						<?php }?>
                        <ol class="three-columns">
							<?php foreach($dtearsd_cpt_event_important_points as $points){?>
								<?php if($points){
									$dtearsd_cpt_event_text = ( isset( $points['dtearsd_cpt_event_text'] ) && '' !== $points['dtearsd_cpt_event_text'] ) ? $points['dtearsd_cpt_event_text'] : null;
									?>
                            		<li> <?php echo $dtearsd_cpt_event_text; ?></li>
							<?php }?>
							<?php }?>
                        </ol>
                  <?php if($dtearsd_cpt_event_guest_title){?>
                        <h2 class="heading-3">  <?php echo $dtearsd_cpt_event_guest_title?></h2>
						<?php }?>
                    <ol class="four-columns">
						<?php foreach($dtearsd_cpt_event_guest as $guests){
									$dtearsd_cpt_event_name = ( isset( $guests['dtearsd_cpt_event_name'] ) && '' !== $guests['dtearsd_cpt_event_name'] ) ? $guests['dtearsd_cpt_event_name'] : null;
							?>
								<?php if($dtearsd_cpt_event_name){?>
                            <li>      <?php echo $dtearsd_cpt_event_name?></li>
							<?php }?>
							<?php }?>
                    </ol>
                </div>
            
        </section>







	  <div class="container-980">
		  <div class="wrapper">
		  <div class="s-96"></div>
			  <div class="post-image">
			  </div><!-- .post-image -->
			  <article id="post-<?php the_ID(); ?>" <?php post_class('post-ctn'); ?>>
					  <?php get_template_part( 'partials/content' ); ?>
					  <div class="clear"></div>
					  <div class="post-details">
						  <div class="post-pagination"> <?php the_posts_pagination() ?> </div>
					  </div>
				  </div>
	  
				  <?php
				  wp_reset_query();
				  wp_reset_postdata();
	  ?>

			  </article>
		  </div>
	  </div>

