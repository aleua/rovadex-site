<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Rovadex
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row-wrap">
		<div class="column-wrap content-wrap">
			<header class="entry-header">
				<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
				<div class="entry-wrap">
					<div class="entry-meta">
						<?php
							rovadex_entry_meta();
							rovadex_get_post_tags();
						?>
					</div><!-- .entry-meta -->
					<?php rovadex_get_post_category(); ?>
					<div class="entry-content">
						<?php rovadex()->utility()->attributes->get_content( array(
								'length'       => 32,
								'content_type' => 'post_excerpt',
								'echo'         => true,
							) ); ?>
					</div><!-- .entry-content -->
				</div>
			</header><!-- .entry-header -->

			<footer class="entry-footer">
				<?php
					rovadex()->utility()->attributes->get_button( array(
							'class' => 'btn btn-primary',
							'text'  => esc_html__( 'Read More', 'rovadex' ),
							'html'  => '<a href="%1$s" %3$s>%4$s</a>',
							'echo'  => true,
						) );
					rovadex_share_buttons();
				?>
			</footer><!-- .entry-footer -->
		</div>

		<div class="column-wrap image-wrap">
			<figure class="post-thumbnail">
				<?php rovadex()->utility()->media->get_image( array(
					'size'        => 'post-list-thumbnail',
					'html'        => '<img class="post-thumbnail__img wp-post-image" src="%3$s" alt="%4$s">',
					'placeholder' => false,
					'echo'        => true,
					) );
				?>
			</figure><!-- .post-thumbnail -->
		</div>
	</div>
</article><!-- #post-## -->
