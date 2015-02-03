<?php
/* Custom Post: Newsletter
=====================================================================*/

add_action('init', 'es_newsletter');
 
function es_newsletter() {
 
	$labels = array(
		'name' => 'Newletters',
		'singular_name' => 'Newsletter',
		'add_new' => 'Add New',
		'add_new_item' => 'Create Newsletter',
		'edit_item' => 'Edit Newsletter',
		'new_item' => 'New Newsletter',
		'view_item' => 'View Newletters',
		'search_items' => 'Search Newsletters',
		'not_found' =>  'Nothing found',
		'not_found_in_trash' => 'Nothing found in Trash',
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels'              => $labels,
		'public'              => true,
		'has_archive'         => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => true,
		'show_ui'             => true,
		'query_var'           => true,
		'rewrite'             => array(
			'slug' => 'eastnor_express'
		),
		'capability_type'     => 'post',
		'hierarchical'        => false,
		'supports'            => array('title','editor','thumbnail'),
		'menu_position'       => 20
	);
 
	register_post_type( 'es_newsletter' , $args );
}

?>