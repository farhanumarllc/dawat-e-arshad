<?php
/**
 * Functions for custom Gutenberg blocks
 *
 * @link https://www.advancedcustomfields.com/resources/blocks/
 *
 * @package Dtearsd Package
 * @since 1.0.0
 */

/**
 * Register custom Gutenberg blocks
 */
add_action( 'acf/init', 'dawat_theme_acf_init' );
function dawat_theme_acf_init() {

	if ( function_exists( 'acf_register_block' ) ) {

		// Register a block - Spacer
		acf_register_block(
			array(
				'name'            => 'spacer',
				'title'           => __( 'Theme Spacer', 'dtearsd_td' ),
				'description'     => __( 'A custom spacer block for theme.', 'dtearsd_td' ),
				'render_callback' => 'dawat_acf_block_callback',
				'category'        => 'dawat-blocks',
				'icon'            => '<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M8 0H16V64H8V0Z" fill="#A50A09"/>
				<path d="M8 0H16V64H8V0Z" fill="#A50A09"/>
				<path d="M8 0H16V64H8V0Z" fill="#A50A09"/>
				<path d="M24 56L24 64L-3.49691e-07 64L0 56L24 56Z" fill="#A50A09"/>
				<path d="M24 56L24 64L-3.49691e-07 64L0 56L24 56Z" fill="#A50A09"/>
				<path d="M24 56L24 64L-3.49691e-07 64L0 56L24 56Z" fill="#A50A09"/>
				<path d="M24 0L24 8L-3.49691e-07 8L0 -1.04907e-06L24 0Z" fill="#A50A09"/>
				<path d="M24 0L24 8L-3.49691e-07 8L0 -1.04907e-06L24 0Z" fill="#A50A09"/>
				<path d="M24 0L24 8L-3.49691e-07 8L0 -1.04907e-06L24 0Z" fill="#A50A09"/>
				<path d="M64 0L64 4L36 4L36 -1.31134e-06L64 0Z" fill="#A50A09"/>
				<path d="M64 0L64 4L36 4L36 -1.31134e-06L64 0Z" fill="#A50A09"/>
				<path d="M64 0L64 4L36 4L36 -1.31134e-06L64 0Z" fill="#A50A09"/>
				<path d="M50 16L50 20L36 20L36 16L50 16Z" fill="#A50A09"/>
				<path d="M50 16L50 20L36 20L36 16L50 16Z" fill="#A50A09"/>
				<path d="M50 16L50 20L36 20L36 16L50 16Z" fill="#A50A09"/>
				<path d="M64 8L64 12L36 12L36 8L64 8Z" fill="#A50A09"/>
				<path d="M64 8L64 12L36 12L36 8L64 8Z" fill="#A50A09"/>
				<path d="M64 8L64 12L36 12L36 8L64 8Z" fill="#A50A09"/>
				<path d="M64 44L64 48L36 48L36 44L64 44Z" fill="#A50A09"/>
				<path d="M64 44L64 48L36 48L36 44L64 44Z" fill="#A50A09"/>
				<path d="M64 44L64 48L36 48L36 44L64 44Z" fill="#A50A09"/>
				<path d="M50 60L50 64L36 64L36 60L50 60Z" fill="#A50A09"/>
				<path d="M50 60L50 64L36 64L36 60L50 60Z" fill="#A50A09"/>
				<path d="M50 60L50 64L36 64L36 60L50 60Z" fill="#A50A09"/>
				<path d="M64 52L64 56L36 56L36 52L64 52Z" fill="#A50A09"/>
				<path d="M64 52L64 56L36 56L36 52L64 52Z" fill="#A50A09"/>
				<path d="M64 52L64 56L36 56L36 52L64 52Z" fill="#A50A09"/>
				</svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'Spacer Block' ),
				'align'           => 'full',
				'supports'        => array(
					'align' => array( 'full' ),
				),
			)
		);

		// Register a block - Button
		acf_register_block(
			array(
				'name'            => 'button',
				'title'           => __( 'Theme Buttons', 'dtearsd_td' ),
				'description'     => __( 'A custom button block with theme styles.', 'dtearsd_td' ),
				'render_callback' => 'dawat_acf_block_callback',
				'category'        => 'dawat-blocks',
				'icon'            => '<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M64 16L64 20L-3.73004e-07 20L0 16L64 16Z" fill="#A50A09"/>
				<path d="M64 16L64 20L-3.73004e-07 20L0 16L64 16Z" fill="#A50A09"/>
				<path d="M64 16L64 20L-3.73004e-07 20L0 16L64 16Z" fill="#A50A09"/>
				<path d="M64 8L64 12L-3.73004e-07 12L0 8L64 8Z" fill="#A50A09"/>
				<path d="M64 8L64 12L-3.73004e-07 12L0 8L64 8Z" fill="#A50A09"/>
				<path d="M64 8L64 12L-3.73004e-07 12L0 8L64 8Z" fill="#A50A09"/>
				<path d="M64 0L64 4L-3.73004e-07 4L0 -1.31134e-06L64 0Z" fill="#A50A09"/>
				<path d="M64 0L64 4L-3.73004e-07 4L0 -1.31134e-06L64 0Z" fill="#A50A09"/>
				<path d="M64 0L64 4L-3.73004e-07 4L0 -1.31134e-06L64 0Z" fill="#A50A09"/>
				<path d="M64 44L64 48L-3.73004e-07 48L0 44L64 44Z" fill="#A50A09"/>
				<path d="M64 44L64 48L-3.73004e-07 48L0 44L64 44Z" fill="#A50A09"/>
				<path d="M64 44L64 48L-3.73004e-07 48L0 44L64 44Z" fill="#A50A09"/>
				<path d="M64 60L64 64L-3.73004e-07 64L0 60L64 60Z" fill="#A50A09"/>
				<path d="M64 60L64 64L-3.73004e-07 64L0 60L64 60Z" fill="#A50A09"/>
				<path d="M64 60L64 64L-3.73004e-07 64L0 60L64 60Z" fill="#A50A09"/>
				<path d="M64 52L64 56L-3.73004e-07 56L0 52L64 52Z" fill="#A50A09"/>
				<path d="M64 52L64 56L-3.73004e-07 56L0 52L64 52Z" fill="#A50A09"/>
				<path d="M64 52L64 56L-3.73004e-07 56L0 52L64 52Z" fill="#A50A09"/>
				<path d="M28 28L28 36L-7.46008e-07 36L0 28L28 28Z" fill="#A50A09"/>
				<path d="M28 28L28 36L-7.46008e-07 36L0 28L28 28Z" fill="#A50A09"/>
				<path d="M28 28L28 36L-7.46008e-07 36L0 28L28 28Z" fill="#A50A09"/>
				<path d="M64 28L64 36L36 36L36 28L64 28Z" fill="#A50A09"/>
				<path d="M64 28L64 36L36 36L36 28L64 28Z" fill="#A50A09"/>
				<path d="M64 28L64 36L36 36L36 28L64 28Z" fill="#A50A09"/>
				</svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'Button' ),
				'align'           => 'wide',
				'supports'        => array(
					'align' => false,
				),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => esc_url( get_template_directory_uri() ) . '/assets/img/admin/default-block-preview.webp',
						),
					),
				),
			)
		);


		// Register a block - My custom block
		acf_register_block(
			array(
				'name'            => 'my-custom-block',
				'title'           => __( 'My custom Block', 'dtearsd_td' ),
				'description'     => __( 'My custom block with theme styles.', 'dtearsd_td' ),
				'render_callback' => 'dawat_acf_block_callback',
				'category'        => 'dawat-blocks',
				'icon'            => '<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M64 16L64 20L-3.73004e-07 20L0 16L64 16Z" fill="#A50A09"/>
				<path d="M64 16L64 20L-3.73004e-07 20L0 16L64 16Z" fill="#A50A09"/>
				<path d="M64 16L64 20L-3.73004e-07 20L0 16L64 16Z" fill="#A50A09"/>
				<path d="M64 8L64 12L-3.73004e-07 12L0 8L64 8Z" fill="#A50A09"/>
				<path d="M64 8L64 12L-3.73004e-07 12L0 8L64 8Z" fill="#A50A09"/>
				<path d="M64 8L64 12L-3.73004e-07 12L0 8L64 8Z" fill="#A50A09"/>
				<path d="M64 0L64 4L-3.73004e-07 4L0 -1.31134e-06L64 0Z" fill="#A50A09"/>
				<path d="M64 0L64 4L-3.73004e-07 4L0 -1.31134e-06L64 0Z" fill="#A50A09"/>
				<path d="M64 0L64 4L-3.73004e-07 4L0 -1.31134e-06L64 0Z" fill="#A50A09"/>
				<path d="M64 44L64 48L-3.73004e-07 48L0 44L64 44Z" fill="#A50A09"/>
				<path d="M64 44L64 48L-3.73004e-07 48L0 44L64 44Z" fill="#A50A09"/>
				<path d="M64 44L64 48L-3.73004e-07 48L0 44L64 44Z" fill="#A50A09"/>
				<path d="M64 60L64 64L-3.73004e-07 64L0 60L64 60Z" fill="#A50A09"/>
				<path d="M64 60L64 64L-3.73004e-07 64L0 60L64 60Z" fill="#A50A09"/>
				<path d="M64 60L64 64L-3.73004e-07 64L0 60L64 60Z" fill="#A50A09"/>
				<path d="M64 52L64 56L-3.73004e-07 56L0 52L64 52Z" fill="#A50A09"/>
				<path d="M64 52L64 56L-3.73004e-07 56L0 52L64 52Z" fill="#A50A09"/>
				<path d="M64 52L64 56L-3.73004e-07 56L0 52L64 52Z" fill="#A50A09"/>
				<path d="M28 28L28 36L-7.46008e-07 36L0 28L28 28Z" fill="#A50A09"/>
				<path d="M28 28L28 36L-7.46008e-07 36L0 28L28 28Z" fill="#A50A09"/>
				<path d="M28 28L28 36L-7.46008e-07 36L0 28L28 28Z" fill="#A50A09"/>
				<path d="M64 28L64 36L36 36L36 28L64 28Z" fill="#A50A09"/>
				<path d="M64 28L64 36L36 36L36 28L64 28Z" fill="#A50A09"/>
				<path d="M64 28L64 36L36 36L36 28L64 28Z" fill="#A50A09"/>
				</svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'My custom Block, Custom, My' ),
				'align'           => 'wide',
				'supports'        => array(
					'align' => false,
				),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => esc_url( get_template_directory_uri() ) . '/assets/img/admin/default-block-preview.webp',
						),
					),
				),
			)
		);

