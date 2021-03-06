<?php get_header(); ?>
<div class="row">
	<div id="content" class="span8">
		<div class="padder">

		<div class="page" id="blog-archives" role="main">

			<h3 class="pagetitle"><?php printf( __( 'You are browsing the archive for %1$s.', 'buddypress' ), wp_title( false, false ) ); ?></h3>

			<?php if ( have_posts() ) : ?>

				<?php while (have_posts()) : the_post(); ?>

					<div id="post-<?php the_ID(); ?>" <?php post_class('extend'); ?>>

						<div class="author-box">
							<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
							  <?php echo get_avatar( get_the_author_meta( 'user_email' ), '50' ); ?>
							</a>
						</div>

						<div class="post-content">
							<h2 class="posttitle"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'buddypress' ); ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

							<p class="date"><?php printf( _x( '%s', 'Post written by...', 'buddypress' ), get_the_author_posts_link() ); ?> - <?php printf( __( '%1$s <span>in %2$s</span>', 'buddypress' ), get_the_date(), get_the_category_list( ', ' ) ); ?></p>

							<div class="entry">
								<?php the_content( __( 'Read the rest of this entry &rarr;', 'buddypress' ) ); ?>
								<?php wp_link_pages( array( 'before' => '<div class="page-link"><p>' . __( 'Pages: ', 'buddypress' ), 'after' => '</p></div>', 'next_or_number' => 'number' ) ); ?>
							</div>

							<p class="postmetadata"><?php the_tags( '<span class="tags">' . __( 'Tags: ', 'buddypress' ), ', ', '</span>' ); ?> <span class="comments"><?php comments_popup_link( __( 'No Comments &#187;', 'buddypress' ), __( '1 Comment &#187;', 'buddypress' ), __( '% Comments &#187;', 'buddypress' ) ); ?></span></p>
						</div>

					</div>

				<?php endwhile; ?>

			<?php else : ?>

				<h2 class="center"><?php _e( 'Not Found', 'buddypress' ); ?></h2>
				<?php get_search_form(); ?>

			<?php endif; ?>

		</div>

		</div><!-- .padder -->
	</div><!-- #content -->

  <div id="sidebar" class="span4" role="complementary">
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>
