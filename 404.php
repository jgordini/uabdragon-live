<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<body class="antialiased">
	<div class="md:flex min-h-screen">
		<div class="w-full md:w-1/2 flex items-center justify-center">
			<div class="max-w-sm m-8">
				<div class="text-5xl md:text-15xl text-uab-primary border-campus-green border-b">404</div>
				<div class="w-16 h-1 bg-campus-green my-3 md:my-6"></div>
				<p class="text-gray-800 text-2xl md:text-3xl font-light mb-8"><?php _e( 'Sorry, the page you are looking for could not be found.', 'uabdragon' ); ?></p>
				<a href="<?php echo get_bloginfo( 'url' ); ?>" class="bg-uab-primary text-white hover:bg-campus-green hover:text-uab-primary px-4 py-2 rounded-xl text-white transition-colors duration-300">
					<?php _e( 'Go Home', 'uabdragon' ); ?>
				</a>
			</div>
		</div>
		<div class="w-full md:w-1/2 bg-uab-primary flex items-center justify-center">
			<div class="max-w-sm text-center">
				<svg width="120" height="120" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto">
					<path d="M12 4a8 8 0 1 0 0 16 8 8 0 0 0 0-16zM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12z" fill="#90D408"/>
					<path d="M8 13a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm8 0a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm-8.5 3.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1H8a.5.5 0 0 1-.5-.5z" fill="#90D408"/>
				</svg>
				<h2 class="text-2xl text-white font-serif font-bold mt-6">Oops! Page Not Found</h2>
				<p class="text-campus-green mt-4">The page you're looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
			</div>
		</div>
	</div>
</body>
</html>