// Register a block - block mid-page-city
		acf_register_block(
			array(
				'name'            => 'mid-page-city',
				'title'           => __( 'Mid Page City', 'dtearsd_td' ),
				'description'     => __( 'Mid Page City with theme styles.', 'dtearsd_td' ),
				'render_callback' => 'dawat_acf_block_callback',
				'category'        => 'dawat-blocks',
				'icon'            => '<svg width="64" height="64" viewBox="0 0 17 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
	<path d="M0 3v11h17v-11h-17zM16 13h-15v-9h15v9zM14 8h-10v-1h10v1zM9 9h5v2h-5v-2z" fill="#000000" />
</svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'Mid Page City, Custom, My' ),
				'align'           => 'wide',
				'supports'        => array(
					'align' => false,
				),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => esc_url( get_template_directory_uri() ) . '/assets/img/admin/block-mid-page-cta.webp',
						),
					),
				),
			)
		);








		// Register a block - New block my
		acf_register_block(
			array(
				'name'            => 'new-block-my',
				'title'           => __( 'New  Block', 'dtearsd_td' ),
				'description'     => __( 'My custom block with theme styles.', 'dtearsd_td' ),
				'render_callback' => 'dawat_acf_block_callback',
				'category'        => 'dawat-blocks',
				'icon'            => '<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M64 16L64 20L-3.73004e-07 20L0 16L64 16Z" fill="#A50A09"/>
				<path d="M64 16L64 20L-3.73004e-07 20L0 16L64 16Z" fill="#A50A09"/>
				<path d="M64 16L64 20L-3.73004e-07 20L0 16L64 16Z" fill="#A50A09"/>
				<path d="M64 8L64 12L-3.73004e-07 12L0 8L64 8Z" fill="#A50A09"/>
				<path d="M64 8L64 12L-3.73004e-07 12L0 8L64 8Z" fill="#A50A09"/>
				<path d="M64 8L64 12L-3.73004e-07 12L0 8L64 8Z" fill="#A50A09"/>
				<path d="M64 0L64 4L-3.73004e-07 4L0 -1.31134e-06L64 0Z" fill="#A50A09"/>
				<path d="M64 0L64 4L-3.73004e-07 4L0 -1.31134e-06L64 0Z" fill="#A50A09"/>
				<path d="M64 0L64 4L-3.73004e-07 4L0 -1.31134e-06L64 0Z" fill="#A50A09"/>
				<path d="M64 44L64 48L-3.73004e-07 48L0 44L64 44Z" fill="#A50A09"/>
				<path d="M64 44L64 48L-3.73004e-07 48L0 44L64 44Z" fill="#A50A09"/>
				<path d="M64 44L64 48L-3.73004e-07 48L0 44L64 44Z" fill="#A50A09"/>
				<path d="M64 60L64 64L-3.73004e-07 64L0 60L64 60Z" fill="#A50A09"/>
				<path d="M64 60L64 64L-3.73004e-07 64L0 60L64 60Z" fill="#A50A09"/>
				<path d="M64 60L64 64L-3.73004e-07 64L0 60L64 60Z" fill="#A50A09"/>
				<path d="M64 52L64 56L-3.73004e-07 56L0 52L64 52Z" fill="#A50A09"/>
				<path d="M64 52L64 56L-3.73004e-07 56L0 52L64 52Z" fill="#A50A09"/>
				<path d="M64 52L64 56L-3.73004e-07 56L0 52L64 52Z" fill="#A50A09"/>
				<path d="M28 28L28 36L-7.46008e-07 36L0 28L28 28Z" fill="#A50A09"/>
				<path d="M28 28L28 36L-7.46008e-07 36L0 28L28 28Z" fill="#A50A09"/>
				<path d="M28 28L28 36L-7.46008e-07 36L0 28L28 28Z" fill="#A50A09"/>
				<path d="M64 28L64 36L36 36L36 28L64 28Z" fill="#A50A09"/>
				<path d="M64 28L64 36L36 36L36 28L64 28Z" fill="#A50A09"/>
				<path d="M64 28L64 36L36 36L36 28L64 28Z" fill="#A50A09"/>
				</svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'New Block My, Custom, My' ),
				'align'           => 'wide',
				'supports'        => array(
					'align' => false,
				),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => esc_url( get_template_directory_uri() ) . '/assets/img/admin/default-block-preview.webp',
						),
					),
				),
			)
		);

		// Register a block - faqs section
		acf_register_block(
			array(
				'name'            => 'faqs',
				'title'           => __( 'Faqs', 'dtearsd_td' ),
				'description'     => __( 'My custom block Faqs with theme styles.', 'dtearsd_td' ),
				'render_callback' => 'dawat_acf_block_callback',
				'category'        => 'dawat-blocks',
				'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="64" height="64" viewBox="0 0 256 256" xml:space="preserve">
<defs>
</defs>
<g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
	<path d="M 65.711 39.129 c -1.104 0 -2 -0.896 -2 -2 v -1.635 c 0 -0.55 0.227 -1.076 0.627 -1.454 l 4.977 -4.699 c 0.843 -0.869 1.34 -2.093 1.34 -3.388 V 25.77 c 0 -1.344 -0.53 -2.602 -1.494 -3.541 c -0.962 -0.938 -2.241 -1.438 -3.581 -1.401 c -2.653 0.068 -4.812 2.355 -4.812 5.098 c 0 1.104 -0.896 2 -2 2 s -2 -0.896 -2 -2 c 0 -4.892 3.906 -8.973 8.708 -9.097 c 2.459 -0.06 4.735 0.838 6.477 2.535 c 1.742 1.698 2.702 3.973 2.702 6.405 v 0.185 c 0 2.343 -0.899 4.558 -2.533 6.236 l -4.41 4.166 v 0.773 C 67.711 38.234 66.815 39.129 65.711 39.129 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
	<path d="M 65.71 47.77 c -0.79 0 -1.561 -0.319 -2.12 -0.87 c -0.56 -0.56 -0.88 -1.339 -0.88 -2.129 s 0.32 -1.56 0.88 -2.12 c 0.14 -0.14 0.29 -0.26 0.46 -0.37 c 0.16 -0.11 0.33 -0.2 0.51 -0.28 c 0.181 -0.07 0.37 -0.13 0.57 -0.17 c 0.38 -0.08 0.78 -0.08 1.17 0 c 0.19 0.04 0.38 0.1 0.56 0.17 c 0.181 0.08 0.351 0.17 0.521 0.28 c 0.16 0.11 0.31 0.23 0.45 0.37 c 0.56 0.56 0.88 1.33 0.88 2.12 s -0.32 1.57 -0.88 2.129 C 67.27 47.45 66.5 47.77 65.71 47.77 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
	<path d="M 49.808 82.489 c -0.521 0 -1.032 -0.203 -1.415 -0.587 L 36.734 70.233 H 2 c -1.104 0 -2 -0.896 -2 -2 v -43.12 c 0 -1.104 0.896 -2 2 -2 h 33.376 c 1.104 0 2 0.896 2 2 s -0.896 2 -2 2 H 4 v 39.121 h 33.563 c 0.531 0 1.04 0.211 1.415 0.587 l 8.83 8.837 v -7.424 c 0 -1.104 0.896 -2 2 -2 h 7.271 v -6.007 c 0 -1.104 0.896 -2 2 -2 s 2 0.896 2 2 v 8.007 c 0 1.104 -0.896 2 -2 2 h -7.271 V 80.49 c 0 0.81 -0.487 1.538 -1.235 1.848 C 50.325 82.439 50.065 82.489 49.808 82.489 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
	<path d="M 76.644 65.412 c -0.521 0 -1.032 -0.203 -1.415 -0.587 l -8.743 -8.751 c -0.257 0.009 -0.515 0.015 -0.774 0.015 c -13.394 0 -24.29 -10.896 -24.29 -24.289 S 52.317 7.51 65.711 7.51 C 79.104 7.51 90 18.407 90 31.8 c 0 8.352 -4.322 16.122 -11.356 20.557 v 11.056 c 0 0.81 -0.487 1.538 -1.235 1.848 C 77.161 65.362 76.901 65.412 76.644 65.412 z M 67.27 52.029 c 0.529 0 1.038 0.21 1.415 0.587 l 5.959 5.964 v -7.358 c 0 -0.722 0.389 -1.388 1.018 -1.742 C 82.038 45.881 86 39.106 86 31.8 c 0 -11.188 -9.102 -20.29 -20.289 -20.29 s -20.29 9.102 -20.29 20.29 s 9.103 20.289 20.29 20.289 c 0.479 0 0.952 -0.022 1.423 -0.055 C 67.179 52.031 67.225 52.029 67.27 52.029 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
	<path d="M 33.016 37.829 H 11.025 c -1.104 0 -2 -0.896 -2 -2 s 0.896 -2 2 -2 h 21.991 c 1.104 0 2 0.896 2 2 S 34.121 37.829 33.016 37.829 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
	<path d="M 36.269 49.214 H 11.025 c -1.104 0 -2 -0.896 -2 -2 s 0.896 -2 2 -2 h 25.244 c 1.104 0 2 0.896 2 2 S 37.374 49.214 36.269 49.214 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
	<path d="M 44.401 59.786 H 11.025 c -1.104 0 -2 -0.896 -2 -2 s 0.896 -2 2 -2 H 44.4 c 1.104 0 2 0.896 2 2 S 45.505 59.786 44.401 59.786 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
</g>
</svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'New Block Faqs, Custom, My' ),
				'align'           => 'wide',
				'supports'        => array(
					'align' => false,
				),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => esc_url( get_template_directory_uri() ) . '/assets/img/admin/block-faqs-section.webp',
						),
					),
				),
			)
		);


		// Register a block - three column tile
		acf_register_block(
			array(
				'name'            => 'three-column-tiles',
				'title'           => __( 'Three column Tiles', 'dtearsd_td' ),
				'description'     => __( 'My custom block Three Column Tiles with theme styles.', 'dtearsd_td' ),
				'render_callback' => 'dawat_acf_block_callback',
				'category'        => 'dawat-blocks',
				'icon'            => '<svg fill="#000000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
	 width="64" height="64" viewBox="0 0 35 35" xml:space="preserve">
<g>
	<g>
		<path d="M0,35h35v-6.717H0V35z M2.121,30.404h30.758v2.475H2.121V30.404z"/>
		<path d="M0,0v6.717h35V0H0z M32.879,4.596H2.121V2.121h30.758V4.596z"/>
		<rect y="9.016" width="9.426" height="16.968"/>
		<rect x="12.787" y="9.016" width="9.426" height="16.968"/>
		<rect x="25.574" y="9.016" width="9.426" height="16.968"/>
	</g>
</g>
</svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'New Block Three Column Tiles, Custom, My' ),
				'align'           => 'wide',
				'supports'        => array(
					'align' => false,
				),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => esc_url( get_template_directory_uri() ) . '/assets/img/admin/three-column-tile.webp',
						),
					),
				),
			)
		);


		// Register a block - lead paragraph
		acf_register_block(
			array(
				'name'            => 'lead-paragaraph',
				'title'           => __( 'Lead Paragaraph', 'dtearsd_td' ),
				'description'     => __( 'My custom block Lead Paragaraph with theme styles.', 'dtearsd_td' ),
				'render_callback' => 'dawat_acf_block_callback',
				'category'        => 'dawat-blocks',
				'icon'            => '<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M64 16L64 20L-3.73004e-07 20L0 16L64 16Z" fill="#A50A09"/>
				<path d="M64 16L64 20L-3.73004e-07 20L0 16L64 16Z" fill="#A50A09"/>
				<path d="M64 16L64 20L-3.73004e-07 20L0 16L64 16Z" fill="#A50A09"/>
				<path d="M64 8L64 12L-3.73004e-07 12L0 8L64 8Z" fill="#A50A09"/>
				<path d="M64 8L64 12L-3.73004e-07 12L0 8L64 8Z" fill="#A50A09"/>
				<path d="M64 8L64 12L-3.73004e-07 12L0 8L64 8Z" fill="#A50A09"/>
				<path d="M64 0L64 4L-3.73004e-07 4L0 -1.31134e-06L64 0Z" fill="#A50A09"/>
				<path d="M64 0L64 4L-3.73004e-07 4L0 -1.31134e-06L64 0Z" fill="#A50A09"/>
				<path d="M64 0L64 4L-3.73004e-07 4L0 -1.31134e-06L64 0Z" fill="#A50A09"/>
				<path d="M64 44L64 48L-3.73004e-07 48L0 44L64 44Z" fill="#A50A09"/>
				<path d="M64 44L64 48L-3.73004e-07 48L0 44L64 44Z" fill="#A50A09"/>
				<path d="M64 44L64 48L-3.73004e-07 48L0 44L64 44Z" fill="#A50A09"/>
				<path d="M64 60L64 64L-3.73004e-07 64L0 60L64 60Z" fill="#A50A09"/>
				<path d="M64 60L64 64L-3.73004e-07 64L0 60L64 60Z" fill="#A50A09"/>
				<path d="M64 60L64 64L-3.73004e-07 64L0 60L64 60Z" fill="#A50A09"/>
				<path d="M64 52L64 56L-3.73004e-07 56L0 52L64 52Z" fill="#A50A09"/>
				<path d="M64 52L64 56L-3.73004e-07 56L0 52L64 52Z" fill="#A50A09"/>
				<path d="M64 52L64 56L-3.73004e-07 56L0 52L64 52Z" fill="#A50A09"/>
				<path d="M28 28L28 36L-7.46008e-07 36L0 28L28 28Z" fill="#A50A09"/>
				<path d="M28 28L28 36L-7.46008e-07 36L0 28L28 28Z" fill="#A50A09"/>
				<path d="M28 28L28 36L-7.46008e-07 36L0 28L28 28Z" fill="#A50A09"/>
				<path d="M64 28L64 36L36 36L36 28L64 28Z" fill="#A50A09"/>
				<path d="M64 28L64 36L36 36L36 28L64 28Z" fill="#A50A09"/>
				<path d="M64 28L64 36L36 36L36 28L64 28Z" fill="#A50A09"/>
				</svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'New Block Lead Paragaraph, Custom, My' ),
				'align'           => 'wide',
				'supports'        => array(
					'align' => false,
				),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => esc_url( get_template_directory_uri() ) . '/assets/img/admin/default-block-preview.webp',
						),
					),
				),
			)
		);



		// Register a block - lead paragraph
		acf_register_block(
			array(
				'name'            => 'related-post',
				'title'           => __( 'Related Post', 'dtearsd_td' ),
				'description'     => __( 'My custom block Related Post with theme styles.', 'dtearsd_td' ),
				'render_callback' => 'dawat_acf_block_callback',
				'category'        => 'dawat-blocks',
				'icon'            => '<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M64 16L64 20L-3.73004e-07 20L0 16L64 16Z" fill="#A50A09"/>
				<path d="M64 16L64 20L-3.73004e-07 20L0 16L64 16Z" fill="#A50A09"/>
				<path d="M64 16L64 20L-3.73004e-07 20L0 16L64 16Z" fill="#A50A09"/>
				<path d="M64 8L64 12L-3.73004e-07 12L0 8L64 8Z" fill="#A50A09"/>
				<path d="M64 8L64 12L-3.73004e-07 12L0 8L64 8Z" fill="#A50A09"/>
				<path d="M64 8L64 12L-3.73004e-07 12L0 8L64 8Z" fill="#A50A09"/>
				<path d="M64 0L64 4L-3.73004e-07 4L0 -1.31134e-06L64 0Z" fill="#A50A09"/>
				<path d="M64 0L64 4L-3.73004e-07 4L0 -1.31134e-06L64 0Z" fill="#A50A09"/>
				<path d="M64 0L64 4L-3.73004e-07 4L0 -1.31134e-06L64 0Z" fill="#A50A09"/>
				<path d="M64 44L64 48L-3.73004e-07 48L0 44L64 44Z" fill="#A50A09"/>
				<path d="M64 44L64 48L-3.73004e-07 48L0 44L64 44Z" fill="#A50A09"/>
				<path d="M64 44L64 48L-3.73004e-07 48L0 44L64 44Z" fill="#A50A09"/>
				<path d="M64 60L64 64L-3.73004e-07 64L0 60L64 60Z" fill="#A50A09"/>
				<path d="M64 60L64 64L-3.73004e-07 64L0 60L64 60Z" fill="#A50A09"/>
				<path d="M64 60L64 64L-3.73004e-07 64L0 60L64 60Z" fill="#A50A09"/>
				<path d="M64 52L64 56L-3.73004e-07 56L0 52L64 52Z" fill="#A50A09"/>
				<path d="M64 52L64 56L-3.73004e-07 56L0 52L64 52Z" fill="#A50A09"/>
				<path d="M64 52L64 56L-3.73004e-07 56L0 52L64 52Z" fill="#A50A09"/>
				<path d="M28 28L28 36L-7.46008e-07 36L0 28L28 28Z" fill="#A50A09"/>
				<path d="M28 28L28 36L-7.46008e-07 36L0 28L28 28Z" fill="#A50A09"/>
				<path d="M28 28L28 36L-7.46008e-07 36L0 28L28 28Z" fill="#A50A09"/>
				<path d="M64 28L64 36L36 36L36 28L64 28Z" fill="#A50A09"/>
				<path d="M64 28L64 36L36 36L36 28L64 28Z" fill="#A50A09"/>
				<path d="M64 28L64 36L36 36L36 28L64 28Z" fill="#A50A09"/>
				</svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'New Block Related Post, Custom, My' ),
				'align'           => 'wide',
				'supports'        => array(
					'align' => false,
				),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => esc_url( get_template_directory_uri() ) . '/assets/img/admin/default-block-preview.webp',
						),
					),
				),
			)
		);


		acf_register_block(
			array(
				'name'            => 'our-courses',
				'title'           => __( 'Our Courses', 'dtearsd_td' ),
				'description'     => __( 'My custom block Our Courses with theme styles.', 'dtearsd_td' ),
				'render_callback' => 'dawat_acf_block_callback',
				'category'        => 'dawat-blocks',
				'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="64" height="64" viewBox="0 0 256 256" xml:space="preserve">

<defs>
</defs>
<g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
	<path d="M 56.766 67.68 c -2.117 0 -4.538 1.633 -5.513 3.716 c -0.233 0.501 -0.018 1.096 0.482 1.33 c 0.504 0.233 1.097 0.018 1.33 -0.482 c 0.649 -1.39 2.344 -2.563 3.7 -2.563 c 0.247 0 0.69 0.045 0.884 0.349 c 0.187 0.296 0.144 0.807 -0.119 1.368 c -0.502 1.074 -1.684 2.073 -2.874 2.43 c -0.528 0.158 -0.829 0.716 -0.671 1.245 c 0.13 0.434 0.527 0.713 0.958 0.713 c 0.095 0 0.191 -0.014 0.287 -0.042 c 1.75 -0.523 3.364 -1.897 4.111 -3.499 c 0.562 -1.201 0.561 -2.399 -0.005 -3.288 C 58.813 68.133 57.9 67.68 56.766 67.68 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
	<path d="M 81.555 60.518 c -0.6 -0.902 -1.603 -1.44 -2.686 -1.44 H 40.703 c -2.605 0 -4.941 1.552 -5.95 3.954 l -5.106 12.156 H 8.905 c -0.011 0 -0.02 0.006 -0.031 0.006 c -0.116 0.003 -0.229 0.025 -0.338 0.068 c -0.02 0.008 -0.037 0.019 -0.057 0.029 c -0.044 0.021 -0.089 0.038 -0.13 0.066 c -0.043 0.029 -0.078 0.065 -0.115 0.099 c -0.016 0.014 -0.033 0.025 -0.047 0.041 c -0.078 0.081 -0.138 0.173 -0.185 0.274 c -0.011 0.023 -0.018 0.046 -0.027 0.069 c -0.041 0.11 -0.07 0.226 -0.07 0.347 v 1.569 c 0 2.641 1.576 5.001 4.014 6.013 l 14.828 6.152 c 0 0 0 0 0.001 0 l 0.006 0.002 C 26.877 89.975 27.007 90 27.137 90 h 45.138 c 0.553 0 1 -0.447 1 -1 v -5.053 l 8.567 -20.394 C 82.262 62.555 82.155 61.421 81.555 60.518 z M 13.929 77.188 h 14.878 L 26.6 82.44 L 13.929 77.188 z M 9.905 77.757 v -0.072 l 16.232 6.728 v 3.09 l -13.451 -5.581 C 10.996 81.221 9.905 79.586 9.905 77.757 z M 71.275 88 H 28.137 v -3.255 h 43.138 V 88 z M 79.998 62.777 L 71.61 82.745 H 28.642 l 7.955 -18.938 c 0.697 -1.658 2.309 -2.729 4.106 -2.729 h 38.165 c 0.418 0 0.79 0.199 1.02 0.548 C 80.12 61.973 80.161 62.393 79.998 62.777 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
	<path d="M 35.13 26.072 c 0.147 0.077 0.306 0.113 0.461 0.113 c 0.361 0 0.709 -0.196 0.888 -0.538 c 0.255 -0.49 0.065 -1.094 -0.424 -1.349 c -1.828 -0.954 -3.684 -0.954 -5.514 0 c -0.49 0.255 -0.68 0.859 -0.424 1.349 c 0.255 0.489 0.859 0.68 1.349 0.424 C 32.7 25.428 33.897 25.429 35.13 26.072 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
	<path d="M 44.777 24.298 c -1.83 -0.954 -3.685 -0.954 -5.514 0 c -0.49 0.255 -0.68 0.859 -0.424 1.349 c 0.256 0.489 0.86 0.68 1.349 0.424 c 1.233 -0.643 2.43 -0.644 3.664 0 c 0.147 0.077 0.306 0.113 0.461 0.113 c 0.361 0 0.709 -0.196 0.888 -0.538 C 45.457 25.158 45.267 24.554 44.777 24.298 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
	<path d="M 42.923 32.97 H 32.395 c -0.379 0 -0.726 0.215 -0.895 0.554 c -0.169 0.34 -0.131 0.746 0.097 1.049 c 1.937 2.563 3.971 3.865 6.045 3.869 c 0.002 0 0.005 0 0.008 0 c 2.076 0 4.118 -1.301 6.069 -3.866 c 0.23 -0.302 0.269 -0.709 0.1 -1.05 C 43.65 33.186 43.303 32.97 42.923 32.97 z M 37.65 36.442 c -0.001 0 -0.003 0 -0.005 0 c -0.977 -0.002 -1.993 -0.496 -3.036 -1.472 H 40.7 C 39.65 35.948 38.629 36.442 37.65 36.442 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
	<path d="M 23.962 59.584 c 0 0 -0.001 0 -0.001 0 c -0.552 0 -0.999 0.447 -1 0.999 c -0.002 1.819 -0.006 9.342 0.007 9.649 c 0.023 0.536 0.465 0.952 0.998 0.952 c 0.012 0 0.025 0 0.038 -0.001 c 0.549 -0.021 0.979 -0.483 0.963 -1.033 c -0.01 -0.343 -0.009 -6.967 -0.006 -9.565 C 24.961 60.033 24.514 59.585 23.962 59.584 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
	<path d="M 12.086 30.056 h 4.245 c 0.552 0 1 -0.448 1 -1 v -6.652 c 0 -1.37 -0.893 -2.524 -2.122 -2.943 v -8.638 l 9.03 2.967 v 3.974 c 0 0.006 0.003 0.011 0.003 0.016 c 0 0.007 -0.003 0.013 -0.003 0.02 l 0.192 5.27 h -0.61 c -1.387 0 -2.516 1.129 -2.516 2.516 v 2.505 c 0 2.636 1.656 4.99 4.075 5.942 c 0.818 2.606 2.294 4.947 4.253 6.812 l -0.029 1.209 c 0 0.308 -0.042 0.612 -0.125 0.908 l -5.426 2.151 l -4.168 1.652 c -3.727 0.677 -6.421 3.715 -6.421 7.262 v 16.162 c 0 0.553 0.448 1 1 1 s 1 -0.447 1 -1 V 54.026 c 0 -2.512 1.915 -4.664 4.583 -5.237 l 17.171 8.296 c 0.006 0.003 0.013 0.002 0.019 0.004 c 0.128 0.059 0.265 0.092 0.406 0.093 c 0.003 0 0.006 0.002 0.009 0.002 c 0 0 0 0 0 0 s 0 0 0 0 c 0.003 0 0.006 -0.002 0.009 -0.002 c 0.141 -0.001 0.278 -0.034 0.406 -0.093 c 0.006 -0.003 0.013 -0.001 0.019 -0.004 l 17.175 -8.297 c 2.672 0.57 4.591 2.726 4.591 5.291 c 0 0.553 0.447 0.974 1 0.974 s 1 -0.473 1 -1.025 c 0 -3.548 -2.697 -6.582 -6.425 -7.258 l -9.571 -3.794 c -0.086 -0.302 -0.145 -0.612 -0.145 -0.944 l -0.027 -1.177 c 1.966 -1.867 3.447 -4.214 4.265 -6.827 c 2.412 -0.955 4.061 -3.307 4.061 -5.938 v -2.503 c 0 -1.387 -1.129 -2.516 -2.517 -2.516 h -0.592 l 0.204 -5.267 c 0 -0.007 -0.003 -0.013 -0.003 -0.02 c 0 -0.007 0.004 -0.012 0.004 -0.019 V 13.78 l 9.784 -3.215 c 0.728 -0.239 1.217 -0.914 1.217 -1.68 c 0.001 -0.766 -0.488 -1.442 -1.216 -1.682 L 40.229 0.414 c -1.682 -0.552 -3.46 -0.552 -5.14 0 L 14.425 7.203 c -0.728 0.24 -1.217 0.915 -1.217 1.682 c 0 0.001 0 0.002 0 0.003 V 19.46 c -1.23 0.419 -2.123 1.573 -2.123 2.943 v 6.652 C 11.086 29.608 11.534 30.056 12.086 30.056 z M 23.306 28.091 v -2.505 c 0 -0.285 0.231 -0.516 0.516 -0.516 h 0.683 l 0.202 5.536 c 0.022 0.259 0.059 0.515 0.093 0.771 C 23.879 30.558 23.306 29.374 23.306 28.091 z M 22.645 47.823 l 7.202 -2.855 l 5.256 8.874 L 22.645 47.823 z M 40.203 53.842 l 5.256 -8.874 l 7.203 2.856 L 40.203 53.842 z M 43.959 43.576 l -6.306 10.646 l -6.299 -10.634 c 0.117 -0.387 0.191 -0.778 0.216 -1.173 c 1.109 0.766 2.319 1.406 3.621 1.876 c 0.792 0.286 1.619 0.431 2.459 0.432 c 0.001 0 0.002 0 0.003 0 c 0.001 0 0.002 0 0.003 0 c 0.006 0 0.011 0 0.017 0 c 0.001 0 0.002 0 0.003 0 c 0.001 0 0.002 0 0.003 0 c 0.84 -0.001 1.667 -0.146 2.459 -0.432 c 1.298 -0.469 2.504 -1.106 3.61 -1.869 C 43.775 42.815 43.846 43.199 43.959 43.576 z M 39.458 42.41 c -0.575 0.208 -1.175 0.313 -1.785 0.313 c -0.001 0 -0.002 0 -0.002 0 c -0.581 0.019 -1.22 -0.104 -1.799 -0.313 c -5.118 -1.849 -8.718 -6.548 -9.169 -11.924 l -0.434 -11.91 c 7.572 -1.477 15.235 -1.477 22.806 0 l -0.46 11.908 c 0 0.012 0.005 0.021 0.005 0.033 C 48.139 35.907 44.552 40.569 39.458 42.41 z M 51.495 25.07 c 0.285 0 0.517 0.231 0.517 0.516 v 2.503 c 0 1.277 -0.568 2.457 -1.481 3.276 c 0.033 -0.252 0.07 -0.504 0.091 -0.76 c 0.002 -0.024 -0.008 -0.045 -0.008 -0.068 l 0.211 -5.467 H 51.495 z M 35.713 2.314 c 1.273 -0.419 2.619 -0.419 3.892 0 l 19.995 6.57 l -8.493 2.79 v -1.338 c 0 -0.034 -0.016 -0.063 -0.019 -0.096 c -0.007 -0.068 -0.019 -0.13 -0.039 -0.194 c -0.019 -0.062 -0.041 -0.12 -0.072 -0.176 c -0.03 -0.056 -0.064 -0.105 -0.104 -0.155 C 50.832 9.665 50.79 9.62 50.74 9.578 c -0.048 -0.04 -0.099 -0.073 -0.154 -0.104 c -0.059 -0.033 -0.118 -0.058 -0.184 -0.079 c -0.032 -0.01 -0.056 -0.031 -0.089 -0.038 c -2.214 -0.463 -4.457 -0.809 -6.669 -1.028 c -0.556 -0.059 -1.04 0.348 -1.094 0.896 c -0.054 0.55 0.347 1.04 0.896 1.094 c 1.878 0.186 3.777 0.482 5.661 0.851 v 5.394 c -7.595 -1.438 -15.274 -1.436 -22.869 0 v -5.395 c 3.796 -0.743 7.633 -1.135 11.42 -1.136 c 0.553 0 1 -0.448 1 -1 c 0 -0.553 -0.448 -1 -1 -1 C 33.47 8.035 29.222 8.48 25.034 9.357 c -0.033 0.007 -0.057 0.028 -0.088 0.038 c -0.066 0.021 -0.126 0.046 -0.185 0.08 c -0.056 0.031 -0.107 0.064 -0.155 0.104 c -0.049 0.041 -0.091 0.086 -0.132 0.136 c -0.041 0.05 -0.076 0.1 -0.106 0.157 c -0.03 0.055 -0.051 0.112 -0.07 0.173 c -0.02 0.065 -0.033 0.129 -0.04 0.198 c -0.003 0.032 -0.019 0.061 -0.019 0.094 v 1.348 l -8.522 -2.8 L 35.713 2.314 z M 13.086 22.404 c 0 -0.619 0.504 -1.123 1.123 -1.123 c 0.619 0 1.123 0.503 1.123 1.123 v 5.652 h -2.246 V 22.404 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
</g>
</svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'New Block our oourses, Custom, My' ),
				'align'           => 'wide',
				'supports'        => array(
					'align' => false,
				),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => esc_url( get_template_directory_uri() ) . '/assets/img/admin/course.webp',
						),
					),
				),
			)
		);


		// Register a block - Our Brand
		acf_register_block(
			array(
				'name'            => 'brand',
				'title'           => __( 'Brand', 'dtearsd_td' ),
				'description'     => __( 'My custom block Our Brand with theme styles.', 'dtearsd_td' ),
				'render_callback' => 'dawat_acf_block_callback',
				'category'        => 'dawat-blocks',
				'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="64" height="64" viewBox="0 0 256 256" xml:space="preserve">

<defs>
</defs>
<g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
	<path d="M 82.526 90 H 7.473 c -2.848 0 -5.166 -2.318 -5.166 -5.166 V 32.822 h 85.385 v 52.012 C 87.693 87.682 85.375 90 82.526 90 z M 5.274 35.789 v 49.045 c 0 1.213 0.986 2.199 2.199 2.199 h 75.053 c 1.213 0 2.199 -0.986 2.199 -2.199 V 35.789 H 5.274 z M 50.098 80.943 H 39.902 c -1.882 0 -3.413 -1.531 -3.413 -3.412 V 67.335 c 0 -1.881 1.531 -3.412 3.413 -3.412 h 10.195 c 1.881 0 3.412 1.531 3.412 3.412 v 10.196 C 53.51 79.413 51.979 80.943 50.098 80.943 z M 39.902 66.89 c -0.241 0 -0.446 0.204 -0.446 0.445 v 10.196 c 0 0.241 0.204 0.445 0.446 0.445 h 10.195 c 0.241 0 0.445 -0.204 0.445 -0.445 V 67.335 c 0 -0.241 -0.204 -0.445 -0.445 -0.445 H 39.902 z M 27.101 80.943 H 16.905 c -1.881 0 -3.412 -1.531 -3.412 -3.412 V 67.335 c 0 -1.881 1.531 -3.412 3.412 -3.412 h 10.196 c 1.881 0 3.412 1.531 3.412 3.412 v 10.196 C 30.513 79.413 28.983 80.943 27.101 80.943 z M 16.905 66.89 c -0.241 0 -0.445 0.204 -0.445 0.445 v 10.196 c 0 0.241 0.204 0.445 0.445 0.445 h 10.196 c 0.241 0 0.445 -0.204 0.445 -0.445 V 67.335 c 0 -0.241 -0.204 -0.445 -0.445 -0.445 H 16.905 z M 73.094 60.502 H 62.899 c -1.881 0 -3.412 -1.531 -3.412 -3.412 V 46.894 c 0 -1.882 1.531 -3.413 3.412 -3.413 h 10.195 c 1.882 0 3.413 1.531 3.413 3.413 v 10.195 C 76.507 58.971 74.976 60.502 73.094 60.502 z M 62.899 46.448 c -0.241 0 -0.445 0.205 -0.445 0.446 v 10.195 c 0 0.241 0.204 0.445 0.445 0.445 h 10.195 c 0.241 0 0.446 -0.204 0.446 -0.445 V 46.894 c 0 -0.241 -0.205 -0.446 -0.446 -0.446 H 62.899 z M 50.098 60.502 H 39.902 c -1.882 0 -3.413 -1.531 -3.413 -3.412 V 46.894 c 0 -1.882 1.531 -3.413 3.413 -3.413 h 10.195 c 1.881 0 3.412 1.531 3.412 3.413 v 10.195 C 53.51 58.971 51.979 60.502 50.098 60.502 z M 39.902 46.448 c -0.241 0 -0.446 0.205 -0.446 0.446 v 10.195 c 0 0.241 0.204 0.445 0.446 0.445 h 10.195 c 0.241 0 0.445 -0.204 0.445 -0.445 V 46.894 c 0 -0.241 -0.204 -0.446 -0.445 -0.446 H 39.902 z M 27.101 60.502 H 16.905 c -1.881 0 -3.412 -1.531 -3.412 -3.412 V 46.894 c 0 -1.882 1.531 -3.413 3.412 -3.413 h 10.196 c 1.881 0 3.412 1.531 3.412 3.413 v 10.195 C 30.513 58.971 28.983 60.502 27.101 60.502 z M 16.905 46.448 c -0.241 0 -0.445 0.205 -0.445 0.446 v 10.195 c 0 0.241 0.204 0.445 0.445 0.445 h 10.196 c 0.241 0 0.445 -0.204 0.445 -0.445 V 46.894 c 0 -0.241 -0.204 -0.446 -0.445 -0.446 H 16.905 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
	<path d="M 87.693 29.876 H 2.307 V 16.269 c 0 -2.849 2.318 -5.166 5.166 -5.166 h 12.842 V 8.524 c 0 -4.7 3.824 -8.524 8.524 -8.524 c 4.701 0 8.525 3.824 8.525 8.524 v 2.578 h 15.272 V 8.524 C 52.636 3.824 56.46 0 61.16 0 s 8.524 3.824 8.524 8.524 v 2.578 h 12.842 c 2.848 0 5.166 2.318 5.166 5.166 V 29.876 z M 5.274 26.909 h 79.452 v -10.64 c 0 -1.213 -0.986 -2.199 -2.199 -2.199 H 66.718 V 8.524 c 0 -3.065 -2.493 -5.557 -5.557 -5.557 c -3.065 0 -5.557 2.493 -5.557 5.557 v 5.545 H 34.397 V 8.524 c 0 -3.065 -2.493 -5.557 -5.558 -5.557 s -5.557 2.493 -5.557 5.557 v 5.545 H 7.473 c -1.213 0 -2.199 0.987 -2.199 2.199 V 26.909 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
</g>
</svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'New Block our Brand, Custom, My' ),
				'align'           => 'wide',
				'supports'        => array(
					'align' => false,
				),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => esc_url( get_template_directory_uri() ) . '/assets/img/admin/brand.webp',
						),
					),
				),
			)
		);


		// Register a block - Books Block 
		acf_register_block(
			array(
				'name'            => 'book',
				'title'           => __( 'Book', 'dtearsd_td' ),
				'description'     => __( 'My custom block Our Book with theme styles.', 'dtearsd_td' ),
				'render_callback' => 'dawat_acf_block_callback',
				'category'        => 'dawat-blocks',
				'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="64" height="64" viewBox="0 0 256 256" xml:space="preserve">

<defs>
</defs>
<g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
	<path d="M 89 30.872 h -5.723 V 16.685 c 0 -0.271 -0.11 -0.531 -0.305 -0.719 c -0.196 -0.188 -0.452 -0.294 -0.729 -0.28 c -4.328 0.149 -8.538 0.752 -12.554 1.749 V 6.489 c 0 -0.344 -0.177 -0.665 -0.469 -0.847 c -0.293 -0.184 -0.656 -0.203 -0.968 -0.053 c -8.89 4.309 -16.793 12.648 -23.51 24.775 C 34.734 21.111 22.995 16.165 9.821 15.685 c -0.279 -0.019 -0.535 0.091 -0.731 0.28 c -0.195 0.188 -0.306 0.448 -0.306 0.72 v 7.33 c -1.392 0.098 -2.803 0.225 -4.22 0.4 c -0.504 0.063 -0.882 0.493 -0.877 1.001 l 0.047 5.456 H 0 v 53.639 h 45 h 44 c 0.553 0 1 -0.447 1 -1 V 31.872 C 90 31.32 89.553 30.872 89 30.872 z M 81.277 17.728 v 49.546 c -12.104 0.599 -23.047 4.597 -32.62 11.893 c 6.014 -9.756 12.883 -16.554 20.469 -20.23 c 0.345 -0.167 0.563 -0.517 0.563 -0.899 v -38.55 C 73.393 18.533 77.278 17.932 81.277 17.728 z M 67.689 8.127 v 49.291 C 59.575 61.524 52.293 69.006 46 79.693 V 32.215 C 52.254 20.646 59.544 12.552 67.689 8.127 z M 44 32.39 v 48.732 c -0.102 -0.058 -0.206 -0.112 -0.309 -0.17 c -9.529 -8.42 -20.581 -13.019 -32.907 -13.675 V 24.922 c 0 -0.013 0.006 -0.024 0.005 -0.038 c 0 -0.007 -0.005 -0.013 -0.005 -0.02 v -7.133 C 23.312 18.424 34.48 23.352 44 32.39 z M 8.784 26.017 v 42.216 c 0 0.538 0.426 0.979 0.963 0.999 c 9.224 0.336 17.72 2.954 25.382 7.782 c -8.824 -3.185 -18.537 -4.216 -29.023 -3.063 L 5.694 26.296 C 6.732 26.179 7.763 26.091 8.784 26.017 z M 2 32.872 h 1.751 l 0.366 42.211 c 0.002 0.285 0.126 0.556 0.341 0.743 c 0.214 0.188 0.501 0.273 0.782 0.24 c 13.865 -1.716 26.332 0.461 37.135 6.444 H 2 V 32.872 z M 88 82.511 H 47.668 c 10 -8.366 21.642 -12.831 34.643 -13.278 c 0.539 -0.019 0.966 -0.46 0.966 -0.999 V 32.872 H 88 V 82.511 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
</g>
</svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'New Block our Book, Custom, My' ),
				'align'           => 'wide',
				'supports'        => array(
					'align' => false,
				),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => esc_url( get_template_directory_uri() ) . '/assets/img/admin/book.webp',
						),
					),
				),
			)
		);

			// Register a block - Oraganization section
		acf_register_block(
			array(
				'name'            => 'organization',
				'title'           => __( 'Organization', 'dtearsd_td' ),
				'description'     => __( 'My custom block Organization with theme styles.', 'dtearsd_td' ),
				'render_callback' => 'dawat_acf_block_callback',
				'category'        => 'dawat-blocks',
				'icon'            => '<svg fill="#000000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
	 width="64" height="64" viewBox="0 0 35 35" xml:space="preserve">
<g>
	<g>
		<path d="M0,35h35v-6.717H0V35z M2.121,30.404h30.758v2.475H2.121V30.404z"/>
		<path d="M0,0v6.717h35V0H0z M32.879,4.596H2.121V2.121h30.758V4.596z"/>
		<rect y="9.016" width="9.426" height="16.968"/>
		<rect x="12.787" y="9.016" width="9.426" height="16.968"/>
		<rect x="25.574" y="9.016" width="9.426" height="16.968"/>
	</g>
</g>
</svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'New Block organization, Custom, My' ),
				'align'           => 'wide',
				'supports'        => array(
					'align' => false,
				),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => esc_url( get_template_directory_uri() ) . '/assets/img/admin/oraginzation.webp',
						),
					),
				),
			)
		);


			// Register a block - Teacher
		acf_register_block(
			array(
				'name'            => 'teacher',
				'title'           => __( 'teacher', 'dtearsd_td' ),
				'description'     => __( 'My custom block Teacher with theme styles.', 'dtearsd_td' ),
				'render_callback' => 'dawat_acf_block_callback',
				'category'        => 'dawat-blocks',
				'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="64" height="64" viewBox="0 0 256 256" xml:space="preserve">

<defs>
</defs>
<g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
	<path d="M 83.582 70.904 H 39.363 c -3.539 0 -6.417 -2.879 -6.417 -6.418 c 0 -0.553 0.448 -1 1 -1 s 1 0.447 1 1 c 0 2.437 1.981 4.418 4.417 4.418 h 44.219 c 2.437 0 4.418 -1.981 4.418 -4.418 V 24.484 c 0 -2.436 -1.981 -4.418 -4.418 -4.418 H 39.363 c -2.436 0 -4.417 1.982 -4.417 4.418 v 21.778 c 0 0.553 -0.448 1 -1 1 s -1 -0.447 -1 -1 V 24.484 c 0 -3.539 2.879 -6.418 6.417 -6.418 h 44.219 c 3.539 0 6.418 2.879 6.418 6.418 v 40.002 C 90 68.025 87.121 70.904 83.582 70.904 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
	<path d="M 59.971 41.622 c -0.278 -0.477 -0.888 -0.638 -1.368 -0.36 L 50.471 46 c -1.044 -1.038 -2.666 -1.298 -4.001 -0.572 l -2.485 1.35 l -8.723 4.37 c -2.239 -1.904 -4.649 -3.339 -7.118 -4.275 V 29.474 c 0 -6.29 -5.117 -11.407 -11.407 -11.407 S 5.33 23.184 5.33 29.474 V 46.46 l -0.644 0.109 C 1.971 47.025 0 49.229 0 51.811 v 19.123 c 0 0.553 0.448 1 1 1 h 27.226 c 0.268 0 0.523 -0.107 0.711 -0.297 c 0.188 -0.19 0.292 -0.448 0.289 -0.716 l -0.141 -11.247 l 5.749 1.342 c 0.26 0.062 0.537 0.015 0.763 -0.13 l 12.241 -7.777 c 0.005 -0.003 0.008 -0.009 0.013 -0.013 c 0.008 -0.005 0.016 -0.007 0.024 -0.012 l 2.343 -1.64 c 0.741 -0.52 1.235 -1.297 1.393 -2.188 c 0.092 -0.526 0.046 -1.05 -0.101 -1.546 l 8.101 -4.722 C 60.087 42.711 60.248 42.099 59.971 41.622 z M 7.33 29.474 c 0 -5.187 4.22 -9.407 9.407 -9.407 s 9.407 4.22 9.407 9.407 v 16.754 c -0.559 -0.147 -1.119 -0.277 -1.68 -0.37 c -0.001 0 -0.002 -0.001 -0.004 -0.001 c -0.003 0 -0.005 -0.001 -0.008 -0.002 c -1.156 -0.196 -1.994 -1.096 -1.994 -2.159 l -0.017 -0.978 c 1.924 -2.078 3.107 -5.051 3.107 -7.84 v -5.389 c 0 -0.55 -0.444 -0.997 -0.994 -1 c -2.233 -0.014 -3.472 -0.663 -4.749 -1.704 c -0.301 -0.245 -0.718 -0.295 -1.068 -0.125 c -2.615 1.268 -5.55 1.814 -9.814 1.829 c -0.551 0.002 -0.997 0.449 -0.997 1 v 5.389 c 0 2.74 1.144 5.654 3.009 7.726 l -0.019 1.11 c 0 1.046 -0.839 1.946 -1.996 2.141 L 7.33 46.123 V 29.474 z M 20.775 41.566 c -0.036 0.032 -0.068 0.065 -0.1 0.103 c -1.104 1.072 -2.455 1.764 -3.938 1.764 c -3.835 0 -6.811 -4.598 -6.811 -8.554 v -4.402 c 3.775 -0.09 6.58 -0.629 9.115 -1.752 c 1.412 1.04 2.796 1.571 4.506 1.721 v 4.434 C 23.548 37.257 22.467 39.862 20.775 41.566 z M 12.867 44.249 c 1.156 0.736 2.46 1.183 3.87 1.183 c 1.372 0 2.645 -0.423 3.778 -1.124 c 0.2 1.307 1.039 2.43 2.243 3.056 l -6.071 9.375 l -6.07 -9.375 C 11.844 46.728 12.688 45.577 12.867 44.249 z M 34.879 58.973 l -6.583 -1.536 c -0.299 -0.07 -0.614 0.001 -0.854 0.194 c -0.24 0.192 -0.377 0.484 -0.374 0.792 l 0.144 11.511 H 10.086 V 62.54 c 0 -0.553 -0.448 -1 -1 -1 s -1 0.447 -1 1 v 7.394 H 2 V 51.811 c 0 -1.601 1.269 -2.976 3.018 -3.27 l 3.587 -0.605 l 7.244 11.187 c 0.184 0.284 0.5 0.456 0.839 0.456 s 0.655 -0.172 0.839 -0.456 l 7.229 -11.164 c 3.347 0.694 6.684 2.448 9.69 5.128 c 0.305 0.272 0.747 0.329 1.113 0.148 l 8.519 -4.269 l 0.082 0.131 l 1.771 2.852 L 34.879 58.973 z M 49.07 49.806 l -1.476 1.034 l -1.66 -2.673 l -0.08 -0.128 l 1.57 -0.854 c 0.621 -0.337 1.394 -0.155 1.798 0.421 l 0.188 0.268 c 0.213 0.304 0.295 0.672 0.23 1.037 S 49.373 49.593 49.07 49.806 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
</g>
</svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'New Block Teacher, Custom, My' ),
				'align'           => 'wide',
				'supports'        => array(
					'align' => false,
				),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => esc_url( get_template_directory_uri() ) . '/assets/img/admin/teacher.webp',
						),
					),
				),
			)
		);



		// Register a block - Our Former Student
		acf_register_block(
			array(
				'name'            => 'former',
				'title'           => __( 'former', 'dtearsd_td' ),
				'description'     => __( 'My custom block Our Former Student with theme styles.', 'dtearsd_td' ),
				'render_callback' => 'dawat_acf_block_callback',
				'category'        => 'dawat-blocks',
				'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="64" height="64" viewBox="0 0 256 256" xml:space="preserve">

<defs>
</defs>
<g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
	<path d="M 83.582 70.904 H 39.363 c -3.539 0 -6.417 -2.879 -6.417 -6.418 c 0 -0.553 0.448 -1 1 -1 s 1 0.447 1 1 c 0 2.437 1.981 4.418 4.417 4.418 h 44.219 c 2.437 0 4.418 -1.981 4.418 -4.418 V 24.484 c 0 -2.436 -1.981 -4.418 -4.418 -4.418 H 39.363 c -2.436 0 -4.417 1.982 -4.417 4.418 v 21.778 c 0 0.553 -0.448 1 -1 1 s -1 -0.447 -1 -1 V 24.484 c 0 -3.539 2.879 -6.418 6.417 -6.418 h 44.219 c 3.539 0 6.418 2.879 6.418 6.418 v 40.002 C 90 68.025 87.121 70.904 83.582 70.904 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
	<path d="M 59.971 41.622 c -0.278 -0.477 -0.888 -0.638 -1.368 -0.36 L 50.471 46 c -1.044 -1.038 -2.666 -1.298 -4.001 -0.572 l -2.485 1.35 l -8.723 4.37 c -2.239 -1.904 -4.649 -3.339 -7.118 -4.275 V 29.474 c 0 -6.29 -5.117 -11.407 -11.407 -11.407 S 5.33 23.184 5.33 29.474 V 46.46 l -0.644 0.109 C 1.971 47.025 0 49.229 0 51.811 v 19.123 c 0 0.553 0.448 1 1 1 h 27.226 c 0.268 0 0.523 -0.107 0.711 -0.297 c 0.188 -0.19 0.292 -0.448 0.289 -0.716 l -0.141 -11.247 l 5.749 1.342 c 0.26 0.062 0.537 0.015 0.763 -0.13 l 12.241 -7.777 c 0.005 -0.003 0.008 -0.009 0.013 -0.013 c 0.008 -0.005 0.016 -0.007 0.024 -0.012 l 2.343 -1.64 c 0.741 -0.52 1.235 -1.297 1.393 -2.188 c 0.092 -0.526 0.046 -1.05 -0.101 -1.546 l 8.101 -4.722 C 60.087 42.711 60.248 42.099 59.971 41.622 z M 7.33 29.474 c 0 -5.187 4.22 -9.407 9.407 -9.407 s 9.407 4.22 9.407 9.407 v 16.754 c -0.559 -0.147 -1.119 -0.277 -1.68 -0.37 c -0.001 0 -0.002 -0.001 -0.004 -0.001 c -0.003 0 -0.005 -0.001 -0.008 -0.002 c -1.156 -0.196 -1.994 -1.096 -1.994 -2.159 l -0.017 -0.978 c 1.924 -2.078 3.107 -5.051 3.107 -7.84 v -5.389 c 0 -0.55 -0.444 -0.997 -0.994 -1 c -2.233 -0.014 -3.472 -0.663 -4.749 -1.704 c -0.301 -0.245 -0.718 -0.295 -1.068 -0.125 c -2.615 1.268 -5.55 1.814 -9.814 1.829 c -0.551 0.002 -0.997 0.449 -0.997 1 v 5.389 c 0 2.74 1.144 5.654 3.009 7.726 l -0.019 1.11 c 0 1.046 -0.839 1.946 -1.996 2.141 L 7.33 46.123 V 29.474 z M 20.775 41.566 c -0.036 0.032 -0.068 0.065 -0.1 0.103 c -1.104 1.072 -2.455 1.764 -3.938 1.764 c -3.835 0 -6.811 -4.598 -6.811 -8.554 v -4.402 c 3.775 -0.09 6.58 -0.629 9.115 -1.752 c 1.412 1.04 2.796 1.571 4.506 1.721 v 4.434 C 23.548 37.257 22.467 39.862 20.775 41.566 z M 12.867 44.249 c 1.156 0.736 2.46 1.183 3.87 1.183 c 1.372 0 2.645 -0.423 3.778 -1.124 c 0.2 1.307 1.039 2.43 2.243 3.056 l -6.071 9.375 l -6.07 -9.375 C 11.844 46.728 12.688 45.577 12.867 44.249 z M 34.879 58.973 l -6.583 -1.536 c -0.299 -0.07 -0.614 0.001 -0.854 0.194 c -0.24 0.192 -0.377 0.484 -0.374 0.792 l 0.144 11.511 H 10.086 V 62.54 c 0 -0.553 -0.448 -1 -1 -1 s -1 0.447 -1 1 v 7.394 H 2 V 51.811 c 0 -1.601 1.269 -2.976 3.018 -3.27 l 3.587 -0.605 l 7.244 11.187 c 0.184 0.284 0.5 0.456 0.839 0.456 s 0.655 -0.172 0.839 -0.456 l 7.229 -11.164 c 3.347 0.694 6.684 2.448 9.69 5.128 c 0.305 0.272 0.747 0.329 1.113 0.148 l 8.519 -4.269 l 0.082 0.131 l 1.771 2.852 L 34.879 58.973 z M 49.07 49.806 l -1.476 1.034 l -1.66 -2.673 l -0.08 -0.128 l 1.57 -0.854 c 0.621 -0.337 1.394 -0.155 1.798 0.421 l 0.188 0.268 c 0.213 0.304 0.295 0.672 0.23 1.037 S 49.373 49.593 49.07 49.806 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
</g>
</svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'New Block former, Custom, My' ),
				'align'           => 'wide',
				'supports'        => array(
					'align' => false,
				),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => esc_url( get_template_directory_uri() ) . '/assets/img/admin/teacher.webp',
						),
					),
				),
			)
		);





