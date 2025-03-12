<?php
/**
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area my-12">

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title text-2xl font-serif font-bold text-uab-primary mb-8">
			<?php
				printf(
					_nx( 'One comment', '%1$s comments', get_comments_number(), 'comments title', 'uabdragon' ),
					number_format_i18n( get_comments_number() ),
					get_the_title()
				);
			?>
		</h2>

		<ol class="comment-list divide-y divide-gray-200">
			<?php
				wp_list_comments(
					array(
						'style'       => 'ol',
						'short_ping'  => true,
						'avatar_size' => 56,
						'callback'    => 'uabdragon_comment_callback',
					)
				);
			?>
		</ol>

	<?php endif; ?>

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>

		<nav class="comment-navigation flex justify-between mt-8 pt-8 border-t border-gray-200" id="comment-nav-above">

			<h1 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'uabdragon' ); ?></h1>

			<?php if ( get_previous_comments_link() ) { ?>
					<div class="nav-previous">
						<?php previous_comments_link( __( '&larr; Older Comments', 'uabdragon' ) ); ?>
					</div>
			<?php } ?>

			<?php if ( get_next_comments_link() ) { ?>
				<div class="nav-next">
					<?php next_comments_link( __( 'Newer Comments &rarr;', 'uabdragon' ) ); ?>
				</div>
			<?php } ?>

		</nav><!-- #comment-nav-above -->

	<?php endif; ?>

	<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p class="no-comments bg-gray-100 p-4 rounded-xl text-center"><?php esc_html_e( 'Comments are closed.', 'uabdragon' ); ?></p>
	<?php endif; ?>

	<?php
	comment_form(
		array(
			'class_submit'  => 'bg-uab-primary text-white cursor-pointer rounded-xl font-bold py-2 px-4 hover:bg-campus-green hover:text-uab-primary transition-colors duration-300',
			'comment_field' => '<textarea id="comment" name="comment" class="bg-gray-100 w-full py-2 px-3 rounded-xl" aria-required="true"></textarea>',
			'title_reply'   => '<span class="text-xl font-serif font-bold text-uab-primary">Leave a Comment</span>',
			'title_reply_before' => '<h3 id="reply-title" class="comment-reply-title mb-4">',
			'title_reply_after'  => '</h3>',
		)
	);
	?>

</div>

<?php
/**
 * Custom comment callback for styling comments.
 */
function uabdragon_comment_callback( $comment, $args, $depth ) {
	$tag = ( 'div' === $args['style'] ) ? 'div' : 'li';
?>
	<<?php echo $tag; ?> id="comment-<?php comment_ID(); ?>" <?php comment_class( 'py-6', $comment ); ?>>
		<article id="div-comment-<?php comment_ID(); ?>" class="comment-body">
			<div class="flex items-start">
				<div class="flex-shrink-0 mr-4">
					<?php
					if ( 0 != $args['avatar_size'] ) {
						echo get_avatar( $comment, $args['avatar_size'], '', '', array( 'class' => 'rounded-full' ) );
					}
					?>
				</div>
				<div class="flex-grow">
					<div class="flex items-center justify-between mb-2">
						<div>
							<?php printf( '<h4 class="font-medium text-uab-primary">%s</h4>', get_comment_author_link( $comment ) ); ?>
							<div class="text-sm text-gray-500">
								<time datetime="<?php comment_time( 'c' ); ?>">
									<?php
									printf(
										/* translators: 1: comment date, 2: comment time */
										__( '%1$s at %2$s', 'uabdragon' ),
										get_comment_date( '', $comment ),
										get_comment_time()
									);
									?>
								</time>
								<?php edit_comment_link( __( '(Edit)', 'uabdragon' ), ' <span class="edit-link">', '</span>' ); ?>
							</div>
						</div>
						
						<div class="reply">
							<?php
							comment_reply_link(
								array_merge(
									$args,
									array(
										'add_below' => 'div-comment',
										'depth'     => $depth,
										'max_depth' => $args['max_depth'],
										'before'    => '<div class="text-sm text-uab-primary">',
										'after'     => '</div>',
									)
								)
							);
							?>
						</div>
					</div>

					<div class="comment-content prose max-w-none">
						<?php comment_text(); ?>
					</div>

					<?php if ( '0' == $comment->comment_approved ) : ?>
						<p class="comment-awaiting-moderation text-sm italic mt-2"><?php _e( 'Your comment is awaiting moderation.', 'uabdragon' ); ?></p>
					<?php endif; ?>
				</div>
			</div>
		</article>
<?php
}