<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
		'</a></h2>' ); ?>

		

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">

		<?php
			//the_excerpt();
			the_content();
		?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->

	<footer class="svm-entry-footer">

		<!-- <?php understrap_entry_footer(); ?> -->

		<?php if ( 'post' == get_post_type() ) : ?>

			<div class="entry-meta">
				<?php svm_post_meta(); ?>
			</div><!-- .entry-meta -->

		<?php endif; ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
