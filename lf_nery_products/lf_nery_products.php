<?php
/**
* The plugin bootstrap file
*
* This file is read by WordPress to generate the plugin information in the plugin
* admin area. This file also includes all of the dependencies used by the plugin,
* registers the activation and deactivation functions, and defines a function
* that starts the plugin.
*
* @link              http://logicfighters.com
* @since             1.0.0
* @package           Lf_nery_products
*
* @wordpress-plugin
* Plugin Name:       LF NERY PRODUCTS
* Plugin URI:        http://paesnery.marcoaacoliveira.com.br
* Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
* Version:           1.0.0
* Author:            Logic Fighters
* Author URI:        http://logicfighters.com
* License:           GPL-2.0+
* License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
* Text Domain:       lf_nery_products
* Domain Path:       /languages
*/
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
/**
* Currently plugin version.
* Start at version 1.0.0 and use SemVer - https://semver.org
* Rename this for your plugin and update it as you release new versions.
*/
define( 'PLUGIN_NAME_VERSION', '1.0.0' );
/**
* The code that runs during plugin activation.
* This action is documented in includes/class-lf_nery_products-activator.php
*/
// Register Custom Post Type
function lf_products_post_type() {
$labels = array(
'name'                  => _x( 'Paesnery Products', 'Post Type General Name', 'g5_helium' ),
'singular_name'         => _x( 'Paesnery Product', 'Post Type Singular Name', 'g5_helium' ),
'menu_name'             => __( 'Paesnery Products', 'g5_helium' ),
'name_admin_bar'        => __( 'Paesnery Products', 'g5_helium' ),
'archives'              => __( 'Item Archives', 'g5_helium' ),
'attributes'            => __( 'Item Attributes', 'g5_helium' ),
'parent_item_colon'     => __( 'Parent Item:', 'g5_helium' ),
'all_items'             => __( 'All Items', 'g5_helium' ),
'add_new_item'          => __( 'Add New Item', 'g5_helium' ),
'add_new'               => __( 'Add New Paesnery Product', 'g5_helium' ),
'new_item'              => __( 'New Item', 'g5_helium' ),
'edit_item'             => __( 'Edit Item', 'g5_helium' ),
'update_item'           => __( 'Update Item', 'g5_helium' ),
'view_item'             => __( 'View Item', 'g5_helium' ),
'view_items'            => __( 'View Items', 'g5_helium' ),
'search_items'          => __( 'Search Item', 'g5_helium' ),
'not_found'             => __( 'Not found', 'g5_helium' ),
'not_found_in_trash'    => __( 'Not found in Trash', 'g5_helium' ),
'featured_image'        => __( 'Featured Image', 'g5_helium' ),
'set_featured_image'    => __( 'Set featured image', 'g5_helium' ),
'remove_featured_image' => __( 'Remove featured image', 'g5_helium' ),
'use_featured_image'    => __( 'Use as featured image', 'g5_helium' ),
'insert_into_item'      => __( 'Insert into item', 'g5_helium' ),
'uploaded_to_this_item' => __( 'Uploaded to this item', 'g5_helium' ),
'items_list'            => __( 'Items list', 'g5_helium' ),
'items_list_navigation' => __( 'Items list navigation', 'g5_helium' ),
'filter_items_list'     => __( 'Filter items list', 'g5_helium' ),
);
$args = array(
'label'                 => __( 'Paesnery Product', 'g5_helium' ),
'description'           => __( 'Post Type For Adding Custom Products', 'g5_helium' ),
'labels'                => $labels,
'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
'hierarchical'          => true,
'public'                => true,
'show_ui'               => true,
'show_in_menu'          => true,
'menu_position'         => 5,
'menu_icon'             => 'dashicons-vault',
'show_in_admin_bar'     => true,
'show_in_nav_menus'     => true,
'can_export'            => true,
'has_archive'           => true,
'exclude_from_search'   => false,
'publicly_queryable'    => true,
'capability_type'       => 'page',
'show_in_rest'          => true,
);
register_post_type( 'p_products', $args );
}
add_action( 'init', 'lf_products_post_type', 0 );
// Register Custom Taxonomy
function lf_products_categories() {
$labels = array(
'name'                       => _x( 'Paesnery Products Categories', 'Taxonomy General Name', 'g5_helium' ),
'singular_name'              => _x( 'Paesnery Products Category', 'Taxonomy Singular Name', 'g5_helium' ),
'menu_name'                  => __( 'Paesnery Products Categories', 'g5_helium' ),
'all_items'                  => __( 'All Items', 'g5_helium' ),
'parent_item'                => __( 'Parent Item', 'g5_helium' ),
'parent_item_colon'          => __( 'Parent Item:', 'g5_helium' ),
'new_item_name'              => __( 'New Item Name', 'g5_helium' ),
'add_new_item'               => __( 'Add New Item', 'g5_helium' ),
'edit_item'                  => __( 'Edit Item', 'g5_helium' ),
'update_item'                => __( 'Update Item', 'g5_helium' ),
'view_item'                  => __( 'View Item', 'g5_helium' ),
'separate_items_with_commas' => __( 'Separate items with commas', 'g5_helium' ),
'add_or_remove_items'        => __( 'Add or remove items', 'g5_helium' ),
'choose_from_most_used'      => __( 'Choose from the most used', 'g5_helium' ),
'popular_items'              => __( 'Popular Items', 'g5_helium' ),
'search_items'               => __( 'Search Items', 'g5_helium' ),
'not_found'                  => __( 'Not Found', 'g5_helium' ),
'no_terms'                   => __( 'No items', 'g5_helium' ),
'items_list'                 => __( 'Items list', 'g5_helium' ),
'items_list_navigation'      => __( 'Items list navigation', 'g5_helium' ),
);
$args = array(
'labels'                     => $labels,
'hierarchical'               => true,
'public'                     => true,
'show_ui'                    => true,
'show_admin_column'          => true,
'show_in_nav_menus'          => true,
'show_tagcloud'              => true,
'show_in_rest'               => true,
);
register_taxonomy( 'lf_products_categories', array( 'p_products' ), $args );
}
add_action( 'init', 'lf_products_categories', 0 );

