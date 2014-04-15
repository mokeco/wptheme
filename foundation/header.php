<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php GoogleTagManager(); ?>
<div id="top"></div>
<div id="page" class="hfeed site">

	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header container" role="banner">
		<div class="site-branding">
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			<h1 class="site-title col-sm-7"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
			<div class="site-contact col-sm-5" >

				<div style="margin-bottom:5px;">
					<a href="<?php echo get_page_link(90); ?>" class="btn btn-ttc btn-lg"><span class="btntext"><i class="fa fa-envelope"></i>&nbsp;お問い合わせはこちらから</span></a>
				</div>
				<div>
				</div>
			</div>


			<div class="clearfix"></div>
		</div>

		<nav id="site-navigation" class="navbar navbar-inverse" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-collapse">
					<span class="sr-only">Global Navigation</span>
       					<span class="icon-bar"></span>
       					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo home_url( '/' ); ?>"> <i class="fa fa-home"></i> </a>
			</div>

			<div class="collapse navbar-collapse" id="nav-collapse">
				<?php
					$args = array(
						'theme_location' => 'GlogalNavigation',
						'menu_class' => 'nav navbar-nav',
						'fallback_cb' => '',
						);
					wp_nav_menu( $args );
				?>
			</div>
		</nav>
	</header>

	<div id="content" class="site-content container">
		<div class="row">