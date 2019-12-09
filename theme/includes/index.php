<?php

class Includes
{

	public function __construct()
	{
		require_once get_stylesheet_directory() . '/includes/config/acf.php';
		require_once get_stylesheet_directory() . '/includes/config/contents.php';
		require_once get_stylesheet_directory() . '/includes/config/admin.php';
		require_once get_stylesheet_directory() . '/includes/config/config.php';
	}

}

new Includes();