function lf_load_person_template($template) {
global $post;
if ($post->post_type == "p_products"){
//Your plugin path
$plugin_path = plugin_dir_path( __FILE__ );
// The name of custom post type single template
$template_name = 'lf_single_product.php';
// A specific single template for my custom post type exists in theme folder? Or it also doesn't exist in my plugin?
if($template === get_stylesheet_directory() . '/' . $template_name
|| !file_exists($plugin_path . $template_name)) {
//Then return "single.php" or "single-my-custom-post-type.php" from theme directory.
return $template;
}
// If not, return my plugin custom post type template.
return $plugin_path . $template_name;
}
//This is not my custom post type, do nothing with $template
return $template;
}
add_filter('single_template', 'lf_load_person_template');
class PageTemplater {
	/**
	* A reference to an instance of this class.
	*/
	private static $instance;
	/**
	* The array of templates that this plugin tracks.
	*/
	protected $templates;
	/**
	* Returns an instance of this class.
	*/
	public static function get_instance() {
		if ( null == self::$instance ) {
			self::$instance = new PageTemplater();
		}
		return self::$instance;
	}
	/**
	* Initializes the plugin by setting filters and administration functions.
	*/
	private function __construct() {
		$this->templates = array();
		// Add a filter to the attributes metabox to inject template into the cache.
		if ( version_compare( floatval( get_bloginfo( 'version' ) ), '4.7', '<' ) ) {
			// 4.6 and older
			add_filter(
				'page_attributes_dropdown_pages_args',
				array( $this, 'register_project_templates' )
			);
		} else {
			// Add a filter to the wp 4.7 version attributes metabox
			add_filter(
				'theme_page_templates', array( $this, 'add_new_template' )
			);
		}
		// Add a filter to the save post to inject out template into the page cache
		add_filter(
			'wp_insert_post_data',
			array( $this, 'register_project_templates' )
		);
		// Add a filter to the template include to determine if the page has our
		// template assigned and return it's path
		add_filter(
			'template_include',
			array( $this, 'view_project_template')
		);
		// Add your templates to this array.
		$this->templates = array(
			'lf_products_template.php' => 'Products',
			'lf_qualidade_nery.php' => 'Qualidade Nery'
		);
			
	}
	/**
	* Adds our template to the page dropdown for v4.7+
	*
	*/
	public function add_new_template( $posts_templates ) {
		$posts_templates = array_merge( $posts_templates, $this->templates );
		return $posts_templates;
	}
	/**
	* Adds our template to the pages cache in order to trick WordPress
	* into thinking the template file exists where it doens't really exist.
	*/
	public function register_project_templates( $atts ) {
		// Create the key used for the themes cache
		$cache_key = 'page_templates-' . md5( get_theme_root() . '/' . get_stylesheet() );
		// Retrieve the cache list.
		// If it doesn't exist, or it's empty prepare an array
		$templates = wp_get_theme()->get_page_templates();
		if ( empty( $templates ) ) {
			$templates = array();
		}
		// New cache, therefore remove the old one
		wp_cache_delete( $cache_key , 'themes');
		// Now add our template to the list of templates by merging our templates
		// with the existing templates array from the cache.
		$templates = array_merge( $templates, $this->templates );
		// Add the modified cache to allow WordPress to pick it up for listing
		// available templates
		wp_cache_add( $cache_key, $templates, 'themes', 1800 );
		return $atts;
	}
	/**
	* Checks if the template is assigned to the page
	*/
	public function view_project_template( $template ) {
		
		// Get global post
		global $post;
		// Return template if post is empty
		if ( ! $post ) {
			return $template;
		}
		// Return default template if we don't have a custom one defined
		if ( ! isset( $this->templates[get_post_meta(
			$post->ID, '_wp_page_template', true
		)] ) ) {
			return $template;
		}
		$file = plugin_dir_path( __FILE__ ). get_post_meta(
			$post->ID, '_wp_page_template', true
		);
		// Just to be safe, we check if the file exist first
		if ( file_exists( $file ) ) {
			return $file;
		} else {
			echo $file;
		}
		// Return template
		return $template;
	}
}
add_action( 'plugins_loaded', array( 'PageTemplater', 'get_instance' ) );
function lf_scripts_enqueue() { // Our own unique function called james_adds_to_the_head
	wp_enqueue_style( 'lf_fbox-styles', '//cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css' , array(), null );
	wp_enqueue_style( 'lf_bx-styles', '//cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css' , array(), null );
	wp_enqueue_script( 'lf_fancyboxscript', '//cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js', array('jquery'),  '10000', true);
	wp_enqueue_script( 'lf_bxscript', '//cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js', array('jquery'),  '10001', true);
wp_register_script( 'lf-customjs', plugins_url( 'lf_custom.js', __FILE__ ) , array('jquery'),'',true  );
wp_register_style( 'lf-customcss', plugins_url( 'lf_styles.css', __FILE__ ) );
wp_enqueue_script( 'lf-customjs' );
wp_enqueue_style( 'lf-customcss' );
}
add_action( 'wp_enqueue_scripts', 'lf_scripts_enqueue' ); //Hooks our custom function into WP's wp_enqueue_scripts function
//include( plugin_dir_path( __FILE__ ) . 'lf_styles.css');
include( plugin_dir_path( __FILE__ ) . 'lf_shortcodes.php');

function jptweak_remove_share() {
    remove_filter( 'the_content', 'sharing_display', 19 );
    remove_filter( 'the_excerpt', 'sharing_display', 19 );
    if ( class_exists( 'Jetpack_Likes' ) ) {
        remove_filter( 'the_content', array( Jetpack_Likes::init(), 'post_likes' ), 30, 1 );
    }
}
 
add_action( 'loop_start', 'jptweak_remove_share' );