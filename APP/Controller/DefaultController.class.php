<?php

class DefaultController extends Controller{
	function index(){
		
		/*$sql = "SELECT * FROM `think_report`";
		$res = $this->Mysql->getAll($sql);*/
		$test = M('Test');
		$data = $test->get();
		$this->Smarty->assign("data", $data);
		$this->Smarty->display("index.tpl");
	}
}
?>