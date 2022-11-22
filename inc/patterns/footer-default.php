<?php
/**
 * Default footer
 */
return array(
	'title'      => __( 'Footer', 'wabi' ),
	'categories' => array( 'wabi', 'footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|30","bottom":"var:preset|spacing|20","left":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
		<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
		<div class="wp-block-group"><!-- wp:site-title /-->

		<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"}},"textColor":"foreground-alt"} -->
		<p class="has-foreground-alt-color has-text-color" style="font-size:0.9rem">
					Proudly powered by <a href="https://wordpress.org" rel="nofollow">WordPress</a></p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group -->

		<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"},"style":{"spacing":{"blockGap":"1.5rem"}}} -->
		<!-- wp:page-list /-->
		<!-- /wp:navigation --></div>
		<!-- /wp:group -->',
);
