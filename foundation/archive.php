<?php get_header(); ?>

	<section id="primary" class="content-area col-md-9">
		<main id="main" class="site-main" role="main">

		<?php
			if( !is_front_page() ) :
				if ( function_exists( 'bread_crumb' ) ) :
					bread_crumb(array( 'elm_class'=>'breadcrumb',) );
				endif;
			endif;
		?>

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
						if ( is_category() ) :
							single_cat_title();

						elseif ( is_tag() ) :
							single_tag_title();

						elseif ( is_author() ) :
							the_post();
							printf( __( 'Author: %s', 'AistearTemplate1' ), '<span class="vcard">' . get_the_author() . '</span>' );
							rewind_posts();

						elseif ( is_day() ) :
							printf( __( 'Day: %s', 'AistearTemplate1' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Month: %s', 'AistearTemplate1' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Year: %s', 'AistearTemplate1' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', 'AistearTemplate1' );

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', 'AistearTemplate1');

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', 'AistearTemplate1' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', 'AistearTemplate1' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', 'AistearTemplate1' );

						else :
							_e( 'Archives', 'AistearTemplate1' );

						endif;
					?>
				</h1>
				<?php
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>

			<?php endwhile; ?>

			<?php AistearTemplate1_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main>
	</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
