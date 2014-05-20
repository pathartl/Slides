<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<?php 
    global $post;
    $post_slug=$post->post_name;
?>

	<div class="section" data-anchor="<?php echo $post_slug; ?>">
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
					<span class="comments"><?php comments_popup_link( __( '0 Comments', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
				</div>
				<!-- /post details -->
		
				<?php the_content(); // Dynamic Content ?>

				<a class="continue-reading" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Read More</a>
		
				<?php edit_post_link(); ?>
			</div>
	
		</article>
		<!-- /article -->
	</div>

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
