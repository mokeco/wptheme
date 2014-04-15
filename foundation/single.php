<?php get_header(); ?>

	<div id="primary" class="content-area col-md-9">
		<main id="main" class="site-main" role="main">
		<?php
			if( !is_front_page() ) :
				if ( function_exists( 'bread_crumb' ) ) :
					bread_crumb(array( 'elm_class'=>'breadcrumb',) );
				endif;
			endif;
		?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php AistearTemplate1_content_nav( 'nav-below' ); ?>

		<?php endwhile; ?>

		</main>
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>