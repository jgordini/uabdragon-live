<?php get_header(); ?>

<div class="container mx-auto my-8 px-4">

	<?php if ( have_posts() ) : ?>
		<?php
		while ( have_posts() ) :
			the_post();
			?>

			<?php get_template_part( 'template-parts/content', get_post_format() ); ?>

		<?php endwhile; ?>

		<div class="pagination">
			<?php
				the_posts_pagination(array(
					'mid_size' => 2,
					'prev_text' => __('Previous', 'uabdragon'),
					'next_text' => __('Next', 'uabdragon'),
					'screen_reader_text' => __('Posts navigation', 'uabdragon'),
					'class' => 'flex justify-center my-8'
				));
			?>
		</div>

	<?php else : ?>
	
		<div class="text-center py-12">
			<h2 class="text-2xl font-serif font-bold text-uab-primary mb-4"><?php _e('No Posts Found', 'uabdragon'); ?></h2>
			<p class="text-gray-600 mb-8"><?php _e('It seems we can\'t find what you\'re looking for.', 'uabdragon'); ?></p>
			<?php get_search_form(); ?>
		</div>
		
	<?php endif; ?>

</div>

<?php
get_footer();