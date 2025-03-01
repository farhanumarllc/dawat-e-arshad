<?php
/**
 * The template for displaying website header
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
// Page Tags - Advanced custom fields variables
$tracking = ( isset( $option_fields['tracking_code'] ) ) ? $option_fields['tracking_code'] : null;
$ccss     = ( isset( $option_fields['custom_css'] ) ) ? $option_fields['custom_css'] : null;
$hscripts = ( isset( $option_fields['head_scripts'] ) ) ? $option_fields['head_scripts'] : null;
$bscripts = ( isset( $option_fields['body_scripts'] ) ) ? $option_fields['body_scripts'] : null;

$dtearsd_tohdr_btn = ( isset( $option_fields['dtearsd_tohdr_btn'] ) ) ? $option_fields['dtearsd_tohdr_btn'] : null;
$dtearsd_tohdr_btn_two = ( isset( $option_fields['dtearsd_tohdr_btn_two'] ) ) ? $option_fields['dtearsd_tohdr_btn_two'] : null;
$dtearsd_tohdr_tbar = ( isset( $option_fields['dtearsd_tohdr_tbar'] ) ) ? $option_fields['dtearsd_tohdr_tbar'] : null;
$dtearsd_tohdr_nzakt = ( isset( $option_fields['dtearsd_tohdr_nzakt'] ) ) ? $option_fields['dtearsd_tohdr_nzakt'] : null;
$dtearsd_tohdr_tbar = ( isset( $option_fields['dtearsd_tohdr_tbar'] ) ) ? $option_fields['dtearsd_tohdr_tbar'] : null;


// Page variables - Advanced custom fields variables
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<?php
		// Add Head Scripts
	if ( $hscripts != '' ) {
		echo html_entity_decode( $hscripts, ENT_QUOTES );
	}
	?>
	<link rel="apple-touch-icon" sizes="180x180"
		href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/pwa/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32"
		href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/pwa/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16"
		href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/pwa/favicon-16x16.png">
	<link rel="icon" sizes="any" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/pwa/favicon.ico">
	<link rel="icon" type="image/svg+xml"
		href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/pwa/icon.svg">
	<link rel="manifest" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/pwa/site.webmanifest">
	<meta name="theme-color" content="#0047FE">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="application-name" content="Dtearsd Package">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton_color" content="#0047FE">
	<meta name="msapplication-TileColor" content="#0047FE">
	<meta name="msapplication-tap-highlight" content="no">
	<meta name="msapplication-TileImage"
		content="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/pwa/pwa-icon-144.png">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#0047FE">
	<?php
		// Tracking Code
	if ( $tracking != '' ) {
		echo html_entity_decode( $tracking, ENT_QUOTES );
	}

		// Custom CSS
	if ( $ccss != '' ) {
		echo '<style type="text/css">';
		echo html_entity_decode( $ccss, ENT_QUOTES );
		echo '</style>';
	}
	?>
	 <?php wp_head(); ?> <script>
	"serviceWorker" in navigator && window.addEventListener("load", function() {
		navigator.serviceWorker.register("/sw.js").then(function(e) {
			console.log("ServiceWorker registration successful with scope: ", e.scope)
		}, function(e) {
			console.log("ServiceWorker registration failed: ", e)
		})
	});
	jQuery(document).ready(function() {
		if (jQuery('#top-bar-ajax').length > 0) {
			jQuery('#top-bar-ajax').topBar();
		}
	});
	</script>
</head>

<body <?php body_class(); ?>> <?php wp_body_open(); ?> <?php
if ( $bscripts != '' ) {
	?>
	 <div style="display: none;">
		<?php echo html_entity_decode( $bscripts, ENT_QUOTES ); ?> </div> <?php } ?> <a
		class="skip-link screen-reader-text"
		href="#page-section"><?php esc_html_e( 'Skip to content', 'dtearsd_td' ); ?></a>
	<header id="header-section" class="header-section">
		<!-- Header Start -->
		<div class="top-bar center-align" id="top-bar-ajax" style="display:none;">
			<div class="header-wrapper">
				<div class="top-bar-text">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry.
					<?php
					if ( $dtearsd_tohdr_btn ) {
						echo dawat_acf_button( $dtearsd_tohdr_btn, '' );
					}
					?>
				</div>
			</div>
			<div class="top-bar-cross">
				<span>
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/topbar-cross-icon.svg"
						width="16" height="16" alt="<?php esc_attr_e( 'Top bar', 'dtearsd_td' ); ?>">
				</span>
			</div>
		</div>
		<div class="header-wrapper header-inner d-flex align-items-center justify-content-between">
			<div class="header-logo logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img
						src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/site-logo.svg"
						alt="Site Logo" /></a>
			</div>
			<div class="right-header header-navigation">
				<div class="nav-overlay">
					<div class="nav-container">
						<div class="header-nav">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'header-nav',
								'fallback_cb'    => 'nav_fallback',
							)
						);
						?>
							 </div>
						<?php if ( $dtearsd_tohdr_btn || $dtearsd_tohdr_btn_two ) { ?>
						<div class="header-btns desktop-hide">
							<?php
							if ( $dtearsd_tohdr_btn ) {
								echo dawat_acf_button( $dtearsd_tohdr_btn, 'button' );
							}

							if ( $dtearsd_tohdr_btn_two ) {
								echo dawat_acf_button( $dtearsd_tohdr_btn_two, 'button' );
							}
							?>
						</div>
						<?php } ?>
					</div>
				</div>
				<div class="menu-btn">
					<span class="top"></span>
					<span class="middle"></span>
					<span class="bottom"></span>
				</div>
			</div>
			<?php if ( $dtearsd_tohdr_btn || $dtearsd_tohdr_btn_two ) { ?>
			<div class="header-btns">
				<?php
				if ( $dtearsd_tohdr_btn ) {
					echo dawat_acf_button( $dtearsd_tohdr_btn, 'button' );
				}

				if ( $dtearsd_tohdr_btn_two ) {
					echo dawat_acf_button( $dtearsd_tohdr_btn_two, 'button' );
				}
				?>
			</div>
			<?php } ?>
			<!-- header buttons -->
		</div>
		<!-- Header End -->
	</header>
	<!-- Main Area Start -->
	<main id="main-section" class="main-section">





	<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home - Dawat o Irshad</title>
    <link rel="icon" type="image/x-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/site-colored-logo.png" />
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/bundle.min.css" />
</head>

<body class="urdu-language">
    <header class="header-section">
		<?php if($dtearsd_tohdr_tbar == 1){ ?>
        <div class="top-bar center-align" id="top-bar-ajax">
            <div class="header-wrapper d-flex">
                
                <?php if ($dtearsd_tohdr_nzakt){?>
                <div class="top-bar-text d-flex">
            <?php foreach ($dtearsd_tohdr_nzakt as $nzakts){?>
                <?php 
					$title = ( isset( $nzakts['title'] ) && '' !== $nzakts['title'] ) ? $nzakts['title'] : null;
					$time = ( isset( $nzakts['time'] ) && '' !== $nzakts['time'] ) ? $nzakts['time'] : null; ?>
                    <span><?php echo $title; ?> :: <?php echo $time; ?></span>
					<?php }?>
                </div>
				<?php }?>
                <div class="top-bar-right">
                    <div id="islamicDate">
                        <p>
							
						</p>
                    </div>
                </div>
            </div>
        </div>
		<?php } ?>
        <div class="header-wrapper header-inner d-flex align-items-center justify-content-between">
            <div class="header-logo logo">
                <a href="home.html"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/site-logo.png" alt="Site Logo" /></a>
            </div>
            <div class="right-header header-navigation">
                <div class="nav-overlay">
                    <div class="nav-container">
                        <div class="header-nav">
							<?php
								wp_nav_menu(array(
									'menu' => 'header-nav',
									'menu_class' => '',
									'container' => '',
									'active_class' => 'current-menu-item'
								));
								?>
                            <div class="header-btns desktop-hide">
                                <a href="contact.html" class="button" title="Contact Us"><span>Contact Us</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu-btn">
                    <span class="top"></span>
                    <span class="middle"></span>
                    <span class="bottom"></span>
                </div>
            </div>
			 <?php if ($dtearsd_tohdr_btn) { 
    $button_url = (isset($dtearsd_tohdr_btn['url']) && '' !== $dtearsd_tohdr_btn['url']) ? $dtearsd_tohdr_btn['url'] : null;
    $button_title = (isset($dtearsd_tohdr_btn['title']) && '' !== $dtearsd_tohdr_btn['title']) ? $dtearsd_tohdr_btn['title'] : null;
		?>
	<div class="header-btns">
			<a <?php if ($button_url) { ?> href="<?php echo $button_url; ?>" <?php } ?> class="button">
			<?php if ($button_title) { ?><span><?php echo $button_title; ?></span><?php } ?>
		</a>
	</div>
	<?php } ?>

        </div>
    </header>