<div class="large-9 medium-9 columns mainarea">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'AistearTemplate_Este' ),
				'after'  => '</div>',
			) );
		?>
	</div>
</article>
</div>