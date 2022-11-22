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

		<!-- wp:pattern {"slug":"wabi/footer-default"} /-->
	',
);
