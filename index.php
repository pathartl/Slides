<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<?php get_template_part('loop'); ?>

			<?php custom_footer(); ?>

			<?php get_template_part('pagination'); ?>

		</section>
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
