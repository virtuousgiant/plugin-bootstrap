<?php

//error_reporting(E_ALL);

//@ini_set('display_errors', 1);

/*
Plugin Name: Plugin Bootstrap
URI: http://MyDomain.com
Description: A simple plugin framework for Wordpress
Version: 1.0
Author: Virtuous Giant
Author URI: http://VirtuousGiant.com
License: GPL2
*/

register_activation_hook(__FILE__,'pbootstrap_install');
global $pbootstrap_db_version;
$pbootstrap_db_version = "1.0";

function pbootstrap_install() {

}

require_once 'pbootstrap-admin.php';
require_once 'pbootstrap-functions.php';

function pbootstrap_styles() {
	wp_register_script('pbootstrap-js', plugins_url('js/idmember.js', __FILE__));
	wp_register_style('pbootstrap', plugins_url('pbootstrap.css', __FILE__));
	wp_enqueue_script('jquery');
	wp_enqueue_script('pbootstrap-js');
	// localize scripts
	$pb_ajaxurl = site_url('/wp-admin/admin-ajax.php');
	$pb_pluginsurl = plugins_url('', __FILE__);
	$pb_siteurl = site_url();
	wp_localize_script( 'pbootstrap-js', 'pb_ajaxurl', $ajaxurl );
	wp_localize_script( 'pbootstrap-js', 'pb_siteurl', $siteurl );
	wp_localize_script( 'pbootstrap-js', 'pb_pluginsurl', $pluginsurl );
	// end localize
	wp_enqueue_style('pbootstrap');
};

add_action('wp_enqueue_scripts', 'pbootstrap_styles');

?>