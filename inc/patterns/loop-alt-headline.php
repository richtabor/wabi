<?php
/**
 * Default footer
 */
return array(
	'title'      => __( 'Loop, alternate with headline', 'wabi' ),
	'categories' => array( 'wabi', 'query' ),
	'blockTypes' => array( 'core/query-loop' ),
	'content'    => '
	<!-- wp:group {"align":"full"} -->
	<div class="wp-block-group alignfull">


	<!-- wp:spacer {"height":"40px"} -->
	<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:heading {"style":{"spacing":{"margin":{"top":"1rem"}},"typography":{"lineHeight":"1"}},"className":"font-size-colossal"} -->
	<h2 class="font-size-colossal" id="designer-developer-and-all-around-product-guy" style="line-height:1;margin-top:1rem">' . esc_html__( 'Designer, developer and all-around product peep.', 'wabi' ) . '</h2>
	<!-- /wp:heading -->

	<!-- wp:spacer {"height":"20px"} -->
	<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:query {"queryId":14,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
	<div class="wp-block-query"><!-- wp:post-template -->
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var(--wp--custom--spacing--small, 1.25rem)","bottom":"var(--wp--custom--spacing--small, 1.25rem)"}}}} -->
	<div class="wp-block-group" style="padding-top:var(--wp--custom--spacing--small, 1.25rem);padding-bottom:var(--wp--custom--spacing--small, 1.25rem)"><!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
	<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"style":{"typography":{"letterSpacing":"0.025rem"}},"fontSize":"x-large"} /-->

	<!-- wp:post-date {"textColor":"foreground-alt","fontSize":"small"} /--></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->
	<!-- /wp:post-template --></div>
	<!-- /wp:query --></div>
	<!-- /wp:group -->
	',
);

