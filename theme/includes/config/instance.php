<?php

abstract class Instance
{
	protected static $_instance = null;

	protected function __construct(){}
	protected function __clone(){}

	public static function instance()
	{
		if (is_null(static::$_instance)) {
			static::$_instance = new static;
		}
		return static::$_instance;
	}
}
