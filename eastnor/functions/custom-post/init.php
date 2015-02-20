<?php 
/* Admin Initialisation for Custom Post
=====================================================================*/

add_action("admin_init", "admin_init");
 
function admin_init(){
  	add_meta_box("testimonial_meta", "Testimonial Options", "testimonial_meta", "testimonial", "normal", "low");
	add_meta_box("team_meta", "Team Options", "team_meta", "team", "normal", "low");	
	add_meta_box("gallery_meta", "Gallery Options", "gallery_meta", "gallery", "normal", "low");	
	add_meta_box("faq_meta", "FAQ Options", "faqs_meta", "faq", "normal", "low");	
	add_meta_box("event_meta", "Event Options", "event_meta", "event", "normal", "low");	
	add_meta_box("partner_meta", "Partner Options", "partner_meta", "partner", "normal", "low");
	add_meta_box("history_meta", "History Options", "history_meta", "history", "normal", "low");
// ... Get codex for this ...
	add_meta_box("newsletter_meta", "Newsletter Data", "newsletter_meta", "es_newsletter", "normal", "low");
}

add_action( 'init', 'build_taxonomies', 0 );  
  
function build_taxonomies() {  
    register_taxonomy( 'gallery-category', array('gallery'), array( 'hierarchical' => true, 'label' => 'Gallery Category', 'query_var' => true, 'rewrite' => true ) );	
	register_taxonomy( 'faq-category', array('faq'), array( 'hierarchical' => true, 'label' => 'FAQ Category', 'query_var' => true, 'rewrite' => true ) );
	register_taxonomy( 'team-category', array('team'), array( 'hierarchical' => true, 'label' => 'Team Category', 'query_var' => true, 'rewrite' => true ) );
 } 

/* Call Custom Post File 
=========================== */
require_once("gallery.php");
require_once("testimonial.php");
require_once("team.php");
require_once("newsletter.php");
require_once("faq.php");
require_once("event.php");
require_once("history.php");
require_once("partner.php");

/* Shortcodes */
// [esmeta foo="foo-value"]

function esmeta_shortcode( $atts ) {
    global $post;
    $a = shortcode_atts( array(
        'meta' => '',
    ), $atts );
    
    if (strlen($a['meta']) == 0) {
	return '<!-- no meta-->';
    }

    $custom = get_post_custom($post->ID);
    if (!array_key_exists($a['meta'], $custom)) {
	return '<!-- unknown meta-->';
    }
    
    return '<span>'.$custom[$a['meta']][0].'</span>';
}

function esmeta_init() {
    add_shortcode('es', 'esmeta_shortcode');
}
add_action('init', 'esmeta_init');  

?>
