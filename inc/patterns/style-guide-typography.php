<?php
/**
 * Style guide (Typography)
 */
return array(
	'title'      => __( 'Style guide (Typography)', 'wabi' ),
	'categories' => array( 'wabi' ),
	'content'    => '
		<!-- wp:group {"align":"wide"} -->
		<div class="wp-block-group alignwide"><!-- wp:heading -->
		<h2 id="typography">' . esc_html__( 'Typography', 'wabi' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>' . esc_html__( 'The theme font family is Inter, a highly readable sans-serif font.', 'wabi' ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group -->

		<!-- wp:group {"align":"full","layout":{"contentSize":"90rem"}} -->
		<div class="wp-block-group alignfull"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1","fontStyle":"normal","fontWeight":"700"}},"className":"font-size-colossal"} -->
		<p class="font-size-colossal" id="abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyz1234567890" style="font-style:normal;font-weight:700;line-height:1">ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group -->
		',
);
