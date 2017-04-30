<div class="blog-post">
	<div class="post_thumbnail">

		<?php if (!is_single()): ?>
		<?php if (has_post_thumbnail()) ; ?>
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
		<?php else: ?>
		<?php the_post_thumbnail(); ?>
		<?php endif; ?>

	</div>

	<h2 class="blog-post-title">
	<!--	Conditional Statement to display title with/without anchors-->
	<?php if(is_single()) : ?>
	<?php the_title(); ?>
	<?php else: ?>
	<a href="<?php the_permalink(); ?>">
		<?php the_title(); ?>
	</a>
	<?php endif; ?>
	</h2>

	<p class="blog-post-meta">
		<?php the_date(); ?> by
		<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
	</p>

	
<!--	Conditional Statement to display content or excerpt-->
	<?php if(is_single()) : ?>
	<?php the_content(); ?>
	<?php else: ?>
	<?php the_excerpt(); ?>
	<?php endif; ?>
	
<!--	comments section-->
	<?php if (is_single()) : ?>
	<hr>
	<?php comments_template(); ?>
	<?php endif; ?>


</div><!-- /.blog-post -->