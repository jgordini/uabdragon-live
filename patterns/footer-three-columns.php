<?php
/**
 * Title: Footer with text, links, buttons.
 * Slug: uabdragon/footer-three-columns
 * Categories: uabdragon-footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|sm","bottom":"var:preset|spacing|sm","left":"30px","right":"30px"},"margin":{"top":"0px"}}},"layout":{"type":"constrained"},"fontSize":"small"} -->
<div class="wp-block-group alignfull has-sm-font-size" style="margin-top:0px;padding-top:var(--wp--preset--spacing--small);padding-right:30px;padding-bottom:var(--wp--preset--spacing--small);padding-left:30px">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph -->
		<p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php echo esc_html__( 'Your Company LLC', 'uabdragon' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph -->
		<p><a href="#"><?php echo esc_html__( 'Privacy Policy', 'uabdragon' ); ?></a> · <a href="#"><?php echo esc_html__( 'Terms of Service', 'uabdragon' ); ?></a> · <a href="#"><?php echo esc_html__( 'Contact Us', 'uabdragon' ); ?></a></p>
		<!-- /wp:paragraph -->
		<!-- wp:social-links {"iconColor":"base","iconColorValue":"#fff","iconBackgroundColor":"contrast","iconBackgroundColorValue":"#000","style":{"spacing":{"blockGap":"10px"}},"className":"is-style-default"} -->
		<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default">
			<!-- wp:social-link {"url":"#","service":"x"} /-->
			<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
			<!-- wp:social-link {"url":"#","service":"instagram"} /-->
		</ul>
		<!-- /wp:social-links -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
