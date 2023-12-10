<?php


/*
** navwaker bootstrap for nav
*/
require_once('wp-bootstrap-navwalker.php');
//add featyre image support
add_theme_support('post-thumbnails');
/**customise excerpt */
function extend_excerpt_length($length){
	if(is_author()){
		return 5;
	}
	else {return 10;}
	
}
add_filter('excerpt_length','extend_excerpt_length');

function excerpt_change_dots($more){
	return ' ...';
}
add_filter('excerpt_more','excerpt_change_dots');
/*
**function to add my custom style
** wp_enqueue_style() fontawesome
*/
function bondi_add_style() {
	wp_enqueue_style('my-bootstrap-css',get_template_directory_uri().'/my-bootstrap/css/bootstrap.min.css');
	wp_enqueue_style('stylesheet-css',get_template_directory_uri().'/style.css');
	wp_enqueue_style('my-css',get_template_directory_uri().'/my-bootstrap/css/main.css');


}

/*
**function to add my custom script
** wp_enqueue_scripts()
*/
function bondi_add_scripts() {
	wp_deregister_script('jquery');
	wp_register_script('jquery',includes_url('/js/jquery/jquery.js'),array(),false,true);
	wp_enqueue_script('jquery');
	wp_enqueue_script('my-bootstrap-js',get_template_directory_uri().'/my-bootstrap/js/bootstrap.min.js',array(),'1.0.0',true);
	wp_enqueue_script('main-js',get_template_directory_uri().'/my-bootstrap/js/main.js',array(),false,true);
	
	
}

/*
**add actions
*/
add_action('wp_enqueue_scripts','bondi_add_style');
add_action('wp_enqueue_scripts','bondi_add_scripts');
/*
**custom menu
*/
function bondi_register_custom_menu(){
	register_nav_menus(array(
		'bootstrap_menu'=>'Navigation Bar',
		'footer_menu'=>'Footer Menu' ));

}
add_action('init',"bondi_register_custom_menu");

function bondi_bootstrap_menu(){
	wp_nav_menu(
		array('theme_location' => 'bootstrap_menu',
		'menu_class'           => 'navbar-nav me-auto mb-2 mb-lg-0',
		'container'            =>  false ,
		 'depth'               => 2 ,
		 'walker'              => new wp_bootstrap_navwalker()
	)
	);
}


//numbering pagination
function numbering_pagination(){
global $wp_query ;                                 //make wp_query global
$all_pages = $wp_query -> max_num_pages;            //get all pages
$current_page = max(1,get_query_var('paged'));          // get current pages
 if ($all_pages>1){                                 //if we need pagination
	return paginate_links(array(
		'base' => get_pagenum_link(1).'%_%',
		'format'=> 'page%#%' ,
		'current'=> $current_page
	));
 }


}
//sidebar register
function bondi_main_sidebar(){
	register_sidebar(array(
		'name' =>'main sidebar',
		'id'=> 'main-sidebar',
		'description'=> 'it is main sidebar ',
		'class'=>'main-sidebar',
		'before_widget'=>'<div class="main-sidebar-widget">',
		'after_widget'=>'</div>',
		'before_title'=>'<h3 class="widget-title">',
		'after_title'=>'</h3>'


	));

}
add_action ('widgets_init','bondi_main_sidebar');



















?>