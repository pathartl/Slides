<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<div class="section">
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<div id="featuredimage-<?php the_ID(); ?>" class="featured-image"><?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?></div>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->

			<div class="content-wrap">
				<!-- post title -->
				<h2>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h2>
				<!-- /post title -->
	
				<!-- post details -->
				<div class="post-details">
				<span class="date"><?php the_time('F j, Y'); ?></span>
				<span class="category"><?php the_category(', '); ?></span>
<!-- 				<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
				<span class="comments"><?php comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span> -->
				</div>
				<!-- /post details -->
	
				<?php the_content(); // Dynamic Content ?>
	
				<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
	
				<?php comments_template(); ?>
			</div>

		</article>
		<!-- /article -->
		</div>


	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	<?php custom_footer(); ?>

	</section>
	<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
