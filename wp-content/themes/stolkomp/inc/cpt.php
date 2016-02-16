<?php
// Register Custom Post Type
//add_action('init', 'custom_post_type', 0);
//
//function custom_post_type()
//{
//    $labels = array(
//        'name' => 'Clients',
//        'singular_name' => 'Clients',
//        'menu_name' => 'Clients',
//        'all_items' => 'All clients',
//        'view_item' => 'View client',
//        'add_new_item' => 'Add client',
//        'add_new' => 'Add client',
//        'edit_item' => 'Edit',
//        'update_item' => 'Update',
//        'search_items' => 'Search'
//    );
//
//    $args = array(
//        'labels' => $labels,
//        'supports' => array('title'),
//        'hierarchical' => false,
//        'public' => true,
//        'show_ui' => true,
//        'show_in_menu' => true,
//        'show_in_admin_bar' => true,
//        'can_export' => true,
//        'has_archive' => false,
//        'menu_position'=> 31,
//        'exclude_from_search' => true,
//        'publicly_queryable' => true,
//        'capability_type' => 'post',
//        'rewrite' => array(
//            'with_front' => true
//        )
//    );
//
//    register_post_type('clients', $args);
//
//
//}
//
//// хук для регистрации
//add_action('init', 'create_taxonomy');
//function create_taxonomy(){
//    // заголовки
//    $labels = array(
//        'name'              => 'Team Categories',
//        'singular_name'     => 'Team Category',
//        'search_items'      => 'Search Category',
//        'all_items'         => 'All Categories',
//        'parent_item'       => 'Parent Category',
//        'parent_item_colon' => 'Parent Category:',
//        'edit_item'         => 'Edit Category',
//        'update_item'       => 'Update Category',
//        'add_new_item'      => 'Add New Category',
//        'new_item_name'     => 'New Category Name',
//        'menu_name'         => 'Categories',
//    );
//    // параметры
//    $args = array(
//        'label'                 => '', // определяется параметром $labels->name
//        'labels'                => $labels,
//        'public'                => true,
//        'show_in_nav_menus'     => true, // равен аргументу public
//        'show_ui'               => true, // равен аргументу public
//        'show_tagcloud'         => true, // равен аргументу show_ui
//        'hierarchical'          => false,
//        'update_count_callback' => '',
//        'rewrite'               => true,
//        //'query_var'             => $taxonomy, // название параметра запроса
//        'capabilities'          => array(),
//        'meta_box_cb'           => null, // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
//        'show_admin_column'     => false, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
//        '_builtin'              => false,
//        'show_in_quick_edit'    => null, // по умолчанию значение show_ui
//    );
//    register_taxonomy('p_categories', array('team'), $args );


//}