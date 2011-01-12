<?php
class Model{
	public $linkM = null;
	public $db = null;
	
 
    public function connect(){		
		require('config.php');
		$mysql = mysql_connect($CONFIG_HOST, $CONFIG_USER, $CONFIG_PASS);				
		$db = mysql_select_db($CONFIG_DB, $mysql);		
		$this->db=$db;
		$this->linkM=$mysql;
   }
   
   public function disconnect(){
		mysql_close($this->linkM);
   } 
   
}
?>