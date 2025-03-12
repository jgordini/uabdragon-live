<article id="post-<?php the_ID(); ?>" <?php post_class( 'mb-12' ); ?>>

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="mb-6">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('large', ['class' => 'w-full h-auto rounded-xl hover:opacity-90 transition-opacity']); ?>
			</a>
		</div>
	<?php endif; ?>

	<header class="entry-header mb-4">
		<?php the_title( sprintf( '<h2 class="entry-title text-2xl md:text-3xl font-serif font-bold leading-tight mb-2"><a href="%s" rel="bookmark" class="text-uab-primary hover:text-uab-secondary">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		
		<div class="flex flex-wrap items-center text-sm text-gray-600">
			<time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished" class="mr-4">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
				</svg>
				<?php echo get_the_date(); ?>
			</time>
			
			<?php if (has_category()) : ?>
			<div>
				<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
				</svg>
				<?php the_category(', '); ?>
			</div>
			<?php endif; ?>
		</div>
	</header>

	<?php if ( is_search() || is_archive() ) : ?>

		<div class="entry-summary text-gray-600">
			<?php the_excerpt(); ?>
			<a href="<?php the_permalink(); ?>" class="inline-block mt-4 px-4 py-2 bg-uab-primary text-white rounded-xl hover:bg-campus-green hover:text-uab-primary transition-colors duration-300"><?php _e('Read More', 'uabdragon'); ?></a>
		</div>

	<?php else : ?>

		<div class="entry-content">
			<?php
			/* translators: %s: Name of current post */
			the_content(
				sprintf(
					'<span class="inline-block mt-4 px-4 py-2 bg-uab-primary text-white rounded-xl hover:bg-campus-green hover:text-uab-primary transition-colors duration-300">%s</span>',
					__( 'Continue reading', 'uabdragon' )
				)
			);

			wp_link_pages(
				array(
					'before'      => '<div class="page-links"><span class="page-links-title font-medium">' . __( 'Pages:', 'uabdragon' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span class="px-2 py-1 bg-gray-100 rounded-md mx-1">',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'uabdragon' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				)
			);
			?>
		</div>

	<?php endif; ?>

</article>