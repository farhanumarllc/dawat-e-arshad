<?php
/**
 * The template for displaying website footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dtearsd Package
 * @since 1.0.0
 */
// Global variables
global $option_fields;
global $pID;
global $fields;

$pID = get_the_ID();

if ( is_home() ) {
	$pID = get_option( 'page_for_posts' );
}

if ( is_404() || is_archive() || is_category() || is_search() ) {
	$pID = get_option( 'page_on_front' );
}

if ( function_exists( 'get_fields' ) && function_exists( 'get_fields_escaped' ) ) {
	$option_fields = get_fields_escaped( 'option' );
	$fields        = get_fields_escaped( $pID );
}
?> <?php

// Default Footer Options

$footer_scripts = ( isset( $option_fields['footer_scripts'] ) ) ? $option_fields['footer_scripts'] : null;


// Schema Markup - ACF variables.

$dtearsd_schema_check     = ( isset( $option_fields['dtearsd_schema_check'] ) ) ? $option_fields['dtearsd_schema_check'] : null;
// $dtearsd_schema_check = $option_fields['dtearsd_schema_check'];
if ( $dtearsd_schema_check ) {
	$dtearsd_schema_business_name       = html_entity_remove( $option_fields['dtearsd_schema_business_name'] );
	$dtearsd_schema_business_legal_name = html_entity_remove( $option_fields['dtearsd_schema_business_legal_name'] );
	$dtearsd_schema_street_address      = html_entity_remove( $option_fields['dtearsd_schema_street_address'] );
	$dtearsd_schema_locality            = html_entity_remove( $option_fields['dtearsd_schema_locality'] );
	$dtearsd_schema_region              = html_entity_remove( $option_fields['dtearsd_schema_region'] );
	$dtearsd_schema_postal_code         = html_entity_remove( $option_fields['dtearsd_schema_postal_code'] );
	$dtearsd_schema_map_short_link      = html_entity_remove( $option_fields['dtearsd_schema_map_short_link'] );
	$dtearsd_schema_latitude            = html_entity_remove( $option_fields['dtearsd_schema_latitude'] );
	$dtearsd_schema_longitude           = html_entity_remove( $option_fields['dtearsd_schema_longitude'] );
	$dtearsd_schema_opening_hours       = html_entity_remove( $option_fields['dtearsd_schema_opening_hours'] );
	$dtearsd_schema_telephone           = html_entity_remove( $option_fields['dtearsd_schema_telephone'] );
	$dtearsd_schema_business_email      = html_entity_remove( $option_fields['dtearsd_schema_business_email'] );
	$dtearsd_schema_business_logo       = html_entity_remove( $option_fields['dtearsd_schema_business_logo'] );
	$dtearsd_schema_price_range         = html_entity_remove( $option_fields['dtearsd_schema_price_range'] );
	$dtearsd_schema_type                = html_entity_remove( $option_fields['dtearsd_schema_type'] );
}


// Custom - ACF variables.

$dtearsd_ftrop_title     = ( isset( $option_fields['dtearsd_ftrop_title'] ) ) ? $option_fields['dtearsd_ftrop_title'] : null;
$dtearsd_ftrop_text    = ( isset( $option_fields['dtearsd_ftrop_text'] ) ) ? $option_fields['dtearsd_ftrop_text'] : null;
// $dtearsd_ftrop_text      = html_entity_decode( $option_fields['dtearsd_ftrop_text'] );
$dtearsd_ftrop_copyright     = ( isset( $option_fields['dtearsd_ftrop_copyright'] ) ) ? $option_fields['dtearsd_ftrop_copyright'] : null;
// $dtearsd_ftrop_copyright = html_entity_decode( $option_fields['dtearsd_ftrop_copyright'] );
$dtearsd_social_fb       = ( isset( $option_fields['dtearsd_social_fb'] ) ) ? $option_fields['dtearsd_social_fb'] : null;
$dtearsd_social_tw      = ( isset( $option_fields['dtearsd_social_tw '] ) ) ? $option_fields['dtearsd_social_tw '] : null;
$dtearsd_social_li       = ( isset( $option_fields['dtearsd_social_li'] ) ) ? $option_fields['dtearsd_social_li'] : null;
$dtearsd_social_in      = ( isset( $option_fields['dtearsd_social_in'] ) ) ? $option_fields['dtearsd_social_in'] : null;
$dtearsd_social_yt       = ( isset( $option_fields['dtearsd_social_yt'] ) ) ? $option_fields['dtearsd_social_yt'] : null;
$dtearsd_social_pi       = ( isset( $option_fields['dtearsd_social_pi'] ) ) ? $option_fields['dtearsd_social_pi'] : null;
$dtearsd_social_wa       = ( isset( $option_fields['dtearsd_social_wa'] ) ) ? $option_fields['dtearsd_social_wa'] : null;
$dtearsd_ftrop_email       = ( isset( $option_fields['dtearsd_ftrop_email'] ) ) ? $option_fields['dtearsd_ftrop_email'] : null;
$dtearsd_ftrop_colmn_title_one       = ( isset( $option_fields['dtearsd_ftrop_colmn_title_one'] ) ) ? $option_fields['dtearsd_ftrop_colmn_title_one'] : null;
$dtearsd_ftrop_colmn_title_two       = ( isset( $option_fields['dtearsd_ftrop_colmn_title_two'] ) ) ? $option_fields['dtearsd_ftrop_colmn_title_two'] : null;
$dtearsd_ftrop_column_title_three      = ( isset( $option_fields['dtearsd_ftrop_colmn_title_three'] ) ) ? $option_fields['dtearsd_ftrop_colmn_title_three'] : null;
$dtearsd_ftrop_bank_detail      = ( isset( $option_fields['dtearsd_ftrop_bank_detail'] ) ) ? $option_fields['dtearsd_ftrop_bank_detail'] : null;
$dtearsd_ftrop_address      = ( isset( $option_fields['dtearsd_ftrop_address'] ) ) ? $option_fields['dtearsd_ftrop_address'] : null;

