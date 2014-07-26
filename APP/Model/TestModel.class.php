<?php
	class TestModel extends Model{
		function get(){
			$sql = "SELECT * FROM `think_report`";
			$res = $this->Mysql->getAll($sql);
			return $res;
		}
	}
?>