<?php

function toptemp_add_recursos(){
	add_theme_support('custom-logo');
	add_theme_support('post_thumbnails');
}
add_action('after_setup_theme', 'toptemp_add_recursos');

function toptemp_add_menu_principal() {
	register_nav_menu(
		'menu_principal',
		'Menu de Navegação'
	);
}
add_action('init', 'toptemp_add_menu_principal');