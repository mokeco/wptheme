<?php
/**
 * @package AistearTemplate_Este
 */
?>
<div class="large-12 medium-12 columns mainarea">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><!--<a href="<?php the_permalink(); ?>" rel="bookmark">--><?php the_title(); ?><!--</a>--></h1>
	</header><!-- .entry-header -->

	<?php if ( is_search() || is_archive() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<div class="media">
			<a class="pull-left" href="<?php the_permalink(); ?>">
				<?php
					$size = 'thumbnail';
					$attr = array('class' => "attachment-$size media-object");
					if(has_post_thumbnail()) :
						the_post_thumbnail( $size, $attr );
					else :
						echo wp_get_attachment_image( 205, $size, 0, $attr );
					endif;
				?>
			</a>
			 <div class="media-body">
				<?php if ( 'post' == get_post_type() ) : ?>
					<div class="entry-meta">
						<?php // AistearTemplate_Este_posted_on(); ?>
					</div>  <!-- .entry-meta -->
				 <?php endif; ?>
 				 <?php  the_excerpt(); ?>
			 </div>
		</div>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'AistearTemplate_Este' ) ); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'AistearTemplate_Este' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry-meta">
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'AistearTemplate_Este' ) );
				if ( $categories_list ) :
			?>
			<span class="cat-links">
				<?php printf( __( 'Posted in %1$s', 'AistearTemplate_Este' ), $categories_list ); ?>
			</span>
			<?php endif; // End if categories ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'AistearTemplate_Este' ) );
				if ( $tags_list ) :
			?>
			<span class="tags-links">
				<?php printf( __( 'Tagged %1$s', 'AistearTemplate_Este' ), $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>

		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
		<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'AistearTemplate_Este' ), __( '1 Comment', 'AistearTemplate_Este' ), __( '% Comments', 'AistearTemplate_Este' ) ); ?></span>
		<?php endif; ?>

		<?php edit_post_link( __( 'Edit', 'AistearTemplate_Este' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
</div>