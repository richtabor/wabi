<?php
/**
 * Default footer
 */
return array(
	'title'      => __( 'Loop, alternate', 'wabi' ),
	'categories' => array( 'wabi', 'query' ),
	'blockTypes' => array( 'core/query-loop' ),
	'content'    => '
	<!-- wp:group {"align":"full"} -->
	<div class="wp-block-group alignfull"><!-- wp:query {"queryId":14,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
	<div class="wp-block-query"><!-- wp:post-template -->
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
	<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
	<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"style":{"typography":{"letterSpacing":"0.025rem"}},"fontSize":"x-large"} /-->

	<!-- wp:post-date {"textColor":"foreground-alt","fontSize":"small"} /--></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->
	<!-- /wp:post-template --></div>
	<!-- /wp:query --></div>
	<!-- /wp:group -->
	',
);

