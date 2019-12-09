<?php

class CustomFields
{
	public function __construct()
	{
		add_action('admin_menu', array($this, 'optionsPage'));
	}

	public static function optionsPage()
	{
		if( function_exists('acf_add_options_page') ) {

			$parent = acf_add_options_page(array(
				'page_title' 	=> 'Opções',
				'menu_title' 	=> 'Opções',
				'menu_slug' 	=> 'options',
				'redirect'  => false,
				'position' => '2.3'
			));

			acf_add_options_sub_page(array(
				'page_title' 	=> 'Home',
				'menu_title' 	=> 'Home',
				'parent_slug' 	=> $parent['menu_slug'],
			));
		}
	}
}

new CustomFields();