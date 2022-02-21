<?php
/**
 * Hero headline
 */
return array(
	'title'      => __( 'Large headline', 'wabi' ),
	'categories' => array( 'wabi' ),
	'blockTypes' => array( 'core/heading' ),
	'content'    => '
		<!-- wp:group {"align":"full"} -->
		<div class="wp-block-group alignfull"><!-- wp:spacer {"height":"40px"} -->
		<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:heading {"style":{"spacing":{"margin":{"top":"1rem"}},"typography":{"lineHeight":"1"}},"className":"font-size-colossal"} -->
		<h2 class="font-size-colossal" id="designer-developer-and-all-around-product-guy" style="line-height:1;margin-top:1rem">' . esc_html__( 'Designer, developer and all-around product peep.', 'wabi' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:spacer {"height":"40px"} -->
		<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer --></div>
		<!-- /wp:group -->',
);
