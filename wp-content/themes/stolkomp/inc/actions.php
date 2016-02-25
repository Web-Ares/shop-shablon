<?php

if ( function_exists( 'add_theme_support' ) ) add_theme_support( 'post-thumbnails' );
register_nav_menus( array(
    'menu' => 'menu',
    'menu_fix'=>'menu_fix'
) );


?>