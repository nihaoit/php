<?php
	spl_autoload_register('autoload1');
	spl_autoload_register('autoload2');
	Test1::text();
	Test2::test();

	/*function __autoload($class)
	{
		require __DIR__.'/'.$class.'.php';
	}*/

	function autoload1($class)
	{
		require __DIR__.'/'.$class.'.php';
	}

	function autoload2($class)
	{
		require __DIR__.'/include/'.$class.'.php';
	}