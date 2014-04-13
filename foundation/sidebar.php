       <div class="large-3 medium-3 columns side">
        <?php do_action( 'before_sidebar' ); ?>
  <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

    <aside id="search" class="widget widget_search">
      <?php get_search_form(); ?>
    </aside>

    <aside id="archives" class="widget">
      <h1 class="widget-title"><?php _e( 'Archives', 'AistearTemplate_Este' ); ?></h1>
      <ul>
        <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
      </ul>
    </aside>

  <?php endif; ?>
<!--
  			  <h5>Try one of these buttons:</h5>
  			  <p><a href="#" class="small button">Simple Button</a><br/>
          <a href="#" class="small radius button">Radius Button</a><br/>
          <a href="#" class="small round button">Round Button</a><br/>
          <a href="#" class="medium success button">Success Btn</a><br/>
          <a href="#" class="medium alert button">Alert Btn</a><br/>
          <a href="#" class="medium secondary button">Secondary Btn</a></p>
  				<div class="panel">
          	<h5>So many components, girl!</h5>
          	<p>A whole kitchen sink of goodies comes with Foundation. Checkout the docs to see them all, along with details on making them your own.</p>
          	<a href="http://foundation.zurb.com/docs/" class="small button">Go to Foundation Docs</a>
          </div>
        -->
        </div><!-- .side -->
