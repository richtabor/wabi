<?php
/**
 * 404 content.
 */
return array(
	'title'    => __( '404 content', 'wabi' ),
	'inserter' => false,
	'content'  => '<!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/404.jpg","dimRatio":50,"overlayColor":"background","focalPoint":{"x":"0.50","y":"0.10"},"minHeight":100,"minHeightUnit":"vh","contentPosition":"center center","isDark":false,"align":"full"} -->
	<div class="wp-block-cover alignfull is-light" style="min-height:100vh"><span aria-hidden="true"
			class="has-background-background-color wp-block-cover__gradient-background has-background-dim"></span><img
			class="wp-block-cover__image-background"
			alt="' . esc_html__( 'Two–masted Schooner with Dory (1894) by Winslow Homer', 'wabi' ) . '"
			src="' . esc_url( get_template_directory_uri() ) . '/assets/images/404.jpg"
			style="object-position:50% 10%" data-object-fit="cover" data-object-position="50% 10%" />
			<div class="wp-block-cover__inner-container">
			<!-- wp:heading {"align":"full","style":{"typography":{"fontSize":"clamp(4rem, 30vw, 30rem)","lineHeight":"1"},"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"className":"has-text-align-center"} -->
			<h2 class="alignfull has-text-align-center" id="404"style="font-size:clamp(4rem, 30vw, 30rem);line-height:1;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px">404</h2>
			<!-- /wp:heading -->

			<!-- wp:heading {"textAlign":"center","level":3} -->
			<h3 class="has-text-align-center" id="whoops-that-page-is-gone">' . esc_html__( 'Whoops, that page is gone', 'wabi' ) . '</h3>
			<!-- /wp:heading -->
		</div>
	</div>
	<!-- /wp:cover -->',
);