// Register a block - Our Former Student
		acf_register_block(
			array(
				'name'            => 'event',
				'title'           => __( 'event', 'dtearsd_td' ),
				'description'     => __( 'My custom block Our Event Student with theme styles.', 'dtearsd_td' ),
				'render_callback' => 'dawat_acf_block_callback',
				'category'        => 'dawat-blocks',
				'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="64" height="64" viewBox="0 0 256 256" xml:space="preserve">

<defs>
</defs>
<g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
	<path d="M 83.582 70.904 H 39.363 c -3.539 0 -6.417 -2.879 -6.417 -6.418 c 0 -0.553 0.448 -1 1 -1 s 1 0.447 1 1 c 0 2.437 1.981 4.418 4.417 4.418 h 44.219 c 2.437 0 4.418 -1.981 4.418 -4.418 V 24.484 c 0 -2.436 -1.981 -4.418 -4.418 -4.418 H 39.363 c -2.436 0 -4.417 1.982 -4.417 4.418 v 21.778 c 0 0.553 -0.448 1 -1 1 s -1 -0.447 -1 -1 V 24.484 c 0 -3.539 2.879 -6.418 6.417 -6.418 h 44.219 c 3.539 0 6.418 2.879 6.418 6.418 v 40.002 C 90 68.025 87.121 70.904 83.582 70.904 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
	<path d="M 59.971 41.622 c -0.278 -0.477 -0.888 -0.638 -1.368 -0.36 L 50.471 46 c -1.044 -1.038 -2.666 -1.298 -4.001 -0.572 l -2.485 1.35 l -8.723 4.37 c -2.239 -1.904 -4.649 -3.339 -7.118 -4.275 V 29.474 c 0 -6.29 -5.117 -11.407 -11.407 -11.407 S 5.33 23.184 5.33 29.474 V 46.46 l -0.644 0.109 C 1.971 47.025 0 49.229 0 51.811 v 19.123 c 0 0.553 0.448 1 1 1 h 27.226 c 0.268 0 0.523 -0.107 0.711 -0.297 c 0.188 -0.19 0.292 -0.448 0.289 -0.716 l -0.141 -11.247 l 5.749 1.342 c 0.26 0.062 0.537 0.015 0.763 -0.13 l 12.241 -7.777 c 0.005 -0.003 0.008 -0.009 0.013 -0.013 c 0.008 -0.005 0.016 -0.007 0.024 -0.012 l 2.343 -1.64 c 0.741 -0.52 1.235 -1.297 1.393 -2.188 c 0.092 -0.526 0.046 -1.05 -0.101 -1.546 l 8.101 -4.722 C 60.087 42.711 60.248 42.099 59.971 41.622 z M 7.33 29.474 c 0 -5.187 4.22 -9.407 9.407 -9.407 s 9.407 4.22 9.407 9.407 v 16.754 c -0.559 -0.147 -1.119 -0.277 -1.68 -0.37 c -0.001 0 -0.002 -0.001 -0.004 -0.001 c -0.003 0 -0.005 -0.001 -0.008 -0.002 c -1.156 -0.196 -1.994 -1.096 -1.994 -2.159 l -0.017 -0.978 c 1.924 -2.078 3.107 -5.051 3.107 -7.84 v -5.389 c 0 -0.55 -0.444 -0.997 -0.994 -1 c -2.233 -0.014 -3.472 -0.663 -4.749 -1.704 c -0.301 -0.245 -0.718 -0.295 -1.068 -0.125 c -2.615 1.268 -5.55 1.814 -9.814 1.829 c -0.551 0.002 -0.997 0.449 -0.997 1 v 5.389 c 0 2.74 1.144 5.654 3.009 7.726 l -0.019 1.11 c 0 1.046 -0.839 1.946 -1.996 2.141 L 7.33 46.123 V 29.474 z M 20.775 41.566 c -0.036 0.032 -0.068 0.065 -0.1 0.103 c -1.104 1.072 -2.455 1.764 -3.938 1.764 c -3.835 0 -6.811 -4.598 -6.811 -8.554 v -4.402 c 3.775 -0.09 6.58 -0.629 9.115 -1.752 c 1.412 1.04 2.796 1.571 4.506 1.721 v 4.434 C 23.548 37.257 22.467 39.862 20.775 41.566 z M 12.867 44.249 c 1.156 0.736 2.46 1.183 3.87 1.183 c 1.372 0 2.645 -0.423 3.778 -1.124 c 0.2 1.307 1.039 2.43 2.243 3.056 l -6.071 9.375 l -6.07 -9.375 C 11.844 46.728 12.688 45.577 12.867 44.249 z M 34.879 58.973 l -6.583 -1.536 c -0.299 -0.07 -0.614 0.001 -0.854 0.194 c -0.24 0.192 -0.377 0.484 -0.374 0.792 l 0.144 11.511 H 10.086 V 62.54 c 0 -0.553 -0.448 -1 -1 -1 s -1 0.447 -1 1 v 7.394 H 2 V 51.811 c 0 -1.601 1.269 -2.976 3.018 -3.27 l 3.587 -0.605 l 7.244 11.187 c 0.184 0.284 0.5 0.456 0.839 0.456 s 0.655 -0.172 0.839 -0.456 l 7.229 -11.164 c 3.347 0.694 6.684 2.448 9.69 5.128 c 0.305 0.272 0.747 0.329 1.113 0.148 l 8.519 -4.269 l 0.082 0.131 l 1.771 2.852 L 34.879 58.973 z M 49.07 49.806 l -1.476 1.034 l -1.66 -2.673 l -0.08 -0.128 l 1.57 -0.854 c 0.621 -0.337 1.394 -0.155 1.798 0.421 l 0.188 0.268 c 0.213 0.304 0.295 0.672 0.23 1.037 S 49.373 49.593 49.07 49.806 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
</g>
</svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'New Block event, Custom, My' ),
				'align'           => 'wide',
				'supports'        => array(
					'align' => false,
				),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => esc_url( get_template_directory_uri() ) . '/assets/img/admin/teacher.webp',
						),
					),
				),
			)
		);


		// Register a block - ACFBlock
		acf_register_block(
			array(
				'name'            => 'acfblock',
				'title'           => __( 'ACFBlock', 'dtearsd_td' ),
				'description'     => __( 'A custom ACFBlock.', 'dtearsd_td' ),
				'render_callback' => 'dawat_acf_block_callback',
				'category'        => 'dawat-blocks',
				'icon'            => 'images-alt2',
				'mode'            => 'edit',
				'keywords'        => array( 'ACFBlock' ),
				'align'           => 'wide',
				// calling assets js,css
				'enqueue_assets' => function(){
				wp_enqueue_script( 'block-testimonial', get_template_directory_uri() . '/scripts/jquery.cycle2.min.js', array('jquery'), '', true );
				},
				'supports'        => array(
					'align' => false,
				),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/default-block-preview.webp',
						),
					),
				),
			)
		);



		

		// Register a block - ACFBlock
		acf_register_block(
			array(
				'name'            => 'image-alongside-text',
				'title'           => __( 'Image Alongside Text', 'dtearsd_td' ),
				'description'     => __( 'A custom image alongside text.', 'dtearsd_td' ),
				'render_callback' => 'dawat_acf_block_callback',
				'category'        => 'dawat-blocks',
				'icon'            => '<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M60 40H40V60H60V40ZM36 36V64H64V36H36Z" fill="#A50A09"/>
				<path d="M46.0714 48L40 56.2143V60H60V56.5714L56.0714 51.9286L52.8571 55.5L46.0714 48Z" fill="#A50A09"/>
				<path d="M56 45.5C56 46.8807 54.8807 48 53.5 48C52.1193 48 51 46.8807 51 45.5C51 44.1193 52.1193 43 53.5 43C54.8807 43 56 44.1193 56 45.5Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M24 4H4V24H24V4ZM0 0V28H28V0H0Z" fill="#A50A09"/>
				<path d="M10.0714 12L4 20.2143V24H24V20.5714L20.0714 15.9286L16.8571 19.5L10.0714 12Z" fill="#A50A09"/>
				<path d="M22 9.5C22 10.8807 20.8807 12 19.5 12C18.1193 12 17 10.8807 17 9.5C17 8.11929 18.1193 7 19.5 7C20.8807 7 22 8.11929 22 9.5Z" fill="#A50A09"/>
				</svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'image', 'along', 'side', 'text' ),
				'align'           => 'wide',
				'supports'        => array(
					'align' => false,
				),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/default-block-preview.webp',
						),
					),
				),
			)
		);

	}
}



