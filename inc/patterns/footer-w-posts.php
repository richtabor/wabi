<?php
/**
 * Default footer
 */
return array(
	'title'      => __( 'Footer with posts', 'wabi' ),
	'categories' => array( 'wabi', 'footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '

		<!-- wp:group {"align":"full"} -->
		<div class="wp-block-group alignfull"><!-- wp:query {"queryId":67,"query":{"perPage":3,"pages":"1","offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3},"layout":{"inherit":false,"contentSize":"80rem"}} -->
		<div class="wp-block-query"><!-- wp:post-template -->
		<!-- wp:post-featured-image {"isLink":true,"height":"14rem","align":"wide"} /-->

		<!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->

		<!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"0.9rem"}},"className":"is-style-buttons"} /-->
		<!-- /wp:post-template --></div>
		<!-- /wp:query --></div>
		<!-- /wp:group -->

		<!-- wp:spacer -->
		<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--custom--spacing--large, 8rem)","bottom":"var(--wp--custom--spacing--small, 1.25rem)"}}},"layout":{"inherit":false}} -->
		<div class="wp-block-group alignfull" style="padding-top:var(--wp--custom--spacing--large, 8rem);padding-bottom:var(--wp--custom--spacing--small, 1.25rem)"><!-- wp:group {"align":"full","layout":{"type":"flex","justifyContent":"space-between"}} -->
		<div class="wp-block-group alignfull"><!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
		<div class="wp-block-group"><!-- wp:site-title /-->

		<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"}},"textColor":"foreground-alt"} -->
		<p class="has-foreground-alt-color has-text-color" style="font-size:0.9rem">' .
			sprintf(
				/* Translators: WordPress link. */
				esc_html__( 'Proudly powered by %s', 'wabi' ),
				'<a href="' . esc_url( __( 'https://wordpress.org', 'wabi' ) ) . '" rel="nofollow">WordPress</a>'
			) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group -->

		<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"},"style":{"spacing":{"blockGap":"1.5rem"}}} -->
		<!-- wp:page-list /-->
		<!-- /wp:navigation --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->
	',
);
