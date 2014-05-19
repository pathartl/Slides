<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<?php get_template_part('loop'); ?>

		<!-- /section -->
		<div class="section">
			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div id="footer-area-1">
					<?php if ( dynamic_sidebar('Footer Widget Area 1') ) : else : endif; ?>
				</div>
				<div id="footer-area-2">
					<?php if ( dynamic_sidebar('Footer Widget Area 2') ) : else : endif; ?>
				</div>
	
				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Proudly powered by', 'html5blank'); ?>
					<a href="//wordpress.org" title="WordPress">WordPress</a>.
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->
		</div>

			<?php get_template_part('pagination'); ?>

		</section>
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
