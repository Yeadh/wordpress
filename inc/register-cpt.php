<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package premix
 */

/**
 * Custom post type for Artist.
 *
 */
function premix_register_cpt() {
  register_post_type( 'artist',
    array(
      'labels' => array(
        'name' => __( 'Artists' ),
        'singular_name' => __( 'Artist' ),
		'add_new' => ('Add New Artist'),
      ),
      'public' => true,
	  'supports' => array( 'title', 'editor', 'thumbnail',),
      'has_archive' => true,
    )
  );
  
  //Register custom post type album
  register_post_type( 'album',
    array(
      'labels' => array(
        'name' => __( 'Albums' ),
        'singular_name' => __( 'album' ),
		'add_new' => ('Add New album'),
      ),
      'public' => true,
	  'supports' => array( 'title', 'editor', 'thumbnail',),
      'has_archive' => true,
    )
  );
  
  //Register custom post type event
  register_post_type( 'event',
    array(
      'labels' => array(
        'name' => __( 'Events' ),
        'singular_name' => __( 'Event' ),
		'add_new' => ('Add New Event'),
      ),
      'public' => true,
	  'supports' => array( 'title', 'editor', 'thumbnail',),
      'has_archive' => true,
    )
  );
//Register custom post type team
  register_post_type( 'team',
    array(
      'labels' => array(
        'name' => __( 'Team Members' ),
        'singular_name' => __( 'Team Member' ),
		'add_new' => ('Add New Member'),
      ),
      'public' => true,
	  'supports' => array( 'title', 'editor', 'thumbnail',),
      'has_archive' => true,
    )
  );
  
  	// Add Categorys for artist
	$labels = array(
		'name'              => _x( 'Category', 'taxonomy general name', 'premix' ),
		'singular_name'     => _x( 'Category', 'taxonomy singular name', 'premix' ),
		'search_items'      => __( 'Search Categorys', 'premix' ),
		'all_items'         => __( 'All Categorys', 'premix' ),
		'parent_item'       => __( 'Parent Category', 'premix' ),
		'parent_item_colon' => __( 'Parent Category:', 'premix' ),
		'edit_item'         => __( 'Edit Category', 'premix' ),
		'update_item'       => __( 'Update Category', 'premix' ),
		'add_new_item'      => __( 'Add New Category', 'premix' ),
		'new_item_name'     => __( 'New Category Name', 'premix' ),
		'menu_name'         => __( 'Category', 'premix' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'artist-category' ),
	);

	register_taxonomy( 'artist-category', array( 'artist' ), $args );
	
  	// Add Categor for Albums
	$labels = array(
		'name'              => _x( 'Category', 'taxonomy general name', 'premix' ),
		'singular_name'     => _x( 'Category', 'taxonomy singular name', 'premix' ),
		'search_items'      => __( 'Search Categorys', 'premix' ),
		'all_items'         => __( 'All Categorys', 'premix' ),
		'parent_item'       => __( 'Parent Category', 'premix' ),
		'parent_item_colon' => __( 'Parent Category:', 'premix' ),
		'edit_item'         => __( 'Edit Category', 'premix' ),
		'update_item'       => __( 'Update Category', 'premix' ),
		'add_new_item'      => __( 'Add New Category', 'premix' ),
		'new_item_name'     => __( 'New Category Name', 'premix' ),
		'menu_name'         => __( 'Category', 'premix' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'album-category' ),
	);

	register_taxonomy( 'album-category', array( 'album' ), $args );
	// Add Categor for Events
	$labels = array(
		'name'              => _x( 'Category', 'taxonomy general name', 'premix' ),
		'singular_name'     => _x( 'Category', 'taxonomy singular name', 'premix' ),
		'search_items'      => __( 'Search Categorys', 'premix' ),
		'all_items'         => __( 'All Categorys', 'premix' ),
		'parent_item'       => __( 'Parent Category', 'premix' ),
		'parent_item_colon' => __( 'Parent Category:', 'premix' ),
		'edit_item'         => __( 'Edit Category', 'premix' ),
		'update_item'       => __( 'Update Category', 'premix' ),
		'add_new_item'      => __( 'Add New Category', 'premix' ),
		'new_item_name'     => __( 'New Category Name', 'premix' ),
		'menu_name'         => __( 'Category', 'premix' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'event-category' ),
	);

	register_taxonomy( 'event-category', array( 'event' ), $args );
}
add_action( 'init', 'premix_register_cpt' );


































