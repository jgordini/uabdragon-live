<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-white text-gray-900 antialiased' ); ?>>

<?php do_action( 'uabdragon_site_before' ); ?>

<div id="page" class="min-h-screen flex flex-col">

	<?php do_action( 'uabdragon_header' ); ?>

	<header>
		<div class="bg-uab-primary text-white py-2">
			<div class="container mx-auto px-4">
				<div class="flex justify-between items-center text-sm">
					<div>UAB - The University of Alabama at Birmingham</div>
					<div>
						<a href="#" class="ml-4 hover:text-loyal-yellow">Contact</a>
						<a href="#" class="ml-4 hover:text-loyal-yellow">A-Z Index</a>
						<a href="#" class="ml-4 hover:text-loyal-yellow">MyUAB</a>
					</div>
				</div>
			</div>
		</div>

		<div class="mx-auto container">
			<div class="lg:flex lg:justify-between lg:items-center border-b py-6">
				<div class="flex justify-between items-center">
					<div>
						<?php if ( has_custom_logo() ) { ?>
                            <?php the_custom_logo(); ?>
						<?php } else { ?>
							<a href="<?php echo get_bloginfo( 'url' ); ?>" class="font-serif font-extrabold text-2xl text-uab-primary">
								<?php echo get_bloginfo( 'name' ); ?>
							</a>

							<p class="text-sm font-light text-gray-600">
								<?php echo get_bloginfo( 'description' ); ?>
							</p>

						<?php } ?>
					</div>

					<div class="lg:hidden">
						<a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
							<svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1"
								 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
									<g id="icon-shape">
										<path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z"
											  id="Combined-Shape"></path>
									</g>
								</g>
							</svg>
						</a>
					</div>
				</div>

				<?php
				wp_nav_menu(
					array(
						'container_id'    => 'primary-menu',
						'container_class' => 'hidden bg-gray-100 mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
						'menu_class'      => 'lg:flex lg:-mx-4',
						'theme_location'  => 'primary',
						'li_class'        => 'lg:mx-4',
						'fallback_cb'     => false,
					)
				);
				?>
			</div>
		</div>
	</header>

	<div id="content" class="site-content grow">

		<?php if ( is_front_page() ) { ?>
			<!-- Start introduction -->
			<div class="container mx-auto">
				<div class="px-12 py-16 my-12 rounded-xl bg-linear-to-r from-uab-green from-10% via-campus-green via-30% to-loyal-yellow to-90%">
                    <div class="mx-auto max-w-(--breakpoint-md)">
                        <h1 class="text-3xl lg:text-5xl tracking-tight font-extrabold text-white mb-6">Welcome to UAB Dragon Theme</h1>
                        <p class="text-white text-xl font-medium mb-10">A custom WordPress block theme built with Tailwind CSS v4 and integrated with UAB's branding.</p>
                        <a href="#" class="w-full sm:w-auto flex-none bg-loyal-yellow text-uab-green text-lg leading-6 font-semibold py-3 px-6 border border-transparent rounded-xl focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-uab-green focus:outline-hidden transition-colors duration-200">Get Started</a>
                    </div>
                </div>
			</div>
			<!-- End introduction -->
		<?php } ?>

		<?php do_action( 'uabdragon_content_start' ); ?>

		<main>