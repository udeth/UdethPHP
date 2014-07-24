<?php
	$controller = ucfirst(isset($_GET['controller']) ? $_GET['controller'] : (isset($_GET['c']) ? $_GET['c'] : 'default'));
	$method = ucfirst(isset($_GET['method']) ? $_GET['method'] : (isset($_GET['a']) ? $_GET['a'] : 'index'));
	C($controller, $method);
?>