<?php

require_once get_stylesheet_directory() . '/includes/config/instance.php';

class Includes extends Instance
{

	protected function __construct()
	{
		$this->includes();

		$this->acf				= new CustomFields();
		$this->content		= new Contents();
		$this->admin			= new Admin();
		$this->config			= new Config();
	}

	private function includes()
	{
		require_once get_stylesheet_directory() . '/includes/config/acf.php';
		require_once get_stylesheet_directory() . '/includes/config/contents.php';
		require_once get_stylesheet_directory() . '/includes/config/admin.php';
		require_once get_stylesheet_directory() . '/includes/config/config.php';
	}

}

$GLOBALS['includes'] = Includes::instance();
