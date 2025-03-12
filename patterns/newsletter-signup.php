<?php
/**
 * Title: Box with heading, text.
 * Slug: uabdragon/newsletter-signup
 * Categories: call-to-action
 */
?>
<!-- wp:group {"style":{"border":{"width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|md","right":"var:preset|spacing|md","bottom":"var:preset|spacing|md","left":"var:preset|spacing|md"}}},"borderColor":"contrast","className":"stacked","layout":{"type":"default"}} -->
<div class="wp-block-group stacked has-border-color has-uab-green-border-color" style="border-width:1px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
	<!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
	<h2 class="wp-block-heading has-text-align-center has-xl-font-size"><?php echo esc_html__( 'Newsletter Signup', 'uabdragon' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}}} -->
	<p class="has-text-align-center" style="line-height:1.5"><?php echo esc_html__( 'Don’t miss out on exclusive content, valuable insights, and fantastic offers. Stay connected + grow your business!', 'uabdragon' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","fontSize":"x-small"} -->
	<p class="has-text-align-center has-x-small-font-size"><strong><?php echo esc_html__( '[INSERT SIGNUP FORM CODE HERE]', 'uabdragon' ); ?></strong></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
