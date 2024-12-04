<?php
/*
Plugin name: Blockhaus Base Functionality
Description: Custom fields and Gutenberg blocks
Text Domain: blockhaus
*/

// Define path and URL to the ACF plugin.
define( 'MY_ACF_PATH', plugin_dir_path( __FILE__ ) . '/includes/acf/' );
// define( 'MY_ACF_URL', get_stylesheet_directory_uri() . '/includes/acf/' );

define( 'MY_ACF_URL', plugins_url( '/includes/acf/', __FILE__ ) );

// Include the ACF plugin.
include_once( MY_ACF_PATH . 'acf.php' );

// Customize the url setting to fix incorrect asset URLs.
add_filter('acf/settings/url', 'my_acf_settings_url');
function my_acf_settings_url( $url ) {
    return MY_ACF_URL;
}

// (Optional) Hide the ACF admin menu item.
add_filter('acf/settings/show_admin', 'my_acf_settings_show_admin');
function my_acf_settings_show_admin( $show_admin ) {
    return true;
}

define( 'MY_PLUGIN_DIR_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) . '/includes/' ) );


add_filter('acf/settings/save_json', 'acf_json_save_point');
 
function acf_json_save_point( $path ) {
    
    // Update path
    $path = plugin_dir_path( __FILE__ ). 'includes/acf-json';
    
    // Return path
    return $path;
    
}

add_filter('acf/settings/load_json', 'acf_json_load_point');
 
function acf_json_load_point( $path ) {
    
    // Update path
    $path = plugin_dir_path( __FILE__ ). 'includes/acf-json';
    
    // Return path
    return $path;
    
}


// Add options page

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme Options',
		'menu_title'	=> 'Theme Options',
		'menu_slug' 	=> 'theme-options',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'icon_url' => 'dashicons-admin-generic',
		'update_button' => __('Update Theme Options', 'acf'),
	));

}

// Include file to register ACF fields for registered blocks

include( plugin_dir_path( __FILE__ ) . 'includes/fields/blocks.php');


// Include file to register Block Patterns

// include( plugin_dir_path( __FILE__ ) . 'includes/blocks/block-patterns.php');


/**
 * Load Blocks
 */
function blockhaus_load_blocks() {
	register_block_type( plugin_dir_path( __FILE__ ) . '/includes/blocks/address/block.json' );
	register_block_type( plugin_dir_path( __FILE__ ) . '/includes/blocks/authors-list/block.json' );
	register_block_type( plugin_dir_path( __FILE__ ) . '/includes/blocks/auto-fit-grid/block.json' );
  register_block_type( plugin_dir_path( __FILE__ ) . '/includes/blocks/featured-link/block.json' );
  register_block_type( plugin_dir_path( __FILE__ ) . '/includes/blocks/categories-list/block.json' );
	register_block_type( plugin_dir_path( __FILE__ ) . '/includes/blocks/curved-separator/block.json' );
  register_block_type( plugin_dir_path( __FILE__ ) . '/includes/blocks/profile/block.json' );
	register_block_type( plugin_dir_path( __FILE__ ) . '/includes/blocks/resources-link/block.json' );
	register_block_type( plugin_dir_path( __FILE__ ) . '/includes/blocks/social-media/block.json' );

}
add_action( 'init', 'blockhaus_load_blocks' );

/**
 * Adding a new (custom) block category.
 *
 * @param   array $block_categories                         Array of categories for block types.
 */
function blockhaus_add_new_block_category( $block_categories ) {
	
	return array_merge(
		$block_categories,
		[
			[
				'slug'  => 'blockhaus',
				'title' => esc_html__( 'Blockhaus', 'blockhaus' ),
				'icon'  => 'schedule', // Slug of a WordPress Dashicon or custom SVG
			],
		]
	);
}

add_filter( 'block_categories_all', 'blockhaus_add_new_block_category' );


add_filter( 'get_block_type_variations', 'blockhaus_block_type_variations', 10, 2 );

function blockhaus_block_type_variations( $variations, $block_type ) {
	
	// get the most recent front-page article and use its ID to exclude from the Query loop - Home block variation
	
	$args = array(
		'post_type' => 'post',
		'numberposts' => 1,
		'tax_query' => array(
			array(
				'taxonomy' => 'label',
				'field' => 'slug',
				'terms' => ['front-page'],
			),
		),
	);
	
	$latest = get_posts( $args );

	if ( 'core/query' === $block_type->name ) {
		$variations[] = array(
			'name'       => 'blockhaus-query-home',
			'title'      => __( 'Query Loop - Home', 'blockhaus' ),
			
			'attributes' => array(
				'namespace' => 'blockhaus-query-home',
				'query' => [
				'postType' => 'post',
				'taxQuery' => ['label' => [13, 1]],
				'exclude' => [$latest[0]->ID]]
			),
			'isActive'   => array(
				'namespace' 
			),
			'innerBlocks' => [
				[
						'core/post-template',
						
						[ [ 'core/post-title' ], [ 'core/post-excerpt' ], [ 'core/read-more' ] ],
				],
		],
		);
	}

	return $variations;
}