<?php
/**
 * Layout settings
 */
return array(
	0 => array(
		'content' => 'col-md-12',
		'sidebar' => false,
	),
	'is_single' => array(
		'content' => 'col-md-8',
		'sidebar' => 'col-md-4',
		'args'    => array( 'post' ),
	),
	'is_page' => array(
		'content' => 'col-xs-12 col-sm-12 col-md-12 col-lg-12',
		'sidebar' => false,
	),
	'is_home' => array(
		'content' => 'col-md-8',
		'sidebar' => 'col-md-4',
		'args'    => array(),
	),
	'is_singular' => array(
		'content' => 'col-md-12',
		'sidebar' => false,
		'args'    => array(),
	),
	'is_tax' => array(
		'content' => 'col-md-12',
		'sidebar' => false,
		'args'    => array(),
	),
	'is_category' => array(
		'content' => 'col-md-8',
		'sidebar' => 'col-md-4',
		'args'    => array(),
	),
	'is_tag' => array(
		'content' => 'col-md-8',
		'sidebar' => 'col-md-4',
		'args'    => array(),
	),
	'is_post_type_archive' => array(
		'content' => 'col-md-12',
		'sidebar' => false,
		'args'    => array(),
	),
	'is_archive' => array(
		'content' => 'col-md-8',
		'sidebar' => 'col-md-4',
		'args'    => array(),
	),
	'is_search' => array(
		'content' => 'col-xs-12 col-sm-12 col-md-8 col-lg-8',
		'sidebar' => 'col-xs-12 col-sm-12 col-md-4 col-lg-4',
	),
);
