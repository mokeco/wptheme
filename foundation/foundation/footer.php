  </div><!-- #content -->
    <footer id="site-foot">
	    <div class="row">
		      <nav class="footer-navigation">
					<?php
						$args = array(
							'theme_location' => 'FooterNavigation',
							'menu_class' => 'nav nav-pills nav-justified',
							);
						wp_nav_menu( $args );
					?>
			</nav>
		</div>
		<div class="copyright">コピーライト</div>
	</footer>
  </div><!-- #page -->

　　<?php wp_footer(); ?>

  </body>
</html>
