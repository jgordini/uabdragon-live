<?php
/**
 * Title: Footer with text, links.
 * Slug: uabdragon/footer-default
 * Categories: uabdragon-footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|sm","bottom":"var:preset|spacing|sm","left":"30px","right":"30px"},"margin":{"top":"0px"}}},"layout":{"type":"constrained"},"fontSize":"small"} -->
<div class="wp-block-group alignfull has-sm-font-size" style="margin-top:0px;padding-top:var(--wp--preset--spacing--small);padding-right:30px;padding-bottom:var(--wp--preset--spacing--small);padding-left:30px">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph -->
		<p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> Your Company LLC · <a href="#">Contact Us</a></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph -->
		<p><a href="#"><?php echo esc_html__( 'Facebook', 'uabdragon' ); ?></a> · <a href="#"><?php echo esc_html__( 'LinkedIn', 'uabdragon' ); ?></a> · <a href="#"><?php echo esc_html__( 'Instagram', 'uabdragon' ); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
