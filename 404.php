<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package universal-theme
 */

get_header('post');
?>

   <main id="primary" class="site-main page404">
      <div class="container">

         <section class="error-404 not-found">
            <h1 class="page404-title">Ой, такой страницы не существует</h1>

            <p class="page404-description">Ничего небыло найдено на этой странице. Попробуете найти что-то подходящее ниже?</p>

            <div class="page404-content">

               <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

               <div class="widget widget_categories widget_categories__search">
                  <h2 class="widget-title"><?php esc_html_e( 'Популярные категории', 'universal' ); ?></h2>
                  <ul>
                     <?php
                     wp_list_categories(
                        array(
                           'orderby'    => 'count',
                           'order'      => 'DESC',
                           'show_count' => 1,
                           'title_li'   => '',
                           'number'     => 10,
                        )
                     );
                     ?>
                  </ul>
               </div>
               <!-- .widget -->
               
               <?php
               /* translators: %1$s: smiley */
               $universal_example_archive_content = '<p class="archive_search">' . sprintf( esc_html__( 'Попробуйте заглянуть в наш архив за месяц %1$s', 'lesser' ), convert_smilies( ':)' ) ) . '</p>';
               the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$universal_example_archive_content" ); '</div>'
               ?>
               
               <?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

            </div><!-- .page404-content -->
         </section><!-- .error-404 -->

      </div>
      <!-- .container -->
   </main><!-- #main -->

<?php
get_footer();
