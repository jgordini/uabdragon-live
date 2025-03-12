<?php
/**
 * Title: Footer with text, button, links.
 * Slug: uabdragon/footer-mega-dark
 * Categories: uabdragon-footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl","left":"30px","right":"30px"},"margin":{"top":"0px"}}},"backgroundColor":"contrast","textColor":"base","className":"has-background-color","layout":{"type":"constrained"},"fontSize":"small"} -->
<div class="wp-block-group alignfull has-background-color has-white-color has-uab-green-background-color has-text-color has-background has-link-color has-sm-font-size" style="margin-top:0px;padding-top:var(--wp--preset--spacing--x-large);padding-right:30px;padding-bottom:var(--wp--preset--spacing--x-large);padding-left:30px">
	<!-- wp:columns {"align":"wide","style":{"elements":{"link":{"color":[]}}}} -->
	<div class="wp-block-columns alignwide has-link-color">
		<!-- wp:column {"width":"55%"} -->
		<div class="wp-block-column" style="flex-basis:55%"><!-- wp:heading {"level":4,"anchor":"our-company","className":"wp-block-heading"} -->
			<h4 class="wp-block-heading" id="our-company"><?php echo esc_html__( 'Our Company', 'uabdragon' ); ?></h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'With its clean, minimal design and powerful feature set, Frost enables agencies to build stylish and sophisticated WordPress websites.', 'uabdragon' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xs","bottom":"var:preset|spacing|xs","left":"var:preset|spacing|md","right":"var:preset|spacing|md"}}},"className":"is-style-fill"} -->
				<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" href="#" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--medium)"><?php echo esc_html__( 'Learn More', 'uabdragon' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"15%"} -->
		<div class="wp-block-column" style="flex-basis:15%">
			<!-- wp:heading {"level":4,"anchor":"about-us","className":"wp-block-heading"} -->
			<h4 class="wp-block-heading" id="about-us"><?php echo esc_html__( 'About Us', 'uabdragon' ); ?></h4>
			<!-- /wp:heading -->
			<!-- wp:list -->
			<ul>
				<!-- wp:list-item -->
				<li><a href="#"><?php echo esc_html__( 'Start Here', 'uabdragon' ); ?></a></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><a href="#"><?php echo esc_html__( 'Our Mission', 'uabdragon' ); ?></a></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><a href="#"><?php echo esc_html__( 'Brand Guide', 'uabdragon' ); ?></a></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><a href="#"><?php echo esc_html__( 'Newsletter', 'uabdragon' ); ?></a></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><a href="#"><?php echo esc_html__( 'Accessibility', 'uabdragon' ); ?></a></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"15%"} -->
		<div class="wp-block-column" style="flex-basis:15%">
			<!-- wp:heading {"level":4,"anchor":"services","className":"wp-block-heading"} -->
			<h4 class="wp-block-heading" id="services"><?php echo esc_html__( 'Services', 'uabdragon' ); ?></h4>
			<!-- /wp:heading -->
			<!-- wp:list -->
			<ul>
				<!-- wp:list-item -->
				<li><a href="#"><?php echo esc_html__( 'Web Design', 'uabdragon' ); ?></a></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><a href="#"><?php echo esc_html__( 'Development', 'uabdragon' ); ?></a></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><a href="#"><?php echo esc_html__( 'Copywriting', 'uabdragon' ); ?></a></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><a href="#"><?php echo esc_html__( 'Marketing', 'uabdragon' ); ?></a></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><a href="#"><?php echo esc_html__( 'Social Media', 'uabdragon' ); ?></a></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"15%"} -->
		<div class="wp-block-column" style="flex-basis:15%">
			<!-- wp:heading {"level":4,"anchor":"connect","className":"wp-block-heading"} -->
			<h4 class="wp-block-heading" id="connect"><?php echo esc_html__( 'Connect', 'uabdragon' ); ?></h4>
			<!-- /wp:heading -->
			<!-- wp:list -->
			<ul>
				<!-- wp:list-item -->
				<li><a href="#"><?php echo esc_html__( 'Facebook', 'uabdragon' ); ?></a></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><a href="#"><?php echo esc_html__( 'Instagram', 'uabdragon' ); ?></a></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><a href="#"><?php echo esc_html__( 'Twitter', 'uabdragon' ); ?></a></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><a href="#"><?php echo esc_html__( 'LinkedIn', 'uabdragon' ); ?></a></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><a href="#"><?php echo esc_html__( 'Dribbble', 'uabdragon' ); ?></a></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
