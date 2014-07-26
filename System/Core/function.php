<?php
	//if(!is_dir(APP_PATH)){die("APP_PATH NO SUCH");}
	if(!file_exists(APP_PATH)){die("APP_PATH NO SUCH");}

	function C($name, $method){
		$file = filExist(APP_PATH."Controller/{$name}Controller".EXT); //判断文件存不在存在，不存在则退出
		require_once($file);
		$controller = ucfirst($name.'Controller');
		clsExist($controller);//判断类存不在存在，不存在则退出
		$obj = new $controller();
		methExist($obj, $method);//判断方法存不在存在，不存在则退出
		$obj->$method();
	}

	function M($name){
		$file = filExist(APP_PATH."Model/{$name}Model".EXT);
		require_once($file);
		$model = ucfirst($name.'Model');
		clsExist($model);
		$obj = new $model;
		return $obj;
	}

	function V($name){
		require_once(APP_PATH."View/{$name}View".EXT);
		$view = ucfirst($name.'View');
		$obj = new $view;
		return $obj;
	}

	function ORG($path, $name, $params=array(),$type=0){
		$name = ucfirst($name);
		$file = filExist(SYS_PATH . 'Library\ORG\\' . $path . '\\' . $name . EXT);
		require_once($file);
		if($type ==0){
			clsExist($name);
			$obj = new $name();
			if(!empty($params)){
				foreach ($params as $key => $value) {
					$obj->$key = $value;
					
				}
			}
			return $obj;
		}
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

	function test(){
		echo "test OK!";
	}


?>