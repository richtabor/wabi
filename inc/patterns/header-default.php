<?php
/**
 * Default header pattern
 */
return array(
	'title'      => __( 'Header', 'wabi' ),
	'categories' => array( 'header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|30","bottom":"var:preset|spacing|20","left":"var:preset|spacing|30"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
		<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"layout":{"type":"flex"}} -->
		<div class="wp-block-group"><!-- wp:site-logo {"width":48,"className":"is-style-rounded"} /-->

		<!-- wp:site-title {"textColor":"accent-alt"} /-->

		<!-- wp:social-links {"size":"has-small-icon-size","style":{"spacing":{"blockGap":"0.75rem"}},"className":"is-style-logos-only","layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<ul class="wp-block-social-links has-small-icon-size is-style-logos-only"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

		<!-- wp:social-link {"url":"#","service":"wordpress"} /-->

		<!-- wp:social-link {"url":"#","service":"github"} /--></ul>
		<!-- /wp:social-links --></div>
		<!-- /wp:group -->

		<!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
		<div class="wp-block-group"><!-- wp:navigation {"overlayBackgroundColor":"background","overlayTextColor":"foreground","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"},"style":{"spacing":{"blockGap":"1.5rem"}}} -->
		<!-- wp:page-list /-->
		<!-- /wp:navigation -->

		<!-- wp:search {"label":"","showLabel":false,"placeholder":"' . esc_html__( 'Search…', 'wabi' ) . '","width":150,"widthUnit":"px","buttonText":"' . esc_html__( 'Search', 'wabi' ) . '","buttonPosition":"no-button","style":{"border":{"width":"0rem","style":"none","radius":"12px"}},"className":"hide-on-mobile"} /--></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->',
);
