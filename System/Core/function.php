<?php
	//if(!is_dir(APP_PATH)){die("APP_PATH NO SUCH");}
	if(!file_exists(APP_PATH)){die("APP_PATH NO SUCH");}

	function C($name, $method){
		$file = filExist(APP_PATH."Controller/{$name}Controller".EXT); //判断文件存不在存在，不存在则退出
		require_once($file);
		$controller = $name.'Controller';
		clsExist($controller);//判断类存不在存在，不存在则退出
		$obj = new $controller();
		methExist($obj, $method);//判断方法存不在存在，不存在则退出
		$obj->$method();
	}

	function M($name){
		require_once(APP_PATH."Model/{$name}Model".EXT);
		$model = $name.'Model';
		$obj = new $model;
		return $obj;
	}

	function V($name){
		require_once(APP_PATH."View/{$name}View".EXT);
		$view = $name.'View';
		$obj = new $view;
		return $obj;
	}

	//判断  文件存不存在
	function filExist($file){
		if(file_exists($file)){
			return $file;
		}else{
			exit("{$file}不存在");
		}
	}

	//判断 class 存不在
	function clsExist($class){
		if(!class_exists($class)){
			exit("{$class}类不存在");
		}
	}

	//判断 obj->function 存不存在
	function methExist($obj, $method){
		if(method_exists($obj, $method)){
			return true;
		}else{
			exit("{$method}方法不存在");
		}
	}


?>