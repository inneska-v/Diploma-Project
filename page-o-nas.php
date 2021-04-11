<?php get_header('post'); ?>
   <main class="site-main">
      
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
                     <h3 class="sidebar-title"><?php echo get_post_meta(106, 'o-nas-sidebar-title', true) ?></h3>
                     <div class="sidebar-text">
                        <?php echo get_post_meta(106, 'o-nas-sidebar-text', true) ?>
                     </div>
                     
                  </div>
                  <!-- /.post-content-sidebar -->

               </div>
               <!-- /.post-content-wrapper -->

            </div>
            <!-- .container -->

         </div>
         <!-- .post-content -->
         
         </article>

   </main>

<?php get_footer(); ?>