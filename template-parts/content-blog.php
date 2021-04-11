<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php
    // проверяем, точно ли мы на странице поста
    if ( is_singular() ) :
      the_title( '<h1 class="post-header-title">', '</h1>' );
    else :
      the_title( '<h2 class="post-header-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
    endif;
  ?>

  <div class="post-content">
    <div class="container">
        <div class="post-content-wrapper">
          <div class="post-content-text">
            <?php
              the_content(
                  sprintf(
                    wp_kses(
                        /* translators: %s: Name of current post. Only visible to screen readers */
                        __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'lesser' ),
                        array(
                          'span' => array(
                              'class' => array(),
                          ),
                        )
                    ),
                    wp_kses_post( get_the_title() )
                  )
              );

              wp_link_pages(
                  array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lesser' ),
                    'after'  => '</div>',
                  )
              );
            ?>
          </div>
          <!-- /.post-content-text -->
          
          <div class="post-content-sidebar">
            <h3 class="sidebar-title">Категории</h3>

            <?php
              $args = array(
                  'taxonomy' => 'blogs',
              );
              $cats = get_categories($args);
              echo '<ul>';
              foreach($cats as $cat) {
                echo '<li>' . '
                <svg width="15" height="15" class="icon siderbar-icon">
                  <use xlink:href="' . get_template_directory_uri() . '/assets/images/sprite.svg#check"></use>
                </svg>
                <a class="category--link" href="' . get_category_link( $cat->term_id ) . '">' . $cat->name . '</a>' .'</li>'; ?>
              </a>
            <?php
              }
              echo '</ul>';
            ?>
            
          </div>
          <!-- /.post-content-sidebar -->

        </div>
        <!-- /.post-content-wrapper -->

    </div>
    <!-- .container -->

  </div>
  <!-- .post-content -->
  
</article>