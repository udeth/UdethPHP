<?php
class Model{
	public $Mysql;

	function Model(){
		global $sysConfig;
		$this->Mysql = ORG('Mysql', 'Mysql','',1);
		$db = $sysConfig['Mysql_Config'];
		$this->Mysql = new Mysql($db['db_host'], $db['db_user'], $db['db_pass'] ,$db['db_name'],'UTF-8');
	}
}
?>