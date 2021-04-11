<?php get_header(); ?>

<div class="hero">
   <div class="container">
      <h1 class="hero-title"><?php echo get_post_meta(get_the_ID(), 'main-title', true) ?></h1>

      <ul class="hero-articles">
         <?php		
            global $post;
            // формируем запрос в базу данных
            $query = new WP_Query( [
               // получаем кол-во постов
               'posts_per_page' => 4,
               'category_name' => 'web-design, photo, illustration, application',
            ] );
               // проверяем, есть ли посты
            if ( $query->have_posts() ) {
               // создаем переменную-счетчик постов
               $cnt = 0;
               // пока посты есть, выводим их
               while ( $query->have_posts() ) {
                  $query->the_post();
                  // увеличиваем счетчик постов
                  $cnt++;
                  switch ($cnt) {
                     // выводим первый пост
                     case '1':
                        ?>
                           <li class="hero-articles-item hero-articles-item-1">
                              <img src="<?php if( has_post_thumbnail() ) {
                                 echo get_the_post_thumbnail_url();
                              }
                              else {
                                 echo get_template_directory_uri() .'/assets/images/img-default.png';
                              } ?>" alt="<?php get_the_title() ?>" class="hero-articles-thumb">
                              <a href="<?php the_permalink() ?>" class="hero-articles-permalink">
                                 <div class="hero-articles-text">
                                    <h3 class="hero-articles-title"><?php the_title(); ?></h3>
                                    <span class="hero-articles-category"><?php $category = get_the_category(); echo $category [0]->name; ?></span>
                                 </div>
                              </a>
                           </li>
                        <?php 
                        break;
                     
                     // выводим второй пост
                     case '2':
                        ?>
                           <li class="hero-articles-item hero-articles-item-2">
                              <img src="<?php if( has_post_thumbnail() ) {
                                 echo get_the_post_thumbnail_url();
                              }
                              else {
                                 echo get_template_directory_uri() .'/assets/images/img-default.png';
                              } ?>" alt="<?php get_the_title() ?>" class="hero-articles-thumb">
                              <a href="<?php the_permalink() ?>" class="hero-articles-permalink">
                                 <div class="hero-articles-text">
                                    <h3 class="hero-articles-title"><?php the_title(); ?></h3>
                                    <span class="hero-articles-category"><?php $category = get_the_category(); echo $category [0]->name; ?></span>
                                 </div>
                              </a>
                           </li>
                        <?php
                     break;
                     
                     // выводим третий пост
                     case '3':
                        ?>
                        <li class="hero-articles-item hero-articles-item-3">
                           <img src="<?php if( has_post_thumbnail() ) {
                                 echo get_the_post_thumbnail_url();
                              }
                              else {
                                 echo get_template_directory_uri() .'/assets/images/img-default.png';
                              } ?>" alt="<?php get_the_title() ?>" class="hero-articles-thumb">
                           <a href="<?php the_permalink() ?>" class="hero-articles-permalink">
                              <div class="hero-articles-text">
                                 <h3 class="hero-articles-title"><?php the_title(); ?></h3>
                                 <span class="hero-articles-category"><?php $category = get_the_category(); echo $category [0]->name; ?></span>
                              </div>
                           </a>
                        </li>
                        <?php
                     break;

                     // выводим четвертый пост
                     case '4':
                        ?>
                        <li class="hero-articles-item hero-articles-item-4">
                           <img src="<?php if( has_post_thumbnail() ) {
                                 echo get_the_post_thumbnail_url();
                              }
                              else {
                                 echo get_template_directory_uri() .'/assets/images/img-default.png';
                              } ?>" alt="<?php get_the_title() ?>" class="hero-articles-thumb">
                           <a href="<?php the_permalink() ?>" class="hero-articles-permalink">
                              <div class="hero-articles-text">
                                 <h3 class="hero-articles-title"><?php the_title(); ?></h3>
                                 <span class="hero-articles-category"><?php $category = get_the_category(); echo $category [0]->name; ?></span>
                              </div>
                           </a>
                        </li>
                        <?php
                     break;
                  }
                  ?>
                  <!-- Вывода постов, функции цикла: the_title() и т.д. -->
                  <?php 
               }
            } else {
               ?>Добавьте, пожалуйста, 4 поста в рубрик Веб Дизайн, Иллюстрация, Апликация, Фото<?php
            }

            wp_reset_postdata(); // Сбрасываем $post
         ?>
      </ul>
      <!-- /.hero-articles -->
   </div>
   <!-- /.container -->
</div>
<!-- /.hero -->

