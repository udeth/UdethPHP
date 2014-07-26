<?php
	
	return $sysConfig = array(
		'Smarty_Config' => array(
			'left_delimiter' => "{",   //模板文件中使用的“左”分隔符号
			'right_delimiter' => "}",   //模板文件中使用的“右”分隔符号
			'template_dir' => APP_PATH."view/".CONTROLLER,  //模板目录
			'compile_dir' => "./runtime/comps/".CONTROLLER,    //里的文件是自动生成的，合成的文件
			'php_handling' => "SMARTY_PHP_ALLOW"
			//'caching' => CSTART,     //设置缓存开启
			//'cache_dir' => PROJECT_PATH."runtime/cache/".TPLSTYLE,  //设置缓存的目录
			//'cache_lifetime' => CTIME,  //设置缓存的时间 
		),
		'Mysql_Config' => array(
			'db_host'       => "127.0.0.1",
			'db_user'       => "root",
			'db_pass'       => "ming",
			'db_name'       => "baoshu",
			'prefix'        => "zx_"
		)
	);

?>