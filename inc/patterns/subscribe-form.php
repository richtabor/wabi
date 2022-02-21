<?php
/**
 * Default footer
 */
return array(
	'title'      => __( 'Subscribe form', 'wabi' ),
	'categories' => array( 'wabi' ),
	'content'    => '
		<!-- wp:group {"style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}}},"backgroundColor":"accent","className":"subscribe-form","layout":{"contentSize":"30rem"}} -->
		<div class="wp-block-group subscribe-form has-accent-background-color has-background" style="border-radius:10px;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem"><!-- wp:paragraph {"align":"center","fontSize":"small"} -->
		<p class="has-text-align-center has-small-font-size"><strong>' . esc_html__( 'Sign up for free content', 'wabi' ) . '</strong>' . esc_html__( 'Thousands of folks (3000+) regularly get my posts in their inbox. For free.', 'wabi' ) . '</p>
		<!-- /wp:paragraph -->
		<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"contentSize":"100%"}} -->
		<div class="wp-block-group">
		<!-- wp:html -->
		<form>
			<input type="email" placeholder="name@email.com" value="" name="EMAIL" class="required email" aria-required="true">
			<input type="submit" value="→" name="subscribe">
		</form>
		<!-- /wp:html -->
		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.75rem"}},"textColor":"foreground"} -->
		<p class="has-text-align-center has-foreground-color has-text-color" style="font-size:0.75rem">' . esc_html__( 'By subscribing, you agree with my Terms & Privacy Policy.', 'wabi' ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->',
);
