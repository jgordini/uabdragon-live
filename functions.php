<?php

/**
 * Theme setup.
 */
function uabdragon_setup() {
	add_theme_support( 'title-tag' );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'uabdragon' ),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

    add_theme_support( 'custom-logo' );
	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );

	add_theme_support( 'responsive-embeds' );

	add_theme_support( 'editor-styles' );
	add_editor_style( 'css/editor-style.css' );
}

add_action( 'after_setup_theme', 'uabdragon_setup' );

/**
 * Enqueue theme assets.
 */
function uabdragon_enqueue_scripts() {
	$theme = wp_get_theme();

	wp_enqueue_style( 'uabdragon', uabdragon_asset( 'css/app.css' ), array(), $theme->get( 'Version' ) );
	wp_enqueue_script( 'uabdragon', uabdragon_asset( 'js/app.js' ), array(), $theme->get( 'Version' ) );
}

add_action( 'wp_enqueue_scripts', 'uabdragon_enqueue_scripts' );

/**
 * Add Google Fonts for UAB branding
 */
function uabdragon_google_fonts_url() {
    $font_families = array(
        'family=aktiv-grotesk:wght@100;200;300;400;500;600;700;800;900',
        'family=kulturista:wght@400;500;600;700'
    );
    $query_args = array(
        'family' => rawurlencode( implode( '|', $font_families ) ),
        'display' => 'swap',
    );
    return esc_url_raw( add_query_arg( $query_args, 'https://fonts.googleapis.com/css2' ) );
}

function uabdragon_add_google_fonts() {
    wp_enqueue_style( 'uabdragon-google-fonts', uabdragon_google_fonts_url(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'uabdragon_add_google_fonts' );

/**
 * Get asset path.
 *
 * @param string  $path Path to asset.
 *
 * @return string
 */
function uabdragon_asset( $path ) {
	if ( wp_get_environment_type() === 'production' ) {
		return get_stylesheet_directory_uri() . '/' . $path;
	}

	return add_query_arg( 'time', time(),  get_stylesheet_directory_uri() . '/' . $path );
}

/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function uabdragon_nav_menu_add_li_class( $classes, $item, $args, $depth ) {
	if ( isset( $args->li_class ) ) {
		$classes[] = $args->li_class;
	}

	if ( isset( $args->{"li_class_$depth"} ) ) {
		$classes[] = $args->{"li_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_css_class', 'uabdragon_nav_menu_add_li_class', 10, 4 );

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function uabdragon_nav_menu_add_submenu_class( $classes, $args, $depth ) {
	if ( isset( $args->submenu_class ) ) {
		$classes[] = $args->submenu_class;
	}

	if ( isset( $args->{"submenu_class_$depth"} ) ) {
		$classes[] = $args->{"submenu_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_submenu_css_class', 'uabdragon_nav_menu_add_submenu_class', 10, 3 );