<div class="whywe">
   <div class="container">
      <h2 class="whywe-title"><?php echo get_post_meta(get_the_ID(), 'why-we-title', true) ?></h2>
      <div class="whywe-description"><?php echo get_post_meta(get_the_ID(), 'why-we-opisanie', true) ?></div>
      <!-- /.whywe-description -->

      <div class="whywe-features">
         <div class="whywe-features-item">
            <div src="" alt="" class="whywe-features-icon">
               <svg width="40" height="41" fill="#ffffff" class="icon comments-icon">
                  <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#graph"></use>
               </svg>
            </div>
            <h3 class="whywe-features-title"><?php echo get_post_meta(90, 'feature-title-1', true) ?></h3>
            <p class="whywe-features-text"><?php echo get_post_meta(90, 'feature-text-1', true) ?></p>
         </div>

         <div class="whywe-features-item">
            <div src="" alt="" class="whywe-features-icon">
               <svg width="40" height="41" fill="#ffffff" class="icon comments-icon">
                  <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#heart"></use>
               </svg>
            </div>
            <h3 class="whywe-features-title"><?php echo get_post_meta(90, 'feature-title-2', true) ?></h3>
            <p class="whywe-features-text"><?php echo get_post_meta(90, 'feature-text-2', true) ?></p> 
         </div>
         
         <div class="whywe-features-item">
            <div src="" alt="" class="whywe-features-icon">
               <svg width="40" height="41" fill="#ffffff" class="icon comments-icon">
                  <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#key"></use>
               </svg>
            </div>
            <h3 class="whywe-features-title"><?php echo get_post_meta(90, 'feature-title-3', true) ?></h3>
            <p class="whywe-features-text"><?php echo get_post_meta(90, 'feature-text-3', true) ?></p>  
         </div>
      </div>
      <!-- /.whywe-features -->
   </div>
   <!-- /.container -->
</div>
<!-- /.whywe -->

<div class="blog-articles">
   <div class="container">
      <h2 class="blog-articles-title"><?php echo get_post_meta(get_the_ID(), 'blog-title', true) ?></h2>

      <div class="blog-articles-wrapper">
         <?php
         $args = array(
            'posts_per_page' => 3,
            'post_type' => 'blog',
         );
         $products = new WP_Query( $args );
         if( $products->have_posts() ) {
            while( $products->have_posts() ) {
            $products->the_post();
         ?>
            <div class="blog-articles-item">
               <a href="<?php the_permalink() ?>" class="blog-articles-permalink">
                  <img src="<?php if( has_post_thumbnail() ) {
                     echo get_the_post_thumbnail_url();
                  }
                  else {
                     echo get_template_directory_uri() .'/assets/images/img-default.png';
                  } ?>" alt="<?php get_the_title() ?>" class="blog-articles-item-image">
                  <h3 class="blog-articles-item-title"><?php echo mb_strimwidth(get_the_title(), 0, 40, '...') ?></h3>
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
         <?php
               }
            }
            else {
               echo 'О нет! К сожалению, нет ни одной записи в блоге. Добавьте пару штук чтобы они тут появились! :)';
            }
         ?>

      </div>
      <!-- /.blog-articles-wrapper -->

   </div>
   <!-- /.container -->
</div>
<!-- /.blog-articles -->

<div class="testimonials">
   <div class="container">
      <h2 class="testimonials-title"><?php echo get_post_meta(90, 'otzyvy-title', true) ?></h2>
      <p class="testimonials-description"><?php echo get_post_meta(90, 'otzyvy-opisanie', true) ?></p>

      <div class="testimonials-wrapper">
         <?php
         $args = array(
            'posts_per_page' => 2,
            'orderby'   => 'rand',
            'post_type' => 'otzyvy',
         );
         $products = new WP_Query( $args );
         if( $products->have_posts() ) {
            while( $products->have_posts() ) {
            $products->the_post();
         ?>
            <div class="testimonials-item">
               <div class="testimonials-item-quote">
                  <svg width="28" height="30" fill="#bbc2ca" class="icon comments-icon">
                     <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#quote"></use>
                  </svg>
               </div>
               <p class="testimonials-item-text">
                  <?php echo mb_strimwidth(get_the_excerpt(), 0, 300, '...') ?>
               </p>
               <span class="testimonials-item-author">
                  <?php echo mb_strimwidth(get_the_title(), 0, 50, '...') ?>
               </span>
            </div>
            <!-- /.testimonials-item -->
         
         <?php
               }
            }
            else {
               echo 'О нет! К сожалению, нет ни одного отзыва. Добавьте пару штук чтобы они тут появились! :)';
            }
         ?>

      </div>
      <!-- /.testimonials-wrapper -->
   </div>
   <!-- /.container -->
</div>
<!-- /.testimonials -->

<?php get_footer(); ?>