<?php
/**
 * Hero headline
 */
return array(
	'title'      => __( 'Large headline', 'wabi' ),
	'categories' => array( 'wabi', 'text' ),
	'blockTypes' => array( 'core/heading' ),
	'content'    => '
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
	<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:spacer {"height":"40px"} -->
	<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:heading {"style":{"spacing":{"margin":{"top":"1rem"}},"typography":{"lineHeight":"1"}},"className":"font-size-colossal"} -->
	<h2 class="font-size-colossal" id="designer-developer-and-all-around-product-guy" style="margin-top:1rem;line-height:1">' . esc_html__( 'Designer, developer and all-around product peep.', 'wabi' ) . '</h2>
	<!-- /wp:heading -->

	<!-- wp:spacer {"height":"40px"} -->
	<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div>
	<!-- /wp:group -->',
);
