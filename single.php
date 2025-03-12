<?php get_header(); ?>

<div class="container my-8 mx-auto px-4">

	<?php if ( have_posts() ) : ?>

		<?php
		while ( have_posts() ) :
			the_post();
			?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<div class="mt-8 pt-8 border-t border-gray-200">
				<div class="flex flex-wrap justify-between">
					<div class="w-full md:w-1/2 mb-4 md:mb-0 md:pr-4">
						<?php previous_post_link('<div class="text-sm uppercase tracking-wide text-gray-500 mb-2">%link</div>', 'Previous Post'); ?>
					</div>
					<div class="w-full md:w-1/2 md:pl-4 text-right">
						<?php next_post_link('<div class="text-sm uppercase tracking-wide text-gray-500 mb-2">%link</div>', 'Next Post'); ?>
					</div>
				</div>
			</div>

			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>

		<?php endwhile; ?>

	<?php endif; ?>

</div>

<?php
get_footer();