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
wp_register_style( 'es_newsletter', get_template_directory_uri() . '/style/es_newsletter.css', array(), '1.0' );
}

function es_newsletter_header_hook( $name ) {
	wp_register_style( 'es_newsletter', get_template_directory_uri() . '/style/es_newsletter.css', array(), '1.0' );
}
add_action( 'wp_enqueue_scripts', 'es_newsletter_header_hook' );

function newsletter_get_houses() {
  return array(
	array(
		'title' => 'Castle',
		'key'   => 'es_hp_castle'
	),
	array(
		'title' => 'Deer Park',
		'key'   => 'es_hp_deerpark'
	),
	array(
		'title' => 'Land Rover',
		'key'   => 'es_hp_landrover'
	),
	array(
		'title' => 'Obelisk',
		'key'   => 'es_hp_obelisk'
	)
  );
}

function newsletter_get_classes() {
  return array(
	array(
		'title' => 'Reception',
		'key'   => 'es_pw_reception'
	),
    array(
        'title' => 'Year 1',
        'key'   => 'es_pw_year1'
    ),
    array(
        'title' => 'Year 2',
        'key'   => 'es_pw_year2'
    ),
    array(
        'title' => 'Year 3',
        'key'   => 'es_pw_year3'
    ),
    array(
        'title' => 'Year 4',
        'key'   => 'es_pw_year4'
    ),
    array(
        'title' => 'Year 5',
        'key'   => 'es_pw_year5'
    ),
    array(
        'title' => 'Year 6',
        'key'   => 'es_pw_year6'
    ),
    array(
        'title' => 'Headteacher',
        'key'   => 'es_pw_head'
    )
  );
}

function newsletter_meta() {
  global $post;
  $custom = get_post_custom($post->ID);
  
  $houses = newsletter_get_houses();
  
  ?>
  <h3>House Points</h3>
  <?php
  foreach ($houses as $house) :
    $hp = isset($custom[$house['key']][0]) ? $custom[$house['key']][0] : false;
  // Codex for _e(...)
  ?>
  <p class="ct_custom_p">
    <label for="txt-<?php echo $house['key']; ?>"><?php _e($house['title'],"workchaos");?>:</label>
    <input type="text" name="<?php echo $house['key']; ?>" value="<?php echo $hp; ?>" id="txt-<?php echo $house['key']; ?>" />
  </p>
  <?php
  endforeach;

  $classes = newsletter_get_classes();
  ?>
  <h3>Pupil of the Week</h3>
  <?php
  foreach ($classes as $class) :
    $cls = isset($custom[$class['key']][0]) ? $custom[$class['key']][0] : false;
  // Codex for _e(...)
  ?>
  <p class="ct_custom_p">
    <label for="txt-<?php echo $class['key']; ?>"><?php _e($class['title'],"workchaos");?>:</label>
    <textarea rows="4" cols="80" name="<?php echo $class['key']; ?>" id="txt-<?php echo $class['key']; ?>"><?php echo $cls; ?></textarea>
  </p>
  <?php
  endforeach;
}

add_action('save_post', 'save_newsletter');

function save_newsletter(){
	global $post;
  
  	if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
    	if (isset($post_id)) {
    		return $post_id;
    	}

	if(isset($_POST['es_hp_castle'])) {
		update_post_meta($post->ID, "es_hp_castle",    $_POST["es_hp_castle"]);
		update_post_meta($post->ID, "es_hp_deerpark",  $_POST["es_hp_deerpark"]);
		update_post_meta($post->ID, "es_hp_landrover", $_POST["es_hp_landrover"]);
		update_post_meta($post->ID, "es_hp_obelisk",   $_POST["es_hp_obelisk"]);

  		update_post_meta($post->ID, "es_pw_reception", $_POST["es_pw_reception"]);
  		update_post_meta($post->ID, "es_pw_year1",     $_POST["es_pw_year1"]);
  		update_post_meta($post->ID, "es_pw_year2",     $_POST["es_pw_year2"]);
  		update_post_meta($post->ID, "es_pw_year3",     $_POST["es_pw_year3"]);
  		update_post_meta($post->ID, "es_pw_year4",     $_POST["es_pw_year4"]);
  		update_post_meta($post->ID, "es_pw_year5",     $_POST["es_pw_year5"]);
  		update_post_meta($post->ID, "es_pw_year6",     $_POST["es_pw_year6"]);
  		update_post_meta($post->ID, "es_pw_head",      $_POST["es_pw_head"]);
  	}
}

require_once('newsletter-prebuilt-layout-1.php')
?>
