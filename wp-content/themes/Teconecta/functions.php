<?php

include_once ("opciones.php");


define("TEMPPATH",get_bloginfo("stylesheet_directory"));
define("IMAGES",TEMPPATH."/img/");
define("CSS",TEMPPATH."/css/");

add_theme_support("nav-menus");
if(function_exists("register_nav_menus"))
{
    register_nav_menus(array(
        "Main"=>"main nav"

    ));

}

function arphabet_widgets_init() {
    register_sidebar( array(
        'name'          => 'Home right sidebar',
        'id'            => 'home_right_1',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="rounded">',
        'after_title'   => '</h2>',
    ) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

function get_gravatar($email,$s,$d,$r)
{
    $url = 'https://www.gravatar.com/avatar/';
    $url .= md5( strtolower( trim( $email ) ) );
    $url .= "?s=$s&d=$d&r=$r";
    return $url;
}

/* post thumbnail support */

add_theme_support("post-thumbnails");
?>
