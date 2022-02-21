<?php
/**
 * Default header pattern
 */
return array(
	'title'      => __( 'Header', 'wabi' ),
	'categories' => array( 'header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '
		<!-- wp:group {"align":"full", "layout":{"inherit":true}} -->
		<div class="wp-block-group alignfull"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"var(--wp--custom--spacing--small, 1.25rem)","top":"var(--wp--custom--spacing--small, 1.25rem)"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
		<div class="wp-block-group alignfull" style="padding-top:var(--wp--custom--spacing--small, 1.25rem);padding-bottom:var(--wp--custom--spacing--small, 1.25rem)"><!-- wp:group {"layout":{"type":"flex"}} -->

		<div class="wp-block-group"><!-- wp:site-logo {"width":48,"className":"is-style-rounded"} /--><!-- wp:site-title {"textColor":"accent-alt"} /-->

		<!-- wp:social-links {"size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"0.75rem"}}} -->
		<ul class="wp-block-social-links has-small-icon-size is-style-logos-only"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

		<!-- wp:social-link {"url":"#","service":"wordpress"} /-->

		<!-- wp:social-link {"url":"#","service":"github"} /--></ul>
		<!-- /wp:social-links --></div>
		<!-- /wp:group -->

		<!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
		<div class="wp-block-group">

		<!-- wp:navigation {"overlayTextColor":"foreground","overlayBackgroundColor":"background","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"},"style":{"spacing":{"blockGap":"1.5rem"}}} -->
		<!-- wp:page-list {"isNavigationChild":true,"showSubmenuIcon":true,"openSubmenusOnClick":false} /-->
		<!-- /wp:navigation -->

		<!-- wp:search {"label":"","showLabel":false,"placeholder":"' . esc_html__( 'Search...', 'wabi' ) . '","width":150,"widthUnit":"px","buttonText":"Search","buttonPosition":"no-button","style":{"border":{"width":"0rem","style":"none","radius":"12px"}},"className":"hide-on-mobile"} /--></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->
		</div>
		<!-- /wp:group -->',
);
