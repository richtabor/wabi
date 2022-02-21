<?php
/**
 * Default footer
 */
return array(
	'title'      => __( 'Footer', 'wabi' ),
	'categories' => array( 'wabi', 'footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '
		<!-- wp:group {"align":"full", "layout":{"type":"flex","justifyContent":"space-between"}} -->
		<div class="wp-block-group alignfull">
			<!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
			<div class="wp-block-group">
				<!-- wp:site-title /-->

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"}},"textColor":"foreground-alt"} -->

				<p class="has-foreground-alt-color has-text-color" style="font-size:0.9rem">' .
				sprintf(
					/* Translators: WordPress link. */
					esc_html__( 'Proudly powered by %s', 'wabi' ),
					'<a href="' . esc_url( __( 'https://wordpress.org', 'wabi' ) ) . '" rel="nofollow">WordPress</a>'
				) . '</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"},"style":{"spacing":{"blockGap":"1.5rem"}}} -->
				<!-- wp:page-list {"isNavigationChild":true,"showSubmenuIcon":true,"openSubmenusOnClick":false} /-->
			<!-- /wp:navigation -->

		</div>
		<!-- /wp:group -->',
);
