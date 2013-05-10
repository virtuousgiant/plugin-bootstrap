<?php

add_action('admin_menu', 'pboostrap_add_submenu');

function pbootstrap_add_submenu() {
	$settings = add_submenu_page('options-general.php', 'Plugin Bootstrap', 'Plugin Bootstrap', 'manage_options', 'pboostrap-settings', 'pbootstrap_settings');
}

function pbootstrap_settings() {
	include 'templates/admin/pbSettings.php';
}
?>