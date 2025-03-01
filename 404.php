<?php
/**
 * The template  displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Dtearsd Package
 * @since   1.0.0
 */

// Include header
get_header();

// Global variables
global $option_fields;
global $pID;
global $fields;

// 404 Page - Advanced custom fields variables
$dtearsd_error_headline = ( isset( $option_fields['dtearsd_error_headline'] ) && '' !== $option_fields['dtearsd_error_headline'] ) ? $option_fields['dtearsd_error_headline'] : null;
$dtearsd_error_text = ( isset( $option_fields['dtearsd_error_text'] ) && '' !== $option_fields['dtearsd_error_text'] ) ? $option_fields['dtearsd_error_text'] : null;
$dtearsd_error_sub_headline = ( isset( $option_fields['dtearsd_error_sub_headline'] ) && '' !== $option_fields['dtearsd_error_sub_headline'] ) ? $option_fields['dtearsd_error_sub_headline'] : null;
$dtearsd_error_text = ( isset( $option_fields['dtearsd_error_text'] ) && '' !== $option_fields['dtearsd_error_text'] ) ? $option_fields['dtearsd_error_text'] : null;
$dtearsd_error_menu = ( isset( $option_fields['dtearsd_error_menu'] ) && '' !== $option_fields['dtearsd_error_menu'] ) ? $option_fields['dtearsd_error_menu'] : null;
$dtearsd_error_menu_bottom_text = ( isset( $option_fields['dtearsd_error_menu_bottom_text'] ) && '' !== $option_fields['dtearsd_error_menu_bottom_text'] ) ? $option_fields['dtearsd_error_menu_bottom_text'] : null;
$dtearsd_error_search = ( isset( $option_fields['dtearsd_error_search'] ) && '' !== $option_fields['dtearsd_error_search'] ) ? $option_fields['dtearsd_error_search'] : null;

?>

<section
        id="banner-section"
        class="banner-section banner-books green-ctn center-align ctn-980"
      >
        <div class="wrapper">
          <h1 class="heading-1"><?php echo $dtearsd_error_headline; ?></h1>
			<p><?php echo $dtearsd_error_sub_headline; ?></p>
        </div>
      </section>




<section id="page-section" class="page-section">
	<!-- Page Content Start -->
	 <div class="s-96"></div>
	<div class="m-section">
		<div class="wrapper">
			<section class="error-404 not-found">
				<div class="page-content">
					<?php
					if ( $dtearsd_error_text ) {
						echo $dtearsd_error_text;
					}
					if ( $dtearsd_error_menu ) {
						?>
					<div class="error">
						<?php echo $dtearsd_error_menu; ?> </div>
						<?php
					}
					?>
					<div class="clear"></div>
					<div class="form-404">
						<?php
						if ( $dtearsd_error_menu_bottom_text ) {
							echo $dtearsd_error_menu_bottom_text;
						}
						if ( 1 !== $dtearsd_error_search ) {
							get_search_form();
						}
						?>
					</div>
					<!--404-form-->
				</div><!-- .page-content -->
			</section><!-- .error-404 -->
			<div class="ts-80"></div>
		</div>
	</div>
</section>
<?php
get_footer();
