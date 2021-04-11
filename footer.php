      <footer class="footer">
         <div class="container">
            <div class="footer-wrapper">
               <div class="footer-aboutus">
                  <div class="footer-aboutus-title">
                     <?php echo get_post_meta(101, 'aboutus-footer-title', true) ?>
                  </div>
                  <div class="footer-aboutus-text">
                     <?php echo get_post_meta(101, 'aboutus-footer-text', true) ?>
                  </div>
               </div>
               <!-- /.footer-aboutus -->

               <div class="footer-portfolio">
                  <div class="footer-portfolio-title"><?php echo get_post_meta(101, 'portfolio-footer-title', true) ?></div>
                  <div class="footer-portfolio-text">
                     <?php
                        wp_nav_menu( [
                           'theme_location'  => 'footer_menu',
                           'container'       => 'nav', 
                           'container_class' => 'footer-nav',
                           'menu_class'      => 'footer-menu',
                           'echo'            => true,
                        ] );
                     ?>
                  </div>
               </div>
               <!-- /.footer-aboutus -->

               <div class="footer-social">
                  <div class="footer-social-title"><?php echo get_post_meta(101, 'social-footer-title', true) ?></div>

                  <?php
                  $sociallink = get_post_meta(101, 'social-link-1', true);
                  if ($sociallink) { echo '
                     <a href="' . get_post_meta(101, 'social-link-1', true) . '" class="footer-social-text">
                        <div class="footer-social-icon">
                           <svg width="18" height="18" fill="#ffffff" class="icon instagram-icon">
                              <use xlink:href="' . get_template_directory_uri() . '/assets/images/sprite.svg#' . get_post_meta(101, 'social-logo-1', true) . '"></use>
                           </svg>
                        </div>
                        <div class="footer-social-name">' . get_post_meta(101, 'social-title-1', true) . '</div>
                     </a>' ;
                  } ?>

                  <?php
                  $sociallink = get_post_meta(101, 'social-link-2', true);
                  if ($sociallink) { echo '
                     <a href="' . get_post_meta(101, 'social-link-2', true) . '" class="footer-social-text">
                        <div class="footer-social-icon">
                           <svg width="18" height="18" fill="#ffffff" class="icon instagram-icon">
                              <use xlink:href="' . get_template_directory_uri() . '/assets/images/sprite.svg#' . get_post_meta(101, 'social-logo-2', true) . '"></use>
                           </svg>
                        </div>
                        <div class="footer-social-name">' . get_post_meta(101, 'social-title-2', true) . '</div>
                     </a>' ;
                  } ?>
                  
                  <?php
                  $sociallink = get_post_meta(101, 'social-link-3', true);
                  if ($sociallink) { echo '
                     <a href="' . get_post_meta(101, 'social-link-3', true) . '" class="footer-social-text">
                        <div class="footer-social-icon">
                           <svg width="18" height="18" fill="#ffffff" class="icon instagram-icon">
                              <use xlink:href="' . get_template_directory_uri() . '/assets/images/sprite.svg#' . get_post_meta(101, 'social-logo-3', true) . '"></use>
                           </svg>
                        </div>
                        <div class="footer-social-name">' . get_post_meta(101, 'social-title-3', true) . '</div>
                     </a>' ;
                  } ?>

               </div>
               <!-- /.footer-aboutus -->

            </div>
            <!-- /.footer-wrapper -->

            <div class="footer-copyright">
               <?php echo date(' Y ') . ' &copy; ' .  get_post_meta(90, 'footer-copyright', true) ?>
               <br />
               <?php echo get_post_meta(90, 'footer-creator', true) ?>
            </div>

         </div>
         <!-- /.container -->
      </footer>
      <?php wp_footer(); ?>
   </body>
</html>