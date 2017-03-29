<?php
/**
 * Search Inside Wordpress Plugin.
 * 
 * @author     Josantonius - hello@josantonius.com
 * @copyright  Copyright (c) 2017
 * @license    GPL-2.0+
 * @link       https://github.com/Josantonius/Search-Inside.git
 * @since      1.1.3
 */

use Eliasis\App\App;

$textdomain = App::plugin('name');

return [

	'menu' => [
		'top-level' => [
			'title'      => __('Search Inside', $textdomain),
			'name'       => __('Search Inside', $textdomain),
			'capability' => 'manage_options',
			'slug'       => 'searchinside-options',
			'function'   => '',
			'icon_url'   => App::url('icons') . 'searchinside-menu-admin.png',
			'position'   => 25,
		],
	],
	'submenu' => [
		'options' => [
			'parent'     => 'searchinside-options',
			'title'      => __('Options', $textdomain),
			'name'       => __('Options', $textdomain),
			'capability' => 'manage_options',
			'slug'       => 'searchinside-options',
			'function'   => '',
		],
	],
];