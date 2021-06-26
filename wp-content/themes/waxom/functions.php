<?php 

function wxm_after_setup_theme() {
    add_theme_support('title-tag');

    add_theme_support(
        'custom-logo', array(
        'height' => 56,
        'width'  => 181
        )
    );

    add_theme_support('menus');
    add_theme_support('post-thumbnails');

    register_nav_menu('header','Header location');
    register_nav_menu('footer','Footer location');

    remove_action( 'wp_head', 'hybrid_meta_viewport', 1 );
};

add_action( 'after_setup_theme', 'wxm_after_setup_theme');

function wxm_excerpt_more() {
    return '...';
};

add_filter('excerpt_more','wxm_excerpt_more');

function wxm_excerpt_length() {
    return 40;
};

add_filter('excerpt_length','wxm_excerpt_length');

function wmx_navigation_markup_template() {
    return '<div class="post_pagination">%3$s</div>';
};

add_filter('navigation_markup_template', 'wmx_navigation_markup_template');

function wmx_widgets_init(){

    $argsMainSlider = array(
        'name' => 'Main slider',
        'id'   => 'main-slider'
    );
    register_sidebar($argsMainSlider);

    $argsMainPageB = array(
        'name' => 'Main Page Block B',
        'id'   => 'main-pageb'
    );
    register_sidebar($argsMainPageB);

    $argsCompanyInfo = array(
        'name' => 'Company info',
        'id'   => 'company-info'
    );
    register_sidebar($argsCompanyInfo);

    $argsRecentBlock = array(
        'name' => 'Recent block',
        'id'   => 'recent-block'
    );
    register_sidebar($argsRecentBlock);

    $argsContacts = array(
        'name' => 'Contacts block',
        'id'   => 'contacts-block'
    );
    register_sidebar($argsContacts);

};

add_action('widgets_init', 'wmx_widgets_init');

function wmx_wp_enqueue_scripts() {
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/style/style.css', array(), '', 'all');
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/main.js', array(), '', 'all');
    if (!is_admin()) {
		wp_register_style('google', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;700&family=Raleway:wght@400;500;600;700;800&family=Roboto&display=swap', array(), null, 'all');
		wp_enqueue_style('google');
	}
};

add_action('wp_enqueue_scripts', 'wmx_wp_enqueue_scripts');

function right_way_to_include_google_fonts() {
	
}
add_action('wp_enqueue_scripts', 'right_way_to_include_google_fonts');



