<?php
require('application/models/model.php');
class LogowanieModel extends Model{
	public function __construct(){
		$this->connect();
	}   
	public function __destruct(){
		$this->disconnect();
	} 
   
	public function loguj($login,$pass){
		$rezultat=mysql_query("select * FROM uzytkownicy WHERE login='".$login."' AND haslo='".$pass."'");
		echo mysql_error();
		if(@mysql_num_rows($rezultat)){ 
			return true;
		}else 
			return false;
	}	
}
?>