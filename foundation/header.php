<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name');?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" />

<?php wp_head(); ?>
</head>

  <body <?php body_class(); ?>>
  <div id="page">

    <header>
      <div class="row">
        <div class="large-8 medium-6 columns">
          <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
        </div>
        <div class="large-4 medium-6 columns">
          <div class="panel">
              お問い合わせはこちら・お問い合わせはこちら
          </div>
        </div>
      </div>
      <div class="row">
       <!--  <nav class="top-bar" data-topbar> -->


<nav class="top-bar" role="navigation" data-topbar>
          <ul class="name title-area">
            <!-- li class="name">
               <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></h1>
            </li> -->
            <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
          </ul>
          <section class="top-bar-section">
            <?php
              wp_nav_menu(
                array(
                  'container' => false,
                  'container_class' => '',
                  'menu' => '',
                  'menu_class' => 'top-bar-menu left',
                  'theme_location' => 'MainMenu',
                  'before' => '',
                  'after' => '',
                  'link_before' => '',
                  'link_after' => '',
                  'depth' => 5,
                  'fallback_cb' => false,
                 /* 'walker' => new top_bar_walker() */
                )
              );
            ?>
          </section>
        </nav>
      </div>

      <?php if ( is_home() || is_front_page() ) : ?>
      <div class="row tphead">
        <div class="large-9 columns">
        	<div class="panel">
  	        <h3>We&rsquo;re stoked you want to try Foundation! </h3>
  	        <p>To get going, this file (index.html) includes some basic styles you can modify, play around with, or totally destroy to get going.</p>
  	        <p>Once you've exhausted the fun in this document, you should check out:</p>
  	        <div class="row">
  	        	<div class="large-4 medium-4 columns">
  	    		<p><a href="http://foundation.zurb.com/docs">Foundation Documentation</a><br />Everything you need to know about using the framework.</p>
  	    	</div>
  	        	<div class="large-4 medium-4 columns">
  	        		<p><a href="http://github.com/zurb/foundation">Foundation on Github</a><br />Latest code, issue reports, feature requests and more.</p>
  	        	</div>
  	        	<div class="large-4 medium-4 columns">
  	        		<p><a href="http://twitter.com/foundationzurb">@foundationzurb</a><br />Ping us on Twitter if you have questions. If you build something with this we'd love to see it (and send you a totally boss sticker).</p>
  	        	</div>
  					</div>
        	</div>
        </div>
         <div class="large-3 medium-12 columns pickup">
                <h2>ピックアップ記事</h2>
              <div class="panel">

                <p>
                  <?php
                    // クエリ（サブクエリで呼び出し）
                    $the_query = new WP_Query( 'category_name=pickup&showposts=1' );
                    // ループ
                    while ( $the_query->have_posts() ) : $the_query->the_post();
                      echo'<div>';
                      the_post_thumbnail('medium');
                      echo'</div>';
                      echo'<p>';
                      the_title();
                      echo'<br>';
                      the_time('Y.m.d');
                      echo'<br>';
                      echo mb_substr(get_the_excerpt(),0, 15);
                      echo'...</p>';
                    endwhile;
                    // 投稿データをリセット
                    wp_reset_postdata();

                    ?>


                </p>
              </div>
        </div>
      </div>
    <?php endif; // is_home , is_front_page ?>
    </header>

    <div id="content" class="row">