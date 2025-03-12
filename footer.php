</main>

<?php do_action( 'uabdragon_content_end' ); ?>

</div>

<?php do_action( 'uabdragon_content_after' ); ?>

<footer id="colophon" class="site-footer bg-uab-primary text-white py-12" role="contentinfo">
	<?php do_action( 'uabdragon_footer' ); ?>

	<div class="container mx-auto px-4">
		<div class="grid grid-cols-1 md:grid-cols-4 gap-8">
			<div>
				<h3 class="text-xl font-serif font-bold mb-4 text-campus-green">About UAB Dragon</h3>
				<p class="mb-4">A custom WordPress block theme built with Tailwind CSS v4 and integrated with UAB's branding.</p>
			</div>
			
			<div>
				<h3 class="text-xl font-serif font-bold mb-4 text-campus-green">Resources</h3>
				<ul>
					<li class="mb-2"><a href="#" class="hover:text-campus-green">Documentation</a></li>
					<li class="mb-2"><a href="#" class="hover:text-campus-green">Downloads</a></li>
					<li class="mb-2"><a href="#" class="hover:text-campus-green">Support</a></li>
					<li class="mb-2"><a href="#" class="hover:text-campus-green">Forum</a></li>
				</ul>
			</div>
			
			<div>
				<h3 class="text-xl font-serif font-bold mb-4 text-campus-green">Connect</h3>
				<ul>
					<li class="mb-2"><a href="#" class="hover:text-campus-green">Twitter</a></li>
					<li class="mb-2"><a href="#" class="hover:text-campus-green">Facebook</a></li>
					<li class="mb-2"><a href="#" class="hover:text-campus-green">Instagram</a></li>
					<li class="mb-2"><a href="#" class="hover:text-campus-green">LinkedIn</a></li>
				</ul>
			</div>
			
			<div>
				<h3 class="text-xl font-serif font-bold mb-4 text-campus-green">Contact</h3>
				<p class="mb-2">1720 2nd Ave S</p>
				<p class="mb-2">Birmingham, AL 35294</p>
				<p class="mb-2">Phone: (205) 934-4011</p>
				<p class="mb-2">Email: <a href="mailto:contact@uab.edu" class="hover:text-campus-green">contact@uab.edu</a></p>
			</div>
		</div>
		
		<div class="mt-12 pt-8 border-t border-gray-700 text-center">
			<p>&copy; <?php echo date_i18n( 'Y' );?> - <?php echo get_bloginfo( 'name' );?> | All Rights Reserved</p>
		</div>
	</div>
</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>