
		</div>
	</div>
	<div class="top-to"><i class="fa fa-arrow-circle-up"></i> <a href="#masthead">ページTOPへ戻る</a></div>

	<footer id="colophon" class="site-footer container" role="contentinfo">

		<nav class="footer-navigation">
			<?php
				$args = array(
					'theme_location' => 'FooterNavigation',
					'menu_class' => 'nav nav-pills nav-justified',
					);
				wp_nav_menu( $args );
			?>
		</nav>
		<div class="site-info text-center">
			<?php do_action( 'AistearTemplate1_credits' ); ?>
			&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved. Theme Design by <a href="http://aistear.info/" target="_blank" rel="nofollow">Aistear</a>;
		</div>
		<div class="coptright">
			コピーライト
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>