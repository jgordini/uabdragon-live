<?php
/**
 * Title: Box with image, heading, text, button.
 * Slug: uabdragon/product-box-dark
 * Categories: call-to-action
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|sm","right":"var:preset|spacing|sm","bottom":"var:preset|spacing|sm","left":"var:preset|spacing|sm"}}},"backgroundColor":"contrast","textColor":"base","className":"stacked","layout":{"type":"default"}} -->
<div class="wp-block-group stacked has-white-color has-uab-green-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|sm","left":"var:preset|spacing|sm"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"35%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:35%">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/sample_white_800x800.jpg'; ?>" alt="<?php echo esc_attr__( 'Frost Theme Sample Image', 'uabdragon' ); ?>"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"15px"}}} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:heading {"fontSize":"large"} -->
			<h2 class="wp-block-heading has-lg-font-size"><?php echo esc_html__( 'Frost WordPress Theme', 'uabdragon' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}}} -->
			<p style="line-height:1.5"><?php echo esc_html__( 'The ultimate WordPress block theme for agencies and website builders.', 'uabdragon' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xs","bottom":"var:preset|spacing|xs","left":"var:preset|spacing|lg","right":"var:preset|spacing|lg"}}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--large)"><?php echo esc_html__( 'Buy Frost', 'uabdragon' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
