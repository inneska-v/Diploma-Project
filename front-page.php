<?php get_header(); ?>

<div class="hero">
   <div class="container">
      <?php global $post;

         $query = new WP_Query( [
            'posts_per_page' => 1,
            'category_name' => 'front-page-title',
         ] );

         if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
               $query->the_post();
               ?>
                  <h1 class="hero-title"><?php the_title(); ?></h1>
               <!-- Вывода постов, функции цикла: the_title() и т.д. -->
               <?php 
            }
         } else { ?>
            Добавьте, пожалуйста, заголовок!
         <?php }

         wp_reset_postdata(); // Сбрасываем $post
      ?>

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
      <h2 class="whywe-title">Почему мы?</h2>
      <div class="whywe-description">
         Хотите узнать наши основные преимуещства из-за которых нас выбирают наши клиенты и возвращаются вновь?
      </div>
      <!-- /.whywe-description -->

      <div class="whywe-features">
         <div class="whywe-features-item">
            <div src="" alt="" class="whywe-features-icon">
               <svg width="40" height="41" fill="#ffffff" class="icon comments-icon">
                  <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#graph"></use>
               </svg>
            </div>
            <h3 class="whywe-features-title">Finance Dashboard</h3>
            <p class="whywe-features-text">
               Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
            </p>   
         </div>

         <div class="whywe-features-item">
            <div src="" alt="" class="whywe-features-icon">
               <svg width="40" height="41" fill="#ffffff" class="icon comments-icon">
                  <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#heart"></use>
               </svg>
            </div>
            <h3 class="whywe-features-title">Finance Dashboard</h3>
            <p class="whywe-features-text">
               Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
            </p>   
         </div>
         
         <div class="whywe-features-item">
            <div src="" alt="" class="whywe-features-icon">
               <svg width="40" height="41" fill="#ffffff" class="icon comments-icon">
                  <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#key"></use>
               </svg>
            </div>
            <h3 class="whywe-features-title">Finance Dashboard</h3>
            <p class="whywe-features-text">
               Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
            </p>   
         </div>
      </div>
      <!-- /.whywe-features -->
   </div>
   <!-- /.container -->
</div>
<!-- /.whywe -->

<div class="blog-articles">
   <div class="container">
      <h2 class="blog-articles-title">Блог</h2>

      <div class="blog-articles-wrapper">
         <div class="blog-articles-item">
            <a href="#" class="blog-articles-permalink">
               <img src="<?php if( has_post_thumbnail() ) {
                  echo get_the_post_thumbnail_url();
               }
               else {
                  echo get_template_directory_uri() .'/assets/images/img-default.png';
               } ?>" alt="<?php get_the_title() ?>" class="blog-articles-item-image">
               <h3 class="blog-articles-item-title">New iPhone 6 Released</h3>
            </a>
            <!-- /.blog-articles-permalink -->

            <div class="blog-articles-text">
               Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
            </div>
            <!-- /.blog-articles-text -->
            
            <a href="#" class="blog-articles-button">
               Узнать больше
               <div class="blog-articles-button-arrow">
                  <svg width="15" height="15" class="icon comments-icon">
                     <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#right-arrow"></use>
                  </svg>
               </div>
            </a>
         </div>
         <!-- /.blog-articles-item -->

         <div class="blog-articles-item">
            <a href="#" class="blog-articles-permalink">
               <img src="<?php if( has_post_thumbnail() ) {
                  echo get_the_post_thumbnail_url();
               }
               else {
                  echo get_template_directory_uri() .'/assets/images/img-default.png';
               } ?>" alt="<?php get_the_title() ?>" class="blog-articles-item-image">
               <h3 class="blog-articles-item-title">Start your day with a beautiful appearance</h3>
            </a>
            <!-- /.blog-articles-permalink -->

            <div class="blog-articles-text">
               Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
            </div>
            <!-- /.blog-articles-text -->
            
            <a href="#" class="blog-articles-button">
               Узнать больше
               <div class="blog-articles-button-arrow">
                  <svg width="15" height="15" class="icon comments-icon">
                     <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#right-arrow"></use>
                  </svg>
               </div>
            </a>
         </div>
         <!-- /.blog-articles-item -->

         <div class="blog-articles-item">
            <a href="#" class="blog-articles-permalink">
               <img src="<?php if( has_post_thumbnail() ) {
                  echo get_the_post_thumbnail_url();
               }
               else {
                  echo get_template_directory_uri() .'/assets/images/img-default.png';
               } ?>" alt="<?php get_the_title() ?>" class="blog-articles-item-image">
               <h3 class="blog-articles-item-title">Bookmarksgrove right</h3>
            </a>
            <!-- /.blog-articles-permalink -->

            <div class="blog-articles-text">
               Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
            </div>
            <!-- /.blog-articles-text -->
            
            <a href="#" class="blog-articles-button">
               Узнать больше
               <div class="blog-articles-button-arrow">
                  <svg width="15" height="15" class="icon comments-icon">
                     <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#right-arrow"></use>
                  </svg>
               </div>
            </a>
         </div>
         <!-- /.blog-articles-item -->

      </div>
      <!-- /.blog-articles-wrapper -->
   </div>
   <!-- /.container -->
</div>
<!-- /.blog-articles -->

<div class="testimonials">
   <div class="container">
      <h2 class="testimonials-title">Отзывы</h2>
      <p class="testimonials-description">
         Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
      </p>

      <div class="testimonials-wrapper">
         <div class="testimonials-item">
            <div class="testimonials-item-quote">
               <svg width="28" height="30" fill="#bbc2ca" class="icon comments-icon">
                  <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#quote"></use>
               </svg>
            </div>
            <p class="testimonials-item-text">
               Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
            </p>
            <span class="testimonials-item-author">Athan Smith</span>
         </div>
         <!-- /.testimonials-item -->

         <div class="testimonials-item">
            <div class="testimonials-item-quote">
               <svg width="28" height="30" fill="#bbc2ca" class="icon comments-icon">
                  <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#quote"></use>
               </svg>
            </div>
            <p class="testimonials-item-text">
               Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
            </p>
            <span class="testimonials-item-author">Athan Smith</span>
         </div>
         <!-- /.testimonials-item -->

      </div>
      <!-- /.testimonials-wrapper -->
   </div>
   <!-- /.container -->
</div>
<!-- /.testimonials -->

<?php get_footer(); ?>