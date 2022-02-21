<?php
/**
 * Style guide (Accent Colors)
 */
return array(
	'title'      => __( 'Style guide (Colors)', 'wabi' ),
	'categories' => array( 'wabi' ),
	'content'    => '
		<!-- wp:group {"align":"wide"} -->
		<div class="wp-block-group alignwide"><!-- wp:heading -->
		<h2>' . esc_html__( 'Accent colors', 'wabi' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>' . esc_html__( 'Out of the box, Wabi has six accent colors, of each which can be applied to a post for a unique full-page color scheme. You may also customize these colors within the new Global Styles interface —&nbsp;or add more of your own.', 'wabi' ) . '</p>
		<!-- /wp:paragraph -->

		<!-- wp:columns {"isStackedOnMobile":false,"align":"wide","className":"color-palette"} -->
		<div class="wp-block-columns alignwide is-not-stacked-on-mobile color-palette"><!-- wp:column {"backgroundColor":"primary","className":"is-style-rounded"} -->
		<div class="wp-block-column is-style-rounded has-primary-background-color has-background"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"my-0"} -->
		<figure class="wp-block-image size-full my-0"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/transparent-square.png" alt="' . esc_html__( 'Primary color', 'wabi' ) . '"/></figure>
		<!-- /wp:image --></div>
		<!-- /wp:column -->

		<!-- wp:column {"backgroundColor":"secondary","className":"is-rounded is-style-rounded"} -->
		<div class="wp-block-column is-style-rounded has-secondary-background-color has-background"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"my-0"} -->
		<figure class="wp-block-image size-full my-0"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/transparent-square.png" alt="' . esc_html__( 'Secondary color', 'wabi' ) . '"/></figure>
		<!-- /wp:image --></div>
		<!-- /wp:column -->

		<!-- wp:column {"backgroundColor":"tertiary","className":"is-rounded is-style-rounded"} -->
		<div class="wp-block-column is-style-rounded has-tertiary-background-color has-background"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"my-0"} -->
		<figure class="wp-block-image size-full my-0"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/transparent-square.png" alt="' . esc_html__( 'Tertiary color', 'wabi' ) . '"/></figure>
		<!-- /wp:image --></div>
		<!-- /wp:column -->

		<!-- wp:column {"backgroundColor":"quarternary","className":"is-rounded is-style-rounded"} -->
		<div class="wp-block-column is-style-rounded has-quarternary-background-color has-background"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"my-0"} -->
		<figure class="wp-block-image size-full my-0"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/transparent-square.png" alt="' . esc_html__( 'Quarternary color', 'wabi' ) . '"/></figure>
		<!-- /wp:image --></div>
		<!-- /wp:column -->

		<!-- wp:column {"backgroundColor":"quinary","className":"is-rounded is-style-rounded"} -->
		<div class="wp-block-column is-style-rounded has-quinary-background-color has-background"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"my-0"} -->
		<figure class="wp-block-image size-full my-0"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/transparent-square.png" alt="' . esc_html__( 'Quinary color', 'wabi' ) . '"/></figure>
		<!-- /wp:image --></div>
		<!-- /wp:column -->

		<!-- wp:column {"backgroundColor":"senary","className":"is-rounded is-style-rounded"} -->
		<div class="wp-block-column is-style-rounded has-senary-background-color has-background"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"my-0"} -->
		<figure class="wp-block-image size-full my-0"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/transparent-square.png" alt="' . esc_html__( 'Sendary color', 'wabi' ) . '"/></figure>
		<!-- /wp:image --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns --></div>
		<!-- /wp:group -->
		',
);
