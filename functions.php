<?php

// adding the CSS and JS files

function gt_setup(){
    wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Pacifico|Sansita|Montserrat:400,700&display=swap');
    wp_enqueue_style( 'fontawesome', '//use.fontawesome.com/releases/v5.6.3/css/all.css');

    wp_enqueue_style('desktop', get_stylesheet_uri(), NULL, microtime());
    wp_enqueue_style('tablet', get_template_directory_uri().'/tablet.css', NULL, microtime());
    wp_enqueue_style('style', get_template_directory_uri() .'/desktop.css', NULL, microtime());
    wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.2.1.slim.min.js');
    wp_enqueue_script( 'popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js');
    wp_enqueue_script( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js');
    wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
}

add_action( 'wp_enqueue_scripts', 'gt_setup');

// adding Theme Support

function gt_init() {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'html5',
        array('comment-list', 'comment-form', 'search-form')
    );
}

add_action( 'after_setup_theme', 'gt_init');


// renaming default post type
function revcon_change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Ze života';
    $submenu['edit.php'][5][0] = 'Ze života';
    $submenu['edit.php'][10][0] = 'Vytvořit příspěvek';
    $submenu['edit.php'][16][0] = 'Štítky';
}
function revcon_change_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Ze života';
    $labels->singular_name = 'Ze života';
    $labels->add_new = 'Vytvořit příspěvek';
    $labels->add_new_item = 'Vytvořit příspěvek';
    $labels->edit_item = 'Upravit';
    $labels->new_item = 'Ze života';
    $labels->view_item = 'Zobrazit příspěvek';
    $labels->search_items = 'Hledat příspěvky';
    $labels->not_found = 'Příspěvek nenalezen';
    $labels->not_found_in_trash = 'Příspěvek nenalezen v koši';
    $labels->all_items = 'Všechny příspěvky';
    $labels->menu_name = 'Ze života';
    $labels->name_admin_bar = 'Ze života';
}

add_action( 'admin_menu', 'revcon_change_post_label' );
add_action( 'init', 'revcon_change_post_object' );

// recepies post type

function gt_custom_post_type() {
    register_post_type( 'gk_recepty',
        array(
            'rewrite' => array('slug' => 'recepty'),
            'labels' => array(
                'name' => 'Recepty',
                'singular_name' => 'Recept',
                'add_new_item' => 'Přidat recept',
                'edit_item' => 'Upravit recept'
            ),
            'menu-icon' => 'dashicons-universal-access',
            'public' => true,
            'has_archive' => true,
            'show_in_rest' => true,
            'menu_position' => 5,
            'supports' => array(
                'title', 'thumbnail', 'editor', 'custom-fields', 'excerpt', 'comments'
            )
        )
    );
}

add_action( 'init', 'gt_custom_post_type');

// travel post type
function create_posttype() {
    register_post_type( 'gk_cestovani',
    array(
        'rewrite' => array('slug' => 'cestovani'),
        'labels' => array(
            'name' => __( 'Cestování' ),
            'singular_name' => __( 'Cestování' )
        ),
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'menu_position' => 6,
        'supports' => array(
            'title', 'thumbnail', 'editor', 'custom-fields', 'excerpt', 'comments'
        )
    )
  );
}

add_action( 'init', 'create_posttype' );

// add featured image support
function addFeaturedImage() {
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'medium-thumbnail', 400, 300, true);
}

add_action( 'after_setup_theme', 'addFeaturedImage' );
