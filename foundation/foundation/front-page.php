<?php get_header(); ?>
       <div class="large-9 medium-9 columns mainarea">
          <section>
              <h1>NEWS</h1>
              <!-- Grid Example -->
                <ul class="large-block-grid-3">
                        <?php
                          // クエリ（サブクエリで呼び出し）
                          $the_query = new WP_Query( 'showposts=3' );
                          // ループ
                          while ( $the_query->have_posts() ) : $the_query->the_post();
                            echo '<li><div class="callout panel">';
                            the_post_thumbnail('medium');
                            echo '<br>';
                            the_time('Y.m.d');
                            echo '<br>';
                            echo '<a href="';
                            the_permalink();
                            echo '">';
                            the_title();
                            echo '</a>';
                           // echo wp_get_attachment_url( get_post_thumbnail_id() );
                            echo '</div></li>';
                          endwhile;
                          // 投稿データをリセット
                          wp_reset_postdata();

                          ?>
                </ul>
          </section>
          <section>
              <h1>サービス</h1>
                <ul class="large-block-grid-2">
                  <li>
                    <p class="sv-title"><a href="<?php echo esc_url( home_url( '/sample-page' ) ); ?>">サービス0001</a></p>
                    <div class="callout panel">
                      <a href="<?php echo esc_url( home_url( '/sample-page' ) ); ?>"><?php echo get_the_post_thumbnail(2, 'large'); ?></a>
                    </div>
                  </li>
                  <li>
                    <p class="sv-title"><a href="<?php echo esc_url( home_url( '/page-test' ) ); ?>">サービス0002</a></p>
                    <div class="callout panel">
                       <a href="<?php echo esc_url( home_url( '/page-test' ) ); ?>"><?php echo get_the_post_thumbnail(21, 'large'); ?></a>
                    </div>
                  </li>
                </ul>
          </section>

          <hr />

        </div><!-- .mainarea -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>