?>
 <?php get_template_part( 'partials/cta' ); ?> </main>


<footer id="footer-section" class="footer-section">
        <!-- Footer Start -->
        <div class="footer-ctn">
            <div class="wrapper">
                <div class="footer-widgets d-flex justify-content-between flex-wrap">
                    <div class="single-widget">
                        <div class="footer-logo">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/site-logo.png" alt="Khatme Nabuwat Logo" />
                            </a>
                        </div>
						<?php if ( $dtearsd_ftrop_title ) { ?>
						 <h6 class="heading-6"> <?php echo html_entity_decode( $dtearsd_ftrop_title ); ?></h6>
					<?php } ?>
					<?php if ( $dtearsd_ftrop_address  ) { ?>
						<div class="mudrassa-address"><?php echo html_entity_decode($dtearsd_ftrop_address);   ?></div>
					<?php } ?>
                       
                    </div>
                    <div class="single-widget">
                        <div class="footer-nav">
							<?php if($dtearsd_ftrop_colmn_title_one){?>
                            <h6 class="heading-6"> <?php echo $dtearsd_ftrop_colmn_title_one;?> </h6>  <?php }?>
								
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'footer-nav-one',
									'fallback_cb'    => 'nav_fallback',
									 'menu_class'     => 'menu',
								)
							);
							?>
						
						
						
                        </div>
                    </div>
                    <div class="single-widget">
                        <div class="footer-nav">
							<?php if($dtearsd_ftrop_colmn_title_two){?>
                            <h6 class="heading-6"> <?php echo $dtearsd_ftrop_colmn_title_two;?></h6><?php }?>

							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'footer-nav-two',
									'fallback_cb'    => 'nav_fallback',
									'menu_class'     =>  'menu'
								)
							);
							?>
                        </div>
                    </div>
                    <div class="single-widget">
						<?php if($dtearsd_ftrop_column_title_three){?>
                        <h6 class="heading-6">  <?php echo $dtearsd_ftrop_column_title_three;?></h6><?php }?>
                        <div class="footer-form">
							<?php if($dtearsd_ftrop_email){?>
                            <div class="mudrassa-email">
                                <a href="mailto:<?php echo$dtearsd_ftrop_email;?>"><?php echo$dtearsd_ftrop_email;?></a>
                            </div><?php }?>
                            <div class="social-icons d-flex">
						<?php
						if ( $dtearsd_social_fb ) {
							?>
							 <a href="<?php echo $dtearsd_social_fb; ?>"
                                    class="facebook flex-center"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/facebook-icon.svg"
                                        alt="Facebook Icon" /></a><?php } ?>

						<?php
						if ( $dtearsd_social_tw  ) {
							?>
							 <a href="<?php echo $dtearsd_social_tw ; ?>" class="twitter flex-center"><img
                                        src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/twitter-icon.svg" alt="Twitter Icon" /></a><?php } ?>
						<?php
						if ( $dtearsd_social_li ) {
							?>
							 <a href="<?php echo $dtearsd_social_li; ?>"
                                    class="linkdhin flex-center"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/linkedin-icon.svg"
                                        alt="LinkedIn Icon" /></a><?php } ?>
						<?php
						if ( $dtearsd_social_in ) {
							?>
							 <a href="<?php echo $dtearsd_social_in; ?>" class="instagram flex-center">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/instagram-icon.svg" alt="Instagram Icon" /></a><?php } ?>
								<?php
						if ( $dtearsd_social_yt ) {
							?>	
									  <a href="<?php echo $dtearsd_social_yt; ?>"
                                    class="youtube flex-center">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/youtube-icon.svg" alt="Youtube Icon" /></a><?php } ?>
									<?php
						if ( $dtearsd_social_pi ) {
							?>	
									  <a href="<?php echo $dtearsd_social_pi; ?>"
                                    class="youtube flex-center">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/pinterest-icon.svg" alt="Pinterest Icon" /></a><?php } ?>
									<?php
						if ( $dtearsd_social_wa ) {
							?>	
									  <a href="<?php echo $dtearsd_social_wa; ?>"
                                    class="youtube flex-center">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/whatsapp-icon.svg" alt="Whatsapp Icon" /></a><?php } ?>		
										
					</div>
                               
                            </div>
													<?php if($dtearsd_ftrop_bank_detail){?>
							<?php echo html_entity_decode($dtearsd_ftrop_bank_detail); ?>
						<?php }?>
                        </div>

                    </div>
					<div class="footer-bottom d-flex align-items-center justify-content-between">
					<?php if ( $dtearsd_ftrop_copyright ) { ?>
					<div class="copy-right"><?php echo $dtearsd_ftrop_copyright; ?></div>
				<?php } ?>
                    <div class="legal-nav">
                        <div class="menu-legal-nav-container">
							<?php
						wp_nav_menu(
							array(
								'theme_location' => 'legal-nav',
								'fallback_cb'    => 'nav_fallback',
								'menu_class'     =>  'menu'
							)
						);
						?>
                            
                        </div>
                    </div>
                </div>
                </div>
                
            </div>
        </div>

    </footer>
 <?php wp_footer(); ?> <?php
if ( $footer_scripts != '' ) {
	?>
	 <div style="display: none;">
	<?php echo html_entity_decode( $footer_scripts, ENT_QUOTES ); ?> </div> <?php } ?> </body>

</html>
