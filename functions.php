<?php
/**
 * Wabi functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Wabi
 * @since Wabi 1.0
 */

if ( ! function_exists( 'wabi_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Wabi 1.0
	 *
	 * @return void
	 */
	function wabi_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( array( 'style.css' ) );

	}

endif;

add_action( 'after_setup_theme', 'wabi_support' );

if ( ! function_exists( 'wabi_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Wabi 1.0
	 *
	 * @return void
	 */
	function wabi_styles() {
		$theme_version  = wp_get_theme()->get( 'Version' );
		$version_string = is_string( $theme_version ) ? $theme_version : false;

		// Register main stylesheet.
		wp_register_style(
			'wabi-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue main stylesheet.
		wp_enqueue_style( 'wabi-style' );

		// Add inline styles.
		wp_add_inline_style( 'wabi-style', wabi_accent_colors() );

	}

endif;

add_action( 'wp_enqueue_scripts', 'wabi_styles' );

if ( ! function_exists( 'wabi_block_styles' ) ) :
	/**
	 * Enqueue block style scripts.
	 *
	 * @since Wabi 1.0
	 *
	 * @return void
	 */
	function wabi_block_styles() {
		$theme_version  = wp_get_theme()->get( 'Version' );
		$version_string = is_string( $theme_version ) ? $theme_version : false;

		wp_enqueue_script(
			'wabi-block-styles',
			get_theme_file_uri( '/assets/js/block-styles.js' ),
			array( 'wp-blocks' ),
			$theme_version,
			true
		);

	}

endif;

add_action( 'enqueue_block_editor_assets', 'wabi_block_styles' );

if ( ! function_exists( 'wabi_inline_editor_styles' ) ) :

	/**
	 * Enqueue editor styles.
	 *
	 * @since Wabi 1.0
	 *
	 * @return void
	 */
	function wabi_inline_editor_styles() {

		// Add editor styles inline.
		wp_add_inline_style( 'wp-block-library', wabi_editor_styles() );
		wp_add_inline_style( 'wp-block-library', wabi_accent_colors() );
	}

endif;

add_action( 'admin_init', 'wabi_inline_editor_styles' );

if ( ! function_exists( 'wabi_accent_colors' ) ) :

	/**
	 * Set accent color variables.
	 * Called by functions wabi_styles() and wabi_inline_editor_styles() above.
	 *
	 * @since Wabi 1.0
	 *
	 * @return string
	 */
	function wabi_accent_colors() {

		return '
                .is-primary-accent {
                        --wp--custom--color--accent: var(--wp--preset--color--primary);
                        --wp--custom--color--accent-alt: var(--wp--preset--color--secondary);
                }

                .is-secondary-accent {
                        --wp--custom--color--accent: var(--wp--preset--color--secondary);
                        --wp--custom--color--accent-alt: var(--wp--preset--color--primary);
                }

                .is-tertiary-accent {
                        --wp--custom--color--accent: var(--wp--preset--color--tertiary);
                        --wp--custom--color--accent-alt: var(--wp--preset--color--quarternary);
                }

                .is-quarternary-accent {
                        --wp--custom--color--accent: var(--wp--preset--color--quarternary);
                        --wp--custom--color--accent-alt: var(--wp--preset--color--tertiary);
                }

                .is-quinary-accent {
                        --wp--custom--color--accent: var(--wp--preset--color--quinary);
                        --wp--custom--color--accent-alt: var(--wp--preset--color--senary);
                }

                .is-senary-accent {
                        --wp--custom--color--accent: var(--wp--preset--color--senary);
                        --wp--custom--color--accent-alt: var(--wp--preset--color--quinary);
                }

		.is-background-accent {
                        --wp--custom--color--accent: var(--wp--preset--color--background);
                        --wp--custom--color--accent-alt: var(--wp--preset--color--foreground);
                }
		';

	}

endif;

if ( ! function_exists( 'wabi_editor_styles' ) ) :

	/**
	 * Get editor styles.
	 * Called by function wabi_inline_editor_styles() above.
	 *
	 * @since Wabi 1.0
	 *
	 * @return string
	 */
	function wabi_editor_styles() {

		$palette = wp_get_global_settings( array( 'layout', 'wideSize' ) );

		return "
                .post-type-post:not(.is-iceberg) .edit-post-visual-editor__post-title-wrapper {
                        margin-top: 0 !important;
                        padding-bottom: var(--wp--preset--spacing--30);
                        padding-top: var(--wp--preset--spacing--30);
                        margin-bottom: 3.5rem !important;
                }

                .post-type-post:not(.is-iceberg) .edit-post-visual-editor__post-title-wrapper {
                        background: var(--wp--custom--color--accent);
                }

                .post-type-post:not(.is-iceberg) .edit-post-visual-editor__post-title-wrapper > * {
                        max-width: $palette !important;
                }

		.post-type-post:not(.is-iceberg) .edit-post-visual-editor__post-title-wrapper {
                        margin-top: 0 !important;
                        padding-bottom: var(--wp--preset--spacing--30);
                        padding-top: var(--wp--preset--spacing--30);
                        margin-bottom: 3.5rem !important;
                }

		.post-type-post:not(.is-iceberg) .edit-post-visual-editor__post-title-wrapper h1 {
			color: var(--wp--custom--color--hero-text);
		}

		.editor-styles-wrapper .block-editor-block-list__layout.is-root-container > p + h1,
		.editor-styles-wrapper .block-editor-block-list__layout.is-root-container > p + h2,
		.editor-styles-wrapper .block-editor-block-list__layout.is-root-container > p + h3,
		.editor-styles-wrapper .block-editor-block-list__layout.is-root-container > p + h4 {
			margin-top: var(--wp--preset--spacing--60) !important;
		}

		.is-primary-accent .editor-styles-wrapper {
                        --wp--custom--color--accent: var(--wp--preset--color--primary);
                        --wp--custom--color--accent-alt: var(--wp--preset--color--secondary);
                }

                .is-secondary-accent .editor-styles-wrapper {
                        --wp--custom--color--accent: var(--wp--preset--color--secondary);
                        --wp--custom--color--accent-alt: var(--wp--preset--color--primary);
                }

		.is-tertiary-accent .editor-styles-wrapper {
                        --wp--custom--color--accent: var(--wp--preset--color--tertiary);
                        --wp--custom--color--accent-alt: var(--wp--preset--color--quarternary);
                }

		.is-quarternary-accent .editor-styles-wrapper {
                        --wp--custom--color--accent: var(--wp--preset--color--quarternary);
                        --wp--custom--color--accent-alt: var(--wp--preset--color--tertiary);
                }

		.is-quinary-accent .editor-styles-wrapper {
                        --wp--custom--color--accent: var(--wp--preset--color--quinary);
                        --wp--custom--color--accent-alt: var(--wp--preset--color--senary);
                }

		.is-senary-accent .editor-styles-wrapper {
                        --wp--custom--color--accent: var(--wp--preset--color--senary);
                        --wp--custom--color--accent-alt: var(--wp--preset--color--quinary);
                }

		.is-background-accent .editor-styles-wrapper {
                        --wp--custom--color--accent: var(--wp--preset--color--background);
                        --wp--custom--color--accent-alt: var(--wp--preset--color--background);
                }
		";

	}

endif;

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// Add accent color functionality
require get_template_directory() . '/inc/accent-color.php';
