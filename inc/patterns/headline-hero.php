<?php
/**
 * Hero headline
 */
return array(
	'title'      => __( 'Hero headline', 'wabi' ),
	'categories' => array( 'wabi' ),
	'blockTypes' => array( 'core/cover' ),
	'content'    => '
		<!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/404.jpg","id":1556,"dimRatio":80,"overlayColor":"background-alt","focalPoint":{"x":"0.54","y":"1.00"},"minHeight":40,"minHeightUnit":"vh","isDark":false,"align":"full","style":{"color":{"duotone":["#000000","#ffffff"]}}} -->
		<div class="wp-block-cover alignfull is-light" style="min-height:40vh"><span aria-hidden="true" class="has-background-alt-background-color has-background-dim-80 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1556" alt="" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/404.jpg" style="object-position:54% 100%" data-object-fit="cover" data-object-position="54% 100%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"1.25rem","padding":{"top":"4rem","bottom":"4rem"}}}} -->
		<div class="wp-block-group" style="padding-top:4rem;padding-bottom:4rem"><!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
		<h2 class="has-text-align-center has-xx-large-font-size" id="style-guide">' . esc_html__( 'Style Guide', 'wabi' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:heading {"textAlign":"center","style":{"typography":{"letterSpacing":"0px","fontStyle":"normal","fontWeight":"400"}},"fontSize":"medium"} -->
		<h2 class="has-text-align-center has-medium-font-size" id="style-guide" style="font-style:normal;font-weight:400;letter-spacing:0px">' . esc_html__( 'Wabi Block Theme', 'wabi' ) . '</h2>
		<!-- /wp:heading --></div>
		<!-- /wp:group --></div></div>
		<!-- /wp:cover -->',
);
