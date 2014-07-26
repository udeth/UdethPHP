<?php

if(file_exists(APP_PATH.'Config/config.php')){
	require_once(APP_PATH . 'Config/config.php');
}else{
	require_once(SYS_PATH . 'Conf/config.php');
}
require_once(SYS_PATH . 'Core/Base/Controller' . EXT);
require_once(SYS_PATH . 'Core/Base/Model' . EXT);
require_once(SYS_PATH . 'Core/function.php');
require_once(SYS_PATH . 'Core/route.php');

?>