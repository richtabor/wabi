<?php
/**
 * Wabi: Block Patterns
 *
 * @since Wabi 1.0
 */

if ( ! function_exists( 'wabi_register_block_patterns' ) ) :

	/**
	 * Registers block patterns and categories.
	 *
	 * @since Wabi 1.0
	 *
	 * @return void
	 */
	function wabi_register_block_patterns() {
		$block_pattern_categories = array(
			'wabi' => array( 'label' => __( 'Wabi', 'wabi' ) ),
			'footer' => array( 'label' => __( 'Footers', 'wabi' ) ),
			'header' => array( 'label' => __( 'Headers', 'wabi' ) ),
			'query'  => array( 'label' => __( 'Query', 'wabi' ) ),
		);

		/**
		 * Filters the theme block pattern categories.
		 *
		 * @since Wabi 1.0
		 *
		 * @param array[] $block_pattern_categories {
		 *     An associative array of block pattern categories, keyed by category name.
		 *
		 *     @type array[] $properties {
		 *         An array of block category properties.
		 *
		 *         @type string $label A human-readable label for the pattern category.
		 *     }
		 * }
		 */
		$block_pattern_categories = apply_filters( 'wabi_block_pattern_categories', $block_pattern_categories );

		foreach ( $block_pattern_categories as $name => $properties ) {

			if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
				register_block_pattern_category( $name, $properties );
			}
		}

		$block_patterns = array(
			'header-default',
			'header-w-button',
			'header-accent',
			'header-accent-w-button',
			'footer-default',
			'footer-w-posts',
			'headline',
			'headline-hero',
			'hidden-404',
			'loop-alt',
			'loop-alt-headline',
			'columns-projects',
			'style-guide-colors',
			'style-guide-typography',
			'subscribe-form',
		);

		/**
		 * Filters the theme block patterns.
		 *
		 * @since Wabi 1.0
		 *
		 * @param array $block_patterns List of block patterns by name.
		 */
		// $block_patterns = apply_filters( 'wabi_block_patterns', $block_patterns );

		foreach ( $block_patterns as $block_pattern ) {
			$pattern_file = get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

			register_block_pattern(
				'wabi/' . $block_pattern,
				require $pattern_file
			);

		}

	}

endif;

add_action( 'init', 'wabi_register_block_patterns', 9 );
