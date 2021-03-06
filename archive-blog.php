<?php get_header('post'); ?>

<div class="archive-page">
   <div class="container">

      <h1 class="archive-title">
         <?php
            $queried_object = get_queried_object()->label;
            print_r( $queried_object );
         ?>
      </h1>

         <div class="blog-articles-wrapper archive-articles-wrapper">
            <?php while ( have_posts() ){ the_post(); ?>
               <div class="blog-articles-item archive-item">
                  <a href="<?php the_permalink() ?>" class="blog-articles-permalink">
                     <img src="<?php if( has_post_thumbnail() ) {
                        echo get_the_post_thumbnail_url();
                     }
                     else {
                        echo get_template_directory_uri() .'/assets/images/img-default.png';
                     } ?>" alt="<?php get_the_title() ?>" class="blog-articles-item-image">
                     <h3 class="blog-articles-item-title"><?php echo mb_strimwidth(get_the_title(), 0, 25, '...') ?></h3>
                  </a>
                  <!-- /.blog-articles-permalink -->

                  <div class="blog-articles-text"><?php echo mb_strimwidth(get_the_excerpt(), 0, 225, '...') ?></div>
                  
                  <a href="<?php the_permalink() ?>" class="blog-articles-button">
                     Узнать больше
                     <div class="blog-articles-button-arrow">
                        <svg width="15" height="15" class="icon comments-icon">
                           <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#right-arrow"></use>
                        </svg>
                     </div>
                  </a>
               </div>
               <!-- /.blog-articles-item -->
            <?php } ?>
            <?php if ( ! have_posts() ){ ?>
               Записей еще пока нет, но они скоро появятся.
            <?php } ?>

            <?php
               $args = array (
                  'prev_text' => '<div class="grey-icons">&larr;</div> Назад',
                  'next_text' => 'Вперед <div class="grey-icons">&rarr;</div>',
                  'end_size'     => 1,     // количество страниц на концах
	               'mid_size'     => 1,     // количество страниц вокруг текущей
               );
            the_posts_pagination( $args ) ?>
            
         </div>
         <!-- /.blog-articles-wrapper -->
      
   </div>
   <!-- /.container -->
</div>

<?php get_footer() ?>