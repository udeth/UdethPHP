<?php
	define('ROOT_PATH', str_replace('System'.dirname(DIRECTORY_SEPARATOR).'Conf', '', dirname(__FILE__)));
	define('SYS_PATH', ROOT_PATH . 'System/');
	define('EXT', '.class.php');
	define('CONTROLLER' ,$controller = ucfirst(isset($_GET['controller']) ? $_GET['controller'] : (isset($_GET['c']) ? $_GET['c'] : 'default')));
	define('METHOD', $method = ucfirst(isset($_GET['method']) ? $_GET['method'] : (isset($_GET['a']) ? $_GET['a'] : 'index')));
?>