<?php
	
	class Controller{
		public $Smarty;
		public $Mysql;
		
		function Controller(){
			global $sysConfig;
			$this->Smarty = ORG('Smarty', 'Smarty',$sysConfig['Smarty_Config'],0);
			/*
			$this->Mysql = ORG('Mysql', 'Mysql','',1);
			$db = $sysConfig['Mysql_Config'];
			$this->Mysql = new Mysql($db['db_host'], $db['db_user'], $db['db_pass'] ,$db['db_name'],'UTF-8');
			*/
		}
	}
?>