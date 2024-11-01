<?php 
/**
 * Plugin Name: Wpadmin Page Browser Tab Title
 * Plugin URI: https://wordpress.org/plugins/wpadmin-page-browser-tab-title/
 * Description: This Plugin set browser tab name to "Edit Page [Page Name]" instead of "Edit Page - SiteName".
 * Version: 1.0
 * Author: Rajesh Kumawat
 * Author URI: https://profiles.wordpress.org/rajeshkumawat78/
 */

if ( ! defined( 'WPAdmin_Page_Browser_Tab_Title_VERSION' ) )
define( 'WPAdmin_Page_Browser_Tab_Title_VERSION', '1.0' );

// Custom Page Titles

add_filter('admin_title', 'wppbtt_admin_title', 10, 2);
function wppbtt_admin_title($admin_title, $title)
{	
	global $post;
	$posttitle = get_the_title($post->ID);
	if($posttitle){
	    return	$title.' &lsaquo; '.$posttitle.' &lsaquo; ' .get_bloginfo('name').'&#8212; WordPress';
	}else{
	    return	$title.' &lsaquo; ' .get_bloginfo('name').'&#8212; WordPress';
	}
}