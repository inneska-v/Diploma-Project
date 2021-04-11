<?php
// добавление расширенных возможностей
if ( ! function_exists('lesser_theme_setup')):
   function lesser_theme_setup() {
      // добавление тега title
      add_theme_support( 'title-tag' );

      // Adding thumbnails
      add_theme_support( 'post-thumbnails', array( 'post', 'blog', 'testimonials' ) );

      // добавление пользовательского логотипа
      add_theme_support( 'custom-logo', [
         'height'      => 30,
         'width'       => 30,
         'flex-width'  => false,
         'flex-height' => false,
         'header-text' => 'LESSER',
         'unlink-homepage-logo' => true, // WP 5.5
      ] );

      // регистрация меню
      register_nav_menus( [
         'header_menu' => 'Меню в шапке',
         'footer_menu' => 'Меню в подвале'
      ] );


      // регистрирующая новые таксономии (create_blog_taxonomies)
      add_action( 'init', 'create_blog_taxonomies' );

      // функция, создающая новую таксономию "category" для постов типа "blog"
      function create_blog_taxonomies(){

         // Добавляем древовидную таксономию 'blog_cat' (как категории)
         register_taxonomy('blog_cat', array('blog'), array(
            'hierarchical'  => true,
            'labels'        => array(
               'name'              => _x( 'Категории', 'taxonomy general name' ),
               'singular_name'     => _x( 'Категория', 'taxonomy singular name' ),
               'search_items'      =>  __( 'поиск категорий' ),
               'all_items'         => __( 'Все категории' ),
               'parent_item'       => __( 'Родительская Категория' ),
               'parent_item_colon' => __( 'Родительская Категория:' ),
               'edit_item'         => __( 'Редактировать Категорию' ),
               'update_item'       => __( 'Обновить Категорию' ),
               'add_new_item'      => __( 'Добавить новую категорию' ),
               'new_item_name'     => __( 'Название новой категории' ),
               'menu_name'         => __( 'Категории' ),
            ),
            'show_ui'       => true,
            'query_var'     => true,
            'rewrite'       => array( 'slug' => 'blog_cat' ), // свой слаг в URL
         ));
      }

      add_action( 'init', 'register_post_types' );
      function register_post_types(){
         register_post_type( 'blog', [
            'label'  => null,
            'labels' => [
               'name'               => 'Записи в Блоге', // основное название для типа записи
               'singular_name'      => 'Запись в Блоге', // название для одной записи этого типа
               'add_new'            => 'Добавить новую запись в блог', // для добавления новой записи
               'add_new_item'       => 'Добавление записи в блог', // заголовка у вновь создаваемой записи в админ-панели.
               'edit_item'          => 'Редактирование записи в блоге', // для редактирования типа записи
               'new_item'           => 'Новая запись в блоге', // текст новой записи
               'view_item'          => 'Смотреть запись в блоге', // для просмотра записи этого типа.
               'search_items'       => 'Искать запись в блоге', // для поиска по этим типам записи
               'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
               'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
               'parent_item_colon'  => '', // для родителей (у древовидных типов)
               'menu_name'          => 'Блог', // название меню
            ],
            'description'         => 'Раздел со статьями в блоге',
            'public'              => true,
            // 'publicly_queryable'  => null, // зависит от public
            // 'exclude_from_search' => null, // зависит от public
            // 'show_ui'             => null, // зависит от public
            // 'show_in_nav_menus'   => null, // зависит от public
            'show_in_menu'        => true, // показывать ли в меню адмнки
            // 'show_in_admin_bar'   => null, // зависит от show_in_menu
            'show_in_rest'        => true, // добавить в REST API. C WP 4.7
            'rest_base'           => null, // $post_type. C WP 4.7
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-edit-page',
            'capability_type'     => 'post',
            //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
            //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
            'hierarchical'        => false,
            'supports'            => [ 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields','comments', ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
            'taxonomies'          => [],
            'has_archive'         => true,
            'rewrite'             => true,
            'query_var'           => true,
         ] );

         register_post_type( 'otzyvy', [
            'label'  => null,
            'labels' => [
               'name'               => 'Отзывы', // основное название для типа записи
               'singular_name'      => 'Отзыв', // название для одной записи этого типа
               'add_new'            => 'Добавить новый отзыв', // для добавления новой записи
               'add_new_item'       => 'Добавление нового отзыва', // заголовка у вновь создаваемой записи в админ-панели.
               'edit_item'          => 'Редактирование отзыва', // для редактирования типа записи
               'new_item'           => 'Новый отзыв', // текст новой записи
               'view_item'          => 'Смотреть отзыв', // для просмотра записи этого типа.
               'search_items'       => 'Искать отзывы', // для поиска по этим типам записи
               'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
               'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
               'parent_item_colon'  => '', // для родителей (у древовидных типов)
               'menu_name'          => 'Отзывы', // название меню
            ],
            'description'         => 'Раздел отзывов',
            'public'              => true,
            // 'publicly_queryable'  => null, // зависит от public
            // 'exclude_from_search' => null, // зависит от public
            // 'show_ui'             => null, // зависит от public
            // 'show_in_nav_menus'   => null, // зависит от public
            'show_in_menu'        => true, // показывать ли в меню адмнки
            // 'show_in_admin_bar'   => null, // зависит от show_in_menu
            'show_in_rest'        => true, // добавить в REST API. C WP 4.7
            'rest_base'           => null, // $post_type. C WP 4.7
            'menu_position'       => 6,
            'menu_icon'           => 'dashicons-format-quote',
            'capability_type'     => 'post',
            //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
            //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
            'hierarchical'        => false,
            'supports'            => [ 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
            'taxonomies'          => [],
            'has_archive'         => true,
            'rewrite'             => true,
            'query_var'           => true,
         ] );
      }

      function revcon_change_post_label() {
         global $menu;
         global $submenu;
         $menu[5][0] = 'Портфолио';
         $submenu['edit.php'][5][0] = 'Портфолио';
         $submenu['edit.php'][10][0] = 'Добавить новый проект';
         $submenu['edit.php'][16][0] = 'Метки';
      }
      function revcon_change_post_object() {
         global $wp_post_types;
         $labels = &$wp_post_types['post']->labels;
         $labels->name = 'Портфолио';
         $labels->singular_name = 'Портфолио';
         $labels->add_new = 'Добавить новый проект';
         $labels->add_new_item = 'Add News';
         $labels->edit_item = 'Изменить Портфолио';
         $labels->new_item = 'Портфолио';
         $labels->view_item = 'Посмотреть Портфолио';
         $labels->search_items = 'Поиск Портфолио';
         $labels->not_found = 'Портфолио не найдено';
         $labels->not_found_in_trash = 'В корзине не найдено ничего из Портфолио';
         $labels->all_items = 'Все работы в Портфолио';
         $labels->menu_name = 'Портфолио';
         $labels->name_admin_bar = 'Портфолио';
      }
      
      add_action( 'admin_menu', 'revcon_change_post_label' );
      add_action( 'init', 'revcon_change_post_object' );
      

   }
endif;
add_action( 'after_setup_theme', 'lesser_theme_setup' );

// Подключение стилей и скриптов
function enqueue_lesser_style() {
   wp_enqueue_style( 'style', get_stylesheet_uri() );
   wp_enqueue_style( 'lesser-theme', get_template_directory_uri() . '/assets/css/lesser-theme.css', 'style');
}
add_action( 'wp_enqueue_scripts', 'enqueue_lesser_style' );