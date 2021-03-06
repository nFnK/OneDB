<?php

/**
 * PHPUnit Autoloader
 *
 * @author cvgellhorn
 */
function loader($class)
{
	$file = 'src/' . $class . '.php';
	if (file_exists($file)) {
		require_once($file);
	}
}

// Register autoloader
spl_autoload_register('loader');