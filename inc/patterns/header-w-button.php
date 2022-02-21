<?php
/**
 * Default header accent color block pattern
 */
return array(
	'title'      => __( 'Header with button', 'wabi' ),
	'categories' => array( 'wabi', 'header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '
		<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
		<div class="wp-block-group alignfull"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"var(--wp--custom--spacing--small, 1.25rem)","top":"var(--wp--custom--spacing--small, 1.25rem)"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
		<div class="wp-block-group alignfull" style="padding-top:var(--wp--custom--spacing--small, 1.25rem);padding-bottom:var(--wp--custom--spacing--small, 1.25rem)"><!-- wp:group {"layout":{"type":"flex"}} -->
		<div class="wp-block-group"><!-- wp:site-logo {"width":48,"className":"is-style-rounded"} /--><!-- wp:site-title {"textColor":"accent-alt"} /-->

		<!-- wp:social-links {"size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"0.75rem"}}} -->
		<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

		<!-- wp:social-link {"url":"#","service":"wordpress"} /-->

		<!-- wp:social-link {"url":"#","service":"github"} /--></ul>
		<!-- /wp:social-links --></div>
		<!-- /wp:group -->

		<!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
		<div class="wp-block-group">

		<!-- wp:navigation {"overlayTextColor":"foreground","overlayBackgroundColor":"background","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"}},"style":{"spacing":{"blockGap":"1.5rem"}}} -->
		<!-- wp:page-list {"isNavigationChild":true,"showSubmenuIcon":true,"openSubmenusOnClick":false} /-->
		<!-- /wp:navigation -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"top":"0.5rem","bottom":"0.5rem","left":"0.85rem","right":"0.85rem"}}},"fontSize":"small"} -->
		<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link" style="padding-top:0.5rem;padding-right:0.85rem;padding-bottom:0.5rem;padding-left:0.85rem">' . esc_html__( 'Follow', 'wabi' ) . '</a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons -->

		</div>
		<!-- /wp:group --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->',
);
