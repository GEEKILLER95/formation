<!-- CSS de Bootstrap -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
<?php
/*** Ajouter un script ou un fichier CSS de la bonne façon */
function wpdocs_theme_name_scripts() {
wp_register_style('main-style', get_template_directory_uri().'/blog.css', array(), true);
wp_enqueue_style('main-style');
wp_register_style('bootstrap-style', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css', array(), true);
wp_enqueue_style('bootstrap-style');
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );
register_nav_menus( array(
'menu-principal' => 'Menu principal') );
function desktop_register_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'textdomain' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'desktop_register_widgets_init' );

?>