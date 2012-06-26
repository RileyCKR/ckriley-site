<?php get_header(); ?>
<div id="content">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>

			<article>
				<h1><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				<?php edit_post_link('<small>Edit this entry</small>','',''); ?>
				<?php if ( has_post_thumbnail() ) { /* loades the post's featured thumbnail, requires Wordpress 3.0+ */ echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; } ?>
				<div class="post-content">
					<?php the_content(); ?>
					<?php wp_link_pages('before=<div class="pagination">&after=</div>'); ?>
				</div><!--.post-content-->
			</article>

			<div id="post-meta">
				<p><?php _e('Posted on '); the_time('F j, Y'); _e(' at '); the_time() ?></p>
				<p><?php _e(' Categories: '); the_category(', ') ?></p>
				<p><?php the_tags('Tags: ', ', ', ' '); ?></p>
			</div><!--#post-meta-->

		</div><!-- #post-## -->

		<div class="newer-older">
			<p class="older"><?php previous_post_link('%link', '&laquo; Previous post') ?></p>
			<p class="newer"><?php next_post_link('%link', 'Next Post &raquo;') ?></p>
		</div><!--.newer-older-->

		<?php comments_template( '', true ); ?>

	<?php endwhile; /* end loop */ ?>
</div><!--#content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>